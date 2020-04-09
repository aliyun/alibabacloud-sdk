<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterAddonUpgradeStatusResponseBody\componentId;
use AlibabaCloud\Tea\Model;

class DescribeClusterAddonUpgradeStatusResponseBody extends Model
{
    /**
     * @description ComponentId
     *
     * @var DescribeClusterAddonUpgradeStatusResponseBody.componentId
     */
    public $componentId;
    protected $_name = [
        'componentId' => 'ComponentId',
    ];

    public function validate()
    {
        Model::validateRequired('componentId', $this->componentId, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['ComponentId'] = null !== $this->componentId ? $this->componentId->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAddonUpgradeStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentId'])) {
            $model->componentId = DescribeClusterAddonUpgradeStatusResponseBody\componentId::fromMap($map['ComponentId']);
        }

        return $model;
    }
}
