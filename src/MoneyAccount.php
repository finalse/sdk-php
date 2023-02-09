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

class MoneyAccount implements JsonSerializable  {

    /** @var MoneyAccountProvider */
    protected $provider ;

    /** @var string */
    protected $identifier ;


    /** @var string */
    const Type = "MoneyAccount";

    /**
     * MoneyAccount constructor
     * @param MoneyAccountProvider $provider
     * @param string $identifier
     */
    function __construct(MoneyAccountProvider $provider, $identifier) {
        $this->provider = $provider;
        $this->identifier = $identifier;
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
     * Getter of the field 'identifier'.
     *
     * @return string
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new MoneyAccount where the field 'provider' has been updated with the value passed as parameter.
     *
     * @param MoneyAccountProvider $provider
     * @return MoneyAccount
     */
    public function withProvider(MoneyAccountProvider $provider) {
        assert($this->provider != null, "In class MoneyAccount the param 'provider' of type MoneyAccountProvider can not be null");
        return new MoneyAccount($provider, $this->identifier);
    }

    /**
     * Immutable update. Return a new MoneyAccount where the field 'identifier' has been updated with the value passed as parameter.
     *
     * @param string $identifier
     * @return MoneyAccount
     */
    public function withIdentifier($identifier) {
        return new MoneyAccount($this->provider, $identifier);
    }

    /**
     * Create MoneyAccount from JSON string
     *
     * @param string $json
     * @return MoneyAccount
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create MoneyAccount from associative array of its fields
     *
     * @param array $array
     * @return MoneyAccount
     */
    public static function fromArray(array $array) {
        return new MoneyAccount(MoneyAccountProvider::fromArray($array['provider']),
                                $array['identifier']);
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
                'provider' => ($this->provider !== null ? $this->provider->toArray() : null),
                'identifier' => $this->identifier,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "MoneyAccount{provider=" . $this->provider .
                            ", identifier=" . $this->identifier . "}";
    }
}