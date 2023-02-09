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



class FundRequestService {

    /** @var Auth */
    protected $auth ;

    /**
     * FundRequestService constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
    }

    /**
     * Send FundRequest
     *
     * @param SendFundRequestForm $form
     * @return MfaProcess
     */
    public function send(SendFundRequestForm $form) {
        return Http::Post("/" . Sdk::VERSION . "/fund-requests/" . $form->getId() . "/send", $form->toJson(), "", array(), function($value){ return MfaProcess::fromArray($value); }, $this->auth);
    }

    /**
     * Cancel FundRequest
     *
     * @param CancelFundRequestForm $form
     * @return FundRequest
     */
    public function cancel(CancelFundRequestForm $form) {
        return Http::Post("/" . Sdk::VERSION . "/fund-requests/" . $form->getId() . "/cancel", $form->toJson(), "", array(), function($value){ return FundRequest::fromArray($value); }, $this->auth);
    }

    /**
     * Create FundRequest
     *
     * @param CreateFundRequestForm $form
     * @return FundRequest
     */
    public function create(CreateFundRequestForm $form) {
        return Http::Post("/" . Sdk::VERSION . "/fund-requests", $form->toJson(), "", array(), function($value){ return FundRequest::fromArray($value); }, $this->auth);
    }

    /**
     * Get FundRequest
     *
     * @param string $id
     * @return FundRequest
     */
    public function get($id) {
        return Http::Get("/" . Sdk::VERSION . "/fund-requests/" . $id, "", array(), function($value){ return FundRequest::fromArray($value); }, $this->auth);
    }

    /**
     * List FundRequest
     *
     * @param ListForm $form
     * @return RestCollection
     */
    public function listAll(ListForm $form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : $form->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/fund-requests", $qs, array(), function($value){ return FundRequest::fromArray($value); }, $this->auth);
    }

    /**
     * Update FundRequest
     *
     * @param UpdateFundRequestForm $form
     * @return FundRequest
     */
    public function update(UpdateFundRequestForm $form) {
        return Http::Patch("/" . Sdk::VERSION . "/fund-requests/" . $form->getId(), $form->toJson(), "", array(), function($value){ return FundRequest::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "FundRequestService{auth=" . $this->auth . "}";
    }
}