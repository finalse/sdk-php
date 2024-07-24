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


use JsonSerializable;

class MfaProcessConfirm implements JsonSerializable  {

    /** @var string */
    protected $url ;

    /** @var string */
    protected $method ;

    /** @var string */
    protected $placeHolder ;


    /** @var string */
    const Type = "MfaProcessConfirm";

    /**
     * MfaProcessConfirm constructor
     * @param string $url
     * @param string $method
     * @param string $placeHolder
     */
    function __construct($url, $method, $placeHolder) {
        $this->url = $url;
        $this->method = $method;
        $this->placeHolder = $placeHolder;
    }

    /**
     * Getter of the field 'url'.
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Getter of the field 'method'.
     *
     * @return string
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * Getter of the field 'placeHolder'.
     *
     * @return string
     */
    public function getPlaceHolder() {
        return $this->placeHolder;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new MfaProcessConfirm where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return MfaProcessConfirm
     */
    public function withUrl($url) {
        return new MfaProcessConfirm($url, $this->method, $this->placeHolder);
    }

    /**
     * Immutable update. Return a new MfaProcessConfirm where the field 'method' has been updated with the value passed as parameter.
     *
     * @param string $method
     * @return MfaProcessConfirm
     */
    public function withMethod($method) {
        return new MfaProcessConfirm($this->url, $method, $this->placeHolder);
    }

    /**
     * Immutable update. Return a new MfaProcessConfirm where the field 'placeHolder' has been updated with the value passed as parameter.
     *
     * @param string $placeHolder
     * @return MfaProcessConfirm
     */
    public function withPlaceHolder($placeHolder) {
        return new MfaProcessConfirm($this->url, $this->method, $placeHolder);
    }

    /**
     * Create MfaProcessConfirm from JSON string
     *
     * @param string $json
     * @return MfaProcessConfirm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create MfaProcessConfirm from associative array of its fields
     *
     * @param array $array
     * @return MfaProcessConfirm
     */
    public static function fromArray(array $array) {
        return new MfaProcessConfirm($array['url'],
                                     $array['method'],
                                     $array['placeHolder']);
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function jsonSerialize() {
        return json_encode($this->toArray());
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function toJson() {
        return $this->jsonSerialize();
    }

    /**
     * Return associative array representing this object
     *
     * @return array
     */
    public function toArray() {
        return array_filter(
            array(
                'url' => $this->url,
                'method' => $this->method,
                'placeHolder' => $this->placeHolder,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "MfaProcessConfirm{url=" . $this->url .
                                 ", method=" . $this->method .
                                 ", placeHolder=" . $this->placeHolder . "}";
    }
}