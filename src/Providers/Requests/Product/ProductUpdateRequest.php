<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Product;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ProductUpdateRequest implements Request
{
    protected $id;
    protected $external_id;
    protected $category_default_id;
    protected $brand_id;
    protected $hotsite_id;
    protected $name;
    protected $slug;
    protected $description;
    protected $short_description;
    protected $relevance;
    protected $tags;
    protected $min_quantity;
    protected $max_quantity;
    protected $sell_in_kit_only;
    protected $meta_title;
    protected $meta_description;
    protected $meta_keywords;
    protected $kit;
    protected $kit_markup;
    protected $is_virtual;
    protected $is_pre_sale;
    protected $images;
    protected $attachments;
    protected $video;
    protected $weight;
    protected $depth;
    protected $width;
    protected $height;
    protected $sell_out_of_stock;
    protected $price_out_of_stock;
    protected $additional_time_out_of_stock;
    protected $price;
    protected $price_compare;
    protected $cost;
    protected $billet_discount;
    protected $warranty;
    protected $model;
    protected $gender;
    protected $age_group;
    protected $stock_location;
    protected $st;
    protected $ncm;
    protected $ipi;
    protected $active;
    protected $has_gift_wrapping;
    protected $created_at;
    protected $updated_at;
    protected $brand;
    protected $category_default;
    protected $categories;
    protected $features;
    protected $exclude_carriers;
    protected $components;
    protected $variations;

    public function __construct(
        $id,
        $external_id,
        $category_default_id,
        $brand_id,
        $hotsite_id,
        $name,
        $slug,
        $description,
        $short_description,
        $relevance,
        $tags,
        $min_quantity,
        $max_quantity,
        $sell_in_kit_only,
        $meta_title,
        $meta_description,
        $meta_keywords,
        $kit,
        $kit_markup,
        $is_virtual,
        $is_pre_sale,
        $images,
        $attachments,
        $video,
        $weight,
        $depth,
        $width,
        $height,
        $sell_out_of_stock,
        $price_out_of_stock,
        $additional_time_out_of_stock,
        $price,
        $price_compare,
        $cost,
        $billet_discount,
        $warranty,
        $model,
        $gender,
        $age_group,
        $stock_location,
        $st,
        $ncm,
        $ipi,
        $active,
        $has_gift_wrapping,
        $created_at,
        $updated_at,
        $brand,
        $category_default,
        $categories,
        $features,
        $exclude_carriers,
        $components,
        $variations
    ) {
        $this->id = $id;
        $this->external_id = $external_id;
        $this->category_default_id = $category_default_id;
        $this->brand_id = $brand_id;
        $this->hotsite_id = $hotsite_id;
        $this->name = $name;
        $this->slug = $slug;
        $this->description = $description;
        $this->short_description = $short_description;
        $this->relevance = $relevance;
        $this->tags = $tags;
        $this->min_quantity = $min_quantity;
        $this->max_quantity = $max_quantity;
        $this->sell_in_kit_only = $sell_in_kit_only;
        $this->meta_title = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->kit = $kit;
        $this->kit_markup = $kit_markup;
        $this->is_virtual = $is_virtual;
        $this->is_pre_sale = $is_pre_sale;
        $this->images = $images;
        $this->attachments = $attachments;
        $this->video = $video;
        $this->weight = $weight;
        $this->depth = $depth;
        $this->width = $width;
        $this->height = $height;
        $this->sell_out_of_stock = $sell_out_of_stock;
        $this->price_out_of_stock = $price_out_of_stock;
        $this->additional_time_out_of_stock = $additional_time_out_of_stock;
        $this->price = $price;
        $this->price_compare = $price_compare;
        $this->cost = $cost;
        $this->billet_discount = $billet_discount;
        $this->warranty = $warranty;
        $this->model = $model;
        $this->gender = $gender;
        $this->age_group = $age_group;
        $this->stock_location = $stock_location;
        $this->st = $st;
        $this->ncm = $ncm;
        $this->ipi = $ipi;
        $this->active = $active;
        $this->has_gift_wrapping = $has_gift_wrapping;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->brand = $brand;
        $this->category_default = $category_default;
        $this->categories = $categories;
        $this->features = $features;
        $this->exclude_carriers = $exclude_carriers;
        $this->components = $components;
        $this->variations = $variations;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'external_id' => $this->external_id,
            'category_default_id' => $this->category_default_id,
            'brand_id' => $this->brand_id,
            'hotsite_id' => $this->hotsite_id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'short_description' => $this->short_description,
            'relevance' => $this->relevance,
            'tags' => $this->tags,
            'min_quantity' => $this->min_quantity,
            'max_quantity' => $this->max_quantity,
            'sell_in_kit_only' => $this->sell_in_kit_only,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
            'kit' => $this->kit,
            'kit_markup' => $this->kit_markup,
            'is_virtual' => $this->is_virtual,
            'is_pre_sale' => $this->is_pre_sale,
            'images' => $this->images,
            'attachments' => $this->attachments,
            'video' => $this->video,
            'weight' => $this->weight,
            'depth' => $this->depth,
            'width' => $this->width,
            'height' => $this->height,
            'sell_out_of_stock' => $this->sell_out_of_stock,
            'price_out_of_stock' => $this->price_out_of_stock,
            'additional_time_out_of_stock' => $this->additional_time_out_of_stock,
            'price' => $this->price,
            'price_compare' => $this->price_compare,
            'cost' => $this->cost,
            'billet_discount' => $this->billet_discount,
            'warranty' => $this->warranty,
            'model' => $this->model,
            'gender' => $this->gender,
            'age_group' => $this->age_group,
            'stock_location' => $this->stock_location,
            'st' => $this->st,
            'ncm' => $this->ncm,
            'ipi' => $this->ipi,
            'active' => $this->active,
            'has_gift_wrapping' => $this->has_gift_wrapping,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'brand' => $this->brand,
            'category_default' => $this->category_default,
            'categories' => $this->categories,
            'features' => $this->features,
            'exclude_carriers' => $this->exclude_carriers,
            'components' => $this->components,
            'variations' => $this->variations,
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
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
