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

abstract class AuthAccessPermission implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isSimple() {
        return $this->getType() === AuthAccessPermissionSimple::Type;
    }

    public function isComplex() {
        return $this->getType() === AuthAccessPermissionComplex::Type;
    }

    /** @return AuthAccessPermissionSimple | null */
    public function asSimple() {
        if($this->getType() == AuthAccessPermissionSimple::Type) return $this;
        else return null;
    }

    /** @return AuthAccessPermissionComplex | null */
    public function asComplex() {
        if($this->getType() == AuthAccessPermissionComplex::Type) return $this;
        else return null;
    }

    /**
     * Create AuthAccessPermission from JSON string
     *
     * @param string $json
     * @return AuthAccessPermission
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create AuthAccessPermission from associative array of its fields
     *
     * @param array $array
     * @return AuthAccessPermission
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === AuthAccessPermissionSimple::Type || str_ends_with('.' . $type, '.' . AuthAccessPermissionSimple::Variant)) return AuthAccessPermissionSimple::fromArray($array);
        else if($type === AuthAccessPermissionComplex::Type || str_ends_with('.' . $type, '.' . AuthAccessPermissionComplex::Variant)) return AuthAccessPermissionComplex::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'AuthAccessPermission'" . " Unexpected '_type' = " . $type);
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
        return array();
    }
}