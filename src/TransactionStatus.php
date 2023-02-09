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

class TransactionStatus implements JsonSerializable {

    /** @var string */
    protected $value ;

    /**
     * TransactionStatus constructor
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

    public static function Failed() {
        return new TransactionStatus("Failed");
    }

    public static function Successful() {
        return new TransactionStatus("Successful");
    }

    public static function allPossiblesValues() {
        return array("Failed",
                     "Successful");
    }

    public static function fromString($value) {
        switch ($value) {
            case "Failed" : return self::Failed(); break;
            case "Successful" : return self::Successful(); break;
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

    public function isNotFailed() {
        return $this->value !== "Failed";
    }

    public function isNotSuccessful() {
        return $this->value !== "Successful";
    }

    public function isFailed() {
        return $this->value === "Failed";
    }

    public function isSuccessful() {
        return $this->value === "Successful";
    }

    /**
     * Create TransactionStatus from JSON string
     *
     * @param string $json
     * @return TransactionStatus
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return TransactionStatus::fromString($value);
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