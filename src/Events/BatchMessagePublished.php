<?php declare(strict_types=1);

namespace Junges\Kafka\Events;

use Junges\Kafka\Contracts\ProducerMessage;

final readonly class BatchMessagePublished
{
    public function __construct(
        public ProducerMessage $message,
        public string $batchUuid,
    ) {
    }
}
