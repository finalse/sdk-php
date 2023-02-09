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

class FeesPayer implements JsonSerializable {

    /** @var string */
    protected $value ;

    /**
     * FeesPayer constructor
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

    public static function Receiver() {
        return new FeesPayer("Receiver");
    }

    public static function Sender() {
        return new FeesPayer("Sender");
    }

    public static function allPossiblesValues() {
        return array("Receiver",
                     "Sender");
    }

    public static function fromString($value) {
        switch ($value) {
            case "Receiver" : return self::Receiver(); break;
            case "Sender" : return self::Sender(); break;
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

    public function isNotReceiver() {
        return $this->value !== "Receiver";
    }

    public function isNotSender() {
        return $this->value !== "Sender";
    }

    public function isReceiver() {
        return $this->value === "Receiver";
    }

    public function isSender() {
        return $this->value === "Sender";
    }

    /**
     * Create FeesPayer from JSON string
     *
     * @param string $json
     * @return FeesPayer
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return FeesPayer::fromString($value);
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