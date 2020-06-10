<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class RemoveReportsRequest extends Model
{
    /**
     * @description reportIds
     *
     * @var array
     */
    public $reportIds;
    protected $_name = [
        'reportIds' => 'ReportIds',
    ];

    public function validate()
    {
        Model::validateRequired('reportIds', $this->reportIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportIds) {
            $res['ReportIds'] = $this->reportIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveReportsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportIds'])) {
            $model->reportIds = $map['ReportIds'];
        }

        return $model;
    }
}
