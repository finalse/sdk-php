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

class Pocket implements JsonSerializable  {

    /** @var Balance */
    protected $balance ;

    /** @var Volume */
    protected $volume ;


    /** @var string */
    const Type = "Pocket";

    /**
     * Pocket constructor
     * @param Balance $balance
     * @param Volume $volume
     */
    function __construct(Balance $balance, Volume $volume) {
        $this->balance = $balance;
        $this->volume = $volume;
    }

    /**
     * Getter of the field 'balance'.
     *
     * @return Balance
     */
    public function getBalance() {
        return $this->balance;
    }

    /**
     * Getter of the field 'volume'.
     *
     * @return Volume
     */
    public function getVolume() {
        return $this->volume;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Pocket where the field 'balance' has been updated with the value passed as parameter.
     *
     * @param Balance $balance
     * @return Pocket
     */
    public function withBalance(Balance $balance) {
        assert($this->balance != null, "In class Pocket the param 'balance' of type Balance can not be null");
        return new Pocket($balance, $this->volume);
    }

    /**
     * Immutable update. Return a new Pocket where the field 'volume' has been updated with the value passed as parameter.
     *
     * @param Volume $volume
     * @return Pocket
     */
    public function withVolume(Volume $volume) {
        assert($this->volume != null, "In class Pocket the param 'volume' of type Volume can not be null");
        return new Pocket($this->balance, $volume);
    }

    /**
     * Create Pocket from JSON string
     *
     * @param string $json
     * @return Pocket
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Pocket from associative array of its fields
     *
     * @param array $array
     * @return Pocket
     */
    public static function fromArray(array $array) {
        return new Pocket(Balance::fromArray($array['balance']),
                          Volume::fromArray($array['volume']));
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
                'balance' => ($this->balance !== null ? $this->balance->toArray() : null),
                'volume' => ($this->volume !== null ? $this->volume->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Pocket{balance=" . $this->balance .
                      ", volume=" . $this->volume . "}";
    }
}