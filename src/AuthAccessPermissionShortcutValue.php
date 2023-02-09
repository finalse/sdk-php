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

class AuthAccessPermissionShortcutValue implements JsonSerializable {

    /** @var string */
    protected $value ;

    /**
     * AuthAccessPermissionShortcutValue constructor
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

    public static function FullAccess() {
        return new AuthAccessPermissionShortcutValue("FullAccess");
    }

    public static function ReadOnly() {
        return new AuthAccessPermissionShortcutValue("ReadOnly");
    }

    public static function ReadWriteMoneyOutConfirmation() {
        return new AuthAccessPermissionShortcutValue("ReadWriteMoneyOutConfirmation");
    }

    public static function ReadWriteNoMoneyOut() {
        return new AuthAccessPermissionShortcutValue("ReadWriteNoMoneyOut");
    }

    public static function allPossiblesValues() {
        return array("FullAccess",
                     "ReadOnly",
                     "ReadWriteMoneyOutConfirmation",
                     "ReadWriteNoMoneyOut");
    }

    public static function fromString($value) {
        switch ($value) {
            case "FullAccess" : return self::FullAccess(); break;
            case "ReadOnly" : return self::ReadOnly(); break;
            case "ReadWriteMoneyOutConfirmation" : return self::ReadWriteMoneyOutConfirmation(); break;
            case "ReadWriteNoMoneyOut" : return self::ReadWriteNoMoneyOut(); break;
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

    public function isNotFullAccess() {
        return $this->value !== "FullAccess";
    }

    public function isNotReadOnly() {
        return $this->value !== "ReadOnly";
    }

    public function isNotReadWriteMoneyOutConfirmation() {
        return $this->value !== "ReadWriteMoneyOutConfirmation";
    }

    public function isNotReadWriteNoMoneyOut() {
        return $this->value !== "ReadWriteNoMoneyOut";
    }

    public function isFullAccess() {
        return $this->value === "FullAccess";
    }

    public function isReadOnly() {
        return $this->value === "ReadOnly";
    }

    public function isReadWriteMoneyOutConfirmation() {
        return $this->value === "ReadWriteMoneyOutConfirmation";
    }

    public function isReadWriteNoMoneyOut() {
        return $this->value === "ReadWriteNoMoneyOut";
    }

    /**
     * Create AuthAccessPermissionShortcutValue from JSON string
     *
     * @param string $json
     * @return AuthAccessPermissionShortcutValue
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return AuthAccessPermissionShortcutValue::fromString($value);
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