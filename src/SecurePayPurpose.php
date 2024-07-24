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

abstract class SecurePayPurpose implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isSend() {
        return $this->getType() === SecurePayPurposeSend::Type;
    }

    public function isReceive() {
        return $this->getType() === SecurePayPurposeReceive::Type;
    }

    public function isPurchase() {
        return $this->getType() === SecurePayPurposePurchase::Type;
    }

    /** @return SecurePayPurposeSend | null */
    public function asSend() {
        if($this->getType() == SecurePayPurposeSend::Type) return $this;
        else return null;
    }

    /** @return SecurePayPurposeReceive | null */
    public function asReceive() {
        if($this->getType() == SecurePayPurposeReceive::Type) return $this;
        else return null;
    }

    /** @return SecurePayPurposePurchase | null */
    public function asPurchase() {
        if($this->getType() == SecurePayPurposePurchase::Type) return $this;
        else return null;
    }

    /**
     * Create SecurePayPurpose from JSON string
     *
     * @param string $json
     * @return SecurePayPurpose
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create SecurePayPurpose from associative array of its fields
     *
     * @param array $array
     * @return SecurePayPurpose
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === SecurePayPurposeSend::Type || str_ends_with('.' . $type, '.' . SecurePayPurposeSend::Variant)) return SecurePayPurposeSend::fromArray($array);
        else if($type === SecurePayPurposeReceive::Type || str_ends_with('.' . $type, '.' . SecurePayPurposeReceive::Variant)) return SecurePayPurposeReceive::fromArray($array);
        else if($type === SecurePayPurposePurchase::Type || str_ends_with('.' . $type, '.' . SecurePayPurposePurchase::Variant)) return SecurePayPurposePurchase::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'SecurePayPurpose'" . " Unexpected '_type' = " . $type);
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