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


use JsonSerializable;

class Man implements JsonSerializable  {

    /** @var string */
    protected $number ;


    /** @var string */
    const Type = "Man";

    /**
     * Man constructor
     * @param string $number
     */
    function __construct($number) {
        $this->number = $number;
    }

    /**
     * Getter of the field 'number'.
     *
     * @return string
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Man where the field 'number' has been updated with the value passed as parameter.
     *
     * @param string $number
     * @return Man
     */
    public function withNumber($number) {
        return new Man($number);
    }

    /**
     * Create Man from JSON string
     *
     * @param string $json
     * @return Man
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Man from associative array of its fields
     *
     * @param array $array
     * @return Man
     */
    public static function fromArray(array $array) {
        return new Man($array['number']);
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
                'number' => $this->number,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Man{number=" . $this->number . "}";
    }
}