<?php

declare(strict_types=1);

namespace Jera\CoreApi\Models;

class JeraRequestModel
{
    protected string $requestID;
    protected array $request;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->requestID;
    }

    /**
     * @param string $requestID
     *
     * @return self
     */
    public function setRequestID(string $requestID): self
    {
        $this->requestID = $requestID;
        return $this;
    }

    /**
     * @return array
     */
    public function getRequest(): array
    {
        return $this->request;
    }

    /**
     * @param array $request
     *
     * @return self
     */
    public function setRequest(array $request): self
    {
        $this->request = $request;
        return $this;
    }
}
