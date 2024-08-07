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

class OtpActionMoneyMove extends OtpAction implements JsonSerializable  {

    /** @var Amount */
    protected $amount ;

    /** @var string */
    protected $receiverName ;


    /** @var string */
    const Type = "OtpAction.MoneyMove";


    /** @var string */
    const Variant = "MoneyMove";

    /**
     * OtpActionMoneyMove constructor
     * @param Amount $amount
     * @param string $receiverName
     */
    function __construct(Amount $amount, $receiverName) {
        $this->amount = $amount;
        $this->receiverName = $receiverName;
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
     * Getter of the field 'receiverName'.
     *
     * @return string
     */
    public function getReceiverName() {
        return $this->receiverName;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new OtpActionMoneyMove where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return OtpActionMoneyMove
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class OtpActionMoneyMove the param 'amount' of type Amount can not be null");
        return new OtpActionMoneyMove($amount, $this->receiverName);
    }

    /**
     * Immutable update. Return a new OtpActionMoneyMove where the field 'receiverName' has been updated with the value passed as parameter.
     *
     * @param string $receiverName
     * @return OtpActionMoneyMove
     */
    public function withReceiverName($receiverName) {
        return new OtpActionMoneyMove($this->amount, $receiverName);
    }

    /**
     * Create OtpActionMoneyMove from JSON string
     *
     * @param string $json
     * @return OtpActionMoneyMove
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create OtpActionMoneyMove from associative array of its fields
     *
     * @param array $array
     * @return OtpActionMoneyMove
     */
    public static function fromArray(array $array) {
        return new OtpActionMoneyMove(Amount::fromArray($array['amount']),
                                      $array['receiverName']);
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
                'receiverName' => $this->receiverName,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "OtpActionMoneyMove{amount=" . $this->amount .
                                  ", receiverName=" . $this->receiverName . "}";
    }
}