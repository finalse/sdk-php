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



class TransferService {

    /** @var Auth */
    protected $auth ;

    /**
     * TransferService constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
    }

    /**
     * Create Transfer
     *
     * @param CreateTransferForm $form
     * @return Transfer
     */
    public function create(CreateTransferForm $form) {
        return Http::Post("/" . Sdk::VERSION . "/transfers", $form->toJson(), "", array(), function($value){ return Transfer::fromArray($value); }, $this->auth);
    }

    /**
     * Get Transfer
     *
     * @param string $id
     * @return Transfer
     */
    public function get($id) {
        return Http::Get("/" . Sdk::VERSION . "/transfers/" . $id, "", array(), function($value){ return Transfer::fromArray($value); }, $this->auth);
    }

    /**
     * List Transfer
     *
     * @param ListForm $form
     * @return RestCollection
     */
    public function listAll(ListForm $form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : $form->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/transfers", $qs, array(), function($value){ return Transfer::fromArray($value); }, $this->auth);
    }

    /**
     * Update Transfer
     *
     * @param UpdateTransferForm $form
     * @return Transfer
     */
    public function update(UpdateTransferForm $form) {
        return Http::Patch("/" . Sdk::VERSION . "/transfers/" . $form->getId(), $form->toJson(), "", array(), function($value){ return Transfer::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "TransferService{auth=" . $this->auth . "}";
    }
}