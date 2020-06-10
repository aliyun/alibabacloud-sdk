<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule\eventPattern\eventPattern;

use AlibabaCloud\Tea\Model;

class eventTypeList extends Model
{
    /**
     * @description EventTypeList
     *
     * @var array
     */
    public $eventTypeList;
    protected $_name = [
        'eventTypeList' => 'EventTypeList',
    ];

    public function validate()
    {
        Model::validateRequired('eventTypeList', $this->eventTypeList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = [];
            if (null !== $this->eventTypeList) {
                $res['EventTypeList'] = $this->eventTypeList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventTypeList'])) {
            if (!empty($map['EventTypeList'])) {
                $model->eventTypeList = [];
                $model->eventTypeList = $map['EventTypeList'];
            }
        }

        return $model;
    }
}
