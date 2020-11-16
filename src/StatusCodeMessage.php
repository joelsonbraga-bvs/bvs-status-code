<?php
declare(strict_types=1);

namespace StatusCode;


/**
 * Class StatusCodeMessage
 * @package StatusCode
 */
class StatusCodeMessage
{
    /**
     * @var bool
     */
    private $status;

    /**
     * @var bool
     */
    private $data_status;

    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $message;

    /**
     * @var int
     */
    private $http_status_code;


    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'status' => $this->status,
            'data' => [
                'status' => $this->data_status,
                'code' => $this->code,
                'message' => $this->message,
            ],
            'http_status_code' => $this->http_status_code,
        ];
    }

    /**
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function getDataStatus(): bool
    {
        return $this->data_status;
    }

    /**
     * @param bool $data_status
     */
    public function setDataStatus(bool $data_status): void
    {
        $this->data_status = $data_status;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     */
    public function setMessage(?string $message = null): void
    {
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getHttpStatusCode(): int
    {
        return $this->http_status_code;
    }

    /**
     * @param int $http_status_code
     */
    public function setHttpStatusCode(int $http_status_code): void
    {
        $this->http_status_code = $http_status_code;
    }
}
