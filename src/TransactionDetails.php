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

abstract class TransactionDetails implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isMobileMoneyTransfer() {
        return $this->getType() === TransactionDetailsMobileMoneyTransfer::Type;
    }

    public function isFPayTransfer() {
        return $this->getType() === TransactionDetailsfPayTransfer::Type;
    }

    public function isBankTransfer() {
        return $this->getType() === TransactionDetailsBankTransfer::Type;
    }

    /** @return TransactionDetailsMobileMoneyTransfer | null */
    public function asMobileMoneyTransfer() {
        if($this->getType() == TransactionDetailsMobileMoneyTransfer::Type) return $this;
        else return null;
    }

    /** @return TransactionDetailsfPayTransfer | null */
    public function asFPayTransfer() {
        if($this->getType() == TransactionDetailsfPayTransfer::Type) return $this;
        else return null;
    }

    /** @return TransactionDetailsBankTransfer | null */
    public function asBankTransfer() {
        if($this->getType() == TransactionDetailsBankTransfer::Type) return $this;
        else return null;
    }

    /**
     * Create TransactionDetails from JSON string
     *
     * @param string $json
     * @return TransactionDetails
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransactionDetails from associative array of its fields
     *
     * @param array $array
     * @return TransactionDetails
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === TransactionDetailsMobileMoneyTransfer::Type || str_ends_with('.' . $type, '.' . TransactionDetailsMobileMoneyTransfer::Variant)) return TransactionDetailsMobileMoneyTransfer::fromArray($array);
        else if($type === TransactionDetailsFPayTransfer::Type || str_ends_with('.' . $type, '.' . TransactionDetailsFPayTransfer::Variant)) return TransactionDetailsFPayTransfer::fromArray($array);
        else if($type === TransactionDetailsBankTransfer::Type || str_ends_with('.' . $type, '.' . TransactionDetailsBankTransfer::Variant)) return TransactionDetailsBankTransfer::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'TransactionDetails'" . " Unexpected '_type' = " . $type);
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
        return array();
    }
}