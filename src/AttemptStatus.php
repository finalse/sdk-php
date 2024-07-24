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

abstract class AttemptStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isOnGoing() {
        return $this->getType() === AttemptStatusOnGoing::Type;
    }

    public function isCompleting() {
        return $this->getType() === AttemptStatusCompleting::Type;
    }

    public function isFailure() {
        return $this->getType() === AttemptStatusFailure::Type;
    }

    public function isSuccessful() {
        return $this->getType() === AttemptStatusSuccessful::Type;
    }

    /** @return AttemptStatusOnGoing | null */
    public function asOnGoing() {
        if($this->getType() == AttemptStatusOnGoing::Type) return $this;
        else return null;
    }

    /** @return AttemptStatusCompleting | null */
    public function asCompleting() {
        if($this->getType() == AttemptStatusCompleting::Type) return $this;
        else return null;
    }

    /** @return AttemptStatusFailure | null */
    public function asFailure() {
        if($this->getType() == AttemptStatusFailure::Type) return $this;
        else return null;
    }

    /** @return AttemptStatusSuccessful | null */
    public function asSuccessful() {
        if($this->getType() == AttemptStatusSuccessful::Type) return $this;
        else return null;
    }

    /**
     * Create AttemptStatus from JSON string
     *
     * @param string $json
     * @return AttemptStatus
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create AttemptStatus from associative array of its fields
     *
     * @param array $array
     * @return AttemptStatus
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === AttemptStatusOnGoing::Type || str_ends_with('.' . $type, '.' . AttemptStatusOnGoing::Variant)) return AttemptStatusOnGoing::fromArray($array);
        else if($type === AttemptStatusCompleting::Type || str_ends_with('.' . $type, '.' . AttemptStatusCompleting::Variant)) return AttemptStatusCompleting::fromArray($array);
        else if($type === AttemptStatusFailure::Type || str_ends_with('.' . $type, '.' . AttemptStatusFailure::Variant)) return AttemptStatusFailure::fromArray($array);
        else if($type === AttemptStatusSuccessful::Type || str_ends_with('.' . $type, '.' . AttemptStatusSuccessful::Variant)) return AttemptStatusSuccessful::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'AttemptStatus'" . " Unexpected '_type' = " . $type);
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