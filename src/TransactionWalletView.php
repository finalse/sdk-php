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

class TransactionWalletView implements JsonSerializable  {

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

    /** @var TransactionBeforeAfter */
    protected $before ;

    /** @var TransactionBeforeAfter */
    protected $after ;


    /** @var string */
    const Type = "TransactionWalletView";

    /**
     * TransactionWalletView constructor
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
     * @param TransactionBeforeAfter $before
     * @param TransactionBeforeAfter $after
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
                         Man $man,
                         TransactionBeforeAfter $before,
                         TransactionBeforeAfter $after) {
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
        $this->before = $before;
        $this->after = $after;
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
     * Getter of the field 'before'.
     *
     * @return TransactionBeforeAfter
     */
    public function getBefore() {
        return $this->before;
    }

    /**
     * Getter of the field 'after'.
     *
     * @return TransactionBeforeAfter
     */
    public function getAfter() {
        return $this->after;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return TransactionWalletView
     */
    public function withId($id) {
        return new TransactionWalletView($id, $this->url, $this->creator, $this->createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $this->mars, $this->mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return TransactionWalletView
     */
    public function withUrl($url) {
        return new TransactionWalletView($this->id, $url, $this->creator, $this->createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $this->mars, $this->mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'creator' has been updated with the value passed as parameter.
     *
     * @param Creator $creator
     * @return TransactionWalletView
     */
    public function withCreator(Creator $creator) {
        assert($this->creator != null, "In class TransactionWalletView the param 'creator' of type Creator can not be null");
        return new TransactionWalletView($this->id, $this->url, $creator, $this->createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $this->mars, $this->mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'createdTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $createdTime
     * @return TransactionWalletView
     */
    public function withCreatedTime(UTCDateTime $createdTime) {
        assert($this->createdTime != null, "In class TransactionWalletView the param 'createdTime' of type UTCDateTime can not be null");
        return new TransactionWalletView($this->id, $this->url, $this->creator, $createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $this->mars, $this->mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return TransactionWalletView
     */
    public function withDescription($description) {
        return new TransactionWalletView($this->id, $this->url, $this->creator, $this->createdTime,
                                         $description, $this->foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $this->mars, $this->mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'foreignId' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignId
     * @return TransactionWalletView
     */
    public function withForeignId($foreignId) {
        return new TransactionWalletView($this->id, $this->url, $this->creator, $this->createdTime,
                                         $this->description, $foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $this->mars, $this->mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return TransactionWalletView
     */
    public function withForeignData($foreignData) {
        return new TransactionWalletView($this->id, $this->url, $this->creator, $this->createdTime,
                                         $this->description, $this->foreignId, $foreignData,
                                         $this->name, $this->isMain, $this->mars, $this->mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'name' has been updated with the value passed as parameter.
     *
     * @param string $name
     * @return TransactionWalletView
     */
    public function withName($name) {
        return new TransactionWalletView($this->id, $this->url, $this->creator, $this->createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $name, $this->isMain, $this->mars, $this->mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'isMain' has been updated with the value passed as parameter.
     *
     * @param boolean $isMain
     * @return TransactionWalletView
     */
    public function withIsMain($isMain) {
        return new TransactionWalletView($this->id, $this->url, $this->creator, $this->createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $this->name, $isMain, $this->mars, $this->mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'mars' has been updated with the value passed as parameter.
     *
     * @param Mars $mars
     * @return TransactionWalletView
     */
    public function withMars(Mars $mars) {
        assert($this->mars != null, "In class TransactionWalletView the param 'mars' of type Mars can not be null");
        return new TransactionWalletView($this->id, $this->url, $this->creator, $this->createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $mars, $this->mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'mainPocket' has been updated with the value passed as parameter.
     *
     * @param Pocket $mainPocket
     * @return TransactionWalletView
     */
    public function withMainPocket(Pocket $mainPocket) {
        assert($this->mainPocket != null, "In class TransactionWalletView the param 'mainPocket' of type Pocket can not be null");
        return new TransactionWalletView($this->id, $this->url, $this->creator, $this->createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $this->mars, $mainPocket,
                                         $this->man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'man' has been updated with the value passed as parameter.
     *
     * @param Man $man
     * @return TransactionWalletView
     */
    public function withMan(Man $man) {
        assert($this->man != null, "In class TransactionWalletView the param 'man' of type Man can not be null");
        return new TransactionWalletView($this->id, $this->url, $this->creator, $this->createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $this->mars, $this->mainPocket,
                                         $man, $this->before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'before' has been updated with the value passed as parameter.
     *
     * @param TransactionBeforeAfter $before
     * @return TransactionWalletView
     */
    public function withBefore(TransactionBeforeAfter $before) {
        assert($this->before != null, "In class TransactionWalletView the param 'before' of type TransactionBeforeAfter can not be null");
        return new TransactionWalletView($this->id, $this->url, $this->creator, $this->createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $this->mars, $this->mainPocket,
                                         $this->man, $before, $this->after);
    }

    /**
     * Immutable update. Return a new TransactionWalletView where the field 'after' has been updated with the value passed as parameter.
     *
     * @param TransactionBeforeAfter $after
     * @return TransactionWalletView
     */
    public function withAfter(TransactionBeforeAfter $after) {
        assert($this->after != null, "In class TransactionWalletView the param 'after' of type TransactionBeforeAfter can not be null");
        return new TransactionWalletView($this->id, $this->url, $this->creator, $this->createdTime,
                                         $this->description, $this->foreignId, $this->foreignData,
                                         $this->name, $this->isMain, $this->mars, $this->mainPocket,
                                         $this->man, $this->before, $after);
    }

    /**
     * Create TransactionWalletView from JSON string
     *
     * @param string $json
     * @return TransactionWalletView
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransactionWalletView from associative array of its fields
     *
     * @param array $array
     * @return TransactionWalletView
     */
    public static function fromArray(array $array) {
        return new TransactionWalletView($array['id'],
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
                                         Man::fromArray($array['man']),
                                         TransactionBeforeAfter::fromArray($array['before']),
                                         TransactionBeforeAfter::fromArray($array['after']));
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
                'before' => ($this->before !== null ? $this->before->toArray() : null),
                'after' => ($this->after !== null ? $this->after->toArray() : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransactionWalletView{id=" . $this->id .
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
                                     ", man=" . $this->man .
                                     ", before=" . $this->before .
                                     ", after=" . $this->after . "}";
    }
}