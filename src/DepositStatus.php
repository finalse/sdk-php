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

abstract class DepositStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isWaiting() {
        return $this->getType() === DepositStatusWaiting::Type;
    }

    public function isInitiating() {
        return $this->getType() === DepositStatusInitiating::Type;
    }

    public function isInitiated() {
        return $this->getType() === DepositStatusInitiated::Type;
    }

    public function isProcessing() {
        return $this->getType() === DepositStatusProcessing::Type;
    }

    public function isFailed() {
        return $this->getType() === DepositStatusFailed::Type;
    }

    public function isSuccessful() {
        return $this->getType() === DepositStatusSuccessful::Type;
    }

    public function isNotWaiting() {
        return $this->getType() !== DepositStatusWaiting::Type; 
    }

    public function isNotInitiating() {
        return $this->getType() !== DepositStatusInitiating::Type; 
    }

    public function isNotInitiated() {
        return $this->getType() !== DepositStatusInitiated::Type; 
    }

    public function isNotProcessing() {
        return $this->getType() !== DepositStatusProcessing::Type; 
    }

    public function isNotFailed() {
        return $this->getType() !== DepositStatusFailed::Type; 
    }

    public function isNotSuccessful() {
        return $this->getType() !== DepositStatusSuccessful::Type; 
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
        if($type === DepositStatusWaiting::Type || str_ends_with('.' . $type, '.' . DepositStatusWaiting::Variant)) return DepositStatusWaiting::fromArray($array);
        else if($type === DepositStatusInitiating::Type || str_ends_with('.' . $type, '.' . DepositStatusInitiating::Variant)) return DepositStatusInitiating::fromArray($array);
        else if($type === DepositStatusInitiated::Type || str_ends_with('.' . $type, '.' . DepositStatusInitiated::Variant)) return DepositStatusInitiated::fromArray($array);
        else if($type === DepositStatusProcessing::Type || str_ends_with('.' . $type, '.' . DepositStatusProcessing::Variant)) return DepositStatusProcessing::fromArray($array);
        else if($type === DepositStatusFailed::Type || str_ends_with('.' . $type, '.' . DepositStatusFailed::Variant)) return DepositStatusFailed::fromArray($array);
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
}