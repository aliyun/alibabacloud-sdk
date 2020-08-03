<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class SignalResourceRequest extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $uniqueId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $logicalResourceId;
    protected $_name = [
        'stackId'           => 'StackId',
        'status'            => 'Status',
        'regionId'          => 'RegionId',
        'uniqueId'          => 'UniqueId',
        'clientToken'       => 'ClientToken',
        'logicalResourceId' => 'LogicalResourceId',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('uniqueId', $this->uniqueId, true);
        Model::validateRequired('logicalResourceId', $this->logicalResourceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SignalResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }

        return $model;
    }
}
