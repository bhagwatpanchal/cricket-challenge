<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\CricketData;
use App\Services\PredictionService;
use App\Services\CommentaryService;

class CricChallenge extends Command
{
    protected $signature = 'cric:superover';
    protected $description = 'Runs the CricSummit 2021 Super Over challenge.';

    public function handle(PredictionService $predictionService, CommentaryService $commentaryService)
    {
        $target = 21;
        $score = 0;
        $wickets = 0;

        $this->info('SUPER OVER - AUSTRALIA 11 HAS TO CHASE ' . $target . ' RUNS');
        $inputShots = [
            ['Straight', 'Perfect'],
            ['Flick', 'Early'],
            ['LegGlance', 'Good'],
            ['Long On', 'Perfect'],
            ['LongOff', 'Late'],
            ['LongOn', 'Perfect'],
        ];
       
        $bowlingCards = CricketData::BOWLING_CARDS;

        foreach ($inputShots as $ballNumber => $shotData) {
            if ($wickets >= 2) {
                break;
            }

            $shotName = $shotData[0];
            $shotTiming = $shotData[1];
            $bowlName = $bowlingCards[array_rand($bowlingCards)];

            // Predict outcome and get commentary
            $outcome = $predictionService->predict($bowlName, $shotName, $shotTiming);
            $commentary = $commentaryService->getCommentary($outcome);

            // Update score and wickets
            if (str_contains($outcome, 'wicket')) {
                $wickets++;
            } else {
                $score += (int) $outcome[0];
            }
            
            $this->info("{$ballNumber}. Sudhakar bowled {$bowlName} ball,");
            $this->info("   Craig played {$shotTiming} {$shotName} shot");
            $this->info("   {$commentary} - {$outcome}");
        }

        $this->info("AUSTRALIA scored: {$score} runs");

        if ($score >= $target && $wickets < 2) {
            $this->info("AUSTRALIA won by " . (2 - $wickets) . " wickets.");
        } elseif ($score < $target) {
            $this->info("AUSTRALIA lost by " . ($target - $score) . " runs.");
        } else {
            $this->info("AUSTRALIA lost by " . ($target - $score) . " runs.");
        }
    }
}