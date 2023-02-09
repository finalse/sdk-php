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

class DepositMethodCreditCard extends DepositMethod implements JsonSerializable  {

    /** @var string */
    protected $last4Digits ;

    /** @var CreditCardNetwork */
    protected $network ;

    /** @var string | null */
    protected $bank ;

    /** @var string */
    protected $expirationDate ;

    /** @var string */
    protected $pgid ;

    /** @var string */
    protected $nameOnCard ;


    /** @var string */
    const Type = "DepositMethod.CreditCard";


    /** @var string */
    const Variant = "CreditCard";

    /**
     * DepositMethodCreditCard constructor
     * @param string $last4Digits
     * @param CreditCardNetwork $network
     * @param string | null $bank
     * @param string $expirationDate
     * @param string $pgid
     * @param string $nameOnCard
     */
    function __construct($last4Digits,
                         CreditCardNetwork $network,
                         $bank = null,
                         $expirationDate,
                         $pgid,
                         $nameOnCard) {
        $this->last4Digits = $last4Digits;
        $this->network = $network;
        $this->bank = $bank;
        $this->expirationDate = $expirationDate;
        $this->pgid = $pgid;
        $this->nameOnCard = $nameOnCard;
    }

    /**
     * Getter of the field 'last4Digits'.
     *
     * @return string
     */
    public function getLast4Digits() {
        return $this->last4Digits;
    }

    /**
     * Getter of the field 'network'.
     *
     * @return CreditCardNetwork
     */
    public function getNetwork() {
        return $this->network;
    }

    /**
     * Getter of the field 'bank'.
     *
     * @return string | null
     */
    public function getBank() {
        return $this->bank;
    }

    /**
     * Getter of the field 'expirationDate'.
     *
     * @return string
     */
    public function getExpirationDate() {
        return $this->expirationDate;
    }

    /**
     * Getter of the field 'pgid'.
     *
     * @return string
     */
    public function getPgid() {
        return $this->pgid;
    }

    /**
     * Getter of the field 'nameOnCard'.
     *
     * @return string
     */
    public function getNameOnCard() {
        return $this->nameOnCard;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new DepositMethodCreditCard where the field 'last4Digits' has been updated with the value passed as parameter.
     *
     * @param string $last4Digits
     * @return DepositMethodCreditCard
     */
    public function withLast4Digits($last4Digits) {
        return new DepositMethodCreditCard($last4Digits, $this->network, $this->bank, $this->expirationDate,
                                           $this->pgid, $this->nameOnCard);
    }

    /**
     * Immutable update. Return a new DepositMethodCreditCard where the field 'network' has been updated with the value passed as parameter.
     *
     * @param CreditCardNetwork $network
     * @return DepositMethodCreditCard
     */
    public function withNetwork(CreditCardNetwork $network) {
        assert($this->network != null, "In class DepositMethodCreditCard the param 'network' of type CreditCardNetwork can not be null");
        return new DepositMethodCreditCard($this->last4Digits, $network, $this->bank, $this->expirationDate,
                                           $this->pgid, $this->nameOnCard);
    }

    /**
     * Immutable update. Return a new DepositMethodCreditCard where the field 'bank' has been updated with the value passed as parameter.
     *
     * @param string | null $bank
     * @return DepositMethodCreditCard
     */
    public function withBank($bank) {
        return new DepositMethodCreditCard($this->last4Digits, $this->network, $bank, $this->expirationDate,
                                           $this->pgid, $this->nameOnCard);
    }

    /**
     * Immutable update. Return a new DepositMethodCreditCard where the field 'expirationDate' has been updated with the value passed as parameter.
     *
     * @param string $expirationDate
     * @return DepositMethodCreditCard
     */
    public function withExpirationDate($expirationDate) {
        return new DepositMethodCreditCard($this->last4Digits, $this->network, $this->bank,
                                           $expirationDate, $this->pgid, $this->nameOnCard);
    }

    /**
     * Immutable update. Return a new DepositMethodCreditCard where the field 'pgid' has been updated with the value passed as parameter.
     *
     * @param string $pgid
     * @return DepositMethodCreditCard
     */
    public function withPgid($pgid) {
        return new DepositMethodCreditCard($this->last4Digits, $this->network, $this->bank,
                                           $this->expirationDate, $pgid, $this->nameOnCard);
    }

    /**
     * Immutable update. Return a new DepositMethodCreditCard where the field 'nameOnCard' has been updated with the value passed as parameter.
     *
     * @param string $nameOnCard
     * @return DepositMethodCreditCard
     */
    public function withNameOnCard($nameOnCard) {
        return new DepositMethodCreditCard($this->last4Digits, $this->network, $this->bank,
                                           $this->expirationDate, $this->pgid, $nameOnCard);
    }

    /**
     * Create DepositMethodCreditCard from JSON string
     *
     * @param string $json
     * @return DepositMethodCreditCard
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create DepositMethodCreditCard from associative array of its fields
     *
     * @param array $array
     * @return DepositMethodCreditCard
     */
    public static function fromArray(array $array) {
        return new DepositMethodCreditCard($array['last4Digits'],
                                           CreditCardNetwork::fromString($array['network']),
                                           (isset($array['bank']) ? $array['bank'] : null),
                                           $array['expirationDate'],
                                           $array['pgid'],
                                           $array['nameOnCard']);
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
                'last4Digits' => $this->last4Digits,
                'network' => ((string) $this->network),
                'bank' => $this->bank,
                'expirationDate' => $this->expirationDate,
                'pgid' => $this->pgid,
                'nameOnCard' => $this->nameOnCard,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "DepositMethodCreditCard{last4Digits=" . $this->last4Digits .
                                       ", network=" . $this->network .
                                       ", bank=" . $this->bank .
                                       ", expirationDate=" . $this->expirationDate .
                                       ", pgid=" . $this->pgid .
                                       ", nameOnCard=" . $this->nameOnCard . "}";
    }
}