<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponse\items\DBCluster;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponse\items\DBCluster\DBNodes\DBNode;
use AlibabaCloud\Tea\Model;

class DBNodes extends Model
{
    /**
     * @description DBNode
     *
     * @var array
     */
    public $DBNode;
    protected $_name = [
        'DBNode' => 'DBNode',
    ];

    public function validate()
    {
        Model::validateRequired('DBNode', $this->DBNode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNode) {
            $res['DBNode'] = [];
            if (null !== $this->DBNode && \is_array($this->DBNode)) {
                $n = 0;
                foreach ($this->DBNode as $item) {
                    $res['DBNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNode'])) {
            if (!empty($map['DBNode'])) {
                $model->DBNode = [];
                $n             = 0;
                foreach ($map['DBNode'] as $item) {
                    $model->DBNode[$n++] = null !== $item ? DBNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
