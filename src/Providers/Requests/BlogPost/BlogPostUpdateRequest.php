<?php

namespace DoocaCommerce\Integrator\Providers\Requests\BlogPost;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class BlogPostUpdateRequest implements Request
{
    public function __construct(
        protected int $id,
        protected int $blog_category_id,
        protected ?string $name,
        protected ?string $description,
        protected ?array $image,
        protected ?string $slug,
        protected ?string $tags,
        protected ?string $meta_title,
        protected ?string $meta_description,
        protected ?string $meta_keywords,
        protected ?string $url,
        protected ?bool $active,
        protected ?string $created_at,
        protected ?string $updated_at,
        private   string $token
    ) {}

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
            'dc-action'  => 'update'
        ];
    }
}