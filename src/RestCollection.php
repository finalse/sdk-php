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

class RestCollection implements JsonSerializable  {

    /** @var string */
    private $url ;

    /** @var Pagination */
    private $pagination ;

    /** @var array */
    private $items ;


    /** @var string */
    const Type = "RestCollection";

    /**
     * RestCollection constructor
     * @param string $url
     * @param Pagination $pagination
     * @param array $items
     */
    protected function __construct($url, Pagination $pagination, array $items) {
        $this->url = $url;
        $this->pagination = $pagination;
        $this->items = $items;
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
     * Getter of the field 'pagination'.
     *
     * @return Pagination
     */
    public function getPagination() {
        return $this->pagination;
    }

    /**
     * Get all items in this RestCollection
     *
     * @return array
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; }

    /**
     * Immutable update. Return a new RestCollection where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return RestCollection
     */
    public function withUrl($url) {
        return new RestCollection($url, $this->pagination, $this->items);
    }

    /**
     * Immutable update. Return a new RestCollection where the field 'pagination' has been updated with the value passed as parameter.
     *
     * @param Pagination $pagination
     * @return RestCollection
     */
    public function withPagination(Pagination $pagination) {
        assert($this->pagination != null, "In class RestCollection the param 'pagination' of type Pagination can not be null");
        return new RestCollection($this->url, $pagination, $this->items);
    }

    /**
     * Immutable update. Return a new RestCollection where the field 'items' has been updated with the value passed as parameter.
     *
     * @param array $items
     * @return RestCollection
     */
    public function withItems(array $items) {
        assert($this->items != null, "In class RestCollection the param 'items' of type array can not be null");
        return new RestCollection($this->url, $this->pagination, $items);
    }

    /**
     * Create RestCollection from JSON string
     *
     * @param string $json
     * @param callable $itemConverter Callable to convert an item from array
     * @return RestCollection
     */
    public static function fromJson($json, callable $itemConverter) {
        $array = json_decode($json, true);
        return self::fromArray($array, $itemConverter);
    }

    /**
     * Create RestCollection from associative array of its fields
     *
     * @param array $array
     * @param callable $itemConverter Callable to convert an item from array
     * @return RestCollection
     */
    public static function fromArray(array $array, callable $itemConverter) {
        $items = array_map($itemConverter, $array['items']);
        return new RestCollection($array['url'],
            Pagination::fromArray($array['pagination']),
            $items);
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function jsonSerialize() {
        $vars = array_filter(get_object_vars($this), function ($v) { return $v !== null; });
        return json_encode($vars);
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function toJson() {
        return $this->jsonSerialize();
    }

    public function __toString() {
        return "RestCollection{url=" . $this->url .
            ", pagination=" . $this->pagination .
            ", items=" . $this->items . "}";
    }
}