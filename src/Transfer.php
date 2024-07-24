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

class Transfer implements JsonSerializable  {

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

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;


    /** @var string */
    const Type = "Transfer";

    /**
     * Transfer constructor
     * @param string $id
     * @param string $url
     * @param Creator $creator
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
                         Sending $sending,
                         Source $source,
                         Destination $destination,
                         Fees $fees,
                         LightAttempt $attempt,
                         Amount $amount,
                         TransferStatus $status,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->id = $id;
        $this->url = $url;
        $this->creator = $creator;
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
     * Immutable update. Return a new Transfer where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return Transfer
     */
    public function withId($id) {
        return new Transfer($id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return Transfer
     */
    public function withUrl($url) {
        return new Transfer($this->id, $url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'creator' has been updated with the value passed as parameter.
     *
     * @param Creator $creator
     * @return Transfer
     */
    public function withCreator(Creator $creator) {
        assert($this->creator != null, "In class Transfer the param 'creator' of type Creator can not be null");
        return new Transfer($this->id, $this->url, $creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return Transfer
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class Transfer the param 'createdTime' of type UTCDateTime can not be null");
        return new Transfer($this->id, $this->url, $this->creator, $createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'completedTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime | null $completedTime
     * @return Transfer
     */
    public function withCompletedTime($completedTime) {
        assert($this->completedTime != null, "In class Transfer the param 'completedTime' of type UTCDateTime | null can not be null");
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'h1Descriptor' has been updated with the value passed as parameter.
     *
     * @param H1Descriptor | null $h1Descriptor
     * @return Transfer
     */
    public function withH1Descriptor($h1Descriptor) {
        assert($this->h1Descriptor != null, "In class Transfer the param 'h1Descriptor' of type H1Descriptor | null can not be null");
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'sending' has been updated with the value passed as parameter.
     *
     * @param Sending $sending
     * @return Transfer
     */
    public function withSending(Sending $sending) {
        assert($this->sending != null, "In class Transfer the param 'sending' of type Sending can not be null");
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'source' has been updated with the value passed as parameter.
     *
     * @param Source $source
     * @return Transfer
     */
    public function withSource(Source $source) {
        assert($this->source != null, "In class Transfer the param 'source' of type Source can not be null");
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'destination' has been updated with the value passed as parameter.
     *
     * @param Destination $destination
     * @return Transfer
     */
    public function withDestination(Destination $destination) {
        assert($this->destination != null, "In class Transfer the param 'destination' of type Destination can not be null");
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'fees' has been updated with the value passed as parameter.
     *
     * @param Fees $fees
     * @return Transfer
     */
    public function withFees(Fees $fees) {
        assert($this->fees != null, "In class Transfer the param 'fees' of type Fees can not be null");
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'attempt' has been updated with the value passed as parameter.
     *
     * @param LightAttempt $attempt
     * @return Transfer
     */
    public function withAttempt(LightAttempt $attempt) {
        assert($this->attempt != null, "In class Transfer the param 'attempt' of type LightAttempt can not be null");
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return Transfer
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class Transfer the param 'amount' of type Amount can not be null");
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $amount, $this->status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'status' has been updated with the value passed as parameter.
     *
     * @param TransferStatus $status
     * @return Transfer
     */
    public function withStatus(TransferStatus $status) {
        assert($this->status != null, "In class Transfer the param 'status' of type TransferStatus can not be null");
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $status, $this->description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return Transfer
     */
    public function withDescription($description) {
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $description,
                            $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return Transfer
     */
    public function withForeignId($foreignId) {
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new Transfer where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return Transfer
     */
    public function withForeignData($foreignData) {
        return new Transfer($this->id, $this->url, $this->creator, $this->createdTime, $this->completedTime,
                            $this->h1Descriptor, $this->sending, $this->source, $this->destination,
                            $this->fees, $this->attempt, $this->amount, $this->status, $this->description,
                            $this->foreignId, $foreignData);
    }

    /**
     * Create Transfer from JSON string
     *
     * @param string $json
     * @return Transfer
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Transfer from associative array of its fields
     *
     * @param array $array
     * @return Transfer
     */
    public static function fromArray(array $array) {
        return new Transfer($array['id'],
                            $array['url'],
                            Creator::fromArray($array['creator']),
                            UTCDateTime::fromArray($array['createdTime']),
                            (isset($array['completedTime']) ? UTCDateTime::fromArray($array['completedTime']) : null),
                            (isset($array['h1Descriptor']) ? H1Descriptor::fromArray($array['h1Descriptor']) : null),
                            Sending::fromString($array['sending']),
                            Source::fromArray($array['source']),
                            Destination::fromArray($array['destination']),
                            Fees::fromArray($array['fees']),
                            LightAttempt::fromArray($array['attempt']),
                            Amount::fromArray($array['amount']),
                            TransferStatus::fromArray($array['status']),
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
                'sending' => ((string) $this->sending),
                'source' => ($this->source !== null ? $this->source->toArray() : null),
                'destination' => ($this->destination !== null ? $this->destination->toArray() : null),
                'fees' => ($this->fees !== null ? $this->fees->toArray() : null),
                'attempt' => ($this->attempt !== null ? $this->attempt->toArray() : null),
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
        return "Transfer{id=" . $this->id .
                        ", url=" . $this->url .
                        ", creator=" . $this->creator .
                        ", createdTime=" . $this->createdTime .
                        ", completedTime=" . $this->completedTime .
                        ", h1Descriptor=" . $this->h1Descriptor .
                        ", sending=" . $this->sending .
                        ", source=" . $this->source .
                        ", destination=" . $this->destination .
                        ", fees=" . $this->fees .
                        ", attempt=" . $this->attempt .
                        ", amount=" . $this->amount .
                        ", status=" . $this->status .
                        ", description=" . $this->description .
                        ", foreignId=" . $this->foreignId .
                        ", foreignData=" . $this->foreignData . "}";
    }
}