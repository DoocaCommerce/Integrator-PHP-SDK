<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Brand;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class BrandCreateRequest implements Request
{
    public function __construct(
        protected int $id,
        protected ?int $external_id,
        protected ?int $hotsite_id,
        protected ?string $name,
        protected ?string $description,
        protected ?array $image,
        protected ?string $slug,
        protected ?string $meta_title,
        protected ?string $meta_description,
        protected ?string $meta_keywords,
        protected ?string $short_description,
        protected ?array $banner,
        protected ?bool $active,
        protected ?string $created_at,
        protected ?string $updated_at,
        private   string $token
    ) {}

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "external_id" => $this->external_id,
            "hotsite_id" => $this->hotsite_id,
            "name" => $this->name,
            "description" => $this->description,
            "image" => $this->image,
            "slug" => $this->slug,
            "meta_title" => $this->meta_title,
            "meta_description" => $this->meta_description,
            "meta_keywords" => $this->meta_keywords,
            "short_description" => $this->short_description,
            "banner" => $this->banner,
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
        return 'integrator/import/brand';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function getHeader(): array
    {
        return [
            'authorization' => $this->token,
            'dc-action'  => 'insert'
        ];
    }
}