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

abstract class DepositStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isWaitingToStart() {
        return $this->getType() === DepositStatusWaitingToStart::Type;
    }

    public function isStarting() {
        return $this->getType() === DepositStatusStarting::Type;
    }

    public function isStarted() {
        return $this->getType() === DepositStatusStarted::Type;
    }

    public function isProcessing() {
        return $this->getType() === DepositStatusProcessing::Type;
    }

    public function isCompleting() {
        return $this->getType() === DepositStatusCompleting::Type;
    }

    public function isFailure() {
        return $this->getType() === DepositStatusFailure::Type;
    }

    public function isSuccessful() {
        return $this->getType() === DepositStatusSuccessful::Type;
    }

    /** @return DepositStatusWaitingToStart | null */
    public function asWaitingToStart() {
        if($this->getType() == DepositStatusWaitingToStart::Type) return $this;
        else return null;
    }

    /** @return DepositStatusStarting | null */
    public function asStarting() {
        if($this->getType() == DepositStatusStarting::Type) return $this;
        else return null;
    }

    /** @return DepositStatusStarted | null */
    public function asStarted() {
        if($this->getType() == DepositStatusStarted::Type) return $this;
        else return null;
    }

    /** @return DepositStatusProcessing | null */
    public function asProcessing() {
        if($this->getType() == DepositStatusProcessing::Type) return $this;
        else return null;
    }

    /** @return DepositStatusCompleting | null */
    public function asCompleting() {
        if($this->getType() == DepositStatusCompleting::Type) return $this;
        else return null;
    }

    /** @return DepositStatusFailure | null */
    public function asFailure() {
        if($this->getType() == DepositStatusFailure::Type) return $this;
        else return null;
    }

    /** @return DepositStatusSuccessful | null */
    public function asSuccessful() {
        if($this->getType() == DepositStatusSuccessful::Type) return $this;
        else return null;
    }

    /**
     * Create DepositStatus from JSON string
     *
     * @param string $json
     * @return DepositStatus
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create DepositStatus from associative array of its fields
     *
     * @param array $array
     * @return DepositStatus
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === DepositStatusWaitingToStart::Type || str_ends_with('.' . $type, '.' . DepositStatusWaitingToStart::Variant)) return DepositStatusWaitingToStart::fromArray($array);
        else if($type === DepositStatusStarting::Type || str_ends_with('.' . $type, '.' . DepositStatusStarting::Variant)) return DepositStatusStarting::fromArray($array);
        else if($type === DepositStatusStarted::Type || str_ends_with('.' . $type, '.' . DepositStatusStarted::Variant)) return DepositStatusStarted::fromArray($array);
        else if($type === DepositStatusProcessing::Type || str_ends_with('.' . $type, '.' . DepositStatusProcessing::Variant)) return DepositStatusProcessing::fromArray($array);
        else if($type === DepositStatusCompleting::Type || str_ends_with('.' . $type, '.' . DepositStatusCompleting::Variant)) return DepositStatusCompleting::fromArray($array);
        else if($type === DepositStatusFailure::Type || str_ends_with('.' . $type, '.' . DepositStatusFailure::Variant)) return DepositStatusFailure::fromArray($array);
        else if($type === DepositStatusSuccessful::Type || str_ends_with('.' . $type, '.' . DepositStatusSuccessful::Variant)) return DepositStatusSuccessful::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'DepositStatus'" . " Unexpected '_type' = " . $type);
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