<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateDeploymentSetRequest extends Model
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
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description onUnableToRedeployFailedInstance
     *
     * @var string
     */
    public $onUnableToRedeployFailedInstance;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description deploymentSetName
     *
     * @var string
     */
    public $deploymentSetName;

    /**
     * @description domain
     *
     * @var string
     */
    public $domain;

    /**
     * @description granularity
     *
     * @var string
     */
    public $granularity;

    /**
     * @description strategy
     *
     * @var string
     */
    public $strategy;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'                          => 'OwnerId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'regionId'                         => 'RegionId',
        'onUnableToRedeployFailedInstance' => 'OnUnableToRedeployFailedInstance',
        'description'                      => 'Description',
        'clientToken'                      => 'ClientToken',
        'deploymentSetName'                => 'DeploymentSetName',
        'domain'                           => 'Domain',
        'granularity'                      => 'Granularity',
        'strategy'                         => 'Strategy',
        'ownerAccount'                     => 'OwnerAccount',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->onUnableToRedeployFailedInstance) {
            $res['OnUnableToRedeployFailedInstance'] = $this->onUnableToRedeployFailedInstance;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deploymentSetName) {
            $res['DeploymentSetName'] = $this->deploymentSetName;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeploymentSetRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OnUnableToRedeployFailedInstance'])) {
            $model->onUnableToRedeployFailedInstance = $map['OnUnableToRedeployFailedInstance'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeploymentSetName'])) {
            $model->deploymentSetName = $map['DeploymentSetName'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
