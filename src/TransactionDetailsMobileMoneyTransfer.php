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

class TransactionDetailsMobileMoneyTransfer extends TransactionDetails implements JsonSerializable  {

    /** @var string | null */
    protected $providerTransactionId ;


    /** @var string */
    const Type = "TransactionDetails.MobileMoneyTransfer";


    /** @var string */
    const Variant = "MobileMoneyTransfer";

    /**
     * TransactionDetailsMobileMoneyTransfer constructor
     * @param string | null $providerTransactionId
     */
    function __construct($providerTransactionId = null) {
        $this->providerTransactionId = $providerTransactionId;
    }

    /**
     * Getter of the field 'providerTransactionId'.
     *
     * @return string | null
     */
    public function getProviderTransactionId() {
        return $this->providerTransactionId;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new TransactionDetailsMobileMoneyTransfer where the field 'providerTransactionId' has been updated with the value passed as parameter.
     *
     * @param string | null $providerTransactionId
     * @return TransactionDetailsMobileMoneyTransfer
     */
    public function withProviderTransactionId($providerTransactionId) {
        return new TransactionDetailsMobileMoneyTransfer($providerTransactionId);
    }

    /**
     * Create TransactionDetailsMobileMoneyTransfer from JSON string
     *
     * @param string $json
     * @return TransactionDetailsMobileMoneyTransfer
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransactionDetailsMobileMoneyTransfer from associative array of its fields
     *
     * @param array $array
     * @return TransactionDetailsMobileMoneyTransfer
     */
    public static function fromArray(array $array) {
        return new TransactionDetailsMobileMoneyTransfer((isset($array['providerTransactionId']) ? $array['providerTransactionId'] : null));
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
                'providerTransactionId' => $this->providerTransactionId,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransactionDetailsMobileMoneyTransfer{providerTransactionId=" . $this->providerTransactionId . "}";
    }
}