<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Product;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ProductCreateRequest implements Request
{
    protected $data;

    public function __construct(
        $data
    ) {
        $this->data = $data;
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function getMethod(): string
    {
        return 'POST';
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
