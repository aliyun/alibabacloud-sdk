<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListStackOperationRisksRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var bool
     */
    public $retainAllResources;

    /**
     * @var array
     */
    public $retainResources;
    protected $_name = [
        'regionId'           => 'RegionId',
        'stackId'            => 'StackId',
        'operationType'      => 'OperationType',
        'clientToken'        => 'ClientToken',
        'ramRoleName'        => 'RamRoleName',
        'retainAllResources' => 'RetainAllResources',
        'retainResources'    => 'RetainResources',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackId', $this->stackId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->retainAllResources) {
            $res['RetainAllResources'] = $this->retainAllResources;
        }
        if (null !== $this->retainResources) {
            $res['RetainResources'] = $this->retainResources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackOperationRisksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RetainAllResources'])) {
            $model->retainAllResources = $map['RetainAllResources'];
        }
        if (isset($map['RetainResources'])) {
            if (!empty($map['RetainResources'])) {
                $model->retainResources = $map['RetainResources'];
            }
        }

        return $model;
    }
}
