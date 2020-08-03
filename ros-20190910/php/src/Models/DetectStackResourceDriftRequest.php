<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DetectStackResourceDriftRequest extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $logicalResourceId;
    protected $_name = [
        'stackId'           => 'StackId',
        'clientToken'       => 'ClientToken',
        'regionId'          => 'RegionId',
        'logicalResourceId' => 'LogicalResourceId',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('logicalResourceId', $this->logicalResourceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectStackResourceDriftRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }

        return $model;
    }
}
