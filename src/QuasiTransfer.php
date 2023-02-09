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

class QuasiTransfer implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var UTCDateTime */
    protected $createdTime ;

    /** @var UTCDateTime | null */
    protected $executedTime ;

    /** @var H1Descriptor */
    protected $h1Descriptor ;

    /** @var SecurePay */
    protected $securePay ;

    /** @var Amount */
    protected $amount ;

    /** @var Sending */
    protected $sending ;

    /** @var QuasiTransferStatus */
    protected $status ;

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
     * @param UTCDateTime $createdTime
     * @param UTCDateTime | null $executedTime
     * @param H1Descriptor $h1Descriptor
     * @param SecurePay $securePay
     * @param Amount $amount
     * @param Sending $sending
     * @param QuasiTransferStatus $status
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct($id,
                         $url,
                         UTCDateTime $createdTime,
                         $executedTime = null,
                         H1Descriptor $h1Descriptor,
                         SecurePay $securePay,
                         Amount $amount,
                         Sending $sending,
                         QuasiTransferStatus $status,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->id = $id;
        $this->url = $url;
        $this->createdTime = $createdTime;
        $this->executedTime = $executedTime;
        $this->h1Descriptor = $h1Descriptor;
        $this->securePay = $securePay;
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
     * Getter of the field 'executedTime'.
     *
     * @return UTCDateTime | null
     */
    public function getExecutedTime() {
        return $this->executedTime;
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
     * @return QuasiTransferStatus
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
     * Immutable update. Return a new QuasiTransfer where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return QuasiTransfer
     */
    public function withId($id) {
        return new QuasiTransfer($id, $this->url, $this->createdTime, $this->executedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return QuasiTransfer
     */
    public function withUrl($url) {
        return new QuasiTransfer($this->id, $url, $this->createdTime, $this->executedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return QuasiTransfer
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class QuasiTransfer the param 'createdTime' of type UTCDateTime can not be null");
        return new QuasiTransfer($this->id, $this->url, $createdTime, $this->executedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'executedTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime | null $executedTime
     * @return QuasiTransfer
     */
    public function withExecutedTime($executedTime) {
        assert($this->executedTime != null, "In class QuasiTransfer the param 'executedTime' of type UTCDateTime | null can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->createdTime, $executedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'h1Descriptor' has been updated with the value passed as parameter.
     *
     * @param H1Descriptor $h1Descriptor
     * @return QuasiTransfer
     */
    public function withH1Descriptor(H1Descriptor $h1Descriptor) {
        assert($this->h1Descriptor != null, "In class QuasiTransfer the param 'h1Descriptor' of type H1Descriptor can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->createdTime, $this->executedTime,
                                 $h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'securePay' has been updated with the value passed as parameter.
     *
     * @param SecurePay $securePay
     * @return QuasiTransfer
     */
    public function withSecurePay(SecurePay $securePay) {
        assert($this->securePay != null, "In class QuasiTransfer the param 'securePay' of type SecurePay can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->createdTime, $this->executedTime,
                                 $this->h1Descriptor, $securePay, $this->amount, $this->sending,
                                 $this->status, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return QuasiTransfer
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class QuasiTransfer the param 'amount' of type Amount can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->createdTime, $this->executedTime,
                                 $this->h1Descriptor, $this->securePay, $amount, $this->sending,
                                 $this->status, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'sending' has been updated with the value passed as parameter.
     *
     * @param Sending $sending
     * @return QuasiTransfer
     */
    public function withSending(Sending $sending) {
        assert($this->sending != null, "In class QuasiTransfer the param 'sending' of type Sending can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->createdTime, $this->executedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $sending,
                                 $this->status, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'status' has been updated with the value passed as parameter.
     *
     * @param QuasiTransferStatus $status
     * @return QuasiTransfer
     */
    public function withStatus(QuasiTransferStatus $status) {
        assert($this->status != null, "In class QuasiTransfer the param 'status' of type QuasiTransferStatus can not be null");
        return new QuasiTransfer($this->id, $this->url, $this->createdTime, $this->executedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $status, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return QuasiTransfer
     */
    public function withDescription($description) {
        return new QuasiTransfer($this->id, $this->url, $this->createdTime, $this->executedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return QuasiTransfer
     */
    public function withForeignId($foreignId) {
        return new QuasiTransfer($this->id, $this->url, $this->createdTime, $this->executedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->description, $foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new QuasiTransfer where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return QuasiTransfer
     */
    public function withForeignData($foreignData) {
        return new QuasiTransfer($this->id, $this->url, $this->createdTime, $this->executedTime,
                                 $this->h1Descriptor, $this->securePay, $this->amount, $this->sending,
                                 $this->status, $this->description, $this->foreignId, $foreignData);
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
                                 UTCDateTime::fromArray($array['createdTime']),
                                 (isset($array['executedTime']) ? UTCDateTime::fromArray($array['executedTime']) : null),
                                 H1Descriptor::fromArray($array['h1Descriptor']),
                                 SecurePay::fromArray($array['securePay']),
                                 Amount::fromArray($array['amount']),
                                 Sending::fromString($array['sending']),
                                 QuasiTransferStatus::fromArray($array['status']),
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
                'executedTime' => ($this->executedTime !== null ? $this->executedTime->toArray() : null),
                'h1Descriptor' => ($this->h1Descriptor !== null ? $this->h1Descriptor->toArray() : null),
                'securePay' => ($this->securePay !== null ? $this->securePay->toArray() : null),
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
        return "QuasiTransfer{id=" . $this->id .
                             ", url=" . $this->url .
                             ", createdTime=" . $this->createdTime .
                             ", executedTime=" . $this->executedTime .
                             ", h1Descriptor=" . $this->h1Descriptor .
                             ", securePay=" . $this->securePay .
                             ", amount=" . $this->amount .
                             ", sending=" . $this->sending .
                             ", status=" . $this->status .
                             ", description=" . $this->description .
                             ", foreignId=" . $this->foreignId .
                             ", foreignData=" . $this->foreignData . "}";
    }
}