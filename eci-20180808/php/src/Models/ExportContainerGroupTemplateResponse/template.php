<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse;

use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\tags;
use AlibabaCloud\SDK\ECI\V20180808\Models\template\resources;
use AlibabaCloud\SDK\ECI\V20180808\Models\template\spec;
use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description securityGroupId
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description eipInstanceId
     *
     * @var string
     */
    public $eipInstanceId;

    /**
     * @description containerGroupName
     *
     * @var string
     */
    public $containerGroupName;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description tags
     *
     * @var array
     */
    public $tags;

    /**
     * @description resources
     *
     * @var template.resources
     */
    public $resources;

    /**
     * @description spec
     *
     * @var template.spec
     */
    public $spec;
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

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('eipInstanceId', $this->eipInstanceId, true);
        Model::validateRequired('containerGroupName', $this->containerGroupName, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('resources', $this->resources, true);
        Model::validateRequired('spec', $this->spec, true);
    }

    public function toMap()
    {
        $res                       = [];
        $res['RegionId']           = $this->regionId;
        $res['ZoneId']             = $this->zoneId;
        $res['SecurityGroupId']    = $this->securityGroupId;
        $res['VSwitchId']          = $this->VSwitchId;
        $res['ResourceGroupId']    = $this->resourceGroupId;
        $res['EipInstanceId']      = $this->eipInstanceId;
        $res['ContainerGroupName'] = $this->containerGroupName;
        $res['InstanceType']       = $this->instanceType;
        $res['Tags']               = [];
        if (null !== $this->tags && \is_array($this->tags)) {
            $n = 0;
            foreach ($this->tags as $item) {
                $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        $res['Spec']      = null !== $this->spec ? $this->spec->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }
        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }

        return $model;
    }
}
