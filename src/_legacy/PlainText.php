<?php

namespace SilverStripe\Core;

use SilverStripe\View\ViewableData;

/**
 * Default casting for ViewableData
 */
class PlainText extends ViewableData
{
    private $name;

    private $value;

    public function __construct($name = null)
    {
        $this->name = $name;
    }

    function getValue()
    {
        return $this->value;
    }

    function setValue($value)
    {
        $this->value = $value;
    }

    function forTemplate()
    {
        return $this->XML();
    }

    public function exists()
    {
        return (bool)$this->value;
    }

    public function __toString()
    {
        return (string)$this->forTemplate();
    }

    /**
     * XML encode this value
     *
     * @return string
     */
    public function RAW()
    {
        return $this->value;
    }

    /**
     * XML encode this value
     *
     * @return string
     */
    public function XML()
    {
        return Convert::raw2xml($this->value);
    }
}
