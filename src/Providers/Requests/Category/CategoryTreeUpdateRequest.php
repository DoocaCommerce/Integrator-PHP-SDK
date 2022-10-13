<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Category;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class CategoryTreeUpdateRequest implements Request
{
    protected $tree;

    public function __construct($tree)
    {
        $this->tree = $tree;
    }

    public function toArray(): array
    {
        return [
            'data' => $this->tree
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/category-tree';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
