<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponse\ipControlPolicyItems\ipControlPolicyItem;
use AlibabaCloud\Tea\Model;

class ipControlPolicyItems extends Model
{
    /**
     * @description IpControlPolicyItem
     *
     * @var array
     */
    public $ipControlPolicyItem;
    protected $_name = [
        'ipControlPolicyItem' => 'IpControlPolicyItem',
    ];

    public function validate()
    {
        Model::validateRequired('ipControlPolicyItem', $this->ipControlPolicyItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipControlPolicyItem) {
            $res['IpControlPolicyItem'] = [];
            if (null !== $this->ipControlPolicyItem && \is_array($this->ipControlPolicyItem)) {
                $n = 0;
                foreach ($this->ipControlPolicyItem as $item) {
                    $res['IpControlPolicyItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipControlPolicyItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpControlPolicyItem'])) {
            if (!empty($map['IpControlPolicyItem'])) {
                $model->ipControlPolicyItem = [];
                $n                          = 0;
                foreach ($map['IpControlPolicyItem'] as $item) {
                    $model->ipControlPolicyItem[$n++] = null !== $item ? ipControlPolicyItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
