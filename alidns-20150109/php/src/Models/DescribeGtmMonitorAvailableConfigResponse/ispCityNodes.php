<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigResponse\ispCityNodes\ispCityNode;
use AlibabaCloud\Tea\Model;

class ispCityNodes extends Model
{
    /**
     * @description IspCityNode
     *
     * @var array
     */
    public $ispCityNode;
    protected $_name = [
        'ispCityNode' => 'IspCityNode',
    ];

    public function validate()
    {
        Model::validateRequired('ispCityNode', $this->ispCityNode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ispCityNode) {
            $res['IspCityNode'] = [];
            if (null !== $this->ispCityNode && \is_array($this->ispCityNode)) {
                $n = 0;
                foreach ($this->ispCityNode as $item) {
                    $res['IspCityNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ispCityNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IspCityNode'])) {
            if (!empty($map['IspCityNode'])) {
                $model->ispCityNode = [];
                $n                  = 0;
                foreach ($map['IspCityNode'] as $item) {
                    $model->ispCityNode[$n++] = null !== $item ? ispCityNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
