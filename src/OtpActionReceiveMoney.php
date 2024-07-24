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

class OtpActionReceiveMoney extends OtpAction implements JsonSerializable  {

    /** @var Amount */
    protected $amount ;

    /** @var string */
    protected $senderName ;


    /** @var string */
    const Type = "OtpAction.ReceiveMoney";


    /** @var string */
    const Variant = "ReceiveMoney";

    /**
     * OtpActionReceiveMoney constructor
     * @param Amount $amount
     * @param string $senderName
     */
    function __construct(Amount $amount, $senderName) {
        $this->amount = $amount;
        $this->senderName = $senderName;
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
     * Getter of the field 'senderName'.
     *
     * @return string
     */
    public function getSenderName() {
        return $this->senderName;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new OtpActionReceiveMoney where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return OtpActionReceiveMoney
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class OtpActionReceiveMoney the param 'amount' of type Amount can not be null");
        return new OtpActionReceiveMoney($amount, $this->senderName);
    }

    /**
     * Immutable update. Return a new OtpActionReceiveMoney where the field 'senderName' has been updated with the value passed as parameter.
     *
     * @param string $senderName
     * @return OtpActionReceiveMoney
     */
    public function withSenderName($senderName) {
        return new OtpActionReceiveMoney($this->amount, $senderName);
    }

    /**
     * Create OtpActionReceiveMoney from JSON string
     *
     * @param string $json
     * @return OtpActionReceiveMoney
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create OtpActionReceiveMoney from associative array of its fields
     *
     * @param array $array
     * @return OtpActionReceiveMoney
     */
    public static function fromArray(array $array) {
        return new OtpActionReceiveMoney(Amount::fromArray($array['amount']),
                                         $array['senderName']);
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
                '_type' => self::Variant, 
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'senderName' => $this->senderName,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "OtpActionReceiveMoney{amount=" . $this->amount .
                                     ", senderName=" . $this->senderName . "}";
    }
}