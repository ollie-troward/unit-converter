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

    /**
     * Converts from Square Kilometer into Square Yard.
     */
    function it_should_convert_square_kilometer_into_square_yard()
    {
        $squareKiloMeters = 0.12;
        $squareYards = 143518.81;

        $this->beConstructedWith($squareKiloMeters, AreaUnit::SQUARE_KILOMETER);

        $this->get(AreaUnit::SQUARE_YARD)
            ->shouldReturn($squareYards);
    }

    /**
     * Converts from Square Kilometer into Square Foot.
     */
    function it_should_convert_square_kilometer_into_square_foot()
    {
        $squareKiloMeters = 0.67;
        $squareFoot = (float)7211820;
        $precision = 0;

        $this->beConstructedWith($squareKiloMeters, AreaUnit::SQUARE_KILOMETER, $precision);

        $this->get(AreaUnit::SQUARE_FOOT)
            ->shouldReturn($squareFoot);
    }

    /**
     * Converts from Square Kilometer into Square Inch.
     */
    function it_should_convert_square_kilometer_into_square_inch()
    {
        $squareKiloMeters = 0.49;
        $squareInches = (float)759501519;

        $this->beConstructedWith($squareKiloMeters, AreaUnit::SQUARE_KILOMETER);

        $this->get(AreaUnit::SQUARE_INCH)
            ->shouldReturn($squareInches);
    }

    /**
     * Converts from Square Kilometer into Hectare.
     */
    function it_should_convert_square_kilometer_into_hectare()
    {
        $squareKiloMeters = 0.50;
        $hectares = (float)50;

        $this->beConstructedWith($squareKiloMeters, AreaUnit::SQUARE_KILOMETER);

        $this->get(AreaUnit::HECTARE)
            ->shouldReturn($hectares);
    }

    /**
     * Converts from Square Kilometer into Acre.
     */
    function it_should_convert_square_kilometer_into_acre()
    {
        $squareKiloMeters = 24;
        $acres = (float)5930.53;

        $this->beConstructedWith($squareKiloMeters, AreaUnit::SQUARE_KILOMETER);

        $this->get(AreaUnit::ACRE)
            ->shouldReturn($acres);
    }
}
