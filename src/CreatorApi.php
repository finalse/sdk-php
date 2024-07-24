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

class CreatorApi extends Creator implements JsonSerializable  {

    /** @var string */
    protected $accountId ;

    /** @var string */
    protected $authAccessId ;


    /** @var string */
    const Type = "Creator.Api";


    /** @var string */
    const Variant = "Api";

    /**
     * CreatorApi constructor
     * @param string $accountId
     * @param string $authAccessId
     */
    function __construct($accountId, $authAccessId) {
        $this->accountId = $accountId;
        $this->authAccessId = $authAccessId;
    }

    /**
     * Getter of the field 'accountId'.
     *
     * @return string
     */
    public function getAccountId() {
        return $this->accountId;
    }

    /**
     * Getter of the field 'authAccessId'.
     *
     * @return string
     */
    public function getAuthAccessId() {
        return $this->authAccessId;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new CreatorApi where the field 'accountId' has been updated with the value passed as parameter.
     *
     * @param string $accountId
     * @return CreatorApi
     */
    public function withAccountId($accountId) {
        return new CreatorApi($accountId, $this->authAccessId);
    }

    /**
     * Immutable update. Return a new CreatorApi where the field 'authAccessId' has been updated with the value passed as parameter.
     *
     * @param string $authAccessId
     * @return CreatorApi
     */
    public function withAuthAccessId($authAccessId) {
        return new CreatorApi($this->accountId, $authAccessId);
    }

    /**
     * Create CreatorApi from JSON string
     *
     * @param string $json
     * @return CreatorApi
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create CreatorApi from associative array of its fields
     *
     * @param array $array
     * @return CreatorApi
     */
    public static function fromArray(array $array) {
        return new CreatorApi($array['accountId'],
                              $array['authAccessId']);
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
                'accountId' => $this->accountId,
                'authAccessId' => $this->authAccessId,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "CreatorApi{accountId=" . $this->accountId .
                          ", authAccessId=" . $this->authAccessId . "}";
    }
}