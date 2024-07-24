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

class TransferStatusCompleting extends TransferStatus implements JsonSerializable  {

    /** @var string */
    const Type = "TransferStatus.Completing";


    /** @var string */
    const Variant = "Completing";

    /**
     * TransferStatusCompleting constructor
     */
    function __construct() {}

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Create TransferStatusCompleting from JSON string
     *
     * @param string $json
     * @return TransferStatusCompleting
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransferStatusCompleting from associative array of its fields
     *
     * @param array $array
     * @return TransferStatusCompleting
     */
    public static function fromArray(array $array) {
        return new TransferStatusCompleting();
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
        return array_filter(
            array(
                '_type' => self::Variant, 
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransferStatusCompleting";
    }
}