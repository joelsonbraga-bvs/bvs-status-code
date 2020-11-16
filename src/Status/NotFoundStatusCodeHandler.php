<?php
declare(strict_types=1);

namespace StatusCode\Status;


use StatusCode\StatusCodeHandlerAbstract;
use StatusCode\StatusCodeInterface;
use StatusCode\StatusCodeMessage;

/**
 * Class NotFoundStatusCodeHandler
 * @package App\Service\StatusCode\Status
 */
class NotFoundStatusCodeHandler extends StatusCodeHandlerAbstract
{
    /**
     * @param int $statusCode
     * @param string|null $message
     * @return StatusCodeMessage
     */
    protected function handle(int $statusCode, ?string $message = null): StatusCodeMessage
    {
        $response = new StatusCodeMessage();

        $response->setStatus(false);
        $response->setDataStatus(false);
        $response->setCode(4004);
        $response->setMessage($message??'Not Found');
        $response->setHttpStatusCode($statusCode);

        return $response;
    }

    /**
     * @param int $statusCode
     * @return bool|null
     */
    protected function canHandle(int $statusCode): ?bool
    {
        return $statusCode === 404;
    }
}

