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

class Mars implements JsonSerializable  {

    /** @var string */
    protected $alpha ;


    /** @var string */
    const Type = "Mars";

    /**
     * Mars constructor
     * @param string $alpha
     */
    function __construct($alpha) {
        $this->alpha = $alpha;
    }

    /**
     * Getter of the field 'alpha'.
     *
     * @return string
     */
    public function getAlpha() {
        return $this->alpha;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Mars where the field 'alpha' has been updated with the value passed as parameter.
     *
     * @param string $alpha
     * @return Mars
     */
    public function withAlpha($alpha) {
        return new Mars($alpha);
    }

    /**
     * Create Mars from JSON string
     *
     * @param string $json
     * @return Mars
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Mars from associative array of its fields
     *
     * @param array $array
     * @return Mars
     */
    public static function fromArray(array $array) {
        return new Mars($array['alpha']);
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
                'alpha' => $this->alpha,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Mars{alpha=" . $this->alpha . "}";
    }
}