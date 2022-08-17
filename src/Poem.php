<?php

namespace Poem;

class Poem
{
    private int $initialBottles;

    public function __construct(private int $bottles)
    {
        $this->initialBottles = $this->bottles;
    }

    public function verse(): string
    {
        return $this->firstLine() . PHP_EOL . $this->secondLine();
    }

    private function firstLine(): string
    {
        if ($this->bottles === 1) {
            return 'One chocolate bar in the box, one chocolate bar.';
        }

        if ($this->bottles === 0) {
            return 'No more chocolate bar in the box, no more chocolate bar.';
        }

        return "{$this->bottles} pieces of chocolate bars in the box, {$this->bottles} chocolate bars.";
    }

    private function secondLine(): string
    {
        --$this->bottles;
        $bar = $this->bottles < 2 ? 'bar' : 'bars';
        if ($this->bottles === 0) {
            return "Take one out of the box, pass it around, no more chocolate bar in the box.";
        }
        if ($this->bottles === -1) {
            $this->bottles = $this->initialBottles;
            return "Go to the store and buy another box, {$this->initialBottles} chocolate bars in the box.";
        }

        return "Take one out of the box, pass it around, {$this->bottles} chocolate {$bar} in the box.";
    }
}