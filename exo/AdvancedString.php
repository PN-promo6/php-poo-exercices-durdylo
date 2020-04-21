<?php

namespace exo;

class AdvancedString
{
    public $internalString;

    public function __construct($internalString)
    {
        $this->internalString = $internalString;
    }

    public function uppercase()
    {
        return strtoupper($this->internalString);
    }

    public function undercase()
    {
        return strtolower($this->internalString);
    }

    public function bold()
    {
        return "<strong> $this->internalString </strong>";
    }

    public function italic()
    {
        return "<i> $this->internalString </i>";
    }

    public function underline()
    {
        return "<u> $this->internalString </u>";
    }
}
