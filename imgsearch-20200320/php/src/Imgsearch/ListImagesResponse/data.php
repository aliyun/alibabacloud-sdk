<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\ListImagesResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description scrollId
     *
     * @var string
     */
    public $scrollId;
    /**
     * @description imageList
     *
     * @var array
     */
    public $imageList;
    protected $_name = [
        'scrollId'  => 'ScrollId',
        'imageList' => 'ImageList',
    ];

    public function validate()
    {
        Model::validateRequired('scrollId', $this->scrollId, true);
        Model::validateRequired('imageList', $this->imageList, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['ScrollId']  = $this->scrollId;
        $res['ImageList'] = [];
        if (null !== $this->imageList && \is_array($this->imageList)) {
            $n = 0;
            foreach ($this->imageList as $item) {
                $res['ImageList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ScrollId'])) {
            $model->scrollId = $map['ScrollId'];
        }
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = [];
                $n                = 0;
                foreach ($map['ImageList'] as $item) {
                    $model->imageList[$n++] = null !== $item ? ListImagesResponse\data\imageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
