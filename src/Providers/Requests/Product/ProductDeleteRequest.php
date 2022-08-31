<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Product;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ProductDeleteRequest implements Request
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
        return 'integrator/import/product';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
