<?php

namespace DoocaCommerce\Integrator\Providers\Requests\CustomerGroup;

class CustomerGroupUpdateRequest extends CustomerGroupCreateRequest
{

    public function getMethod(): string
    {
        return 'PUT';
    }
}
