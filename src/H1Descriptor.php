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

class H1Descriptor implements JsonSerializable  {

    /** @var string | null */
    protected $fr ;

    /** @var string | null */
    protected $en ;


    /** @var string */
    const Type = "H1Descriptor";

    /**
     * H1Descriptor constructor
     * @param string | null $fr
     * @param string | null $en
     */
    function __construct($fr = null, $en = null) {
        $this->fr = $fr;
        $this->en = $en;
    }

    /**
     * Getter of the field 'fr'.
     *
     * @return string | null
     */
    public function getFr() {
        return $this->fr;
    }

    /**
     * Getter of the field 'en'.
     *
     * @return string | null
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
     * Immutable update. Return a new H1Descriptor where the field 'fr' has been updated with the value passed as parameter.
     *
     * @param string | null $fr
     * @return H1Descriptor
     */
    public function withFr($fr) {
        return new H1Descriptor($fr, $this->en);
    }

    /**
     * Immutable update. Return a new H1Descriptor where the field 'en' has been updated with the value passed as parameter.
     *
     * @param string | null $en
     * @return H1Descriptor
     */
    public function withEn($en) {
        return new H1Descriptor($this->fr, $en);
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
        return new H1Descriptor((isset($array['fr']) ? $array['fr'] : null),
                                (isset($array['en']) ? $array['en'] : null));
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
                'fr' => $this->fr,
                'en' => $this->en,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "H1Descriptor{fr=" . $this->fr .
                            ", en=" . $this->en . "}";
    }
}