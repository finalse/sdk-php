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

class FeesValue implements JsonSerializable  {

    /** @var number */
    protected $fixed ;

    /** @var number */
    protected $percent ;


    /** @var string */
    const Type = "FeesValue";

    /**
     * FeesValue constructor
     * @param number $fixed
     * @param number $percent
     */
    function __construct($fixed, $percent) {
        $this->fixed = $fixed;
        $this->percent = $percent;
    }

    /**
     * Getter of the field 'fixed'.
     *
     * @return number
     */
    public function getFixed() {
        return $this->fixed;
    }

    /**
     * Getter of the field 'percent'.
     *
     * @return number
     */
    public function getPercent() {
        return $this->percent;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new FeesValue where the field 'fixed' has been updated with the value passed as parameter.
     *
     * @param number $fixed
     * @return FeesValue
     */
    public function withFixed($fixed) {
        return new FeesValue($fixed, $this->percent);
    }

    /**
     * Immutable update. Return a new FeesValue where the field 'percent' has been updated with the value passed as parameter.
     *
     * @param number $percent
     * @return FeesValue
     */
    public function withPercent($percent) {
        return new FeesValue($this->fixed, $percent);
    }

    /**
     * Create FeesValue from JSON string
     *
     * @param string $json
     * @return FeesValue
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create FeesValue from associative array of its fields
     *
     * @param array $array
     * @return FeesValue
     */
    public static function fromArray(array $array) {
        return new FeesValue($array['fixed'],
                             $array['percent']);
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
                'fixed' => $this->fixed,
                'percent' => $this->percent,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "FeesValue{fixed=" . $this->fixed .
                         ", percent=" . $this->percent . "}";
    }
}