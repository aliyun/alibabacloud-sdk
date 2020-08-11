<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponse\VRouters\VRouter;

use AlibabaCloud\Tea\Model;

class routeTableIds extends Model
{
    /**
     * @description RouteTableId
     *
     * @var array
     */
    public $routeTableId;
    protected $_name = [
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
        Model::validateRequired('routeTableId', $this->routeTableId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTableIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteTableId'])) {
            if (!empty($map['RouteTableId'])) {
                $model->routeTableId = $map['RouteTableId'];
            }
        }

        return $model;
    }
}
