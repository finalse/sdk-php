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

class Attempt implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var UTCDateTime */
    protected $createdTime ;

    /** @var AttemptParentType */
    protected $parentType ;

    /** @var string */
    protected $parentId ;

    /** @var AttemptStatus */
    protected $status ;

    /** @var array */
    protected $validations ;


    /** @var string */
    const Type = "Attempt";

    /**
     * Attempt constructor
     * @param string $id
     * @param string $url
     * @param UTCDateTime $createdTime
     * @param AttemptParentType $parentType
     * @param string $parentId
     * @param AttemptStatus $status
     * @param array $validations
     */
    function __construct($id,
                         $url,
                         UTCDateTime $createdTime,
                         AttemptParentType $parentType,
                         $parentId,
                         AttemptStatus $status,
                         array $validations) {
        $this->id = $id;
        $this->url = $url;
        $this->createdTime = $createdTime;
        $this->parentType = $parentType;
        $this->parentId = $parentId;
        $this->status = $status;
        $this->validations = $validations;
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
     * Getter of the field 'parentType'.
     *
     * @return AttemptParentType
     */
    public function getParentType() {
        return $this->parentType;
    }

    /**
     * Getter of the field 'parentId'.
     *
     * @return string
     */
    public function getParentId() {
        return $this->parentId;
    }

    /**
     * Getter of the field 'status'.
     *
     * @return AttemptStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Getter of the field 'validations'.
     *
     * @return array
     */
    public function getValidations() {
        return $this->validations;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Attempt where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return Attempt
     */
    public function withId($id) {
        return new Attempt($id, $this->url, $this->createdTime, $this->parentType, $this->parentId,
                           $this->status, $this->validations);
    }

    /**
     * Immutable update. Return a new Attempt where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return Attempt
     */
    public function withUrl($url) {
        return new Attempt($this->id, $url, $this->createdTime, $this->parentType, $this->parentId,
                           $this->status, $this->validations);
    }

    /**
     * Immutable update. Return a new Attempt where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return Attempt
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class Attempt the param 'createdTime' of type UTCDateTime can not be null");
        return new Attempt($this->id, $this->url, $createdTime, $this->parentType, $this->parentId,
                           $this->status, $this->validations);
    }

    /**
     * Immutable update. Return a new Attempt where the field 'parentType' has been updated with the value passed as parameter.
     *
     * @param AttemptParentType $parentType
     * @return Attempt
     */
    public function withParentType(AttemptParentType $parentType) {
        assert($this->parentType != null, "In class Attempt the param 'parentType' of type AttemptParentType can not be null");
        return new Attempt($this->id, $this->url, $this->createdTime, $parentType, $this->parentId,
                           $this->status, $this->validations);
    }

    /**
     * Immutable update. Return a new Attempt where the field 'parentId' has been updated with the value passed as parameter.
     *
     * @param string $parentId
     * @return Attempt
     */
    public function withParentId($parentId) {
        return new Attempt($this->id, $this->url, $this->createdTime, $this->parentType,
                           $parentId, $this->status, $this->validations);
    }

    /**
     * Immutable update. Return a new Attempt where the field 'status' has been updated with the value passed as parameter.
     *
     * @param AttemptStatus $status
     * @return Attempt
     */
    public function withStatus(AttemptStatus $status) {
        assert($this->status != null, "In class Attempt the param 'status' of type AttemptStatus can not be null");
        return new Attempt($this->id, $this->url, $this->createdTime, $this->parentType,
                           $this->parentId, $status, $this->validations);
    }

    /**
     * Immutable update. Return a new Attempt where the field 'validations' has been updated with the value passed as parameter.
     *
     * @param array $validations
     * @return Attempt
     */
    public function withValidations(array $validations) {
        assert($this->validations != null, "In class Attempt the param 'validations' of type array can not be null");
        return new Attempt($this->id, $this->url, $this->createdTime, $this->parentType,
                           $this->parentId, $this->status, $validations);
    }

    /**
     * Create Attempt from JSON string
     *
     * @param string $json
     * @return Attempt
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Attempt from associative array of its fields
     *
     * @param array $array
     * @return Attempt
     */
    public static function fromArray(array $array) {
        return new Attempt($array['id'],
                           $array['url'],
                           UTCDateTime::fromArray($array['createdTime']),
                           AttemptParentType::fromString($array['parentType']),
                           $array['parentId'],
                           AttemptStatus::fromArray($array['status']),
                           array_map(function($el){ return AttemptValidation::fromArray($el); }, $array['validations']));
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
                'parentType' => ((string) $this->parentType),
                'parentId' => $this->parentId,
                'status' => ($this->status !== null ? $this->status->toArray() : null),
                'validations' => ($this->validations !== null ? array_map(function($el){ return $el->toArray(); }, $this->validations) : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Attempt{id=" . $this->id .
                       ", url=" . $this->url .
                       ", createdTime=" . $this->createdTime .
                       ", parentType=" . $this->parentType .
                       ", parentId=" . $this->parentId .
                       ", status=" . $this->status .
                       ", validations=" . $this->validations . "}";
    }
}