<?php

namespace DoocaCommerce\Integrator\Providers\Requests\BlogCategory;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class BlogCategoryCreateRequest implements Request
{
    public function __construct(
        protected int $id,
        protected ?string $name,
        protected ?string $description,
        protected ?string $slug,
        protected ?string $meta_title,
        protected ?string $meta_description,
        protected ?string $meta_keywords,
        protected ?int $posts_count,
        protected ?string $url,
        protected ?int $position,
        protected ?bool $active,
        protected ?string $created_at,
        protected ?string $updated_at
    ) {}

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "slug" => $this->slug,
            "meta_title" => $this->meta_title,
            "meta_description" => $this->meta_description,
            "meta_keywords" => $this->meta_keywords,
            "position" => $this->position,
            "url" => $this->url,
            "posts_count" => $this->posts_count,
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
        return 'integrator/import/blog-category';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function getHeader(): array
    {
        return [
            'authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYjQ2YzJlZDBmNTY2NDE0YjdiNmZhZTBmNzU4MDA4MjJmMTA1ZDYyZDdiMGExNmM5ZGU5ODQ4YjNlZjcyOTcyMjczZTYwZjFkM2I3MmJiMTYiLCJpYXQiOjE2NDkwODk1MDIuOTQyNDc4LCJuYmYiOjE2NDkwODk1MDIuOTQyNDg0LCJleHAiOjE2ODA2MjU1MDIuOTE2NTYxLCJzdWIiOiIxMTQ0MSIsInNjb3BlcyI6WyIqIl19.MGSgb_laddeVM9oOiFiedwaCeJg_Xa2CMK-0F_EBnGT-w_ZcUMR8n3YylSKuGF9jEPeLMT46pYUjWzGZKTevB9wSG45TFkvduuk1NuPCT8ghvHKKPwGm4zzS0UWlhvIVXym3L3z3eDzjFn99Hr53PEg2nNCT7rqpZgvlwM_cUHr9qUSvyd51kDiyUyY2lliq6Uba3Kli7hscD2aOqDQM5LFwQC0HYKKlo7dmyqE_foszeV0eDcXdYFcShQo3l1p6NJ-7wgDOKOUOwsgLGDLBwJMWPjlxmgsyuv7pQBjl2z__C3XfCetMeMk1KAD0cfQOXaNS46D6U7RvJc7AWFbcM9jhxcx1GHbwO7_dogwz0dPLUlG0EeyO94TXuEgxl73xosvCJyRKsvQGtdWJOYeBFg1otI-f1v19pmVFkOJyLWJcLFQgTgfcPRCFf0K5hXaX5AZkvgH3KimJl4vB6X2LLZdLQNDlUaXpEmTFmdcJ2uirZ16sMCwoA_MEXEp_tzDx-CjLaJwt3XHri7N9STmvgQMOr3UGLaiKef7OH8R8_hy-0OoBL4C8FTDIk4PfgQgaZv9Fg7PAlDRIP9oC1oERSOf8FV0qywKVs9P_wKqoSgkNFuJKmvHd2lGcgspXi5eY91gxGO0DjtahLEMhF6euwP4PVfs9HZSfbWxbYpUfavE',//.request()->bearerToken(),
            'dc-action'  => 'update'
        ];
    }
}