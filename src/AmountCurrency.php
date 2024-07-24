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

class AmountCurrency implements JsonSerializable  {

    /** @var string */
    protected $code ;

    /** @var string */
    protected $unit ;


    /** @var string */
    const Type = "AmountCurrency";

    /**
     * AmountCurrency constructor
     * @param string $code
     * @param string $unit
     */
    function __construct($code, $unit) {
        $this->code = $code;
        $this->unit = $unit;
    }

    /**
     * Getter of the field 'code'.
     *
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Getter of the field 'unit'.
     *
     * @return string
     */
    public function getUnit() {
        return $this->unit;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new AmountCurrency where the field 'code' has been updated with the value passed as parameter.
     *
     * @param string $code
     * @return AmountCurrency
     */
    public function withCode($code) {
        return new AmountCurrency($code, $this->unit);
    }

    /**
     * Immutable update. Return a new AmountCurrency where the field 'unit' has been updated with the value passed as parameter.
     *
     * @param string $unit
     * @return AmountCurrency
     */
    public function withUnit($unit) {
        return new AmountCurrency($this->code, $unit);
    }

    /**
     * Create AmountCurrency from JSON string
     *
     * @param string $json
     * @return AmountCurrency
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create AmountCurrency from associative array of its fields
     *
     * @param array $array
     * @return AmountCurrency
     */
    public static function fromArray(array $array) {
        return new AmountCurrency($array['code'],
                                  $array['unit']);
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
                'code' => $this->code,
                'unit' => $this->unit,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "AmountCurrency{code=" . $this->code .
                              ", unit=" . $this->unit . "}";
    }
}