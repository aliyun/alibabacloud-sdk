<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\Tea\Model;

class ScaleOutClusterBody extends Model
{
    /**
     * @description count
     *
     * @var int
     */
    public $count;
    /**
     * @description worker_instance_charge_type
     *
     * @var string
     */
    public $workerInstanceChargeType;
    /**
     * @description worker_period
     *
     * @var int
     */
    public $workerPeriod;
    /**
     * @description worker_period_unit
     *
     * @var string
     */
    public $workerPeriodUnit;
    /**
     * @description worker_auto_renew
     *
     * @var bool
     */
    public $workerAutoRenew;
    /**
     * @description worker_auto_renew_period
     *
     * @var int
     */
    public $workerAutoRenewPeriod;
    /**
     * @description worker_system_disk_category
     *
     * @var string
     */
    public $workerSystemDiskCategory;
    /**
     * @description worker_system_disk_size
     *
     * @var int
     */
    public $workerSystemDiskSize;
    /**
     * @description worker_data_disk
     *
     * @var bool
     */
    public $workerDataDisk;
    /**
     * @description key_pair
     *
     * @var string
     */
    public $keyPair;
    /**
     * @description login_password
     *
     * @var string
     */
    public $loginPassword;
    /**
     * @description cloud_monitor_flags
     *
     * @var bool
     */
    public $cloudMonitorFlags;
    /**
     * @description cpu_policy
     *
     * @var string
     */
    public $cpuPolicy;
    /**
     * @description disable_rollback
     *
     * @var bool
     */
    public $disableRollback;
    /**
     * @description worker_data_disks
     *
     * @var array
     */
    public $workerDataDisks;
    /**
     * @description tags
     *
     * @var array
     */
    public $tags;
    /**
     * @description taints
     *
     * @var array
     */
    public $taints;
    /**
     * @description vswitch_ids
     *
     * @var array
     */
    public $vswitchIds;
    /**
     * @description worker_instance_types
     *
     * @var array
     */
    public $workerInstanceTypes;
    protected $_name = [
        'count'                    => 'count',
        'workerInstanceChargeType' => 'worker_instance_charge_type',
        'workerPeriod'             => 'worker_period',
        'workerPeriodUnit'         => 'worker_period_unit',
        'workerAutoRenew'          => 'worker_auto_renew',
        'workerAutoRenewPeriod'    => 'worker_auto_renew_period',
        'workerSystemDiskCategory' => 'worker_system_disk_category',
        'workerSystemDiskSize'     => 'worker_system_disk_size',
        'workerDataDisk'           => 'worker_data_disk',
        'keyPair'                  => 'key_pair',
        'loginPassword'            => 'login_password',
        'cloudMonitorFlags'        => 'cloud_monitor_flags',
        'cpuPolicy'                => 'cpu_policy',
        'disableRollback'          => 'disable_rollback',
        'workerDataDisks'          => 'worker_data_disks',
        'tags'                     => 'tags',
        'taints'                   => 'taints',
        'vswitchIds'               => 'vswitch_ids',
        'workerInstanceTypes'      => 'worker_instance_types',
    ];

    public function validate()
    {
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('workerInstanceChargeType', $this->workerInstanceChargeType, true);
        Model::validateRequired('workerPeriod', $this->workerPeriod, true);
        Model::validateRequired('workerPeriodUnit', $this->workerPeriodUnit, true);
        Model::validateRequired('workerAutoRenew', $this->workerAutoRenew, true);
        Model::validateRequired('workerAutoRenewPeriod', $this->workerAutoRenewPeriod, true);
        Model::validateRequired('workerSystemDiskCategory', $this->workerSystemDiskCategory, true);
        Model::validateRequired('workerSystemDiskSize', $this->workerSystemDiskSize, true);
        Model::validateRequired('workerDataDisk', $this->workerDataDisk, true);
        Model::validateRequired('keyPair', $this->keyPair, true);
        Model::validateRequired('loginPassword', $this->loginPassword, true);
        Model::validateRequired('cloudMonitorFlags', $this->cloudMonitorFlags, true);
        Model::validateRequired('cpuPolicy', $this->cpuPolicy, true);
        Model::validateRequired('disableRollback', $this->disableRollback, true);
        Model::validateRequired('workerDataDisks', $this->workerDataDisks, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('taints', $this->taints, true);
        Model::validateRequired('vswitchIds', $this->vswitchIds, true);
        Model::validateRequired('workerInstanceTypes', $this->workerInstanceTypes, true);
    }

    public function toMap()
    {
        $res                                = [];
        $res['count']                       = $this->count;
        $res['worker_instance_charge_type'] = $this->workerInstanceChargeType;
        $res['worker_period']               = $this->workerPeriod;
        $res['worker_period_unit']          = $this->workerPeriodUnit;
        $res['worker_auto_renew']           = $this->workerAutoRenew;
        $res['worker_auto_renew_period']    = $this->workerAutoRenewPeriod;
        $res['worker_system_disk_category'] = $this->workerSystemDiskCategory;
        $res['worker_system_disk_size']     = $this->workerSystemDiskSize;
        $res['worker_data_disk']            = $this->workerDataDisk;
        $res['key_pair']                    = $this->keyPair;
        $res['login_password']              = $this->loginPassword;
        $res['cloud_monitor_flags']         = $this->cloudMonitorFlags;
        $res['cpu_policy']                  = $this->cpuPolicy;
        $res['disable_rollback']            = $this->disableRollback;
        $res['worker_data_disks']           = [];
        if (null !== $this->workerDataDisks && \is_array($this->workerDataDisks)) {
            $n = 0;
            foreach ($this->workerDataDisks as $item) {
                $res['worker_data_disks'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['tags'] = [];
        if (null !== $this->tags && \is_array($this->tags)) {
            $n = 0;
            foreach ($this->tags as $item) {
                $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['taints'] = [];
        if (null !== $this->taints && \is_array($this->taints)) {
            $n = 0;
            foreach ($this->taints as $item) {
                $res['taints'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['vswitch_ids'] = [];
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
        }
        $res['worker_instance_types'] = [];
        if (null !== $this->workerInstanceTypes) {
            $res['worker_instance_types'] = $this->workerInstanceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleOutClusterBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['worker_instance_charge_type'])) {
            $model->workerInstanceChargeType = $map['worker_instance_charge_type'];
        }
        if (isset($map['worker_period'])) {
            $model->workerPeriod = $map['worker_period'];
        }
        if (isset($map['worker_period_unit'])) {
            $model->workerPeriodUnit = $map['worker_period_unit'];
        }
        if (isset($map['worker_auto_renew'])) {
            $model->workerAutoRenew = $map['worker_auto_renew'];
        }
        if (isset($map['worker_auto_renew_period'])) {
            $model->workerAutoRenewPeriod = $map['worker_auto_renew_period'];
        }
        if (isset($map['worker_system_disk_category'])) {
            $model->workerSystemDiskCategory = $map['worker_system_disk_category'];
        }
        if (isset($map['worker_system_disk_size'])) {
            $model->workerSystemDiskSize = $map['worker_system_disk_size'];
        }
        if (isset($map['worker_data_disk'])) {
            $model->workerDataDisk = $map['worker_data_disk'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
        }
        if (isset($map['cloud_monitor_flags'])) {
            $model->cloudMonitorFlags = $map['cloud_monitor_flags'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['disable_rollback'])) {
            $model->disableRollback = $map['disable_rollback'];
        }
        if (isset($map['worker_data_disks'])) {
            if (!empty($map['worker_data_disks'])) {
                $model->workerDataDisks = [];
                $n                      = 0;
                foreach ($map['worker_data_disks'] as $item) {
                    $model->workerDataDisks[$n++] = null !== $item ? ScaleOutClusterBody\workerDataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? ScaleOutClusterBody\tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? ScaleOutClusterBody\taints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = [];
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }
        if (isset($map['worker_instance_types'])) {
            if (!empty($map['worker_instance_types'])) {
                $model->workerInstanceTypes = [];
                $model->workerInstanceTypes = $map['worker_instance_types'];
            }
        }

        return $model;
    }
}
