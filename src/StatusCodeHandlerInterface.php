<?php
declare(strict_types=1);

namespace StatusCode;


/**
 * Interface StatusCodeHandlerInterface
 * @package StatusCode
 */
interface StatusCodeHandlerInterface
{
    /**
     * @param int $statusCode
     * @param string|null $message
     * @return StatusCodeMessage
     */
    public function handleIt(int $statusCode, ?string $message = null): StatusCodeMessage;
}
