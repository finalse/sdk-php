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

abstract class TransferDestinationStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isWaitingToStart() {
        return $this->getType() === TransferDestinationStatusWaitingToStart::Type;
    }

    public function isStarted() {
        return $this->getType() === TransferDestinationStatusStarted::Type;
    }

    public function isProcessing() {
        return $this->getType() === TransferDestinationStatusProcessing::Type;
    }

    public function isFailed() {
        return $this->getType() === TransferDestinationStatusFailed::Type;
    }

    public function isSuccessful() {
        return $this->getType() === TransferDestinationStatusSuccessful::Type;
    }

    public function isNotWaitingToStart() {
        return $this->getType() !== TransferDestinationStatusWaitingToStart::Type; 
    }

    public function isNotStarted() {
        return $this->getType() !== TransferDestinationStatusStarted::Type; 
    }

    public function isNotProcessing() {
        return $this->getType() !== TransferDestinationStatusProcessing::Type; 
    }

    public function isNotFailed() {
        return $this->getType() !== TransferDestinationStatusFailed::Type; 
    }

    public function isNotSuccessful() {
        return $this->getType() !== TransferDestinationStatusSuccessful::Type; 
    }

    /**
     * Create TransferDestinationStatus from JSON string
     *
     * @param string $json
     * @return TransferDestinationStatus
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransferDestinationStatus from associative array of its fields
     *
     * @param array $array
     * @return TransferDestinationStatus
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === TransferDestinationStatusWaitingToStart::Type || str_ends_with('.' . $type, '.' . TransferDestinationStatusWaitingToStart::Variant)) return TransferDestinationStatusWaitingToStart::fromArray($array);
        else if($type === TransferDestinationStatusStarted::Type || str_ends_with('.' . $type, '.' . TransferDestinationStatusStarted::Variant)) return TransferDestinationStatusStarted::fromArray($array);
        else if($type === TransferDestinationStatusProcessing::Type || str_ends_with('.' . $type, '.' . TransferDestinationStatusProcessing::Variant)) return TransferDestinationStatusProcessing::fromArray($array);
        else if($type === TransferDestinationStatusFailed::Type || str_ends_with('.' . $type, '.' . TransferDestinationStatusFailed::Variant)) return TransferDestinationStatusFailed::fromArray($array);
        else if($type === TransferDestinationStatusSuccessful::Type || str_ends_with('.' . $type, '.' . TransferDestinationStatusSuccessful::Variant)) return TransferDestinationStatusSuccessful::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'TransferDestinationStatus'" . " Unexpected '_type' = " . $type);
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