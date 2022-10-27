<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Brand;

class BrandUpdateRequest extends BrandCreateRequest
{
    public function getMethod(): string
    {
        return 'PUT';
    }
}
