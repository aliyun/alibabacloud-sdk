<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets\launchTemplateVersionSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\dataDisks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\networkInterfaces;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\tags;
use AlibabaCloud\Tea\Model;

class launchTemplateData extends Model
{
    /**
     * @description imageId
     *
     * @var string
     */
    public $imageId;

    /**
     * @description imageOwnerAlias
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description passwordInherit
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description securityGroupId
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description internetMaxBandwidthIn
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description internetMaxBandwidthOut
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description hostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description ioOptimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description instanceChargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description period
     *
     * @var int
     */
    public $period;

    /**
     * @description internetChargeType
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description enableVmOsConfig
     *
     * @var bool
     */
    public $enableVmOsConfig;

    /**
     * @description networkType
     *
     * @var string
     */
    public $networkType;

    /**
     * @description userData
     *
     * @var string
     */
    public $userData;

    /**
     * @description keyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description ramRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description autoReleaseTime
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description spotStrategy
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description spotPriceLimit
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description spotDuration
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description securityEnhancementStrategy
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @description SystemDisk
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description dataDisks
     *
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @description enis
     *
     * @var networkInterfaces
     */
    public $networkInterfaces;

    /**
     * @description tagList
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'imageId'                     => 'ImageId',
        'imageOwnerAlias'             => 'ImageOwnerAlias',
        'passwordInherit'             => 'PasswordInherit',
        'instanceType'                => 'InstanceType',
        'securityGroupId'             => 'SecurityGroupId',
        'vpcId'                       => 'VpcId',
        'VSwitchId'                   => 'VSwitchId',
        'instanceName'                => 'InstanceName',
        'description'                 => 'Description',
        'internetMaxBandwidthIn'      => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'hostName'                    => 'HostName',
        'zoneId'                      => 'ZoneId',
        'ioOptimized'                 => 'IoOptimized',
        'instanceChargeType'          => 'InstanceChargeType',
        'period'                      => 'Period',
        'internetChargeType'          => 'InternetChargeType',
        'enableVmOsConfig'            => 'EnableVmOsConfig',
        'networkType'                 => 'NetworkType',
        'userData'                    => 'UserData',
        'keyPairName'                 => 'KeyPairName',
        'ramRoleName'                 => 'RamRoleName',
        'autoReleaseTime'             => 'AutoReleaseTime',
        'spotStrategy'                => 'SpotStrategy',
        'spotPriceLimit'              => 'SpotPriceLimit',
        'spotDuration'                => 'SpotDuration',
        'resourceGroupId'             => 'ResourceGroupId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'systemDisk'                  => 'SystemDisk',
        'dataDisks'                   => 'DataDisks',
        'networkInterfaces'           => 'NetworkInterfaces',
        'tags'                        => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('imageOwnerAlias', $this->imageOwnerAlias, true);
        Model::validateRequired('passwordInherit', $this->passwordInherit, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('internetMaxBandwidthIn', $this->internetMaxBandwidthIn, true);
        Model::validateRequired('internetMaxBandwidthOut', $this->internetMaxBandwidthOut, true);
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('ioOptimized', $this->ioOptimized, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('period', $this->period, true);
        Model::validateRequired('internetChargeType', $this->internetChargeType, true);
        Model::validateRequired('enableVmOsConfig', $this->enableVmOsConfig, true);
        Model::validateRequired('networkType', $this->networkType, true);
        Model::validateRequired('userData', $this->userData, true);
        Model::validateRequired('keyPairName', $this->keyPairName, true);
        Model::validateRequired('ramRoleName', $this->ramRoleName, true);
        Model::validateRequired('autoReleaseTime', $this->autoReleaseTime, true);
        Model::validateRequired('spotStrategy', $this->spotStrategy, true);
        Model::validateRequired('spotPriceLimit', $this->spotPriceLimit, true);
        Model::validateRequired('spotDuration', $this->spotDuration, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('securityEnhancementStrategy', $this->securityEnhancementStrategy, true);
        Model::validateRequired('systemDisk', $this->systemDisk, true);
        Model::validateRequired('dataDisks', $this->dataDisks, true);
        Model::validateRequired('networkInterfaces', $this->networkInterfaces, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->enableVmOsConfig) {
            $res['EnableVmOsConfig'] = $this->enableVmOsConfig;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toMap() : null;
        }
        if (null !== $this->networkInterfaces) {
            $res['NetworkInterfaces'] = null !== $this->networkInterfaces ? $this->networkInterfaces->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['EnableVmOsConfig'])) {
            $model->enableVmOsConfig = $map['EnableVmOsConfig'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }
        if (isset($map['NetworkInterfaces'])) {
            $model->networkInterfaces = networkInterfaces::fromMap($map['NetworkInterfaces']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
