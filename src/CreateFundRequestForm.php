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

class CreateFundRequestForm implements JsonSerializable  {

    /** @var mixed */
    protected $h1 ;

    /** @var AmountForm */
    protected $amount ;

    /** @var FeesPayerForm | null */
    protected $feesPayer ;

    /** @var string | null */
    protected $using ;

    /** @var SecurePayForm | null */
    protected $securePay ;

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;


    /** @var string */
    const Type = "CreateFundRequestForm";

    /**
     * CreateFundRequestForm constructor
     * @param mixed $h1
     * @param AmountForm $amount
     * @param FeesPayerForm | null $feesPayer
     * @param string | null $using
     * @param SecurePayForm | null $securePay
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct($h1,
                         AmountForm $amount,
                         $feesPayer = null,
                         $using = null,
                         $securePay = null,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->h1 = $h1;
        $this->amount = $amount;
        $this->feesPayer = $feesPayer;
        $this->using = $using;
        $this->securePay = $securePay;
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
     * Getter of the field 'feesPayer'.
     *
     * @return FeesPayerForm | null
     */
    public function getFeesPayer() {
        return $this->feesPayer;
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
     * Getter of the field 'securePay'.
     *
     * @return SecurePayForm | null
     */
    public function getSecurePay() {
        return $this->securePay;
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
     * Immutable update. Return a new CreateFundRequestForm where the field 'h1' has been updated with the value passed as parameter.
     *
     * @param mixed $h1
     * @return CreateFundRequestForm
     */
    public function withH1($h1) {
        return new CreateFundRequestForm($h1, $this->amount, $this->feesPayer, $this->using,
                                         $this->securePay, $this->description, $this->foreignId,
                                         $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateFundRequestForm where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param AmountForm $amount
     * @return CreateFundRequestForm
     */
    public function withAmount(AmountForm $amount) {
        assert($this->amount != null, "In class CreateFundRequestForm the param 'amount' of type AmountForm can not be null");
        return new CreateFundRequestForm($this->h1, $amount, $this->feesPayer, $this->using,
                                         $this->securePay, $this->description, $this->foreignId,
                                         $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateFundRequestForm where the field 'feesPayer' has been updated with the value passed as parameter.
     *
     * @param FeesPayerForm | null $feesPayer
     * @return CreateFundRequestForm
     */
    public function withFeesPayer($feesPayer) {
        assert($this->feesPayer != null, "In class CreateFundRequestForm the param 'feesPayer' of type FeesPayerForm | null can not be null");
        return new CreateFundRequestForm($this->h1, $this->amount, $feesPayer, $this->using,
                                         $this->securePay, $this->description, $this->foreignId,
                                         $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateFundRequestForm where the field 'using' has been updated with the value passed as parameter.
     *
     * @param string | null $using
     * @return CreateFundRequestForm
     */
    public function withUsing($using) {
        return new CreateFundRequestForm($this->h1, $this->amount, $this->feesPayer, $using,
                                         $this->securePay, $this->description, $this->foreignId,
                                         $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateFundRequestForm where the field 'securePay' has been updated with the value passed as parameter.
     *
     * @param SecurePayForm | null $securePay
     * @return CreateFundRequestForm
     */
    public function withSecurePay($securePay) {
        assert($this->securePay != null, "In class CreateFundRequestForm the param 'securePay' of type SecurePayForm | null can not be null");
        return new CreateFundRequestForm($this->h1, $this->amount, $this->feesPayer, $this->using,
                                         $securePay, $this->description, $this->foreignId,
                                         $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateFundRequestForm where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return CreateFundRequestForm
     */
    public function withDescription($description) {
        return new CreateFundRequestForm($this->h1, $this->amount, $this->feesPayer, $this->using,
                                         $this->securePay, $description, $this->foreignId,
                                         $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateFundRequestForm where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return CreateFundRequestForm
     */
    public function withForeignId($foreignId) {
        return new CreateFundRequestForm($this->h1, $this->amount, $this->feesPayer, $this->using,
                                         $this->securePay, $this->description, $foreignId,
                                         $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateFundRequestForm where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return CreateFundRequestForm
     */
    public function withForeignData($foreignData) {
        return new CreateFundRequestForm($this->h1, $this->amount, $this->feesPayer, $this->using,
                                         $this->securePay, $this->description, $this->foreignId,
                                         $foreignData);
    }

    /**
     * Create CreateFundRequestForm from JSON string
     *
     * @param string $json
     * @return CreateFundRequestForm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create CreateFundRequestForm from associative array of its fields
     *
     * @param array $array
     * @return CreateFundRequestForm
     */
    public static function fromArray(array $array) {
        return new CreateFundRequestForm($array['h1'],
                                         AmountForm::fromArray($array['amount']),
                                         (isset($array['feesPayer']) ? FeesPayerForm::fromString($array['feesPayer']) : null),
                                         (isset($array['using']) ? $array['using'] : null),
                                         (isset($array['securePay']) ? SecurePayForm::fromArray($array['securePay']) : null),
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
                'h1' => $this->h1,
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'feesPayer' => ($this->feesPayer !== null ? ((string) $this->feesPayer) : null),
                'using' => $this->using,
                'securePay' => ($this->securePay !== null ? $this->securePay->toArray() : null),
                'description' => $this->description,
                'foreignId' => $this->foreignId,
                'foreignData' => $this->foreignData,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "CreateFundRequestForm{h1=" . $this->h1 .
                                     ", amount=" . $this->amount .
                                     ", feesPayer=" . $this->feesPayer .
                                     ", using=" . $this->using .
                                     ", securePay=" . $this->securePay .
                                     ", description=" . $this->description .
                                     ", foreignId=" . $this->foreignId .
                                     ", foreignData=" . $this->foreignData . "}";
    }
}