<?php

namespace Tests;

use Poem\Poem;

/**
 * @covers \Poem\Poem
 */
class PoemTest extends \PHPUnit\Framework\TestCase
{
    private ?Poem $poem;
    protected function setUp(): void
    {
        parent::setUp();
        $this->poem = new Poem(48);
    }

    public function test_poem(): void
    {
        foreach ($this->poemDataProvider() as $expected) {
            $this->assertEquals($expected[0], $this->poem->verse());
        }
    }

    public function poemDataProvider(): array
    {
        return [
            48 => ['48 pieces of chocolate bars in the box, 48 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 47 chocolate bars in the box.'],
            47 => ['47 pieces of chocolate bars in the box, 47 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 46 chocolate bars in the box.'],
            46 => ['46 pieces of chocolate bars in the box, 46 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 45 chocolate bars in the box.'],
            45 => ['45 pieces of chocolate bars in the box, 45 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 44 chocolate bars in the box.'],
            44 => ['44 pieces of chocolate bars in the box, 44 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 43 chocolate bars in the box.'],
            43 => ['43 pieces of chocolate bars in the box, 43 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 42 chocolate bars in the box.'],
            42 => ['42 pieces of chocolate bars in the box, 42 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 41 chocolate bars in the box.'],
            41 => ['41 pieces of chocolate bars in the box, 41 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 40 chocolate bars in the box.'],
            40 => ['40 pieces of chocolate bars in the box, 40 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 39 chocolate bars in the box.'],
            39 => ['39 pieces of chocolate bars in the box, 39 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 38 chocolate bars in the box.'],
            38 => ['38 pieces of chocolate bars in the box, 38 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 37 chocolate bars in the box.'],
            37 => ['37 pieces of chocolate bars in the box, 37 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 36 chocolate bars in the box.'],
            36 => ['36 pieces of chocolate bars in the box, 36 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 35 chocolate bars in the box.'],
            35 => ['35 pieces of chocolate bars in the box, 35 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 34 chocolate bars in the box.'],
            34 => ['34 pieces of chocolate bars in the box, 34 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 33 chocolate bars in the box.'],
            33 => ['33 pieces of chocolate bars in the box, 33 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 32 chocolate bars in the box.'],
            32 => ['32 pieces of chocolate bars in the box, 32 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 31 chocolate bars in the box.'],
            31 => ['31 pieces of chocolate bars in the box, 31 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 30 chocolate bars in the box.'],
            30 => ['30 pieces of chocolate bars in the box, 30 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 29 chocolate bars in the box.'],
            29 => ['29 pieces of chocolate bars in the box, 29 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 28 chocolate bars in the box.'],
            28 => ['28 pieces of chocolate bars in the box, 28 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 27 chocolate bars in the box.'],
            27 => ['27 pieces of chocolate bars in the box, 27 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 26 chocolate bars in the box.'],
            26 => ['26 pieces of chocolate bars in the box, 26 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 25 chocolate bars in the box.'],
            25 => ['25 pieces of chocolate bars in the box, 25 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 24 chocolate bars in the box.'],
            24 => ['24 pieces of chocolate bars in the box, 24 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 23 chocolate bars in the box.'],
            23 => ['23 pieces of chocolate bars in the box, 23 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 22 chocolate bars in the box.'],
            22 => ['22 pieces of chocolate bars in the box, 22 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 21 chocolate bars in the box.'],
            21 => ['21 pieces of chocolate bars in the box, 21 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 20 chocolate bars in the box.'],
            20 => ['20 pieces of chocolate bars in the box, 20 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 19 chocolate bars in the box.'],
            19 => ['19 pieces of chocolate bars in the box, 19 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 18 chocolate bars in the box.'],
            18 => ['18 pieces of chocolate bars in the box, 18 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 17 chocolate bars in the box.'],
            17 => ['17 pieces of chocolate bars in the box, 17 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 16 chocolate bars in the box.'],
            16 => ['16 pieces of chocolate bars in the box, 16 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 15 chocolate bars in the box.'],
            15 => ['15 pieces of chocolate bars in the box, 15 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 14 chocolate bars in the box.'],
            14 => ['14 pieces of chocolate bars in the box, 14 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 13 chocolate bars in the box.'],
            13 => ['13 pieces of chocolate bars in the box, 13 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 12 chocolate bars in the box.'],
            12 => ['12 pieces of chocolate bars in the box, 12 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 11 chocolate bars in the box.'],
            11 => ['11 pieces of chocolate bars in the box, 11 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 10 chocolate bars in the box.'],
            10 => ['10 pieces of chocolate bars in the box, 10 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 9 chocolate bars in the box.'],
            9 => ['9 pieces of chocolate bars in the box, 9 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 8 chocolate bars in the box.'],
            8 => ['8 pieces of chocolate bars in the box, 8 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 7 chocolate bars in the box.'],
            7 => ['7 pieces of chocolate bars in the box, 7 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 6 chocolate bars in the box.'],
            6 => ['6 pieces of chocolate bars in the box, 6 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 5 chocolate bars in the box.'],
            5 => ['5 pieces of chocolate bars in the box, 5 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 4 chocolate bars in the box.'],
            4 => ['4 pieces of chocolate bars in the box, 4 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 3 chocolate bars in the box.'],
            3 => ['3 pieces of chocolate bars in the box, 3 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 2 chocolate bars in the box.'],
            2 => ['2 pieces of chocolate bars in the box, 2 chocolate bars.' . PHP_EOL . 'Take one out of the box, pass it around, 1 chocolate bar in the box.'],
            1 => ['One chocolate bar in the box, one chocolate bar.' . PHP_EOL . 'Take one out of the box, pass it around, no more chocolate bar in the box.'],
            0 => ['No more chocolate bar in the box, no more chocolate bar.' . PHP_EOL . 'Go to the store and buy another box, 48 chocolate bars in the box.'],
        ];
    }
}