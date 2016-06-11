<?php

namespace Troward\Converter\Measurement;

use Troward\Converter\Unit\TemperatureUnit;

/**
 * Class Temperature
 * @package Troward\Converter\Measurement
 */
class Temperature extends Measurement
{
    /**
     * Temperature constructor.
     *
     * @param float $input
     * @param string $unit
     * @param int $precision
     */
    public function __construct(float $input, string $unit, int $precision = 2)
    {
        $this->validateUnit(TemperatureUnit::class, $unit);
        parent::__construct($input, $unit, $precision);
    }

    /**
     * Convert Celsius to Fahrenheit.
     *
     * @return float
     */
    protected function convert°CTo°F() : float
    {
        return ($this->input * 1.8) + 32;
    }

    /**
     * Convert Celsius to Kelvin.
     *
     * @return float
     */
    protected function convert°CTo°K() : float
    {
        return $this->input + 273.15;
    }

    /**
     * Convert Fahrenheit to Celsius.
     *
     * @return float
     */
    protected function convert°FTo°C() : float
    {
        return ($this->input - 32) / 1.8;
    }

    /**
     * Convert Fahrenheit to Kelvin.
     *
     * @return float
     */
    protected function convert°FTo°K() : float
    {
        return ((($this->input - 32) * 5) / 9) + 273.15;
    }

    /**
     * Convert Kelvin to Celsius.
     *
     * @return float
     */
    protected function convert°KTo°C() : float
    {
        return $this->input - 273.15;
    }

    /**
     * Convert Kelvin to Fahrenheit.
     *
     * @return float
     */
    protected function convert°KTo°F() : float
    {
        return (($this->input - 273.15) * 1.8) + 32;
    }
}
