<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Page;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class PageCreateRequest implements Request
{
    protected int $id;
    protected ?string $name;
    protected ?string $description;
    protected ?string $template;
    protected ?array  $faq;
    protected ?string $slug;
    protected ?string $meta_title;
    protected ?string $meta_description;
    protected ?string $meta_keywords;
    protected ?string $url;
    protected ?bool   $active;
    protected ?string $created_at;
    protected ?string $updated_a;

    public function __construct(
        int $id,
        ?string $name,
        ?string $description,
        ?string $template,
        ?array  $faq,
        ?string $slug,
        ?string $meta_title,
        ?string $meta_description,
        ?string $meta_keywords,
        ?string $url,
        ?bool   $active,
        ?string $created_at,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->template = $template;
        $this->faq = $faq;
        $this->slug = $slug;
        $this->meta_title = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->url = $url;
        $this->active = $active;
        $this->created_at = $created_at;
        $this->updated_a = $updated_at;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "template" => $this->template,
            "faq" => $this->faq,
            "slug" => $this->slug,
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
        return 'integrator/import/pages';
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