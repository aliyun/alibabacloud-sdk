<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMAliyunResourceSyncResultResponse\data\subResults;

use AlibabaCloud\Tea\Model;

class resourceSyncSubResult extends Model
{
    /**
     * @description resourceType
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description syncCount
     *
     * @var int
     */
    public $syncCount;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description errMsg
     *
     * @var string
     */
    public $errMsg;
    protected $_name = [
        'resourceType' => 'ResourceType',
        'syncCount'    => 'SyncCount',
        'success'      => 'Success',
        'errMsg'       => 'ErrMsg',
    ];

    public function validate()
    {
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('syncCount', $this->syncCount, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('errMsg', $this->errMsg, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->syncCount) {
            $res['SyncCount'] = $this->syncCount;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceSyncSubResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SyncCount'])) {
            $model->syncCount = $map['SyncCount'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        return $model;
    }
}
