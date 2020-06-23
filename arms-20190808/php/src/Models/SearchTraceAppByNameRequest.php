<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SearchTraceAppByNameRequest extends Model
{
    /**
     * @description appName
     *
     * @var string
     */
    public $traceAppName;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'traceAppName' => 'TraceAppName',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceAppName) {
            $res['TraceAppName'] = $this->traceAppName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTraceAppByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TraceAppName'])) {
            $model->traceAppName = $map['TraceAppName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
