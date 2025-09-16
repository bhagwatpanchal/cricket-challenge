<?php

namespace App\Services;

class PredictionService
{
    public function predict(string $bowl, string $shot, string $timing): string
    {       
        $possibleOutcomes = CricketData::OUTCOMES[$bowl][$timing] ?? ['0 runs'];
        return $possibleOutcomes[array_rand($possibleOutcomes)];
    }
}