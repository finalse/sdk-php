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

class AuthAccessPermissionSimple extends AuthAccessPermission implements JsonSerializable  {

    /** @var AuthAccessPermissionSimpleName */
    protected $name ;


    /** @var string */
    const Type = "AuthAccessPermission.Simple";


    /** @var string */
    const Variant = "Simple";

    /**
     * AuthAccessPermissionSimple constructor
     * @param AuthAccessPermissionSimpleName $name
     */
    function __construct(AuthAccessPermissionSimpleName $name) {
        $this->name = $name;
    }

    /**
     * Getter of the field 'name'.
     *
     * @return AuthAccessPermissionSimpleName
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new AuthAccessPermissionSimple where the field 'name' has been updated with the value passed as parameter.
     *
     * @param AuthAccessPermissionSimpleName $name
     * @return AuthAccessPermissionSimple
     */
    public function withName(AuthAccessPermissionSimpleName $name) {
        assert($this->name != null, "In class AuthAccessPermissionSimple the param 'name' of type AuthAccessPermissionSimpleName can not be null");
        return new AuthAccessPermissionSimple($name);
    }

    /**
     * Create AuthAccessPermissionSimple from JSON string
     *
     * @param string $json
     * @return AuthAccessPermissionSimple
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create AuthAccessPermissionSimple from associative array of its fields
     *
     * @param array $array
     * @return AuthAccessPermissionSimple
     */
    public static function fromArray(array $array) {
        return new AuthAccessPermissionSimple(AuthAccessPermissionSimpleName::fromString($array['name']));
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
                'name' => ((string) $this->name),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "AuthAccessPermissionSimple{name=" . $this->name . "}";
    }
}