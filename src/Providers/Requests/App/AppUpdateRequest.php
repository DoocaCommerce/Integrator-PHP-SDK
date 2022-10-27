<?php

namespace DoocaCommerce\Integrator\Providers\Requests\App;

class AppUpdateRequest extends AppCreateRequest
{

    public function getMethod(): string
    {
        return 'PUT';
    }
}
