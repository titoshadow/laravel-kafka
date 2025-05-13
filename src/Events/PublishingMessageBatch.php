<?php declare(strict_types=1);

namespace Junges\Kafka\Events;

use Junges\Kafka\Producers\MessageBatch;

final readonly class PublishingMessageBatch
{
    public function __construct(
        public MessageBatch $batch,
    ) {
    }
}
