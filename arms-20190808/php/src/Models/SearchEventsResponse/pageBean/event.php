<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponse\pageBean;

use AlibabaCloud\Tea\Model;

class event extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description eventTime
     *
     * @var int
     */
    public $eventTime;

    /**
     * @description alertType
     *
     * @var int
     */
    public $alertType;

    /**
     * @description errorLevel
     *
     * @var int
     */
    public $eventLevel;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description alertId
     *
     * @var int
     */
    public $alertId;

    /**
     * @description alertName
     *
     * @var string
     */
    public $alertName;

    /**
     * @description alertRule
     *
     * @var string
     */
    public $alertRule;

    /**
     * @description links
     *
     * @var array
     */
    public $links;
    protected $_name = [
        'id'         => 'Id',
        'eventTime'  => 'EventTime',
        'alertType'  => 'AlertType',
        'eventLevel' => 'EventLevel',
        'message'    => 'Message',
        'alertId'    => 'AlertId',
        'alertName'  => 'AlertName',
        'alertRule'  => 'AlertRule',
        'links'      => 'Links',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('eventTime', $this->eventTime, true);
        Model::validateRequired('alertType', $this->alertType, true);
        Model::validateRequired('eventLevel', $this->eventLevel, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('alertId', $this->alertId, true);
        Model::validateRequired('alertName', $this->alertName, true);
        Model::validateRequired('alertRule', $this->alertRule, true);
        Model::validateRequired('links', $this->links, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->alertRule) {
            $res['AlertRule'] = $this->alertRule;
        }
        if (null !== $this->links) {
            $res['Links'] = [];
            if (null !== $this->links) {
                $res['Links'] = $this->links;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return event
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['AlertRule'])) {
            $model->alertRule = $map['AlertRule'];
        }
        if (isset($map['Links'])) {
            if (!empty($map['Links'])) {
                $model->links = [];
                $model->links = $map['Links'];
            }
        }

        return $model;
    }
}
