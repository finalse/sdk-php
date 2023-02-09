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

class Iso3166CountryCode implements JsonSerializable  {

    /** @var string */
    protected $alpha2 ;

    /** @var string */
    protected $alpha3 ;

    /** @var integer */
    protected $numeric ;


    /** @var string */
    const Type = "Iso3166CountryCode";

    /**
     * Iso3166CountryCode constructor
     * @param string $alpha2
     * @param string $alpha3
     * @param integer $numeric
     */
    function __construct($alpha2, $alpha3, $numeric) {
        $this->alpha2 = $alpha2;
        $this->alpha3 = $alpha3;
        $this->numeric = $numeric;
    }

    /**
     * Getter of the field 'alpha2'.
     *
     * @return string
     */
    public function getAlpha2() {
        return $this->alpha2;
    }

    /**
     * Getter of the field 'alpha3'.
     *
     * @return string
     */
    public function getAlpha3() {
        return $this->alpha3;
    }

    /**
     * Getter of the field 'numeric'.
     *
     * @return integer
     */
    public function getNumeric() {
        return $this->numeric;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Iso3166CountryCode where the field 'alpha2' has been updated with the value passed as parameter.
     *
     * @param string $alpha2
     * @return Iso3166CountryCode
     */
    public function withAlpha2($alpha2) {
        return new Iso3166CountryCode($alpha2, $this->alpha3, $this->numeric);
    }

    /**
     * Immutable update. Return a new Iso3166CountryCode where the field 'alpha3' has been updated with the value passed as parameter.
     *
     * @param string $alpha3
     * @return Iso3166CountryCode
     */
    public function withAlpha3($alpha3) {
        return new Iso3166CountryCode($this->alpha2, $alpha3, $this->numeric);
    }

    /**
     * Immutable update. Return a new Iso3166CountryCode where the field 'numeric' has been updated with the value passed as parameter.
     *
     * @param integer $numeric
     * @return Iso3166CountryCode
     */
    public function withNumeric($numeric) {
        return new Iso3166CountryCode($this->alpha2, $this->alpha3, $numeric);
    }

    /**
     * Create Iso3166CountryCode from JSON string
     *
     * @param string $json
     * @return Iso3166CountryCode
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Iso3166CountryCode from associative array of its fields
     *
     * @param array $array
     * @return Iso3166CountryCode
     */
    public static function fromArray(array $array) {
        return new Iso3166CountryCode($array['alpha2'],
                                      $array['alpha3'],
                                      $array['numeric']);
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
                'alpha2' => $this->alpha2,
                'alpha3' => $this->alpha3,
                'numeric' => $this->numeric,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Iso3166CountryCode{alpha2=" . $this->alpha2 .
                                  ", alpha3=" . $this->alpha3 .
                                  ", numeric=" . $this->numeric . "}";
    }
}