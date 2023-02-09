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

class H1DescriptorMultiLang extends H1Descriptor implements JsonSerializable  {

    /** @var string */
    protected $fr ;

    /** @var string */
    protected $en ;


    /** @var string */
    const Type = "H1Descriptor.MultiLang";


    /** @var string */
    const Variant = "MultiLang";

    /**
     * H1DescriptorMultiLang constructor
     * @param string $fr
     * @param string $en
     */
    function __construct($fr, $en) {
        $this->fr = $fr;
        $this->en = $en;
    }

    /**
     * Getter of the field 'fr'.
     *
     * @return string
     */
    public function getFr() {
        return $this->fr;
    }

    /**
     * Getter of the field 'en'.
     *
     * @return string
     */
    public function getEn() {
        return $this->en;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new H1DescriptorMultiLang where the field 'fr' has been updated with the value passed as parameter.
     *
     * @param string $fr
     * @return H1DescriptorMultiLang
     */
    public function withFr($fr) {
        return new H1DescriptorMultiLang($fr, $this->en);
    }

    /**
     * Immutable update. Return a new H1DescriptorMultiLang where the field 'en' has been updated with the value passed as parameter.
     *
     * @param string $en
     * @return H1DescriptorMultiLang
     */
    public function withEn($en) {
        return new H1DescriptorMultiLang($this->fr, $en);
    }

    /**
     * Create H1DescriptorMultiLang from JSON string
     *
     * @param string $json
     * @return H1DescriptorMultiLang
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create H1DescriptorMultiLang from associative array of its fields
     *
     * @param array $array
     * @return H1DescriptorMultiLang
     */
    public static function fromArray(array $array) {
        return new H1DescriptorMultiLang($array['fr'],
                                         $array['en']);
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
                'fr' => $this->fr,
                'en' => $this->en,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "H1DescriptorMultiLang{fr=" . $this->fr .
                                     ", en=" . $this->en . "}";
    }
}