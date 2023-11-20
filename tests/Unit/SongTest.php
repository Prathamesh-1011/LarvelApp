<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../Practical/Song.php');
use Practical\Song;


class SongTest extends TestCase {
    public function testSetTempoAcceptsInteger(): void {
        $song = new Song("Test Song", "Test Artist", "Test Genre", 100);
        $song->setTempo(120);
        $this->assertEquals(120, $song->getTempo());
    }

    public function testSetTempoRejectsNonNumeric(): void {
        $song = new Song("Test Song", "Test Artist", "Test Genre", 100);
        $this->expectException(\InvalidArgumentException::class);
        $song->setTempo("NotANumber");
    }
    public function testSetTempo(): void {
        $song = new Song("Test Song", "Test Artist", "Test Genre", 100);
        $song->setTempo(60);
        $this->assertEquals(60, $song->getTempo());
    }

    public function testSetTempoAcceptsIntegerString(): void {
        $song = new Song("Test Song", "Test Artist", "Test Genre", 100);
        $song->setTempo("60");
        $this->assertEquals(60, $song->getTempo());
    }

    public function testSetTempoRejectsAlphabetString(): void {
        $song = new Song("Test Song", "Test Artist", "Test Genre", 100);
        $this->expectException(\InvalidArgumentException::class);
        $song->setTempo("60 BPM");
    }

    public function testSetTempoRejectsFloat(): void {
        $song = new Song("Test Song", "Test Artist", "Test Genre", 100);
        $this->expectException(\InvalidArgumentException::class);
        $song->setTempo(60.5);
    }


}
?>