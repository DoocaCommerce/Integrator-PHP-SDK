<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Shop;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ShopCreateRequest implements Request
{
    protected array $data;

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
        return 'integrator/import/shop';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
