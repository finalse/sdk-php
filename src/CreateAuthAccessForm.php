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


use JsonSerializable;

class CreateAuthAccessForm implements JsonSerializable  {

    /** @var AuthAccessPermissionForm */
    protected $permission ;

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;


    /** @var string */
    const Type = "CreateAuthAccessForm";

    /**
     * CreateAuthAccessForm constructor
     * @param AuthAccessPermissionForm $permission
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     */
    function __construct(AuthAccessPermissionForm $permission,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null) {
        $this->permission = $permission;
        $this->description = $description;
        $this->foreignId = $foreignId;
        $this->foreignData = $foreignData;
    }

    /**
     * Getter of the field 'permission'.
     *
     * @return AuthAccessPermissionForm
     */
    public function getPermission() {
        return $this->permission;
    }

    /**
     * Getter of the field 'description'.
     *
     * @return string | null
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Getter of the field 'foreignId'.
     *
     * @return string | null
     */
    public function getForeignId() {
        return $this->foreignId;
    }

    /**
     * Getter of the field 'foreignData'.
     *
     * @return string | null
     */
    public function getForeignData() {
        return $this->foreignData;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new CreateAuthAccessForm where the field 'permission' has been updated with the value passed as parameter.
     *
     * @param AuthAccessPermissionForm $permission
     * @return CreateAuthAccessForm
     */
    public function withPermission(AuthAccessPermissionForm $permission) {
        assert($this->permission != null, "In class CreateAuthAccessForm the param 'permission' of type AuthAccessPermissionForm can not be null");
        return new CreateAuthAccessForm($permission, $this->description, $this->foreignId,
                                        $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateAuthAccessForm where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return CreateAuthAccessForm
     */
    public function withDescription($description) {
        return new CreateAuthAccessForm($this->permission, $description, $this->foreignId,
                                        $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateAuthAccessForm where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return CreateAuthAccessForm
     */
    public function withForeignId($foreignId) {
        return new CreateAuthAccessForm($this->permission, $this->description, $foreignId,
                                        $this->foreignData);
    }

    /**
     * Immutable update. Return a new CreateAuthAccessForm where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return CreateAuthAccessForm
     */
    public function withForeignData($foreignData) {
        return new CreateAuthAccessForm($this->permission, $this->description, $this->foreignId,
                                        $foreignData);
    }

    /**
     * Create CreateAuthAccessForm from JSON string
     *
     * @param string $json
     * @return CreateAuthAccessForm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create CreateAuthAccessForm from associative array of its fields
     *
     * @param array $array
     * @return CreateAuthAccessForm
     */
    public static function fromArray(array $array) {
        return new CreateAuthAccessForm(AuthAccessPermissionForm::fromArray($array['permission']),
                                        (isset($array['description']) ? $array['description'] : null),
                                        (isset($array['foreignId']) ? $array['foreignId'] : null),
                                        (isset($array['foreignData']) ? $array['foreignData'] : null));
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function jsonSerialize() {
        return json_encode($this->toArray());
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function toJson() {
        return $this->jsonSerialize();
    }

    /**
     * Return associative array representing this object
     *
     * @return array
     */
    public function toArray() {
        return array_filter(
            array(
                'permission' => ($this->permission !== null ? $this->permission->toArray() : null),
                'description' => $this->description,
                'foreignId' => $this->foreignId,
                'foreignData' => $this->foreignData,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "CreateAuthAccessForm{permission=" . $this->permission .
                                    ", description=" . $this->description .
                                    ", foreignId=" . $this->foreignId .
                                    ", foreignData=" . $this->foreignData . "}";
    }
}