<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesResponse\ipv6EgressOnlyRules\ipv6EgressOnlyRule;
use AlibabaCloud\Tea\Model;

class ipv6EgressOnlyRules extends Model
{
    /**
     * @var array
     */
    public $ipv6EgressOnlyRule;
    protected $_name = [
        'ipv6EgressOnlyRule' => 'Ipv6EgressOnlyRule',
    ];

    public function validate()
    {
        Model::validateRequired('ipv6EgressOnlyRule', $this->ipv6EgressOnlyRule, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6EgressOnlyRule) {
            $res['Ipv6EgressOnlyRule'] = [];
            if (null !== $this->ipv6EgressOnlyRule && \is_array($this->ipv6EgressOnlyRule)) {
                $n = 0;
                foreach ($this->ipv6EgressOnlyRule as $item) {
                    $res['Ipv6EgressOnlyRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6EgressOnlyRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6EgressOnlyRule'])) {
            if (!empty($map['Ipv6EgressOnlyRule'])) {
                $model->ipv6EgressOnlyRule = [];
                $n                         = 0;
                foreach ($map['Ipv6EgressOnlyRule'] as $item) {
                    $model->ipv6EgressOnlyRule[$n++] = null !== $item ? ipv6EgressOnlyRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
