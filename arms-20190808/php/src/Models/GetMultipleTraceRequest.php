<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetMultipleTraceRequest extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description traceIDS
     *
     * @var array
     */
    public $traceIDs;
    protected $_name = [
        'regionId' => 'RegionId',
        'traceIDs' => 'TraceIDs',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->traceIDs) {
            $res['TraceIDs'] = [];
            if (null !== $this->traceIDs) {
                $res['TraceIDs'] = $this->traceIDs;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultipleTraceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TraceIDs'])) {
            if (!empty($map['TraceIDs'])) {
                $model->traceIDs = [];
                $model->traceIDs = $map['TraceIDs'];
            }
        }

        return $model;
    }
}
