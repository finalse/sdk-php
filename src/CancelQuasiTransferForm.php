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

class CancelQuasiTransferForm implements JsonSerializable  {

    /** @var string */
    protected $id ;


    /** @var string */
    const Type = "CancelQuasiTransferForm";

    /**
     * CancelQuasiTransferForm constructor
     * @param string $id
     */
    function __construct($id) {
        $this->id = $id;
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
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new CancelQuasiTransferForm where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return CancelQuasiTransferForm
     */
    public function withId($id) {
        return new CancelQuasiTransferForm($id);
    }

    /**
     * Create CancelQuasiTransferForm from JSON string
     *
     * @param string $json
     * @return CancelQuasiTransferForm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create CancelQuasiTransferForm from associative array of its fields
     *
     * @param array $array
     * @return CancelQuasiTransferForm
     */
    public static function fromArray(array $array) {
        return new CancelQuasiTransferForm($array['id']);
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
                'id' => $this->id,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "CancelQuasiTransferForm{id=" . $this->id . "}";
    }
}