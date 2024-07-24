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

class MoneyAccount implements JsonSerializable  {

    /** @var BalanceType */
    protected $balanceType ;

    /** @var MoneyAccountProvider */
    protected $provider ;

    /** @var MoneyAccountIdentifier */
    protected $identifier ;


    /** @var string */
    const Type = "MoneyAccount";

    /**
     * MoneyAccount constructor
     * @param BalanceType $balanceType
     * @param MoneyAccountProvider $provider
     * @param MoneyAccountIdentifier $identifier
     */
    function __construct(BalanceType $balanceType,
                         MoneyAccountProvider $provider,
                         MoneyAccountIdentifier $identifier) {
        $this->balanceType = $balanceType;
        $this->provider = $provider;
        $this->identifier = $identifier;
    }

    /**
     * Getter of the field 'balanceType'.
     *
     * @return BalanceType
     */
    public function getBalanceType() {
        return $this->balanceType;
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
     * @return MoneyAccountIdentifier
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
     * Immutable update. Return a new MoneyAccount where the field 'balanceType' has been updated with the value passed as parameter.
     *
     * @param BalanceType $balanceType
     * @return MoneyAccount
     */
    public function withBalanceType(BalanceType $balanceType) {
        assert($this->balanceType != null, "In class MoneyAccount the param 'balanceType' of type BalanceType can not be null");
        return new MoneyAccount($balanceType, $this->provider, $this->identifier);
    }

    /**
     * Immutable update. Return a new MoneyAccount where the field 'provider' has been updated with the value passed as parameter.
     *
     * @param MoneyAccountProvider $provider
     * @return MoneyAccount
     */
    public function withProvider(MoneyAccountProvider $provider) {
        assert($this->provider != null, "In class MoneyAccount the param 'provider' of type MoneyAccountProvider can not be null");
        return new MoneyAccount($this->balanceType, $provider, $this->identifier);
    }

    /**
     * Immutable update. Return a new MoneyAccount where the field 'identifier' has been updated with the value passed as parameter.
     *
     * @param MoneyAccountIdentifier $identifier
     * @return MoneyAccount
     */
    public function withIdentifier(MoneyAccountIdentifier $identifier) {
        assert($this->identifier != null, "In class MoneyAccount the param 'identifier' of type MoneyAccountIdentifier can not be null");
        return new MoneyAccount($this->balanceType, $this->provider, $identifier);
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
        return new MoneyAccount(BalanceType::fromString($array['balanceType']),
                                MoneyAccountProvider::fromArray($array['provider']),
                                MoneyAccountIdentifier::fromArray($array['identifier']));
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
                'balanceType' => ((string) $this->balanceType),
                'provider' => ($this->provider !== null ? $this->provider->toArray() : null),
                'identifier' => ($this->identifier !== null ? $this->identifier->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "MoneyAccount{balanceType=" . $this->balanceType .
                            ", provider=" . $this->provider .
                            ", identifier=" . $this->identifier . "}";
    }
}