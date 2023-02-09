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

class SecurePayHookForm implements JsonSerializable  {

    /** @var string */
    protected $redirectUserTo ;


    /** @var string */
    const Type = "SecurePayHookForm";

    /**
     * SecurePayHookForm constructor
     * @param string $redirectUserTo
     */
    function __construct($redirectUserTo) {
        $this->redirectUserTo = $redirectUserTo;
    }

    /**
     * Getter of the field 'redirectUserTo'.
     *
     * @return string
     */
    public function getRedirectUserTo() {
        return $this->redirectUserTo;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new SecurePayHookForm where the field 'redirectUserTo' has been updated with the value passed as parameter.
     *
     * @param string $redirectUserTo
     * @return SecurePayHookForm
     */
    public function withRedirectUserTo($redirectUserTo) {
        return new SecurePayHookForm($redirectUserTo);
    }

    /**
     * Create SecurePayHookForm from JSON string
     *
     * @param string $json
     * @return SecurePayHookForm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create SecurePayHookForm from associative array of its fields
     *
     * @param array $array
     * @return SecurePayHookForm
     */
    public static function fromArray(array $array) {
        return new SecurePayHookForm($array['redirectUserTo']);
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
                'redirectUserTo' => $this->redirectUserTo,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "SecurePayHookForm{redirectUserTo=" . $this->redirectUserTo . "}";
    }
}