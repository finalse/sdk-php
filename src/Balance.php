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

class Balance implements JsonSerializable  {

    /** @var number */
    protected $available ;

    /** @var number */
    protected $lockedIn ;

    /** @var number */
    protected $lockedOut ;


    /** @var string */
    const Type = "Balance";

    /**
     * Balance constructor
     * @param number $available
     * @param number $lockedIn
     * @param number $lockedOut
     */
    function __construct($available, $lockedIn, $lockedOut) {
        $this->available = $available;
        $this->lockedIn = $lockedIn;
        $this->lockedOut = $lockedOut;
    }

    /**
     * Getter of the field 'available'.
     *
     * @return number
     */
    public function getAvailable() {
        return $this->available;
    }

    /**
     * Getter of the field 'lockedIn'.
     *
     * @return number
     */
    public function getLockedIn() {
        return $this->lockedIn;
    }

    /**
     * Getter of the field 'lockedOut'.
     *
     * @return number
     */
    public function getLockedOut() {
        return $this->lockedOut;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Balance where the field 'available' has been updated with the value passed as parameter.
     *
     * @param number $available
     * @return Balance
     */
    public function withAvailable($available) {
        return new Balance($available, $this->lockedIn, $this->lockedOut);
    }

    /**
     * Immutable update. Return a new Balance where the field 'lockedIn' has been updated with the value passed as parameter.
     *
     * @param number $lockedIn
     * @return Balance
     */
    public function withLockedIn($lockedIn) {
        return new Balance($this->available, $lockedIn, $this->lockedOut);
    }

    /**
     * Immutable update. Return a new Balance where the field 'lockedOut' has been updated with the value passed as parameter.
     *
     * @param number $lockedOut
     * @return Balance
     */
    public function withLockedOut($lockedOut) {
        return new Balance($this->available, $this->lockedIn, $lockedOut);
    }

    /**
     * Create Balance from JSON string
     *
     * @param string $json
     * @return Balance
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Balance from associative array of its fields
     *
     * @param array $array
     * @return Balance
     */
    public static function fromArray(array $array) {
        return new Balance($array['available'],
                           $array['lockedIn'],
                           $array['lockedOut']);
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
                'available' => $this->available,
                'lockedIn' => $this->lockedIn,
                'lockedOut' => $this->lockedOut,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Balance{available=" . $this->available .
                       ", lockedIn=" . $this->lockedIn .
                       ", lockedOut=" . $this->lockedOut . "}";
    }
}