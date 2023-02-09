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

class TransferDestinationSingle extends TransferDestination implements JsonSerializable  {

    /** @var MoneyAccount */
    protected $account ;

    /** @var TransferDestinationStatus */
    protected $status ;

    /** @var string | null */
    protected $transactionId ;


    /** @var string */
    const Type = "TransferDestination.Single";


    /** @var string */
    const Variant = "Single";

    /**
     * TransferDestinationSingle constructor
     * @param MoneyAccount $account
     * @param TransferDestinationStatus $status
     * @param string | null $transactionId
     */
    function __construct(MoneyAccount $account,
                         TransferDestinationStatus $status,
                         $transactionId = null) {
        $this->account = $account;
        $this->status = $status;
        $this->transactionId = $transactionId;
    }

    /**
     * Getter of the field 'account'.
     *
     * @return MoneyAccount
     */
    public function getAccount() {
        return $this->account;
    }

    /**
     * Getter of the field 'status'.
     *
     * @return TransferDestinationStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Getter of the field 'transactionId'.
     *
     * @return string | null
     */
    public function getTransactionId() {
        return $this->transactionId;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new TransferDestinationSingle where the field 'account' has been updated with the value passed as parameter.
     *
     * @param MoneyAccount $account
     * @return TransferDestinationSingle
     */
    public function withAccount(MoneyAccount $account) {
        assert($this->account != null, "In class TransferDestinationSingle the param 'account' of type MoneyAccount can not be null");
        return new TransferDestinationSingle($account, $this->status, $this->transactionId);
    }

    /**
     * Immutable update. Return a new TransferDestinationSingle where the field 'status' has been updated with the value passed as parameter.
     *
     * @param TransferDestinationStatus $status
     * @return TransferDestinationSingle
     */
    public function withStatus(TransferDestinationStatus $status) {
        assert($this->status != null, "In class TransferDestinationSingle the param 'status' of type TransferDestinationStatus can not be null");
        return new TransferDestinationSingle($this->account, $status, $this->transactionId);
    }

    /**
     * Immutable update. Return a new TransferDestinationSingle where the field 'transactionId' has been updated with the value passed as parameter.
     *
     * @param string | null $transactionId
     * @return TransferDestinationSingle
     */
    public function withTransactionId($transactionId) {
        return new TransferDestinationSingle($this->account, $this->status, $transactionId);
    }

    /**
     * Create TransferDestinationSingle from JSON string
     *
     * @param string $json
     * @return TransferDestinationSingle
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransferDestinationSingle from associative array of its fields
     *
     * @param array $array
     * @return TransferDestinationSingle
     */
    public static function fromArray(array $array) {
        return new TransferDestinationSingle(MoneyAccount::fromArray($array['account']),
                                             TransferDestinationStatus::fromArray($array['status']),
                                             (isset($array['transactionId']) ? $array['transactionId'] : null));
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
                'account' => ($this->account !== null ? $this->account->toArray() : null),
                'status' => ($this->status !== null ? $this->status->toArray() : null),
                'transactionId' => $this->transactionId,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransferDestinationSingle{account=" . $this->account .
                                         ", status=" . $this->status .
                                         ", transactionId=" . $this->transactionId . "}";
    }
}