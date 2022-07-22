<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Script;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ScriptDeleteRequest implements Request
{
    protected int $id;

    public function __construct(
        int $id
    ) {
        $this->id = $id;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getPath(): string
    {
        return 'integrator/import/script';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}