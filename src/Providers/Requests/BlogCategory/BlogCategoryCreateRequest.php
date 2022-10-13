<?php

namespace DoocaCommerce\Integrator\Providers\Requests\BlogCategory;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class BlogCategoryCreateRequest implements Request
{
    protected int $id;
    protected ?string $description;
    protected ?string $slug;
    protected ?string $meta_title;
    protected ?string $meta_description;
    protected ?string $meta_keywords;
    protected ?int $posts_count;
    protected ?int $position;
    protected ?bool $active;
    protected ?string $created_at;
    protected ?string $updated_a;

    public function __construct(
        int $id,
        ?string $name,
        ?string $description,
        ?string $slug,
        ?string $meta_title,
        ?string $meta_description,
        ?string $meta_keywords,
        ?int $posts_count,
        ?int $position,
        ?bool $active,
        ?string $created_at,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->slug = $slug;
        $this->meta_title = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->position = $position;
        $this->posts_count = $posts_count;
        $this->active = $active;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
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
            "posts_count" => $this->posts_count,
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
        return 'integrator/import/blog-category';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
