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

class TransactionStatusFailure extends TransactionStatus implements JsonSerializable  {

    /** @var boolean */
    protected $isCancelled ;


    /** @var string */
    const Type = "TransactionStatus.Failure";


    /** @var string */
    const Variant = "Failure";

    /**
     * TransactionStatusFailure constructor
     * @param boolean $isCancelled
     */
    function __construct($isCancelled) {
        $this->isCancelled = $isCancelled;
    }

    /**
     * Getter of the field 'isCancelled'.
     *
     * @return boolean
     */
    public function isCancelled() {
        return $this->isCancelled;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new TransactionStatusFailure where the field 'isCancelled' has been updated with the value passed as parameter.
     *
     * @param boolean $isCancelled
     * @return TransactionStatusFailure
     */
    public function withIsCancelled($isCancelled) {
        return new TransactionStatusFailure($isCancelled);
    }

    /**
     * Create TransactionStatusFailure from JSON string
     *
     * @param string $json
     * @return TransactionStatusFailure
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransactionStatusFailure from associative array of its fields
     *
     * @param array $array
     * @return TransactionStatusFailure
     */
    public static function fromArray(array $array) {
        return new TransactionStatusFailure($array['isCancelled']);
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
                'isCancelled' => $this->isCancelled,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransactionStatusFailure{isCancelled=" . $this->isCancelled . "}";
    }
}