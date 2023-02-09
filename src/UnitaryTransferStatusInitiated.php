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

class UnitaryTransferStatusInitiated extends UnitaryTransferStatus implements JsonSerializable  {

    /** @var string */
    const Type = "UnitaryTransferStatus.Initiated";


    /** @var string */
    const Variant = "Initiated";

    /**
     * UnitaryTransferStatusInitiated constructor
     */
    function __construct() {}

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Create UnitaryTransferStatusInitiated from JSON string
     *
     * @param string $json
     * @return UnitaryTransferStatusInitiated
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create UnitaryTransferStatusInitiated from associative array of its fields
     *
     * @param array $array
     * @return UnitaryTransferStatusInitiated
     */
    public static function fromArray(array $array) {
        return new UnitaryTransferStatusInitiated();
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

    public function __toString() {
        return "UnitaryTransferStatusInitiated";
    }
}