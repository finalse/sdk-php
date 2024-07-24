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

class MoneyAccountIdentifierType implements JsonSerializable {

    /** @var string */
    protected $value ;

    /**
     * MoneyAccountIdentifierType constructor
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

    public static function Iban() {
        return new MoneyAccountIdentifierType("Iban");
    }

    public static function Id() {
        return new MoneyAccountIdentifierType("Id");
    }

    public static function Man() {
        return new MoneyAccountIdentifierType("Man");
    }

    public static function MobileNumber() {
        return new MoneyAccountIdentifierType("MobileNumber");
    }

    public static function allPossiblesValues() {
        return array("Iban",
                     "Id",
                     "Man",
                     "MobileNumber");
    }

    public static function fromString($value) {
        switch ($value) {
            case "Iban" : return self::Iban(); break;
            case "Id" : return self::Id(); break;
            case "Man" : return self::Man(); break;
            case "MobileNumber" : return self::MobileNumber(); break;
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

    public function isIban() {
        return $this->value === "Iban";
    }

    public function isId() {
        return $this->value === "Id";
    }

    public function isMan() {
        return $this->value === "Man";
    }

    public function isMobileNumber() {
        return $this->value === "MobileNumber";
    }

    /**
     * Create MoneyAccountIdentifierType from JSON string
     *
     * @param string $json
     * @return MoneyAccountIdentifierType
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return MoneyAccountIdentifierType::fromString($value);
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