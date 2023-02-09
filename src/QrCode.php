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

class QrCode implements JsonSerializable  {

    /** @var string */
    protected $src ;


    /** @var string */
    const Type = "QrCode";

    /**
     * QrCode constructor
     * @param string $src
     */
    function __construct($src) {
        $this->src = $src;
    }

    /**
     * Getter of the field 'src'.
     *
     * @return string
     */
    public function getSrc() {
        return $this->src;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new QrCode where the field 'src' has been updated with the value passed as parameter.
     *
     * @param string $src
     * @return QrCode
     */
    public function withSrc($src) {
        return new QrCode($src);
    }

    /**
     * Create QrCode from JSON string
     *
     * @param string $json
     * @return QrCode
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create QrCode from associative array of its fields
     *
     * @param array $array
     * @return QrCode
     */
    public static function fromArray(array $array) {
        return new QrCode($array['src']);
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
                'src' => $this->src,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "QrCode{src=" . $this->src . "}";
    }
}