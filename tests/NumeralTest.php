<?php

require './converterModel.php';

class NumeralTest extends \PHPUnit\Framework\TestCase{

    #Test inputs
    public function test_invalid_input_gatekeeping()
    {
        $numeral = new Numeral("s");
        $userInput = $numeral->gatekeepNumerals();
        $expected_result = "<p>Please only enter valid Roman numerals.</p>";

        $this->assertEquals($expected_result, $userInput);
    }

    public function test_valid_input_gatekeeping()
    {
        $numeral = new Numeral("i");
        $actual = $numeral->gatekeepNumerals();
        $expected_result = ["I"];

        $this->assertTrue($expected_result === $actual);
    }

    #Test Conversions
    public function test_latin_notation_is_correctly_converted_into_decimal_notation()
    {
        $numeral = new Numeral("ivxlcdm");
        $numeral->gatekeepNumerals();
        $actual = $numeral->convertLatinNotationIntoDecimalNotation();
        $expected_result = [1,5,10,50,100,500,1000];

        $this->assertEquals($expected_result,  $actual);
    }

    public function test_latin_values_are_correctly_converted_into_decimal_values()
    {
        $numeral = new Numeral("mcmxcix");
        $numeral->gatekeepNumerals();
        $numeral->convertLatinNotationIntoDecimalNotation();
        $actual = $numeral->convertLatinCountingIntoDecimalCounting();
        $expected_results = 1999;

        $this->assertEquals($expected_results, $actual);


    }


}