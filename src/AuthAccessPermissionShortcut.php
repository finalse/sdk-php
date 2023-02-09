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

class AuthAccessPermissionShortcut extends AuthAccessPermission implements JsonSerializable  {

    /** @var AuthAccessPermissionShortcutValue */
    protected $value ;


    /** @var string */
    const Type = "AuthAccessPermission.Shortcut";


    /** @var string */
    const Variant = "Shortcut";

    /**
     * AuthAccessPermissionShortcut constructor
     * @param AuthAccessPermissionShortcutValue $value
     */
    function __construct(AuthAccessPermissionShortcutValue $value) {
        $this->value = $value;
    }

    /**
     * Getter of the field 'value'.
     *
     * @return AuthAccessPermissionShortcutValue
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new AuthAccessPermissionShortcut where the field 'value' has been updated with the value passed as parameter.
     *
     * @param AuthAccessPermissionShortcutValue $value
     * @return AuthAccessPermissionShortcut
     */
    public function withValue(AuthAccessPermissionShortcutValue $value) {
        assert($this->value != null, "In class AuthAccessPermissionShortcut the param 'value' of type AuthAccessPermissionShortcutValue can not be null");
        return new AuthAccessPermissionShortcut($value);
    }

    /**
     * Create AuthAccessPermissionShortcut from JSON string
     *
     * @param string $json
     * @return AuthAccessPermissionShortcut
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create AuthAccessPermissionShortcut from associative array of its fields
     *
     * @param array $array
     * @return AuthAccessPermissionShortcut
     */
    public static function fromArray(array $array) {
        return new AuthAccessPermissionShortcut(AuthAccessPermissionShortcutValue::fromString($array['value']));
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function jsonSerialize() {
        return json_encode($this->toArray());
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function toJson() {
        return $this->jsonSerialize();
    }

    /**
     * Return associative array representing this object
     *
     * @return array
     */
    public function toArray() {
        return array_filter(
            array(
                '_type' => self::Variant, 
                'value' => ((string) $this->value),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "AuthAccessPermissionShortcut{value=" . $this->value . "}";
    }
}