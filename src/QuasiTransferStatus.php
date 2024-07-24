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

abstract class QuasiTransferStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isWaitingToStart() {
        return $this->getType() === QuasiTransferStatusWaitingToStart::Type;
    }

    public function isStarting() {
        return $this->getType() === QuasiTransferStatusStarting::Type;
    }

    public function isStarted() {
        return $this->getType() === QuasiTransferStatusStarted::Type;
    }

    public function isProcessing() {
        return $this->getType() === QuasiTransferStatusProcessing::Type;
    }

    public function isFailure() {
        return $this->getType() === QuasiTransferStatusFailure::Type;
    }

    public function isSuccessful() {
        return $this->getType() === QuasiTransferStatusSuccessful::Type;
    }

    /** @return QuasiTransferStatusWaitingToStart | null */
    public function asWaitingToStart() {
        if($this->getType() == QuasiTransferStatusWaitingToStart::Type) return $this;
        else return null;
    }

    /** @return QuasiTransferStatusStarting | null */
    public function asStarting() {
        if($this->getType() == QuasiTransferStatusStarting::Type) return $this;
        else return null;
    }

    /** @return QuasiTransferStatusStarted | null */
    public function asStarted() {
        if($this->getType() == QuasiTransferStatusStarted::Type) return $this;
        else return null;
    }

    /** @return QuasiTransferStatusProcessing | null */
    public function asProcessing() {
        if($this->getType() == QuasiTransferStatusProcessing::Type) return $this;
        else return null;
    }

    /** @return QuasiTransferStatusFailure | null */
    public function asFailure() {
        if($this->getType() == QuasiTransferStatusFailure::Type) return $this;
        else return null;
    }

    /** @return QuasiTransferStatusSuccessful | null */
    public function asSuccessful() {
        if($this->getType() == QuasiTransferStatusSuccessful::Type) return $this;
        else return null;
    }

    /**
     * Create QuasiTransferStatus from JSON string
     *
     * @param string $json
     * @return QuasiTransferStatus
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create QuasiTransferStatus from associative array of its fields
     *
     * @param array $array
     * @return QuasiTransferStatus
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === QuasiTransferStatusWaitingToStart::Type || str_ends_with('.' . $type, '.' . QuasiTransferStatusWaitingToStart::Variant)) return QuasiTransferStatusWaitingToStart::fromArray($array);
        else if($type === QuasiTransferStatusStarting::Type || str_ends_with('.' . $type, '.' . QuasiTransferStatusStarting::Variant)) return QuasiTransferStatusStarting::fromArray($array);
        else if($type === QuasiTransferStatusStarted::Type || str_ends_with('.' . $type, '.' . QuasiTransferStatusStarted::Variant)) return QuasiTransferStatusStarted::fromArray($array);
        else if($type === QuasiTransferStatusProcessing::Type || str_ends_with('.' . $type, '.' . QuasiTransferStatusProcessing::Variant)) return QuasiTransferStatusProcessing::fromArray($array);
        else if($type === QuasiTransferStatusFailure::Type || str_ends_with('.' . $type, '.' . QuasiTransferStatusFailure::Variant)) return QuasiTransferStatusFailure::fromArray($array);
        else if($type === QuasiTransferStatusSuccessful::Type || str_ends_with('.' . $type, '.' . QuasiTransferStatusSuccessful::Variant)) return QuasiTransferStatusSuccessful::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'QuasiTransferStatus'" . " Unexpected '_type' = " . $type);
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