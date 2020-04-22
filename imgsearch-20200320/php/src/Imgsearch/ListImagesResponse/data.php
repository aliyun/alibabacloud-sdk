<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\ListImagesResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description token
     *
     * @var string
     */
    public $token;

    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description data
     *
     * @var array
     */
    public $imageList;
    protected $_name = [
        'token'      => 'Token',
        'totalCount' => 'TotalCount',
        'imageList'  => 'ImageList',
    ];

    public function validate()
    {
        Model::validateRequired('token', $this->token, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('imageList', $this->imageList, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Token']      = $this->token;
        $res['TotalCount'] = $this->totalCount;
        $res['ImageList']  = [];
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
