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

    public function isReceiveMoney() {
        return $this->getType() === OtpActionReceiveMoney::Type;
    }

    public function isSendMoney() {
        return $this->getType() === OtpActionSendMoney::Type;
    }

    public function isPurchaseFormula() {
        return $this->getType() === OtpActionPurchaseFormula::Type;
    }

    public function isNotLogin() {
        return $this->getType() !== OtpActionLogin::Type; 
    }

    public function isNotSignUp() {
        return $this->getType() !== OtpActionSignUp::Type; 
    }

    public function isNotResetSecret() {
        return $this->getType() !== OtpActionResetSecret::Type; 
    }

    public function isNotReceiveMoney() {
        return $this->getType() !== OtpActionReceiveMoney::Type; 
    }

    public function isNotSendMoney() {
        return $this->getType() !== OtpActionSendMoney::Type; 
    }

    public function isNotPurchaseFormula() {
        return $this->getType() !== OtpActionPurchaseFormula::Type; 
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
        else if($type === OtpActionReceiveMoney::Type || str_ends_with('.' . $type, '.' . OtpActionReceiveMoney::Variant)) return OtpActionReceiveMoney::fromArray($array);
        else if($type === OtpActionSendMoney::Type || str_ends_with('.' . $type, '.' . OtpActionSendMoney::Variant)) return OtpActionSendMoney::fromArray($array);
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
}