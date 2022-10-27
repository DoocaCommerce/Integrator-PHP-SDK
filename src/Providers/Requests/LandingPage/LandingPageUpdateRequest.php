<?php

namespace DoocaCommerce\Integrator\Providers\Requests\LandingPage;

class LandingPageUpdateRequest extends LandingPageCreateRequest
{
    public function getMethod(): string
    {
        return 'PUT';
    }
}
