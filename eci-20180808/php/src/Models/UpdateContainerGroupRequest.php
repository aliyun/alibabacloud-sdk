<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models;

use AlibabaCloud\SDK\ECI\V20180808\Models\UpdateContainerGroupRequest\container;
use AlibabaCloud\SDK\ECI\V20180808\Models\UpdateContainerGroupRequest\dnsConfig;
use AlibabaCloud\SDK\ECI\V20180808\Models\UpdateContainerGroupRequest\imageRegistryCredential;
use AlibabaCloud\SDK\ECI\V20180808\Models\UpdateContainerGroupRequest\initContainer;
use AlibabaCloud\SDK\ECI\V20180808\Models\UpdateContainerGroupRequest\tag;
use AlibabaCloud\SDK\ECI\V20180808\Models\UpdateContainerGroupRequest\volume;
use AlibabaCloud\Tea\Model;

class UpdateContainerGroupRequest extends Model
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
     * @description bazaarInstanceId
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description restartPolicy
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @description labels
     *
     * @var array
     */
    public $tag;

    /**
     * @description volumes
     *
     * @var array
     */
    public $volume;

    /**
     * @description DnsConfig
     *
     * @var UpdateContainerGroupRequest.dnsConfig
     */
    public $dnsConfig;

    /**
     * @description containers
     *
     * @var array
     */
    public $container;

    /**
     * @description initContainers
     *
     * @var array
     */
    public $initContainer;

    /**
     * @description imageRegistryCredentials
     *
     * @var array
     */
    public $imageRegistryCredential;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description cpu
     *
     * @var float
     */
    public $cpu;

    /**
     * @description mem
     *
     * @var float
     */
    public $memory;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'ownerAccount'            => 'OwnerAccount',
        'regionId'                => 'RegionId',
        'containerGroupId'        => 'ContainerGroupId',
        'restartPolicy'           => 'RestartPolicy',
        'tag'                     => 'Tag',
        'volume'                  => 'Volume',
        'dnsConfig'               => 'DnsConfig',
        'container'               => 'Container',
        'initContainer'           => 'InitContainer',
        'imageRegistryCredential' => 'ImageRegistryCredential',
        'clientToken'             => 'ClientToken',
        'cpu'                     => 'Cpu',
        'memory'                  => 'Memory',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
        Model::validateRequired('dnsConfig', $this->dnsConfig, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['OwnerAccount']         = $this->ownerAccount;
        $res['RegionId']             = $this->regionId;
        $res['ContainerGroupId']     = $this->containerGroupId;
        $res['RestartPolicy']        = $this->restartPolicy;
        $res['Tag']                  = [];
        if (null !== $this->tag && \is_array($this->tag)) {
            $n = 0;
            foreach ($this->tag as $item) {
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Volume'] = [];
        if (null !== $this->volume && \is_array($this->volume)) {
            $n = 0;
            foreach ($this->volume as $item) {
                $res['Volume'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['DnsConfig'] = null !== $this->dnsConfig ? $this->dnsConfig->toMap() : null;
        $res['Container'] = [];
        if (null !== $this->container && \is_array($this->container)) {
            $n = 0;
            foreach ($this->container as $item) {
                $res['Container'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['InitContainer'] = [];
        if (null !== $this->initContainer && \is_array($this->initContainer)) {
            $n = 0;
            foreach ($this->initContainer as $item) {
                $res['InitContainer'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['ImageRegistryCredential'] = [];
        if (null !== $this->imageRegistryCredential && \is_array($this->imageRegistryCredential)) {
            $n = 0;
            foreach ($this->imageRegistryCredential as $item) {
                $res['ImageRegistryCredential'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['ClientToken'] = $this->clientToken;
        $res['Cpu']         = $this->cpu;
        $res['Memory']      = $this->memory;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateContainerGroupRequest
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
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Volume'])) {
            if (!empty($map['Volume'])) {
                $model->volume = [];
                $n             = 0;
                foreach ($map['Volume'] as $item) {
                    $model->volume[$n++] = null !== $item ? volume::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }
        if (isset($map['Container'])) {
            if (!empty($map['Container'])) {
                $model->container = [];
                $n                = 0;
                foreach ($map['Container'] as $item) {
                    $model->container[$n++] = null !== $item ? container::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InitContainer'])) {
            if (!empty($map['InitContainer'])) {
                $model->initContainer = [];
                $n                    = 0;
                foreach ($map['InitContainer'] as $item) {
                    $model->initContainer[$n++] = null !== $item ? initContainer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageRegistryCredential'])) {
            if (!empty($map['ImageRegistryCredential'])) {
                $model->imageRegistryCredential = [];
                $n                              = 0;
                foreach ($map['ImageRegistryCredential'] as $item) {
                    $model->imageRegistryCredential[$n++] = null !== $item ? imageRegistryCredential::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
