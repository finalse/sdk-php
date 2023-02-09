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

class Sending implements JsonSerializable {

    /** @var string */
    protected $value ;

    /**
     * Sending constructor
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

    public static function NotYetDone() {
        return new Sending("NotYetDone");
    }

    public static function PartiallyDone() {
        return new Sending("PartiallyDone");
    }

    public static function TotallyDone() {
        return new Sending("TotallyDone");
    }

    public static function allPossiblesValues() {
        return array("NotYetDone",
                     "PartiallyDone",
                     "TotallyDone");
    }

    public static function fromString($value) {
        switch ($value) {
            case "NotYetDone" : return self::NotYetDone(); break;
            case "PartiallyDone" : return self::PartiallyDone(); break;
            case "TotallyDone" : return self::TotallyDone(); break;
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

    public function isNotNotYetDone() {
        return $this->value !== "NotYetDone";
    }

    public function isNotPartiallyDone() {
        return $this->value !== "PartiallyDone";
    }

    public function isNotTotallyDone() {
        return $this->value !== "TotallyDone";
    }

    public function isNotYetDone() {
        return $this->value === "NotYetDone";
    }

    public function isPartiallyDone() {
        return $this->value === "PartiallyDone";
    }

    public function isTotallyDone() {
        return $this->value === "TotallyDone";
    }

    /**
     * Create Sending from JSON string
     *
     * @param string $json
     * @return Sending
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return Sending::fromString($value);
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