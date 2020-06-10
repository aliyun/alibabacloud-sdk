<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\GenerateVehicleRepairPlanRequest;

use AlibabaCloud\Tea\Model;

class damageImageList extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description createTimeStamp
     *
     * @var string
     */
    public $createTimeStamp;
    protected $_name = [
        'imageUrl'        => 'ImageUrl',
        'createTimeStamp' => 'CreateTimeStamp',
    ];

    public function validate()
    {
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('createTimeStamp', $this->createTimeStamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return damageImageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }

        return $model;
    }
}
