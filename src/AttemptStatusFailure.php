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

class AttemptStatusFailure extends AttemptStatus implements JsonSerializable  {

    /** @var LocalizedText */
    protected $reason ;

    /** @var Cancelled | null */
    protected $cancelled ;


    /** @var string */
    const Type = "AttemptStatus.Failure";


    /** @var string */
    const Variant = "Failure";

    /**
     * AttemptStatusFailure constructor
     * @param LocalizedText $reason
     * @param Cancelled | null $cancelled
     */
    function __construct(LocalizedText $reason, $cancelled = null) {
        $this->reason = $reason;
        $this->cancelled = $cancelled;
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
     * Getter of the field 'cancelled'.
     *
     * @return Cancelled | null
     */
    public function getCancelled() {
        return $this->cancelled;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new AttemptStatusFailure where the field 'reason' has been updated with the value passed as parameter.
     *
     * @param LocalizedText $reason
     * @return AttemptStatusFailure
     */
    public function withReason(LocalizedText $reason) {
        assert($this->reason != null, "In class AttemptStatusFailure the param 'reason' of type LocalizedText can not be null");
        return new AttemptStatusFailure($reason, $this->cancelled);
    }

    /**
     * Immutable update. Return a new AttemptStatusFailure where the field 'cancelled' has been updated with the value passed as parameter.
     *
     * @param Cancelled | null $cancelled
     * @return AttemptStatusFailure
     */
    public function withCancelled($cancelled) {
        assert($this->cancelled != null, "In class AttemptStatusFailure the param 'cancelled' of type Cancelled | null can not be null");
        return new AttemptStatusFailure($this->reason, $cancelled);
    }

    /**
     * Create AttemptStatusFailure from JSON string
     *
     * @param string $json
     * @return AttemptStatusFailure
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create AttemptStatusFailure from associative array of its fields
     *
     * @param array $array
     * @return AttemptStatusFailure
     */
    public static function fromArray(array $array) {
        return new AttemptStatusFailure(LocalizedText::fromArray($array['reason']),
                                        (isset($array['cancelled']) ? Cancelled::fromArray($array['cancelled']) : null));
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
                'cancelled' => ($this->cancelled !== null ? $this->cancelled->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "AttemptStatusFailure{reason=" . $this->reason .
                                    ", cancelled=" . $this->cancelled . "}";
    }
}