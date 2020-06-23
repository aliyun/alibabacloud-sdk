<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponse\multiCallChainInfos;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponse\multiCallChainInfos\spans\logEventList;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponse\multiCallChainInfos\spans\tagEntryList;
use AlibabaCloud\Tea\Model;

class spans extends Model
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
     * @description duration
     *
     * @var int
     */
    public $duration;

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
     * @description timestamp
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description rpcId
     *
     * @var string
     */
    public $rpcId;

    /**
     * @description resultCode
     *
     * @var string
     */
    public $resultCode;

    /**
     * @description haveStack
     *
     * @var bool
     */
    public $haveStack;

    /**
     * @description rpcType
     *
     * @var int
     */
    public $rpcType;

    /**
     * @description tagEntryList
     *
     * @var array
     */
    public $tagEntryList;

    /**
     * @description logEventList
     *
     * @var array
     */
    public $logEventList;
    protected $_name = [
        'traceID'       => 'TraceID',
        'operationName' => 'OperationName',
        'duration'      => 'Duration',
        'serviceName'   => 'ServiceName',
        'serviceIp'     => 'ServiceIp',
        'timestamp'     => 'Timestamp',
        'rpcId'         => 'RpcId',
        'resultCode'    => 'ResultCode',
        'haveStack'     => 'HaveStack',
        'rpcType'       => 'RpcType',
        'tagEntryList'  => 'TagEntryList',
        'logEventList'  => 'LogEventList',
    ];

    public function validate()
    {
        Model::validateRequired('traceID', $this->traceID, true);
        Model::validateRequired('operationName', $this->operationName, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('serviceName', $this->serviceName, true);
        Model::validateRequired('serviceIp', $this->serviceIp, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('rpcId', $this->rpcId, true);
        Model::validateRequired('resultCode', $this->resultCode, true);
        Model::validateRequired('haveStack', $this->haveStack, true);
        Model::validateRequired('rpcType', $this->rpcType, true);
        Model::validateRequired('tagEntryList', $this->tagEntryList, true);
        Model::validateRequired('logEventList', $this->logEventList, true);
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->rpcId) {
            $res['RpcId'] = $this->rpcId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->haveStack) {
            $res['HaveStack'] = $this->haveStack;
        }
        if (null !== $this->rpcType) {
            $res['RpcType'] = $this->rpcType;
        }
        if (null !== $this->tagEntryList) {
            $res['TagEntryList'] = [];
            if (null !== $this->tagEntryList && \is_array($this->tagEntryList)) {
                $n = 0;
                foreach ($this->tagEntryList as $item) {
                    $res['TagEntryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logEventList) {
            $res['LogEventList'] = [];
            if (null !== $this->logEventList && \is_array($this->logEventList)) {
                $n = 0;
                foreach ($this->logEventList as $item) {
                    $res['LogEventList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spans
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['RpcId'])) {
            $model->rpcId = $map['RpcId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['HaveStack'])) {
            $model->haveStack = $map['HaveStack'];
        }
        if (isset($map['RpcType'])) {
            $model->rpcType = $map['RpcType'];
        }
        if (isset($map['TagEntryList'])) {
            if (!empty($map['TagEntryList'])) {
                $model->tagEntryList = [];
                $n                   = 0;
                foreach ($map['TagEntryList'] as $item) {
                    $model->tagEntryList[$n++] = null !== $item ? tagEntryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogEventList'])) {
            if (!empty($map['LogEventList'])) {
                $model->logEventList = [];
                $n                   = 0;
                foreach ($map['LogEventList'] as $item) {
                    $model->logEventList[$n++] = null !== $item ? logEventList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
