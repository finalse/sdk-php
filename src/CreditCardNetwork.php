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

class CreditCardNetwork implements JsonSerializable {

    /** @var string */
    protected $value ;

    /**
     * CreditCardNetwork constructor
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

    public static function AmericanExpress() {
        return new CreditCardNetwork("AmericanExpress");
    }

    public static function CarteBlanche() {
        return new CreditCardNetwork("CarteBlanche");
    }

    public static function ChinaUnionPay() {
        return new CreditCardNetwork("ChinaUnionPay");
    }

    public static function DinersClub() {
        return new CreditCardNetwork("DinersClub");
    }

    public static function Discover() {
        return new CreditCardNetwork("Discover");
    }

    public static function JCB() {
        return new CreditCardNetwork("JCB");
    }

    public static function Laser() {
        return new CreditCardNetwork("Laser");
    }

    public static function Maestro() {
        return new CreditCardNetwork("Maestro");
    }

    public static function MasterCard() {
        return new CreditCardNetwork("MasterCard");
    }

    public static function Solo() {
        return new CreditCardNetwork("Solo");
    }

    public static function Switch() {
        return new CreditCardNetwork("Switch");
    }

    public static function UKMaestro() {
        return new CreditCardNetwork("UKMaestro");
    }

    public static function Visa() {
        return new CreditCardNetwork("Visa");
    }

    public static function allPossiblesValues() {
        return array("AmericanExpress",
                     "CarteBlanche",
                     "ChinaUnionPay",
                     "DinersClub",
                     "Discover",
                     "JCB",
                     "Laser",
                     "Maestro",
                     "MasterCard",
                     "Solo",
                     "Switch",
                     "UKMaestro",
                     "Visa");
    }

    public static function fromString($value) {
        switch ($value) {
            case "AmericanExpress" : return self::AmericanExpress(); break;
            case "CarteBlanche" : return self::CarteBlanche(); break;
            case "ChinaUnionPay" : return self::ChinaUnionPay(); break;
            case "DinersClub" : return self::DinersClub(); break;
            case "Discover" : return self::Discover(); break;
            case "JCB" : return self::JCB(); break;
            case "Laser" : return self::Laser(); break;
            case "Maestro" : return self::Maestro(); break;
            case "MasterCard" : return self::MasterCard(); break;
            case "Solo" : return self::Solo(); break;
            case "Switch" : return self::Switch(); break;
            case "UKMaestro" : return self::UKMaestro(); break;
            case "Visa" : return self::Visa(); break;
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

    public function isNotAmericanExpress() {
        return $this->value !== "AmericanExpress";
    }

    public function isNotCarteBlanche() {
        return $this->value !== "CarteBlanche";
    }

    public function isNotChinaUnionPay() {
        return $this->value !== "ChinaUnionPay";
    }

    public function isNotDinersClub() {
        return $this->value !== "DinersClub";
    }

    public function isNotDiscover() {
        return $this->value !== "Discover";
    }

    public function isNotJcb() {
        return $this->value !== "JCB";
    }

    public function isNotLaser() {
        return $this->value !== "Laser";
    }

    public function isNotMaestro() {
        return $this->value !== "Maestro";
    }

    public function isNotMasterCard() {
        return $this->value !== "MasterCard";
    }

    public function isNotSolo() {
        return $this->value !== "Solo";
    }

    public function isNotSwitch() {
        return $this->value !== "Switch";
    }

    public function isNotUkMaestro() {
        return $this->value !== "UKMaestro";
    }

    public function isNotVisa() {
        return $this->value !== "Visa";
    }

    public function isAmericanExpress() {
        return $this->value === "AmericanExpress";
    }

    public function isCarteBlanche() {
        return $this->value === "CarteBlanche";
    }

    public function isChinaUnionPay() {
        return $this->value === "ChinaUnionPay";
    }

    public function isDinersClub() {
        return $this->value === "DinersClub";
    }

    public function isDiscover() {
        return $this->value === "Discover";
    }

    public function isJcb() {
        return $this->value === "JCB";
    }

    public function isLaser() {
        return $this->value === "Laser";
    }

    public function isMaestro() {
        return $this->value === "Maestro";
    }

    public function isMasterCard() {
        return $this->value === "MasterCard";
    }

    public function isSolo() {
        return $this->value === "Solo";
    }

    public function isSwitch() {
        return $this->value === "Switch";
    }

    public function isUkMaestro() {
        return $this->value === "UKMaestro";
    }

    public function isVisa() {
        return $this->value === "Visa";
    }

    /**
     * Create CreditCardNetwork from JSON string
     *
     * @param string $json
     * @return CreditCardNetwork
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return CreditCardNetwork::fromString($value);
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