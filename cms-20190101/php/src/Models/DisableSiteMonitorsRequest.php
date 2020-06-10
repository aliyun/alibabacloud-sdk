<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DisableSiteMonitorsRequest extends Model
{
    /**
     * @description taskIds
     *
     * @var string
     */
    public $taskIds;
    protected $_name = [
        'taskIds' => 'TaskIds',
    ];

    public function validate()
    {
        Model::validateRequired('taskIds', $this->taskIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableSiteMonitorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }

        return $model;
    }
}
