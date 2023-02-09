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

class DepositMethodMobileMoney extends DepositMethod implements JsonSerializable  {

    /** @var Country */
    protected $country ;

    /** @var MoneyAccountProvider */
    protected $provider ;

    /** @var string */
    protected $mobile ;


    /** @var string */
    const Type = "DepositMethod.MobileMoney";


    /** @var string */
    const Variant = "MobileMoney";

    /**
     * DepositMethodMobileMoney constructor
     * @param Country $country
     * @param MoneyAccountProvider $provider
     * @param string $mobile
     */
    function __construct(Country $country, MoneyAccountProvider $provider, $mobile) {
        $this->country = $country;
        $this->provider = $provider;
        $this->mobile = $mobile;
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
     * Getter of the field 'provider'.
     *
     * @return MoneyAccountProvider
     */
    public function getProvider() {
        return $this->provider;
    }

    /**
     * Getter of the field 'mobile'.
     *
     * @return string
     */
    public function getMobile() {
        return $this->mobile;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new DepositMethodMobileMoney where the field 'country' has been updated with the value passed as parameter.
     *
     * @param Country $country
     * @return DepositMethodMobileMoney
     */
    public function withCountry(Country $country) {
        assert($this->country != null, "In class DepositMethodMobileMoney the param 'country' of type Country can not be null");
        return new DepositMethodMobileMoney($country, $this->provider, $this->mobile);
    }

    /**
     * Immutable update. Return a new DepositMethodMobileMoney where the field 'provider' has been updated with the value passed as parameter.
     *
     * @param MoneyAccountProvider $provider
     * @return DepositMethodMobileMoney
     */
    public function withProvider(MoneyAccountProvider $provider) {
        assert($this->provider != null, "In class DepositMethodMobileMoney the param 'provider' of type MoneyAccountProvider can not be null");
        return new DepositMethodMobileMoney($this->country, $provider, $this->mobile);
    }

    /**
     * Immutable update. Return a new DepositMethodMobileMoney where the field 'mobile' has been updated with the value passed as parameter.
     *
     * @param string $mobile
     * @return DepositMethodMobileMoney
     */
    public function withMobile($mobile) {
        return new DepositMethodMobileMoney($this->country, $this->provider, $mobile);
    }

    /**
     * Create DepositMethodMobileMoney from JSON string
     *
     * @param string $json
     * @return DepositMethodMobileMoney
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create DepositMethodMobileMoney from associative array of its fields
     *
     * @param array $array
     * @return DepositMethodMobileMoney
     */
    public static function fromArray(array $array) {
        return new DepositMethodMobileMoney(Country::fromArray($array['country']),
                                            MoneyAccountProvider::fromArray($array['provider']),
                                            $array['mobile']);
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
                'country' => ($this->country !== null ? $this->country->toArray() : null),
                'provider' => ($this->provider !== null ? $this->provider->toArray() : null),
                'mobile' => $this->mobile,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "DepositMethodMobileMoney{country=" . $this->country .
                                        ", provider=" . $this->provider .
                                        ", mobile=" . $this->mobile . "}";
    }
}