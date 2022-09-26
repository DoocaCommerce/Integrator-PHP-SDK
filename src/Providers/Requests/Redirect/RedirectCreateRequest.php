<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Redirect;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class RedirectCreateRequest implements Request
{
    protected string $url_from;
    protected string $url_to;
    protected ?string $created_at;
    protected ?string $updated_at;
    
    public function __construct(
        string $url_from,
        string $url_to,
        ?string $created_at,
        ?string $updated_at
    ) {
        $this->url_from = $url_from;
        $this->url_to = $url_to;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/redirects';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        return [
            'url_from' => $this->url_from,
            'url_to' => $this->url_to,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}