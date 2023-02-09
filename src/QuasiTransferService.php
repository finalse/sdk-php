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



class QuasiTransferService {

    /** @var Auth */
    protected $auth ;

    /**
     * QuasiTransferService constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
    }

    /**
     * Receive QuasiTransfer
     *
     * @param ReceiveQuasiTransferForm $form
     * @return MfaProcess
     */
    public function receive(ReceiveQuasiTransferForm $form) {
        return Http::Post("/" . Sdk::VERSION . "/quasi-transfers/" . $form->getId() . "/receive", $form->toJson(), "", array(), function($value){ return MfaProcess::fromArray($value); }, $this->auth);
    }

    /**
     * Cancel QuasiTransfer
     *
     * @param CancelQuasiTransferForm $form
     * @return QuasiTransfer
     */
    public function cancel(CancelQuasiTransferForm $form) {
        return Http::Post("/" . Sdk::VERSION . "/quasi-transfers/" . $form->getId() . "/cancel", $form->toJson(), "", array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    /**
     * Create QuasiTransfer
     *
     * @param CreateQuasiTransferForm $form
     * @return QuasiTransfer
     */
    public function create(CreateQuasiTransferForm $form) {
        return Http::Post("/" . Sdk::VERSION . "/quasi-transfers", $form->toJson(), "", array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    /**
     * Get QuasiTransfer
     *
     * @param string $id
     * @return QuasiTransfer
     */
    public function get($id) {
        return Http::Get("/" . Sdk::VERSION . "/quasi-transfers/" . $id, "", array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    /**
     * List QuasiTransfer
     *
     * @param ListForm $form
     * @return RestCollection
     */
    public function listAll(ListForm $form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : $form->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/quasi-transfers", $qs, array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    /**
     * Update QuasiTransfer
     *
     * @param UpdateQuasiTransferForm $form
     * @return QuasiTransfer
     */
    public function update(UpdateQuasiTransferForm $form) {
        return Http::Patch("/" . Sdk::VERSION . "/quasi-transfers/" . $form->getId(), $form->toJson(), "", array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "QuasiTransferService{auth=" . $this->auth . "}";
    }
}