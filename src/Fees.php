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

class Fees implements JsonSerializable  {

    /** @var FeesPayer */
    protected $payer ;

    /** @var FeesValue */
    protected $value ;

    /** @var Amount */
    protected $amount ;


    /** @var string */
    const Type = "Fees";

    /**
     * Fees constructor
     * @param FeesPayer $payer
     * @param FeesValue $value
     * @param Amount $amount
     */
    function __construct(FeesPayer $payer, FeesValue $value, Amount $amount) {
        $this->payer = $payer;
        $this->value = $value;
        $this->amount = $amount;
    }

    /**
     * Getter of the field 'payer'.
     *
     * @return FeesPayer
     */
    public function getPayer() {
        return $this->payer;
    }

    /**
     * Getter of the field 'value'.
     *
     * @return FeesValue
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Getter of the field 'amount'.
     *
     * @return Amount
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Fees where the field 'payer' has been updated with the value passed as parameter.
     *
     * @param FeesPayer $payer
     * @return Fees
     */
    public function withPayer(FeesPayer $payer) {
        assert($this->payer != null, "In class Fees the param 'payer' of type FeesPayer can not be null");
        return new Fees($payer, $this->value, $this->amount);
    }

    /**
     * Immutable update. Return a new Fees where the field 'value' has been updated with the value passed as parameter.
     *
     * @param FeesValue $value
     * @return Fees
     */
    public function withValue(FeesValue $value) {
        assert($this->value != null, "In class Fees the param 'value' of type FeesValue can not be null");
        return new Fees($this->payer, $value, $this->amount);
    }

    /**
     * Immutable update. Return a new Fees where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return Fees
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class Fees the param 'amount' of type Amount can not be null");
        return new Fees($this->payer, $this->value, $amount);
    }

    /**
     * Create Fees from JSON string
     *
     * @param string $json
     * @return Fees
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Fees from associative array of its fields
     *
     * @param array $array
     * @return Fees
     */
    public static function fromArray(array $array) {
        return new Fees(FeesPayer::fromString($array['payer']),
                        FeesValue::fromArray($array['value']),
                        Amount::fromArray($array['amount']));
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
                'payer' => ((string) $this->payer),
                'value' => ($this->value !== null ? $this->value->toArray() : null),
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Fees{payer=" . $this->payer .
                    ", value=" . $this->value .
                    ", amount=" . $this->amount . "}";
    }
}