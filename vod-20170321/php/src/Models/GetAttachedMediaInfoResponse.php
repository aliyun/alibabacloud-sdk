<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponse\attachedMediaList;
use AlibabaCloud\Tea\Model;

class GetAttachedMediaInfoResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.attachedMediaList
     *
     * @var array
     */
    public $attachedMediaList;

    /**
     * @description data.nonExistMediaIds
     *
     * @var array
     */
    public $nonExistMediaIds;
    protected $_name = [
        'requestId'         => 'RequestId',
        'attachedMediaList' => 'AttachedMediaList',
        'nonExistMediaIds'  => 'NonExistMediaIds',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('attachedMediaList', $this->attachedMediaList, true);
        Model::validateRequired('nonExistMediaIds', $this->nonExistMediaIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->attachedMediaList) {
            $res['AttachedMediaList'] = [];
            if (null !== $this->attachedMediaList && \is_array($this->attachedMediaList)) {
                $n = 0;
                foreach ($this->attachedMediaList as $item) {
                    $res['AttachedMediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nonExistMediaIds) {
            $res['NonExistMediaIds'] = [];
            if (null !== $this->nonExistMediaIds) {
                $res['NonExistMediaIds'] = $this->nonExistMediaIds;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAttachedMediaInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AttachedMediaList'])) {
            if (!empty($map['AttachedMediaList'])) {
                $model->attachedMediaList = [];
                $n                        = 0;
                foreach ($map['AttachedMediaList'] as $item) {
                    $model->attachedMediaList[$n++] = null !== $item ? attachedMediaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NonExistMediaIds'])) {
            if (!empty($map['NonExistMediaIds'])) {
                $model->nonExistMediaIds = [];
                $model->nonExistMediaIds = $map['NonExistMediaIds'];
            }
        }

        return $model;
    }
}
