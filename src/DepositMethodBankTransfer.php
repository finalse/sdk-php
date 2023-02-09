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

class DepositMethodBankTransfer extends DepositMethod implements JsonSerializable  {

    /** @var string */
    protected $iban ;

    /** @var string | null */
    protected $bank ;


    /** @var string */
    const Type = "DepositMethod.BankTransfer";


    /** @var string */
    const Variant = "BankTransfer";

    /**
     * DepositMethodBankTransfer constructor
     * @param string $iban
     * @param string | null $bank
     */
    function __construct($iban, $bank = null) {
        $this->iban = $iban;
        $this->bank = $bank;
    }

    /**
     * Getter of the field 'iban'.
     *
     * @return string
     */
    public function getIban() {
        return $this->iban;
    }

    /**
     * Getter of the field 'bank'.
     *
     * @return string | null
     */
    public function getBank() {
        return $this->bank;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new DepositMethodBankTransfer where the field 'iban' has been updated with the value passed as parameter.
     *
     * @param string $iban
     * @return DepositMethodBankTransfer
     */
    public function withIban($iban) {
        return new DepositMethodBankTransfer($iban, $this->bank);
    }

    /**
     * Immutable update. Return a new DepositMethodBankTransfer where the field 'bank' has been updated with the value passed as parameter.
     *
     * @param string | null $bank
     * @return DepositMethodBankTransfer
     */
    public function withBank($bank) {
        return new DepositMethodBankTransfer($this->iban, $bank);
    }

    /**
     * Create DepositMethodBankTransfer from JSON string
     *
     * @param string $json
     * @return DepositMethodBankTransfer
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create DepositMethodBankTransfer from associative array of its fields
     *
     * @param array $array
     * @return DepositMethodBankTransfer
     */
    public static function fromArray(array $array) {
        return new DepositMethodBankTransfer($array['iban'],
                                             (isset($array['bank']) ? $array['bank'] : null));
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
                'iban' => $this->iban,
                'bank' => $this->bank,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "DepositMethodBankTransfer{iban=" . $this->iban .
                                         ", bank=" . $this->bank . "}";
    }
}