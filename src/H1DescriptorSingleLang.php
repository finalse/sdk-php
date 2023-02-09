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

class H1DescriptorSingleLang extends H1Descriptor implements JsonSerializable  {

    /** @var Lang */
    protected $lang ;

    /** @var string */
    protected $text ;


    /** @var string */
    const Type = "H1Descriptor.SingleLang";


    /** @var string */
    const Variant = "SingleLang";

    /**
     * H1DescriptorSingleLang constructor
     * @param Lang $lang
     * @param string $text
     */
    function __construct(Lang $lang, $text) {
        $this->lang = $lang;
        $this->text = $text;
    }

    /**
     * Getter of the field 'lang'.
     *
     * @return Lang
     */
    public function getLang() {
        return $this->lang;
    }

    /**
     * Getter of the field 'text'.
     *
     * @return string
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new H1DescriptorSingleLang where the field 'lang' has been updated with the value passed as parameter.
     *
     * @param Lang $lang
     * @return H1DescriptorSingleLang
     */
    public function withLang(Lang $lang) {
        assert($this->lang != null, "In class H1DescriptorSingleLang the param 'lang' of type Lang can not be null");
        return new H1DescriptorSingleLang($lang, $this->text);
    }

    /**
     * Immutable update. Return a new H1DescriptorSingleLang where the field 'text' has been updated with the value passed as parameter.
     *
     * @param string $text
     * @return H1DescriptorSingleLang
     */
    public function withText($text) {
        return new H1DescriptorSingleLang($this->lang, $text);
    }

    /**
     * Create H1DescriptorSingleLang from JSON string
     *
     * @param string $json
     * @return H1DescriptorSingleLang
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create H1DescriptorSingleLang from associative array of its fields
     *
     * @param array $array
     * @return H1DescriptorSingleLang
     */
    public static function fromArray(array $array) {
        return new H1DescriptorSingleLang(Lang::fromString($array['lang']),
                                          $array['text']);
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
                'lang' => ((string) $this->lang),
                'text' => $this->text,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "H1DescriptorSingleLang{lang=" . $this->lang .
                                      ", text=" . $this->text . "}";
    }
}