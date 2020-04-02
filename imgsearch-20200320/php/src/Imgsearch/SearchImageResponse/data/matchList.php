<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\SearchImageResponse\data;

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
     * @description imageUrl
     *
     * @var string
     */
    public $imageUrl;
    /**
     * @description entityId
     *
     * @var string
     */
    public $entityId;
    protected $_name = [
        'dataId'    => 'DataId',
        'extraData' => 'ExtraData',
        'imageUrl'  => 'ImageUrl',
        'entityId'  => 'EntityId',
    ];

    public function validate()
    {
        Model::validateRequired('dataId', $this->dataId, true);
        Model::validateRequired('extraData', $this->extraData, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['DataId']    = $this->dataId;
        $res['ExtraData'] = $this->extraData;
        $res['ImageUrl']  = $this->imageUrl;
        $res['EntityId']  = $this->entityId;

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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        return $model;
    }
}
