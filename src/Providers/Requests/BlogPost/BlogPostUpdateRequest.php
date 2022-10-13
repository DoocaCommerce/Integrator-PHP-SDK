<?php

namespace DoocaCommerce\Integrator\Providers\Requests\BlogPost;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class BlogPostUpdateRequest implements Request
{
    protected int $id;
    protected int $post_category_id;
    protected ?string $name;
    protected ?string $description;
    protected ?array $image;
    protected ?string $slug;
    protected ?string $tags;
    protected ?string $meta_title;
    protected ?string $meta_description;
    protected ?string $meta_keywords;
    protected ?bool $active;
    protected ?string $updated_at;

    public function __construct(
        int $id,
        int $post_category_id,
        ?string $name,
        ?string $description,
        ?array $image,
        ?string $slug,
        ?string $tags,
        ?string $meta_title,
        ?string $meta_description,
        ?string $meta_keywords,
        ?bool $active,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->post_category_id = $post_category_id;
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->slug = $slug;
        $this->tags = $tags;
        $this->meta_title = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->active = $active;
        $this->updated_at = $updated_at;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "post_category_id" => $this->post_category_id,
            "name" => $this->name,
            "description" => $this->description,
            "image" => $this->image,
            "slug" => $this->slug,
            "tags" => $this->tags,
            "meta_title" => $this->meta_title,
            "meta_description" => $this->meta_description,
            "meta_keywords" => $this->meta_keywords,
            "active" => $this->active,
            "updated_at" => $this->updated_at,
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/blog-post';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
