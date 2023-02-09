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



class WalletService {

    /** @var Auth */
    protected $auth ;

    /**
     * WalletService constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
    }

    /**
     * Create Wallet
     *
     * @param CreateWalletForm $form
     * @return Wallet
     */
    public function create(CreateWalletForm $form) {
        return Http::Post("/" . Sdk::VERSION . "/wallets", $form->toJson(), "", array(), function($value){ return Wallet::fromArray($value); }, $this->auth);
    }

    /**
     * Get Wallet
     *
     * @param string $id
     * @return Wallet
     */
    public function get($id) {
        return Http::Get("/" . Sdk::VERSION . "/wallets/" . $id, "", array(), function($value){ return Wallet::fromArray($value); }, $this->auth);
    }

    /**
     * List Wallet
     *
     * @param ListForm $form
     * @return RestCollection
     */
    public function listAll(ListForm $form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : $form->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/wallets", $qs, array(), function($value){ return Wallet::fromArray($value); }, $this->auth);
    }

    /**
     * Update Wallet
     *
     * @param UpdateWalletForm $form
     * @return Wallet
     */
    public function update(UpdateWalletForm $form) {
        return Http::Patch("/" . Sdk::VERSION . "/wallets/" . $form->getId(), $form->toJson(), "", array(), function($value){ return Wallet::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "WalletService{auth=" . $this->auth . "}";
    }
}