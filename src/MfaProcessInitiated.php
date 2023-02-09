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

class MfaProcessInitiated extends MfaProcess implements JsonSerializable  {

    /** @var MfaProcessConfirm */
    protected $confirm ;

    /** @var string */
    protected $requiredAction ;

    /** @var Otp */
    protected $otp ;


    /** @var string */
    const Type = "MfaProcess.Initiated";


    /** @var string */
    const Variant = "Initiated";

    /**
     * MfaProcessInitiated constructor
     * @param MfaProcessConfirm $confirm
     * @param string $requiredAction
     * @param Otp $otp
     */
    function __construct(MfaProcessConfirm $confirm, $requiredAction, Otp $otp) {
        $this->confirm = $confirm;
        $this->requiredAction = $requiredAction;
        $this->otp = $otp;
    }

    /**
     * Getter of the field 'confirm'.
     *
     * @return MfaProcessConfirm
     */
    public function getConfirm() {
        return $this->confirm;
    }

    /**
     * Getter of the field 'requiredAction'.
     *
     * @return string
     */
    public function getRequiredAction() {
        return $this->requiredAction;
    }

    /**
     * Getter of the field 'otp'.
     *
     * @return Otp
     */
    public function getOtp() {
        return $this->otp;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new MfaProcessInitiated where the field 'confirm' has been updated with the value passed as parameter.
     *
     * @param MfaProcessConfirm $confirm
     * @return MfaProcessInitiated
     */
    public function withConfirm(MfaProcessConfirm $confirm) {
        assert($this->confirm != null, "In class MfaProcessInitiated the param 'confirm' of type MfaProcessConfirm can not be null");
        return new MfaProcessInitiated($confirm, $this->requiredAction, $this->otp);
    }

    /**
     * Immutable update. Return a new MfaProcessInitiated where the field 'requiredAction' has been updated with the value passed as parameter.
     *
     * @param string $requiredAction
     * @return MfaProcessInitiated
     */
    public function withRequiredAction($requiredAction) {
        return new MfaProcessInitiated($this->confirm, $requiredAction, $this->otp);
    }

    /**
     * Immutable update. Return a new MfaProcessInitiated where the field 'otp' has been updated with the value passed as parameter.
     *
     * @param Otp $otp
     * @return MfaProcessInitiated
     */
    public function withOtp(Otp $otp) {
        assert($this->otp != null, "In class MfaProcessInitiated the param 'otp' of type Otp can not be null");
        return new MfaProcessInitiated($this->confirm, $this->requiredAction, $otp);
    }

    /**
     * Create MfaProcessInitiated from JSON string
     *
     * @param string $json
     * @return MfaProcessInitiated
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create MfaProcessInitiated from associative array of its fields
     *
     * @param array $array
     * @return MfaProcessInitiated
     */
    public static function fromArray(array $array) {
        return new MfaProcessInitiated(MfaProcessConfirm::fromArray($array['confirm']),
                                       $array['requiredAction'],
                                       Otp::fromArray($array['otp']));
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
                'confirm' => ($this->confirm !== null ? $this->confirm->toArray() : null),
                'requiredAction' => $this->requiredAction,
                'otp' => ($this->otp !== null ? $this->otp->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "MfaProcessInitiated{confirm=" . $this->confirm .
                                   ", requiredAction=" . $this->requiredAction .
                                   ", otp=" . $this->otp . "}";
    }
}