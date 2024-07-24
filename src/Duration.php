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

class Duration implements JsonSerializable  {

    /** @var string */
    protected $iso8601 ;

    /** @var float */
    protected $seconds ;

    /** @var float */
    protected $milliseconds ;

    /** @var DurationPart */
    protected $part ;


    /** @var string */
    const Type = "Duration";

    /**
     * Duration constructor
     * @param string $iso8601
     * @param float $seconds
     * @param float $milliseconds
     * @param DurationPart $part
     */
    function __construct($iso8601, $seconds, $milliseconds, DurationPart $part) {
        $this->iso8601 = $iso8601;
        $this->seconds = $seconds;
        $this->milliseconds = $milliseconds;
        $this->part = $part;
    }

    /**
     * Getter of the field 'iso8601'.
     *
     * @return string
     */
    public function getIso8601() {
        return $this->iso8601;
    }

    /**
     * Getter of the field 'seconds'.
     *
     * @return float
     */
    public function getSeconds() {
        return $this->seconds;
    }

    /**
     * Getter of the field 'milliseconds'.
     *
     * @return float
     */
    public function getMilliseconds() {
        return $this->milliseconds;
    }

    /**
     * Getter of the field 'part'.
     *
     * @return DurationPart
     */
    public function getPart() {
        return $this->part;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Duration where the field 'iso8601' has been updated with the value passed as parameter.
     *
     * @param string $iso8601
     * @return Duration
     */
    public function withIso8601($iso8601) {
        return new Duration($iso8601, $this->seconds, $this->milliseconds, $this->part);
    }

    /**
     * Immutable update. Return a new Duration where the field 'seconds' has been updated with the value passed as parameter.
     *
     * @param float $seconds
     * @return Duration
     */
    public function withSeconds($seconds) {
        return new Duration($this->iso8601, $seconds, $this->milliseconds, $this->part);
    }

    /**
     * Immutable update. Return a new Duration where the field 'milliseconds' has been updated with the value passed as parameter.
     *
     * @param float $milliseconds
     * @return Duration
     */
    public function withMilliseconds($milliseconds) {
        return new Duration($this->iso8601, $this->seconds, $milliseconds, $this->part);
    }

    /**
     * Immutable update. Return a new Duration where the field 'part' has been updated with the value passed as parameter.
     *
     * @param DurationPart $part
     * @return Duration
     */
    public function withPart(DurationPart $part) {
        assert($this->part != null, "In class Duration the param 'part' of type DurationPart can not be null");
        return new Duration($this->iso8601, $this->seconds, $this->milliseconds, $part);
    }

    /**
     * Create Duration from JSON string
     *
     * @param string $json
     * @return Duration
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Duration from associative array of its fields
     *
     * @param array $array
     * @return Duration
     */
    public static function fromArray(array $array) {
        return new Duration($array['iso8601'],
                            $array['seconds'],
                            $array['milliseconds'],
                            DurationPart::fromArray($array['part']));
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
                'iso8601' => $this->iso8601,
                'seconds' => $this->seconds,
                'milliseconds' => $this->milliseconds,
                'part' => ($this->part !== null ? $this->part->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Duration{iso8601=" . $this->iso8601 .
                        ", seconds=" . $this->seconds .
                        ", milliseconds=" . $this->milliseconds .
                        ", part=" . $this->part . "}";
    }
}