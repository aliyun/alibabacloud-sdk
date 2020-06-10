<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeResponse\items\DBInstanceExpireTime;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description DBInstanceExpireTime
     *
     * @var array
     */
    public $DBInstanceExpireTime;
    protected $_name = [
        'DBInstanceExpireTime' => 'DBInstanceExpireTime',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceExpireTime', $this->DBInstanceExpireTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceExpireTime) {
            $res['DBInstanceExpireTime'] = [];
            if (null !== $this->DBInstanceExpireTime && \is_array($this->DBInstanceExpireTime)) {
                $n = 0;
                foreach ($this->DBInstanceExpireTime as $item) {
                    $res['DBInstanceExpireTime'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceExpireTime'])) {
            if (!empty($map['DBInstanceExpireTime'])) {
                $model->DBInstanceExpireTime = [];
                $n                           = 0;
                foreach ($map['DBInstanceExpireTime'] as $item) {
                    $model->DBInstanceExpireTime[$n++] = null !== $item ? DBInstanceExpireTime::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
