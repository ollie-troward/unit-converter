<?php

namespace spec\Troward\Converter\Measurement;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Troward\Converter\Unit\AreaUnit;

/**
 * Class AreaSpec
 * @package spec\Troward\Converter\Measurement
 */
class AreaSpec extends ObjectBehavior
{
    /**
     * Converts from Square Kilometer into Square Meter.
     */
    function it_should_convert_square_kilometer_into_square_meter()
    {
        $squareKiloMeters = 0.54;
        $squareMeters = (float)540000;

        $this->beConstructedWith($squareKiloMeters, AreaUnit::SQUARE_KILOMETER);

        $this->get(AreaUnit::SQUARE_METER)
            ->shouldReturn($squareMeters);
    }

    /**
     * Converts from Square Kilometer into Square Mile.
     */
    function it_should_convert_square_kilometer_into_square_mile()
    {
        $squareKiloMeters = 0.54;
        $squareMiles = (float)0.21;

        $this->beConstructedWith($squareKiloMeters, AreaUnit::SQUARE_KILOMETER);

        $this->get(AreaUnit::SQUARE_MILE)
            ->shouldReturn($squareMiles);
    }
}
