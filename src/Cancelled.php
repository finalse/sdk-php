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

class Cancelled implements JsonSerializable  {

    /** @var boolean */
    protected $afterTimeout ;


    /** @var string */
    const Type = "Cancelled";

    /**
     * Cancelled constructor
     * @param boolean $afterTimeout
     */
    function __construct($afterTimeout) {
        $this->afterTimeout = $afterTimeout;
    }

    /**
     * Getter of the field 'afterTimeout'.
     *
     * @return boolean
     */
    public function afterTimeout() {
        return $this->afterTimeout;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Cancelled where the field 'afterTimeout' has been updated with the value passed as parameter.
     *
     * @param boolean $afterTimeout
     * @return Cancelled
     */
    public function withAfterTimeout($afterTimeout) {
        return new Cancelled($afterTimeout);
    }

    /**
     * Create Cancelled from JSON string
     *
     * @param string $json
     * @return Cancelled
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Cancelled from associative array of its fields
     *
     * @param array $array
     * @return Cancelled
     */
    public static function fromArray(array $array) {
        return new Cancelled($array['afterTimeout']);
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
                'afterTimeout' => $this->afterTimeout,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Cancelled{afterTimeout=" . $this->afterTimeout . "}";
    }
}