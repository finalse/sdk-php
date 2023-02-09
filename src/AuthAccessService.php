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



class AuthAccessService {

    /** @var Auth */
    protected $auth ;

    /**
     * AuthAccessService constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
    }

    /**
     * Create AuthAccess
     *
     * @param CreateAuthAccessForm $form
     * @return AuthAccess
     */
    public function create(CreateAuthAccessForm $form) {
        return Http::Post("/" . Sdk::VERSION . "/auth-access", $form->toJson(), "", array(), function($value){ return AuthAccess::fromArray($value); }, $this->auth);
    }

    /**
     * Get AuthAccess
     *
     * @param string $id
     * @return AuthAccess
     */
    public function get($id) {
        return Http::Get("/" . Sdk::VERSION . "/auth-access/" . $id, "", array(), function($value){ return AuthAccess::fromArray($value); }, $this->auth);
    }

    /**
     * List AuthAccess
     *
     * @param ListForm $form
     * @return RestCollection
     */
    public function listAll(ListForm $form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : $form->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/auth-access", $qs, array(), function($value){ return AuthAccess::fromArray($value); }, $this->auth);
    }

    /**
     * Update AuthAccess
     *
     * @param UpdateAuthAccessForm $form
     * @return AuthAccess
     */
    public function update(UpdateAuthAccessForm $form) {
        return Http::Patch("/" . Sdk::VERSION . "/auth-access/" . $form->getId(), $form->toJson(), "", array(), function($value){ return AuthAccess::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "AuthAccessService{auth=" . $this->auth . "}";
    }
}