<?php
declare(strict_types=1);

namespace StatusCode\Status;


use StatusCode\StatusCodeHandlerAbstract;
use StatusCode\StatusCodeInterface;
use StatusCode\StatusCodeMessage;

/**
 * Class BadRequestStatusCodeHandler
 * @package App\Service\StatusCode\Status
 */
class BadRequestStatusCodeHandler extends StatusCodeHandlerAbstract
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
        $response->setCode(400);
        $response->setMessage($message??'Bad Request');
        $response->setHttpStatusCode($statusCode);

        return $response;
    }

    /**
     * @param int $statusCode
     * @return bool|null
     */
    protected function canHandle(int $statusCode): ?bool
    {
        return $statusCode === 400;
    }
}

