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

class TransactionParentFundRequest extends TransactionParent implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var string | null */
    protected $description ;

    /** @var Creator */
    protected $creator ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;

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

    /** @var FundRequestStatus */
    protected $status ;

    /** @var Source | null */
    protected $source ;

    /** @var Destination */
    protected $destination ;

    /** @var Fees */
    protected $fees ;

    /** @var Expire | null */
    protected $expire ;

    /** @var OnFundRequestCompleted | null */
    protected $onSuccess ;

    /** @var OnFundRequestCompleted | null */
    protected $onFailure ;


    /** @var string */
    const Type = "TransactionParent.FundRequest";


    /** @var string */
    const Variant = "FundRequest";

    /**
     * TransactionParentFundRequest constructor
     * @param string $id
     * @param string $url
     * @param string | null $description
     * @param Creator $creator
     * @param string | null $foreignId
     * @param string | null $foreignData
     * @param UTCDateTime $createdTime
     * @param UTCDateTime | null $completedTime
     * @param H1Descriptor | null $h1Descriptor
     * @param SecurePay $securePay
     * @param Amount | null $amount
     * @param Sending $sending
     * @param FundRequestStatus $status
     * @param Source | null $source
     * @param Destination $destination
     * @param Fees $fees
     * @param Expire | null $expire
     * @param OnFundRequestCompleted | null $onSuccess
     * @param OnFundRequestCompleted | null $onFailure
     */
    function __construct($id,
                         $url,
                         $description = null,
                         Creator $creator,
                         $foreignId = null,
                         $foreignData = null,
                         UTCDateTime $createdTime,
                         $completedTime = null,
                         $h1Descriptor = null,
                         SecurePay $securePay,
                         $amount = null,
                         Sending $sending,
                         FundRequestStatus $status,
                         $source = null,
                         Destination $destination,
                         Fees $fees,
                         $expire = null,
                         $onSuccess = null,
                         $onFailure = null) {
        $this->id = $id;
        $this->url = $url;
        $this->description = $description;
        $this->creator = $creator;
        $this->foreignId = $foreignId;
        $this->foreignData = $foreignData;
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
     * Getter of the field 'description'.
     *
     * @return string | null
     */
    public function getDescription() {
        return $this->description;
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
     * @return FundRequestStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Getter of the field 'source'.
     *
     * @return Source | null
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * Getter of the field 'destination'.
     *
     * @return Destination
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
     * @return OnFundRequestCompleted | null
     */
    public function getOnSuccess() {
        return $this->onSuccess;
    }

    /**
     * Getter of the field 'onFailure'.
     *
     * @return OnFundRequestCompleted | null
     */
    public function getOnFailure() {
        return $this->onFailure;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return TransactionParentFundRequest
     */
    public function withId($id) {
        return new TransactionParentFundRequest($id, $this->url, $this->description, $this->creator,
                                                $this->foreignId, $this->foreignData, $this->createdTime,
                                                $this->completedTime, $this->h1Descriptor,
                                                $this->securePay, $this->amount, $this->sending,
                                                $this->status, $this->source, $this->destination,
                                                $this->fees, $this->expire, $this->onSuccess,
                                                $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return TransactionParentFundRequest
     */
    public function withUrl($url) {
        return new TransactionParentFundRequest($this->id, $url, $this->description, $this->creator,
                                                $this->foreignId, $this->foreignData, $this->createdTime,
                                                $this->completedTime, $this->h1Descriptor,
                                                $this->securePay, $this->amount, $this->sending,
                                                $this->status, $this->source, $this->destination,
                                                $this->fees, $this->expire, $this->onSuccess,
                                                $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return TransactionParentFundRequest
     */
    public function withDescription($description) {
        return new TransactionParentFundRequest($this->id, $this->url, $description, $this->creator,
                                                $this->foreignId, $this->foreignData, $this->createdTime,
                                                $this->completedTime, $this->h1Descriptor,
                                                $this->securePay, $this->amount, $this->sending,
                                                $this->status, $this->source, $this->destination,
                                                $this->fees, $this->expire, $this->onSuccess,
                                                $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'creator' has been updated with the value passed as parameter.
     *
     * @param Creator $creator
     * @return TransactionParentFundRequest
     */
    public function withCreator(Creator $creator) {
        assert($this->creator != null, "In class TransactionParentFundRequest the param 'creator' of type Creator can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $this->status, $this->source,
                                                $this->destination, $this->fees, $this->expire,
                                                $this->onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return TransactionParentFundRequest
     */
    public function withForeignId($foreignId) {
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $this->status, $this->source,
                                                $this->destination, $this->fees, $this->expire,
                                                $this->onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return TransactionParentFundRequest
     */
    public function withForeignData($foreignData) {
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $this->status, $this->source,
                                                $this->destination, $this->fees, $this->expire,
                                                $this->onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return TransactionParentFundRequest
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class TransactionParentFundRequest the param 'createdTime' of type UTCDateTime can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $createdTime, $this->completedTime, $this->h1Descriptor,
                                                $this->securePay, $this->amount, $this->sending,
                                                $this->status, $this->source, $this->destination,
                                                $this->fees, $this->expire, $this->onSuccess,
                                                $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'completedTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime | null $completedTime
     * @return TransactionParentFundRequest
     */
    public function withCompletedTime($completedTime) {
        assert($this->completedTime != null, "In class TransactionParentFundRequest the param 'completedTime' of type UTCDateTime | null can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $completedTime, $this->h1Descriptor,
                                                $this->securePay, $this->amount, $this->sending,
                                                $this->status, $this->source, $this->destination,
                                                $this->fees, $this->expire, $this->onSuccess,
                                                $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'h1Descriptor' has been updated with the value passed as parameter.
     *
     * @param H1Descriptor | null $h1Descriptor
     * @return TransactionParentFundRequest
     */
    public function withH1Descriptor($h1Descriptor) {
        assert($this->h1Descriptor != null, "In class TransactionParentFundRequest the param 'h1Descriptor' of type H1Descriptor | null can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $this->status, $this->source,
                                                $this->destination, $this->fees, $this->expire,
                                                $this->onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'securePay' has been updated with the value passed as parameter.
     *
     * @param SecurePay $securePay
     * @return TransactionParentFundRequest
     */
    public function withSecurePay(SecurePay $securePay) {
        assert($this->securePay != null, "In class TransactionParentFundRequest the param 'securePay' of type SecurePay can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $securePay, $this->amount,
                                                $this->sending, $this->status, $this->source,
                                                $this->destination, $this->fees, $this->expire,
                                                $this->onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount | null $amount
     * @return TransactionParentFundRequest
     */
    public function withAmount($amount) {
        assert($this->amount != null, "In class TransactionParentFundRequest the param 'amount' of type Amount | null can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $amount,
                                                $this->sending, $this->status, $this->source,
                                                $this->destination, $this->fees, $this->expire,
                                                $this->onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'sending' has been updated with the value passed as parameter.
     *
     * @param Sending $sending
     * @return TransactionParentFundRequest
     */
    public function withSending(Sending $sending) {
        assert($this->sending != null, "In class TransactionParentFundRequest the param 'sending' of type Sending can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $sending, $this->status, $this->source, $this->destination,
                                                $this->fees, $this->expire, $this->onSuccess,
                                                $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'status' has been updated with the value passed as parameter.
     *
     * @param FundRequestStatus $status
     * @return TransactionParentFundRequest
     */
    public function withStatus(FundRequestStatus $status) {
        assert($this->status != null, "In class TransactionParentFundRequest the param 'status' of type FundRequestStatus can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $status, $this->source, $this->destination,
                                                $this->fees, $this->expire, $this->onSuccess,
                                                $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'source' has been updated with the value passed as parameter.
     *
     * @param Source | null $source
     * @return TransactionParentFundRequest
     */
    public function withSource($source) {
        assert($this->source != null, "In class TransactionParentFundRequest the param 'source' of type Source | null can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $this->status, $source, $this->destination,
                                                $this->fees, $this->expire, $this->onSuccess,
                                                $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'destination' has been updated with the value passed as parameter.
     *
     * @param Destination $destination
     * @return TransactionParentFundRequest
     */
    public function withDestination(Destination $destination) {
        assert($this->destination != null, "In class TransactionParentFundRequest the param 'destination' of type Destination can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $this->status, $this->source,
                                                $destination, $this->fees, $this->expire,
                                                $this->onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'fees' has been updated with the value passed as parameter.
     *
     * @param Fees $fees
     * @return TransactionParentFundRequest
     */
    public function withFees(Fees $fees) {
        assert($this->fees != null, "In class TransactionParentFundRequest the param 'fees' of type Fees can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $this->status, $this->source,
                                                $this->destination, $fees, $this->expire,
                                                $this->onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'expire' has been updated with the value passed as parameter.
     *
     * @param Expire | null $expire
     * @return TransactionParentFundRequest
     */
    public function withExpire($expire) {
        assert($this->expire != null, "In class TransactionParentFundRequest the param 'expire' of type Expire | null can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $this->status, $this->source,
                                                $this->destination, $this->fees, $expire,
                                                $this->onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'onSuccess' has been updated with the value passed as parameter.
     *
     * @param OnFundRequestCompleted | null $onSuccess
     * @return TransactionParentFundRequest
     */
    public function withOnSuccess($onSuccess) {
        assert($this->onSuccess != null, "In class TransactionParentFundRequest the param 'onSuccess' of type OnFundRequestCompleted | null can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $this->status, $this->source,
                                                $this->destination, $this->fees, $this->expire,
                                                $onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new TransactionParentFundRequest where the field 'onFailure' has been updated with the value passed as parameter.
     *
     * @param OnFundRequestCompleted | null $onFailure
     * @return TransactionParentFundRequest
     */
    public function withOnFailure($onFailure) {
        assert($this->onFailure != null, "In class TransactionParentFundRequest the param 'onFailure' of type OnFundRequestCompleted | null can not be null");
        return new TransactionParentFundRequest($this->id, $this->url, $this->description,
                                                $this->creator, $this->foreignId, $this->foreignData,
                                                $this->createdTime, $this->completedTime,
                                                $this->h1Descriptor, $this->securePay, $this->amount,
                                                $this->sending, $this->status, $this->source,
                                                $this->destination, $this->fees, $this->expire,
                                                $this->onSuccess, $onFailure);
    }

    /**
     * Create TransactionParentFundRequest from JSON string
     *
     * @param string $json
     * @return TransactionParentFundRequest
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransactionParentFundRequest from associative array of its fields
     *
     * @param array $array
     * @return TransactionParentFundRequest
     */
    public static function fromArray(array $array) {
        return new TransactionParentFundRequest($array['id'],
                                                $array['url'],
                                                (isset($array['description']) ? $array['description'] : null),
                                                Creator::fromArray($array['creator']),
                                                (isset($array['foreignId']) ? $array['foreignId'] : null),
                                                (isset($array['foreignData']) ? $array['foreignData'] : null),
                                                UTCDateTime::fromArray($array['createdTime']),
                                                (isset($array['completedTime']) ? UTCDateTime::fromArray($array['completedTime']) : null),
                                                (isset($array['h1Descriptor']) ? H1Descriptor::fromArray($array['h1Descriptor']) : null),
                                                SecurePay::fromArray($array['securePay']),
                                                (isset($array['amount']) ? Amount::fromArray($array['amount']) : null),
                                                Sending::fromString($array['sending']),
                                                FundRequestStatus::fromArray($array['status']),
                                                (isset($array['source']) ? Source::fromArray($array['source']) : null),
                                                Destination::fromArray($array['destination']),
                                                Fees::fromArray($array['fees']),
                                                (isset($array['expire']) ? Expire::fromArray($array['expire']) : null),
                                                (isset($array['onSuccess']) ? OnFundRequestCompleted::fromArray($array['onSuccess']) : null),
                                                (isset($array['onFailure']) ? OnFundRequestCompleted::fromArray($array['onFailure']) : null));
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
                'id' => $this->id,
                'url' => $this->url,
                'description' => $this->description,
                'creator' => ($this->creator !== null ? $this->creator->toArray() : null),
                'foreignId' => $this->foreignId,
                'foreignData' => $this->foreignData,
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
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransactionParentFundRequest{id=" . $this->id .
                                            ", url=" . $this->url .
                                            ", description=" . $this->description .
                                            ", creator=" . $this->creator .
                                            ", foreignId=" . $this->foreignId .
                                            ", foreignData=" . $this->foreignData .
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
                                            ", onFailure=" . $this->onFailure . "}";
    }
}