<?php namespace Finalse\Sdk;
/*
   Copyright © 2024 Finalse Cloud

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       https://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/


class Http {

    static function ListAll($path, $queryString, $headers, $converter, Auth $auth) {
        $array = Http::call($path, "GET", $headers, $queryString, null, $auth);
        return RestCollection::fromArray($array, $converter);
    }

    static function Get($path, $queryString, $headers, $converter, Auth $auth) {
        $array = Http::call($path, "GET", $headers, $queryString, null, $auth);
        return call_user_func_array($converter, array($array));
    }

    static function Post($path, $body, $queryString, $headers, $converter, Auth $auth) {
        $array = Http::call($path, "POST", $headers, $queryString, $body == null ? null : $body, $auth);
        return call_user_func_array($converter, array($array));
    }

    static function Patch($path, $body, $queryString, $headers, $converter, Auth $auth) {
        $array = Http::call($path, "PATCH", $headers, $queryString, $body == null ? null : $body, $auth);
        return call_user_func_array($converter, array($array));
    }

    static function Put($path, $body, $queryString, $headers, $converter, Auth $auth) {
        $array = Http::call($path, "PUT", $headers, $queryString, $body == null ? null : $body, $auth);
        return call_user_func_array($converter, array($array));
    }

    static function Delete($path, $body, $queryString, $headers, $converter, Auth $auth) {
        $cv = $converter == null ? 'finalseIgnoreConverter' : $converter;
        $array = Http::call($path, "DELETE", $headers, $queryString, $body == null ? null : $body,  $auth);
        return call_user_func_array($cv, array($array));
    }


    private static function call($path, $method,  $headers, $queryString, $body, Auth $auth) {
        $url = Sdk::SCHEME . '://' . Sdk::HOST . $path . ($queryString ?: "");
        $bodyHash = $body == null ? null : Http::sha256($body);
        $explodedTime = explode(' ', microtime());
        $nonce = $explodedTime[1] . str_pad(substr($explodedTime[0], 2, 3), 3, '0');
        $signedHeaders = Http::computeSignedHeaders($body, $headers, $auth);
        $request =
            new Request(
                $nonce,
                $signedHeaders,
                $method,
                $path,
                $queryString,
                $bodyHash);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, Http::prepareHeaders(array_merge($signedHeaders, array(
            "Finalse-Nonce" =>  $request->nonce,
            "Finalse-SignedHeaders" =>  implode(",", array_keys($signedHeaders)),
            "Finalse-Signature" =>  "SHA512 " . Http::sign($request->toMessage(), $auth->getSecretKey()),
        ))));
        switch ($method) {
            case "GET":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
                break;
            case "POST":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
                break;
            case "PATCH":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
                break;
            case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
                break;
        }

        $result = curl_exec($curl);
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $statusMessage = "";
        if($result === false)
            throw new \Exception('curl exception: ' . curl_error($curl));

        curl_close($curl);

        if(200 <= $statusCode AND $statusCode < 300){
            $result = json_decode($result, true);

            if(!is_array($result))
                throw new \Exception('json decode exception');

            return $result;
        }
        else {
            $body = $result;
            throw new CallException($statusCode, $statusMessage, $body);
        }
    }

    private static function computeSignedHeaders($body, $headers, Auth $auth){
        return (
        array_merge(
            array("Accept" =>  "application/json", "User-Agent" =>  "Sdk PHP " . Sdk::VERSION, "Authorization" =>  "Bearer " . $auth->getToken()),
            $headers,
            $body == null ? array() : array("Content-Type" => "application/json"))
        );
    }
    private static function prepareHeaders($headers){
        return (
            array_map(
                function ($headerName, $headerValue){ return $headerName . ": " . $headerValue; },
                array_keys($headers),
                $headers
            )
        );
    }

    static private function sha256($message) {
        return base64_encode(hash('sha256', $message, true));
    }

    static private function sign($message, $privateKey) {
        return base64_encode(hash_hmac('sha512',  $message, $privateKey, true));
    }
}