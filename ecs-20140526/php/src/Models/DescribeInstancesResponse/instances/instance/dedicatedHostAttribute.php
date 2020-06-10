<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance;

use AlibabaCloud\Tea\Model;

class dedicatedHostAttribute extends Model
{
    /**
     * @description dedicatedHostId
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description dedicatedHostName
     *
     * @var string
     */
    public $dedicatedHostName;
    protected $_name = [
        'dedicatedHostId'   => 'DedicatedHostId',
        'dedicatedHostName' => 'DedicatedHostName',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostId', $this->dedicatedHostId, true);
        Model::validateRequired('dedicatedHostName', $this->dedicatedHostName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }

        return $model;
    }
}
