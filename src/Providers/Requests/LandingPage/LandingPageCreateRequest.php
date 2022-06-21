<?php

namespace DoocaCommerce\Integrator\Providers\Requests\LandingPage;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class LandingPageCreateRequest implements Request
{
    public function __construct(
        protected int $id,
        protected ?string $name,
        protected ?array $content,
        protected ?string $slug,
        protected ?string $meta_title,
        protected ?string $meta_description,
        protected ?string $meta_keywords,
        protected ?bool $not_index,
        protected ?string $url,
        protected ?bool   $active,
        protected ?string $created_at,
        protected ?string $updated_at
    ) {}

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "content" => $this->content,
            "slug" => $this->slug,
            "meta_title" => $this->meta_title,
            "meta_description" => $this->meta_description,
            "meta_keywords" => $this->meta_keywords,
            "not_index" => $this->not_index,
            "url" => $this->url,
            "active" => $this->active,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/landing-pages';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function getHeader(): array
    {
        return [
            'dc-action'  => 'insert'
        ];
    }
}