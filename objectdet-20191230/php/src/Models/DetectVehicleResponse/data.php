<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleResponse;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleResponse\data\detectObjectInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description width
     *
     * @var int
     */
    public $width;

    /**
     * @description height
     *
     * @var int
     */
    public $height;

    /**
     * @description detectObjectInfoList
     *
     * @var array
     */
    public $detectObjectInfoList;
    protected $_name = [
        'width'                => 'Width',
        'height'               => 'Height',
        'detectObjectInfoList' => 'DetectObjectInfoList',
    ];

    public function validate()
    {
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('detectObjectInfoList', $this->detectObjectInfoList, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['Width']                = $this->width;
        $res['Height']               = $this->height;
        $res['DetectObjectInfoList'] = [];
        if (null !== $this->detectObjectInfoList && \is_array($this->detectObjectInfoList)) {
            $n = 0;
            foreach ($this->detectObjectInfoList as $item) {
                $res['DetectObjectInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['DetectObjectInfoList'])) {
            if (!empty($map['DetectObjectInfoList'])) {
                $model->detectObjectInfoList = [];
                $n                           = 0;
                foreach ($map['DetectObjectInfoList'] as $item) {
                    $model->detectObjectInfoList[$n++] = null !== $item ? detectObjectInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
