<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponse\result\eventPattern;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description eventType
     *
     * @var string
     */
    public $eventType;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description state
     *
     * @var string
     */
    public $state;

    /**
     * @description eventPattern
     *
     * @var eventPattern
     */
    public $eventPattern;
    protected $_name = [
        'description'  => 'Description',
        'name'         => 'Name',
        'eventType'    => 'EventType',
        'groupId'      => 'GroupId',
        'state'        => 'State',
        'eventPattern' => 'EventPattern',
    ];

    public function validate()
    {
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('eventPattern', $this->eventPattern, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->eventPattern) {
            $res['EventPattern'] = null !== $this->eventPattern ? $this->eventPattern->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['EventPattern'])) {
            $model->eventPattern = eventPattern::fromMap($map['EventPattern']);
        }

        return $model;
    }
}
