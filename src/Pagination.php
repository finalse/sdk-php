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

class Pagination implements JsonSerializable  {

    /** @var Page */
    protected $currentPage ;

    /** @var Page | null */
    protected $previousPage ;

    /** @var Page | null */
    protected $nextPage ;

    /** @var string */
    protected $startedTime ;

    /** @var integer */
    protected $nbItemsOnCurrentPage ;

    /** @var integer */
    protected $nbItemsPerPage ;


    /** @var string */
    const Type = "Pagination";

    /**
     * Pagination constructor
     * @param Page $currentPage
     * @param Page | null $previousPage
     * @param Page | null $nextPage
     * @param string $startedTime
     * @param integer $nbItemsOnCurrentPage
     * @param integer $nbItemsPerPage
     */
    function __construct(Page $currentPage,
                         $previousPage = null,
                         $nextPage = null,
                         $startedTime,
                         $nbItemsOnCurrentPage,
                         $nbItemsPerPage) {
        $this->currentPage = $currentPage;
        $this->previousPage = $previousPage;
        $this->nextPage = $nextPage;
        $this->startedTime = $startedTime;
        $this->nbItemsOnCurrentPage = $nbItemsOnCurrentPage;
        $this->nbItemsPerPage = $nbItemsPerPage;
    }

    /**
     * Getter of the field 'currentPage'.
     *
     * @return Page
     */
    public function getCurrentPage() {
        return $this->currentPage;
    }

    /**
     * Getter of the field 'previousPage'.
     *
     * @return Page | null
     */
    public function getPreviousPage() {
        return $this->previousPage;
    }

    /**
     * Getter of the field 'nextPage'.
     *
     * @return Page | null
     */
    public function getNextPage() {
        return $this->nextPage;
    }

    /**
     * Getter of the field 'startedTime'.
     *
     * @return string
     */
    public function getStartedTime() {
        return $this->startedTime;
    }

    /**
     * Getter of the field 'nbItemsOnCurrentPage'.
     *
     * @return integer
     */
    public function getNbItemsOnCurrentPage() {
        return $this->nbItemsOnCurrentPage;
    }

    /**
     * Getter of the field 'nbItemsPerPage'.
     *
     * @return integer
     */
    public function getNbItemsPerPage() {
        return $this->nbItemsPerPage;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Pagination where the field 'currentPage' has been updated with the value passed as parameter.
     *
     * @param Page $currentPage
     * @return Pagination
     */
    public function withCurrentPage(Page $currentPage) {
        assert($this->currentPage != null, "In class Pagination the param 'currentPage' of type Page can not be null");
        return new Pagination($currentPage, $this->previousPage, $this->nextPage, $this->startedTime,
                              $this->nbItemsOnCurrentPage, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'previousPage' has been updated with the value passed as parameter.
     *
     * @param Page | null $previousPage
     * @return Pagination
     */
    public function withPreviousPage($previousPage) {
        assert($this->previousPage != null, "In class Pagination the param 'previousPage' of type Page | null can not be null");
        return new Pagination($this->currentPage, $previousPage, $this->nextPage, $this->startedTime,
                              $this->nbItemsOnCurrentPage, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'nextPage' has been updated with the value passed as parameter.
     *
     * @param Page | null $nextPage
     * @return Pagination
     */
    public function withNextPage($nextPage) {
        assert($this->nextPage != null, "In class Pagination the param 'nextPage' of type Page | null can not be null");
        return new Pagination($this->currentPage, $this->previousPage, $nextPage, $this->startedTime,
                              $this->nbItemsOnCurrentPage, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'startedTime' has been updated with the value passed as parameter.
     *
     * @param string $startedTime
     * @return Pagination
     */
    public function withStartedTime($startedTime) {
        return new Pagination($this->currentPage, $this->previousPage, $this->nextPage, $startedTime,
                              $this->nbItemsOnCurrentPage, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'nbItemsOnCurrentPage' has been updated with the value passed as parameter.
     *
     * @param integer $nbItemsOnCurrentPage
     * @return Pagination
     */
    public function withNbItemsOnCurrentPage($nbItemsOnCurrentPage) {
        return new Pagination($this->currentPage, $this->previousPage, $this->nextPage, $this->startedTime,
                              $nbItemsOnCurrentPage, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'nbItemsPerPage' has been updated with the value passed as parameter.
     *
     * @param integer $nbItemsPerPage
     * @return Pagination
     */
    public function withNbItemsPerPage($nbItemsPerPage) {
        return new Pagination($this->currentPage, $this->previousPage, $this->nextPage, $this->startedTime,
                              $this->nbItemsOnCurrentPage, $nbItemsPerPage);
    }

    /**
     * Create Pagination from JSON string
     *
     * @param string $json
     * @return Pagination
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Pagination from associative array of its fields
     *
     * @param array $array
     * @return Pagination
     */
    public static function fromArray(array $array) {
        return new Pagination(Page::fromArray($array['currentPage']),
                              (isset($array['previousPage']) ? Page::fromArray($array['previousPage']) : null),
                              (isset($array['nextPage']) ? Page::fromArray($array['nextPage']) : null),
                              $array['startedTime'],
                              $array['nbItemsOnCurrentPage'],
                              $array['nbItemsPerPage']);
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
                'currentPage' => ($this->currentPage !== null ? $this->currentPage->toArray() : null),
                'previousPage' => ($this->previousPage !== null ? $this->previousPage->toArray() : null),
                'nextPage' => ($this->nextPage !== null ? $this->nextPage->toArray() : null),
                'startedTime' => $this->startedTime,
                'nbItemsOnCurrentPage' => $this->nbItemsOnCurrentPage,
                'nbItemsPerPage' => $this->nbItemsPerPage,
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "Pagination{currentPage=" . $this->currentPage .
                          ", previousPage=" . $this->previousPage .
                          ", nextPage=" . $this->nextPage .
                          ", startedTime=" . $this->startedTime .
                          ", nbItemsOnCurrentPage=" . $this->nbItemsOnCurrentPage .
                          ", nbItemsPerPage=" . $this->nbItemsPerPage . "}";
    }
}