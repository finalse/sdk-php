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

class MfaProcessOneTimePasswordRequired extends MfaProcess implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var MfaProcessConfirm */
    protected $confirm ;

    /** @var LocalizedVariableText */
    protected $requiredAction ;

    /** @var Otp */
    protected $otp ;


    /** @var string */
    const Type = "MfaProcess.OneTimePasswordRequired";


    /** @var string */
    const Variant = "OneTimePasswordRequired";

    /**
     * MfaProcessOneTimePasswordRequired constructor
     * @param string $id
     * @param MfaProcessConfirm $confirm
     * @param LocalizedVariableText $requiredAction
     * @param Otp $otp
     */
    function __construct($id,
                         MfaProcessConfirm $confirm,
                         LocalizedVariableText $requiredAction,
                         Otp $otp) {
        $this->id = $id;
        $this->confirm = $confirm;
        $this->requiredAction = $requiredAction;
        $this->otp = $otp;
    }

    /**
     * Getter of the field 'id'.
     *
     * @return string
     */
    public function getId() {
        return $this->id;
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
     * @return LocalizedVariableText
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
     * Immutable update. Return a new MfaProcessOneTimePasswordRequired where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return MfaProcessOneTimePasswordRequired
     */
    public function withId($id) {
        return new MfaProcessOneTimePasswordRequired($id, $this->confirm, $this->requiredAction,
                                                     $this->otp);
    }

    /**
     * Immutable update. Return a new MfaProcessOneTimePasswordRequired where the field 'confirm' has been updated with the value passed as parameter.
     *
     * @param MfaProcessConfirm $confirm
     * @return MfaProcessOneTimePasswordRequired
     */
    public function withConfirm(MfaProcessConfirm $confirm) {
        assert($this->confirm != null, "In class MfaProcessOneTimePasswordRequired the param 'confirm' of type MfaProcessConfirm can not be null");
        return new MfaProcessOneTimePasswordRequired($this->id, $confirm, $this->requiredAction,
                                                     $this->otp);
    }

    /**
     * Immutable update. Return a new MfaProcessOneTimePasswordRequired where the field 'requiredAction' has been updated with the value passed as parameter.
     *
     * @param LocalizedVariableText $requiredAction
     * @return MfaProcessOneTimePasswordRequired
     */
    public function withRequiredAction(LocalizedVariableText $requiredAction) {
        assert($this->requiredAction != null, "In class MfaProcessOneTimePasswordRequired the param 'requiredAction' of type LocalizedVariableText can not be null");
        return new MfaProcessOneTimePasswordRequired($this->id, $this->confirm, $requiredAction,
                                                     $this->otp);
    }

    /**
     * Immutable update. Return a new MfaProcessOneTimePasswordRequired where the field 'otp' has been updated with the value passed as parameter.
     *
     * @param Otp $otp
     * @return MfaProcessOneTimePasswordRequired
     */
    public function withOtp(Otp $otp) {
        assert($this->otp != null, "In class MfaProcessOneTimePasswordRequired the param 'otp' of type Otp can not be null");
        return new MfaProcessOneTimePasswordRequired($this->id, $this->confirm, $this->requiredAction,
                                                     $otp);
    }

    /**
     * Create MfaProcessOneTimePasswordRequired from JSON string
     *
     * @param string $json
     * @return MfaProcessOneTimePasswordRequired
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create MfaProcessOneTimePasswordRequired from associative array of its fields
     *
     * @param array $array
     * @return MfaProcessOneTimePasswordRequired
     */
    public static function fromArray(array $array) {
        return new MfaProcessOneTimePasswordRequired($array['id'],
                                                     MfaProcessConfirm::fromArray($array['confirm']),
                                                     LocalizedVariableText::fromArray($array['requiredAction']),
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
                'id' => $this->id,
                'confirm' => ($this->confirm !== null ? $this->confirm->toArray() : null),
                'requiredAction' => ($this->requiredAction !== null ? $this->requiredAction->toArray() : null),
                'otp' => ($this->otp !== null ? $this->otp->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "MfaProcessOneTimePasswordRequired{id=" . $this->id .
                                                 ", confirm=" . $this->confirm .
                                                 ", requiredAction=" . $this->requiredAction .
                                                 ", otp=" . $this->otp . "}";
    }
}