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

class OnCompletedCall implements JsonSerializable  {

    /** @var string */
    protected $method ;

    /** @var string */
    protected $url ;


    /** @var string */
    const Type = "OnCompletedCall";

    /**
     * OnCompletedCall constructor
     * @param string $method
     * @param string $url
     */
    function __construct($method, $url) {
        $this->method = $method;
        $this->url = $url;
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
     * Getter of the field 'url'.
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new OnCompletedCall where the field 'method' has been updated with the value passed as parameter.
     *
     * @param string $method
     * @return OnCompletedCall
     */
    public function withMethod($method) {
        return new OnCompletedCall($method, $this->url);
    }

    /**
     * Immutable update. Return a new OnCompletedCall where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return OnCompletedCall
     */
    public function withUrl($url) {
        return new OnCompletedCall($this->method, $url);
    }

    /**
     * Create OnCompletedCall from JSON string
     *
     * @param string $json
     * @return OnCompletedCall
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create OnCompletedCall from associative array of its fields
     *
     * @param array $array
     * @return OnCompletedCall
     */
    public static function fromArray(array $array) {
        return new OnCompletedCall($array['method'],
                                   $array['url']);
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
                'method' => $this->method,
                'url' => $this->url,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "OnCompletedCall{method=" . $this->method .
                               ", url=" . $this->url . "}";
    }
}