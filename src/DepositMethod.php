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

abstract class DepositMethod implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isMobileMoney() {
        return $this->getType() === DepositMethodMobileMoney::Type;
    }

    public function isCreditCard() {
        return $this->getType() === DepositMethodCreditCard::Type;
    }

    public function isBankTransfer() {
        return $this->getType() === DepositMethodBankTransfer::Type;
    }

    public function isNotMobileMoney() {
        return $this->getType() !== DepositMethodMobileMoney::Type; 
    }

    public function isNotCreditCard() {
        return $this->getType() !== DepositMethodCreditCard::Type; 
    }

    public function isNotBankTransfer() {
        return $this->getType() !== DepositMethodBankTransfer::Type; 
    }

    /**
     * Create DepositMethod from JSON string
     *
     * @param string $json
     * @return DepositMethod
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create DepositMethod from associative array of its fields
     *
     * @param array $array
     * @return DepositMethod
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === DepositMethodMobileMoney::Type || str_ends_with('.' . $type, '.' . DepositMethodMobileMoney::Variant)) return DepositMethodMobileMoney::fromArray($array);
        else if($type === DepositMethodCreditCard::Type || str_ends_with('.' . $type, '.' . DepositMethodCreditCard::Variant)) return DepositMethodCreditCard::fromArray($array);
        else if($type === DepositMethodBankTransfer::Type || str_ends_with('.' . $type, '.' . DepositMethodBankTransfer::Variant)) return DepositMethodBankTransfer::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'DepositMethod'" . " Unexpected '_type' = " . $type);
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
}