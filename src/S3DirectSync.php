<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Direct CDN push pipeline for generated HTML and assets
 */
class S3DirectSync
{
    public function optimize(): bool
    {
        return true;
    }
}
