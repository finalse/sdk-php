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

class MfaProcessSecretCodeRequired extends MfaProcess implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var MoneyAccountProvider */
    protected $provider ;

    /** @var LocalizedVariableText */
    protected $requiredAction ;

    /** @var Expire */
    protected $expire ;


    /** @var string */
    const Type = "MfaProcess.SecretCodeRequired";


    /** @var string */
    const Variant = "SecretCodeRequired";

    /**
     * MfaProcessSecretCodeRequired constructor
     * @param string $id
     * @param MoneyAccountProvider $provider
     * @param LocalizedVariableText $requiredAction
     * @param Expire $expire
     */
    function __construct($id,
                         MoneyAccountProvider $provider,
                         LocalizedVariableText $requiredAction,
                         Expire $expire) {
        $this->id = $id;
        $this->provider = $provider;
        $this->requiredAction = $requiredAction;
        $this->expire = $expire;
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
     * Getter of the field 'provider'.
     *
     * @return MoneyAccountProvider
     */
    public function getProvider() {
        return $this->provider;
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
     * Getter of the field 'expire'.
     *
     * @return Expire
     */
    public function getExpire() {
        return $this->expire;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new MfaProcessSecretCodeRequired where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return MfaProcessSecretCodeRequired
     */
    public function withId($id) {
        return new MfaProcessSecretCodeRequired($id, $this->provider, $this->requiredAction,
                                                $this->expire);
    }

    /**
     * Immutable update. Return a new MfaProcessSecretCodeRequired where the field 'provider' has been updated with the value passed as parameter.
     *
     * @param MoneyAccountProvider $provider
     * @return MfaProcessSecretCodeRequired
     */
    public function withProvider(MoneyAccountProvider $provider) {
        assert($this->provider != null, "In class MfaProcessSecretCodeRequired the param 'provider' of type MoneyAccountProvider can not be null");
        return new MfaProcessSecretCodeRequired($this->id, $provider, $this->requiredAction,
                                                $this->expire);
    }

    /**
     * Immutable update. Return a new MfaProcessSecretCodeRequired where the field 'requiredAction' has been updated with the value passed as parameter.
     *
     * @param LocalizedVariableText $requiredAction
     * @return MfaProcessSecretCodeRequired
     */
    public function withRequiredAction(LocalizedVariableText $requiredAction) {
        assert($this->requiredAction != null, "In class MfaProcessSecretCodeRequired the param 'requiredAction' of type LocalizedVariableText can not be null");
        return new MfaProcessSecretCodeRequired($this->id, $this->provider, $requiredAction,
                                                $this->expire);
    }

    /**
     * Immutable update. Return a new MfaProcessSecretCodeRequired where the field 'expire' has been updated with the value passed as parameter.
     *
     * @param Expire $expire
     * @return MfaProcessSecretCodeRequired
     */
    public function withExpire(Expire $expire) {
        assert($this->expire != null, "In class MfaProcessSecretCodeRequired the param 'expire' of type Expire can not be null");
        return new MfaProcessSecretCodeRequired($this->id, $this->provider, $this->requiredAction,
                                                $expire);
    }

    /**
     * Create MfaProcessSecretCodeRequired from JSON string
     *
     * @param string $json
     * @return MfaProcessSecretCodeRequired
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create MfaProcessSecretCodeRequired from associative array of its fields
     *
     * @param array $array
     * @return MfaProcessSecretCodeRequired
     */
    public static function fromArray(array $array) {
        return new MfaProcessSecretCodeRequired($array['id'],
                                                MoneyAccountProvider::fromArray($array['provider']),
                                                LocalizedVariableText::fromArray($array['requiredAction']),
                                                Expire::fromArray($array['expire']));
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
                'provider' => ($this->provider !== null ? $this->provider->toArray() : null),
                'requiredAction' => ($this->requiredAction !== null ? $this->requiredAction->toArray() : null),
                'expire' => ($this->expire !== null ? $this->expire->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "MfaProcessSecretCodeRequired{id=" . $this->id .
                                            ", provider=" . $this->provider .
                                            ", requiredAction=" . $this->requiredAction .
                                            ", expire=" . $this->expire . "}";
    }
}