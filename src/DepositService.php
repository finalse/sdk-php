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
     * Get Deposit
     *
     * @param string $id
     * @return Deposit
     */
    public function get($id) {
        return Http::Get("/" . Sdk::VERSION . "/deposits/" . $id, "", array(), function($value){ return Deposit::fromArray($value); }, $this->auth);
    }

    /**
     * List Deposit
     *
     * @param ListForm $form
     * @return RestCollection
     */
    public function listAll(ListForm $form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : $form->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/deposits", $qs, array(), function($value){ return Deposit::fromArray($value); }, $this->auth);
    }

    /**
     * Update Deposit
     *
     * @param UpdateDepositForm $form
     * @return Deposit
     */
    public function update(UpdateDepositForm $form) {
        return Http::Patch("/" . Sdk::VERSION . "/deposits/" . $form->getId(), $form->toJson(), "", array(), function($value){ return Deposit::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "DepositService{auth=" . $this->auth . "}";
    }
}