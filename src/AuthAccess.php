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

class AuthAccess implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var UTCDateTime */
    protected $createdTime ;

    /** @var string */
    protected $token ;

    /** @var AuthAccessPermission */
    protected $permission ;

    /** @var string */
    protected $secretKey ;

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;


    /** @var string */
    const Type = "AuthAccess";

    /**
     * AuthAccess constructor
     * @param string $id
     * @param string $url
     * @param UTCDateTime $createdTime
     * @param string $token
     * @param AuthAccessPermission $permission
     * @param string $secretKey
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct($id,
                         $url,
                         UTCDateTime $createdTime,
                         $token,
                         AuthAccessPermission $permission,
                         $secretKey,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->id = $id;
        $this->url = $url;
        $this->createdTime = $createdTime;
        $this->token = $token;
        $this->permission = $permission;
        $this->secretKey = $secretKey;
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
     * Immutable update. Return a new AuthAccess where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return AuthAccess
     */
    public function withId($id) {
        return new AuthAccess($id, $this->url, $this->createdTime, $this->token, $this->permission,
                              $this->secretKey, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new AuthAccess where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return AuthAccess
     */
    public function withUrl($url) {
        return new AuthAccess($this->id, $url, $this->createdTime, $this->token, $this->permission,
                              $this->secretKey, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new AuthAccess where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return AuthAccess
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class AuthAccess the param 'createdTime' of type UTCDateTime can not be null");
        return new AuthAccess($this->id, $this->url, $createdTime, $this->token, $this->permission,
                              $this->secretKey, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new AuthAccess where the field 'token' has been updated with the value passed as parameter.
     *
     * @param string $token
     * @return AuthAccess
     */
    public function withToken($token) {
        return new AuthAccess($this->id, $this->url, $this->createdTime, $token, $this->permission,
                              $this->secretKey, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new AuthAccess where the field 'permission' has been updated with the value passed as parameter.
     *
     * @param AuthAccessPermission $permission
     * @return AuthAccess
     */
    public function withPermission(AuthAccessPermission $permission) {
        assert($this->permission != null, "In class AuthAccess the param 'permission' of type AuthAccessPermission can not be null");
        return new AuthAccess($this->id, $this->url, $this->createdTime, $this->token, $permission,
                              $this->secretKey, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new AuthAccess where the field 'secretKey' has been updated with the value passed as parameter.
     *
     * @param string $secretKey
     * @return AuthAccess
     */
    public function withSecretKey($secretKey) {
        return new AuthAccess($this->id, $this->url, $this->createdTime, $this->token, $this->permission,
                              $secretKey, $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new AuthAccess where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return AuthAccess
     */
    public function withDescription($description) {
        return new AuthAccess($this->id, $this->url, $this->createdTime, $this->token, $this->permission,
                              $this->secretKey, $description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new AuthAccess where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return AuthAccess
     */
    public function withForeignId($foreignId) {
        return new AuthAccess($this->id, $this->url, $this->createdTime, $this->token, $this->permission,
                              $this->secretKey, $this->description, $foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new AuthAccess where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return AuthAccess
     */
    public function withForeignData($foreignData) {
        return new AuthAccess($this->id, $this->url, $this->createdTime, $this->token, $this->permission,
                              $this->secretKey, $this->description, $this->foreignId, $foreignData);
    }

    /**
     * Create AuthAccess from JSON string
     *
     * @param string $json
     * @return AuthAccess
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create AuthAccess from associative array of its fields
     *
     * @param array $array
     * @return AuthAccess
     */
    public static function fromArray(array $array) {
        return new AuthAccess($array['id'],
                              $array['url'],
                              UTCDateTime::fromArray($array['createdTime']),
                              $array['token'],
                              AuthAccessPermission::fromArray($array['permission']),
                              $array['secretKey'],
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
                'token' => $this->token,
                'permission' => ($this->permission !== null ? $this->permission->toArray() : null),
                'secretKey' => $this->secretKey,
                'description' => $this->description,
                'foreignId' => $this->foreignId,
                'foreignData' => $this->foreignData,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "AuthAccess{id=" . $this->id .
                          ", url=" . $this->url .
                          ", createdTime=" . $this->createdTime .
                          ", token=" . $this->token .
                          ", permission=" . $this->permission .
                          ", secretKey=******" .
                          ", description=" . $this->description .
                          ", foreignId=" . $this->foreignId .
                          ", foreignData=" . $this->foreignData . "}";
    }
}