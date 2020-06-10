<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponse\availableZones\availableZone\availableResources\availableResource;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponse\availableZones\availableZone\availableResources\availableResource\supportedResources\supportedResource;
use AlibabaCloud\Tea\Model;

class supportedResources extends Model
{
    /**
     * @description SupportedResource
     *
     * @var array
     */
    public $supportedResource;
    protected $_name = [
        'supportedResource' => 'SupportedResource',
    ];

    public function validate()
    {
        Model::validateRequired('supportedResource', $this->supportedResource, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedResource) {
            $res['SupportedResource'] = [];
            if (null !== $this->supportedResource && \is_array($this->supportedResource)) {
                $n = 0;
                foreach ($this->supportedResource as $item) {
                    $res['SupportedResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedResource'])) {
            if (!empty($map['SupportedResource'])) {
                $model->supportedResource = [];
                $n                        = 0;
                foreach ($map['SupportedResource'] as $item) {
                    $model->supportedResource[$n++] = null !== $item ? supportedResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
