<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponse\hostInstanceInfos\nodeInfo;
use AlibabaCloud\Tea\Model;

class hostInstanceInfos extends Model
{
    /**
     * @description NodeInfo
     *
     * @var array
     */
    public $nodeInfo;
    protected $_name = [
        'nodeInfo' => 'NodeInfo',
    ];

    public function validate()
    {
        Model::validateRequired('nodeInfo', $this->nodeInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeInfo) {
            $res['NodeInfo'] = [];
            if (null !== $this->nodeInfo && \is_array($this->nodeInfo)) {
                $n = 0;
                foreach ($this->nodeInfo as $item) {
                    $res['NodeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostInstanceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeInfo'])) {
            if (!empty($map['NodeInfo'])) {
                $model->nodeInfo = [];
                $n               = 0;
                foreach ($map['NodeInfo'] as $item) {
                    $model->nodeInfo[$n++] = null !== $item ? nodeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
