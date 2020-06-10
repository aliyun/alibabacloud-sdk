<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceResponse\items\DBInstancePerformance;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description DBInstancePerformance
     *
     * @var array
     */
    public $DBInstancePerformance;
    protected $_name = [
        'DBInstancePerformance' => 'DBInstancePerformance',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstancePerformance', $this->DBInstancePerformance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstancePerformance) {
            $res['DBInstancePerformance'] = [];
            if (null !== $this->DBInstancePerformance && \is_array($this->DBInstancePerformance)) {
                $n = 0;
                foreach ($this->DBInstancePerformance as $item) {
                    $res['DBInstancePerformance'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DBInstancePerformance'])) {
            if (!empty($map['DBInstancePerformance'])) {
                $model->DBInstancePerformance = [];
                $n                            = 0;
                foreach ($map['DBInstancePerformance'] as $item) {
                    $model->DBInstancePerformance[$n++] = null !== $item ? DBInstancePerformance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
