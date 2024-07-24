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
     * ListAll Wallet
     *
     * @param Page $page
     * @return RestCollection
     */
    public function fetchPage(Page $page) {
        if($page == null) throw new \Exception("The page passed in argument is null. Hint:  Verify with collection->hasNextPage() first before calling this function.");
        return Http::ListAll("/" . Sdk::VERSION . "/wallets", $page->getQueryString(), array(), function($value){ return Wallet::fromArray($value); }, $this->auth);
    }

    /**
     * Create Wallet
     *
     * @param mixed $form
     * @return Wallet
     */
    public function create($form) {
        return Http::Post("/" . Sdk::VERSION . "/wallets", json_encode($form), "", array(), function($value){ return Wallet::fromArray($value); }, $this->auth);
    }

    /**
     * Get Wallet
     *
     * @param string $form
     * @return Wallet
     */
    public function get($form) {
        return Http::Get("/" . Sdk::VERSION . "/wallets/" . $form, "", array(), function($value){ return Wallet::fromArray($value); }, $this->auth);
    }

    /**
     * ListAll Wallet
     *
     * @param mixed $form
     * @return RestCollection
     */
    public function listAll($form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : ListForm::fromArray($form)->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/wallets", $qs, array(), function($value){ return Wallet::fromArray($value); }, $this->auth);
    }

    /**
     * Update Wallet
     *
     * @param mixed $form
     * @return Wallet
     */
    public function update($form) {
        return Http::Patch("/" . Sdk::VERSION . "/wallets/" . $form['id'], json_encode($form), "", array(), function($value){ return Wallet::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "WalletService{auth=" . $this->auth . "}";
    }
}