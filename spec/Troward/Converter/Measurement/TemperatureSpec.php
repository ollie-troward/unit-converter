<?php

namespace spec\Troward\Converter\Measurement;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Troward\Converter\Unit\TemperatureUnit;

/**
 * Class TemperatureSpec
 * @package spec\Troward\Converter\Measurement
 */
class TemperatureSpec extends ObjectBehavior
{
    /**
     * Converts from Celsius to Fahrenheit.
     */
    function it_should_convert_celsius_into_fahrenheit()
    {
        $celsiusDegrees = 12;
        $fahrenheitDegrees = 53.6;

        $this->beConstructedWith($celsiusDegrees, TemperatureUnit::CELSIUS);

        $this->get(TemperatureUnit::FAHRENHEIT)
            ->shouldReturn($fahrenheitDegrees);
    }

    /**
     * Converts from Fahrenheit to Celsius.
     */
    function it_should_convert_fahrenheit_into_celsius()
    {
        $fahrenheitDegrees = 53.6;
        $celsiusDegrees = (float)12;

        $this->beConstructedWith($fahrenheitDegrees, TemperatureUnit::FAHRENHEIT);

        $this->get(TemperatureUnit::CELSIUS)
            ->shouldReturn($celsiusDegrees);
    }

    /**
     * Converts from Fahrenheit to Celsius and then returns original Fahrenheit.
     */
    function it_should_convert_fahrenheit_into_celsius_then_get_original_fahrenheit_after()
    {
        $fahrenheitDegrees = 53.6;
        $celsiusDegrees = (float)12;

        $this->beConstructedWith($fahrenheitDegrees, TemperatureUnit::FAHRENHEIT);

        $this->get(TemperatureUnit::CELSIUS)
            ->shouldReturn($celsiusDegrees);

        $this->get(TemperatureUnit::FAHRENHEIT)
            ->shouldReturn($fahrenheitDegrees);
    }
}
