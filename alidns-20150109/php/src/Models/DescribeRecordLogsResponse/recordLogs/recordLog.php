<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponse\recordLogs;

use AlibabaCloud\Tea\Model;

class recordLog extends Model
{
    /**
     * @description actionTime
     *
     * @var string
     */
    public $actionTime;

    /**
     * @description actionTimestamp
     *
     * @var int
     */
    public $actionTimestamp;

    /**
     * @description action
     *
     * @var string
     */
    public $action;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description clientIp
     *
     * @var string
     */
    public $clientIp;
    protected $_name = [
        'actionTime'      => 'ActionTime',
        'actionTimestamp' => 'ActionTimestamp',
        'action'          => 'Action',
        'message'         => 'Message',
        'clientIp'        => 'ClientIp',
    ];

    public function validate()
    {
        Model::validateRequired('actionTime', $this->actionTime, true);
        Model::validateRequired('actionTimestamp', $this->actionTimestamp, true);
        Model::validateRequired('action', $this->action, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('clientIp', $this->clientIp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionTime) {
            $res['ActionTime'] = $this->actionTime;
        }
        if (null !== $this->actionTimestamp) {
            $res['ActionTimestamp'] = $this->actionTimestamp;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionTime'])) {
            $model->actionTime = $map['ActionTime'];
        }
        if (isset($map['ActionTimestamp'])) {
            $model->actionTimestamp = $map['ActionTimestamp'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        return $model;
    }
}
