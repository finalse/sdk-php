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

class Deposit implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var UTCDateTime */
    protected $createdTime ;

    /** @var Creator */
    protected $creator ;

    /** @var UTCDateTime | null */
    protected $completedTime ;

    /** @var H1Descriptor | null */
    protected $h1Descriptor ;

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

    /** @var Sending */
    protected $sending ;

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
     * @param Creator $creator
     * @param UTCDateTime | null $completedTime
     * @param H1Descriptor | null $h1Descriptor
     * @param Source $source
     * @param Destination $destination
     * @param Fees $fees
     * @param LightAttempt $attempt
     * @param Amount $amount
     * @param Sending $sending
     * @param DepositStatus $status
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct($id,
                         $url,
                         UTCDateTime $createdTime,
                         Creator $creator,
                         $completedTime = null,
                         $h1Descriptor = null,
                         Source $source,
                         Destination $destination,
                         Fees $fees,
                         LightAttempt $attempt,
                         Amount $amount,
                         Sending $sending,
                         DepositStatus $status,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->id = $id;
        $this->url = $url;
        $this->createdTime = $createdTime;
        $this->creator = $creator;
        $this->completedTime = $completedTime;
        $this->h1Descriptor = $h1Descriptor;
        $this->source = $source;
        $this->destination = $destination;
        $this->fees = $fees;
        $this->attempt = $attempt;
        $this->amount = $amount;
        $this->sending = $sending;
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
     * Getter of the field 'creator'.
     *
     * @return Creator
     */
    public function getCreator() {
        return $this->creator;
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
        return new Deposit($id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return Deposit
     */
    public function withUrl($url) {
        return new Deposit($this->id, $url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return Deposit
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class Deposit the param 'createdTime' of type UTCDateTime can not be null");
        return new Deposit($this->id, $this->url, $createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'creator' has been updated with the value passed as parameter.
     *
     * @param Creator $creator
     * @return Deposit
     */
    public function withCreator(Creator $creator) {
        assert($this->creator != null, "In class Deposit the param 'creator' of type Creator can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'completedTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime | null $completedTime
     * @return Deposit
     */
    public function withCompletedTime($completedTime) {
        assert($this->completedTime != null, "In class Deposit the param 'completedTime' of type UTCDateTime | null can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'h1Descriptor' has been updated with the value passed as parameter.
     *
     * @param H1Descriptor | null $h1Descriptor
     * @return Deposit
     */
    public function withH1Descriptor($h1Descriptor) {
        assert($this->h1Descriptor != null, "In class Deposit the param 'h1Descriptor' of type H1Descriptor | null can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'source' has been updated with the value passed as parameter.
     *
     * @param Source $source
     * @return Deposit
     */
    public function withSource(Source $source) {
        assert($this->source != null, "In class Deposit the param 'source' of type Source can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'destination' has been updated with the value passed as parameter.
     *
     * @param Destination $destination
     * @return Deposit
     */
    public function withDestination(Destination $destination) {
        assert($this->destination != null, "In class Deposit the param 'destination' of type Destination can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'fees' has been updated with the value passed as parameter.
     *
     * @param Fees $fees
     * @return Deposit
     */
    public function withFees(Fees $fees) {
        assert($this->fees != null, "In class Deposit the param 'fees' of type Fees can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'attempt' has been updated with the value passed as parameter.
     *
     * @param LightAttempt $attempt
     * @return Deposit
     */
    public function withAttempt(LightAttempt $attempt) {
        assert($this->attempt != null, "In class Deposit the param 'attempt' of type LightAttempt can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $attempt, $this->amount, $this->sending, $this->status, $this->description,
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
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $amount, $this->sending, $this->status, $this->description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'sending' has been updated with the value passed as parameter.
     *
     * @param Sending $sending
     * @return Deposit
     */
    public function withSending(Sending $sending) {
        assert($this->sending != null, "In class Deposit the param 'sending' of type Sending can not be null");
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $sending, $this->status, $this->description,
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
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $status, $this->description,
                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return Deposit
     */
    public function withDescription($description) {
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return Deposit
     */
    public function withForeignId($foreignId) {
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Deposit where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return Deposit
     */
    public function withForeignData($foreignData) {
        return new Deposit($this->id, $this->url, $this->createdTime, $this->creator, $this->completedTime,
                           $this->h1Descriptor, $this->source, $this->destination, $this->fees,
                           $this->attempt, $this->amount, $this->sending, $this->status,
                           $this->description, $this->foreignId, $foreignData);
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
                           Creator::fromArray($array['creator']),
                           (isset($array['completedTime']) ? UTCDateTime::fromArray($array['completedTime']) : null),
                           (isset($array['h1Descriptor']) ? H1Descriptor::fromArray($array['h1Descriptor']) : null),
                           Source::fromArray($array['source']),
                           Destination::fromArray($array['destination']),
                           Fees::fromArray($array['fees']),
                           LightAttempt::fromArray($array['attempt']),
                           Amount::fromArray($array['amount']),
                           Sending::fromString($array['sending']),
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
                'creator' => ($this->creator !== null ? $this->creator->toArray() : null),
                'completedTime' => ($this->completedTime !== null ? $this->completedTime->toArray() : null),
                'h1Descriptor' => ($this->h1Descriptor !== null ? $this->h1Descriptor->toArray() : null),
                'source' => ($this->source !== null ? $this->source->toArray() : null),
                'destination' => ($this->destination !== null ? $this->destination->toArray() : null),
                'fees' => ($this->fees !== null ? $this->fees->toArray() : null),
                'attempt' => ($this->attempt !== null ? $this->attempt->toArray() : null),
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'sending' => ((string) $this->sending),
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
                       ", creator=" . $this->creator .
                       ", completedTime=" . $this->completedTime .
                       ", h1Descriptor=" . $this->h1Descriptor .
                       ", source=" . $this->source .
                       ", destination=" . $this->destination .
                       ", fees=" . $this->fees .
                       ", attempt=" . $this->attempt .
                       ", amount=" . $this->amount .
                       ", sending=" . $this->sending .
                       ", status=" . $this->status .
                       ", description=" . $this->description .
                       ", foreignId=" . $this->foreignId .
                       ", foreignData=" . $this->foreignData . "}";
    }
}