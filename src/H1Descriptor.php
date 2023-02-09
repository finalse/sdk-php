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

abstract class H1Descriptor implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isSingleLang() {
        return $this->getType() === H1DescriptorSingleLang::Type;
    }

    public function isMultiLang() {
        return $this->getType() === H1DescriptorMultiLang::Type;
    }

    public function isNotSingleLang() {
        return $this->getType() !== H1DescriptorSingleLang::Type; 
    }

    public function isNotMultiLang() {
        return $this->getType() !== H1DescriptorMultiLang::Type; 
    }

    /**
     * Create H1Descriptor from JSON string
     *
     * @param string $json
     * @return H1Descriptor
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create H1Descriptor from associative array of its fields
     *
     * @param array $array
     * @return H1Descriptor
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === H1DescriptorSingleLang::Type || str_ends_with('.' . $type, '.' . H1DescriptorSingleLang::Variant)) return H1DescriptorSingleLang::fromArray($array);
        else if($type === H1DescriptorMultiLang::Type || str_ends_with('.' . $type, '.' . H1DescriptorMultiLang::Variant)) return H1DescriptorMultiLang::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'H1Descriptor'" . " Unexpected '_type' = " . $type);
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