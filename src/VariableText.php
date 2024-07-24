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

class VariableText implements JsonSerializable  {

    /** @var string */
    protected $text ;

    /** @var array */
    protected $variables ;


    /** @var string */
    const Type = "VariableText";

    /**
     * VariableText constructor
     * @param string $text
     * @param array $variables
     */
    function __construct($text, array $variables) {
        $this->text = $text;
        $this->variables = $variables;
    }

    /**
     * Getter of the field 'text'.
     *
     * @return string
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Getter of the field 'variables'.
     *
     * @return array
     */
    public function getVariables() {
        return $this->variables;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new VariableText where the field 'text' has been updated with the value passed as parameter.
     *
     * @param string $text
     * @return VariableText
     */
    public function withText($text) {
        return new VariableText($text, $this->variables);
    }

    /**
     * Immutable update. Return a new VariableText where the field 'variables' has been updated with the value passed as parameter.
     *
     * @param array $variables
     * @return VariableText
     */
    public function withVariables(array $variables) {
        assert($this->variables != null, "In class VariableText the param 'variables' of type array can not be null");
        return new VariableText($this->text, $variables);
    }

    /**
     * Create VariableText from JSON string
     *
     * @param string $json
     * @return VariableText
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create VariableText from associative array of its fields
     *
     * @param array $array
     * @return VariableText
     */
    public static function fromArray(array $array) {
        return new VariableText($array['text'],
                                $array['variables']);
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
                'text' => $this->text,
                'variables' => ($this->variables !== null ? array_map(function($el){ return $el->toArray(); }, $this->variables) : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "VariableText{text=" . $this->text .
                            ", variables=" . $this->variables . "}";
    }
}