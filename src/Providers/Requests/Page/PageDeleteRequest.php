<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Page;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class PageDeleteRequest implements Request
{
    public function __construct(
        protected int $id
    ) {}

    public function toArray(): array
    {
        return [
            "id" => $this->id
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/pages';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function getHeader(): array
    {
        return [
            'dc-action'  => 'delete'
        ];
    }
}