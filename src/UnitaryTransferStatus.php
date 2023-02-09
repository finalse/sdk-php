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

abstract class UnitaryTransferStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isWaiting() {
        return $this->getType() === UnitaryTransferStatusWaiting::Type;
    }

    public function isInitiating() {
        return $this->getType() === UnitaryTransferStatusInitiating::Type;
    }

    public function isInitiated() {
        return $this->getType() === UnitaryTransferStatusInitiated::Type;
    }

    public function isProcessing() {
        return $this->getType() === UnitaryTransferStatusProcessing::Type;
    }

    public function isFailed() {
        return $this->getType() === UnitaryTransferStatusFailed::Type;
    }

    public function isSuccessful() {
        return $this->getType() === UnitaryTransferStatusSuccessful::Type;
    }

    public function isNotWaiting() {
        return $this->getType() !== UnitaryTransferStatusWaiting::Type; 
    }

    public function isNotInitiating() {
        return $this->getType() !== UnitaryTransferStatusInitiating::Type; 
    }

    public function isNotInitiated() {
        return $this->getType() !== UnitaryTransferStatusInitiated::Type; 
    }

    public function isNotProcessing() {
        return $this->getType() !== UnitaryTransferStatusProcessing::Type; 
    }

    public function isNotFailed() {
        return $this->getType() !== UnitaryTransferStatusFailed::Type; 
    }

    public function isNotSuccessful() {
        return $this->getType() !== UnitaryTransferStatusSuccessful::Type; 
    }

    /**
     * Create UnitaryTransferStatus from JSON string
     *
     * @param string $json
     * @return UnitaryTransferStatus
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create UnitaryTransferStatus from associative array of its fields
     *
     * @param array $array
     * @return UnitaryTransferStatus
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === UnitaryTransferStatusWaiting::Type || str_ends_with('.' . $type, '.' . UnitaryTransferStatusWaiting::Variant)) return UnitaryTransferStatusWaiting::fromArray($array);
        else if($type === UnitaryTransferStatusInitiating::Type || str_ends_with('.' . $type, '.' . UnitaryTransferStatusInitiating::Variant)) return UnitaryTransferStatusInitiating::fromArray($array);
        else if($type === UnitaryTransferStatusInitiated::Type || str_ends_with('.' . $type, '.' . UnitaryTransferStatusInitiated::Variant)) return UnitaryTransferStatusInitiated::fromArray($array);
        else if($type === UnitaryTransferStatusProcessing::Type || str_ends_with('.' . $type, '.' . UnitaryTransferStatusProcessing::Variant)) return UnitaryTransferStatusProcessing::fromArray($array);
        else if($type === UnitaryTransferStatusFailed::Type || str_ends_with('.' . $type, '.' . UnitaryTransferStatusFailed::Variant)) return UnitaryTransferStatusFailed::fromArray($array);
        else if($type === UnitaryTransferStatusSuccessful::Type || str_ends_with('.' . $type, '.' . UnitaryTransferStatusSuccessful::Variant)) return UnitaryTransferStatusSuccessful::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'UnitaryTransferStatus'" . " Unexpected '_type' = " . $type);
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