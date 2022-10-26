<?php

namespace DoocaCommerce\Integrator\Providers\Requests\ProductImage;

class ProductImageUpdateRequest extends ProductImageCreateRequest
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }
}
