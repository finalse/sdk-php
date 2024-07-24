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
     * ListAll Transaction
     *
     * @param Page $page
     * @return RestCollection
     */
    public function fetchPage(Page $page) {
        if($page == null) throw new \Exception("The page passed in argument is null. Hint:  Verify with collection->hasNextPage() first before calling this function.");
        return Http::ListAll("/" . Sdk::VERSION . "/transactions", $page->getQueryString(), array(), function($value){ return Transaction::fromArray($value); }, $this->auth);
    }

    /**
     * Get Transaction
     *
     * @param string $form
     * @return Transaction
     */
    public function get($form) {
        return Http::Get("/" . Sdk::VERSION . "/transactions/" . $form, "", array(), function($value){ return Transaction::fromArray($value); }, $this->auth);
    }

    /**
     * ListAll Transaction
     *
     * @param mixed $form
     * @return RestCollection
     */
    public function listAll($form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : ListForm::fromArray($form)->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/transactions", $qs, array(), function($value){ return Transaction::fromArray($value); }, $this->auth);
    }

    /**
     * Update Transaction
     *
     * @param mixed $form
     * @return Transaction
     */
    public function update($form) {
        return Http::Patch("/" . Sdk::VERSION . "/transactions/" . $form['id'], json_encode($form), "", array(), function($value){ return Transaction::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "TransactionService{auth=" . $this->auth . "}";
    }
}