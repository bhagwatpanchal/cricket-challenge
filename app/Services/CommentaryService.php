<?php

namespace App\Services;

use App\Services\CricketData;

class CommentaryService
{
    public function getCommentary(string $outcome): string
    {
        return CricketData::COMMENTARY[$outcome] ?? 'It\'s an interesting ball.';
    }
}