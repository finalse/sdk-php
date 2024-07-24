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

class TransactionParentAuthAccess extends TransactionParent implements JsonSerializable  {

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

    /** @var string */
    protected $name ;

    /** @var string */
    protected $token ;

    /** @var AuthAccessPermission */
    protected $permission ;

    /** @var string */
    protected $secretKey ;

    /** @var boolean */
    protected $isEnabled ;


    /** @var string */
    const Type = "TransactionParent.AuthAccess";


    /** @var string */
    const Variant = "AuthAccess";

    /**
     * TransactionParentAuthAccess constructor
     * @param string $id
     * @param string $url
     * @param string | null $description
     * @param Creator $creator
     * @param string | null $foreignId
     * @param string | null $foreignData
     * @param UTCDateTime $createdTime
     * @param string $name
     * @param string $token
     * @param AuthAccessPermission $permission
     * @param string $secretKey
     * @param boolean $isEnabled
     */
    function __construct($id,
                         $url,
                         $description = null,
                         Creator $creator,
                         $foreignId = null,
                         $foreignData = null,
                         UTCDateTime $createdTime,
                         $name,
                         $token,
                         AuthAccessPermission $permission,
                         $secretKey,
                         $isEnabled) {
        $this->id = $id;
        $this->url = $url;
        $this->description = $description;
        $this->creator = $creator;
        $this->foreignId = $foreignId;
        $this->foreignData = $foreignData;
        $this->createdTime = $createdTime;
        $this->name = $name;
        $this->token = $token;
        $this->permission = $permission;
        $this->secretKey = $secretKey;
        $this->isEnabled = $isEnabled;
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
     * Getter of the field 'name'.
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Getter of the field 'token'.
     *
     * @return string
     */
    public function getToken() {
        return $this->token;
    }

    /**
     * Getter of the field 'permission'.
     *
     * @return AuthAccessPermission
     */
    public function getPermission() {
        return $this->permission;
    }

    /**
     * Getter of the field 'secretKey'.
     *
     * @return string
     */
    public function getSecretKey() {
        return $this->secretKey;
    }

    /**
     * Getter of the field 'isEnabled'.
     *
     * @return boolean
     */
    public function isEnabled() {
        return $this->isEnabled;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return TransactionParentAuthAccess
     */
    public function withId($id) {
        return new TransactionParentAuthAccess($id, $this->url, $this->description, $this->creator,
                                               $this->foreignId, $this->foreignData, $this->createdTime,
                                               $this->name, $this->token, $this->permission,
                                               $this->secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return TransactionParentAuthAccess
     */
    public function withUrl($url) {
        return new TransactionParentAuthAccess($this->id, $url, $this->description, $this->creator,
                                               $this->foreignId, $this->foreignData, $this->createdTime,
                                               $this->name, $this->token, $this->permission,
                                               $this->secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return TransactionParentAuthAccess
     */
    public function withDescription($description) {
        return new TransactionParentAuthAccess($this->id, $this->url, $description, $this->creator,
                                               $this->foreignId, $this->foreignData, $this->createdTime,
                                               $this->name, $this->token, $this->permission,
                                               $this->secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'creator' has been updated with the value passed as parameter.
     *
     * @param Creator $creator
     * @return TransactionParentAuthAccess
     */
    public function withCreator(Creator $creator) {
        assert($this->creator != null, "In class TransactionParentAuthAccess the param 'creator' of type Creator can not be null");
        return new TransactionParentAuthAccess($this->id, $this->url, $this->description,
                                               $creator, $this->foreignId, $this->foreignData,
                                               $this->createdTime, $this->name, $this->token,
                                               $this->permission, $this->secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return TransactionParentAuthAccess
     */
    public function withForeignId($foreignId) {
        return new TransactionParentAuthAccess($this->id, $this->url, $this->description,
                                               $this->creator, $foreignId, $this->foreignData,
                                               $this->createdTime, $this->name, $this->token,
                                               $this->permission, $this->secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return TransactionParentAuthAccess
     */
    public function withForeignData($foreignData) {
        return new TransactionParentAuthAccess($this->id, $this->url, $this->description,
                                               $this->creator, $this->foreignId, $foreignData,
                                               $this->createdTime, $this->name, $this->token,
                                               $this->permission, $this->secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return TransactionParentAuthAccess
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class TransactionParentAuthAccess the param 'createdTime' of type UTCDateTime can not be null");
        return new TransactionParentAuthAccess($this->id, $this->url, $this->description,
                                               $this->creator, $this->foreignId, $this->foreignData,
                                               $createdTime, $this->name, $this->token, $this->permission,
                                               $this->secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'name' has been updated with the value passed as parameter.
     *
     * @param string $name
     * @return TransactionParentAuthAccess
     */
    public function withName($name) {
        return new TransactionParentAuthAccess($this->id, $this->url, $this->description,
                                               $this->creator, $this->foreignId, $this->foreignData,
                                               $this->createdTime, $name, $this->token, $this->permission,
                                               $this->secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'token' has been updated with the value passed as parameter.
     *
     * @param string $token
     * @return TransactionParentAuthAccess
     */
    public function withToken($token) {
        return new TransactionParentAuthAccess($this->id, $this->url, $this->description,
                                               $this->creator, $this->foreignId, $this->foreignData,
                                               $this->createdTime, $this->name, $token, $this->permission,
                                               $this->secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'permission' has been updated with the value passed as parameter.
     *
     * @param AuthAccessPermission $permission
     * @return TransactionParentAuthAccess
     */
    public function withPermission(AuthAccessPermission $permission) {
        assert($this->permission != null, "In class TransactionParentAuthAccess the param 'permission' of type AuthAccessPermission can not be null");
        return new TransactionParentAuthAccess($this->id, $this->url, $this->description,
                                               $this->creator, $this->foreignId, $this->foreignData,
                                               $this->createdTime, $this->name, $this->token,
                                               $permission, $this->secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'secretKey' has been updated with the value passed as parameter.
     *
     * @param string $secretKey
     * @return TransactionParentAuthAccess
     */
    public function withSecretKey($secretKey) {
        return new TransactionParentAuthAccess($this->id, $this->url, $this->description,
                                               $this->creator, $this->foreignId, $this->foreignData,
                                               $this->createdTime, $this->name, $this->token,
                                               $this->permission, $secretKey, $this->isEnabled);
    }

    /**
     * Immutable update. Return a new TransactionParentAuthAccess where the field 'isEnabled' has been updated with the value passed as parameter.
     *
     * @param boolean $isEnabled
     * @return TransactionParentAuthAccess
     */
    public function withIsEnabled($isEnabled) {
        return new TransactionParentAuthAccess($this->id, $this->url, $this->description,
                                               $this->creator, $this->foreignId, $this->foreignData,
                                               $this->createdTime, $this->name, $this->token,
                                               $this->permission, $this->secretKey, $isEnabled);
    }

    /**
     * Create TransactionParentAuthAccess from JSON string
     *
     * @param string $json
     * @return TransactionParentAuthAccess
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransactionParentAuthAccess from associative array of its fields
     *
     * @param array $array
     * @return TransactionParentAuthAccess
     */
    public static function fromArray(array $array) {
        return new TransactionParentAuthAccess($array['id'],
                                               $array['url'],
                                               (isset($array['description']) ? $array['description'] : null),
                                               Creator::fromArray($array['creator']),
                                               (isset($array['foreignId']) ? $array['foreignId'] : null),
                                               (isset($array['foreignData']) ? $array['foreignData'] : null),
                                               UTCDateTime::fromArray($array['createdTime']),
                                               $array['name'],
                                               $array['token'],
                                               AuthAccessPermission::fromArray($array['permission']),
                                               $array['secretKey'],
                                               $array['isEnabled']);
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
                'name' => $this->name,
                'token' => $this->token,
                'permission' => ($this->permission !== null ? $this->permission->toArray() : null),
                'secretKey' => $this->secretKey,
                'isEnabled' => $this->isEnabled,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransactionParentAuthAccess{id=" . $this->id .
                                           ", url=" . $this->url .
                                           ", description=" . $this->description .
                                           ", creator=" . $this->creator .
                                           ", foreignId=" . $this->foreignId .
                                           ", foreignData=" . $this->foreignData .
                                           ", createdTime=" . $this->createdTime .
                                           ", name=" . $this->name .
                                           ", token=" . $this->token .
                                           ", permission=" . $this->permission .
                                           ", secretKey=******" .
                                           ", isEnabled=" . $this->isEnabled . "}";
    }
}