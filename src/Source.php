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

abstract class Source implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isSingle() {
        return $this->getType() === SourceSingle::Type;
    }

    public function isMultiple() {
        return $this->getType() === SourceMultiple::Type;
    }

    /** @return SourceSingle | null */
    public function asSingle() {
        if($this->getType() == SourceSingle::Type) return $this;
        else return null;
    }

    /** @return SourceMultiple | null */
    public function asMultiple() {
        if($this->getType() == SourceMultiple::Type) return $this;
        else return null;
    }

    /**
     * Create Source from JSON string
     *
     * @param string $json
     * @return Source
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Source from associative array of its fields
     *
     * @param array $array
     * @return Source
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === SourceSingle::Type || str_ends_with('.' . $type, '.' . SourceSingle::Variant)) return SourceSingle::fromArray($array);
        else if($type === SourceMultiple::Type || str_ends_with('.' . $type, '.' . SourceMultiple::Variant)) return SourceMultiple::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'Source'" . " Unexpected '_type' = " . $type);
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