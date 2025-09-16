<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CommentaryService;

class CommentaryServiceTest extends TestCase
{
    /** @test */
    public function it_returns_correct_commentary_for_wicket()
    {
        $commentaryService = new CommentaryService();
        $commentary = $commentaryService->getCommentary('1 wicket');
        $this->assertEquals('Edged and taken.', $commentary);
    }

    /** @test */
    public function it_returns_correct_commentary_for_runs()
    {
        $commentaryService = new CommentaryService();
        $commentary = $commentaryService->getCommentary('4 runs');
        $this->assertEquals('Just over the fielder.', $commentary);
    }
}