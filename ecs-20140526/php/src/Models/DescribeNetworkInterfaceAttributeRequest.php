<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeNetworkInterfaceAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var array
     */
    public $tag;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $attribute;
    protected $_name = [
        'regionId'           => 'RegionId',
        'tag'                => 'Tag',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'attribute'          => 'Attribute',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('networkInterfaceId', $this->networkInterfaceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->attribute) {
            $res['Attribute'] = $this->attribute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkInterfaceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['Attribute'])) {
            $model->attribute = $map['Attribute'];
        }

        return $model;
    }
}
