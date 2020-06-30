<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByNameResponse;

use AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByNameResponse\picInfo\allCategories;
use AlibabaCloud\Tea\Model;

class picInfo extends Model
{
    /**
     * @description categoryId
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description allCategories
     *
     * @var array
     */
    public $allCategories;
    protected $_name = [
        'categoryId'    => 'CategoryId',
        'region'        => 'Region',
        'allCategories' => 'AllCategories',
    ];

    public function validate()
    {
        Model::validateRequired('categoryId', $this->categoryId, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('allCategories', $this->allCategories, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->allCategories) {
            $res['AllCategories'] = [];
            if (null !== $this->allCategories && \is_array($this->allCategories)) {
                $n = 0;
                foreach ($this->allCategories as $item) {
                    $res['AllCategories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return picInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['AllCategories'])) {
            if (!empty($map['AllCategories'])) {
                $model->allCategories = [];
                $n                    = 0;
                foreach ($map['AllCategories'] as $item) {
                    $model->allCategories[$n++] = null !== $item ? allCategories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
