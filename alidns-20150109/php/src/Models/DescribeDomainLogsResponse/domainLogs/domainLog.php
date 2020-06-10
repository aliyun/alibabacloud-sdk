<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsResponse\domainLogs;

use AlibabaCloud\Tea\Model;

class domainLog extends Model
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
     * @description domainName
     *
     * @var string
     */
    public $domainName;

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

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'actionTime'      => 'ActionTime',
        'actionTimestamp' => 'ActionTimestamp',
        'domainName'      => 'DomainName',
        'action'          => 'Action',
        'message'         => 'Message',
        'clientIp'        => 'ClientIp',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
        Model::validateRequired('actionTime', $this->actionTime, true);
        Model::validateRequired('actionTimestamp', $this->actionTimestamp, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('action', $this->action, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('clientIp', $this->clientIp, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainLog
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
