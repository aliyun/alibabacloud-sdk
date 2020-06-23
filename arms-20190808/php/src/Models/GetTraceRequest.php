<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetTraceRequest extends Model
{
    /**
     * @description traceID
     *
     * @var string
     */
    public $traceID;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'traceID'  => 'TraceID',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('traceID', $this->traceID, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTraceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
