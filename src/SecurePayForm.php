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

class SecurePayForm implements JsonSerializable  {

    /** @var SecurePayHookForm | null */
    protected $onSuccess ;

    /** @var SecurePayHookForm | null */
    protected $onFailure ;


    /** @var string */
    const Type = "SecurePayForm";

    /**
     * SecurePayForm constructor
     * @param SecurePayHookForm | null $onSuccess
     * @param SecurePayHookForm | null $onFailure
     */
    function __construct($onSuccess = null, $onFailure = null) {
        $this->onSuccess = $onSuccess;
        $this->onFailure = $onFailure;
    }

    /**
     * Getter of the field 'onSuccess'.
     *
     * @return SecurePayHookForm | null
     */
    public function getOnSuccess() {
        return $this->onSuccess;
    }

    /**
     * Getter of the field 'onFailure'.
     *
     * @return SecurePayHookForm | null
     */
    public function getOnFailure() {
        return $this->onFailure;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new SecurePayForm where the field 'onSuccess' has been updated with the value passed as parameter.
     *
     * @param SecurePayHookForm | null $onSuccess
     * @return SecurePayForm
     */
    public function withOnSuccess($onSuccess) {
        assert($this->onSuccess != null, "In class SecurePayForm the param 'onSuccess' of type SecurePayHookForm | null can not be null");
        return new SecurePayForm($onSuccess, $this->onFailure);
    }

    /**
     * Immutable update. Return a new SecurePayForm where the field 'onFailure' has been updated with the value passed as parameter.
     *
     * @param SecurePayHookForm | null $onFailure
     * @return SecurePayForm
     */
    public function withOnFailure($onFailure) {
        assert($this->onFailure != null, "In class SecurePayForm the param 'onFailure' of type SecurePayHookForm | null can not be null");
        return new SecurePayForm($this->onSuccess, $onFailure);
    }

    /**
     * Create SecurePayForm from JSON string
     *
     * @param string $json
     * @return SecurePayForm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create SecurePayForm from associative array of its fields
     *
     * @param array $array
     * @return SecurePayForm
     */
    public static function fromArray(array $array) {
        return new SecurePayForm((isset($array['onSuccess']) ? SecurePayHookForm::fromArray($array['onSuccess']) : null),
                                 (isset($array['onFailure']) ? SecurePayHookForm::fromArray($array['onFailure']) : null));
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
                'onSuccess' => ($this->onSuccess !== null ? $this->onSuccess->toArray() : null),
                'onFailure' => ($this->onFailure !== null ? $this->onFailure->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "SecurePayForm{onSuccess=" . $this->onSuccess .
                             ", onFailure=" . $this->onFailure . "}";
    }
}