<?php
namespace PGNChess\Tests\Square;

use PGNChess\Square\Castling;
use PGNChess\PGN\Symbol;

class CastlingTest extends \PHPUnit_Framework_TestCase
{
    public function testWhiteLongCastlingInfo()
    {
        $castlingInfo = Castling::info(Symbol::WHITE);
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_LONG}->freeSquares->b, 'b1');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_LONG}->freeSquares->c, 'c1');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_LONG}->freeSquares->d, 'd1');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_LONG}->position->current, 'e1');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_LONG}->position->next, 'c1');
        $this->assertEquals($castlingInfo->{Symbol::ROOK}->{Symbol::CASTLING_LONG}->position->current, 'a1');
        $this->assertEquals($castlingInfo->{Symbol::ROOK}->{Symbol::CASTLING_LONG}->position->next, 'd1');
    }

    public function testBlackLongCastlingInfo()
    {
        $castlingInfo = Castling::info(Symbol::BLACK);
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_LONG}->freeSquares->b, 'b8');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_LONG}->freeSquares->c, 'c8');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_LONG}->freeSquares->d, 'd8');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_LONG}->position->current, 'e8');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_LONG}->position->next, 'c8');
        $this->assertEquals($castlingInfo->{Symbol::ROOK}->{Symbol::CASTLING_LONG}->position->current, 'a8');
        $this->assertEquals($castlingInfo->{Symbol::ROOK}->{Symbol::CASTLING_LONG}->position->next, 'd8');
    }

    public function testWhiteShortCastlingInfo()
    {
        $castlingInfo = Castling::info(Symbol::WHITE);
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_SHORT}->freeSquares->f, 'f1');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_SHORT}->freeSquares->g, 'g1');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_SHORT}->position->current, 'e1');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_SHORT}->position->next, 'g1');
        $this->assertEquals($castlingInfo->{Symbol::ROOK}->{Symbol::CASTLING_SHORT}->position->current, 'h1');
        $this->assertEquals($castlingInfo->{Symbol::ROOK}->{Symbol::CASTLING_SHORT}->position->next, 'f1');
    }

    public function testBlackShortCastlingInfo()
    {
        $castlingInfo = Castling::info(Symbol::BLACK);
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_SHORT}->freeSquares->f, 'f8');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_SHORT}->freeSquares->g, 'g8');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_SHORT}->position->current, 'e8');
        $this->assertEquals($castlingInfo->{Symbol::KING}->{Symbol::CASTLING_SHORT}->position->next, 'g8');
        $this->assertEquals($castlingInfo->{Symbol::ROOK}->{Symbol::CASTLING_SHORT}->position->current, 'h8');
        $this->assertEquals($castlingInfo->{Symbol::ROOK}->{Symbol::CASTLING_SHORT}->position->next, 'f8');
    }
}