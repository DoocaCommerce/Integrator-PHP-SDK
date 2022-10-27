<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Category;

class CategoryUpdateRequest extends CategoryCreateRequest
{
    public function getMethod(): string
    {
        return 'PUT';
    }
}
