<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponse\attachment;

use AlibabaCloud\Tea\Model;

class memberNetworkInterfaceIds extends Model
{
    /**
     * @description MemberNetworkInterfaceId
     *
     * @var array
     */
    public $memberNetworkInterfaceId;
    protected $_name = [
        'memberNetworkInterfaceId' => 'MemberNetworkInterfaceId',
    ];

    public function validate()
    {
        Model::validateRequired('memberNetworkInterfaceId', $this->memberNetworkInterfaceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberNetworkInterfaceId) {
            $res['MemberNetworkInterfaceId'] = $this->memberNetworkInterfaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memberNetworkInterfaceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberNetworkInterfaceId'])) {
            if (!empty($map['MemberNetworkInterfaceId'])) {
                $model->memberNetworkInterfaceId = $map['MemberNetworkInterfaceId'];
            }
        }

        return $model;
    }
}
