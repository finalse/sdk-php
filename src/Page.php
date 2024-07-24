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

class Page implements JsonSerializable  {

    /** @var integer */
    protected $index ;

    /** @var string */
    protected $url ;

    /** @var string */
    protected $queryString ;


    /** @var string */
    const Type = "Page";

    /**
     * Page constructor
     * @param integer $index
     * @param string $url
     * @param string $queryString
     */
    function __construct($index, $url, $queryString) {
        $this->index = $index;
        $this->url = $url;
        $this->queryString = $queryString;
    }

    /**
     * Getter of the field 'index'.
     *
     * @return integer
     */
    public function getIndex() {
        return $this->index;
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
     * Getter of the field 'queryString'.
     *
     * @return string
     */
    public function getQueryString() {
        return $this->queryString;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Page where the field 'index' has been updated with the value passed as parameter.
     *
     * @param integer $index
     * @return Page
     */
    public function withIndex($index) {
        return new Page($index, $this->url, $this->queryString);
    }

    /**
     * Immutable update. Return a new Page where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return Page
     */
    public function withUrl($url) {
        return new Page($this->index, $url, $this->queryString);
    }

    /**
     * Immutable update. Return a new Page where the field 'queryString' has been updated with the value passed as parameter.
     *
     * @param string $queryString
     * @return Page
     */
    public function withQueryString($queryString) {
        return new Page($this->index, $this->url, $queryString);
    }

    /**
     * Create Page from JSON string
     *
     * @param string $json
     * @return Page
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Page from associative array of its fields
     *
     * @param array $array
     * @return Page
     */
    public static function fromArray(array $array) {
        return new Page($array['index'],
                        $array['url'],
                        $array['queryString']);
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
                'index' => $this->index,
                'url' => $this->url,
                'queryString' => $this->queryString,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Page{index=" . $this->index .
                    ", url=" . $this->url .
                    ", queryString=" . $this->queryString . "}";
    }
}