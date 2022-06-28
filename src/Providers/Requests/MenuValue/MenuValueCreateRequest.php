<?php

namespace DoocaCommerce\Integrator\Providers\Requests\MenuValue;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class MenuValueCreateRequest implements Request
{
    protected ?int $id;
    protected int $menu_id;
    protected ?int $parent_id;
    protected ?int $category_id;
    protected ?int $brand_id;
    protected ?int $hotsite_id;
    protected ?int $page_id;
    protected string $name;
    protected ?string $menu_type;
    protected ?string $link;
    protected ?string $image;
    protected bool $is_featured = false;
    protected ?string $banner;
    protected ?string $banner_link;
    protected string $slug;
    protected bool $active = true;
    protected ?int $position = null;
    protected ?string $created_at = null;
    protected ?string $updated_at = null;

    public function __construct(
        int $id,
        int $menu_id,
		?int $parent_id,
		?int $category_id,
		?int $brand_id,
		?int $hotsite_id,
		?int $page_id,
		string $name,
		?string $menu_type,
		?string $link,
		?string $image,
		bool $is_featured = false,
		?string $banner,
		?string $banner_link,
		string $slug,
		bool $active = true,
		?int $position = null,
        ?string $created_at = null,
        ?string $updated_at = null
    ) {
        $this->id = $id;
        $this->menu_id = $menu_id;
        $this->parent_id = $parent_id;
        $this->category_id = $category_id;
        $this->brand_id = $brand_id;
        $this->hotsite_id = $hotsite_id;
        $this->page_id = $page_id;
        $this->name = $name;
        $this->menu_type = $menu_type;
        $this->link = $link;
        $this->image = $image;
        $this->is_featured = $is_featured;
        $this->banner = $banner;
        $this->banner_link = $banner_link;
        $this->slug = $slug;
        $this->active = $active;
        $this->position = $position;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "menu_id" => $this->menu_id,
            "parent_id" => $this->parent_id,
            "category_id" => $this->category_id,
            "brand_id" => $this->brand_id,
            "hotsite_id" => $this->hotsite_id,
            "page_id" => $this->page_id,
            "name" => $this->name,
            "menu_type" => $this->menu_type,
            "link" => $this->link,
            "image" => $this->image,
            "is_featured" => $this->is_featured,
            "banner" => $this->banner,
            "banner_link" => $this->banner_link,
            "slug" => $this->slug,
            "active" => $this->active,
            "position" => $this->position,
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
        return 'integrator/import/menu-values';
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