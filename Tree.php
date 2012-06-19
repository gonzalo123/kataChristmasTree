<?php

class Tree
{
    private $level;

    const BLANK = ' ';
    const ASTERISK = '*';

    public function __construct($level)
    {
        $this->level = $level;
    }

    public function build()
    {
        $out = array();
        foreach (range(1, $this->level) as $i) {
            $out[] = str_repeat(self::BLANK, $this->level - $i) . str_repeat(self::ASTERISK, 2 * $i - 1);
        }
        return implode("\n", $out);
    }
}