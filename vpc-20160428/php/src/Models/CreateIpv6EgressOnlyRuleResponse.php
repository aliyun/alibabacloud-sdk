<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIpv6EgressOnlyRuleResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ipv6EgressRuleId;
    protected $_name = [
        'requestId'        => 'RequestId',
        'ipv6EgressRuleId' => 'Ipv6EgressRuleId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ipv6EgressRuleId', $this->ipv6EgressRuleId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ipv6EgressRuleId) {
            $res['Ipv6EgressRuleId'] = $this->ipv6EgressRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpv6EgressOnlyRuleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Ipv6EgressRuleId'])) {
            $model->ipv6EgressRuleId = $map['Ipv6EgressRuleId'];
        }

        return $model;
    }
}
