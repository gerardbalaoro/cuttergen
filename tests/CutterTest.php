<?php

use PHPUnit\Framework\TestCase;
use CutterGen\CutterGen;

/**
 * Test Case for CutterGen\CutterGen
 */
class CutterGenTest extends TestCase
{
    /**
     * Test algorithm accuracy from LC Cutter Table
     * 
     * Compare against known Cutter Number values from
     * Classification and Shelflisting Manual Instruction Sheet G63
     * 
     * @link https://www.loc.gov/aba/publications/FreeCSM/G063.pdf
     */
    public function testAlgorithm()
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

    public function testDefaultHandlers()
    {
        $trials = [
            'Qadim' => 'Q23',
            'Qinzler' => 'Q106',
            'Qetzal' => 'Q68',
        ];

        $cutter = new CutterGen;

        foreach ($trials as $name => $value) {
            $this->assertEquals($value, $cutter->generate($name));
        }
    }

    public function testCustomHandlers()
    {
        $trials = [
            'Qadim' => 'Q103',
            'Qinzler' => 'Q116',
            'Qetzal' => 'Q68',
        ];

        $cutter = new CutterGen;
        $cutter->setHandler('qa-qt', function ($char) {
            $schema = [
                "a" => "10",
                "b" => "28",
                "c" => "27",
                "d" => "22",
                "e" => "6",
                "f" => "14",
                "g" => "15",
                "h" => "9",
                "i" => "11",
                "j" => "4",
                "k" => "7",
                "l" => "12",
                "m" => "21",
                "n" => "24",
                "o" => "26",
                "p" => "29",
                "q" => "16",
                "r" => "2",
                "s" => "18",
                "t" => "20",
            ];

            return $schema[$char];
        });

        foreach ($trials as $name => $value) {
            $this->assertEquals($value, $cutter->generate($name));
        }
    }
}
