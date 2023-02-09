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

abstract class FundRequestStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isWaiting() {
        return $this->getType() === FundRequestStatusWaiting::Type;
    }

    public function isProcessing() {
        return $this->getType() === FundRequestStatusProcessing::Type;
    }

    public function isCompleted() {
        return $this->getType() === FundRequestStatusCompleted::Type;
    }

    public function isCancelled() {
        return $this->getType() === FundRequestStatusCancelled::Type;
    }

    public function isNotWaiting() {
        return $this->getType() !== FundRequestStatusWaiting::Type; 
    }

    public function isNotProcessing() {
        return $this->getType() !== FundRequestStatusProcessing::Type; 
    }

    public function isNotCompleted() {
        return $this->getType() !== FundRequestStatusCompleted::Type; 
    }

    public function isNotCancelled() {
        return $this->getType() !== FundRequestStatusCancelled::Type; 
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
        if($type === FundRequestStatusWaiting::Type || str_ends_with('.' . $type, '.' . FundRequestStatusWaiting::Variant)) return FundRequestStatusWaiting::fromArray($array);
        else if($type === FundRequestStatusProcessing::Type || str_ends_with('.' . $type, '.' . FundRequestStatusProcessing::Variant)) return FundRequestStatusProcessing::fromArray($array);
        else if($type === FundRequestStatusCompleted::Type || str_ends_with('.' . $type, '.' . FundRequestStatusCompleted::Variant)) return FundRequestStatusCompleted::fromArray($array);
        else if($type === FundRequestStatusCancelled::Type || str_ends_with('.' . $type, '.' . FundRequestStatusCancelled::Variant)) return FundRequestStatusCancelled::fromArray($array);
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
}