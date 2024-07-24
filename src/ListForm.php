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

class ListForm implements JsonSerializable  {

    /** @var string | null */
    private $filter ;

    /** @var integer | null */
    private $limit ;

    /** @var string | null */
    private $sortBy ;


    /** @var string */
    const Type = "ListForm";

    /**
     * ListForm constructor
     * @param string | null $filter
     * @param integer | null $limit
     * @param string | null $sortBy
     */
    function __construct($filter = null, $limit = null, $sortBy = null) {
        $this->filter = $filter;
        $this->limit = $limit;
        $this->sortBy = $sortBy;
    }

    /**
     * Getter of the field 'filter'.
     *
     * @return string | null
     */
    public function getFilter() {
        return $this->filter;
    }

    /**
     * Getter of the field 'limit'.
     *
     * @return integer | null
     */
    public function getLimit() {
        return $this->limit;
    }

    /**
     * Getter of the field 'sortBy'.
     *
     * @return string | null
     */
    public function getSortBy() {
        return $this->sortBy;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; }

    /**
     * Immutable update. Return a new ListForm filter the field 'filter' has been updated with the value passed as parameter.
     *
     * @param string | null $filter
     * @return ListForm
     */
    public function withFilter($filter) {
        return new ListForm($filter, $this->limit, $this->sortBy);
    }

    /**
     * Immutable update. Return a new ListForm filter the field 'limit' has been updated with the value passed as parameter.
     *
     * @param integer | null $limit
     * @return ListForm
     */
    public function withLimit($limit) {
        return new ListForm($this->filter, $limit, $this->sortBy);
    }

    /**
     * Immutable update. Return a new ListForm filter the field 'sortBy' has been updated with the value passed as parameter.
     *
     * @param string | null $sortBy
     * @return ListForm
     */
    public function withSortBy($sortBy) {
        return new ListForm($this->filter, $this->limit, $sortBy);
    }

    /**
     * Create ListForm from JSON string
     *
     * @param string $json
     * @return ListForm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create ListForm from associative array of its fields
     *
     * @param array $array
     * @return ListForm
     */
    public static function fromArray(array $array) {
        return new ListForm(
            (isset($array['filter']) ? $array['filter'] : null),
            (isset($array['limit']) ? $array['limit'] : null),
            (isset($array['sortBy']) ? $array['sortBy'] : null));
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
        return array_filter(get_object_vars($this), function ($v) { return $v !== null; });
    }

    /** @return ListForm */
    public static function None() {
        return new ListForm(null, null, null);
    }

    public function toQueryString() {
        return ($this->filter == null && $this->limit == null && $this->sortBy == null
            ? ""
            : "?" . http_build_query(get_object_vars($this)));
    }

    public function __toString() {
        return "ListForm{filter=" . $this->filter .
            ", limit=" . $this->limit .
            ", sortBy=" . $this->sortBy . "}";
    }
}