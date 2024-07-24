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

abstract class TransactionStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isSuccessful() {
        return $this->getType() === TransactionStatusSuccessful::Type;
    }

    public function isFailure() {
        return $this->getType() === TransactionStatusFailure::Type;
    }

    /** @return TransactionStatusSuccessful | null */
    public function asSuccessful() {
        if($this->getType() == TransactionStatusSuccessful::Type) return $this;
        else return null;
    }

    /** @return TransactionStatusFailure | null */
    public function asFailure() {
        if($this->getType() == TransactionStatusFailure::Type) return $this;
        else return null;
    }

    /**
     * Create TransactionStatus from JSON string
     *
     * @param string $json
     * @return TransactionStatus
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransactionStatus from associative array of its fields
     *
     * @param array $array
     * @return TransactionStatus
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === TransactionStatusSuccessful::Type || str_ends_with('.' . $type, '.' . TransactionStatusSuccessful::Variant)) return TransactionStatusSuccessful::fromArray($array);
        else if($type === TransactionStatusFailure::Type || str_ends_with('.' . $type, '.' . TransactionStatusFailure::Variant)) return TransactionStatusFailure::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'TransactionStatus'" . " Unexpected '_type' = " . $type);
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