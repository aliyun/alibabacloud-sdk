<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeClusterDetailResponseBody extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description cluster_id
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description region_id
     *
     * @var string
     */
    public $regionId;

    /**
     * @description state
     *
     * @var string
     */
    public $state;

    /**
     * @description cluster_type
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description current_version
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description meta_data
     *
     * @var string
     */
    public $metaData;

    /**
     * @description resource_group_id
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description instance_type
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description vpc_id
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description vswitch_id
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description vswitch_cidr
     *
     * @var string
     */
    public $vswitchCidr;

    /**
     * @description data_disk_size
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @description data_disk_category
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description security_group_id
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description zone_id
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description network_mode
     *
     * @var string
     */
    public $networkMode;

    /**
     * @description docker_version
     *
     * @var string
     */
    public $dockerVersion;

    /**
     * @description deletion_protection
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description tags
     *
     * @var array
     */
    public $tags;
    protected $_name = [
        'name'               => 'name',
        'clusterId'          => 'cluster_id',
        'regionId'           => 'region_id',
        'state'              => 'state',
        'clusterType'        => 'cluster_type',
        'currentVersion'     => 'current_version',
        'metaData'           => 'meta_data',
        'resourceGroupId'    => 'resource_group_id',
        'instanceType'       => 'instance_type',
        'vpcId'              => 'vpc_id',
        'vswitchId'          => 'vswitch_id',
        'vswitchCidr'        => 'vswitch_cidr',
        'dataDiskSize'       => 'data_disk_size',
        'dataDiskCategory'   => 'data_disk_category',
        'securityGroupId'    => 'security_group_id',
        'zoneId'             => 'zone_id',
        'networkMode'        => 'network_mode',
        'dockerVersion'      => 'docker_version',
        'deletionProtection' => 'deletion_protection',
        'tags'               => 'tags',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('clusterType', $this->clusterType, true);
        Model::validateRequired('currentVersion', $this->currentVersion, true);
        Model::validateRequired('metaData', $this->metaData, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('vswitchId', $this->vswitchId, true);
        Model::validateRequired('vswitchCidr', $this->vswitchCidr, true);
        Model::validateRequired('dataDiskSize', $this->dataDiskSize, true);
        Model::validateRequired('dataDiskCategory', $this->dataDiskCategory, true);
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('networkMode', $this->networkMode, true);
        Model::validateRequired('dockerVersion', $this->dockerVersion, true);
        Model::validateRequired('deletionProtection', $this->deletionProtection, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res                        = [];
        $res['name']                = $this->name;
        $res['cluster_id']          = $this->clusterId;
        $res['region_id']           = $this->regionId;
        $res['state']               = $this->state;
        $res['cluster_type']        = $this->clusterType;
        $res['current_version']     = $this->currentVersion;
        $res['meta_data']           = $this->metaData;
        $res['resource_group_id']   = $this->resourceGroupId;
        $res['instance_type']       = $this->instanceType;
        $res['vpc_id']              = $this->vpcId;
        $res['vswitch_id']          = $this->vswitchId;
        $res['vswitch_cidr']        = $this->vswitchCidr;
        $res['data_disk_size']      = $this->dataDiskSize;
        $res['data_disk_category']  = $this->dataDiskCategory;
        $res['security_group_id']   = $this->securityGroupId;
        $res['zone_id']             = $this->zoneId;
        $res['network_mode']        = $this->networkMode;
        $res['docker_version']      = $this->dockerVersion;
        $res['deletion_protection'] = $this->deletionProtection;
        $res['tags']                = [];
        if (null !== $this->tags && \is_array($this->tags)) {
            $n = 0;
            foreach ($this->tags as $item) {
                $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['current_version'])) {
            $model->currentVersion = $map['current_version'];
        }
        if (isset($map['meta_data'])) {
            $model->metaData = $map['meta_data'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['instance_type'])) {
            $model->instanceType = $map['instance_type'];
        }
        if (isset($map['vpc_id'])) {
            $model->vpcId = $map['vpc_id'];
        }
        if (isset($map['vswitch_id'])) {
            $model->vswitchId = $map['vswitch_id'];
        }
        if (isset($map['vswitch_cidr'])) {
            $model->vswitchCidr = $map['vswitch_cidr'];
        }
        if (isset($map['data_disk_size'])) {
            $model->dataDiskSize = $map['data_disk_size'];
        }
        if (isset($map['data_disk_category'])) {
            $model->dataDiskCategory = $map['data_disk_category'];
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['zone_id'])) {
            $model->zoneId = $map['zone_id'];
        }
        if (isset($map['network_mode'])) {
            $model->networkMode = $map['network_mode'];
        }
        if (isset($map['docker_version'])) {
            $model->dockerVersion = $map['docker_version'];
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
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

        return $model;
    }
}
