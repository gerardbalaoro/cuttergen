<?php

use PHPUnit\Framework\TestCase;
use CutterGen\CutterGen;

class CutterTest extends TestCase
{
    public function testAccuracyFromTable()
    { 
        $trials = [
            'Idaho' => 'I33',
            'Inman' => 'I56',
            'Ipswich' => 'I67',
            'Sadron' => 'S23',
            'Schreiber' => 'S37',
            'Stinson' => 'S75',
            'Suryani' => 'S87',
            'Queiroz' => 'Q45',
            'Quinn' => 'Q56',
            'Quinn' => 'Q56',
            'Quorum' => 'Q67',
            'Qutub' => 'Q88',
            'Campbell' => 'C36',
            'Ceccaldi' => 'C43',
            'Cobblestone' => 'C63',
            'Cryer' => 'C79',
            'Cuellar' => 'C84',
            'Cymbal' => 'C96'
        ];

        $cutter = new CutterGen;

        foreach ($trials as $name => $value) {
            $this->assertEquals($value, $cutter->generate($name));
        }
    }
}
