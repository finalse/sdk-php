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

class SecurePayPurposePurchase extends SecurePayPurpose implements JsonSerializable  {

    /** @var PurchaseLabel */
    protected $label ;


    /** @var string */
    const Type = "SecurePayPurpose.Purchase";


    /** @var string */
    const Variant = "Purchase";

    /**
     * SecurePayPurposePurchase constructor
     * @param PurchaseLabel $label
     */
    function __construct(PurchaseLabel $label) {
        $this->label = $label;
    }

    /**
     * Getter of the field 'label'.
     *
     * @return PurchaseLabel
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new SecurePayPurposePurchase where the field 'label' has been updated with the value passed as parameter.
     *
     * @param PurchaseLabel $label
     * @return SecurePayPurposePurchase
     */
    public function withLabel(PurchaseLabel $label) {
        assert($this->label != null, "In class SecurePayPurposePurchase the param 'label' of type PurchaseLabel can not be null");
        return new SecurePayPurposePurchase($label);
    }

    /**
     * Create SecurePayPurposePurchase from JSON string
     *
     * @param string $json
     * @return SecurePayPurposePurchase
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create SecurePayPurposePurchase from associative array of its fields
     *
     * @param array $array
     * @return SecurePayPurposePurchase
     */
    public static function fromArray(array $array) {
        return new SecurePayPurposePurchase(PurchaseLabel::fromString($array['label']));
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
                'label' => ((string) $this->label),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "SecurePayPurposePurchase{label=" . $this->label . "}";
    }
}