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

abstract class TransferStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isWaitingToStart() {
        return $this->getType() === TransferStatusWaitingToStart::Type;
    }

    public function isStarting() {
        return $this->getType() === TransferStatusStarting::Type;
    }

    public function isStarted() {
        return $this->getType() === TransferStatusStarted::Type;
    }

    public function isProcessing() {
        return $this->getType() === TransferStatusProcessing::Type;
    }

    public function isCompleting() {
        return $this->getType() === TransferStatusCompleting::Type;
    }

    public function isFailure() {
        return $this->getType() === TransferStatusFailure::Type;
    }

    public function isSuccessful() {
        return $this->getType() === TransferStatusSuccessful::Type;
    }

    /** @return TransferStatusWaitingToStart | null */
    public function asWaitingToStart() {
        if($this->getType() == TransferStatusWaitingToStart::Type) return $this;
        else return null;
    }

    /** @return TransferStatusStarting | null */
    public function asStarting() {
        if($this->getType() == TransferStatusStarting::Type) return $this;
        else return null;
    }

    /** @return TransferStatusStarted | null */
    public function asStarted() {
        if($this->getType() == TransferStatusStarted::Type) return $this;
        else return null;
    }

    /** @return TransferStatusProcessing | null */
    public function asProcessing() {
        if($this->getType() == TransferStatusProcessing::Type) return $this;
        else return null;
    }

    /** @return TransferStatusCompleting | null */
    public function asCompleting() {
        if($this->getType() == TransferStatusCompleting::Type) return $this;
        else return null;
    }

    /** @return TransferStatusFailure | null */
    public function asFailure() {
        if($this->getType() == TransferStatusFailure::Type) return $this;
        else return null;
    }

    /** @return TransferStatusSuccessful | null */
    public function asSuccessful() {
        if($this->getType() == TransferStatusSuccessful::Type) return $this;
        else return null;
    }

    /**
     * Create TransferStatus from JSON string
     *
     * @param string $json
     * @return TransferStatus
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransferStatus from associative array of its fields
     *
     * @param array $array
     * @return TransferStatus
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === TransferStatusWaitingToStart::Type || str_ends_with('.' . $type, '.' . TransferStatusWaitingToStart::Variant)) return TransferStatusWaitingToStart::fromArray($array);
        else if($type === TransferStatusStarting::Type || str_ends_with('.' . $type, '.' . TransferStatusStarting::Variant)) return TransferStatusStarting::fromArray($array);
        else if($type === TransferStatusStarted::Type || str_ends_with('.' . $type, '.' . TransferStatusStarted::Variant)) return TransferStatusStarted::fromArray($array);
        else if($type === TransferStatusProcessing::Type || str_ends_with('.' . $type, '.' . TransferStatusProcessing::Variant)) return TransferStatusProcessing::fromArray($array);
        else if($type === TransferStatusCompleting::Type || str_ends_with('.' . $type, '.' . TransferStatusCompleting::Variant)) return TransferStatusCompleting::fromArray($array);
        else if($type === TransferStatusFailure::Type || str_ends_with('.' . $type, '.' . TransferStatusFailure::Variant)) return TransferStatusFailure::fromArray($array);
        else if($type === TransferStatusSuccessful::Type || str_ends_with('.' . $type, '.' . TransferStatusSuccessful::Variant)) return TransferStatusSuccessful::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'TransferStatus'" . " Unexpected '_type' = " . $type);
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