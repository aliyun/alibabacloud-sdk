<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetStackRequest extends Model
{
    /**
     * @description traceId
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

    /**
     * @description rpcId
     *
     * @var string
     */
    public $rpcID;
    protected $_name = [
        'traceID'  => 'TraceID',
        'regionId' => 'RegionId',
        'rpcID'    => 'RpcID',
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
        if (null !== $this->rpcID) {
            $res['RpcID'] = $this->rpcID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackRequest
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
        if (isset($map['RpcID'])) {
            $model->rpcID = $map['RpcID'];
        }

        return $model;
    }
}
