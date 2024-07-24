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

class Amount implements JsonSerializable  {

    /** @var number */
    protected $value ;

    /** @var AmountCurrency */
    protected $currency ;


    /** @var string */
    const Type = "Amount";

    /**
     * Amount constructor
     * @param number $value
     * @param AmountCurrency $currency
     */
    function __construct($value, AmountCurrency $currency) {
        $this->value = $value;
        $this->currency = $currency;
    }

    /**
     * Getter of the field 'value'.
     *
     * @return number
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Getter of the field 'currency'.
     *
     * @return AmountCurrency
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Amount where the field 'value' has been updated with the value passed as parameter.
     *
     * @param number $value
     * @return Amount
     */
    public function withValue($value) {
        return new Amount($value, $this->currency);
    }

    /**
     * Immutable update. Return a new Amount where the field 'currency' has been updated with the value passed as parameter.
     *
     * @param AmountCurrency $currency
     * @return Amount
     */
    public function withCurrency(AmountCurrency $currency) {
        assert($this->currency != null, "In class Amount the param 'currency' of type AmountCurrency can not be null");
        return new Amount($this->value, $currency);
    }

    /**
     * Create Amount from JSON string
     *
     * @param string $json
     * @return Amount
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Amount from associative array of its fields
     *
     * @param array $array
     * @return Amount
     */
    public static function fromArray(array $array) {
        return new Amount($array['value'],
                          AmountCurrency::fromArray($array['currency']));
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
                'value' => $this->value,
                'currency' => ($this->currency !== null ? $this->currency->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Amount{value=" . $this->value .
                      ", currency=" . $this->currency . "}";
    }
}