<?php

namespace DoocaCommerce\Integrator\Providers\Requests\BlogPost;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class BlogPostUpdateRequest implements Request
{
    protected int $id;
    protected int $blog_category_id;
    protected ?string $name;
    protected ?string $description;
    protected ?array $image;
    protected ?string $slug;
    protected ?string $tags;
    protected ?string $meta_title;
    protected ?string $meta_description;
    protected ?string $meta_keywords;
    protected ?string $url;
    protected ?bool $active;

    public function __construct(
        int $id,
        int $blog_category_id,
        ?string $name,
        ?string $description,
        ?array $image,
        ?string $slug,
        ?string $tags,
        ?string $meta_title,
        ?string $meta_description,
        ?string $meta_keywords,
        ?string $url,
        ?bool $active
    ) {
        $this->id = $id;
        $this->blog_category_id = $blog_category_id;
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->slug = $slug;
        $this->tags = $tags;
        $this->meta_title = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->url = $url;
        $this->active = $active;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "post_category_id" => $this->blog_category_id,
            "name" => $this->name,
            "description" => $this->description,
            "image" => $this->image,
            "slug" => $this->slug,
            "tags" => $this->tags,
            "meta_title" => $this->meta_title,
            "meta_description" => $this->meta_description,
            "meta_keywords" => $this->meta_keywords,
            "url" => $this->url,
            "active" => $this->active
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
            'dc-action'  => 'update'
        ];
    }
}