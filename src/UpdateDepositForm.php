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

class UpdateDepositForm implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var array */
    protected $set ;

    /** @var array */
    protected $remove ;

    /**
     * UpdateDepositForm constructor
     * @param string $id
     * @param array $remove
     * @param array $set
     */
    function __construct($id, array $remove, array $set) {
        $this->id     = $id;
        $this->set    = $set;
        $this->remove = $remove;
    }

    public static function byId($id) {
        return new UpdateDepositForm($id, array(), array());
    }

    /**
     * Remove the field 'description'
     *
     * @return UpdateDepositForm
     */
    public function removeDescription() {
        $remove = array_merge($this->remove, array('description'));
        return new UpdateDepositForm($this->id, $remove, $this->set);
    }

    /**
     * Remove the field 'foreignId'
     *
     * @return UpdateDepositForm
     */
    public function removeForeignId() {
        $remove = array_merge($this->remove, array('foreignId'));
        return new UpdateDepositForm($this->id, $remove, $this->set);
    }

    /**
     * Remove the field 'foreignData'
     *
     * @return UpdateDepositForm
     */
    public function removeForeignData() {
        $remove = array_merge($this->remove, array('foreignData'));
        return new UpdateDepositForm($this->id, $remove, $this->set);
    }

    /**
     * Set a new value to update the field 'description' 
     *
     * @param string | null $description
     * @return UpdateDepositForm
     */
    public function setDescription($description) {
        if($description == null) return $this;
        $set = array_merge($this->set, array('description' => $description));
        return new UpdateDepositForm($this->id, $this->remove, $set);
    }

    /**
     * Set a new value to update the field 'foreignId' 
     *
     * @param string | null $foreignId
     * @return UpdateDepositForm
     */
    public function setForeignId($foreignId) {
        if($foreignId == null) return $this;
        $set = array_merge($this->set, array('foreignId' => $foreignId));
        return new UpdateDepositForm($this->id, $this->remove, $set);
    }

    /**
     * Set a new value to update the field 'foreignData' 
     *
     * @param string | null $foreignData
     * @return UpdateDepositForm
     */
    public function setForeignData($foreignData) {
        if($foreignData == null) return $this;
        $set = array_merge($this->set, array('foreignData' => $foreignData));
        return new UpdateDepositForm($this->id, $this->remove, $set);
    }

    /**
     * Getter of the field 'id'.
     *
     * @return string
     */
    public function getId() {
        return $this->id;
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
        return array('set' => $this->set, 'remove' => $this->remove);
    }

    public function __toString() {
        return "UpdateDepositForm{id=" . $this->id .
                                 ", remove=" . $this->remove .
                                 ", set=" . $this->set . "}";
    }
}