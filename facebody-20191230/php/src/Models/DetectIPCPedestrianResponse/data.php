<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectIPCPedestrianResponse;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectIPCPedestrianResponse\data\imageInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var array
     */
    public $imageInfoList;
    protected $_name = [
        'imageInfoList' => 'ImageInfoList',
    ];

    public function validate()
    {
        Model::validateRequired('imageInfoList', $this->imageInfoList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageInfoList) {
            $res['ImageInfoList'] = [];
            if (null !== $this->imageInfoList && \is_array($this->imageInfoList)) {
                $n = 0;
                foreach ($this->imageInfoList as $item) {
                    $res['ImageInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
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
        if (isset($map['ImageInfoList'])) {
            if (!empty($map['ImageInfoList'])) {
                $model->imageInfoList = [];
                $n                    = 0;
                foreach ($map['ImageInfoList'] as $item) {
                    $model->imageInfoList[$n++] = null !== $item ? imageInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
