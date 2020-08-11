<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsResponse;

use AlibabaCloud\Tea\Model;

class dedicatedHostIdSets extends Model
{
    /**
     * @var array
     */
    public $dedicatedHostId;
    protected $_name = [
        'dedicatedHostId' => 'DedicatedHostId',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostId', $this->dedicatedHostId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostIdSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            if (!empty($map['DedicatedHostId'])) {
                $model->dedicatedHostId = $map['DedicatedHostId'];
            }
        }

        return $model;
    }
}
