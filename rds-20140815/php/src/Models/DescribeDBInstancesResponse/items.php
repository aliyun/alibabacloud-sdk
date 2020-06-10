<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponse\items\DBInstance;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description DBInstance
     *
     * @var array
     */
    public $DBInstance;
    protected $_name = [
        'DBInstance' => 'DBInstance',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstance', $this->DBInstance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstance) {
            $res['DBInstance'] = [];
            if (null !== $this->DBInstance && \is_array($this->DBInstance)) {
                $n = 0;
                foreach ($this->DBInstance as $item) {
                    $res['DBInstance'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DBInstance'])) {
            if (!empty($map['DBInstance'])) {
                $model->DBInstance = [];
                $n                 = 0;
                foreach ($map['DBInstance'] as $item) {
                    $model->DBInstance[$n++] = null !== $item ? DBInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
