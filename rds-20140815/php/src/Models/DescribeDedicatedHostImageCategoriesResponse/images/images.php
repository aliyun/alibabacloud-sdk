<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostImageCategoriesResponse\images;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description imageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description imageCode
     *
     * @var string
     */
    public $imageCode;
    protected $_name = [
        'imageName' => 'ImageName',
        'imageCode' => 'ImageCode',
    ];

    public function validate()
    {
        Model::validateRequired('imageName', $this->imageName, true);
        Model::validateRequired('imageCode', $this->imageCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageCode) {
            $res['ImageCode'] = $this->imageCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageCode'])) {
            $model->imageCode = $map['ImageCode'];
        }

        return $model;
    }
}
