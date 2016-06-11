<?php

namespace Troward\Converter\Measurement;

use Troward\Converter\Unit\Unit;

/**
 * Class Measurement
 * @package Troward\Converter\Measurement
 */
class Measurement
{
    /**
     * @var float
     */
    protected $input;

    /**
     * @var string
     */
    protected $unit;

    /**
     * Temperature constructor.
     *
     * @param float $input
     * @param string $unit
     */
    public function __construct(float $input, string $unit)
    {
        $this->input = $input;
        $this->unit = $unit;
    }

    /**
     * Convert and retrieve the unit.
     *
     * @param string $unit
     *
     * @return mixed
     */
    public function get(string $unit)
    {
        if ($unit == $this->unit) {
            return $this->input;
        }

        $convert = 'convert' . $this->unit . 'To' . $unit;

        return $this->$convert();
    }

    /**
     * Validate the unit.
     *
     * @param string $unitClass
     * @param string $unit
     *
     * @return void
     */
    protected function validateUnit(string $unitClass, string $unit)
    {
        $unitOptions = (new \ReflectionClass($unitClass))
            ->getConstants();

        if (!in_array($unit, $unitOptions)) {
            throw new \InvalidArgumentException('Invalid Unit type: ' . $unit);
        }
    }
}