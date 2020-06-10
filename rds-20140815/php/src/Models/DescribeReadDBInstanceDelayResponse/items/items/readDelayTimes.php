<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items\items;

use AlibabaCloud\Tea\Model;

class readDelayTimes extends Model
{
    /**
     * @description ReadDelayTime
     *
     * @var array
     */
    public $readDelayTime;
    protected $_name = [
        'readDelayTime' => 'ReadDelayTime',
    ];

    public function validate()
    {
        Model::validateRequired('readDelayTime', $this->readDelayTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readDelayTime) {
            $res['ReadDelayTime'] = [];
            if (null !== $this->readDelayTime) {
                $res['ReadDelayTime'] = $this->readDelayTime;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readDelayTimes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadDelayTime'])) {
            if (!empty($map['ReadDelayTime'])) {
                $model->readDelayTime = [];
                $model->readDelayTime = $map['ReadDelayTime'];
            }
        }

        return $model;
    }
}
