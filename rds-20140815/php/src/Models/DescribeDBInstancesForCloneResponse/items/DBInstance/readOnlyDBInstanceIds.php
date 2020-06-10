<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponse\items\DBInstance;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponse\items\DBInstance\readOnlyDBInstanceIds\readOnlyDBInstanceId;
use AlibabaCloud\Tea\Model;

class readOnlyDBInstanceIds extends Model
{
    /**
     * @description ReadOnlyDBInstanceId
     *
     * @var array
     */
    public $readOnlyDBInstanceId;
    protected $_name = [
        'readOnlyDBInstanceId' => 'ReadOnlyDBInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('readOnlyDBInstanceId', $this->readOnlyDBInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readOnlyDBInstanceId) {
            $res['ReadOnlyDBInstanceId'] = [];
            if (null !== $this->readOnlyDBInstanceId && \is_array($this->readOnlyDBInstanceId)) {
                $n = 0;
                foreach ($this->readOnlyDBInstanceId as $item) {
                    $res['ReadOnlyDBInstanceId'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readOnlyDBInstanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadOnlyDBInstanceId'])) {
            if (!empty($map['ReadOnlyDBInstanceId'])) {
                $model->readOnlyDBInstanceId = [];
                $n                           = 0;
                foreach ($map['ReadOnlyDBInstanceId'] as $item) {
                    $model->readOnlyDBInstanceId[$n++] = null !== $item ? readOnlyDBInstanceId::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
