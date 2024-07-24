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

class CreatorUi extends Creator implements JsonSerializable  {

    /** @var string */
    protected $accountId ;

    /** @var string */
    protected $personId ;


    /** @var string */
    const Type = "Creator.Ui";


    /** @var string */
    const Variant = "Ui";

    /**
     * CreatorUi constructor
     * @param string $accountId
     * @param string $personId
     */
    function __construct($accountId, $personId) {
        $this->accountId = $accountId;
        $this->personId = $personId;
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
     * Getter of the field 'personId'.
     *
     * @return string
     */
    public function getPersonId() {
        return $this->personId;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new CreatorUi where the field 'accountId' has been updated with the value passed as parameter.
     *
     * @param string $accountId
     * @return CreatorUi
     */
    public function withAccountId($accountId) {
        return new CreatorUi($accountId, $this->personId);
    }

    /**
     * Immutable update. Return a new CreatorUi where the field 'personId' has been updated with the value passed as parameter.
     *
     * @param string $personId
     * @return CreatorUi
     */
    public function withPersonId($personId) {
        return new CreatorUi($this->accountId, $personId);
    }

    /**
     * Create CreatorUi from JSON string
     *
     * @param string $json
     * @return CreatorUi
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create CreatorUi from associative array of its fields
     *
     * @param array $array
     * @return CreatorUi
     */
    public static function fromArray(array $array) {
        return new CreatorUi($array['accountId'],
                             $array['personId']);
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
                'personId' => $this->personId,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "CreatorUi{accountId=" . $this->accountId .
                         ", personId=" . $this->personId . "}";
    }
}