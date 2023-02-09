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

class TransferDestinationMultiple extends TransferDestination implements JsonSerializable  {

    /** @var integer */
    protected $totalNb ;

    /** @var integer */
    protected $successfulNb ;

    /** @var integer */
    protected $failedNb ;

    /** @var TransferDestinationItemCollection */
    protected $all ;


    /** @var string */
    const Type = "TransferDestination.Multiple";


    /** @var string */
    const Variant = "Multiple";

    /**
     * TransferDestinationMultiple constructor
     * @param integer $totalNb
     * @param integer $successfulNb
     * @param integer $failedNb
     * @param TransferDestinationItemCollection $all
     */
    function __construct($totalNb,
                         $successfulNb,
                         $failedNb,
                         TransferDestinationItemCollection $all) {
        $this->totalNb = $totalNb;
        $this->successfulNb = $successfulNb;
        $this->failedNb = $failedNb;
        $this->all = $all;
    }

    /**
     * Getter of the field 'totalNb'.
     *
     * @return integer
     */
    public function getTotalNb() {
        return $this->totalNb;
    }

    /**
     * Getter of the field 'successfulNb'.
     *
     * @return integer
     */
    public function getSuccessfulNb() {
        return $this->successfulNb;
    }

    /**
     * Getter of the field 'failedNb'.
     *
     * @return integer
     */
    public function getFailedNb() {
        return $this->failedNb;
    }

    /**
     * Getter of the field 'all'.
     *
     * @return TransferDestinationItemCollection
     */
    public function getAll() {
        return $this->all;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new TransferDestinationMultiple where the field 'totalNb' has been updated with the value passed as parameter.
     *
     * @param integer $totalNb
     * @return TransferDestinationMultiple
     */
    public function withTotalNb($totalNb) {
        return new TransferDestinationMultiple($totalNb, $this->successfulNb, $this->failedNb,
                                               $this->all);
    }

    /**
     * Immutable update. Return a new TransferDestinationMultiple where the field 'successfulNb' has been updated with the value passed as parameter.
     *
     * @param integer $successfulNb
     * @return TransferDestinationMultiple
     */
    public function withSuccessfulNb($successfulNb) {
        return new TransferDestinationMultiple($this->totalNb, $successfulNb, $this->failedNb,
                                               $this->all);
    }

    /**
     * Immutable update. Return a new TransferDestinationMultiple where the field 'failedNb' has been updated with the value passed as parameter.
     *
     * @param integer $failedNb
     * @return TransferDestinationMultiple
     */
    public function withFailedNb($failedNb) {
        return new TransferDestinationMultiple($this->totalNb, $this->successfulNb, $failedNb,
                                               $this->all);
    }

    /**
     * Immutable update. Return a new TransferDestinationMultiple where the field 'all' has been updated with the value passed as parameter.
     *
     * @param TransferDestinationItemCollection $all
     * @return TransferDestinationMultiple
     */
    public function withAll(TransferDestinationItemCollection $all) {
        assert($this->all != null, "In class TransferDestinationMultiple the param 'all' of type TransferDestinationItemCollection can not be null");
        return new TransferDestinationMultiple($this->totalNb, $this->successfulNb, $this->failedNb,
                                               $all);
    }

    /**
     * Create TransferDestinationMultiple from JSON string
     *
     * @param string $json
     * @return TransferDestinationMultiple
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransferDestinationMultiple from associative array of its fields
     *
     * @param array $array
     * @return TransferDestinationMultiple
     */
    public static function fromArray(array $array) {
        return new TransferDestinationMultiple($array['totalNb'],
                                               $array['successfulNb'],
                                               $array['failedNb'],
                                               TransferDestinationItemCollection::fromArray($array['all']));
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
                '_type' => self::Variant, 
                'totalNb' => $this->totalNb,
                'successfulNb' => $this->successfulNb,
                'failedNb' => $this->failedNb,
                'all' => ($this->all !== null ? $this->all->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransferDestinationMultiple{totalNb=" . $this->totalNb .
                                           ", successfulNb=" . $this->successfulNb .
                                           ", failedNb=" . $this->failedNb .
                                           ", all=" . $this->all . "}";
    }
}