<?php

    require_once "src/Scrabble.php";

    class ScrabbleGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_calculateScore_checkOutputForOneLetters()
        {
            // Setup test
            $test_ScrabbleGenerator = new ScrabbleGenerator;
            $input = 'Q';

            //Act
            $result = $test_ScrabbleGenerator->calculateScore($input);

            //Assert
            $this->assertEquals(10, $result);
        }

        function test_calculateScore_checkOutputForTwoLetters()
        {
            // Setup test
            $test_ScrabbleGenerator = new ScrabbleGenerator;
            $input = 'Dog';

            //Act
            $result = $test_ScrabbleGenerator->calculateScore($input);

            //Assert
            $this->assertEquals(5, $result);
        }

        function test_calculateScore_checkCaseTest()
        {
            // Setup test
            $test_ScrabbleGenerator = new ScrabbleGenerator;
            $input = 'supercALifRagilisticexpiAlidoCIous';

            //Act
            $result = $test_ScrabbleGenerator->calculateScore($input);

            //Assert
            $this->assertEquals(56, $result);
        }
    }
