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
     */
    public function __construct(float $input, string $unit)
    {
        $this->validateUnit(TemperatureUnit::class, $unit);
        parent::__construct($input, $unit);
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
        //
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
        //
    }

    /**
     * Convert Kelvin to Celsius.
     *
     * @return float
     */
    protected function convert°KTo°C() : float
    {
        //
    }

    /**
     * Convert Kelvin to Fahrenheit.
     *
     * @return float
     */
    protected function convert°KTo°F() : float
    {
        //
    }
}
