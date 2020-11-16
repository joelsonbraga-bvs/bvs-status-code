<?php
declare(strict_types=1);

namespace StatusCode;

/**
 * Class StatusCodeHandlerAbstract
 * @package StatusCode
 */
abstract class StatusCodeHandlerAbstract implements StatusCodeHandlerInterface
{
    /**
     * @var StatusCodeHandlerInterface
     */
    private $next;

    /**
     * StatusCodeHandlerAbstract constructor.
     * @param StatusCodeHandlerInterface $next
     */
    public function __construct(StatusCodeHandlerInterface $next)
    {
        $this->next = $next;
    }

    /**
     * @param int $statusCode
     * @param string|null $message
     * @return StatusCodeMessage
     */
    final public function handleIt(int $statusCode, ?string $message = null): StatusCodeMessage
    {
        if ($this->canHandle($statusCode)) {
            return $this->handle($statusCode, $message);
        }

        return $this->next->handleIt($statusCode, $message);
    }

    /**
     * @param int $statusCode
     * @return bool|null
     */
    protected abstract function canHandle(int $statusCode): ?bool;

    /**
     * @param int $statusCode
     * @param string|null $message
     * @return StatusCodeMessage
     */
    protected abstract function handle(int $statusCode, ?string $message = null): StatusCodeMessage;
}
