<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    public $regionId;
    public $zoneId;
    public $securityGroupId;
    public $VSwitchId;
    public $resourceGroupId;
    public $eipInstanceId;
    public $containerGroupName;
    public $instanceType;
    public $tags;
    public $resources;
    public $spec;
    protected $_required = [
        'regionId'           => true,
        'zoneId'             => true,
        'securityGroupId'    => true,
        'VSwitchId'          => true,
        'resourceGroupId'    => true,
        'eipInstanceId'      => true,
        'containerGroupName' => true,
        'instanceType'       => true,
        'tags'               => true,
        'resources'          => true,
        'spec'               => true,
    ];
    protected $_name = [
        'regionId'           => 'RegionId',
        'zoneId'             => 'ZoneId',
        'securityGroupId'    => 'SecurityGroupId',
        'VSwitchId'          => 'VSwitchId',
        'resourceGroupId'    => 'ResourceGroupId',
        'eipInstanceId'      => 'EipInstanceId',
        'containerGroupName' => 'ContainerGroupName',
        'instanceType'       => 'InstanceType',
        'tags'               => 'Tags',
        'resources'          => 'Resources',
        'spec'               => 'Spec',
    ];
    protected $_description = [
        'regionId'           => 'regionId',
        'zoneId'             => 'zoneId',
        'securityGroupId'    => 'securityGroupId',
        'VSwitchId'          => 'vSwitchId',
        'resourceGroupId'    => 'resourceGroupId',
        'eipInstanceId'      => 'eipInstanceId',
        'containerGroupName' => 'containerGroupName',
        'instanceType'       => 'instanceType',
        'tags'               => 'tags',
        'resources'          => 'resources',
        'spec'               => 'spec',
    ];
}
