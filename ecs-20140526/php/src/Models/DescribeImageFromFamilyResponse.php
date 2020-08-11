<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponse\image;
use AlibabaCloud\Tea\Model;

class DescribeImageFromFamilyResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var image
     */
    public $image;
    protected $_name = [
        'requestId' => 'RequestId',
        'image'     => 'Image',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('image', $this->image, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageFromFamilyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }

        return $model;
    }
}
