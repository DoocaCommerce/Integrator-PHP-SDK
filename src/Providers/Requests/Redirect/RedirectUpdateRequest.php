<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Redirect;

class RedirectUpdateRequest extends RedirectCreateRequest
{
    public function getMethod(): string
    {
        return 'PUT';
    }
}
