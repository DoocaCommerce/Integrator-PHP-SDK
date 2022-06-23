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
    protected ?bool   $active;

    public function __construct(
        int $id,
        ?string $name,
        ?array $content,
        ?string $slug,
        ?string $meta_title,
        ?string $meta_description,
        ?string $meta_keywords,
        ?bool $not_index,
        ?string $url,
        ?bool   $active
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->content = $content;
        $this->slug = $slug;
        $this->meta_title = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->not_index = $not_index;
        $this->url = $url;
        $this->active = $active;
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
        return 'integrator/import/landing-pages';
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