<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecRequest\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecRequest\temporary;
use AlibabaCloud\Tea\Model;

class ModifyInstanceSpecRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @var temporary
     */
    public $temporary;

    /**
     * @var bool
     */
    public $async;

    /**
     * @var bool
     */
    public $allowMigrateAcrossZone;

    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'instanceType'            => 'InstanceType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'temporary'               => 'Temporary',
        'async'                   => 'Async',
        'allowMigrateAcrossZone'  => 'AllowMigrateAcrossZone',
        'systemDisk'              => 'SystemDisk',
        'clientToken'             => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->temporary) {
            $res['Temporary'] = null !== $this->temporary ? $this->temporary->toMap() : null;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->allowMigrateAcrossZone) {
            $res['AllowMigrateAcrossZone'] = $this->allowMigrateAcrossZone;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['Temporary'])) {
            $model->temporary = temporary::fromMap($map['Temporary']);
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['AllowMigrateAcrossZone'])) {
            $model->allowMigrateAcrossZone = $map['AllowMigrateAcrossZone'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
