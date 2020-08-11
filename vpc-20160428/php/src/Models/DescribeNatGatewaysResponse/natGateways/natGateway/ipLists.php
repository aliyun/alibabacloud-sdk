<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways\natGateway;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways\natGateway\ipLists\ipList;
use AlibabaCloud\Tea\Model;

class ipLists extends Model
{
    /**
     * @var array
     */
    public $ipList;
    protected $_name = [
        'ipList' => 'IpList',
    ];

    public function validate()
    {
        Model::validateRequired('ipList', $this->ipList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipList) {
            $res['IpList'] = [];
            if (null !== $this->ipList && \is_array($this->ipList)) {
                $n = 0;
                foreach ($this->ipList as $item) {
                    $res['IpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n             = 0;
                foreach ($map['IpList'] as $item) {
                    $model->ipList[$n++] = null !== $item ? ipList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
