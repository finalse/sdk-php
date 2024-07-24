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

abstract class Destination implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isSingle() {
        return $this->getType() === DestinationSingle::Type;
    }

    public function isMultiple() {
        return $this->getType() === DestinationMultiple::Type;
    }

    /** @return DestinationSingle | null */
    public function asSingle() {
        if($this->getType() == DestinationSingle::Type) return $this;
        else return null;
    }

    /** @return DestinationMultiple | null */
    public function asMultiple() {
        if($this->getType() == DestinationMultiple::Type) return $this;
        else return null;
    }

    /**
     * Create Destination from JSON string
     *
     * @param string $json
     * @return Destination
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Destination from associative array of its fields
     *
     * @param array $array
     * @return Destination
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === DestinationSingle::Type || str_ends_with('.' . $type, '.' . DestinationSingle::Variant)) return DestinationSingle::fromArray($array);
        else if($type === DestinationMultiple::Type || str_ends_with('.' . $type, '.' . DestinationMultiple::Variant)) return DestinationMultiple::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'Destination'" . " Unexpected '_type' = " . $type);
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