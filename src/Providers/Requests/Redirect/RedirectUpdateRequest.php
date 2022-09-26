<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Redirect;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class RedirectUpdateRequest implements Request
{
    protected int $id;
    protected string $url_from;
    protected string $url_to;
    protected ?string $created_at;
    protected ?string $updated_at;
    
    public function __construct(
        int $id,
        string $url_from,
        string $url_to,
        ?string $created_at,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->url_from = $url_from;
        $this->url_to = $url_to;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function getMethod(): string
    {
        return 'PUT';
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
            'id' => $this->id,
            'url_from' => $this->url_from,
            'url_to' => $this->url_to,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
