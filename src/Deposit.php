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

class Deposit implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var UTCDateTime */
    protected $createdTime ;

    /** @var H1Descriptor */
    protected $h1Descriptor ;

    /** @var Wallet */
    protected $wallet ;

    /** @var DepositMethod */
    protected $method ;

    /** @var Amount */
    protected $amount ;

    /** @var DepositStatus */
    protected $status ;

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;


    /** @var string */
    const Type = "Deposit";

    /**
     * Deposit constructor
     * @param string $id
     * @param string $url
     * @param UTCDateTime $createdTime
     * @param H1Descriptor $h1Descriptor
     * @param Wallet $wallet
     * @param DepositMethod $method
     * @param Amount $amount
     * @param DepositStatus $status
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct($id,
                         $url,
                         UTCDateTime $createdTime,
                         H1Descriptor $h1Descriptor,
                         Wallet $wallet,
                         DepositMethod $method,
                         Amount $amount,
                         DepositStatus $status,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->id = $id;
        $this->url = $url;
        $this->createdTime = $createdTime;
        $this->h1Descriptor = $h1Descriptor;
        $this->wallet = $wallet;
        $this->method = $method;
        $this->amount = $amount;
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
     * Getter of the field 'h1Descriptor'.
     *
     * @return H1Descriptor
     */
    public function getH1Descriptor() {
        return $this->h1Descriptor;
    }

    /**
     * Getter of the field 'wallet'.
     *
     * @return Wallet
     */
    public function getWallet() {
        return $this->wallet;
    }

    /**
     * Getter of the field 'method'.
     *
     * @return DepositMethod
     */
    public function getMethod() {
        return $this->method;
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
     * @return DepositStatus
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
     * Immutable update. Return a new Deposit where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return Deposit
     */
    public function withId($id) {
        return new Deposit($id, $this->url, $this->createdTime, $this->h1Descriptor, $this->wallet,
                           $this->method, $this->amount, $this->status, $this->description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return Deposit
     */
    public function withUrl($url) {
        return new Deposit($this->id, $url, $this->createdTime, $this->h1Descriptor, $this->wallet,
                           $this->method, $this->amount, $this->status, $this->description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return Deposit
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class Deposit the param 'createdTime' of type UTCDateTime can not be null");
        return new Deposit($this->id, $this->url, $createdTime, $this->h1Descriptor, $this->wallet,
                           $this->method, $this->amount, $this->status, $this->description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'h1Descriptor' has been updated with the value passed as parameter.
     *
     * @param H1Descriptor $h1Descriptor
     * @return Deposit
     */
    public function withH1Descriptor(H1Descriptor $h1Descriptor) {
        assert($this->h1Descriptor != null, "In class Deposit the param 'h1Descriptor' of type H1Descriptor can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $h1Descriptor, $this->wallet,
                           $this->method, $this->amount, $this->status, $this->description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'wallet' has been updated with the value passed as parameter.
     *
     * @param Wallet $wallet
     * @return Deposit
     */
    public function withWallet(Wallet $wallet) {
        assert($this->wallet != null, "In class Deposit the param 'wallet' of type Wallet can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                           $wallet, $this->method, $this->amount, $this->status, $this->description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'method' has been updated with the value passed as parameter.
     *
     * @param DepositMethod $method
     * @return Deposit
     */
    public function withMethod(DepositMethod $method) {
        assert($this->method != null, "In class Deposit the param 'method' of type DepositMethod can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                           $this->wallet, $method, $this->amount, $this->status, $this->description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return Deposit
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class Deposit the param 'amount' of type Amount can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                           $this->wallet, $this->method, $amount, $this->status, $this->description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'status' has been updated with the value passed as parameter.
     *
     * @param DepositStatus $status
     * @return Deposit
     */
    public function withStatus(DepositStatus $status) {
        assert($this->status != null, "In class Deposit the param 'status' of type DepositStatus can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                           $this->wallet, $this->method, $this->amount, $status, $this->description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return Deposit
     */
    public function withDescription($description) {
        return new Deposit($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                           $this->wallet, $this->method, $this->amount, $this->status, $description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return Deposit
     */
    public function withForeignId($foreignId) {
        return new Deposit($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                           $this->wallet, $this->method, $this->amount, $this->status, $this->description,
                           $foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return Deposit
     */
    public function withForeignData($foreignData) {
        return new Deposit($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                           $this->wallet, $this->method, $this->amount, $this->status, $this->description,
                           $this->foreignId, $foreignData);
    }

    /**
     * Create Deposit from JSON string
     *
     * @param string $json
     * @return Deposit
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Deposit from associative array of its fields
     *
     * @param array $array
     * @return Deposit
     */
    public static function fromArray(array $array) {
        return new Deposit($array['id'],
                           $array['url'],
                           UTCDateTime::fromArray($array['createdTime']),
                           H1Descriptor::fromArray($array['h1Descriptor']),
                           Wallet::fromArray($array['wallet']),
                           DepositMethod::fromArray($array['method']),
                           Amount::fromArray($array['amount']),
                           DepositStatus::fromArray($array['status']),
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
                'h1Descriptor' => ($this->h1Descriptor !== null ? $this->h1Descriptor->toArray() : null),
                'wallet' => ($this->wallet !== null ? $this->wallet->toArray() : null),
                'method' => ($this->method !== null ? $this->method->toArray() : null),
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'status' => ($this->status !== null ? $this->status->toArray() : null),
                'description' => $this->description,
                'foreignId' => $this->foreignId,
                'foreignData' => $this->foreignData,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Deposit{id=" . $this->id .
                       ", url=" . $this->url .
                       ", createdTime=" . $this->createdTime .
                       ", h1Descriptor=" . $this->h1Descriptor .
                       ", wallet=" . $this->wallet .
                       ", method=" . $this->method .
                       ", amount=" . $this->amount .
                       ", status=" . $this->status .
                       ", description=" . $this->description .
                       ", foreignId=" . $this->foreignId .
                       ", foreignData=" . $this->foreignData . "}";
    }
}