<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponse\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponse\autoProvisioningGroups\autoProvisioningGroup\launchTemplateConfigs\launchTemplateConfig;
use AlibabaCloud\Tea\Model;

class launchTemplateConfigs extends Model
{
    /**
     * @var array
     */
    public $launchTemplateConfig;
    protected $_name = [
        'launchTemplateConfig' => 'LaunchTemplateConfig',
    ];

    public function validate()
    {
        Model::validateRequired('launchTemplateConfig', $this->launchTemplateConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateConfig) {
            $res['LaunchTemplateConfig'] = [];
            if (null !== $this->launchTemplateConfig && \is_array($this->launchTemplateConfig)) {
                $n = 0;
                foreach ($this->launchTemplateConfig as $item) {
                    $res['LaunchTemplateConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateConfig'])) {
            if (!empty($map['LaunchTemplateConfig'])) {
                $model->launchTemplateConfig = [];
                $n                           = 0;
                foreach ($map['LaunchTemplateConfig'] as $item) {
                    $model->launchTemplateConfig[$n++] = null !== $item ? launchTemplateConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
