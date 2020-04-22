<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterDetailResponseBody\parameters;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterDetailResponseBody\upgradeComponents;
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
     * @description size
     *
     * @var int
     */
    public $size;

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
     * @description created
     *
     * @var string
     */
    public $created;

    /**
     * @description updated
     *
     * @var string
     */
    public $updated;

    /**
     * @description init_version
     *
     * @var string
     */
    public $initVersion;

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
     * @description subnet_cidr
     *
     * @var string
     */
    public $subnetCidr;

    /**
     * @description master_url
     *
     * @var string
     */
    public $masterUrl;

    /**
     * @description external_loadbalancer_id
     *
     * @var string
     */
    public $externalLoadbalancerId;

    /**
     * @description port
     *
     * @var int
     */
    public $port;

    /**
     * @description node_status
     *
     * @var string
     */
    public $nodeStatus;

    /**
     * @description cluster_healthy
     *
     * @var string
     */
    public $clusterHealthy;

    /**
     * @description docker_version
     *
     * @var string
     */
    public $dockerVersion;

    /**
     * @description swarm_mode
     *
     * @var bool
     */
    public $swarmMode;

    /**
     * @description gw_bridge
     *
     * @var string
     */
    public $gwBridge;

    /**
     * @description private_zone
     *
     * @var bool
     */
    public $privateZone;

    /**
     * @description profile
     *
     * @var string
     */
    public $profile;

    /**
     * @description deletion_protection
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description capabilities
     *
     * @var string
     */
    public $capabilities;

    /**
     * @description enabled_migration
     *
     * @var bool
     */
    public $enabledMigration;

    /**
     * @description need_update_agent
     *
     * @var bool
     */
    public $needUpdateAgent;

    /**
     * @description tags
     *
     * @var array
     */
    public $tags;

    /**
     * @description outputs
     *
     * @var array
     */
    public $outputs;

    /**
     * @description upgrade_components
     *
     * @var DescribeClusterDetailResponseBody.upgradeComponents
     */
    public $upgradeComponents;

    /**
     * @description parameters
     *
     * @var DescribeClusterDetailResponseBody.parameters
     */
    public $parameters;
    protected $_name = [
        'name'                   => 'name',
        'clusterId'              => 'cluster_id',
        'size'                   => 'size',
        'regionId'               => 'region_id',
        'state'                  => 'state',
        'clusterType'            => 'cluster_type',
        'created'                => 'created',
        'updated'                => 'updated',
        'initVersion'            => 'init_version',
        'currentVersion'         => 'current_version',
        'metaData'               => 'meta_data',
        'resourceGroupId'        => 'resource_group_id',
        'instanceType'           => 'instance_type',
        'vpcId'                  => 'vpc_id',
        'vswitchId'              => 'vswitch_id',
        'vswitchCidr'            => 'vswitch_cidr',
        'dataDiskSize'           => 'data_disk_size',
        'dataDiskCategory'       => 'data_disk_category',
        'securityGroupId'        => 'security_group_id',
        'zoneId'                 => 'zone_id',
        'networkMode'            => 'network_mode',
        'subnetCidr'             => 'subnet_cidr',
        'masterUrl'              => 'master_url',
        'externalLoadbalancerId' => 'external_loadbalancer_id',
        'port'                   => 'port',
        'nodeStatus'             => 'node_status',
        'clusterHealthy'         => 'cluster_healthy',
        'dockerVersion'          => 'docker_version',
        'swarmMode'              => 'swarm_mode',
        'gwBridge'               => 'gw_bridge',
        'privateZone'            => 'private_zone',
        'profile'                => 'profile',
        'deletionProtection'     => 'deletion_protection',
        'capabilities'           => 'capabilities',
        'enabledMigration'       => 'enabled_migration',
        'needUpdateAgent'        => 'need_update_agent',
        'tags'                   => 'tags',
        'outputs'                => 'outputs',
        'upgradeComponents'      => 'upgrade_components',
        'parameters'             => 'parameters',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('clusterType', $this->clusterType, true);
        Model::validateRequired('created', $this->created, true);
        Model::validateRequired('updated', $this->updated, true);
        Model::validateRequired('initVersion', $this->initVersion, true);
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
        Model::validateRequired('subnetCidr', $this->subnetCidr, true);
        Model::validateRequired('masterUrl', $this->masterUrl, true);
        Model::validateRequired('externalLoadbalancerId', $this->externalLoadbalancerId, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('nodeStatus', $this->nodeStatus, true);
        Model::validateRequired('clusterHealthy', $this->clusterHealthy, true);
        Model::validateRequired('dockerVersion', $this->dockerVersion, true);
        Model::validateRequired('swarmMode', $this->swarmMode, true);
        Model::validateRequired('gwBridge', $this->gwBridge, true);
        Model::validateRequired('privateZone', $this->privateZone, true);
        Model::validateRequired('profile', $this->profile, true);
        Model::validateRequired('deletionProtection', $this->deletionProtection, true);
        Model::validateRequired('capabilities', $this->capabilities, true);
        Model::validateRequired('enabledMigration', $this->enabledMigration, true);
        Model::validateRequired('needUpdateAgent', $this->needUpdateAgent, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('outputs', $this->outputs, true);
        Model::validateRequired('upgradeComponents', $this->upgradeComponents, true);
        Model::validateRequired('parameters', $this->parameters, true);
    }

    public function toMap()
    {
        $res                             = [];
        $res['name']                     = $this->name;
        $res['cluster_id']               = $this->clusterId;
        $res['size']                     = $this->size;
        $res['region_id']                = $this->regionId;
        $res['state']                    = $this->state;
        $res['cluster_type']             = $this->clusterType;
        $res['created']                  = $this->created;
        $res['updated']                  = $this->updated;
        $res['init_version']             = $this->initVersion;
        $res['current_version']          = $this->currentVersion;
        $res['meta_data']                = $this->metaData;
        $res['resource_group_id']        = $this->resourceGroupId;
        $res['instance_type']            = $this->instanceType;
        $res['vpc_id']                   = $this->vpcId;
        $res['vswitch_id']               = $this->vswitchId;
        $res['vswitch_cidr']             = $this->vswitchCidr;
        $res['data_disk_size']           = $this->dataDiskSize;
        $res['data_disk_category']       = $this->dataDiskCategory;
        $res['security_group_id']        = $this->securityGroupId;
        $res['zone_id']                  = $this->zoneId;
        $res['network_mode']             = $this->networkMode;
        $res['subnet_cidr']              = $this->subnetCidr;
        $res['master_url']               = $this->masterUrl;
        $res['external_loadbalancer_id'] = $this->externalLoadbalancerId;
        $res['port']                     = $this->port;
        $res['node_status']              = $this->nodeStatus;
        $res['cluster_healthy']          = $this->clusterHealthy;
        $res['docker_version']           = $this->dockerVersion;
        $res['swarm_mode']               = $this->swarmMode;
        $res['gw_bridge']                = $this->gwBridge;
        $res['private_zone']             = $this->privateZone;
        $res['profile']                  = $this->profile;
        $res['deletion_protection']      = $this->deletionProtection;
        $res['capabilities']             = $this->capabilities;
        $res['enabled_migration']        = $this->enabledMigration;
        $res['need_update_agent']        = $this->needUpdateAgent;
        $res['tags']                     = [];
        if (null !== $this->tags && \is_array($this->tags)) {
            $n = 0;
            foreach ($this->tags as $item) {
                $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['outputs'] = [];
        if (null !== $this->outputs && \is_array($this->outputs)) {
            $n = 0;
            foreach ($this->outputs as $item) {
                $res['outputs'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['upgrade_components'] = null !== $this->upgradeComponents ? $this->upgradeComponents->toMap() : null;
        $res['parameters']         = null !== $this->parameters ? $this->parameters->toMap() : null;

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
        if (isset($map['size'])) {
            $model->size = $map['size'];
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
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['init_version'])) {
            $model->initVersion = $map['init_version'];
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
        if (isset($map['subnet_cidr'])) {
            $model->subnetCidr = $map['subnet_cidr'];
        }
        if (isset($map['master_url'])) {
            $model->masterUrl = $map['master_url'];
        }
        if (isset($map['external_loadbalancer_id'])) {
            $model->externalLoadbalancerId = $map['external_loadbalancer_id'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['node_status'])) {
            $model->nodeStatus = $map['node_status'];
        }
        if (isset($map['cluster_healthy'])) {
            $model->clusterHealthy = $map['cluster_healthy'];
        }
        if (isset($map['docker_version'])) {
            $model->dockerVersion = $map['docker_version'];
        }
        if (isset($map['swarm_mode'])) {
            $model->swarmMode = $map['swarm_mode'];
        }
        if (isset($map['gw_bridge'])) {
            $model->gwBridge = $map['gw_bridge'];
        }
        if (isset($map['private_zone'])) {
            $model->privateZone = $map['private_zone'];
        }
        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['capabilities'])) {
            $model->capabilities = $map['capabilities'];
        }
        if (isset($map['enabled_migration'])) {
            $model->enabledMigration = $map['enabled_migration'];
        }
        if (isset($map['need_update_agent'])) {
            $model->needUpdateAgent = $map['need_update_agent'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? DescribeClusterDetailResponseBody\tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['outputs'])) {
            if (!empty($map['outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? DescribeClusterDetailResponseBody\outputs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['upgrade_components'])) {
            $model->upgradeComponents = DescribeClusterDetailResponseBody\upgradeComponents::fromMap($map['upgrade_components']);
        }
        if (isset($map['parameters'])) {
            $model->parameters = DescribeClusterDetailResponseBody\parameters::fromMap($map['parameters']);
        }

        return $model;
    }
}
