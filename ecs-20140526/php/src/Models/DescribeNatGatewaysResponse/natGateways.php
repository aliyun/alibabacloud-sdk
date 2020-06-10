<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponse\natGateways\natGateway;
use AlibabaCloud\Tea\Model;

class natGateways extends Model
{
    /**
     * @description NatGateway
     *
     * @var array
     */
    public $natGateway;
    protected $_name = [
        'natGateway' => 'NatGateway',
    ];

    public function validate()
    {
        Model::validateRequired('natGateway', $this->natGateway, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGateway) {
            $res['NatGateway'] = [];
            if (null !== $this->natGateway && \is_array($this->natGateway)) {
                $n = 0;
                foreach ($this->natGateway as $item) {
                    $res['NatGateway'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGateways
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGateway'])) {
            if (!empty($map['NatGateway'])) {
                $model->natGateway = [];
                $n                 = 0;
                foreach ($map['NatGateway'] as $item) {
                    $model->natGateway[$n++] = null !== $item ? natGateway::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
