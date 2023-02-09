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



class TransactionService {

    /** @var Auth */
    protected $auth ;

    /**
     * TransactionService constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
    }

    /**
     * Get Transaction
     *
     * @param string $id
     * @return Transaction
     */
    public function get($id) {
        return Http::Get("/" . Sdk::VERSION . "/transactions/" . $id, "", array(), function($value){ return Transaction::fromArray($value); }, $this->auth);
    }

    /**
     * List Transaction
     *
     * @param ListForm $form
     * @return RestCollection
     */
    public function listAll(ListForm $form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : $form->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/transactions", $qs, array(), function($value){ return Transaction::fromArray($value); }, $this->auth);
    }

    /**
     * Update Transaction
     *
     * @param UpdateTransactionForm $form
     * @return Transaction
     */
    public function update(UpdateTransactionForm $form) {
        return Http::Patch("/" . Sdk::VERSION . "/transactions/" . $form->getId(), $form->toJson(), "", array(), function($value){ return Transaction::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "TransactionService{auth=" . $this->auth . "}";
    }
}