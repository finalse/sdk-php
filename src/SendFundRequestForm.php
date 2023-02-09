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

class SendFundRequestForm implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string | null */
    protected $using ;


    /** @var string */
    const Type = "SendFundRequestForm";

    /**
     * SendFundRequestForm constructor
     * @param string $id
     * @param string | null $using
     */
    function __construct($id, $using = null) {
        $this->id = $id;
        $this->using = $using;
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
     * Getter of the field 'using'.
     *
     * @return string | null
     */
    public function getUsing() {
        return $this->using;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new SendFundRequestForm where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return SendFundRequestForm
     */
    public function withId($id) {
        return new SendFundRequestForm($id, $this->using);
    }

    /**
     * Immutable update. Return a new SendFundRequestForm where the field 'using' has been updated with the value passed as parameter.
     *
     * @param string | null $using
     * @return SendFundRequestForm
     */
    public function withUsing($using) {
        return new SendFundRequestForm($this->id, $using);
    }

    /**
     * Create SendFundRequestForm from JSON string
     *
     * @param string $json
     * @return SendFundRequestForm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create SendFundRequestForm from associative array of its fields
     *
     * @param array $array
     * @return SendFundRequestForm
     */
    public static function fromArray(array $array) {
        return new SendFundRequestForm($array['id'],
                                       (isset($array['using']) ? $array['using'] : null));
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
                'using' => $this->using,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "SendFundRequestForm{id=" . $this->id .
                                   ", using=" . $this->using . "}";
    }
}