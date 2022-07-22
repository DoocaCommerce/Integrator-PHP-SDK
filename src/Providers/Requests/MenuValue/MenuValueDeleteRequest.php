<?php

namespace DoocaCommerce\Integrator\Providers\Requests\MenuValue;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class MenuValueDeleteRequest implements Request
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
        return 'integrator/import/menu-values';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}