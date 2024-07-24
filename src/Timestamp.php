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

class Timestamp implements JsonSerializable  {

    /** @var float */
    protected $milliseconds ;

    /** @var float */
    protected $seconds ;


    /** @var string */
    const Type = "Timestamp";

    /**
     * Timestamp constructor
     * @param float $milliseconds
     * @param float $seconds
     */
    function __construct($milliseconds, $seconds) {
        $this->milliseconds = $milliseconds;
        $this->seconds = $seconds;
    }

    /**
     * Getter of the field 'milliseconds'.
     *
     * @return float
     */
    public function getMilliseconds() {
        return $this->milliseconds;
    }

    /**
     * Getter of the field 'seconds'.
     *
     * @return float
     */
    public function getSeconds() {
        return $this->seconds;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Timestamp where the field 'milliseconds' has been updated with the value passed as parameter.
     *
     * @param float $milliseconds
     * @return Timestamp
     */
    public function withMilliseconds($milliseconds) {
        return new Timestamp($milliseconds, $this->seconds);
    }

    /**
     * Immutable update. Return a new Timestamp where the field 'seconds' has been updated with the value passed as parameter.
     *
     * @param float $seconds
     * @return Timestamp
     */
    public function withSeconds($seconds) {
        return new Timestamp($this->milliseconds, $seconds);
    }

    /**
     * Create Timestamp from JSON string
     *
     * @param string $json
     * @return Timestamp
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Timestamp from associative array of its fields
     *
     * @param array $array
     * @return Timestamp
     */
    public static function fromArray(array $array) {
        return new Timestamp($array['milliseconds'],
                             $array['seconds']);
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
                'milliseconds' => $this->milliseconds,
                'seconds' => $this->seconds,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Timestamp{milliseconds=" . $this->milliseconds .
                         ", seconds=" . $this->seconds . "}";
    }
}