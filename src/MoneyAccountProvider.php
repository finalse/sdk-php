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

class MoneyAccountProvider implements JsonSerializable  {

    /** @var Country */
    protected $country ;

    /** @var string */
    protected $key ;

    /** @var string */
    protected $name ;


    /** @var string */
    const Type = "MoneyAccountProvider";

    /**
     * MoneyAccountProvider constructor
     * @param Country $country
     * @param string $key
     * @param string $name
     */
    function __construct(Country $country, $key, $name) {
        $this->country = $country;
        $this->key = $key;
        $this->name = $name;
    }

    /**
     * Getter of the field 'country'.
     *
     * @return Country
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Getter of the field 'key'.
     *
     * @return string
     */
    public function getKey() {
        return $this->key;
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
     * Immutable update. Return a new MoneyAccountProvider where the field 'country' has been updated with the value passed as parameter.
     *
     * @param Country $country
     * @return MoneyAccountProvider
     */
    public function withCountry(Country $country) {
        assert($this->country != null, "In class MoneyAccountProvider the param 'country' of type Country can not be null");
        return new MoneyAccountProvider($country, $this->key, $this->name);
    }

    /**
     * Immutable update. Return a new MoneyAccountProvider where the field 'key' has been updated with the value passed as parameter.
     *
     * @param string $key
     * @return MoneyAccountProvider
     */
    public function withKey($key) {
        return new MoneyAccountProvider($this->country, $key, $this->name);
    }

    /**
     * Immutable update. Return a new MoneyAccountProvider where the field 'name' has been updated with the value passed as parameter.
     *
     * @param string $name
     * @return MoneyAccountProvider
     */
    public function withName($name) {
        return new MoneyAccountProvider($this->country, $this->key, $name);
    }

    /**
     * Create MoneyAccountProvider from JSON string
     *
     * @param string $json
     * @return MoneyAccountProvider
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create MoneyAccountProvider from associative array of its fields
     *
     * @param array $array
     * @return MoneyAccountProvider
     */
    public static function fromArray(array $array) {
        return new MoneyAccountProvider(Country::fromArray($array['country']),
                                        $array['key'],
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
                'country' => ($this->country !== null ? $this->country->toArray() : null),
                'key' => $this->key,
                'name' => $this->name,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "MoneyAccountProvider{country=" . $this->country .
                                    ", key=" . $this->key .
                                    ", name=" . $this->name . "}";
    }
}