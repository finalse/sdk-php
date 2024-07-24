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

class Expire implements JsonSerializable  {

    /** @var Duration */
    protected $delay ;

    /** @var UTCDateTime */
    protected $time ;


    /** @var string */
    const Type = "Expire";

    /**
     * Expire constructor
     * @param Duration $delay
     * @param UTCDateTime $time
     */
    function __construct(Duration $delay, UTCDateTime $time) {
        $this->delay = $delay;
        $this->time = $time;
    }

    /**
     * Getter of the field 'delay'.
     *
     * @return Duration
     */
    public function getDelay() {
        return $this->delay;
    }

    /**
     * Getter of the field 'time'.
     *
     * @return UTCDateTime
     */
    public function getTime() {
        return $this->time;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Expire where the field 'delay' has been updated with the value passed as parameter.
     *
     * @param Duration $delay
     * @return Expire
     */
    public function withDelay(Duration $delay) {
        assert($this->delay != null, "In class Expire the param 'delay' of type Duration can not be null");
        return new Expire($delay, $this->time);
    }

    /**
     * Immutable update. Return a new Expire where the field 'time' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $time
     * @return Expire
     */
    public function withTime(UTCDateTime $time) {
        assert($this->time != null, "In class Expire the param 'time' of type UTCDateTime can not be null");
        return new Expire($this->delay, $time);
    }

    /**
     * Create Expire from JSON string
     *
     * @param string $json
     * @return Expire
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Expire from associative array of its fields
     *
     * @param array $array
     * @return Expire
     */
    public static function fromArray(array $array) {
        return new Expire(Duration::fromArray($array['delay']),
                          UTCDateTime::fromArray($array['time']));
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
                'delay' => ($this->delay !== null ? $this->delay->toArray() : null),
                'time' => ($this->time !== null ? $this->time->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Expire{delay=" . $this->delay .
                      ", time=" . $this->time . "}";
    }
}