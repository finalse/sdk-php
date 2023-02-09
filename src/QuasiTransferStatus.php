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

abstract class QuasiTransferStatus implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isWaiting() {
        return $this->getType() === QuasiTransferStatusWaiting::Type;
    }

    public function isProcessing() {
        return $this->getType() === QuasiTransferStatusProcessing::Type;
    }

    public function isCompleted() {
        return $this->getType() === QuasiTransferStatusCompleted::Type;
    }

    public function isCancelled() {
        return $this->getType() === QuasiTransferStatusCancelled::Type;
    }

    public function isNotWaiting() {
        return $this->getType() !== QuasiTransferStatusWaiting::Type; 
    }

    public function isNotProcessing() {
        return $this->getType() !== QuasiTransferStatusProcessing::Type; 
    }

    public function isNotCompleted() {
        return $this->getType() !== QuasiTransferStatusCompleted::Type; 
    }

    public function isNotCancelled() {
        return $this->getType() !== QuasiTransferStatusCancelled::Type; 
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
        if($type === QuasiTransferStatusWaiting::Type || str_ends_with('.' . $type, '.' . QuasiTransferStatusWaiting::Variant)) return QuasiTransferStatusWaiting::fromArray($array);
        else if($type === QuasiTransferStatusProcessing::Type || str_ends_with('.' . $type, '.' . QuasiTransferStatusProcessing::Variant)) return QuasiTransferStatusProcessing::fromArray($array);
        else if($type === QuasiTransferStatusCompleted::Type || str_ends_with('.' . $type, '.' . QuasiTransferStatusCompleted::Variant)) return QuasiTransferStatusCompleted::fromArray($array);
        else if($type === QuasiTransferStatusCancelled::Type || str_ends_with('.' . $type, '.' . QuasiTransferStatusCancelled::Variant)) return QuasiTransferStatusCancelled::fromArray($array);
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
}