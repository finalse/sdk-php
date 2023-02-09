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

class PurchaseLabel implements JsonSerializable {

    /** @var string */
    protected $value ;

    /**
     * PurchaseLabel constructor
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

    public static function Buy() {
        return new PurchaseLabel("Buy");
    }

    public static function Donate() {
        return new PurchaseLabel("Donate");
    }

    public static function Participate() {
        return new PurchaseLabel("Participate");
    }

    public static function Pay() {
        return new PurchaseLabel("Pay");
    }

    public static function Subscribe() {
        return new PurchaseLabel("Subscribe");
    }

    public static function allPossiblesValues() {
        return array("Buy",
                     "Donate",
                     "Participate",
                     "Pay",
                     "Subscribe");
    }

    public static function fromString($value) {
        switch ($value) {
            case "Buy" : return self::Buy(); break;
            case "Donate" : return self::Donate(); break;
            case "Participate" : return self::Participate(); break;
            case "Pay" : return self::Pay(); break;
            case "Subscribe" : return self::Subscribe(); break;
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

    public function isNotBuy() {
        return $this->value !== "Buy";
    }

    public function isNotDonate() {
        return $this->value !== "Donate";
    }

    public function isNotParticipate() {
        return $this->value !== "Participate";
    }

    public function isNotPay() {
        return $this->value !== "Pay";
    }

    public function isNotSubscribe() {
        return $this->value !== "Subscribe";
    }

    public function isBuy() {
        return $this->value === "Buy";
    }

    public function isDonate() {
        return $this->value === "Donate";
    }

    public function isParticipate() {
        return $this->value === "Participate";
    }

    public function isPay() {
        return $this->value === "Pay";
    }

    public function isSubscribe() {
        return $this->value === "Subscribe";
    }

    /**
     * Create PurchaseLabel from JSON string
     *
     * @param string $json
     * @return PurchaseLabel
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return PurchaseLabel::fromString($value);
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