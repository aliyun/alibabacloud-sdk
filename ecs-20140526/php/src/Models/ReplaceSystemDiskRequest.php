<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class ReplaceSystemDiskRequest extends Model
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
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description imageId
     *
     * @var string
     */
    public $imageId;

    /**
     * @description SystemDisk
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description enableVmOsConfig
     *
     * @var bool
     */
    public $useAdditionalService;

    /**
     * @description password
     *
     * @var string
     */
    public $password;

    /**
     * @description passwdInherit
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description keyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description diskId
     *
     * @var string
     */
    public $diskId;

    /**
     * @description platform
     *
     * @var string
     */
    public $platform;

    /**
     * @description architecture
     *
     * @var string
     */
    public $architecture;

    /**
     * @description securityEnhancementStrategy
     *
     * @var string
     */
    public $securityEnhancementStrategy;
    protected $_name = [
        'ownerId'                     => 'OwnerId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'instanceId'                  => 'InstanceId',
        'imageId'                     => 'ImageId',
        'systemDisk'                  => 'SystemDisk',
        'clientToken'                 => 'ClientToken',
        'ownerAccount'                => 'OwnerAccount',
        'useAdditionalService'        => 'UseAdditionalService',
        'password'                    => 'Password',
        'passwordInherit'             => 'PasswordInherit',
        'keyPairName'                 => 'KeyPairName',
        'diskId'                      => 'DiskId',
        'platform'                    => 'Platform',
        'architecture'                => 'Architecture',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('systemDisk', $this->systemDisk, true);
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->useAdditionalService) {
            $res['UseAdditionalService'] = $this->useAdditionalService;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceSystemDiskRequest
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['UseAdditionalService'])) {
            $model->useAdditionalService = $map['UseAdditionalService'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }

        return $model;
    }
}
