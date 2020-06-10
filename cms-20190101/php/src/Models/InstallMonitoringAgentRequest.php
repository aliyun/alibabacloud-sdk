<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class InstallMonitoringAgentRequest extends Model
{
    /**
     * @description force
     *
     * @var bool
     */
    public $force;

    /**
     * @description instanceList
     *
     * @var array
     */
    public $instanceIds;
    protected $_name = [
        'force'       => 'Force',
        'instanceIds' => 'InstanceIds',
    ];

    public function validate()
    {
        Model::validateRequired('instanceIds', $this->instanceIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = [];
            if (null !== $this->instanceIds) {
                $res['InstanceIds'] = $this->instanceIds;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallMonitoringAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $model->instanceIds = $map['InstanceIds'];
            }
        }

        return $model;
    }
}
