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

abstract class Transfer implements JsonSerializable  {



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

    /** @return string */
    public abstract function getType(); 

    public function isUnitary() {
        return $this->getType() === TransferUnitary::Type;
    }

    public function isScaled() {
        return $this->getType() === TransferScaled::Type;
    }

    public function isCaution() {
        return $this->getType() === TransferCaution::Type;
    }

    public function isProvision() {
        return $this->getType() === TransferProvision::Type;
    }

    public function isInstallment() {
        return $this->getType() === TransferInstallment::Type;
    }

    public function isPrePaid() {
        return $this->getType() === TransferPrePaid::Type;
    }

    public function isPostPaid() {
        return $this->getType() === TransferPostPaid::Type;
    }

    public function isPreAuthorized() {
        return $this->getType() === TransferPreAuthorized::Type;
    }

    public function isNotUnitary() {
        return $this->getType() !== TransferUnitary::Type; 
    }

    public function isNotScaled() {
        return $this->getType() !== TransferScaled::Type; 
    }

    public function isNotCaution() {
        return $this->getType() !== TransferCaution::Type; 
    }

    public function isNotProvision() {
        return $this->getType() !== TransferProvision::Type; 
    }

    public function isNotInstallment() {
        return $this->getType() !== TransferInstallment::Type; 
    }

    public function isNotPrePaid() {
        return $this->getType() !== TransferPrePaid::Type; 
    }

    public function isNotPostPaid() {
        return $this->getType() !== TransferPostPaid::Type; 
    }

    public function isNotPreAuthorized() {
        return $this->getType() !== TransferPreAuthorized::Type; 
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
        $type = $array['_type'];
        if($type === TransferUnitary::Type || str_ends_with('.' . $type, '.' . TransferUnitary::Variant)) return TransferUnitary::fromArray($array);
        else if($type === TransferScaled::Type || str_ends_with('.' . $type, '.' . TransferScaled::Variant)) return TransferScaled::fromArray($array);
        else if($type === TransferCaution::Type || str_ends_with('.' . $type, '.' . TransferCaution::Variant)) return TransferCaution::fromArray($array);
        else if($type === TransferProvision::Type || str_ends_with('.' . $type, '.' . TransferProvision::Variant)) return TransferProvision::fromArray($array);
        else if($type === TransferInstallment::Type || str_ends_with('.' . $type, '.' . TransferInstallment::Variant)) return TransferInstallment::fromArray($array);
        else if($type === TransferPrePaid::Type || str_ends_with('.' . $type, '.' . TransferPrePaid::Variant)) return TransferPrePaid::fromArray($array);
        else if($type === TransferPostPaid::Type || str_ends_with('.' . $type, '.' . TransferPostPaid::Variant)) return TransferPostPaid::fromArray($array);
        else if($type === TransferPreAuthorized::Type || str_ends_with('.' . $type, '.' . TransferPreAuthorized::Variant)) return TransferPreAuthorized::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'Transfer'" . " Unexpected '_type' = " . $type);
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
     * Immutable update. Return a new Transfer where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return Transfer
     */
    public abstract function withId($id);

    /**
     * Immutable update. Return a new Transfer where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return Transfer
     */
    public abstract function withUrl($url);

    /**
     * Immutable update. Return a new Transfer where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return Transfer
     */
    public abstract function withCreatedTime(UTCDateTime $createdTime);

    /**
     * Immutable update. Return a new Transfer where the field 'h1Descriptor' has been updated with the value passed as parameter.
     *
     * @param H1Descriptor $h1Descriptor
     * @return Transfer
     */
    public abstract function withH1Descriptor(H1Descriptor $h1Descriptor);

    /**
     * Immutable update. Return a new Transfer where the field 'origin' has been updated with the value passed as parameter.
     *
     * @param MoneyAccount $origin
     * @return Transfer
     */
    public abstract function withOrigin(MoneyAccount $origin);

    /**
     * Immutable update. Return a new Transfer where the field 'destination' has been updated with the value passed as parameter.
     *
     * @param TransferDestination $destination
     * @return Transfer
     */
    public abstract function withDestination(TransferDestination $destination);

    /**
     * Immutable update. Return a new Transfer where the field 'fees' has been updated with the value passed as parameter.
     *
     * @param Fees $fees
     * @return Transfer
     */
    public abstract function withFees(Fees $fees);

    /**
     * Immutable update. Return a new Transfer where the field 'sending' has been updated with the value passed as parameter.
     *
     * @param Sending $sending
     * @return Transfer
     */
    public abstract function withSending(Sending $sending);

    /**
     * Immutable update. Return a new Transfer where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return Transfer
     */
    public abstract function withDescription($description);

    /**
     * Immutable update. Return a new Transfer where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return Transfer
     */
    public abstract function withForeignId($foreignId);

    /**
     * Immutable update. Return a new Transfer where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return Transfer
     */
    public abstract function withForeignData($foreignData);
}