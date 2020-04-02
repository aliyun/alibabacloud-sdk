<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeMultiContainerGroupMetricRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;
    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;
    /**
     * @description containerGroupIdParam
     *
     * @var string
     */
    public $containerGroupIds;
    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;
    /**
     * @description metricType
     *
     * @var string
     */
    public $metricType;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'containerGroupIds'    => 'ContainerGroupIds',
        'resourceGroupId'      => 'ResourceGroupId',
        'metricType'           => 'MetricType',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('containerGroupIds', $this->containerGroupIds, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['OwnerAccount']         = $this->ownerAccount;
        $res['RegionId']             = $this->regionId;
        $res['ContainerGroupIds']    = $this->containerGroupIds;
        $res['ResourceGroupId']      = $this->resourceGroupId;
        $res['MetricType']           = $this->metricType;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMultiContainerGroupMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ContainerGroupIds'])) {
            $model->containerGroupIds = $map['ContainerGroupIds'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        return $model;
    }
}
