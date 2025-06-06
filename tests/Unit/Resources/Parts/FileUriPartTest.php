<?php

declare(strict_types=1);

namespace GeminiAPI\Tests\Unit\Resources\Parts;

use GeminiAPI\Enums\MimeType;
use GeminiAPI\Resources\Parts\FileUriPart;
use PHPUnit\Framework\TestCase;

class FileUriPartTest extends TestCase
{
    public function testConstructor()
    {
        $part = new FileUriPart(MimeType::VIDEO_MP4, '');
        self::assertInstanceOf(FileUriPart::class, $part);
    }

    public function testJsonSerialize()
    {
        $part = new FileUriPart(MimeType::VIDEO_MP4, 'https://www.youtube.com/watch?v=9hE5-98ZeCg');
        $expected = [
            'file_data' => [
                'mime_type' => 'video/mp4',
                'file_uri' => 'https://www.youtube.com/watch?v=9hE5-98ZeCg',
            ],
        ];
        self::assertEquals($expected, $part->jsonSerialize());
    }

    public function test__toString()
    {
        $part = new FileUriPart(MimeType::VIDEO_MP4, 'https://www.youtube.com/watch?v=9hE5-98ZeCg');
        $expected = '{"file_data":{"mime_type":"video\/mp4","file_uri":"https:\/\/www.youtube.com\/watch?v=9hE5-98ZeCg"}}';
        self::assertEquals($expected, (string) $part);
    }
}
