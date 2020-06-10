<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesRequest\parameterOverrides;
use AlibabaCloud\Tea\Model;

class CreateStackInstancesRequest extends Model
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
     * @description ParameterOverrides
     *
     * @var array
     */
    public $parameterOverrides;

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
        'parameterOverrides'   => 'ParameterOverrides',
        'accountIds'           => 'AccountIds',
        'regionIds'            => 'RegionIds',
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
        if (null !== $this->parameterOverrides) {
            $res['ParameterOverrides'] = [];
            if (null !== $this->parameterOverrides && \is_array($this->parameterOverrides)) {
                $n = 0;
                foreach ($this->parameterOverrides as $item) {
                    $res['ParameterOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
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
     * @return CreateStackInstancesRequest
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
        if (isset($map['ParameterOverrides'])) {
            if (!empty($map['ParameterOverrides'])) {
                $model->parameterOverrides = [];
                $n                         = 0;
                foreach ($map['ParameterOverrides'] as $item) {
                    $model->parameterOverrides[$n++] = null !== $item ? parameterOverrides::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AccountIds'])) {
            $model->accountIds = $map['AccountIds'];
        }
        if (isset($map['RegionIds'])) {
            $model->regionIds = $map['RegionIds'];
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
