<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem\ldap;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem\mountTargets;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem\packages;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem\supportedFeatures;
use AlibabaCloud\Tea\Model;

class fileSystem extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var int
     */
    public $encryptType;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var int
     */
    public $meteredIASize;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $mountTargetCountLimit;

    /**
     * @var string
     */
    public $nasNamespaceId;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var mountTargets
     */
    public $mountTargets;

    /**
     * @var packages
     */
    public $packages;

    /**
     * @var ldap
     */
    public $ldap;

    /**
     * @var supportedFeatures
     */
    public $supportedFeatures;
    protected $_name = [
        'fileSystemId'          => 'FileSystemId',
        'description'           => 'Description',
        'createTime'            => 'CreateTime',
        'expiredTime'           => 'ExpiredTime',
        'regionId'              => 'RegionId',
        'zoneId'                => 'ZoneId',
        'protocolType'          => 'ProtocolType',
        'storageType'           => 'StorageType',
        'fileSystemType'        => 'FileSystemType',
        'encryptType'           => 'EncryptType',
        'meteredSize'           => 'MeteredSize',
        'meteredIASize'         => 'MeteredIASize',
        'bandwidth'             => 'Bandwidth',
        'capacity'              => 'Capacity',
        'autoSnapshotPolicyId'  => 'AutoSnapshotPolicyId',
        'status'                => 'Status',
        'chargeType'            => 'ChargeType',
        'mountTargetCountLimit' => 'MountTargetCountLimit',
        'nasNamespaceId'        => 'NasNamespaceId',
        'KMSKeyId'              => 'KMSKeyId',
        'version'               => 'Version',
        'mountTargets'          => 'MountTargets',
        'packages'              => 'Packages',
        'ldap'                  => 'Ldap',
        'supportedFeatures'     => 'SupportedFeatures',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('protocolType', $this->protocolType, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('fileSystemType', $this->fileSystemType, true);
        Model::validateRequired('encryptType', $this->encryptType, true);
        Model::validateRequired('meteredSize', $this->meteredSize, true);
        Model::validateRequired('meteredIASize', $this->meteredIASize, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('capacity', $this->capacity, true);
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('mountTargetCountLimit', $this->mountTargetCountLimit, true);
        Model::validateRequired('nasNamespaceId', $this->nasNamespaceId, true);
        Model::validateRequired('KMSKeyId', $this->KMSKeyId, true);
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('mountTargets', $this->mountTargets, true);
        Model::validateRequired('packages', $this->packages, true);
        Model::validateRequired('ldap', $this->ldap, true);
        Model::validateRequired('supportedFeatures', $this->supportedFeatures, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->meteredIASize) {
            $res['MeteredIASize'] = $this->meteredIASize;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->mountTargetCountLimit) {
            $res['MountTargetCountLimit'] = $this->mountTargetCountLimit;
        }
        if (null !== $this->nasNamespaceId) {
            $res['NasNamespaceId'] = $this->nasNamespaceId;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->mountTargets) {
            $res['MountTargets'] = null !== $this->mountTargets ? $this->mountTargets->toMap() : null;
        }
        if (null !== $this->packages) {
            $res['Packages'] = null !== $this->packages ? $this->packages->toMap() : null;
        }
        if (null !== $this->ldap) {
            $res['Ldap'] = null !== $this->ldap ? $this->ldap->toMap() : null;
        }
        if (null !== $this->supportedFeatures) {
            $res['SupportedFeatures'] = null !== $this->supportedFeatures ? $this->supportedFeatures->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['MeteredIASize'])) {
            $model->meteredIASize = $map['MeteredIASize'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['MountTargetCountLimit'])) {
            $model->mountTargetCountLimit = $map['MountTargetCountLimit'];
        }
        if (isset($map['NasNamespaceId'])) {
            $model->nasNamespaceId = $map['NasNamespaceId'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['MountTargets'])) {
            $model->mountTargets = mountTargets::fromMap($map['MountTargets']);
        }
        if (isset($map['Packages'])) {
            $model->packages = packages::fromMap($map['Packages']);
        }
        if (isset($map['Ldap'])) {
            $model->ldap = ldap::fromMap($map['Ldap']);
        }
        if (isset($map['SupportedFeatures'])) {
            $model->supportedFeatures = supportedFeatures::fromMap($map['SupportedFeatures']);
        }

        return $model;
    }
}
