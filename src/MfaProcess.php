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

abstract class MfaProcess implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isInitiated() {
        return $this->getType() === MfaProcessInitiated::Type;
    }

    public function isNotRequired() {
        return $this->getType() === MfaProcessNotRequired::Type;
    }

    public function isNotInitiated() {
        return $this->getType() !== MfaProcessInitiated::Type; 
    }

    public function isNotNotRequired() {
        return $this->getType() !== MfaProcessNotRequired::Type; 
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
        if($type === MfaProcessInitiated::Type || str_ends_with('.' . $type, '.' . MfaProcessInitiated::Variant)) return MfaProcessInitiated::fromArray($array);
        else if($type === MfaProcessNotRequired::Type || str_ends_with('.' . $type, '.' . MfaProcessNotRequired::Variant)) return MfaProcessNotRequired::fromArray($array);
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
}