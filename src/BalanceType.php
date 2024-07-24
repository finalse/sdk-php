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

class BalanceType implements JsonSerializable {

    /** @var string */
    protected $value ;

    /**
     * BalanceType constructor
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

    public static function AvailableBalance() {
        return new BalanceType("AvailableBalance");
    }

    public static function LockedInBalance() {
        return new BalanceType("LockedInBalance");
    }

    public static function LockedOutBalance() {
        return new BalanceType("LockedOutBalance");
    }

    public static function allPossiblesValues() {
        return array("AvailableBalance",
                     "LockedInBalance",
                     "LockedOutBalance");
    }

    public static function fromString($value) {
        switch ($value) {
            case "AvailableBalance" : return self::AvailableBalance(); break;
            case "LockedInBalance" : return self::LockedInBalance(); break;
            case "LockedOutBalance" : return self::LockedOutBalance(); break;
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

    public function isAvailableBalance() {
        return $this->value === "AvailableBalance";
    }

    public function isLockedInBalance() {
        return $this->value === "LockedInBalance";
    }

    public function isLockedOutBalance() {
        return $this->value === "LockedOutBalance";
    }

    /**
     * Create BalanceType from JSON string
     *
     * @param string $json
     * @return BalanceType
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return BalanceType::fromString($value);
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