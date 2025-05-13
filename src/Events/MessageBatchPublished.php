<?php declare(strict_types=1);

namespace Junges\Kafka\Events;

use Junges\Kafka\Producers\MessageBatch;

final readonly class MessageBatchPublished
{
    public function __construct(
        public MessageBatch $batch,
        public int $publishedCount,
    ) {
    }
}
