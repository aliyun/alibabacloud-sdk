<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponse\pageBean;

use AlibabaCloud\Tea\Model;

class traceInfos extends Model
{
    /**
     * @description traceID
     *
     * @var string
     */
    public $traceID;

    /**
     * @description operationName
     *
     * @var string
     */
    public $operationName;

    /**
     * @description serviceName
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description serviceIp
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @description duration
     *
     * @var int
     */
    public $duration;

    /**
     * @description timestamp
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'traceID'       => 'TraceID',
        'operationName' => 'OperationName',
        'serviceName'   => 'ServiceName',
        'serviceIp'     => 'ServiceIp',
        'duration'      => 'Duration',
        'timestamp'     => 'Timestamp',
    ];

    public function validate()
    {
        Model::validateRequired('traceID', $this->traceID, true);
        Model::validateRequired('operationName', $this->operationName, true);
        Model::validateRequired('serviceName', $this->serviceName, true);
        Model::validateRequired('serviceIp', $this->serviceIp, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
