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

class OtpActionPurchaseFormula extends OtpAction implements JsonSerializable  {

    /** @var Amount */
    protected $amount ;

    /** @var string */
    protected $merchantName ;

    /** @var PurchaseLabel */
    protected $purchaseLabel ;


    /** @var string */
    const Type = "OtpAction.PurchaseFormula";


    /** @var string */
    const Variant = "PurchaseFormula";

    /**
     * OtpActionPurchaseFormula constructor
     * @param Amount $amount
     * @param string $merchantName
     * @param PurchaseLabel $purchaseLabel
     */
    function __construct(Amount $amount, $merchantName, PurchaseLabel $purchaseLabel) {
        $this->amount = $amount;
        $this->merchantName = $merchantName;
        $this->purchaseLabel = $purchaseLabel;
    }

    /**
     * Getter of the field 'amount'.
     *
     * @return Amount
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Getter of the field 'merchantName'.
     *
     * @return string
     */
    public function getMerchantName() {
        return $this->merchantName;
    }

    /**
     * Getter of the field 'purchaseLabel'.
     *
     * @return PurchaseLabel
     */
    public function getPurchaseLabel() {
        return $this->purchaseLabel;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new OtpActionPurchaseFormula where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param Amount $amount
     * @return OtpActionPurchaseFormula
     */
    public function withAmount(Amount $amount) {
        assert($this->amount != null, "In class OtpActionPurchaseFormula the param 'amount' of type Amount can not be null");
        return new OtpActionPurchaseFormula($amount, $this->merchantName, $this->purchaseLabel);
    }

    /**
     * Immutable update. Return a new OtpActionPurchaseFormula where the field 'merchantName' has been updated with the value passed as parameter.
     *
     * @param string $merchantName
     * @return OtpActionPurchaseFormula
     */
    public function withMerchantName($merchantName) {
        return new OtpActionPurchaseFormula($this->amount, $merchantName, $this->purchaseLabel);
    }

    /**
     * Immutable update. Return a new OtpActionPurchaseFormula where the field 'purchaseLabel' has been updated with the value passed as parameter.
     *
     * @param PurchaseLabel $purchaseLabel
     * @return OtpActionPurchaseFormula
     */
    public function withPurchaseLabel(PurchaseLabel $purchaseLabel) {
        assert($this->purchaseLabel != null, "In class OtpActionPurchaseFormula the param 'purchaseLabel' of type PurchaseLabel can not be null");
        return new OtpActionPurchaseFormula($this->amount, $this->merchantName, $purchaseLabel);
    }

    /**
     * Create OtpActionPurchaseFormula from JSON string
     *
     * @param string $json
     * @return OtpActionPurchaseFormula
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create OtpActionPurchaseFormula from associative array of its fields
     *
     * @param array $array
     * @return OtpActionPurchaseFormula
     */
    public static function fromArray(array $array) {
        return new OtpActionPurchaseFormula(Amount::fromArray($array['amount']),
                                            $array['merchantName'],
                                            PurchaseLabel::fromString($array['purchaseLabel']));
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
                'amount' => ($this->amount !== null ? $this->amount->toArray() : null),
                'merchantName' => $this->merchantName,
                'purchaseLabel' => ((string) $this->purchaseLabel),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "OtpActionPurchaseFormula{amount=" . $this->amount .
                                        ", merchantName=" . $this->merchantName .
                                        ", purchaseLabel=" . $this->purchaseLabel . "}";
    }
}