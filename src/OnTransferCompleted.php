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

class OnTransferCompleted implements JsonSerializable  {

    /** @var OnCompletedCall */
    protected $call ;


    /** @var string */
    const Type = "OnTransferCompleted";

    /**
     * OnTransferCompleted constructor
     * @param OnCompletedCall $call
     */
    function __construct(OnCompletedCall $call) {
        $this->call = $call;
    }

    /**
     * Getter of the field 'call'.
     *
     * @return OnCompletedCall
     */
    public function getCall() {
        return $this->call;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new OnTransferCompleted where the field 'call' has been updated with the value passed as parameter.
     *
     * @param OnCompletedCall $call
     * @return OnTransferCompleted
     */
    public function withCall(OnCompletedCall $call) {
        assert($this->call != null, "In class OnTransferCompleted the param 'call' of type OnCompletedCall can not be null");
        return new OnTransferCompleted($call);
    }

    /**
     * Create OnTransferCompleted from JSON string
     *
     * @param string $json
     * @return OnTransferCompleted
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create OnTransferCompleted from associative array of its fields
     *
     * @param array $array
     * @return OnTransferCompleted
     */
    public static function fromArray(array $array) {
        return new OnTransferCompleted(OnCompletedCall::fromArray($array['call']));
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
                'call' => ($this->call !== null ? $this->call->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "OnTransferCompleted{call=" . $this->call . "}";
    }
}