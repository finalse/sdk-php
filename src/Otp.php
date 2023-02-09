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

class Otp implements JsonSerializable  {

    /** @var UTCDateTime */
    protected $maxDeliveryTime ;

    /** @var UTCDateTime */
    protected $expireTime ;

    /** @var integer */
    protected $nbVerifyAttempts ;

    /** @var string | null */
    protected $prefix ;

    /** @var OtpChannel */
    protected $channel ;

    /** @var OtpAction */
    protected $action ;


    /** @var string */
    const Type = "Otp";

    /**
     * Otp constructor
     * @param UTCDateTime $maxDeliveryTime
     * @param UTCDateTime $expireTime
     * @param integer $nbVerifyAttempts
     * @param string | null $prefix
     * @param OtpChannel $channel
     * @param OtpAction $action
     */
    function __construct(UTCDateTime $maxDeliveryTime,
                         UTCDateTime $expireTime,
                         $nbVerifyAttempts,
                         $prefix = null,
                         OtpChannel $channel,
                         OtpAction $action) {
        $this->maxDeliveryTime = $maxDeliveryTime;
        $this->expireTime = $expireTime;
        $this->nbVerifyAttempts = $nbVerifyAttempts;
        $this->prefix = $prefix;
        $this->channel = $channel;
        $this->action = $action;
    }

    /**
     * Getter of the field 'maxDeliveryTime'.
     *
     * @return UTCDateTime
     */
    public function getMaxDeliveryTime() {
        return $this->maxDeliveryTime;
    }

    /**
     * Getter of the field 'expireTime'.
     *
     * @return UTCDateTime
     */
    public function getExpireTime() {
        return $this->expireTime;
    }

    /**
     * Getter of the field 'nbVerifyAttempts'.
     *
     * @return integer
     */
    public function getNbVerifyAttempts() {
        return $this->nbVerifyAttempts;
    }

    /**
     * Getter of the field 'prefix'.
     *
     * @return string | null
     */
    public function getPrefix() {
        return $this->prefix;
    }

    /**
     * Getter of the field 'channel'.
     *
     * @return OtpChannel
     */
    public function getChannel() {
        return $this->channel;
    }

    /**
     * Getter of the field 'action'.
     *
     * @return OtpAction
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Otp where the field 'maxDeliveryTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $maxDeliveryTime
     * @return Otp
     */
    public function withMaxDeliveryTime(UTCDateTime $maxDeliveryTime) {
        assert($this->maxDeliveryTime != null, "In class Otp the param 'maxDeliveryTime' of type UTCDateTime can not be null");
        return new Otp($maxDeliveryTime, $this->expireTime, $this->nbVerifyAttempts, $this->prefix,
                       $this->channel, $this->action);
    }

    /**
     * Immutable update. Return a new Otp where the field 'expireTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $expireTime
     * @return Otp
     */
    public function withExpireTime(UTCDateTime $expireTime) {
        assert($this->expireTime != null, "In class Otp the param 'expireTime' of type UTCDateTime can not be null");
        return new Otp($this->maxDeliveryTime, $expireTime, $this->nbVerifyAttempts, $this->prefix,
                       $this->channel, $this->action);
    }

    /**
     * Immutable update. Return a new Otp where the field 'nbVerifyAttempts' has been updated with the value passed as parameter.
     *
     * @param integer $nbVerifyAttempts
     * @return Otp
     */
    public function withNbVerifyAttempts($nbVerifyAttempts) {
        return new Otp($this->maxDeliveryTime, $this->expireTime, $nbVerifyAttempts, $this->prefix,
                       $this->channel, $this->action);
    }

    /**
     * Immutable update. Return a new Otp where the field 'prefix' has been updated with the value passed as parameter.
     *
     * @param string | null $prefix
     * @return Otp
     */
    public function withPrefix($prefix) {
        return new Otp($this->maxDeliveryTime, $this->expireTime, $this->nbVerifyAttempts,
                       $prefix, $this->channel, $this->action);
    }

    /**
     * Immutable update. Return a new Otp where the field 'channel' has been updated with the value passed as parameter.
     *
     * @param OtpChannel $channel
     * @return Otp
     */
    public function withChannel(OtpChannel $channel) {
        assert($this->channel != null, "In class Otp the param 'channel' of type OtpChannel can not be null");
        return new Otp($this->maxDeliveryTime, $this->expireTime, $this->nbVerifyAttempts,
                       $this->prefix, $channel, $this->action);
    }

    /**
     * Immutable update. Return a new Otp where the field 'action' has been updated with the value passed as parameter.
     *
     * @param OtpAction $action
     * @return Otp
     */
    public function withAction(OtpAction $action) {
        assert($this->action != null, "In class Otp the param 'action' of type OtpAction can not be null");
        return new Otp($this->maxDeliveryTime, $this->expireTime, $this->nbVerifyAttempts,
                       $this->prefix, $this->channel, $action);
    }

    /**
     * Create Otp from JSON string
     *
     * @param string $json
     * @return Otp
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Otp from associative array of its fields
     *
     * @param array $array
     * @return Otp
     */
    public static function fromArray(array $array) {
        return new Otp(UTCDateTime::fromArray($array['maxDeliveryTime']),
                       UTCDateTime::fromArray($array['expireTime']),
                       $array['nbVerifyAttempts'],
                       (isset($array['prefix']) ? $array['prefix'] : null),
                       OtpChannel::fromArray($array['channel']),
                       OtpAction::fromArray($array['action']));
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
                'maxDeliveryTime' => ($this->maxDeliveryTime !== null ? $this->maxDeliveryTime->toArray() : null),
                'expireTime' => ($this->expireTime !== null ? $this->expireTime->toArray() : null),
                'nbVerifyAttempts' => $this->nbVerifyAttempts,
                'prefix' => $this->prefix,
                'channel' => ($this->channel !== null ? $this->channel->toArray() : null),
                'action' => ($this->action !== null ? $this->action->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Otp{maxDeliveryTime=" . $this->maxDeliveryTime .
                   ", expireTime=" . $this->expireTime .
                   ", nbVerifyAttempts=" . $this->nbVerifyAttempts .
                   ", prefix=" . $this->prefix .
                   ", channel=" . $this->channel .
                   ", action=" . $this->action . "}";
    }
}