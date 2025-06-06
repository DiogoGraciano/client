<?php

declare(strict_types=1);

namespace GeminiAPI\Enums;

enum MimeType: string
{
    // Documents
    case FILE_PDF = 'application/pdf'; // Will not rename to APPLICATION_PDF to keep the backwards compatibility
    case APPLICATION_JAVASCRIPT = 'application/x-javascript';
    case APPLICATION_PYTHON = 'application/x-python';

    // Text and Code
    case TEXT_PLAIN = 'text/plain';
    case TEXT_HTML = 'text/html';
    case TEXT_CSS = 'text/css';
    case TEXT_MARKDOWN = 'text/md';
    case TEXT_CSV = 'text/csv';
    case TEXT_XML = 'text/xml';
    case TEXT_RTF = 'text/rtf';
    case TEXT_X_C = 'text/x-c';
    case TEXT_X_CPP = 'text/x-c++';
    case TEXT_X_JAVA = 'text/x-java-source';

    // Images
    case IMAGE_PNG = 'image/png';
    case IMAGE_JPEG = 'image/jpeg';
    case IMAGE_HEIC = 'image/heic';
    case IMAGE_HEIF = 'image/heif';
    case IMAGE_WEBP = 'image/webp';

    // Videos
    case VIDEO_MP4 = 'video/mp4';
    case VIDEO_WEBM = 'video/webm';
    case VIDEO_MPEG = 'video/mpeg';
    case VIDEO_MPG = 'video/mpg';
    case VIDEO_WMV = 'video/wmv';
    case VIDEO_3GPP = 'video/3gpp';
    case VIDEO_QUICKTIME = 'video/quicktime';
    case VIDEO_X_FLV = 'video/x-flv';

    // Audio
    case AUDIO_MP3 = 'audio/mp3';
    case AUDIO_MPEG = 'audio/mpeg';
    case AUDIO_MP4 = 'audio/mp4';
    case AUDIO_MPGA = 'audio/mpga';
    case AUDIO_FLAC = 'audio/flac';
    case AUDIO_OGG = 'audio/ogg';
    case AUDIO_OPUS = 'audio/opus';
    case AUDIO_PCM = 'audio/pcm';
    case AUDIO_WAV = 'audio/wav';
    case AUDIO_WEBM = 'audio/webm';
    case AUDIO_MPA = 'audio/m4a';
}
