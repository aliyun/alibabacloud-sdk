<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DeleteStackInstancesRequest extends Model
{
    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description StackGroupName
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description AccountIds
     *
     * @var array
     */
    public $accountIds;

    /**
     * @description RegionIds
     *
     * @var array
     */
    public $regionIds;

    /**
     * @description RetainStacks
     *
     * @var bool
     */
    public $retainStacks;

    /**
     * @description ClientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description OperationDescription
     *
     * @var string
     */
    public $operationDescription;

    /**
     * @description OperationPreferences
     *
     * @var array
     */
    public $operationPreferences;
    protected $_name = [
        'regionId'             => 'RegionId',
        'stackGroupName'       => 'StackGroupName',
        'accountIds'           => 'AccountIds',
        'regionIds'            => 'RegionIds',
        'retainStacks'         => 'RetainStacks',
        'clientToken'          => 'ClientToken',
        'operationDescription' => 'OperationDescription',
        'operationPreferences' => 'OperationPreferences',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
        Model::validateRequired('accountIds', $this->accountIds, true);
        Model::validateRequired('regionIds', $this->regionIds, true);
        Model::validateRequired('retainStacks', $this->retainStacks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
        }
        if (null !== $this->retainStacks) {
            $res['RetainStacks'] = $this->retainStacks;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationPreferences) {
            $res['OperationPreferences'] = $this->operationPreferences;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStackInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['AccountIds'])) {
            $model->accountIds = $map['AccountIds'];
        }
        if (isset($map['RegionIds'])) {
            $model->regionIds = $map['RegionIds'];
        }
        if (isset($map['RetainStacks'])) {
            $model->retainStacks = $map['RetainStacks'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferences = $map['OperationPreferences'];
        }

        return $model;
    }
}
