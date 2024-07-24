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

class Transaction implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var UTCDateTime */
    protected $createdTime ;

    /** @var H1 */
    protected $h1 ;

    /** @var TransactionDetails */
    protected $details ;

    /** @var Dc */
    protected $dc ;

    /** @var TransactionParent */
    protected $parent ;

    /** @var MoneyAccount */
    protected $source ;

    /** @var MoneyAccount */
    protected $destination ;

    /** @var Amount */
    protected $amount ;

    /** @var TransactionStatus */
    protected $status ;

    /** @var TransactionWalletView */
    protected $wallet ;

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignData ;


    /** @var string */
    const Type = "Transaction";

    /**
     * Transaction constructor
     * @param string $id
     * @param string $url
     * @param UTCDateTime $createdTime
     * @param H1 $h1
     * @param TransactionDetails $details
     * @param Dc $dc
     * @param TransactionParent $parent
     * @param MoneyAccount $source
     * @param MoneyAccount $destination
     * @param Amount $amount
     * @param TransactionStatus $status
     * @param TransactionWalletView $wallet
     * @param string | null $description
     * @param string | null $foreignData
     */
    function __construct($id,
                         $url,
                         UTCDateTime $createdTime,
                         H1 $h1,
                         TransactionDetails $details,
                         Dc $dc,
                         TransactionParent $parent,
                         MoneyAccount $source,
                         MoneyAccount $destination,
                         Amount $amount,
                         TransactionStatus $status,
                         TransactionWalletView $wallet,
                         $description = null,
                         $foreignData = null) {
        $this->id = $id;
        $this->url = $url;
        $this->createdTime = $createdTime;
        $this->h1 = $h1;
        $this->details = $details;
        $this->dc = $dc;
        $this->parent = $parent;
        $this->source = $source;
        $this->destination = $destination;
        $this->amount = $amount;
        $this->status = $status;
        $this->wallet = $wallet;
        $this->description = $description;
        $this->foreignData = $foreignData;
    }

    /**
     * Getter of the field 'id'.
     *
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Getter of the field 'url'.
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Getter of the field 'createdTime'.
     *
     * @return UTCDateTime
     */
    public function getCreatedTime() {
        return $this->createdTime;
    }

    /**
     * Getter of the field 'h1'.
     *
     * @return H1
     */
    public function getH1() {
        return $this->h1;
    }

    /**
     * Getter of the field 'details'.
     *
     * @return TransactionDetails
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * Getter of the field 'dc'.
     *
     * @return Dc
     */
    public function getDc() {
        return $this->dc;
    }

    /**
     * Getter of the field 'parent'.
     *
     * @return TransactionParent
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * Getter of the field 'source'.
     *
     * @return MoneyAccount
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * Getter of the field 'destination'.
     *
     * @return MoneyAccount
     */
    public function getDestination() {
        return $this->destination;
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
     * Getter of the field 'status'.
     *
     * @return TransactionStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Getter of the field 'wallet'.
     *
     * @return TransactionWalletView
     */
    public function getWallet() {
        return $this->wallet;
    }

    /**
     * Getter of the field 'description'.
     *
     * @return string | null
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Getter of the field 'foreignData'.
     *
     * @return string | null
     */
    public function getForeignData() {
        return $this->foreignData;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Transaction where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return Transaction
     */
    public function withId($id) {
        return new Transaction($id, $this->url, $this->createdTime, $this->h1, $this->details,
                               $this->dc, $this->parent, $this->source, $this->destination,
                               $this->amount, $this->status, $this->wallet, $this->description,
                               $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return Transaction
     */
    public function withUrl($url) {
        return new Transaction($this->id, $url, $this->createdTime, $this->h1, $this->details,
                               $this->dc, $this->parent, $this->source, $this->destination,
                               $this->amount, $this->status, $this->wallet, $this->description,
                               $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return Transaction
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class Transaction the param 'createdTime' of type UTCDateTime can not be null");
        return new Transaction($this->id, $this->url, $createdTime, $this->h1, $this->details,
                               $this->dc, $this->parent, $this->source, $this->destination,
                               $this->amount, $this->status, $this->wallet, $this->description,
                               $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'h1' has been updated with the value passed as parameter.
     *
     * @param H1 $h1
     * @return Transaction
     */
    public function withH1(H1 $h1) {
        assert($this->h1 != null, "In class Transaction the param 'h1' of type H1 can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $h1, $this->details,
                               $this->dc, $this->parent, $this->source, $this->destination,
                               $this->amount, $this->status, $this->wallet, $this->description,
                               $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'details' has been updated with the value passed as parameter.
     *
     * @param TransactionDetails $details
     * @return Transaction
     */
    public function withDetails(TransactionDetails $details) {
        assert($this->details != null, "In class Transaction the param 'details' of type TransactionDetails can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $details,
                               $this->dc, $this->parent, $this->source, $this->destination,
                               $this->amount, $this->status, $this->wallet, $this->description,
                               $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'dc' has been updated with the value passed as parameter.
     *
     * @param Dc $dc
     * @return Transaction
     */
    public function withDc(Dc $dc) {
        assert($this->dc != null, "In class Transaction the param 'dc' of type Dc can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->details,
                               $dc, $this->parent, $this->source, $this->destination, $this->amount,
                               $this->status, $this->wallet, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'parent' has been updated with the value passed as parameter.
     *
     * @param TransactionParent $parent
     * @return Transaction
     */
    public function withParent(TransactionParent $parent) {
        assert($this->parent != null, "In class Transaction the param 'parent' of type TransactionParent can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->details,
                               $this->dc, $parent, $this->source, $this->destination, $this->amount,
                               $this->status, $this->wallet, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'source' has been updated with the value passed as parameter.
     *
     * @param MoneyAccount $source
     * @return Transaction
     */
    public function withSource(MoneyAccount $source) {
        assert($this->source != null, "In class Transaction the param 'source' of type MoneyAccount can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->details,
                               $this->dc, $this->parent, $source, $this->destination, $this->amount,
                               $this->status, $this->wallet, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'destination' has been updated with the value passed as parameter.
     *
     * @param MoneyAccount $destination
     * @return Transaction
     */
    public function withDestination(MoneyAccount $destination) {
        assert($this->destination != null, "In class Transaction the param 'destination' of type MoneyAccount can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->details,
                               $this->dc, $this->parent, $this->source, $destination, $this->amount,
                               $this->status, $this->wallet, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return Transaction
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class Transaction the param 'amount' of type Amount can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->details,
                               $this->dc, $this->parent, $this->source, $this->destination,
                               $amount, $this->status, $this->wallet, $this->description,
                               $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'status' has been updated with the value passed as parameter.
     *
     * @param TransactionStatus $status
     * @return Transaction
     */
    public function withStatus(TransactionStatus $status) {
        assert($this->status != null, "In class Transaction the param 'status' of type TransactionStatus can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->details,
                               $this->dc, $this->parent, $this->source, $this->destination,
                               $this->amount, $status, $this->wallet, $this->description,
                               $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'wallet' has been updated with the value passed as parameter.
     *
     * @param TransactionWalletView $wallet
     * @return Transaction
     */
    public function withWallet(TransactionWalletView $wallet) {
        assert($this->wallet != null, "In class Transaction the param 'wallet' of type TransactionWalletView can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->details,
                               $this->dc, $this->parent, $this->source, $this->destination,
                               $this->amount, $this->status, $wallet, $this->description,
                               $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return Transaction
     */
    public function withDescription($description) {
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->details,
                               $this->dc, $this->parent, $this->source, $this->destination,
                               $this->amount, $this->status, $this->wallet, $description,
                               $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return Transaction
     */
    public function withForeignData($foreignData) {
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->details,
                               $this->dc, $this->parent, $this->source, $this->destination,
                               $this->amount, $this->status, $this->wallet, $this->description,
                               $foreignData);
    }

    /**
     * Create Transaction from JSON string
     *
     * @param string $json
     * @return Transaction
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Transaction from associative array of its fields
     *
     * @param array $array
     * @return Transaction
     */
    public static function fromArray(array $array) {
        return new Transaction($array['id'],
                               $array['url'],
                               UTCDateTime::fromArray($array['createdTime']),
                               H1::fromArray($array['h1']),
                               TransactionDetails::fromArray($array['details']),
                               Dc::fromString($array['dc']),
                               TransactionParent::fromArray($array['parent']),
                               MoneyAccount::fromArray($array['source']),
                               MoneyAccount::fromArray($array['destination']),
                               Amount::fromArray($array['amount']),
                               TransactionStatus::fromArray($array['status']),
                               TransactionWalletView::fromArray($array['wallet']),
                               (isset($array['description']) ? $array['description'] : null),
                               (isset($array['foreignData']) ? $array['foreignData'] : null));
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
                'id' => $this->id,
                'url' => $this->url,
                'createdTime' => ($this->createdTime !== null ? $this->createdTime->toArray() : null),
                'h1' => ($this->h1 !== null ? $this->h1->toArray() : null),
                'details' => ($this->details !== null ? $this->details->toArray() : null),
                'dc' => ((string) $this->dc),
                'parent' => ($this->parent !== null ? $this->parent->toArray() : null),
                'source' => ($this->source !== null ? $this->source->toArray() : null),
                'destination' => ($this->destination !== null ? $this->destination->toArray() : null),
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'status' => ($this->status !== null ? $this->status->toArray() : null),
                'wallet' => ($this->wallet !== null ? $this->wallet->toArray() : null),
                'description' => $this->description,
                'foreignData' => $this->foreignData,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Transaction{id=" . $this->id .
                           ", url=" . $this->url .
                           ", createdTime=" . $this->createdTime .
                           ", h1=" . $this->h1 .
                           ", details=" . $this->details .
                           ", dc=" . $this->dc .
                           ", parent=" . $this->parent .
                           ", source=" . $this->source .
                           ", destination=" . $this->destination .
                           ", amount=" . $this->amount .
                           ", status=" . $this->status .
                           ", wallet=" . $this->wallet .
                           ", description=" . $this->description .
                           ", foreignData=" . $this->foreignData . "}";
    }
}