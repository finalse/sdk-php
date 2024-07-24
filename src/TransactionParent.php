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

abstract class TransactionParent implements JsonSerializable  {



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

    /** @return string */
    public abstract function getType(); 

    public function isRefund() {
        return $this->getType() === TransactionParentRefund::Type;
    }

    public function isAuthAccess() {
        return $this->getType() === TransactionParentAuthAccess::Type;
    }

    public function isDeposit() {
        return $this->getType() === TransactionParentDeposit::Type;
    }

    public function isFormulaPurchase() {
        return $this->getType() === TransactionParentFormulaPurchase::Type;
    }

    public function isFundRequest() {
        return $this->getType() === TransactionParentFundRequest::Type;
    }

    public function isQuasiTransfer() {
        return $this->getType() === TransactionParentQuasiTransfer::Type;
    }

    public function isTransfer() {
        return $this->getType() === TransactionParentTransfer::Type;
    }

    public function isWallet() {
        return $this->getType() === TransactionParentWallet::Type;
    }

    /** @return TransactionParentRefund | null */
    public function asRefund() {
        if($this->getType() == TransactionParentRefund::Type) return $this;
        else return null;
    }

    /** @return TransactionParentAuthAccess | null */
    public function asAuthAccess() {
        if($this->getType() == TransactionParentAuthAccess::Type) return $this;
        else return null;
    }

    /** @return TransactionParentDeposit | null */
    public function asDeposit() {
        if($this->getType() == TransactionParentDeposit::Type) return $this;
        else return null;
    }

    /** @return TransactionParentFormulaPurchase | null */
    public function asFormulaPurchase() {
        if($this->getType() == TransactionParentFormulaPurchase::Type) return $this;
        else return null;
    }

    /** @return TransactionParentFundRequest | null */
    public function asFundRequest() {
        if($this->getType() == TransactionParentFundRequest::Type) return $this;
        else return null;
    }

    /** @return TransactionParentQuasiTransfer | null */
    public function asQuasiTransfer() {
        if($this->getType() == TransactionParentQuasiTransfer::Type) return $this;
        else return null;
    }

    /** @return TransactionParentTransfer | null */
    public function asTransfer() {
        if($this->getType() == TransactionParentTransfer::Type) return $this;
        else return null;
    }

    /** @return TransactionParentWallet | null */
    public function asWallet() {
        if($this->getType() == TransactionParentWallet::Type) return $this;
        else return null;
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
     * Create TransactionParent from JSON string
     *
     * @param string $json
     * @return TransactionParent
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransactionParent from associative array of its fields
     *
     * @param array $array
     * @return TransactionParent
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === TransactionParentRefund::Type || str_ends_with('.' . $type, '.' . TransactionParentRefund::Variant)) return TransactionParentRefund::fromArray($array);
        else if($type === TransactionParentAuthAccess::Type || str_ends_with('.' . $type, '.' . TransactionParentAuthAccess::Variant)) return TransactionParentAuthAccess::fromArray($array);
        else if($type === TransactionParentDeposit::Type || str_ends_with('.' . $type, '.' . TransactionParentDeposit::Variant)) return TransactionParentDeposit::fromArray($array);
        else if($type === TransactionParentFormulaPurchase::Type || str_ends_with('.' . $type, '.' . TransactionParentFormulaPurchase::Variant)) return TransactionParentFormulaPurchase::fromArray($array);
        else if($type === TransactionParentFundRequest::Type || str_ends_with('.' . $type, '.' . TransactionParentFundRequest::Variant)) return TransactionParentFundRequest::fromArray($array);
        else if($type === TransactionParentQuasiTransfer::Type || str_ends_with('.' . $type, '.' . TransactionParentQuasiTransfer::Variant)) return TransactionParentQuasiTransfer::fromArray($array);
        else if($type === TransactionParentTransfer::Type || str_ends_with('.' . $type, '.' . TransactionParentTransfer::Variant)) return TransactionParentTransfer::fromArray($array);
        else if($type === TransactionParentWallet::Type || str_ends_with('.' . $type, '.' . TransactionParentWallet::Variant)) return TransactionParentWallet::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'TransactionParent'" . " Unexpected '_type' = " . $type);
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
        return array();
    }

    /**
     * Immutable update. Return a new TransactionParent where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return TransactionParent
     */
    public abstract function withId($id);

    /**
     * Immutable update. Return a new TransactionParent where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return TransactionParent
     */
    public abstract function withUrl($url);

    /**
     * Immutable update. Return a new TransactionParent where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return TransactionParent
     */
    public abstract function withDescription($description);

    /**
     * Immutable update. Return a new TransactionParent where the field 'creator' has been updated with the value passed as parameter.
     *
     * @param Creator $creator
     * @return TransactionParent
     */
    public abstract function withCreator(Creator $creator);

    /**
     * Immutable update. Return a new TransactionParent where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return TransactionParent
     */
    public abstract function withForeignId($foreignId);

    /**
     * Immutable update. Return a new TransactionParent where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return TransactionParent
     */
    public abstract function withForeignData($foreignData);
}