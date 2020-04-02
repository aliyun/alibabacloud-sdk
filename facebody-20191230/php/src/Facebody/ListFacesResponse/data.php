<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\ListFacesResponse;

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
     * @description faceList
     *
     * @var array
     */
    public $faceList;
    protected $_name = [
        'scrollId' => 'ScrollId',
        'faceList' => 'FaceList',
    ];

    public function validate()
    {
        Model::validateRequired('scrollId', $this->scrollId, true);
        Model::validateRequired('faceList', $this->faceList, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['ScrollId'] = $this->scrollId;
        $res['FaceList'] = [];
        if (null !== $this->faceList && \is_array($this->faceList)) {
            $n = 0;
            foreach ($this->faceList as $item) {
                $res['FaceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['FaceList'])) {
            if (!empty($map['FaceList'])) {
                $model->faceList = [];
                $n               = 0;
                foreach ($map['FaceList'] as $item) {
                    $model->faceList[$n++] = null !== $item ? ListFacesResponse\data\faceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
