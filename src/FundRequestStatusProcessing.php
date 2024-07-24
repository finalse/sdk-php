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

class FundRequestStatusProcessing extends FundRequestStatus implements JsonSerializable  {

    /** @var LocalizedText */
    protected $reason ;


    /** @var string */
    const Type = "FundRequestStatus.Processing";


    /** @var string */
    const Variant = "Processing";

    /**
     * FundRequestStatusProcessing constructor
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
     * Immutable update. Return a new FundRequestStatusProcessing where the field 'reason' has been updated with the value passed as parameter.
     *
     * @param LocalizedText $reason
     * @return FundRequestStatusProcessing
     */
    public function withReason(LocalizedText $reason) {
        assert($this->reason != null, "In class FundRequestStatusProcessing the param 'reason' of type LocalizedText can not be null");
        return new FundRequestStatusProcessing($reason);
    }

    /**
     * Create FundRequestStatusProcessing from JSON string
     *
     * @param string $json
     * @return FundRequestStatusProcessing
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create FundRequestStatusProcessing from associative array of its fields
     *
     * @param array $array
     * @return FundRequestStatusProcessing
     */
    public static function fromArray(array $array) {
        return new FundRequestStatusProcessing(LocalizedText::fromArray($array['reason']));
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
        return "FundRequestStatusProcessing{reason=" . $this->reason . "}";
    }
}