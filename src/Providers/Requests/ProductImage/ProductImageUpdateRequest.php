<?php

namespace DoocaCommerce\Integrator\Providers\Requests\ProductImage;

class ProductImageUpdateRequest extends ProductImageCreateRequest
{
    public function getMethod(): string
    {
        return 'PUT';
    }
}
