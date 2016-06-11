<?php

namespace Troward\Converter\Measurement;

use Troward\Converter\Unit\AreaUnit;

/**
 * Class Area
 * @package Troward\Converter\Measurement
 */
class Area extends Measurement
{
    /**
     * Area constructor.
     *
     * @param float $input
     * @param string $unit
     * @param float $precision
     */
    public function __construct(float $input, string $unit, float $precision = 2)
    {
        $this->validateUnit(AreaUnit::class, $unit);
        parent::__construct($input, $unit, $precision);
    }

    /**
     * Convert Square Kilometers to Square Meters.
     *
     * @return float
     */
    protected function convertkm²Tom²() : float
    {
        return $this->input * 1000000;
    }

    /**
     * Convert Square Kilometers to Square Miles.
     *
     * @return float
     */
    protected function convertkm²Tomile²() : float
    {
        return $this->input * 0.38610;
    }

    /**
     * Convert Square Kilometers to Square Yards.
     *
     * @return float
     */
    protected function convertkm²Toyd²() : float
    {
        return $this->input / 0.00000083612736;
    }

    /**
     * Convert Square Kilometers to Square Feet.
     *
     * @return float
     */
    protected function convertkm²Toft²() : float
    {
        return $this->input / 0.00000009290304;
    }

    /**
     * Convert Square Kilometers to Square Inches.
     *
     * @return float
     */
    protected function convertkm²Toin²() : float
    {
        return $this->input / 0.00000000064516;
    }

    /**
     * Convert Square Kilometers to Hectares.
     *
     * @return float
     */
    protected function convertkm²Toha() : float
    {
        return $this->input * 100;
    }

    /**
     * Convert Square Kilometers to Acres.
     *
     * @return float
     */
    protected function convertkm²Toacre() : float
    {
        return $this->input / 0.00404685642;
    }
}
