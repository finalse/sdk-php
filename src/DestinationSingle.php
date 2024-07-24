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

class DestinationSingle extends Destination implements JsonSerializable  {

    /** @var Amount */
    protected $amount ;

    /** @var MoneyAccount */
    protected $account ;


    /** @var string */
    const Type = "Destination.Single";


    /** @var string */
    const Variant = "Single";

    /**
     * DestinationSingle constructor
     * @param Amount $amount
     * @param MoneyAccount $account
     */
    function __construct(Amount $amount, MoneyAccount $account) {
        $this->amount = $amount;
        $this->account = $account;
    }

    /**
     * Getter of the field 'amount'.
     *
     * @return Amount
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Getter of the field 'account'.
     *
     * @return MoneyAccount
     */
    public function getAccount() {
        return $this->account;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new DestinationSingle where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return DestinationSingle
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class DestinationSingle the param 'amount' of type Amount can not be null");
        return new DestinationSingle($amount, $this->account);
    }

    /**
     * Immutable update. Return a new DestinationSingle where the field 'account' has been updated with the value passed as parameter.
     *
     * @param MoneyAccount $account
     * @return DestinationSingle
     */
    public function withAccount(MoneyAccount $account) {
        assert($this->account != null, "In class DestinationSingle the param 'account' of type MoneyAccount can not be null");
        return new DestinationSingle($this->amount, $account);
    }

    /**
     * Create DestinationSingle from JSON string
     *
     * @param string $json
     * @return DestinationSingle
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create DestinationSingle from associative array of its fields
     *
     * @param array $array
     * @return DestinationSingle
     */
    public static function fromArray(array $array) {
        return new DestinationSingle(Amount::fromArray($array['amount']),
                                     MoneyAccount::fromArray($array['account']));
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
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'account' => ($this->account !== null ? $this->account->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "DestinationSingle{amount=" . $this->amount .
                                 ", account=" . $this->account . "}";
    }
}