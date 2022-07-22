<?php

namespace DoocaCommerce\Integrator\Providers\Requests\BlogCategory;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class BlogCategoryUpdateRequest implements Request
{
    protected int $id;
    protected ?string $description;
    protected ?string $slug;
    protected ?string $meta_title;
    protected ?string $meta_description;
    protected ?string $meta_keywords;
    protected ?int $posts_count;
    protected ?string $url;
    protected ?int $position;
    protected ?bool $active;

    public function __construct(
        int $id,
        ?string $name,
        ?string $description,
        ?string $slug,
        ?string $meta_title,
        ?string $meta_description,
        ?string $meta_keywords,
        ?int $posts_count,
        ?string $url,
        ?int $position,
        ?bool $active
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->slug = $slug;
        $this->meta_title = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->position = $position;
        $this->url = $url;
        $this->posts_count = $posts_count;
        $this->active = $active;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "slug" => $this->slug,
            "meta_title" => $this->meta_title,
            "meta_description" => $this->meta_description,
            "meta_keywords" => $this->meta_keywords,
            "position" => $this->position,
            "url" => $this->url,
            "posts_count" => $this->posts_count,
            "active" => $this->active
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/blog-category';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}