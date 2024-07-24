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


use JsonSerializable;

class Wallet implements JsonSerializable  {

    /** @var string */
    protected $id ;

    /** @var string */
    protected $url ;

    /** @var Creator */
    protected $creator ;

    /** @var UTCDateTime */
    protected $createdTime ;

    /** @var string | null */
    protected $description ;

    /** @var string | null */
    protected $foreignId ;

    /** @var string | null */
    protected $foreignData ;

    /** @var string */
    protected $name ;

    /** @var boolean */
    protected $isMain ;

    /** @var Mars */
    protected $mars ;

    /** @var Pocket */
    protected $mainPocket ;

    /** @var Man */
    protected $man ;


    /** @var string */
    const Type = "Wallet";

    /**
     * Wallet constructor
     * @param string $id
     * @param string $url
     * @param Creator $creator
     * @param UTCDateTime $createdTime
     * @param string | null $description
     * @param string | null $foreignId
     * @param string | null $foreignData
     * @param string $name
     * @param boolean $isMain
     * @param Mars $mars
     * @param Pocket $mainPocket
     * @param Man $man
     */
    function __construct($id,
                         $url,
                         Creator $creator,
                         UTCDateTime $createdTime,
                         $description = null,
                         $foreignId = null,
                         $foreignData = null,
                         $name,
                         $isMain,
                         Mars $mars,
                         Pocket $mainPocket,
                         Man $man) {
        $this->id = $id;
        $this->url = $url;
        $this->creator = $creator;
        $this->createdTime = $createdTime;
        $this->description = $description;
        $this->foreignId = $foreignId;
        $this->foreignData = $foreignData;
        $this->name = $name;
        $this->isMain = $isMain;
        $this->mars = $mars;
        $this->mainPocket = $mainPocket;
        $this->man = $man;
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
     * Getter of the field 'url'.
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Getter of the field 'creator'.
     *
     * @return Creator
     */
    public function getCreator() {
        return $this->creator;
    }

    /**
     * Getter of the field 'createdTime'.
     *
     * @return UTCDateTime
     */
    public function getCreatedTime() {
        return $this->createdTime;
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
     * Getter of the field 'name'.
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Getter of the field 'isMain'.
     *
     * @return boolean
     */
    public function isMain() {
        return $this->isMain;
    }

    /**
     * Getter of the field 'mars'.
     *
     * @return Mars
     */
    public function getMars() {
        return $this->mars;
    }

    /**
     * Getter of the field 'mainPocket'.
     *
     * @return Pocket
     */
    public function getMainPocket() {
        return $this->mainPocket;
    }

    /**
     * Getter of the field 'man'.
     *
     * @return Man
     */
    public function getMan() {
        return $this->man;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Wallet where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return Wallet
     */
    public function withId($id) {
        return new Wallet($id, $this->url, $this->creator, $this->createdTime, $this->description,
                          $this->foreignId, $this->foreignData, $this->name, $this->isMain,
                          $this->mars, $this->mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return Wallet
     */
    public function withUrl($url) {
        return new Wallet($this->id, $url, $this->creator, $this->createdTime, $this->description,
                          $this->foreignId, $this->foreignData, $this->name, $this->isMain,
                          $this->mars, $this->mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'creator' has been updated with the value passed as parameter.
     *
     * @param Creator $creator
     * @return Wallet
     */
    public function withCreator(Creator $creator) {
        assert($this->creator != null, "In class Wallet the param 'creator' of type Creator can not be null");
        return new Wallet($this->id, $this->url, $creator, $this->createdTime, $this->description,
                          $this->foreignId, $this->foreignData, $this->name, $this->isMain,
                          $this->mars, $this->mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return Wallet
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class Wallet the param 'createdTime' of type UTCDateTime can not be null");
        return new Wallet($this->id, $this->url, $this->creator, $createdTime, $this->description,
                          $this->foreignId, $this->foreignData, $this->name, $this->isMain,
                          $this->mars, $this->mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return Wallet
     */
    public function withDescription($description) {
        return new Wallet($this->id, $this->url, $this->creator, $this->createdTime, $description,
                          $this->foreignId, $this->foreignData, $this->name, $this->isMain,
                          $this->mars, $this->mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return Wallet
     */
    public function withForeignId($foreignId) {
        return new Wallet($this->id, $this->url, $this->creator, $this->createdTime, $this->description,
                          $foreignId, $this->foreignData, $this->name, $this->isMain, $this->mars,
                          $this->mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return Wallet
     */
    public function withForeignData($foreignData) {
        return new Wallet($this->id, $this->url, $this->creator, $this->createdTime, $this->description,
                          $this->foreignId, $foreignData, $this->name, $this->isMain, $this->mars,
                          $this->mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'name' has been updated with the value passed as parameter.
     *
     * @param string $name
     * @return Wallet
     */
    public function withName($name) {
        return new Wallet($this->id, $this->url, $this->creator, $this->createdTime, $this->description,
                          $this->foreignId, $this->foreignData, $name, $this->isMain, $this->mars,
                          $this->mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'isMain' has been updated with the value passed as parameter.
     *
     * @param boolean $isMain
     * @return Wallet
     */
    public function withIsMain($isMain) {
        return new Wallet($this->id, $this->url, $this->creator, $this->createdTime, $this->description,
                          $this->foreignId, $this->foreignData, $this->name, $isMain, $this->mars,
                          $this->mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'mars' has been updated with the value passed as parameter.
     *
     * @param Mars $mars
     * @return Wallet
     */
    public function withMars(Mars $mars) {
        assert($this->mars != null, "In class Wallet the param 'mars' of type Mars can not be null");
        return new Wallet($this->id, $this->url, $this->creator, $this->createdTime, $this->description,
                          $this->foreignId, $this->foreignData, $this->name, $this->isMain,
                          $mars, $this->mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'mainPocket' has been updated with the value passed as parameter.
     *
     * @param Pocket $mainPocket
     * @return Wallet
     */
    public function withMainPocket(Pocket $mainPocket) {
        assert($this->mainPocket != null, "In class Wallet the param 'mainPocket' of type Pocket can not be null");
        return new Wallet($this->id, $this->url, $this->creator, $this->createdTime, $this->description,
                          $this->foreignId, $this->foreignData, $this->name, $this->isMain,
                          $this->mars, $mainPocket, $this->man);
    }

    /**
     * Immutable update. Return a new Wallet where the field 'man' has been updated with the value passed as parameter.
     *
     * @param Man $man
     * @return Wallet
     */
    public function withMan(Man $man) {
        assert($this->man != null, "In class Wallet the param 'man' of type Man can not be null");
        return new Wallet($this->id, $this->url, $this->creator, $this->createdTime, $this->description,
                          $this->foreignId, $this->foreignData, $this->name, $this->isMain,
                          $this->mars, $this->mainPocket, $man);
    }

    /**
     * Create Wallet from JSON string
     *
     * @param string $json
     * @return Wallet
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Wallet from associative array of its fields
     *
     * @param array $array
     * @return Wallet
     */
    public static function fromArray(array $array) {
        return new Wallet($array['id'],
                          $array['url'],
                          Creator::fromArray($array['creator']),
                          UTCDateTime::fromArray($array['createdTime']),
                          (isset($array['description']) ? $array['description'] : null),
                          (isset($array['foreignId']) ? $array['foreignId'] : null),
                          (isset($array['foreignData']) ? $array['foreignData'] : null),
                          $array['name'],
                          $array['isMain'],
                          Mars::fromArray($array['mars']),
                          Pocket::fromArray($array['mainPocket']),
                          Man::fromArray($array['man']));
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
                'id' => $this->id,
                'url' => $this->url,
                'creator' => ($this->creator !== null ? $this->creator->toArray() : null),
                'createdTime' => ($this->createdTime !== null ? $this->createdTime->toArray() : null),
                'description' => $this->description,
                'foreignId' => $this->foreignId,
                'foreignData' => $this->foreignData,
                'name' => $this->name,
                'isMain' => $this->isMain,
                'mars' => ($this->mars !== null ? $this->mars->toArray() : null),
                'mainPocket' => ($this->mainPocket !== null ? $this->mainPocket->toArray() : null),
                'man' => ($this->man !== null ? $this->man->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Wallet{id=" . $this->id .
                      ", url=" . $this->url .
                      ", creator=" . $this->creator .
                      ", createdTime=" . $this->createdTime .
                      ", description=" . $this->description .
                      ", foreignId=" . $this->foreignId .
                      ", foreignData=" . $this->foreignData .
                      ", name=" . $this->name .
                      ", isMain=" . $this->isMain .
                      ", mars=" . $this->mars .
                      ", mainPocket=" . $this->mainPocket .
                      ", man=" . $this->man . "}";
    }
}