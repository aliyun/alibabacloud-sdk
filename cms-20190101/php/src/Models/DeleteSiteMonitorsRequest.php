<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteSiteMonitorsRequest extends Model
{
    /**
     * @description taskIds
     *
     * @var string
     */
    public $taskIds;

    /**
     * @description isDeleteAlarms
     *
     * @var bool
     */
    public $isDeleteAlarms;
    protected $_name = [
        'taskIds'        => 'TaskIds',
        'isDeleteAlarms' => 'IsDeleteAlarms',
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
        if (null !== $this->isDeleteAlarms) {
            $res['IsDeleteAlarms'] = $this->isDeleteAlarms;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSiteMonitorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }
        if (isset($map['IsDeleteAlarms'])) {
            $model->isDeleteAlarms = $map['IsDeleteAlarms'];
        }

        return $model;
    }
}
