<?php
declare(strict_types=1);

namespace StatusCode;


/**
 * Class InvalidStatusCodeHandler
 * @package StatusCode
 */
class InvalidStatusCodeHandler implements StatusCodeHandlerInterface
{

    /**
     * @param int $statusCode
     * @param string|null $message
     * @return StatusCodeMessage
     */
    public function handleIt(int $statusCode, ?string $message = null): StatusCodeMessage
    {
        $response = new StatusCodeMessage();

        $response->setStatus(false);
        $response->setDataStatus(false);
        $response->setCode(400);
        $response->setMessage('Invalid status code');
        $response->setHttpStatusCode($statusCode);

        return $response;
    }
}
