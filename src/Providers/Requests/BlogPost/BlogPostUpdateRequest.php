<?php

namespace DoocaCommerce\Integrator\Providers\Requests\BlogPost;

class BlogPostUpdateRequest extends BlogPostCreateRequest
{
    public function getMethod(): string
    {
        return 'PUT';
    }
}
