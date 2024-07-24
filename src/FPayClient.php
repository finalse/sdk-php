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



class FPayClient {

    /** @var Auth */
    protected $auth ;

    /** @var AuthAccessService */
    protected $_authAccess ;

    /** @var DepositService */
    protected $_deposit ;

    /** @var AttemptService */
    protected $_attempt ;

    /** @var FundRequestService */
    protected $_fundRequest ;

    /** @var QuasiTransferService */
    protected $_quasiTransfer ;

    /** @var TransactionService */
    protected $_transaction ;

    /** @var TransferService */
    protected $_transfer ;

    /** @var WalletService */
    protected $_wallet ;

    /**
     * FPayClient constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
        $this->_authAccess = new AuthAccessService($auth);
        $this->_deposit = new DepositService($auth);
        $this->_attempt = new AttemptService($auth);
        $this->_fundRequest = new FundRequestService($auth);
        $this->_quasiTransfer = new QuasiTransferService($auth);
        $this->_transaction = new TransactionService($auth);
        $this->_transfer = new TransferService($auth);
        $this->_wallet = new WalletService($auth);
    }

    /** @return AuthAccessService */
    public function authAccess() {
        return $this->_authAccess;
    }

    /** @return DepositService */
    public function deposit() {
        return $this->_deposit;
    }

    /** @return AttemptService */
    public function attempt() {
        return $this->_attempt;
    }

    /** @return FundRequestService */
    public function fundRequest() {
        return $this->_fundRequest;
    }

    /** @return QuasiTransferService */
    public function quasiTransfer() {
        return $this->_quasiTransfer;
    }

    /** @return TransactionService */
    public function transaction() {
        return $this->_transaction;
    }

    /** @return TransferService */
    public function transfer() {
        return $this->_transfer;
    }

    /** @return WalletService */
    public function wallet() {
        return $this->_wallet;
    }

    /**
     * Getter of the field 'auth'.
     *
     * @return Auth
     */
    public function getAuth() {
        return $this->auth;
    }

    public function __toString() {
        return "FPayClient{auth=" . $this->auth . "}";
    }
}