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
     * Converts from Celsius into Fahrenheit.
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
     * Converts from Celsius into Kelvin.
     */
    function it_should_convert_celsius_into_kelvin()
    {
        $celsiusDegrees = 12.0068;
        $kelvinDegrees = 285.16;

        $this->beConstructedWith($celsiusDegrees, TemperatureUnit::CELSIUS);

        $this->get(TemperatureUnit::KELVIN)
            ->shouldReturn($kelvinDegrees);
    }

    /**
     * Converts from Fahrenheit into Celsius.
     */
    function it_should_convert_fahrenheit_into_celsius()
    {
        $fahrenheitDegrees = 53.34;
        $celsiusDegrees = 11.86;

        $this->beConstructedWith($fahrenheitDegrees, TemperatureUnit::FAHRENHEIT);

        $this->get(TemperatureUnit::CELSIUS)
            ->shouldReturn($celsiusDegrees);
    }

    /**
     * Converts from Fahrenheit into Kelvin.
     */
    function it_should_convert_fahrenheit_into_kelvin()
    {
        $fahrenheitDegrees = 53.34;
        $kelvinDegrees = 285.01;

        $this->beConstructedWith($fahrenheitDegrees, TemperatureUnit::FAHRENHEIT);

        $this->get(TemperatureUnit::KELVIN)
            ->shouldReturn($kelvinDegrees);
    }

    /**
     * Converts from Kelvin into Celsius.
     */
    function it_should_convert_kelvin_into_celsius()
    {
        $kelvinDegrees = 285.01;
        $celsiusDegrees = 11.86;

        $this->beConstructedWith($kelvinDegrees, TemperatureUnit::KELVIN);

        $this->get(TemperatureUnit::CELSIUS)
            ->shouldReturn($celsiusDegrees);
    }

    /**
     * Converts from Kelvin into Fahrenheit.
     */
    function it_should_convert_kelvin_into_fahrenheit()
    {
        $kelvinDegrees = 285.01;
        $fahrenheitDegrees = 53.35;

        $this->beConstructedWith($kelvinDegrees, TemperatureUnit::KELVIN);

        $this->get(TemperatureUnit::FAHRENHEIT)
            ->shouldReturn($fahrenheitDegrees);
    }

    /**
     * Converts from Fahrenheit to Celsius and then returns original Fahrenheit.
     */
    function it_should_convert_fahrenheit_into_celsius_then_get_original_fahrenheit_after()
    {
        $fahrenheitDegrees = 53.78;
        $celsiusDegrees = 12.1;

        $this->beConstructedWith($fahrenheitDegrees, TemperatureUnit::FAHRENHEIT);

        $this->get(TemperatureUnit::CELSIUS)
            ->shouldReturn($celsiusDegrees);

        $this->get(TemperatureUnit::FAHRENHEIT)
            ->shouldReturn($fahrenheitDegrees);
    }

    /**
     * Give correct values with negative values.
     */
    function it_should_give_correct_negative_conversion()
    {
        $fahrenheitDegrees = -53.6;
        $celsiusDegrees = -47.56;

        $this->beConstructedWith($fahrenheitDegrees, TemperatureUnit::FAHRENHEIT);

        $this->get(TemperatureUnit::CELSIUS)
            ->shouldReturn($celsiusDegrees);
    }

    /**
     * It should have the precision configurable.
     */
    function it_should_have_a_configurable_precision()
    {
        $fahrenheitDegrees = 53.612312;
        $celsiusDegrees = 12.0068;
        $precision = 4;

        $this->beConstructedWith($fahrenheitDegrees, TemperatureUnit::FAHRENHEIT, $precision);

        $this->get(TemperatureUnit::CELSIUS)
            ->shouldReturn($celsiusDegrees);

        $this->get(TemperatureUnit::FAHRENHEIT)
            ->shouldReturn($fahrenheitDegrees);
    }
}
