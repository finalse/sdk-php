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

class TransferStatusProcessing extends TransferStatus implements JsonSerializable  {

    /** @var LocalizedText */
    protected $reason ;


    /** @var string */
    const Type = "TransferStatus.Processing";


    /** @var string */
    const Variant = "Processing";

    /**
     * TransferStatusProcessing constructor
     * @param LocalizedText $reason
     */
    function __construct(LocalizedText $reason) {
        $this->reason = $reason;
    }

    /**
     * Getter of the field 'reason'.
     *
     * @return LocalizedText
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new TransferStatusProcessing where the field 'reason' has been updated with the value passed as parameter.
     *
     * @param LocalizedText $reason
     * @return TransferStatusProcessing
     */
    public function withReason(LocalizedText $reason) {
        assert($this->reason != null, "In class TransferStatusProcessing the param 'reason' of type LocalizedText can not be null");
        return new TransferStatusProcessing($reason);
    }

    /**
     * Create TransferStatusProcessing from JSON string
     *
     * @param string $json
     * @return TransferStatusProcessing
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransferStatusProcessing from associative array of its fields
     *
     * @param array $array
     * @return TransferStatusProcessing
     */
    public static function fromArray(array $array) {
        return new TransferStatusProcessing(LocalizedText::fromArray($array['reason']));
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
                'reason' => ($this->reason !== null ? $this->reason->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransferStatusProcessing{reason=" . $this->reason . "}";
    }
}