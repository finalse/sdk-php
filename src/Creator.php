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

abstract class Creator implements JsonSerializable  {



    /** @var string */
    protected $accountId ;

    /** @return string */
    public abstract function getType(); 

    public function isUi() {
        return $this->getType() === CreatorUi::Type;
    }

    public function isApi() {
        return $this->getType() === CreatorApi::Type;
    }

    /** @return CreatorUi | null */
    public function asUi() {
        if($this->getType() == CreatorUi::Type) return $this;
        else return null;
    }

    /** @return CreatorApi | null */
    public function asApi() {
        if($this->getType() == CreatorApi::Type) return $this;
        else return null;
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
     * Create Creator from JSON string
     *
     * @param string $json
     * @return Creator
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Creator from associative array of its fields
     *
     * @param array $array
     * @return Creator
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === CreatorUi::Type || str_ends_with('.' . $type, '.' . CreatorUi::Variant)) return CreatorUi::fromArray($array);
        else if($type === CreatorApi::Type || str_ends_with('.' . $type, '.' . CreatorApi::Variant)) return CreatorApi::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'Creator'" . " Unexpected '_type' = " . $type);
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
     * Immutable update. Return a new Creator where the field 'accountId' has been updated with the value passed as parameter.
     *
     * @param string $accountId
     * @return Creator
     */
    public abstract function withAccountId($accountId);
}