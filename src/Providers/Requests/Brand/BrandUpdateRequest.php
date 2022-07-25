<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Brand;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class BrandUpdateRequest implements Request
{
    protected int $id;
    protected ?int $external_id;
    protected ?int $hotsite_id;
    protected ?string $name;
    protected ?string $description;
    protected ?array $image;
    protected ?string $slug;
    protected ?string $meta_title;
    protected ?string $meta_description;
    protected ?string $meta_keywords;
    protected ?string $short_description;
    protected ?array $banner;
    protected ?bool $active;

    public function __construct(
        int $id,
        ?int $external_id,
        ?int $hotsite_id,
        ?string $name,
        ?string $description,
        ?array $image,
        ?string $slug,
        ?string $meta_title,
        ?string $meta_description,
        ?string $meta_keywords,
        ?string $short_description,
        ?array $banner,
        ?bool $active
    ) {
        $this->id = $id;
        $this->external_id = $external_id;
        $this->hotsite_id = $hotsite_id;
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->slug = $slug;
        $this->meta_title = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->short_description = $short_description;
        $this->banner = $banner;
        $this->active = $active;
    }

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
            "active" => $this->active
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/brand';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}