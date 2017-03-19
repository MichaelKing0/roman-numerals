<?php

namespace MichaelKing0\RomanNumerals;

class Roman
{
    const THOUSAND_INDICATOR = '_';

    protected $numeral;
    protected $details;

    private $romans = array(
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'V' => 5,
        'I' => 1,
    );

    public function __construct($numeral)
    {
        $this->numeral = $numeral;

        return $this;
    }

    public function getGroup($numerals)
    {
        $numerals = str_split($numerals);

        $keys = array_keys($this->romans);

        $group = [];
        for ($i = 0; $i < count($numerals); $i++) {
            if ($numerals[$i] == '_') {
                $group[] = $numerals[$i];
                continue;
            }
            if (array_key_exists($i + 1, $numerals) && array_search($numerals[$i], $keys) > array_search($numerals[$i + 1], $keys)) {
                $group[] = $numerals[$i];
                continue;
            }
            $group[] = $numerals[$i];
            break;
        }

        return implode('', $group);
    }

    public function parse()
    {
        $details = [];

        for ($i = 0; $i < strlen($this->numeral); $i++) {

        }

        return $this;
    }

    public function getDetails()
    {

    }

    public function getDecimal()
    {

    }
}