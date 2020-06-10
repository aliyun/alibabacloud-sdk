<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule\eventPattern;
use AlibabaCloud\Tea\Model;

class eventRule extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description eventType
     *
     * @var string
     */
    public $eventType;

    /**
     * @description state
     *
     * @var string
     */
    public $state;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description eventPattern
     *
     * @var eventPattern
     */
    public $eventPattern;
    protected $_name = [
        'name'         => 'Name',
        'groupId'      => 'GroupId',
        'eventType'    => 'EventType',
        'state'        => 'State',
        'description'  => 'Description',
        'eventPattern' => 'EventPattern',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('eventPattern', $this->eventPattern, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventPattern) {
            $res['EventPattern'] = null !== $this->eventPattern ? $this->eventPattern->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventPattern'])) {
            $model->eventPattern = eventPattern::fromMap($map['EventPattern']);
        }

        return $model;
    }
}
