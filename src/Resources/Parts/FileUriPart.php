<?php

namespace GeminiAPI\Resources\Parts;

use GeminiAPI\Resources\Parts\PartInterface;
use GeminiAPI\Enums\MimeType;
use JsonSerializable;

class FileUriPart implements PartInterface, JsonSerializable
{
    public function __construct(
        public readonly MimeType $mimeType,
        public readonly string $uri
    ) {
    }

    /**
     * @return array{
     *     file_data: array{
     *         mime_type: string,
     *         file_uri: string,
     *     },
     * }
     */
    public function jsonSerialize(): array
    {
        return [
            'file_data' => [
                'mime_type' => $this->mimeType->value,
                'file_uri' => $this->uri
            ],
        ];
    }

    public function __toString(): string
    {
        return json_encode($this) ?: '';
    }
}
