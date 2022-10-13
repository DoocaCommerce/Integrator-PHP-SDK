<?php

namespace DoocaCommerce\Integrator\Providers\Requests\LandingPage;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class LandingPageUpdateRequest implements Request
{
    protected int $id;
    protected ?string $name;
    protected ?array $content;
    protected ?string $slug;
    protected ?string $meta_title;
    protected ?string $meta_description;
    protected ?string $meta_keywords;
    protected ?bool $not_index;
    protected ?string $url;
    protected ?bool $active;
    protected ?string $created_at;
    protected ?string $updated_at;

    public function __construct(
        int $id,
        ?string $name,
        ?array $content,
        ?string $slug,
        ?string $meta_title,
        ?string $meta_description,
        ?string $meta_keywords,
        ?bool $not_index,
        ?bool $active,
        ?string $created_at,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->content = $content;
        $this->slug = $slug;
        $this->meta_title = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->not_index = $not_index;
        $this->active = $active;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

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
            "active" => $this->active,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/landing-pages';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
