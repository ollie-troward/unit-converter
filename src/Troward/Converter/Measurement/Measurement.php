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
     * @var int
     */
    protected $precision;

    /**
     * Temperature constructor.
     *
     * @param float $input
     * @param string $unit
     * @param int $precision
     */
    public function __construct(float $input, string $unit, int $precision = 2)
    {
        $this->input = $input;
        $this->unit = $unit;
        $this->precision = $precision;
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

        return round($this->$convert(), $this->precision);
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
