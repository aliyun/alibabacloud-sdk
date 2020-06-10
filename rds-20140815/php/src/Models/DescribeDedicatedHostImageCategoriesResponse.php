<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostImageCategoriesResponse\images;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostImageCategoriesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.itemList
     *
     * @var images
     */
    public $images;
    protected $_name = [
        'requestId' => 'RequestId',
        'images'    => 'Images',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('images', $this->images, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->images) {
            $res['Images'] = null !== $this->images ? $this->images->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostImageCategoriesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Images'])) {
            $model->images = images::fromMap($map['Images']);
        }

        return $model;
    }
}
