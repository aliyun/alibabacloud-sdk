<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\tags\instanceTag;
use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var array
     */
    public $instanceTag;
    protected $_name = [
        'instanceTag' => 'InstanceTag',
    ];

    public function validate()
    {
        Model::validateRequired('instanceTag', $this->instanceTag, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTag) {
            $res['InstanceTag'] = [];
            if (null !== $this->instanceTag && \is_array($this->instanceTag)) {
                $n = 0;
                foreach ($this->instanceTag as $item) {
                    $res['InstanceTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTag'])) {
            if (!empty($map['InstanceTag'])) {
                $model->instanceTag = [];
                $n                  = 0;
                foreach ($map['InstanceTag'] as $item) {
                    $model->instanceTag[$n++] = null !== $item ? instanceTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
