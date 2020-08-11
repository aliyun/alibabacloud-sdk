<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponse\assignedPrivateIpAddressesSet;
use AlibabaCloud\Tea\Model;

class AssignPrivateIpAddressesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var assignedPrivateIpAddressesSet
     */
    public $assignedPrivateIpAddressesSet;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'assignedPrivateIpAddressesSet' => 'AssignedPrivateIpAddressesSet',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('assignedPrivateIpAddressesSet', $this->assignedPrivateIpAddressesSet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->assignedPrivateIpAddressesSet) {
            $res['AssignedPrivateIpAddressesSet'] = null !== $this->assignedPrivateIpAddressesSet ? $this->assignedPrivateIpAddressesSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignPrivateIpAddressesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AssignedPrivateIpAddressesSet'])) {
            $model->assignedPrivateIpAddressesSet = assignedPrivateIpAddressesSet::fromMap($map['AssignedPrivateIpAddressesSet']);
        }

        return $model;
    }
}
