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

abstract class FundRequestStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isWaitingToStart() {
        return $this->getType() === FundRequestStatusWaitingToStart::Type;
    }

    public function isStarting() {
        return $this->getType() === FundRequestStatusStarting::Type;
    }

    public function isStarted() {
        return $this->getType() === FundRequestStatusStarted::Type;
    }

    public function isProcessing() {
        return $this->getType() === FundRequestStatusProcessing::Type;
    }

    public function isFailure() {
        return $this->getType() === FundRequestStatusFailure::Type;
    }

    public function isSuccessful() {
        return $this->getType() === FundRequestStatusSuccessful::Type;
    }

    /** @return FundRequestStatusWaitingToStart | null */
    public function asWaitingToStart() {
        if($this->getType() == FundRequestStatusWaitingToStart::Type) return $this;
        else return null;
    }

    /** @return FundRequestStatusStarting | null */
    public function asStarting() {
        if($this->getType() == FundRequestStatusStarting::Type) return $this;
        else return null;
    }

    /** @return FundRequestStatusStarted | null */
    public function asStarted() {
        if($this->getType() == FundRequestStatusStarted::Type) return $this;
        else return null;
    }

    /** @return FundRequestStatusProcessing | null */
    public function asProcessing() {
        if($this->getType() == FundRequestStatusProcessing::Type) return $this;
        else return null;
    }

    /** @return FundRequestStatusFailure | null */
    public function asFailure() {
        if($this->getType() == FundRequestStatusFailure::Type) return $this;
        else return null;
    }

    /** @return FundRequestStatusSuccessful | null */
    public function asSuccessful() {
        if($this->getType() == FundRequestStatusSuccessful::Type) return $this;
        else return null;
    }

    /**
     * Create FundRequestStatus from JSON string
     *
     * @param string $json
     * @return FundRequestStatus
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create FundRequestStatus from associative array of its fields
     *
     * @param array $array
     * @return FundRequestStatus
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === FundRequestStatusWaitingToStart::Type || str_ends_with('.' . $type, '.' . FundRequestStatusWaitingToStart::Variant)) return FundRequestStatusWaitingToStart::fromArray($array);
        else if($type === FundRequestStatusStarting::Type || str_ends_with('.' . $type, '.' . FundRequestStatusStarting::Variant)) return FundRequestStatusStarting::fromArray($array);
        else if($type === FundRequestStatusStarted::Type || str_ends_with('.' . $type, '.' . FundRequestStatusStarted::Variant)) return FundRequestStatusStarted::fromArray($array);
        else if($type === FundRequestStatusProcessing::Type || str_ends_with('.' . $type, '.' . FundRequestStatusProcessing::Variant)) return FundRequestStatusProcessing::fromArray($array);
        else if($type === FundRequestStatusFailure::Type || str_ends_with('.' . $type, '.' . FundRequestStatusFailure::Variant)) return FundRequestStatusFailure::fromArray($array);
        else if($type === FundRequestStatusSuccessful::Type || str_ends_with('.' . $type, '.' . FundRequestStatusSuccessful::Variant)) return FundRequestStatusSuccessful::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'FundRequestStatus'" . " Unexpected '_type' = " . $type);
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