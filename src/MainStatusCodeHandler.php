<?php


namespace StatusCode;

/**
 * Class MainStatusCodeHandler
 * @package StatusCode
 */
class MainStatusCodeHandler
{
    /**
     * @var StatusCodeHandlerInterface
     */
    private $handler;

    /**
     * MainStatusCodeHandler constructor.
     * @param StatusCodeHandlerInterface $handler
     */
    public function __construct(StatusCodeHandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param int $statusCode
     * @param string|null $message
     * @return StatusCodeMessage
     */
    public function main(int $statusCode, ?string $message = null): StatusCodeMessage
    {
        return $this->handler->handleIt($statusCode, $message);
    }
}