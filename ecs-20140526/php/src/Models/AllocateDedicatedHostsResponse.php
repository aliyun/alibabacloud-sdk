<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsResponse\dedicatedHostIdSets;
use AlibabaCloud\Tea\Model;

class AllocateDedicatedHostsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dedicatedHostIdSets
     */
    public $dedicatedHostIdSets;
    protected $_name = [
        'requestId'           => 'RequestId',
        'dedicatedHostIdSets' => 'DedicatedHostIdSets',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dedicatedHostIdSets', $this->dedicatedHostIdSets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dedicatedHostIdSets) {
            $res['DedicatedHostIdSets'] = null !== $this->dedicatedHostIdSets ? $this->dedicatedHostIdSets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateDedicatedHostsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DedicatedHostIdSets'])) {
            $model->dedicatedHostIdSets = dedicatedHostIdSets::fromMap($map['DedicatedHostIdSets']);
        }

        return $model;
    }
}
