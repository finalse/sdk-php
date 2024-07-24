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

class DurationPart implements JsonSerializable  {

    /** @var integer */
    protected $w ;

    /** @var integer */
    protected $d ;

    /** @var integer */
    protected $h ;

    /** @var integer */
    protected $m ;

    /** @var integer */
    protected $s ;

    /** @var float */
    protected $ms ;


    /** @var string */
    const Type = "DurationPart";

    /**
     * DurationPart constructor
     * @param integer $w
     * @param integer $d
     * @param integer $h
     * @param integer $m
     * @param integer $s
     * @param float $ms
     */
    function __construct($w, $d, $h, $m, $s, $ms) {
        $this->w = $w;
        $this->d = $d;
        $this->h = $h;
        $this->m = $m;
        $this->s = $s;
        $this->ms = $ms;
    }

    /**
     * Getter of the field 'w'.
     *
     * @return integer
     */
    public function getW() {
        return $this->w;
    }

    /**
     * Getter of the field 'd'.
     *
     * @return integer
     */
    public function getD() {
        return $this->d;
    }

    /**
     * Getter of the field 'h'.
     *
     * @return integer
     */
    public function getH() {
        return $this->h;
    }

    /**
     * Getter of the field 'm'.
     *
     * @return integer
     */
    public function getM() {
        return $this->m;
    }

    /**
     * Getter of the field 's'.
     *
     * @return integer
     */
    public function getS() {
        return $this->s;
    }

    /**
     * Getter of the field 'ms'.
     *
     * @return float
     */
    public function getMs() {
        return $this->ms;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new DurationPart where the field 'w' has been updated with the value passed as parameter.
     *
     * @param integer $w
     * @return DurationPart
     */
    public function withW($w) {
        return new DurationPart($w, $this->d, $this->h, $this->m, $this->s, $this->ms);
    }

    /**
     * Immutable update. Return a new DurationPart where the field 'd' has been updated with the value passed as parameter.
     *
     * @param integer $d
     * @return DurationPart
     */
    public function withD($d) {
        return new DurationPart($this->w, $d, $this->h, $this->m, $this->s, $this->ms);
    }

    /**
     * Immutable update. Return a new DurationPart where the field 'h' has been updated with the value passed as parameter.
     *
     * @param integer $h
     * @return DurationPart
     */
    public function withH($h) {
        return new DurationPart($this->w, $this->d, $h, $this->m, $this->s, $this->ms);
    }

    /**
     * Immutable update. Return a new DurationPart where the field 'm' has been updated with the value passed as parameter.
     *
     * @param integer $m
     * @return DurationPart
     */
    public function withM($m) {
        return new DurationPart($this->w, $this->d, $this->h, $m, $this->s, $this->ms);
    }

    /**
     * Immutable update. Return a new DurationPart where the field 's' has been updated with the value passed as parameter.
     *
     * @param integer $s
     * @return DurationPart
     */
    public function withS($s) {
        return new DurationPart($this->w, $this->d, $this->h, $this->m, $s, $this->ms);
    }

    /**
     * Immutable update. Return a new DurationPart where the field 'ms' has been updated with the value passed as parameter.
     *
     * @param float $ms
     * @return DurationPart
     */
    public function withMs($ms) {
        return new DurationPart($this->w, $this->d, $this->h, $this->m, $this->s, $ms);
    }

    /**
     * Create DurationPart from JSON string
     *
     * @param string $json
     * @return DurationPart
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create DurationPart from associative array of its fields
     *
     * @param array $array
     * @return DurationPart
     */
    public static function fromArray(array $array) {
        return new DurationPart($array['w'],
                                $array['d'],
                                $array['h'],
                                $array['m'],
                                $array['s'],
                                $array['ms']);
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
                'w' => $this->w,
                'd' => $this->d,
                'h' => $this->h,
                'm' => $this->m,
                's' => $this->s,
                'ms' => $this->ms,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "DurationPart{w=" . $this->w .
                            ", d=" . $this->d .
                            ", h=" . $this->h .
                            ", m=" . $this->m .
                            ", s=" . $this->s .
                            ", ms=" . $this->ms . "}";
    }
}