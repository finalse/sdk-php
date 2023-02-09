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

class TransferDestinationItemCollection implements JsonSerializable  {

    /** @var array */
    protected $items ;


    /** @var string */
    const Type = "TransferDestinationItemCollection";

    /**
     * TransferDestinationItemCollection constructor
     * @param array $items
     */
    function __construct(array $items) {
        $this->items = $items;
    }

    /**
     * Getter of the field 'items'.
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
     * Immutable update. Return a new TransferDestinationItemCollection where the field 'items' has been updated with the value passed as parameter.
     *
     * @param array $items
     * @return TransferDestinationItemCollection
     */
    public function withItems(array $items) {
        assert($this->items != null, "In class TransferDestinationItemCollection the param 'items' of type array can not be null");
        return new TransferDestinationItemCollection($items);
    }

    /**
     * Create TransferDestinationItemCollection from JSON string
     *
     * @param string $json
     * @return TransferDestinationItemCollection
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create TransferDestinationItemCollection from associative array of its fields
     *
     * @param array $array
     * @return TransferDestinationItemCollection
     */
    public static function fromArray(array $array) {
        return new TransferDestinationItemCollection(array_map(function($el){ return TransferDestinationItem::fromArray($el); }, $array['items']));
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
                'items' => ($this->items !== null ? array_map(function($el){ return $el->toArray(); }, $this->items) : null),
            )
            , function ($v) { return $v !== null; }
        );
    }

    public function __toString() {
        return "TransferDestinationItemCollection{items=" . $this->items . "}";
    }
}