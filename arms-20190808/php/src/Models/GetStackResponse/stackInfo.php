<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponse;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponse\stackInfo\extInfo;
use AlibabaCloud\Tea\Model;

class stackInfo extends Model
{
    /**
     * @description startTime
     *
     * @var int
     */
    public $startTime;

    /**
     * @description duration
     *
     * @var int
     */
    public $duration;

    /**
     * @description rpcId
     *
     * @var string
     */
    public $rpcId;

    /**
     * @description serviceName
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description api
     *
     * @var string
     */
    public $api;

    /**
     * @description exception
     *
     * @var string
     */
    public $exception;

    /**
     * @description line
     *
     * @var string
     */
    public $line;

    /**
     * @description extInfo
     *
     * @var array
     */
    public $extInfo;
    protected $_name = [
        'startTime'   => 'StartTime',
        'duration'    => 'Duration',
        'rpcId'       => 'RpcId',
        'serviceName' => 'ServiceName',
        'api'         => 'Api',
        'exception'   => 'Exception',
        'line'        => 'Line',
        'extInfo'     => 'ExtInfo',
    ];

    public function validate()
    {
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('rpcId', $this->rpcId, true);
        Model::validateRequired('serviceName', $this->serviceName, true);
        Model::validateRequired('api', $this->api, true);
        Model::validateRequired('exception', $this->exception, true);
        Model::validateRequired('line', $this->line, true);
        Model::validateRequired('extInfo', $this->extInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->rpcId) {
            $res['RpcId'] = $this->rpcId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }
        if (null !== $this->exception) {
            $res['Exception'] = $this->exception;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = [];
            if (null !== $this->extInfo && \is_array($this->extInfo)) {
                $n = 0;
                foreach ($this->extInfo as $item) {
                    $res['ExtInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['RpcId'])) {
            $model->rpcId = $map['RpcId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }
        if (isset($map['Exception'])) {
            $model->exception = $map['Exception'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['ExtInfo'])) {
            if (!empty($map['ExtInfo'])) {
                $model->extInfo = [];
                $n              = 0;
                foreach ($map['ExtInfo'] as $item) {
                    $model->extInfo[$n++] = null !== $item ? extInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
