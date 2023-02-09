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

class SecurePay implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var SecurePayPurpose */
    protected $purpose ;

    /** @var string */
    protected $link ;

    /** @var QrCode */
    protected $qrCode ;

    /** @var SecurePayHook | null */
    protected $onSuccess ;

    /** @var SecurePayHook | null */
    protected $onFailure ;


    /** @var string */
    const Type = "SecurePay";

    /**
     * SecurePay constructor
     * @param string $id
     * @param SecurePayPurpose $purpose
     * @param string $link
     * @param QrCode $qrCode
     * @param SecurePayHook | null $onSuccess
     * @param SecurePayHook | null $onFailure
     */
    function __construct($id,
                         SecurePayPurpose $purpose,
                         $link,
                         QrCode $qrCode,
                         $onSuccess = null,
                         $onFailure = null) {
        $this->id = $id;
        $this->purpose = $purpose;
        $this->link = $link;
        $this->qrCode = $qrCode;
        $this->onSuccess = $onSuccess;
        $this->onFailure = $onFailure;
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
     * Getter of the field 'purpose'.
     *
     * @return SecurePayPurpose
     */
    public function getPurpose() {
        return $this->purpose;
    }

    /**
     * Getter of the field 'link'.
     *
     * @return string
     */
    public function getLink() {
        return $this->link;
    }

    /**
     * Getter of the field 'qrCode'.
     *
     * @return QrCode
     */
    public function getQrCode() {
        return $this->qrCode;
    }

    /**
     * Getter of the field 'onSuccess'.
     *
     * @return SecurePayHook | null
     */
    public function getOnSuccess() {
        return $this->onSuccess;
    }

    /**
     * Getter of the field 'onFailure'.
     *
     * @return SecurePayHook | null
     */
    public function getOnFailure() {
        return $this->onFailure;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new SecurePay where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return SecurePay
     */
    public function withId($id) {
        return new SecurePay($id, $this->purpose, $this->link, $this->qrCode, $this->onSuccess,
                             $this->onFailure);
    }

    /**
     * Immutable update. Return a new SecurePay where the field 'purpose' has been updated with the value passed as parameter.
     *
     * @param SecurePayPurpose $purpose
     * @return SecurePay
     */
    public function withPurpose(SecurePayPurpose $purpose) {
        assert($this->purpose != null, "In class SecurePay the param 'purpose' of type SecurePayPurpose can not be null");
        return new SecurePay($this->id, $purpose, $this->link, $this->qrCode, $this->onSuccess,
                             $this->onFailure);
    }

    /**
     * Immutable update. Return a new SecurePay where the field 'link' has been updated with the value passed as parameter.
     *
     * @param string $link
     * @return SecurePay
     */
    public function withLink($link) {
        return new SecurePay($this->id, $this->purpose, $link, $this->qrCode, $this->onSuccess,
                             $this->onFailure);
    }

    /**
     * Immutable update. Return a new SecurePay where the field 'qrCode' has been updated with the value passed as parameter.
     *
     * @param QrCode $qrCode
     * @return SecurePay
     */
    public function withQrCode(QrCode $qrCode) {
        assert($this->qrCode != null, "In class SecurePay the param 'qrCode' of type QrCode can not be null");
        return new SecurePay($this->id, $this->purpose, $this->link, $qrCode, $this->onSuccess,
                             $this->onFailure);
    }

    /**
     * Immutable update. Return a new SecurePay where the field 'onSuccess' has been updated with the value passed as parameter.
     *
     * @param SecurePayHook | null $onSuccess
     * @return SecurePay
     */
    public function withOnSuccess($onSuccess) {
        assert($this->onSuccess != null, "In class SecurePay the param 'onSuccess' of type SecurePayHook | null can not be null");
        return new SecurePay($this->id, $this->purpose, $this->link, $this->qrCode, $onSuccess,
                             $this->onFailure);
    }

    /**
     * Immutable update. Return a new SecurePay where the field 'onFailure' has been updated with the value passed as parameter.
     *
     * @param SecurePayHook | null $onFailure
     * @return SecurePay
     */
    public function withOnFailure($onFailure) {
        assert($this->onFailure != null, "In class SecurePay the param 'onFailure' of type SecurePayHook | null can not be null");
        return new SecurePay($this->id, $this->purpose, $this->link, $this->qrCode, $this->onSuccess,
                             $onFailure);
    }

    /**
     * Create SecurePay from JSON string
     *
     * @param string $json
     * @return SecurePay
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create SecurePay from associative array of its fields
     *
     * @param array $array
     * @return SecurePay
     */
    public static function fromArray(array $array) {
        return new SecurePay($array['id'],
                             SecurePayPurpose::fromArray($array['purpose']),
                             $array['link'],
                             QrCode::fromArray($array['qrCode']),
                             (isset($array['onSuccess']) ? SecurePayHook::fromArray($array['onSuccess']) : null),
                             (isset($array['onFailure']) ? SecurePayHook::fromArray($array['onFailure']) : null));
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
                'purpose' => ($this->purpose !== null ? $this->purpose->toArray() : null),
                'link' => $this->link,
                'qrCode' => ($this->qrCode !== null ? $this->qrCode->toArray() : null),
                'onSuccess' => ($this->onSuccess !== null ? $this->onSuccess->toArray() : null),
                'onFailure' => ($this->onFailure !== null ? $this->onFailure->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "SecurePay{id=" . $this->id .
                         ", purpose=" . $this->purpose .
                         ", link=" . $this->link .
                         ", qrCode=" . $this->qrCode .
                         ", onSuccess=" . $this->onSuccess .
                         ", onFailure=" . $this->onFailure . "}";
    }
}