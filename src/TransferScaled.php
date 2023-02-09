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

class TransferScaled extends Transfer implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var UTCDateTime */
    protected $createdTime ;

    /** @var H1Descriptor */
    protected $h1Descriptor ;

    /** @var MoneyAccount */
    protected $origin ;

    /** @var TransferDestination */
    protected $destination ;

    /** @var Fees */
    protected $fees ;

    /** @var Sending */
    protected $sending ;

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;


    /** @var string */
    const Type = "Transfer.Scaled";


    /** @var string */
    const Variant = "Scaled";

    /**
     * TransferScaled constructor
     * @param string $id
     * @param string $url
     * @param UTCDateTime $createdTime
     * @param H1Descriptor $h1Descriptor
     * @param MoneyAccount $origin
     * @param TransferDestination $destination
     * @param Fees $fees
     * @param Sending $sending
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct($id,
                         $url,
                         UTCDateTime $createdTime,
                         H1Descriptor $h1Descriptor,
                         MoneyAccount $origin,
                         TransferDestination $destination,
                         Fees $fees,
                         Sending $sending,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->id = $id;
        $this->url = $url;
        $this->createdTime = $createdTime;
        $this->h1Descriptor = $h1Descriptor;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->fees = $fees;
        $this->sending = $sending;
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
     * @return TransferDestination
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
     * Getter of the field 'sending'.
     *
     * @return Sending
     */
    public function getSending() {
        return $this->sending;
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
     * Immutable update. Return a new TransferScaled where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return TransferScaled
     */
    public function withId($id) {
        return new TransferScaled($id, $this->url, $this->createdTime, $this->h1Descriptor,
                                  $this->origin, $this->destination, $this->fees, $this->sending,
                                  $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransferScaled where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return TransferScaled
     */
    public function withUrl($url) {
        return new TransferScaled($this->id, $url, $this->createdTime, $this->h1Descriptor,
                                  $this->origin, $this->destination, $this->fees, $this->sending,
                                  $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransferScaled where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return TransferScaled
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class TransferScaled the param 'createdTime' of type UTCDateTime can not be null");
        return new TransferScaled($this->id, $this->url, $createdTime, $this->h1Descriptor,
                                  $this->origin, $this->destination, $this->fees, $this->sending,
                                  $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransferScaled where the field 'h1Descriptor' has been updated with the value passed as parameter.
     *
     * @param H1Descriptor $h1Descriptor
     * @return TransferScaled
     */
    public function withH1Descriptor(H1Descriptor $h1Descriptor) {
        assert($this->h1Descriptor != null, "In class TransferScaled the param 'h1Descriptor' of type H1Descriptor can not be null");
        return new TransferScaled($this->id, $this->url, $this->createdTime, $h1Descriptor,
                                  $this->origin, $this->destination, $this->fees, $this->sending,
                                  $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransferScaled where the field 'origin' has been updated with the value passed as parameter.
     *
     * @param MoneyAccount $origin
     * @return TransferScaled
     */
    public function withOrigin(MoneyAccount $origin) {
        assert($this->origin != null, "In class TransferScaled the param 'origin' of type MoneyAccount can not be null");
        return new TransferScaled($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                                  $origin, $this->destination, $this->fees, $this->sending,
                                  $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransferScaled where the field 'destination' has been updated with the value passed as parameter.
     *
     * @param TransferDestination $destination
     * @return TransferScaled
     */
    public function withDestination(TransferDestination $destination) {
        assert($this->destination != null, "In class TransferScaled the param 'destination' of type TransferDestination can not be null");
        return new TransferScaled($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                                  $this->origin, $destination, $this->fees, $this->sending,
                                  $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransferScaled where the field 'fees' has been updated with the value passed as parameter.
     *
     * @param Fees $fees
     * @return TransferScaled
     */
    public function withFees(Fees $fees) {
        assert($this->fees != null, "In class TransferScaled the param 'fees' of type Fees can not be null");
        return new TransferScaled($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                                  $this->origin, $this->destination, $fees, $this->sending,
                                  $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransferScaled where the field 'sending' has been updated with the value passed as parameter.
     *
     * @param Sending $sending
     * @return TransferScaled
     */
    public function withSending(Sending $sending) {
        assert($this->sending != null, "In class TransferScaled the param 'sending' of type Sending can not be null");
        return new TransferScaled($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                                  $this->origin, $this->destination, $this->fees, $sending,
                                  $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransferScaled where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return TransferScaled
     */
    public function withDescription($description) {
        return new TransferScaled($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                                  $this->origin, $this->destination, $this->fees, $this->sending,
                                  $description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransferScaled where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return TransferScaled
     */
    public function withForeignId($foreignId) {
        return new TransferScaled($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                                  $this->origin, $this->destination, $this->fees, $this->sending,
                                  $this->description, $foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransferScaled where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return TransferScaled
     */
    public function withForeignData($foreignData) {
        return new TransferScaled($this->id, $this->url, $this->createdTime, $this->h1Descriptor,
                                  $this->origin, $this->destination, $this->fees, $this->sending,
                                  $this->description, $this->foreignId, $foreignData);
    }

    /**
     * Create TransferScaled from JSON string
     *
     * @param string $json
     * @return TransferScaled
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransferScaled from associative array of its fields
     *
     * @param array $array
     * @return TransferScaled
     */
    public static function fromArray(array $array) {
        return new TransferScaled($array['id'],
                                  $array['url'],
                                  UTCDateTime::fromArray($array['createdTime']),
                                  H1Descriptor::fromArray($array['h1Descriptor']),
                                  MoneyAccount::fromArray($array['origin']),
                                  TransferDestination::fromArray($array['destination']),
                                  Fees::fromArray($array['fees']),
                                  Sending::fromString($array['sending']),
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
                '_type' => self::Variant, 
                'id' => $this->id,
                'url' => $this->url,
                'createdTime' => ($this->createdTime !== null ? $this->createdTime->toArray() : null),
                'h1Descriptor' => ($this->h1Descriptor !== null ? $this->h1Descriptor->toArray() : null),
                'origin' => ($this->origin !== null ? $this->origin->toArray() : null),
                'destination' => ($this->destination !== null ? $this->destination->toArray() : null),
                'fees' => ($this->fees !== null ? $this->fees->toArray() : null),
                'sending' => ((string) $this->sending),
                'description' => $this->description,
                'foreignId' => $this->foreignId,
                'foreignData' => $this->foreignData,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransferScaled{id=" . $this->id .
                              ", url=" . $this->url .
                              ", createdTime=" . $this->createdTime .
                              ", h1Descriptor=" . $this->h1Descriptor .
                              ", origin=" . $this->origin .
                              ", destination=" . $this->destination .
                              ", fees=" . $this->fees .
                              ", sending=" . $this->sending .
                              ", description=" . $this->description .
                              ", foreignId=" . $this->foreignId .
                              ", foreignData=" . $this->foreignData . "}";
    }
}