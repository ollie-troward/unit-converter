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
    protected function convertkm²Tom²()
    {
        return $this->input * 1000000;
    }

    /**
     * Convert Square Kilometers to Square Miles.
     *
     * @return float
     */
    protected function convertkm²Tomile²()
    {
        return $this->input * 0.38610;
    }
}
