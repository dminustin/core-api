<?php

declare(strict_types=1);

namespace Jera\CoreApi\Models;

use Illuminate\Support\Str;

class JeraRequestModel
{
    protected string $requestID;
    protected array $request;
    protected string $route;

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

    /**
     * @return string
     */
    public function getRoute(): string
    {
        return $this->route;
    }

    /**
     * @param string $route
     *
     * @return self
     */
    public function setRoute(string $route): self
    {
        $this->route = $route;
        return $this;
    }

    public function __toString(): string
    {
        return json_encode([
            'id' => $this->requestID,
            'request' => $this->request
        ], JSON_UNESCAPED_UNICODE);
    }

    public function __construct()
    {
        $this->requestID = date('YmdHis') . '-' . Str::uuid();
    }
}
