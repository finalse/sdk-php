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



class AttemptService {

    /** @var Auth */
    protected $auth ;

    /**
     * AttemptService constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
    }

    /**
     * Get Attempt
     *
     * @param string $form
     * @return Attempt
     */
    public function get($form) {
        return Http::Get("/" . Sdk::VERSION . "/attempts/" . $form, "", array(), function($value){ return Attempt::fromArray($value); }, $this->auth);
    }

    public function __toString() {
        return "AttemptService{auth=" . $this->auth . "}";
    }
}