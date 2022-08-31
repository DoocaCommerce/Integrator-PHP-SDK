<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Product;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ProductCreateRequest implements Request
{
    protected int $id;
    protected string $name;
    protected string $slug;
    protected ?int $category_default_id = null;
    protected ?int $brand_id = null;
    protected ?int $hotsite_id = null;
    protected ?string $external_id = null;
    protected ?string $description = null;
    protected ?string $short_description = null;
    protected ?string $relevance = null;
    protected ?string $tags = null;
    protected ?float $price = null;
    protected ?float $price_compare = null;
    protected ?float $cost = null;
    protected ?float $billet_discount = null;
    protected ?float $weight = null;
    protected ?float $depth = null;
    protected ?float $width = null;
    protected ?float $height = null;
    protected float $min_quantity = 1.0;
    protected ?float $max_quantity = null;
    protected bool $sell_in_kit_only = false;
    protected bool $sell_out_of_stock = false;
    protected ?float $price_out_of_stock = null;
    protected ?int $additional_time_out_of_stock = null;
    protected bool $kit = false;
    protected float $kit_markup = 1.0;
    protected ?string $video = null;
    protected bool $st = false;
    protected ?string $ncm = null;
    protected ?float $ipi = null;
    protected ?string $gender = null;
    protected ?string $age_group = null;
    protected ?string $warranty = null;
    protected ?string $model = null;
    protected ?string $stock_location = null;
    protected bool $is_virtual = false;
    protected bool $is_pre_sale = false;
    protected bool $has_gift_wrapping = true;
    protected ?string $meta_description = null;
    protected ?string $meta_title = null;
    protected ?string $meta_keywords = null;
    protected bool $active = true;
    protected ?array $category_ids = [];
    protected ?array $feature_ids = [];
    protected ?array $carrie_exclude_ids = [];
    protected ?array $images = null;
    protected ?array $variations = [];
    protected ?array $components = [];
    protected ?string $created_at;
    protected ?string $updated_at;

    public function __construct(
        int $id,
        string $name,
        string $slug,
        ?int $category_default_id = null,
        ?int $brand_id = null,
        ?int $hotsite_id = null,
        ?string $external_id = null,
        ?string $description = null,
        ?string $short_description = null,
        ?string $relevance = null,
        ?string $tags = null,
        ?float $price = null,
        ?float $price_compare = null,
        ?float $cost = null,
        ?float $billet_discount = null,
        ?float $weight = null,
        ?float $depth = null,
        ?float $width = null,
        ?float $height = null,
        float $min_quantity = 1.0,
        ?float $max_quantity = null,
        bool $sell_in_kit_only = false,
        bool $sell_out_of_stock = false,
        ?float $price_out_of_stock = null,
        ?int $additional_time_out_of_stock = null,
        bool $kit = false,
        float $kit_markup = 1.0,
        ?string $video = null,
        bool $st = false,
        ?string $ncm = null,
        ?float $ipi = null,
        ?string $gender = null,
        ?string $age_group = null,
        ?string $warranty = null,
        ?string $model = null,
        ?string $stock_location = null,
        bool $is_virtual = false,
        bool $is_pre_sale = false,
        bool $has_gift_wrapping = true,
        ?string $meta_description = null,
        ?string $meta_title = null,
        ?string $meta_keywords = null,
        bool $active = true,
        ?array $category_ids = [],
        ?array $feature_ids = [],
        ?array $carrie_exclude_ids = [],
        ?array $images = null,
        ?array $variations = [],
        ?array $components = [],
        ?string $created_at,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->category_default_id = $category_default_id;
        $this->brand_id = $brand_id;
        $this->hotsite_id = $hotsite_id;
        $this->external_id = $external_id;
        $this->description = $description;
        $this->short_description = $short_description;
        $this->relevance = $relevance;
        $this->tags = $tags;
        $this->price = $price;
        $this->price_compare = $price_compare;
        $this->cost = $cost;
        $this->billet_discount = $billet_discount;
        $this->weight = $weight;
        $this->depth = $depth;
        $this->width = $width;
        $this->height = $height;
        $this->min_quantity = $min_quantity;
        $this->max_quantity = $max_quantity;
        $this->sell_in_kit_only = $sell_in_kit_only;
        $this->sell_out_of_stock = $sell_out_of_stock;
        $this->price_out_of_stock = $price_out_of_stock;
        $this->additional_time_out_of_stock = $additional_time_out_of_stock;
        $this->kit = $kit;
        $this->kit_markup = $kit_markup;
        $this->video = $video;
        $this->st = $st;
        $this->ncm = $ncm;
        $this->ipi = $ipi;
        $this->gender = $gender;
        $this->age_group = $age_group;
        $this->warranty = $warranty;
        $this->model = $model;
        $this->stock_location = $stock_location;
        $this->is_virtual = $is_virtual;
        $this->is_pre_sale = $is_pre_sale;
        $this->has_gift_wrapping = $has_gift_wrapping;
        $this->meta_description = $meta_description;
        $this->meta_title = $meta_title;
        $this->meta_keywords = $meta_keywords;
        $this->active = $active;
        $this->category_ids = $category_ids;
        $this->feature_ids = $feature_ids;
        $this->carrie_exclude_ids = $carrie_exclude_ids;
        $this->images = $images;
        $this->variations = $variations;
        $this->components = $components;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "slug" => $this->slug,
            "category_default_id" => $this->category_default_id,
            "brand_id" => $this->brand_id,
            "hotsite_id" => $this->hotsite_id,
            "external_id" => $this->external_id,
            "description" => $this->description,
            "short_description" => $this->short_description,
            "relevance" => $this->relevance,
            "tags" => $this->tags,
            "price" => $this->price,
            "price_compare" => $this->price_compare,
            "cost" => $this->cost,
            "billet_discount" => $this->billet_discount,
            "weight" => $this->weight,
            "depth" => $this->depth,
            "width" => $this->width,
            "height" => $this->height,
            "min_quantity" => $this->min_quantity,
            "max_quantity" => $this->max_quantity,
            "sell_in_kit_only" => $this->sell_in_kit_only,
            "sell_out_of_stock" => $this->sell_out_of_stock,
            "price_out_of_stock" => $this->price_out_of_stock,
            "additional_time_out_of_stock" => $this->additional_time_out_of_stock,
            "kit" => $this->kit,
            "kit_markup" => $this->kit_markup,
            "video" => $this->video,
            "st" => $this->st,
            "ncm" => $this->ncm,
            "ipi" => $this->ipi,
            "gender" => $this->gender,
            "age_group" => $this->age_group,
            "warranty" => $this->warranty,
            "model" => $this->model,
            "stock_location" => $this->stock_location,
            "is_virtual" => $this->is_virtual,
            "is_pre_sale" => $this->is_pre_sale,
            "has_gift_wrapping" => $this->has_gift_wrapping,
            "meta_description" => $this->meta_description,
            "meta_title" => $this->meta_title,
            "meta_keywords" => $this->meta_keywords,
            "active" => $this->active,
            "category_ids" => $this->category_ids,
            "feature_ids" => $this->feature_ids,
            "carrie_exclude_ids" => $this->carrie_exclude_ids,
            "images" => $this->images,
            "variations" => $this->variations,
            "components" => $this->components,
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
        return 'integrator/import/product';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
