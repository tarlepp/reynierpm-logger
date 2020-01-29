<?php

namespace App\Traits;

use Psr\Log\LoggerInterface;

trait LoggerAwareTrait
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @required
     *
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return $this
     */
    public function setLogger(LoggerInterface $logger): self
    {
        $this->logger = $logger;

        return $this;
    }
}
