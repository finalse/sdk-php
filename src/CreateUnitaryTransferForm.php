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

class CreateUnitaryTransferForm extends CreateTransferForm implements JsonSerializable  {

    /** @var mixed */
    protected $h1 ;

    /** @var AmountForm */
    protected $amount ;

    /** @var string */
    protected $origin ;

    /** @var string */
    protected $destination ;

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;


    /** @var string */
    const Type = "CreateTransferForm.Unitary";


    /** @var string */
    const Variant = "Unitary";

    /**
     * CreateUnitaryTransferForm constructor
     * @param mixed $h1
     * @param AmountForm $amount
     * @param string $origin
     * @param string $destination
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct($h1,
                         AmountForm $amount,
                         $origin,
                         $destination,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->h1 = $h1;
        $this->amount = $amount;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->description = $description;
        $this->foreignId = $foreignId;
        $this->foreignData = $foreignData;
    }

    /**
     * Getter of the field 'h1'.
     *
     * @return mixed
     */
    public function getH1() {
        return $this->h1;
    }

    /**
     * Getter of the field 'amount'.
     *
     * @return AmountForm
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Getter of the field 'origin'.
     *
     * @return string
     */
    public function getOrigin() {
        return $this->origin;
    }

    /**
     * Getter of the field 'destination'.
     *
     * @return string
     */
    public function getDestination() {
        return $this->destination;
    }

    /**
     * Getter of the field 'description'.
     *
     * @return string | null
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Getter of the field 'foreignId'.
     *
     * @return string | null
     */
    public function getForeignId() {
        return $this->foreignId;
    }

    /**
     * Getter of the field 'foreignData'.
     *
     * @return string | null
     */
    public function getForeignData() {
        return $this->foreignData;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new CreateUnitaryTransferForm where the field 'h1' has been updated with the value passed as parameter.
     *
     * @param mixed $h1
     * @return CreateUnitaryTransferForm
     */
    public function withH1($h1) {
        return new CreateUnitaryTransferForm($h1, $this->amount, $this->origin, $this->destination,
                                             $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateUnitaryTransferForm where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param AmountForm $amount
     * @return CreateUnitaryTransferForm
     */
    public function withAmount(AmountForm $amount) {
        assert($this->amount != null, "In class CreateUnitaryTransferForm the param 'amount' of type AmountForm can not be null");
        return new CreateUnitaryTransferForm($this->h1, $amount, $this->origin, $this->destination,
                                             $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateUnitaryTransferForm where the field 'origin' has been updated with the value passed as parameter.
     *
     * @param string $origin
     * @return CreateUnitaryTransferForm
     */
    public function withOrigin($origin) {
        return new CreateUnitaryTransferForm($this->h1, $this->amount, $origin, $this->destination,
                                             $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateUnitaryTransferForm where the field 'destination' has been updated with the value passed as parameter.
     *
     * @param string $destination
     * @return CreateUnitaryTransferForm
     */
    public function withDestination($destination) {
        return new CreateUnitaryTransferForm($this->h1, $this->amount, $this->origin, $destination,
                                             $this->description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateUnitaryTransferForm where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return CreateUnitaryTransferForm
     */
    public function withDescription($description) {
        return new CreateUnitaryTransferForm($this->h1, $this->amount, $this->origin, $this->destination,
                                             $description, $this->foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateUnitaryTransferForm where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return CreateUnitaryTransferForm
     */
    public function withForeignId($foreignId) {
        return new CreateUnitaryTransferForm($this->h1, $this->amount, $this->origin, $this->destination,
                                             $this->description, $foreignId, $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateUnitaryTransferForm where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return CreateUnitaryTransferForm
     */
    public function withForeignData($foreignData) {
        return new CreateUnitaryTransferForm($this->h1, $this->amount, $this->origin, $this->destination,
                                             $this->description, $this->foreignId, $foreignData);
    }

    /**
     * Create CreateUnitaryTransferForm from JSON string
     *
     * @param string $json
     * @return CreateUnitaryTransferForm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create CreateUnitaryTransferForm from associative array of its fields
     *
     * @param array $array
     * @return CreateUnitaryTransferForm
     */
    public static function fromArray(array $array) {
        return new CreateUnitaryTransferForm($array['h1'],
                                             AmountForm::fromArray($array['amount']),
                                             $array['origin'],
                                             $array['destination'],
                                             (isset($array['description']) ? $array['description'] : null),
                                             (isset($array['foreignId']) ? $array['foreignId'] : null),
                                             (isset($array['foreignData']) ? $array['foreignData'] : null));
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
                'h1' => $this->h1,
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'origin' => $this->origin,
                'destination' => $this->destination,
                'description' => $this->description,
                'foreignId' => $this->foreignId,
                'foreignData' => $this->foreignData,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "CreateUnitaryTransferForm{h1=" . $this->h1 .
                                         ", amount=" . $this->amount .
                                         ", origin=" . $this->origin .
                                         ", destination=" . $this->destination .
                                         ", description=" . $this->description .
                                         ", foreignId=" . $this->foreignId .
                                         ", foreignData=" . $this->foreignData . "}";
    }
}