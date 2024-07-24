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

class LocalizedVariableText implements JsonSerializable  {

    /** @var VariableText */
    protected $fr ;

    /** @var VariableText */
    protected $en ;


    /** @var string */
    const Type = "LocalizedVariableText";

    /**
     * LocalizedVariableText constructor
     * @param VariableText $fr
     * @param VariableText $en
     */
    function __construct(VariableText $fr, VariableText $en) {
        $this->fr = $fr;
        $this->en = $en;
    }

    /**
     * Getter of the field 'fr'.
     *
     * @return VariableText
     */
    public function getFr() {
        return $this->fr;
    }

    /**
     * Getter of the field 'en'.
     *
     * @return VariableText
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
     * Immutable update. Return a new LocalizedVariableText where the field 'fr' has been updated with the value passed as parameter.
     *
     * @param VariableText $fr
     * @return LocalizedVariableText
     */
    public function withFr(VariableText $fr) {
        assert($this->fr != null, "In class LocalizedVariableText the param 'fr' of type VariableText can not be null");
        return new LocalizedVariableText($fr, $this->en);
    }

    /**
     * Immutable update. Return a new LocalizedVariableText where the field 'en' has been updated with the value passed as parameter.
     *
     * @param VariableText $en
     * @return LocalizedVariableText
     */
    public function withEn(VariableText $en) {
        assert($this->en != null, "In class LocalizedVariableText the param 'en' of type VariableText can not be null");
        return new LocalizedVariableText($this->fr, $en);
    }

    /**
     * Create LocalizedVariableText from JSON string
     *
     * @param string $json
     * @return LocalizedVariableText
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create LocalizedVariableText from associative array of its fields
     *
     * @param array $array
     * @return LocalizedVariableText
     */
    public static function fromArray(array $array) {
        return new LocalizedVariableText(VariableText::fromArray($array['fr']),
                                         VariableText::fromArray($array['en']));
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
                'fr' => ($this->fr !== null ? $this->fr->toArray() : null),
                'en' => ($this->en !== null ? $this->en->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "LocalizedVariableText{fr=" . $this->fr .
                                     ", en=" . $this->en . "}";
    }
}