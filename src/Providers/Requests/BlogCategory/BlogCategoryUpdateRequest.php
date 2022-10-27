<?php

namespace DoocaCommerce\Integrator\Providers\Requests\BlogCategory;

class BlogCategoryUpdateRequest extends BlogCategoryCreateRequest
{

    public function getMethod(): string
    {
        return 'PUT';
    }
}
