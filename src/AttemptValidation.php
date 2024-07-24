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

class AttemptValidation implements JsonSerializable  {

    /** @var MfaProcess */
    protected $mfa ;


    /** @var string */
    const Type = "AttemptValidation";

    /**
     * AttemptValidation constructor
     * @param MfaProcess $mfa
     */
    function __construct(MfaProcess $mfa) {
        $this->mfa = $mfa;
    }

    /**
     * Getter of the field 'mfa'.
     *
     * @return MfaProcess
     */
    public function getMfa() {
        return $this->mfa;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new AttemptValidation where the field 'mfa' has been updated with the value passed as parameter.
     *
     * @param MfaProcess $mfa
     * @return AttemptValidation
     */
    public function withMfa(MfaProcess $mfa) {
        assert($this->mfa != null, "In class AttemptValidation the param 'mfa' of type MfaProcess can not be null");
        return new AttemptValidation($mfa);
    }

    /**
     * Create AttemptValidation from JSON string
     *
     * @param string $json
     * @return AttemptValidation
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create AttemptValidation from associative array of its fields
     *
     * @param array $array
     * @return AttemptValidation
     */
    public static function fromArray(array $array) {
        return new AttemptValidation(MfaProcess::fromArray($array['mfa']));
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
                'mfa' => ($this->mfa !== null ? $this->mfa->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "AttemptValidation{mfa=" . $this->mfa . "}";
    }
}