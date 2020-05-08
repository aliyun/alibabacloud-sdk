<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterBody\addons;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterBody\tags;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterBody\taints;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterBody\workerDataDisks;
use AlibabaCloud\Tea\Model;

class CreateClusterBody extends Model
{
    /**
     * @description cluster_type
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description region_id
     *
     * @var string
     */
    public $regionId;

    /**
     * @description kubernetes_version
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @description snat_entry
     *
     * @var bool
     */
    public $snatEntry;

    /**
     * @description endpoint_public_access
     *
     * @var bool
     */
    public $endpointPublicAccess;

    /**
     * @description ssh_flags
     *
     * @var bool
     */
    public $sshFlags;

    /**
     * @description cloud_monitor_flags
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description deletion_protection
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description node_cidr_mask
     *
     * @var string
     */
    public $nodeCidrMask;

    /**
     * @description proxy_mode
     *
     * @var string
     */
    public $proxyMode;

    /**
     * @description os_type
     *
     * @var string
     */
    public $osType;

    /**
     * @description platform
     *
     * @var string
     */
    public $platform;

    /**
     * @description node_port_range
     *
     * @var string
     */
    public $nodePortRange;

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
     * @description master_instance_charge_type
     *
     * @var string
     */
    public $masterInstanceChargeType;

    /**
     * @description worker_instance_charge_type
     *
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @description master_period
     *
     * @var int
     */
    public $masterPeriod;

    /**
     * @description worker_period
     *
     * @var int
     */
    public $workerPeriod;

    /**
     * @description master_period_unit
     *
     * @var string
     */
    public $masterPeriodUnit;

    /**
     * @description worker_period_unit
     *
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @description master_auto_renew
     *
     * @var bool
     */
    public $masterAutoRenew;

    /**
     * @description master_auto_renew_period
     *
     * @var int
     */
    public $masterAutoRenewPeriod;

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
     * @description cpu_policy
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description master_count
     *
     * @var int
     */
    public $masterCount;

    /**
     * @description master_system_disk_category
     *
     * @var string
     */
    public $masterSystemDiskCategory;

    /**
     * @description master_system_disk_size
     *
     * @var int
     */
    public $masterSystemDiskSize;

    /**
     * @description runtime
     *
     * @var array
     */
    public $runtime;

    /**
     * @description num_of_nodes
     *
     * @var int
     */
    public $numOfNodes;

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
     * @description vpcid
     *
     * @var string
     */
    public $vpcid;

    /**
     * @description security_group_id
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description container_cidr
     *
     * @var string
     */
    public $containerCidr;

    /**
     * @description service_cidr
     *
     * @var string
     */
    public $serviceCidr;

    /**
     * @description disable_rollback
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description timeout_mins
     *
     * @var int
     */
    public $timeoutMins;

    /**
     * @description tags
     *
     * @var array
     */
    public $tags;

    /**
     * @description addons
     *
     * @var array
     */
    public $addons;

    /**
     * @description taints
     *
     * @var array
     */
    public $taints;

    /**
     * @description worker_data_disks
     *
     * @var array
     */
    public $workerDataDisks;

    /**
     * @description master_vswitch_ids
     *
     * @var array
     */
    public $masterVswitchIds;

    /**
     * @description master_instance_types
     *
     * @var array
     */
    public $masterInstanceTypes;

    /**
     * @description worker_instance_types
     *
     * @var array
     */
    public $workerInstanceTypes;

    /**
     * @description worker_vswitch_ids
     *
     * @var array
     */
    public $workerVswitchIds;
    protected $_name = [
        'clusterType'              => 'cluster_type',
        'name'                     => 'name',
        'regionId'                 => 'region_id',
        'kubernetesVersion'        => 'kubernetes_version',
        'snatEntry'                => 'snat_entry',
        'endpointPublicAccess'     => 'endpoint_public_access',
        'sshFlags'                 => 'ssh_flags',
        'cloudMonitorFlags'        => 'cloud_monitor_flags',
        'deletionProtection'       => 'deletion_protection',
        'nodeCidrMask'             => 'node_cidr_mask',
        'proxyMode'                => 'proxy_mode',
        'osType'                   => 'os_type',
        'platform'                 => 'platform',
        'nodePortRange'            => 'node_port_range',
        'keyPair'                  => 'key_pair',
        'loginPassword'            => 'login_password',
        'masterInstanceChargeType' => 'master_instance_charge_type',
        'workerInstanceChargeType' => 'worker_instance_charge_type',
        'masterPeriod'             => 'master_period',
        'workerPeriod'             => 'worker_period',
        'masterPeriodUnit'         => 'master_period_unit',
        'workerPeriodUnit'         => 'worker_period_unit',
        'masterAutoRenew'          => 'master_auto_renew',
        'masterAutoRenewPeriod'    => 'master_auto_renew_period',
        'workerAutoRenew'          => 'worker_auto_renew',
        'workerAutoRenewPeriod'    => 'worker_auto_renew_period',
        'cpuPolicy'                => 'cpu_policy',
        'masterCount'              => 'master_count',
        'masterSystemDiskCategory' => 'master_system_disk_category',
        'masterSystemDiskSize'     => 'master_system_disk_size',
        'runtime'                  => 'runtime',
        'numOfNodes'               => 'num_of_nodes',
        'workerSystemDiskCategory' => 'worker_system_disk_category',
        'workerSystemDiskSize'     => 'worker_system_disk_size',
        'workerDataDisk'           => 'worker_data_disk',
        'vpcid'                    => 'vpcid',
        'securityGroupId'          => 'security_group_id',
        'containerCidr'            => 'container_cidr',
        'serviceCidr'              => 'service_cidr',
        'disableRollback'          => 'disable_rollback',
        'timeoutMins'              => 'timeout_mins',
        'tags'                     => 'tags',
        'addons'                   => 'addons',
        'taints'                   => 'taints',
        'workerDataDisks'          => 'worker_data_disks',
        'masterVswitchIds'         => 'master_vswitch_ids',
        'masterInstanceTypes'      => 'master_instance_types',
        'workerInstanceTypes'      => 'worker_instance_types',
        'workerVswitchIds'         => 'worker_vswitch_ids',
    ];

    public function validate()
    {
        Model::validateRequired('clusterType', $this->clusterType, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('snatEntry', $this->snatEntry, true);
        Model::validateRequired('keyPair', $this->keyPair, true);
        Model::validateRequired('loginPassword', $this->loginPassword, true);
        Model::validateRequired('masterSystemDiskCategory', $this->masterSystemDiskCategory, true);
        Model::validateRequired('masterSystemDiskSize', $this->masterSystemDiskSize, true);
        Model::validateRequired('numOfNodes', $this->numOfNodes, true);
        Model::validateRequired('workerSystemDiskCategory', $this->workerSystemDiskCategory, true);
        Model::validateRequired('workerSystemDiskSize', $this->workerSystemDiskSize, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('addons', $this->addons, true);
        Model::validateRequired('taints', $this->taints, true);
        Model::validateRequired('workerDataDisks', $this->workerDataDisks, true);
        Model::validateRequired('masterVswitchIds', $this->masterVswitchIds, true);
        Model::validateRequired('masterInstanceTypes', $this->masterInstanceTypes, true);
        Model::validateRequired('workerInstanceTypes', $this->workerInstanceTypes, true);
        Model::validateRequired('workerVswitchIds', $this->workerVswitchIds, true);
    }

    public function toMap()
    {
        $res                                = [];
        $res['cluster_type']                = $this->clusterType;
        $res['name']                        = $this->name;
        $res['region_id']                   = $this->regionId;
        $res['kubernetes_version']          = $this->kubernetesVersion;
        $res['snat_entry']                  = $this->snatEntry;
        $res['endpoint_public_access']      = $this->endpointPublicAccess;
        $res['ssh_flags']                   = $this->sshFlags;
        $res['cloud_monitor_flags']         = $this->cloudMonitorFlags;
        $res['deletion_protection']         = $this->deletionProtection;
        $res['node_cidr_mask']              = $this->nodeCidrMask;
        $res['proxy_mode']                  = $this->proxyMode;
        $res['os_type']                     = $this->osType;
        $res['platform']                    = $this->platform;
        $res['node_port_range']             = $this->nodePortRange;
        $res['key_pair']                    = $this->keyPair;
        $res['login_password']              = $this->loginPassword;
        $res['master_instance_charge_type'] = $this->masterInstanceChargeType;
        $res['worker_instance_charge_type'] = $this->workerInstanceChargeType;
        $res['master_period']               = $this->masterPeriod;
        $res['worker_period']               = $this->workerPeriod;
        $res['master_period_unit']          = $this->masterPeriodUnit;
        $res['worker_period_unit']          = $this->workerPeriodUnit;
        $res['master_auto_renew']           = $this->masterAutoRenew;
        $res['master_auto_renew_period']    = $this->masterAutoRenewPeriod;
        $res['worker_auto_renew']           = $this->workerAutoRenew;
        $res['worker_auto_renew_period']    = $this->workerAutoRenewPeriod;
        $res['cpu_policy']                  = $this->cpuPolicy;
        $res['master_count']                = $this->masterCount;
        $res['master_system_disk_category'] = $this->masterSystemDiskCategory;
        $res['master_system_disk_size']     = $this->masterSystemDiskSize;
        $res['runtime']                     = $this->runtime;
        $res['num_of_nodes']                = $this->numOfNodes;
        $res['worker_system_disk_category'] = $this->workerSystemDiskCategory;
        $res['worker_system_disk_size']     = $this->workerSystemDiskSize;
        $res['worker_data_disk']            = $this->workerDataDisk;
        $res['vpcid']                       = $this->vpcid;
        $res['security_group_id']           = $this->securityGroupId;
        $res['container_cidr']              = $this->containerCidr;
        $res['service_cidr']                = $this->serviceCidr;
        $res['disable_rollback']            = $this->disableRollback;
        $res['timeout_mins']                = $this->timeoutMins;
        $res['tags']                        = [];
        if (null !== $this->tags && \is_array($this->tags)) {
            $n = 0;
            foreach ($this->tags as $item) {
                $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['addons'] = [];
        if (null !== $this->addons && \is_array($this->addons)) {
            $n = 0;
            foreach ($this->addons as $item) {
                $res['addons'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['taints'] = [];
        if (null !== $this->taints && \is_array($this->taints)) {
            $n = 0;
            foreach ($this->taints as $item) {
                $res['taints'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['worker_data_disks'] = [];
        if (null !== $this->workerDataDisks && \is_array($this->workerDataDisks)) {
            $n = 0;
            foreach ($this->workerDataDisks as $item) {
                $res['worker_data_disks'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['master_vswitch_ids'] = [];
        if (null !== $this->masterVswitchIds) {
            $res['master_vswitch_ids'] = $this->masterVswitchIds;
        }
        $res['master_instance_types'] = [];
        if (null !== $this->masterInstanceTypes) {
            $res['master_instance_types'] = $this->masterInstanceTypes;
        }
        $res['worker_instance_types'] = [];
        if (null !== $this->workerInstanceTypes) {
            $res['worker_instance_types'] = $this->workerInstanceTypes;
        }
        $res['worker_vswitch_ids'] = [];
        if (null !== $this->workerVswitchIds) {
            $res['worker_vswitch_ids'] = $this->workerVswitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['kubernetes_version'])) {
            $model->kubernetesVersion = $map['kubernetes_version'];
        }
        if (isset($map['snat_entry'])) {
            $model->snatEntry = $map['snat_entry'];
        }
        if (isset($map['endpoint_public_access'])) {
            $model->endpointPublicAccess = $map['endpoint_public_access'];
        }
        if (isset($map['ssh_flags'])) {
            $model->sshFlags = $map['ssh_flags'];
        }
        if (isset($map['cloud_monitor_flags'])) {
            $model->cloudMonitorFlags = $map['cloud_monitor_flags'];
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['node_cidr_mask'])) {
            $model->nodeCidrMask = $map['node_cidr_mask'];
        }
        if (isset($map['proxy_mode'])) {
            $model->proxyMode = $map['proxy_mode'];
        }
        if (isset($map['os_type'])) {
            $model->osType = $map['os_type'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }
        if (isset($map['node_port_range'])) {
            $model->nodePortRange = $map['node_port_range'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
        }
        if (isset($map['master_instance_charge_type'])) {
            $model->masterInstanceChargeType = $map['master_instance_charge_type'];
        }
        if (isset($map['worker_instance_charge_type'])) {
            $model->workerInstanceChargeType = $map['worker_instance_charge_type'];
        }
        if (isset($map['master_period'])) {
            $model->masterPeriod = $map['master_period'];
        }
        if (isset($map['worker_period'])) {
            $model->workerPeriod = $map['worker_period'];
        }
        if (isset($map['master_period_unit'])) {
            $model->masterPeriodUnit = $map['master_period_unit'];
        }
        if (isset($map['worker_period_unit'])) {
            $model->workerPeriodUnit = $map['worker_period_unit'];
        }
        if (isset($map['master_auto_renew'])) {
            $model->masterAutoRenew = $map['master_auto_renew'];
        }
        if (isset($map['master_auto_renew_period'])) {
            $model->masterAutoRenewPeriod = $map['master_auto_renew_period'];
        }
        if (isset($map['worker_auto_renew'])) {
            $model->workerAutoRenew = $map['worker_auto_renew'];
        }
        if (isset($map['worker_auto_renew_period'])) {
            $model->workerAutoRenewPeriod = $map['worker_auto_renew_period'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['master_count'])) {
            $model->masterCount = $map['master_count'];
        }
        if (isset($map['master_system_disk_category'])) {
            $model->masterSystemDiskCategory = $map['master_system_disk_category'];
        }
        if (isset($map['master_system_disk_size'])) {
            $model->masterSystemDiskSize = $map['master_system_disk_size'];
        }
        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }
        if (isset($map['num_of_nodes'])) {
            $model->numOfNodes = $map['num_of_nodes'];
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
        if (isset($map['vpcid'])) {
            $model->vpcid = $map['vpcid'];
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['container_cidr'])) {
            $model->containerCidr = $map['container_cidr'];
        }
        if (isset($map['service_cidr'])) {
            $model->serviceCidr = $map['service_cidr'];
        }
        if (isset($map['disable_rollback'])) {
            $model->disableRollback = $map['disable_rollback'];
        }
        if (isset($map['timeout_mins'])) {
            $model->timeoutMins = $map['timeout_mins'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['addons'])) {
            if (!empty($map['addons'])) {
                $model->addons = [];
                $n             = 0;
                foreach ($map['addons'] as $item) {
                    $model->addons[$n++] = null !== $item ? addons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? taints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['worker_data_disks'])) {
            if (!empty($map['worker_data_disks'])) {
                $model->workerDataDisks = [];
                $n                      = 0;
                foreach ($map['worker_data_disks'] as $item) {
                    $model->workerDataDisks[$n++] = null !== $item ? workerDataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['master_vswitch_ids'])) {
            if (!empty($map['master_vswitch_ids'])) {
                $model->masterVswitchIds = [];
                $model->masterVswitchIds = $map['master_vswitch_ids'];
            }
        }
        if (isset($map['master_instance_types'])) {
            if (!empty($map['master_instance_types'])) {
                $model->masterInstanceTypes = [];
                $model->masterInstanceTypes = $map['master_instance_types'];
            }
        }
        if (isset($map['worker_instance_types'])) {
            if (!empty($map['worker_instance_types'])) {
                $model->workerInstanceTypes = [];
                $model->workerInstanceTypes = $map['worker_instance_types'];
            }
        }
        if (isset($map['worker_vswitch_ids'])) {
            if (!empty($map['worker_vswitch_ids'])) {
                $model->workerVswitchIds = [];
                $model->workerVswitchIds = $map['worker_vswitch_ids'];
            }
        }

        return $model;
    }
}
