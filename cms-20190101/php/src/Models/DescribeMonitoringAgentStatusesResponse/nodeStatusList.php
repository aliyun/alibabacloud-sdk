<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponse\nodeStatusList\nodeStatus;
use AlibabaCloud\Tea\Model;

class nodeStatusList extends Model
{
    /**
     * @description NodeStatus
     *
     * @var array
     */
    public $nodeStatus;
    protected $_name = [
        'nodeStatus' => 'NodeStatus',
    ];

    public function validate()
    {
        Model::validateRequired('nodeStatus', $this->nodeStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = [];
            if (null !== $this->nodeStatus && \is_array($this->nodeStatus)) {
                $n = 0;
                foreach ($this->nodeStatus as $item) {
                    $res['NodeStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeStatus'])) {
            if (!empty($map['NodeStatus'])) {
                $model->nodeStatus = [];
                $n                 = 0;
                foreach ($map['NodeStatus'] as $item) {
                    $model->nodeStatus[$n++] = null !== $item ? nodeStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
