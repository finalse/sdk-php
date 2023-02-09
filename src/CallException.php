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


class CallException extends \Exception {
    public $statusCode;
    public $statusMessage;
    public $body;

    public function __construct($statusCode, $statusMessage, $body)
    {
        $this->statusCode = $statusCode;
        $this->statusMessage = $statusMessage;
        $this->body = $body;
        parent::__construct($body, $statusCode);
    }
}