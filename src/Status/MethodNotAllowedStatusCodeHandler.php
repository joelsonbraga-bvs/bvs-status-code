<?php


namespace StatusCode\Status;


use StatusCode\StatusCodeHandlerAbstract;
use StatusCode\StatusCodeInterface;
use StatusCode\StatusCodeMessage;

/**
 * Class MethodNotAllowedStatusCodeHandler
 * @package App\Service\StatusCode\Status
 */
class MethodNotAllowedStatusCodeHandler extends StatusCodeHandlerAbstract
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
        $response->setCode(4005);
        $response->setMessage($message??'Method Not Allowed');
        $response->setHttpStatusCode($statusCode);

        return $response;
    }

    /**
     * @param int $statusCode
     * @return bool|null
     */
    protected function canHandle(int $statusCode): ?bool
    {
        return $statusCode === 405;
    }
}
