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



class DepositService {

    /** @var Auth */
    protected $auth ;

    /**
     * DepositService constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
    }

    /**
     * ListAll Deposit
     *
     * @param Page $page
     * @return RestCollection
     */
    public function fetchPage(Page $page) {
        if($page == null) throw new \Exception("The page passed in argument is null. Hint:  Verify with collection->hasNextPage() first before calling this function.");
        return Http::ListAll("/" . Sdk::VERSION . "/deposits", $page->getQueryString(), array(), function($value){ return Deposit::fromArray($value); }, $this->auth);
    }

    /**
     * Initiate Deposit
     *
     * @param mixed $form
     * @return Deposit
     */
    public function initiate($form) {
        return Http::Post("/" . Sdk::VERSION . "/deposits/initiate", json_encode($form), "", array(), function($value){ return Deposit::fromArray($value); }, $this->auth);
    }

    /**
     * Get Deposit
     *
     * @param string $form
     * @return Deposit
     */
    public function get($form) {
        return Http::Get("/" . Sdk::VERSION . "/deposits/" . $form, "", array(), function($value){ return Deposit::fromArray($value); }, $this->auth);
    }

    /**
     * ListAll Deposit
     *
     * @param mixed $form
     * @return RestCollection
     */
    public function listAll($form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : ListForm::fromArray($form)->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/deposits", $qs, array(), function($value){ return Deposit::fromArray($value); }, $this->auth);
    }

    /**
     * Update Deposit
     *
     * @param mixed $form
     * @return Deposit
     */
    public function update($form) {
        return Http::Patch("/" . Sdk::VERSION . "/deposits/" . $form['id'], json_encode($form), "", array(), function($value){ return Deposit::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "DepositService{auth=" . $this->auth . "}";
    }
}