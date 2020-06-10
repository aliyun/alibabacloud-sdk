<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Models\SearchImageResponse\data;

use AlibabaCloud\Tea\Model;

class matchList extends Model
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
    protected $_name = [
        'dataId'    => 'DataId',
        'extraData' => 'ExtraData',
        'entityId'  => 'EntityId',
    ];

    public function validate()
    {
        Model::validateRequired('dataId', $this->dataId, true);
        Model::validateRequired('extraData', $this->extraData, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchList
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

        return $model;
    }
}
