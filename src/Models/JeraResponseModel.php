<?php

declare(strict_types=1);

namespace Jera\CoreApi\Models;

class JeraResponseModel
{
    protected bool $result;
    protected array $data;
    protected array $commands;

    /**
     * @return bool
     */
    public function isResult(): bool
    {
        return $this->result;
    }

    /**
     * @param bool $result
     *
     * @return self
     */
    public function setResult(bool $result): self
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array
     */
    public function getCommands(): array
    {
        return $this->commands;
    }

    /**
     * @param array $commands
     *
     * @return self
     */
    public function setCommands(array $commands): self
    {
        $this->commands = $commands;
        return $this;
    }
}
