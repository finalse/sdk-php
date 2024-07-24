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

class TransactionParentTransfer extends TransactionParent implements JsonSerializable  {

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

    /** @var Sending */
    protected $sending ;

    /** @var Source */
    protected $source ;

    /** @var Destination */
    protected $destination ;

    /** @var Fees */
    protected $fees ;

    /** @var LightAttempt */
    protected $attempt ;

    /** @var Amount */
    protected $amount ;

    /** @var TransferStatus */
    protected $status ;


    /** @var string */
    const Type = "TransactionParent.Transfer";


    /** @var string */
    const Variant = "Transfer";

    /**
     * TransactionParentTransfer constructor
     * @param string $id
     * @param string $url
     * @param string | null $description
     * @param Creator $creator
     * @param string | null $foreignId
     * @param string | null $foreignData
     * @param UTCDateTime $createdTime
     * @param UTCDateTime | null $completedTime
     * @param H1Descriptor | null $h1Descriptor
     * @param Sending $sending
     * @param Source $source
     * @param Destination $destination
     * @param Fees $fees
     * @param LightAttempt $attempt
     * @param Amount $amount
     * @param TransferStatus $status
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
                         Sending $sending,
                         Source $source,
                         Destination $destination,
                         Fees $fees,
                         LightAttempt $attempt,
                         Amount $amount,
                         TransferStatus $status) {
        $this->id = $id;
        $this->url = $url;
        $this->description = $description;
        $this->creator = $creator;
        $this->foreignId = $foreignId;
        $this->foreignData = $foreignData;
        $this->createdTime = $createdTime;
        $this->completedTime = $completedTime;
        $this->h1Descriptor = $h1Descriptor;
        $this->sending = $sending;
        $this->source = $source;
        $this->destination = $destination;
        $this->fees = $fees;
        $this->attempt = $attempt;
        $this->amount = $amount;
        $this->status = $status;
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
     * Getter of the field 'sending'.
     *
     * @return Sending
     */
    public function getSending() {
        return $this->sending;
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
     * Getter of the field 'attempt'.
     *
     * @return LightAttempt
     */
    public function getAttempt() {
        return $this->attempt;
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
     * @return TransferStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return TransactionParentTransfer
     */
    public function withId($id) {
        return new TransactionParentTransfer($id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return TransactionParentTransfer
     */
    public function withUrl($url) {
        return new TransactionParentTransfer($this->id, $url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return TransactionParentTransfer
     */
    public function withDescription($description) {
        return new TransactionParentTransfer($this->id, $this->url, $description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'creator' has been updated with the value passed as parameter.
     *
     * @param Creator $creator
     * @return TransactionParentTransfer
     */
    public function withCreator(Creator $creator) {
        assert($this->creator != null, "In class TransactionParentTransfer the param 'creator' of type Creator can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return TransactionParentTransfer
     */
    public function withForeignId($foreignId) {
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return TransactionParentTransfer
     */
    public function withForeignData($foreignData) {
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return TransactionParentTransfer
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class TransactionParentTransfer the param 'createdTime' of type UTCDateTime can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'completedTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime | null $completedTime
     * @return TransactionParentTransfer
     */
    public function withCompletedTime($completedTime) {
        assert($this->completedTime != null, "In class TransactionParentTransfer the param 'completedTime' of type UTCDateTime | null can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'h1Descriptor' has been updated with the value passed as parameter.
     *
     * @param H1Descriptor | null $h1Descriptor
     * @return TransactionParentTransfer
     */
    public function withH1Descriptor($h1Descriptor) {
        assert($this->h1Descriptor != null, "In class TransactionParentTransfer the param 'h1Descriptor' of type H1Descriptor | null can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'sending' has been updated with the value passed as parameter.
     *
     * @param Sending $sending
     * @return TransactionParentTransfer
     */
    public function withSending(Sending $sending) {
        assert($this->sending != null, "In class TransactionParentTransfer the param 'sending' of type Sending can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'source' has been updated with the value passed as parameter.
     *
     * @param Source $source
     * @return TransactionParentTransfer
     */
    public function withSource(Source $source) {
        assert($this->source != null, "In class TransactionParentTransfer the param 'source' of type Source can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $source, $this->destination, $this->fees, $this->attempt,
                                             $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'destination' has been updated with the value passed as parameter.
     *
     * @param Destination $destination
     * @return TransactionParentTransfer
     */
    public function withDestination(Destination $destination) {
        assert($this->destination != null, "In class TransactionParentTransfer the param 'destination' of type Destination can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $destination, $this->fees, $this->attempt,
                                             $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'fees' has been updated with the value passed as parameter.
     *
     * @param Fees $fees
     * @return TransactionParentTransfer
     */
    public function withFees(Fees $fees) {
        assert($this->fees != null, "In class TransactionParentTransfer the param 'fees' of type Fees can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $fees, $this->attempt,
                                             $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'attempt' has been updated with the value passed as parameter.
     *
     * @param LightAttempt $attempt
     * @return TransactionParentTransfer
     */
    public function withAttempt(LightAttempt $attempt) {
        assert($this->attempt != null, "In class TransactionParentTransfer the param 'attempt' of type LightAttempt can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $attempt, $this->amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return TransactionParentTransfer
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class TransactionParentTransfer the param 'amount' of type Amount can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $amount, $this->status);
    }

    /**
     * Immutable update. Return a new TransactionParentTransfer where the field 'status' has been updated with the value passed as parameter.
     *
     * @param TransferStatus $status
     * @return TransactionParentTransfer
     */
    public function withStatus(TransferStatus $status) {
        assert($this->status != null, "In class TransactionParentTransfer the param 'status' of type TransferStatus can not be null");
        return new TransactionParentTransfer($this->id, $this->url, $this->description, $this->creator,
                                             $this->foreignId, $this->foreignData, $this->createdTime,
                                             $this->completedTime, $this->h1Descriptor, $this->sending,
                                             $this->source, $this->destination, $this->fees,
                                             $this->attempt, $this->amount, $status);
    }

    /**
     * Create TransactionParentTransfer from JSON string
     *
     * @param string $json
     * @return TransactionParentTransfer
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransactionParentTransfer from associative array of its fields
     *
     * @param array $array
     * @return TransactionParentTransfer
     */
    public static function fromArray(array $array) {
        return new TransactionParentTransfer($array['id'],
                                             $array['url'],
                                             (isset($array['description']) ? $array['description'] : null),
                                             Creator::fromArray($array['creator']),
                                             (isset($array['foreignId']) ? $array['foreignId'] : null),
                                             (isset($array['foreignData']) ? $array['foreignData'] : null),
                                             UTCDateTime::fromArray($array['createdTime']),
                                             (isset($array['completedTime']) ? UTCDateTime::fromArray($array['completedTime']) : null),
                                             (isset($array['h1Descriptor']) ? H1Descriptor::fromArray($array['h1Descriptor']) : null),
                                             Sending::fromString($array['sending']),
                                             Source::fromArray($array['source']),
                                             Destination::fromArray($array['destination']),
                                             Fees::fromArray($array['fees']),
                                             LightAttempt::fromArray($array['attempt']),
                                             Amount::fromArray($array['amount']),
                                             TransferStatus::fromArray($array['status']));
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
                'sending' => ((string) $this->sending),
                'source' => ($this->source !== null ? $this->source->toArray() : null),
                'destination' => ($this->destination !== null ? $this->destination->toArray() : null),
                'fees' => ($this->fees !== null ? $this->fees->toArray() : null),
                'attempt' => ($this->attempt !== null ? $this->attempt->toArray() : null),
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'status' => ($this->status !== null ? $this->status->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransactionParentTransfer{id=" . $this->id .
                                         ", url=" . $this->url .
                                         ", description=" . $this->description .
                                         ", creator=" . $this->creator .
                                         ", foreignId=" . $this->foreignId .
                                         ", foreignData=" . $this->foreignData .
                                         ", createdTime=" . $this->createdTime .
                                         ", completedTime=" . $this->completedTime .
                                         ", h1Descriptor=" . $this->h1Descriptor .
                                         ", sending=" . $this->sending .
                                         ", source=" . $this->source .
                                         ", destination=" . $this->destination .
                                         ", fees=" . $this->fees .
                                         ", attempt=" . $this->attempt .
                                         ", amount=" . $this->amount .
                                         ", status=" . $this->status . "}";
    }
}