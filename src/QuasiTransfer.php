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

class QuasiTransfer implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var Creator */
    protected $creator ;

    /** @var UTCDateTime */
    protected $createdTime ;

    /** @var UTCDateTime | null */
    protected $completedTime ;

    /** @var H1Descriptor | null */
    protected $h1Descriptor ;

    /** @var SecurePay */
    protected $securePay ;

    /** @var Amount | null */
    protected $amount ;

    /** @var Sending */
    protected $sending ;

    /** @var QuasiTransferStatus */
    protected $status ;

    /** @var Source */
    protected $source ;

    /** @var Destination | null */
    protected $destination ;

    /** @var Fees */
    protected $fees ;

    /** @var Expire | null */
    protected $expire ;

    /** @var OnQuasiTransferCompleted | null */
    protected $onSuccess ;

    /** @var OnQuasiTransferCompleted | null */
    protected $onFailure ;

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;


    /** @var string */
    const Type = "QuasiTransfer";

    /**
     * QuasiTransfer constructor
     * @param string $id
     * @param string $url
     * @param Creator $creator
     * @param UTCDateTime $createdTime
     * @param UTCDateTime | null $completedTime
     * @param H1Descriptor | null $h1Descriptor
     * @param SecurePay $securePay
     * @param Amount | null $amount
     * @param Sending $sending
     * @param QuasiTransferStatus $status
     * @param Source $source
     * @param Destination | null $destination
     * @param Fees $fees
     * @param Expire | null $expire
     * @param OnQuasiTransferCompleted | null $onSuccess
     * @param OnQuasiTransferCompleted | null $onFailure
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct($id,
                         $url,
                         Creator $creator,
                         UTCDateTime $createdTime,
                         $completedTime = null,
                         $h1Descriptor = null,
                         SecurePay $securePay,
                         $amount = null,
                         Sending $sending,
                         QuasiTransferStatus $status,
                         Source $source,
                         $destination = null,
                         Fees $fees,
                         $expire = null,
                         $onSuccess = null,
                         $onFailure = null,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->id = $id;
        $this->url = $url;
        $this->creator = $creator;
        $this->createdTime = $createdTime;
        $this->completedTime = $completedTime;
        $this->h1Descriptor = $h1Descriptor;
        $this->securePay = $securePay;
        $this->amount = $amount;
        $this->sending = $sending;
        $this->status = $status;
        $this->source = $source;
        $this->destination = $destination;
        $this->fees = $fees;
        $this->expire = $expire;
        $this->onSuccess = $onSuccess;
        $this->onFailure = $onFailure;
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
     * Getter of the field 'creator'.
     *
     * @return Creator
     */
    public function getCreator() {
        return $this->creator;
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
     * Getter of the field 'completedTime'.
     *
     * @return UTCDateTime | null
     */
    public function getCompletedTime() {
        return $this->completedTime;
    }

    /**
     * Getter of the field 'h1Descriptor'.
     *
     * @return H1Descriptor | null
     */
    public function getH1Descriptor() {
        return $this->h1Descriptor;
    }

    /**
     * Getter of the field 'securePay'.
     *
     * @return SecurePay
     */
    public function getSecurePay() {
        return $this->securePay;
    }

    /**
     * Getter of the field 'amount'.
     *
     * @return Amount | null
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Getter of the field 'sending'.
     *
     * @return Sending
     */
    public function getSending() {
        return $this->sending;
    }

    /**
     * Getter of the field 'status'.
     *
     * @return QuasiTransferStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Getter of the field 'source'.
     *
     * @return Source
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * Getter of the field 'destination'.
     *
     * @return Destination | null
     */
    public function getDestination() {
        return $this->destination;
    }

    /**
     * Getter of the field 'fees'.
     *
     * @return Fees
     */
    public function getFees() {
        return $this->fees;
    }

    /**
     * Getter of the field 'expire'.
     *
     * @return Expire | null
     */
    public function getExpire() {
        return $this->expire;
    }

    /**
     * Getter of the field 'onSuccess'.
     *
     * @return OnQuasiTransferCompleted | null
     */
    public function getOnSuccess() {
        return $this->onSuccess;
    }

    /**
     * Getter of the field 'onFailure'.
     *
     * @return OnQuasiTransferCompleted | null
     */
    public function getOnFailure() {
        return $this->onFailure;
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
     * Immutable update. Return a new QuasiTransfer where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return QuasiTransfer
     */
    public function withId($id) {
        return new QuasiTransfer($id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->source, $this->destination, $this->fees,
                                 $this->expire, $this->onSuccess, $this->onFailure, $this->description,
                                 $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return QuasiTransfer
     */
    public function withUrl($url) {
        return new QuasiTransfer($this->id, $url, $this->creator, $this->createdTime, $this->completedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->source, $this->destination, $this->fees,
                                 $this->expire, $this->onSuccess, $this->onFailure, $this->description,
                                 $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'creator' has been updated with the value passed as parameter.
     *
     * @param Creator $creator
     * @return QuasiTransfer
     */
    public function withCreator(Creator $creator) {
        assert($this->creator != null, "In class QuasiTransfer the param 'creator' of type Creator can not be null");
        return new QuasiTransfer($this->id, $this->url, $creator, $this->createdTime, $this->completedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->source, $this->destination, $this->fees,
                                 $this->expire, $this->onSuccess, $this->onFailure, $this->description,
                                 $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return QuasiTransfer
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class QuasiTransfer the param 'createdTime' of type UTCDateTime can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $createdTime, $this->completedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->source, $this->destination, $this->fees,
                                 $this->expire, $this->onSuccess, $this->onFailure, $this->description,
                                 $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'completedTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime | null $completedTime
     * @return QuasiTransfer
     */
    public function withCompletedTime($completedTime) {
        assert($this->completedTime != null, "In class QuasiTransfer the param 'completedTime' of type UTCDateTime | null can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $completedTime, $this->h1Descriptor, $this->securePay, $this->amount,
                                 $this->sending, $this->status, $this->source, $this->destination,
                                 $this->fees, $this->expire, $this->onSuccess, $this->onFailure,
                                 $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'h1Descriptor' has been updated with the value passed as parameter.
     *
     * @param H1Descriptor | null $h1Descriptor
     * @return QuasiTransfer
     */
    public function withH1Descriptor($h1Descriptor) {
        assert($this->h1Descriptor != null, "In class QuasiTransfer the param 'h1Descriptor' of type H1Descriptor | null can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $h1Descriptor, $this->securePay, $this->amount,
                                 $this->sending, $this->status, $this->source, $this->destination,
                                 $this->fees, $this->expire, $this->onSuccess, $this->onFailure,
                                 $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'securePay' has been updated with the value passed as parameter.
     *
     * @param SecurePay $securePay
     * @return QuasiTransfer
     */
    public function withSecurePay(SecurePay $securePay) {
        assert($this->securePay != null, "In class QuasiTransfer the param 'securePay' of type SecurePay can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $securePay, $this->amount,
                                 $this->sending, $this->status, $this->source, $this->destination,
                                 $this->fees, $this->expire, $this->onSuccess, $this->onFailure,
                                 $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount | null $amount
     * @return QuasiTransfer
     */
    public function withAmount($amount) {
        assert($this->amount != null, "In class QuasiTransfer the param 'amount' of type Amount | null can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $amount, $this->sending, $this->status, $this->source, $this->destination,
                                 $this->fees, $this->expire, $this->onSuccess, $this->onFailure,
                                 $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'sending' has been updated with the value passed as parameter.
     *
     * @param Sending $sending
     * @return QuasiTransfer
     */
    public function withSending(Sending $sending) {
        assert($this->sending != null, "In class QuasiTransfer the param 'sending' of type Sending can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $sending, $this->status, $this->source, $this->destination,
                                 $this->fees, $this->expire, $this->onSuccess, $this->onFailure,
                                 $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'status' has been updated with the value passed as parameter.
     *
     * @param QuasiTransferStatus $status
     * @return QuasiTransfer
     */
    public function withStatus(QuasiTransferStatus $status) {
        assert($this->status != null, "In class QuasiTransfer the param 'status' of type QuasiTransferStatus can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $this->sending, $status, $this->source, $this->destination,
                                 $this->fees, $this->expire, $this->onSuccess, $this->onFailure,
                                 $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'source' has been updated with the value passed as parameter.
     *
     * @param Source $source
     * @return QuasiTransfer
     */
    public function withSource(Source $source) {
        assert($this->source != null, "In class QuasiTransfer the param 'source' of type Source can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $this->sending, $this->status, $source, $this->destination,
                                 $this->fees, $this->expire, $this->onSuccess, $this->onFailure,
                                 $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'destination' has been updated with the value passed as parameter.
     *
     * @param Destination | null $destination
     * @return QuasiTransfer
     */
    public function withDestination($destination) {
        assert($this->destination != null, "In class QuasiTransfer the param 'destination' of type Destination | null can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $this->sending, $this->status, $this->source,
                                 $destination, $this->fees, $this->expire, $this->onSuccess,
                                 $this->onFailure, $this->description, $this->foreignId,
                                 $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'fees' has been updated with the value passed as parameter.
     *
     * @param Fees $fees
     * @return QuasiTransfer
     */
    public function withFees(Fees $fees) {
        assert($this->fees != null, "In class QuasiTransfer the param 'fees' of type Fees can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $this->sending, $this->status, $this->source,
                                 $this->destination, $fees, $this->expire, $this->onSuccess,
                                 $this->onFailure, $this->description, $this->foreignId,
                                 $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'expire' has been updated with the value passed as parameter.
     *
     * @param Expire | null $expire
     * @return QuasiTransfer
     */
    public function withExpire($expire) {
        assert($this->expire != null, "In class QuasiTransfer the param 'expire' of type Expire | null can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $this->sending, $this->status, $this->source,
                                 $this->destination, $this->fees, $expire, $this->onSuccess,
                                 $this->onFailure, $this->description, $this->foreignId,
                                 $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'onSuccess' has been updated with the value passed as parameter.
     *
     * @param OnQuasiTransferCompleted | null $onSuccess
     * @return QuasiTransfer
     */
    public function withOnSuccess($onSuccess) {
        assert($this->onSuccess != null, "In class QuasiTransfer the param 'onSuccess' of type OnQuasiTransferCompleted | null can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $this->sending, $this->status, $this->source,
                                 $this->destination, $this->fees, $this->expire, $onSuccess,
                                 $this->onFailure, $this->description, $this->foreignId,
                                 $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'onFailure' has been updated with the value passed as parameter.
     *
     * @param OnQuasiTransferCompleted | null $onFailure
     * @return QuasiTransfer
     */
    public function withOnFailure($onFailure) {
        assert($this->onFailure != null, "In class QuasiTransfer the param 'onFailure' of type OnQuasiTransferCompleted | null can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $this->sending, $this->status, $this->source,
                                 $this->destination, $this->fees, $this->expire, $this->onSuccess,
                                 $onFailure, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return QuasiTransfer
     */
    public function withDescription($description) {
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $this->sending, $this->status, $this->source,
                                 $this->destination, $this->fees, $this->expire, $this->onSuccess,
                                 $this->onFailure, $description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return QuasiTransfer
     */
    public function withForeignId($foreignId) {
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $this->sending, $this->status, $this->source,
                                 $this->destination, $this->fees, $this->expire, $this->onSuccess,
                                 $this->onFailure, $this->description, $foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return QuasiTransfer
     */
    public function withForeignData($foreignData) {
        return new QuasiTransfer($this->id, $this->url, $this->creator, $this->createdTime,
                                 $this->completedTime, $this->h1Descriptor, $this->securePay,
                                 $this->amount, $this->sending, $this->status, $this->source,
                                 $this->destination, $this->fees, $this->expire, $this->onSuccess,
                                 $this->onFailure, $this->description, $this->foreignId,
                                 $foreignData);
    }

    /**
     * Create QuasiTransfer from JSON string
     *
     * @param string $json
     * @return QuasiTransfer
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create QuasiTransfer from associative array of its fields
     *
     * @param array $array
     * @return QuasiTransfer
     */
    public static function fromArray(array $array) {
        return new QuasiTransfer($array['id'],
                                 $array['url'],
                                 Creator::fromArray($array['creator']),
                                 UTCDateTime::fromArray($array['createdTime']),
                                 (isset($array['completedTime']) ? UTCDateTime::fromArray($array['completedTime']) : null),
                                 (isset($array['h1Descriptor']) ? H1Descriptor::fromArray($array['h1Descriptor']) : null),
                                 SecurePay::fromArray($array['securePay']),
                                 (isset($array['amount']) ? Amount::fromArray($array['amount']) : null),
                                 Sending::fromString($array['sending']),
                                 QuasiTransferStatus::fromArray($array['status']),
                                 Source::fromArray($array['source']),
                                 (isset($array['destination']) ? Destination::fromArray($array['destination']) : null),
                                 Fees::fromArray($array['fees']),
                                 (isset($array['expire']) ? Expire::fromArray($array['expire']) : null),
                                 (isset($array['onSuccess']) ? OnQuasiTransferCompleted::fromArray($array['onSuccess']) : null),
                                 (isset($array['onFailure']) ? OnQuasiTransferCompleted::fromArray($array['onFailure']) : null),
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
                'creator' => ($this->creator !== null ? $this->creator->toArray() : null),
                'createdTime' => ($this->createdTime !== null ? $this->createdTime->toArray() : null),
                'completedTime' => ($this->completedTime !== null ? $this->completedTime->toArray() : null),
                'h1Descriptor' => ($this->h1Descriptor !== null ? $this->h1Descriptor->toArray() : null),
                'securePay' => ($this->securePay !== null ? $this->securePay->toArray() : null),
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'sending' => ((string) $this->sending),
                'status' => ($this->status !== null ? $this->status->toArray() : null),
                'source' => ($this->source !== null ? $this->source->toArray() : null),
                'destination' => ($this->destination !== null ? $this->destination->toArray() : null),
                'fees' => ($this->fees !== null ? $this->fees->toArray() : null),
                'expire' => ($this->expire !== null ? $this->expire->toArray() : null),
                'onSuccess' => ($this->onSuccess !== null ? $this->onSuccess->toArray() : null),
                'onFailure' => ($this->onFailure !== null ? $this->onFailure->toArray() : null),
                'description' => $this->description,
                'foreignId' => $this->foreignId,
                'foreignData' => $this->foreignData,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "QuasiTransfer{id=" . $this->id .
                             ", url=" . $this->url .
                             ", creator=" . $this->creator .
                             ", createdTime=" . $this->createdTime .
                             ", completedTime=" . $this->completedTime .
                             ", h1Descriptor=" . $this->h1Descriptor .
                             ", securePay=" . $this->securePay .
                             ", amount=" . $this->amount .
                             ", sending=" . $this->sending .
                             ", status=" . $this->status .
                             ", source=" . $this->source .
                             ", destination=" . $this->destination .
                             ", fees=" . $this->fees .
                             ", expire=" . $this->expire .
                             ", onSuccess=" . $this->onSuccess .
                             ", onFailure=" . $this->onFailure .
                             ", description=" . $this->description .
                             ", foreignId=" . $this->foreignId .
                             ", foreignData=" . $this->foreignData . "}";
    }
}