<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponse\dedicatedHosts;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dedicatedHostGroupId
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description data.dedicatedHosts
     *
     * @var dedicatedHosts
     */
    public $dedicatedHosts;
    protected $_name = [
        'requestId'            => 'RequestId',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHosts'       => 'DedicatedHosts',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
        Model::validateRequired('dedicatedHosts', $this->dedicatedHosts, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHosts) {
            $res['DedicatedHosts'] = null !== $this->dedicatedHosts ? $this->dedicatedHosts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHosts'])) {
            $model->dedicatedHosts = dedicatedHosts::fromMap($map['DedicatedHosts']);
        }

        return $model;
    }
}
