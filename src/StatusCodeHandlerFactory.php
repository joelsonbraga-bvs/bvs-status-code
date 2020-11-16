<?php
declare(strict_types=1);

namespace StatusCode;


use StatusCode\Status\BadRequestStatusCodeHandler;
use StatusCode\Status\MethodNotAllowedStatusCodeHandler;
use StatusCode\Status\NotFoundStatusCodeHandler;

/**
 * Class StatusCodeHandlerFactory
 * @package StatusCode
 */
class StatusCodeHandlerFactory
{
    /**
     * @return NotFoundStatusCodeHandler
     */
    public function __invoke()
    {
        $invalidStatusCode = new InvalidStatusCodeHandler();
        $badRequest        = new BadRequestStatusCodeHandler($invalidStatusCode);
        $methodNotAllowed  = new MethodNotAllowedStatusCodeHandler($badRequest);
        $notFound          = new NotFoundStatusCodeHandler($methodNotAllowed);

        return $notFound;
    }
}
