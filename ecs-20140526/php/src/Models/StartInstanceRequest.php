<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class StartInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $sourceRegionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $initLocalDisk;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'sourceRegionId' => 'SourceRegionId',
        'instanceId'     => 'InstanceId',
        'initLocalDisk'  => 'InitLocalDisk',
        'dryRun'         => 'DryRun',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->initLocalDisk) {
            $res['InitLocalDisk'] = $this->initLocalDisk;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InitLocalDisk'])) {
            $model->initLocalDisk = $map['InitLocalDisk'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        return $model;
    }
}
