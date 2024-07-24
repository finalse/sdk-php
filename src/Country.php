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

class Country implements JsonSerializable  {

    /** @var Iso3166CountryCode */
    protected $code ;

    /** @var string */
    protected $name ;


    /** @var string */
    const Type = "Country";

    /**
     * Country constructor
     * @param Iso3166CountryCode $code
     * @param string $name
     */
    function __construct(Iso3166CountryCode $code, $name) {
        $this->code = $code;
        $this->name = $name;
    }

    /**
     * Getter of the field 'code'.
     *
     * @return Iso3166CountryCode
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Getter of the field 'name'.
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Country where the field 'code' has been updated with the value passed as parameter.
     *
     * @param Iso3166CountryCode $code
     * @return Country
     */
    public function withCode(Iso3166CountryCode $code) {
        assert($this->code != null, "In class Country the param 'code' of type Iso3166CountryCode can not be null");
        return new Country($code, $this->name);
    }

    /**
     * Immutable update. Return a new Country where the field 'name' has been updated with the value passed as parameter.
     *
     * @param string $name
     * @return Country
     */
    public function withName($name) {
        return new Country($this->code, $name);
    }

    /**
     * Create Country from JSON string
     *
     * @param string $json
     * @return Country
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Country from associative array of its fields
     *
     * @param array $array
     * @return Country
     */
    public static function fromArray(array $array) {
        return new Country(Iso3166CountryCode::fromArray($array['code']),
                           $array['name']);
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
                'code' => ($this->code !== null ? $this->code->toArray() : null),
                'name' => $this->name,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Country{code=" . $this->code .
                       ", name=" . $this->name . "}";
    }
}