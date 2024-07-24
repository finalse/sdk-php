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

abstract class MfaProcess implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isNotRequired() {
        return $this->getType() === MfaProcessNotRequired::Type;
    }

    public function isWaitingToStart() {
        return $this->getType() === MfaProcessWaitingToStart::Type;
    }

    public function isStarting() {
        return $this->getType() === MfaProcessStarting::Type;
    }

    public function isOneTimePasswordRequired() {
        return $this->getType() === MfaProcessOneTimePasswordRequired::Type;
    }

    public function isSecretCodeRequired() {
        return $this->getType() === MfaProcessSecretCodeRequired::Type;
    }

    public function isSuccessful() {
        return $this->getType() === MfaProcessSuccessful::Type;
    }

    public function isFailure() {
        return $this->getType() === MfaProcessFailure::Type;
    }

    /** @return MfaProcessNotRequired | null */
    public function asNotRequired() {
        if($this->getType() == MfaProcessNotRequired::Type) return $this;
        else return null;
    }

    /** @return MfaProcessWaitingToStart | null */
    public function asWaitingToStart() {
        if($this->getType() == MfaProcessWaitingToStart::Type) return $this;
        else return null;
    }

    /** @return MfaProcessStarting | null */
    public function asStarting() {
        if($this->getType() == MfaProcessStarting::Type) return $this;
        else return null;
    }

    /** @return MfaProcessOneTimePasswordRequired | null */
    public function asOneTimePasswordRequired() {
        if($this->getType() == MfaProcessOneTimePasswordRequired::Type) return $this;
        else return null;
    }

    /** @return MfaProcessSecretCodeRequired | null */
    public function asSecretCodeRequired() {
        if($this->getType() == MfaProcessSecretCodeRequired::Type) return $this;
        else return null;
    }

    /** @return MfaProcessSuccessful | null */
    public function asSuccessful() {
        if($this->getType() == MfaProcessSuccessful::Type) return $this;
        else return null;
    }

    /** @return MfaProcessFailure | null */
    public function asFailure() {
        if($this->getType() == MfaProcessFailure::Type) return $this;
        else return null;
    }

    /**
     * Create MfaProcess from JSON string
     *
     * @param string $json
     * @return MfaProcess
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create MfaProcess from associative array of its fields
     *
     * @param array $array
     * @return MfaProcess
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === MfaProcessNotRequired::Type || str_ends_with('.' . $type, '.' . MfaProcessNotRequired::Variant)) return MfaProcessNotRequired::fromArray($array);
        else if($type === MfaProcessWaitingToStart::Type || str_ends_with('.' . $type, '.' . MfaProcessWaitingToStart::Variant)) return MfaProcessWaitingToStart::fromArray($array);
        else if($type === MfaProcessStarting::Type || str_ends_with('.' . $type, '.' . MfaProcessStarting::Variant)) return MfaProcessStarting::fromArray($array);
        else if($type === MfaProcessOneTimePasswordRequired::Type || str_ends_with('.' . $type, '.' . MfaProcessOneTimePasswordRequired::Variant)) return MfaProcessOneTimePasswordRequired::fromArray($array);
        else if($type === MfaProcessSecretCodeRequired::Type || str_ends_with('.' . $type, '.' . MfaProcessSecretCodeRequired::Variant)) return MfaProcessSecretCodeRequired::fromArray($array);
        else if($type === MfaProcessSuccessful::Type || str_ends_with('.' . $type, '.' . MfaProcessSuccessful::Variant)) return MfaProcessSuccessful::fromArray($array);
        else if($type === MfaProcessFailure::Type || str_ends_with('.' . $type, '.' . MfaProcessFailure::Variant)) return MfaProcessFailure::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'MfaProcess'" . " Unexpected '_type' = " . $type);
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