<?php namespace Finalse\Sdk;
/*
   Copyright © 2023 Finalse Cloud

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


class Request {
    public $nonce;
    public $signedHeaders;
    public $method;
    public $path;
    public $queryString;
    public $bodyHash;


    function __construct($nonce,
                         $signedHeaders,
                         $method,
                         $path,
                         $queryString,
                         $bodyHash){
        $this->nonce = $nonce;
        $this->signedHeaders = $signedHeaders;
        $this->method = $method;
        $this->path = $path;
        $this->queryString = $queryString;
        $this->bodyHash = $bodyHash;
    }

    function toMessage() {
        return (
            $this->nonce .
            implode ("",array_map(function ($headerName, $headerValue){ return $headerName . ":" . $headerValue; }, array_keys($this->signedHeaders), $this->signedHeaders )) .
            $this->method .
            $this->path .
            ($this->queryString ?: "") .
            ($this->bodyHash ?: "")
        );
    }
}