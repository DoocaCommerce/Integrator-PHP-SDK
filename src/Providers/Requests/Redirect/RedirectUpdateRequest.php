<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Redirect;

class RedirectUpdateRequest extends RedirectCreateRequest
{
    public function __construct(
        int $id,
        string $url_from,
        string $url_to,
        ?string $created_at
    ) {
        parent::__construct(
            $id,
            $url_from,
            $url_to,
            $created_at
        );
    }

    public function getMethod(): string
    {
        return 'PUT';
    }
}
