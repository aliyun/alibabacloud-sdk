<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostResponse\dedicateHostList;

use AlibabaCloud\Tea\Model;

class dedicateHostList extends Model
{
    /**
     * @description dedicatedHostId
     *
     * @var string
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
     * @return dedicateHostList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }

        return $model;
    }
}
