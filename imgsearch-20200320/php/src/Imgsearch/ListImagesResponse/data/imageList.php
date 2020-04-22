<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\ListImagesResponse\data;

use AlibabaCloud\Tea\Model;

class imageList extends Model
{
    /**
     * @description dataId
     *
     * @var string
     */
    public $dataId;

    /**
     * @description extraData
     *
     * @var string
     */
    public $extraData;

    /**
     * @description entityId
     *
     * @var string
     */
    public $entityId;

    /**
     * @description updatedAt
     *
     * @var int
     */
    public $updatedAt;

    /**
     * @description createdAt
     *
     * @var int
     */
    public $createdAt;
    protected $_name = [
        'dataId'    => 'DataId',
        'extraData' => 'ExtraData',
        'entityId'  => 'EntityId',
        'updatedAt' => 'UpdatedAt',
        'createdAt' => 'CreatedAt',
    ];

    public function validate()
    {
        Model::validateRequired('dataId', $this->dataId, true);
        Model::validateRequired('extraData', $this->extraData, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('updatedAt', $this->updatedAt, true);
        Model::validateRequired('createdAt', $this->createdAt, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['DataId']    = $this->dataId;
        $res['ExtraData'] = $this->extraData;
        $res['EntityId']  = $this->entityId;
        $res['UpdatedAt'] = $this->updatedAt;
        $res['CreatedAt'] = $this->createdAt;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        return $model;
    }
}
