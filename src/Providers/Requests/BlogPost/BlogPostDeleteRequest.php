<?php

namespace DoocaCommerce\Integrator\Providers\Requests\BlogPost;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class BlogPostDeleteRequest implements Request
{
    public function __construct(
        protected int $id,
        private string $token
    ) {}

    public function toArray(): array
    {
        return [
            "id" => $this->id
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/blog-post';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function getHeader(): array
    {
        return [
            'authorization' => $this->token,
            'dc-action'  => 'delete'
        ];
    }
}