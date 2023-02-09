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

class Transaction implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var UTCDateTime */
    protected $createdTime ;

    /** @var string */
    protected $h1 ;

    /** @var MoneyAccount */
    protected $origin ;

    /** @var MoneyAccount */
    protected $destination ;

    /** @var Amount */
    protected $amount ;

    /** @var TransactionSign */
    protected $sign ;

    /** @var TransactionStatus */
    protected $status ;

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;


    /** @var string */
    const Type = "Transaction";

    /**
     * Transaction constructor
     * @param string $id
     * @param string $url
     * @param UTCDateTime $createdTime
     * @param string $h1
     * @param MoneyAccount $origin
     * @param MoneyAccount $destination
     * @param Amount $amount
     * @param TransactionSign $sign
     * @param TransactionStatus $status
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct($id,
                         $url,
                         UTCDateTime $createdTime,
                         $h1,
                         MoneyAccount $origin,
                         MoneyAccount $destination,
                         Amount $amount,
                         TransactionSign $sign,
                         TransactionStatus $status,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->id = $id;
        $this->url = $url;
        $this->createdTime = $createdTime;
        $this->h1 = $h1;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->amount = $amount;
        $this->sign = $sign;
        $this->status = $status;
        $this->description = $description;
        $this->foreignId = $foreignId;
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
     * @return string
     */
    public function getH1() {
        return $this->h1;
    }

    /**
     * Getter of the field 'origin'.
     *
     * @return MoneyAccount
     */
    public function getOrigin() {
        return $this->origin;
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
     * Getter of the field 'sign'.
     *
     * @return TransactionSign
     */
    public function getSign() {
        return $this->sign;
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
     * Getter of the field 'description'.
     *
     * @return string | null
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Getter of the field 'foreignId'.
     *
     * @return string | null
     */
    public function getForeignId() {
        return $this->foreignId;
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
        return new Transaction($id, $this->url, $this->createdTime, $this->h1, $this->origin,
                               $this->destination, $this->amount, $this->sign, $this->status,
                               $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return Transaction
     */
    public function withUrl($url) {
        return new Transaction($this->id, $url, $this->createdTime, $this->h1, $this->origin,
                               $this->destination, $this->amount, $this->sign, $this->status,
                               $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return Transaction
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class Transaction the param 'createdTime' of type UTCDateTime can not be null");
        return new Transaction($this->id, $this->url, $createdTime, $this->h1, $this->origin,
                               $this->destination, $this->amount, $this->sign, $this->status,
                               $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'h1' has been updated with the value passed as parameter.
     *
     * @param string $h1
     * @return Transaction
     */
    public function withH1($h1) {
        return new Transaction($this->id, $this->url, $this->createdTime, $h1, $this->origin,
                               $this->destination, $this->amount, $this->sign, $this->status,
                               $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'origin' has been updated with the value passed as parameter.
     *
     * @param MoneyAccount $origin
     * @return Transaction
     */
    public function withOrigin(MoneyAccount $origin) {
        assert($this->origin != null, "In class Transaction the param 'origin' of type MoneyAccount can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $origin,
                               $this->destination, $this->amount, $this->sign, $this->status,
                               $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'destination' has been updated with the value passed as parameter.
     *
     * @param MoneyAccount $destination
     * @return Transaction
     */
    public function withDestination(MoneyAccount $destination) {
        assert($this->destination != null, "In class Transaction the param 'destination' of type MoneyAccount can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->origin,
                               $destination, $this->amount, $this->sign, $this->status, $this->description,
                               $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return Transaction
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class Transaction the param 'amount' of type Amount can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->origin,
                               $this->destination, $amount, $this->sign, $this->status, $this->description,
                               $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'sign' has been updated with the value passed as parameter.
     *
     * @param TransactionSign $sign
     * @return Transaction
     */
    public function withSign(TransactionSign $sign) {
        assert($this->sign != null, "In class Transaction the param 'sign' of type TransactionSign can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->origin,
                               $this->destination, $this->amount, $sign, $this->status, $this->description,
                               $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'status' has been updated with the value passed as parameter.
     *
     * @param TransactionStatus $status
     * @return Transaction
     */
    public function withStatus(TransactionStatus $status) {
        assert($this->status != null, "In class Transaction the param 'status' of type TransactionStatus can not be null");
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->origin,
                               $this->destination, $this->amount, $this->sign, $status, $this->description,
                               $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return Transaction
     */
    public function withDescription($description) {
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->origin,
                               $this->destination, $this->amount, $this->sign, $this->status,
                               $description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return Transaction
     */
    public function withForeignId($foreignId) {
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->origin,
                               $this->destination, $this->amount, $this->sign, $this->status,
                               $this->description, $foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transaction where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return Transaction
     */
    public function withForeignData($foreignData) {
        return new Transaction($this->id, $this->url, $this->createdTime, $this->h1, $this->origin,
                               $this->destination, $this->amount, $this->sign, $this->status,
                               $this->description, $this->foreignId, $foreignData);
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
                               $array['h1'],
                               MoneyAccount::fromArray($array['origin']),
                               MoneyAccount::fromArray($array['destination']),
                               Amount::fromArray($array['amount']),
                               TransactionSign::fromString($array['sign']),
                               TransactionStatus::fromString($array['status']),
                               (isset($array['description']) ? $array['description'] : null),
                               (isset($array['foreignId']) ? $array['foreignId'] : null),
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
                'h1' => $this->h1,
                'origin' => ($this->origin !== null ? $this->origin->toArray() : null),
                'destination' => ($this->destination !== null ? $this->destination->toArray() : null),
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'sign' => ((string) $this->sign),
                'status' => ((string) $this->status),
                'description' => $this->description,
                'foreignId' => $this->foreignId,
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
                           ", origin=" . $this->origin .
                           ", destination=" . $this->destination .
                           ", amount=" . $this->amount .
                           ", sign=" . $this->sign .
                           ", status=" . $this->status .
                           ", description=" . $this->description .
                           ", foreignId=" . $this->foreignId .
                           ", foreignData=" . $this->foreignData . "}";
    }
}