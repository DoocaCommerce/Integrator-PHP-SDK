<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Product;

class ProductUpdateRequest extends ProductCreateRequest
{
    public function getMethod(): string
    {
        return 'PUT';
    }
}
