<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeLaunchTemplateVersionsRequest extends Model
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
     * @description launchTemplateId
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description launchTemplateName
     *
     * @var string
     */
    public $launchTemplateName;

    /**
     * @description launchTemplateVersions
     *
     * @var array
     */
    public $launchTemplateVersion;

    /**
     * @description minVersion
     *
     * @var int
     */
    public $minVersion;

    /**
     * @description maxVersion
     *
     * @var int
     */
    public $maxVersion;

    /**
     * @description defaultVersion
     *
     * @var bool
     */
    public $defaultVersion;

    /**
     * @description detailFlag
     *
     * @var bool
     */
    public $detailFlag;

    /**
     * @description pageNo
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'ownerAccount'          => 'OwnerAccount',
        'regionId'              => 'RegionId',
        'launchTemplateId'      => 'LaunchTemplateId',
        'launchTemplateName'    => 'LaunchTemplateName',
        'launchTemplateVersion' => 'LaunchTemplateVersion',
        'minVersion'            => 'MinVersion',
        'maxVersion'            => 'MaxVersion',
        'defaultVersion'        => 'DefaultVersion',
        'detailFlag'            => 'DetailFlag',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = [];
            if (null !== $this->launchTemplateVersion) {
                $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
            }
        }
        if (null !== $this->minVersion) {
            $res['MinVersion'] = $this->minVersion;
        }
        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }
        if (null !== $this->detailFlag) {
            $res['DetailFlag'] = $this->detailFlag;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLaunchTemplateVersionsRequest
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
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            if (!empty($map['LaunchTemplateVersion'])) {
                $model->launchTemplateVersion = [];
                $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
            }
        }
        if (isset($map['MinVersion'])) {
            $model->minVersion = $map['MinVersion'];
        }
        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if (isset($map['DetailFlag'])) {
            $model->detailFlag = $map['DetailFlag'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
