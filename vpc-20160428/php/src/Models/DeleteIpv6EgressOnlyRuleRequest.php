<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DeleteIpv6EgressOnlyRuleRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ipv6EgressOnlyRuleId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'regionId'             => 'RegionId',
        'ipv6EgressOnlyRuleId' => 'Ipv6EgressOnlyRuleId',
        'clientToken'          => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('ipv6EgressOnlyRuleId', $this->ipv6EgressOnlyRuleId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ipv6EgressOnlyRuleId) {
            $res['Ipv6EgressOnlyRuleId'] = $this->ipv6EgressOnlyRuleId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIpv6EgressOnlyRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Ipv6EgressOnlyRuleId'])) {
            $model->ipv6EgressOnlyRuleId = $map['Ipv6EgressOnlyRuleId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
