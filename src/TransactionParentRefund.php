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

class TransactionParentRefund extends TransactionParent implements JsonSerializable  {

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


    /** @var string */
    const Type = "TransactionParent.Refund";


    /** @var string */
    const Variant = "Refund";

    /**
     * TransactionParentRefund constructor
     * @param string $id
     * @param string $url
     * @param string | null $description
     * @param Creator $creator
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct($id,
                         $url,
                         $description = null,
                         Creator $creator,
                         $foreignId = null,
                         $foreignData = null) {
        $this->id = $id;
        $this->url = $url;
        $this->description = $description;
        $this->creator = $creator;
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
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new TransactionParentRefund where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return TransactionParentRefund
     */
    public function withId($id) {
        return new TransactionParentRefund($id, $this->url, $this->description, $this->creator,
                                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransactionParentRefund where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return TransactionParentRefund
     */
    public function withUrl($url) {
        return new TransactionParentRefund($this->id, $url, $this->description, $this->creator,
                                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransactionParentRefund where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return TransactionParentRefund
     */
    public function withDescription($description) {
        return new TransactionParentRefund($this->id, $this->url, $description, $this->creator,
                                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransactionParentRefund where the field 'creator' has been updated with the value passed as parameter.
     *
     * @param Creator $creator
     * @return TransactionParentRefund
     */
    public function withCreator(Creator $creator) {
        assert($this->creator != null, "In class TransactionParentRefund the param 'creator' of type Creator can not be null");
        return new TransactionParentRefund($this->id, $this->url, $this->description, $creator,
                                           $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransactionParentRefund where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return TransactionParentRefund
     */
    public function withForeignId($foreignId) {
        return new TransactionParentRefund($this->id, $this->url, $this->description, $this->creator,
                                           $foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new TransactionParentRefund where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return TransactionParentRefund
     */
    public function withForeignData($foreignData) {
        return new TransactionParentRefund($this->id, $this->url, $this->description, $this->creator,
                                           $this->foreignId, $foreignData);
    }

    /**
     * Create TransactionParentRefund from JSON string
     *
     * @param string $json
     * @return TransactionParentRefund
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransactionParentRefund from associative array of its fields
     *
     * @param array $array
     * @return TransactionParentRefund
     */
    public static function fromArray(array $array) {
        return new TransactionParentRefund($array['id'],
                                           $array['url'],
                                           (isset($array['description']) ? $array['description'] : null),
                                           Creator::fromArray($array['creator']),
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
                'description' => $this->description,
                'creator' => ($this->creator !== null ? $this->creator->toArray() : null),
                'foreignId' => $this->foreignId,
                'foreignData' => $this->foreignData,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransactionParentRefund{id=" . $this->id .
                                       ", url=" . $this->url .
                                       ", description=" . $this->description .
                                       ", creator=" . $this->creator .
                                       ", foreignId=" . $this->foreignId .
                                       ", foreignData=" . $this->foreignData . "}";
    }
}