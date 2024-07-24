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
     * ListAll QuasiTransfer
     *
     * @param Page $page
     * @return RestCollection
     */
    public function fetchPage(Page $page) {
        if($page == null) throw new \Exception("The page passed in argument is null. Hint:  Verify with collection->hasNextPage() first before calling this function.");
        return Http::ListAll("/" . Sdk::VERSION . "/quasi-transfers", $page->getQueryString(), array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    /**
     * Receive QuasiTransfer
     *
     * @param mixed $form
     * @return Attempt
     */
    public function receive($form) {
        return Http::Post("/" . Sdk::VERSION . "/quasi-transfers/" . $form['id'] . "/receive", json_encode($form), "", array(), function($value){ return Attempt::fromArray($value); }, $this->auth);
    }

    /**
     * Cancel QuasiTransfer
     *
     * @param string $form
     * @return QuasiTransfer
     */
    public function cancel($form) {
        return Http::Post("/" . Sdk::VERSION . "/quasi-transfers/" . $form . "/cancel", null, "", array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    /**
     * Initiate QuasiTransfer
     *
     * @param mixed $form
     * @return QuasiTransfer
     */
    public function initiate($form) {
        return Http::Post("/" . Sdk::VERSION . "/quasi-transfers/initiate", json_encode($form), "", array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    /**
     * Get QuasiTransfer
     *
     * @param string $form
     * @return QuasiTransfer
     */
    public function get($form) {
        return Http::Get("/" . Sdk::VERSION . "/quasi-transfers/" . $form, "", array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    /**
     * ListAll QuasiTransfer
     *
     * @param mixed $form
     * @return RestCollection
     */
    public function listAll($form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : ListForm::fromArray($form)->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/quasi-transfers", $qs, array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    /**
     * Update QuasiTransfer
     *
     * @param mixed $form
     * @return QuasiTransfer
     */
    public function update($form) {
        return Http::Patch("/" . Sdk::VERSION . "/quasi-transfers/" . $form['id'], json_encode($form), "", array(), function($value){ return QuasiTransfer::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "QuasiTransferService{auth=" . $this->auth . "}";
    }
}