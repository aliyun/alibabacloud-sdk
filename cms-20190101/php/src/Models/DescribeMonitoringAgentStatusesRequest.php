<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentStatusesRequest extends Model
{
    /**
     * @description instanceIds
     *
     * @var string
     */
    public $instanceIds;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
    ];

    public function validate()
    {
        Model::validateRequired('instanceIds', $this->instanceIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitoringAgentStatusesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        return $model;
    }
}
