<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Script;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ScriptSortRequest implements Request
{
    protected ?array $data;

    public function __construct(?array $data = [])
    {
        $this->data = $data;
    }

    public function toArray(): array
    {
        return [
            'data' => $this->data
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/script-sort';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
