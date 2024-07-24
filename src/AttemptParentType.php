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

class AttemptParentType implements JsonSerializable {

    /** @var string */
    protected $value ;

    /**
     * AttemptParentType constructor
     * @param string $value
     */
    protected function __construct($value) {
        $this->value = $value;
    }

    /**
     * Getter of the field 'value'.
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

    public static function Deposit() {
        return new AttemptParentType("Deposit");
    }

    public static function FormulaPurchase() {
        return new AttemptParentType("FormulaPurchase");
    }

    public static function FundRequest() {
        return new AttemptParentType("FundRequest");
    }

    public static function QuasiTransfer() {
        return new AttemptParentType("QuasiTransfer");
    }

    public static function Refund() {
        return new AttemptParentType("Refund");
    }

    public static function Transfer() {
        return new AttemptParentType("Transfer");
    }

    public static function allPossiblesValues() {
        return array("Deposit",
                     "FormulaPurchase",
                     "FundRequest",
                     "QuasiTransfer",
                     "Refund",
                     "Transfer");
    }

    public static function fromString($value) {
        switch ($value) {
            case "Deposit" : return self::Deposit(); break;
            case "FormulaPurchase" : return self::FormulaPurchase(); break;
            case "FundRequest" : return self::FundRequest(); break;
            case "QuasiTransfer" : return self::QuasiTransfer(); break;
            case "Refund" : return self::Refund(); break;
            case "Transfer" : return self::Transfer(); break;
            default : return null;
        }
    }

    public static function isValid($value) {
        return in_array(self::allPossiblesValues(), $value);
    }

    public static function asOneOf($value, array $selection) {
        foreach($selection as $s) {
            if($s->value === $value) return $s;
        }
        return null;
    }

    public function isDeposit() {
        return $this->value === "Deposit";
    }

    public function isFormulaPurchase() {
        return $this->value === "FormulaPurchase";
    }

    public function isFundRequest() {
        return $this->value === "FundRequest";
    }

    public function isQuasiTransfer() {
        return $this->value === "QuasiTransfer";
    }

    public function isRefund() {
        return $this->value === "Refund";
    }

    public function isTransfer() {
        return $this->value === "Transfer";
    }

    /**
     * Create AttemptParentType from JSON string
     *
     * @param string $json
     * @return AttemptParentType
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return AttemptParentType::fromString($value);
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function jsonSerialize() {
        return json_encode($this->value);
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function toJson() {
        return $this->jsonSerialize();
    }

    public function __toString() {
        return $this->value;
    }
}