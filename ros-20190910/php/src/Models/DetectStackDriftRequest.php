<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DetectStackDriftRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description LogicalResourceId
     *
     * @var array
     */
    public $logicalResourceId;

    /**
     * @description ClientToken
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'stackId'           => 'StackId',
        'regionId'          => 'RegionId',
        'logicalResourceId' => 'LogicalResourceId',
        'clientToken'       => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = [];
            if (null !== $this->logicalResourceId) {
                $res['LogicalResourceId'] = $this->logicalResourceId;
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectStackDriftRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LogicalResourceId'])) {
            if (!empty($map['LogicalResourceId'])) {
                $model->logicalResourceId = [];
                $model->logicalResourceId = $map['LogicalResourceId'];
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
