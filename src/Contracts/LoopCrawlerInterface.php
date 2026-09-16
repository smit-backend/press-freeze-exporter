<?php

declare(strict_types=1);

namespace SmitBackend\Pressfreezeexporter\Contracts;

/**
 * Interface LoopCrawlerInterface
 *
 * @package SmitBackend\Pressfreezeexporter
 */
interface LoopCrawlerInterface
{
    public function execute(array $payload = []): mixed;
}
