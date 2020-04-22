<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\AddImageResponse;

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
    protected $_name = [
        'categoryId' => 'CategoryId',
        'region'     => 'Region',
    ];

    public function validate()
    {
        Model::validateRequired('categoryId', $this->categoryId, true);
        Model::validateRequired('region', $this->region, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['CategoryId'] = $this->categoryId;
        $res['Region']     = $this->region;

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

        return $model;
    }
}
