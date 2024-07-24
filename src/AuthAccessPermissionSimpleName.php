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

class AuthAccessPermissionSimpleName implements JsonSerializable {

    /** @var string */
    protected $value ;

    /**
     * AuthAccessPermissionSimpleName constructor
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
        return new AuthAccessPermissionSimpleName("FullAccess");
    }

    public static function MoneyInOnly() {
        return new AuthAccessPermissionSimpleName("MoneyInOnly");
    }

    public static function ReadMoneyIn() {
        return new AuthAccessPermissionSimpleName("ReadMoneyIn");
    }

    public static function ReadOnly() {
        return new AuthAccessPermissionSimpleName("ReadOnly");
    }

    public static function ReadWriteNoMoneyOut() {
        return new AuthAccessPermissionSimpleName("ReadWriteNoMoneyOut");
    }

    public static function allPossiblesValues() {
        return array("FullAccess",
                     "MoneyInOnly",
                     "ReadMoneyIn",
                     "ReadOnly",
                     "ReadWriteNoMoneyOut");
    }

    public static function fromString($value) {
        switch ($value) {
            case "FullAccess" : return self::FullAccess(); break;
            case "MoneyInOnly" : return self::MoneyInOnly(); break;
            case "ReadMoneyIn" : return self::ReadMoneyIn(); break;
            case "ReadOnly" : return self::ReadOnly(); break;
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

    public function isFullAccess() {
        return $this->value === "FullAccess";
    }

    public function isMoneyInOnly() {
        return $this->value === "MoneyInOnly";
    }

    public function isReadMoneyIn() {
        return $this->value === "ReadMoneyIn";
    }

    public function isReadOnly() {
        return $this->value === "ReadOnly";
    }

    public function isReadWriteNoMoneyOut() {
        return $this->value === "ReadWriteNoMoneyOut";
    }

    /**
     * Create AuthAccessPermissionSimpleName from JSON string
     *
     * @param string $json
     * @return AuthAccessPermissionSimpleName
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return AuthAccessPermissionSimpleName::fromString($value);
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