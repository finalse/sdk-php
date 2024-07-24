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

class Volume implements JsonSerializable  {

    /** @var number */
    protected $input ;

    /** @var number */
    protected $output ;

    /** @var number */
    protected $total ;


    /** @var string */
    const Type = "Volume";

    /**
     * Volume constructor
     * @param number $input
     * @param number $output
     * @param number $total
     */
    function __construct($input, $output, $total) {
        $this->input = $input;
        $this->output = $output;
        $this->total = $total;
    }

    /**
     * Getter of the field 'input'.
     *
     * @return number
     */
    public function getInput() {
        return $this->input;
    }

    /**
     * Getter of the field 'output'.
     *
     * @return number
     */
    public function getOutput() {
        return $this->output;
    }

    /**
     * Getter of the field 'total'.
     *
     * @return number
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Volume where the field 'input' has been updated with the value passed as parameter.
     *
     * @param number $input
     * @return Volume
     */
    public function withInput($input) {
        return new Volume($input, $this->output, $this->total);
    }

    /**
     * Immutable update. Return a new Volume where the field 'output' has been updated with the value passed as parameter.
     *
     * @param number $output
     * @return Volume
     */
    public function withOutput($output) {
        return new Volume($this->input, $output, $this->total);
    }

    /**
     * Immutable update. Return a new Volume where the field 'total' has been updated with the value passed as parameter.
     *
     * @param number $total
     * @return Volume
     */
    public function withTotal($total) {
        return new Volume($this->input, $this->output, $total);
    }

    /**
     * Create Volume from JSON string
     *
     * @param string $json
     * @return Volume
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Volume from associative array of its fields
     *
     * @param array $array
     * @return Volume
     */
    public static function fromArray(array $array) {
        return new Volume($array['input'],
                          $array['output'],
                          $array['total']);
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
                'input' => $this->input,
                'output' => $this->output,
                'total' => $this->total,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Volume{input=" . $this->input .
                      ", output=" . $this->output .
                      ", total=" . $this->total . "}";
    }
}