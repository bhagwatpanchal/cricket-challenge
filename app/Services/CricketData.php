<?php

namespace App\Services;

class CricketData
{
    public const BOWLING_CARDS = [
        'Bouncer', 'Inswinger', 'Outswinger', 'Leg Cutter', 'Off Cutter',
        'Slower Ball', 'Yorker', 'Pace', 'Off Break', 'Doosra'
    ];

    public const BATTING_CARDS = [
        'Straight', 'Sweep', 'Flick', 'CoverDrive', 'LegLance',
        'Pull', 'Long On', 'Scoop', 'SquareCut', 'UpperCut'
    ];

    public const SHOT_TIMINGS = [
        'Early', 'Good', 'Perfect', 'Late'
    ];

    public const OUTCOMES = [
        'Bouncer' => [
            'Perfect' => ['4 runs', '6 runs'],
            'Good' => ['4 runs', '6 runs'],
            'Early' => ['1 run', '2 runs'],
            'Late' => ['1 wicket', '0 runs'],
        ],        
        'Yorker' => [
            'Perfect' => ['4 runs', '6 runs'],
            'Good' => ['1 run', '0 runs'],
            'Early' => ['1 wicket'],
            'Late' => ['1 wicket'],
        ],        
    ];

    public const COMMENTARY = [
        '1 wicket' => 'Edged and taken.',
        '1 run' => 'Excellent running between the wickets.',
        '2 runs' => 'Convert ones into twos.',
        '4 runs' => 'Just over the fielder.',
        '6 runs' => 'That\'s massive and out of the ground.',
        '0 runs' => 'Excellent line and length.'
    ];
}