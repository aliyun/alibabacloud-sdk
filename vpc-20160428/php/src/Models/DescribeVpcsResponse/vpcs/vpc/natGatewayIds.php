<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse\vpcs\vpc;

use AlibabaCloud\Tea\Model;

class natGatewayIds extends Model
{
    /**
     * @description NatGatewayIds
     *
     * @var array
     */
    public $natGatewayIds;
    protected $_name = [
        'natGatewayIds' => 'NatGatewayIds',
    ];

    public function validate()
    {
        Model::validateRequired('natGatewayIds', $this->natGatewayIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGatewayIds) {
            $res['NatGatewayIds'] = $this->natGatewayIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGatewayIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGatewayIds'])) {
            if (!empty($map['NatGatewayIds'])) {
                $model->natGatewayIds = $map['NatGatewayIds'];
            }
        }

        return $model;
    }
}
