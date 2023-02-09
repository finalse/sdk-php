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

class TransferDestinationItem implements JsonSerializable  {

    /** @var string | null */
    protected $details ;

    /** @var number */
    protected $amount ;

    /** @var TransferDestinationStatus */
    protected $status ;

    /** @var MoneyAccount */
    protected $account ;

    /** @var string | null */
    protected $transactionId ;


    /** @var string */
    const Type = "TransferDestinationItem";

    /**
     * TransferDestinationItem constructor
     * @param string | null $details
     * @param number $amount
     * @param TransferDestinationStatus $status
     * @param MoneyAccount $account
     * @param string | null $transactionId
     */
    function __construct($details = null,
                         $amount,
                         TransferDestinationStatus $status,
                         MoneyAccount $account,
                         $transactionId = null) {
        $this->details = $details;
        $this->amount = $amount;
        $this->status = $status;
        $this->account = $account;
        $this->transactionId = $transactionId;
    }

    /**
     * Getter of the field 'details'.
     *
     * @return string | null
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * Getter of the field 'amount'.
     *
     * @return number
     */
    public function getAmount() {
        return $this->amount;
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
     * Getter of the field 'account'.
     *
     * @return MoneyAccount
     */
    public function getAccount() {
        return $this->account;
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
     * Immutable update. Return a new TransferDestinationItem where the field 'details' has been updated with the value passed as parameter.
     *
     * @param string | null $details
     * @return TransferDestinationItem
     */
    public function withDetails($details) {
        return new TransferDestinationItem($details, $this->amount, $this->status, $this->account,
                                           $this->transactionId);
    }

    /**
     * Immutable update. Return a new TransferDestinationItem where the field 'amount' has been updated with the value passed as parameter.
     *
     * @param number $amount
     * @return TransferDestinationItem
     */
    public function withAmount($amount) {
        return new TransferDestinationItem($this->details, $amount, $this->status, $this->account,
                                           $this->transactionId);
    }

    /**
     * Immutable update. Return a new TransferDestinationItem where the field 'status' has been updated with the value passed as parameter.
     *
     * @param TransferDestinationStatus $status
     * @return TransferDestinationItem
     */
    public function withStatus(TransferDestinationStatus $status) {
        assert($this->status != null, "In class TransferDestinationItem the param 'status' of type TransferDestinationStatus can not be null");
        return new TransferDestinationItem($this->details, $this->amount, $status, $this->account,
                                           $this->transactionId);
    }

    /**
     * Immutable update. Return a new TransferDestinationItem where the field 'account' has been updated with the value passed as parameter.
     *
     * @param MoneyAccount $account
     * @return TransferDestinationItem
     */
    public function withAccount(MoneyAccount $account) {
        assert($this->account != null, "In class TransferDestinationItem the param 'account' of type MoneyAccount can not be null");
        return new TransferDestinationItem($this->details, $this->amount, $this->status,
                                           $account, $this->transactionId);
    }

    /**
     * Immutable update. Return a new TransferDestinationItem where the field 'transactionId' has been updated with the value passed as parameter.
     *
     * @param string | null $transactionId
     * @return TransferDestinationItem
     */
    public function withTransactionId($transactionId) {
        return new TransferDestinationItem($this->details, $this->amount, $this->status,
                                           $this->account, $transactionId);
    }

    /**
     * Create TransferDestinationItem from JSON string
     *
     * @param string $json
     * @return TransferDestinationItem
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransferDestinationItem from associative array of its fields
     *
     * @param array $array
     * @return TransferDestinationItem
     */
    public static function fromArray(array $array) {
        return new TransferDestinationItem((isset($array['details']) ? $array['details'] : null),
                                           $array['amount'],
                                           TransferDestinationStatus::fromArray($array['status']),
                                           MoneyAccount::fromArray($array['account']),
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
                'details' => $this->details,
                'amount' => $this->amount,
                'status' => ($this->status !== null ? $this->status->toArray() : null),
                'account' => ($this->account !== null ? $this->account->toArray() : null),
                'transactionId' => $this->transactionId,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransferDestinationItem{details=" . $this->details .
                                       ", amount=" . $this->amount .
                                       ", status=" . $this->status .
                                       ", account=" . $this->account .
                                       ", transactionId=" . $this->transactionId . "}";
    }
}