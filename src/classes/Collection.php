<?php

namespace TobyMaxham\Helper;

/**
 * Class Collection
 * @package TobyMaxham\Helper
 * @author Tobias Maxham <git2017@maxham.de>
 */
class Collection implements \ArrayAccess, \IteratorAggregate
{
    /**
     * @var array $items
     */
    private $_items = [];

    public function __construct($items)
    {
        if (!is_array($items)) {
            $this->_items[] = $items;
        } else {
            $this->_items = $items;
        }
    }

    /**
     * @return mixed
     */
    public function first()
    {
        return reset($this->_items);
    }

    /**
     * @return mixed
     */
    public function last()
    {
        return end($this->_items);
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->_items[$offset]);
    }

    /**
     * @param mixed $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        if (!isset($this->_items[$offset])) {
            return null;
        }

        return $this->_items[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if (null == $offset) {
            $this->_items[] = $value;
        } else {
            $this->_items[$offset] = $value;
        }
    }

    public function add($key, $value)
    {
        $this->offsetSet($key, $value);

        return $this;
    }

    public function offsetUnset($offset)
    {
        unset($this->_items[$offset]);
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->_items);
    }
}
