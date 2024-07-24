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

abstract class OtpAction implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isLogin() {
        return $this->getType() === OtpActionLogin::Type;
    }

    public function isSignUp() {
        return $this->getType() === OtpActionSignUp::Type;
    }

    public function isResetSecret() {
        return $this->getType() === OtpActionResetSecret::Type;
    }

    public function isFCardVerifyNotificationContact() {
        return $this->getType() === OtpActionfCardVerifyNotificationContact::Type;
    }

    public function isFCardVerifyValidationContact() {
        return $this->getType() === OtpActionfCardVerifyValidationContact::Type;
    }

    public function isFCardViewBalance() {
        return $this->getType() === OtpActionfCardViewBalance::Type;
    }

    public function isFCardViewHistory() {
        return $this->getType() === OtpActionfCardViewHistory::Type;
    }

    public function isFCardTransfer() {
        return $this->getType() === OtpActionfCardTransfer::Type;
    }

    public function isFCardQuasiTransfer() {
        return $this->getType() === OtpActionfCardQuasiTransfer::Type;
    }

    public function isReceiveMoney() {
        return $this->getType() === OtpActionReceiveMoney::Type;
    }

    public function isMoneyMove() {
        return $this->getType() === OtpActionMoneyMove::Type;
    }

    public function isMoneyOut() {
        return $this->getType() === OtpActionMoneyOut::Type;
    }

    public function isPurchaseFormula() {
        return $this->getType() === OtpActionPurchaseFormula::Type;
    }

    /** @return OtpActionLogin | null */
    public function asLogin() {
        if($this->getType() == OtpActionLogin::Type) return $this;
        else return null;
    }

    /** @return OtpActionSignUp | null */
    public function asSignUp() {
        if($this->getType() == OtpActionSignUp::Type) return $this;
        else return null;
    }

    /** @return OtpActionResetSecret | null */
    public function asResetSecret() {
        if($this->getType() == OtpActionResetSecret::Type) return $this;
        else return null;
    }

    /** @return OtpActionfCardVerifyNotificationContact | null */
    public function asFCardVerifyNotificationContact() {
        if($this->getType() == OtpActionfCardVerifyNotificationContact::Type) return $this;
        else return null;
    }

    /** @return OtpActionfCardVerifyValidationContact | null */
    public function asFCardVerifyValidationContact() {
        if($this->getType() == OtpActionfCardVerifyValidationContact::Type) return $this;
        else return null;
    }

    /** @return OtpActionfCardViewBalance | null */
    public function asFCardViewBalance() {
        if($this->getType() == OtpActionfCardViewBalance::Type) return $this;
        else return null;
    }

    /** @return OtpActionfCardViewHistory | null */
    public function asFCardViewHistory() {
        if($this->getType() == OtpActionfCardViewHistory::Type) return $this;
        else return null;
    }

    /** @return OtpActionfCardTransfer | null */
    public function asFCardTransfer() {
        if($this->getType() == OtpActionfCardTransfer::Type) return $this;
        else return null;
    }

    /** @return OtpActionfCardQuasiTransfer | null */
    public function asFCardQuasiTransfer() {
        if($this->getType() == OtpActionfCardQuasiTransfer::Type) return $this;
        else return null;
    }

    /** @return OtpActionReceiveMoney | null */
    public function asReceiveMoney() {
        if($this->getType() == OtpActionReceiveMoney::Type) return $this;
        else return null;
    }

    /** @return OtpActionMoneyMove | null */
    public function asMoneyMove() {
        if($this->getType() == OtpActionMoneyMove::Type) return $this;
        else return null;
    }

    /** @return OtpActionMoneyOut | null */
    public function asMoneyOut() {
        if($this->getType() == OtpActionMoneyOut::Type) return $this;
        else return null;
    }

    /** @return OtpActionPurchaseFormula | null */
    public function asPurchaseFormula() {
        if($this->getType() == OtpActionPurchaseFormula::Type) return $this;
        else return null;
    }

    /**
     * Create OtpAction from JSON string
     *
     * @param string $json
     * @return OtpAction
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create OtpAction from associative array of its fields
     *
     * @param array $array
     * @return OtpAction
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === OtpActionLogin::Type || str_ends_with('.' . $type, '.' . OtpActionLogin::Variant)) return OtpActionLogin::fromArray($array);
        else if($type === OtpActionSignUp::Type || str_ends_with('.' . $type, '.' . OtpActionSignUp::Variant)) return OtpActionSignUp::fromArray($array);
        else if($type === OtpActionResetSecret::Type || str_ends_with('.' . $type, '.' . OtpActionResetSecret::Variant)) return OtpActionResetSecret::fromArray($array);
        else if($type === OtpActionFCardVerifyNotificationContact::Type || str_ends_with('.' . $type, '.' . OtpActionFCardVerifyNotificationContact::Variant)) return OtpActionFCardVerifyNotificationContact::fromArray($array);
        else if($type === OtpActionFCardVerifyValidationContact::Type || str_ends_with('.' . $type, '.' . OtpActionFCardVerifyValidationContact::Variant)) return OtpActionFCardVerifyValidationContact::fromArray($array);
        else if($type === OtpActionFCardViewBalance::Type || str_ends_with('.' . $type, '.' . OtpActionFCardViewBalance::Variant)) return OtpActionFCardViewBalance::fromArray($array);
        else if($type === OtpActionFCardViewHistory::Type || str_ends_with('.' . $type, '.' . OtpActionFCardViewHistory::Variant)) return OtpActionFCardViewHistory::fromArray($array);
        else if($type === OtpActionFCardTransfer::Type || str_ends_with('.' . $type, '.' . OtpActionFCardTransfer::Variant)) return OtpActionFCardTransfer::fromArray($array);
        else if($type === OtpActionFCardQuasiTransfer::Type || str_ends_with('.' . $type, '.' . OtpActionFCardQuasiTransfer::Variant)) return OtpActionFCardQuasiTransfer::fromArray($array);
        else if($type === OtpActionReceiveMoney::Type || str_ends_with('.' . $type, '.' . OtpActionReceiveMoney::Variant)) return OtpActionReceiveMoney::fromArray($array);
        else if($type === OtpActionMoneyMove::Type || str_ends_with('.' . $type, '.' . OtpActionMoneyMove::Variant)) return OtpActionMoneyMove::fromArray($array);
        else if($type === OtpActionMoneyOut::Type || str_ends_with('.' . $type, '.' . OtpActionMoneyOut::Variant)) return OtpActionMoneyOut::fromArray($array);
        else if($type === OtpActionPurchaseFormula::Type || str_ends_with('.' . $type, '.' . OtpActionPurchaseFormula::Variant)) return OtpActionPurchaseFormula::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'OtpAction'" . " Unexpected '_type' = " . $type);
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
        return array();
    }
}