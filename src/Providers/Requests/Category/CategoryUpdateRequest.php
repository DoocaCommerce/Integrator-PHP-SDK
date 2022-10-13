<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Category;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class CategoryUpdateRequest implements Request
{
    protected int $id;
    protected ?int $parent_id = null;
    protected ?int $hotsite_id = null;
    protected ?string $external_id = null;
    protected ?string $name;
    protected ?string $description = null;
    protected ?array $image = null;
    protected ?array $banner = null;
    protected ?string $banner_link = null;
    protected ?string $breadcrumb = null;
    protected ?int $depth;
    protected ?int $google_taxonomy_id = null;
    protected string $slug;
    protected ?string $meta_title = null;
    protected ?string $meta_description = null;
    protected ?string $meta_keywords = null;
    protected ?int $position = null;
    protected bool $active = true;
    protected ?string $created_at = null;
    protected ?string $updated_at = null;

    public function __construct(
        ?int $parent_id = null,
        int $id,
        ?int $hotsite_id = null,
        ?string $external_id = null,
        ?string $name,
        ?string $description = null,
        ?array $image = null,
        ?array $banner = null,
        ?string $banner_link = null,
        ?string $breadcrumb = null,
        ?int $depth,
        ?int $google_taxonomy_id = null,
        string $slug,
        ?string $meta_title = null,
        ?string $meta_description = null,
        ?string $meta_keywords = null,
        ?int $position = null,
        bool $active = true,
        ?string $created_at = null,
        ?string $updated_at = null
    ) {
        $this->id = $id;
        $this->parent_id = $parent_id;
        $this->hotsite_id = $hotsite_id;
        $this->hotsite_id = $external_id;
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->banner = $banner;
        $this->banner_link = $banner_link;
        $this->breadcrumb = $breadcrumb;
        $this->depth = $depth;
        $this->google_taxonomy_id = $google_taxonomy_id;
        $this->slug = $slug;
        $this->meta_title = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->position = $position;
        $this->active = $active;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "parent_id" => $this->parent_id,
            "hotsite_id" => $this->hotsite_id,
            "external_id" => $this->external_id,
            "name" => $this->name,
            "description" => $this->description,
            "image" => $this->image,
            "banner" => $this->banner,
            "banner_link" => $this->banner_link,
            "breadcrumb" => $this->breadcrumb,
            "depth" => $this->depth,
            "google_taxonomy_id" => $this->google_taxonomy_id,
            "slug" => $this->slug,
            "meta_title" => $this->meta_title,
            "meta_description" => $this->meta_description,
            "meta_keywords" => $this->meta_keywords,
            "position" => $this->position,
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
        return 'integrator/import/category';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
