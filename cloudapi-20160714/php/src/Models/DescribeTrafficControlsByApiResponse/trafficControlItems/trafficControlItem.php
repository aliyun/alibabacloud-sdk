<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponse\trafficControlItems;

use AlibabaCloud\Tea\Model;

class trafficControlItem extends Model
{
    /**
     * @description ruleId
     *
     * @var string
     */
    public $trafficControlItemId;

    /**
     * @description ruleName
     *
     * @var string
     */
    public $trafficControlItemName;

    /**
     * @description createdTime
     *
     * @var string
     */
    public $boundTime;
    protected $_name = [
        'trafficControlItemId'   => 'TrafficControlItemId',
        'trafficControlItemName' => 'TrafficControlItemName',
        'boundTime'              => 'BoundTime',
    ];

    public function validate()
    {
        Model::validateRequired('trafficControlItemId', $this->trafficControlItemId, true);
        Model::validateRequired('trafficControlItemName', $this->trafficControlItemName, true);
        Model::validateRequired('boundTime', $this->boundTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficControlItemId) {
            $res['TrafficControlItemId'] = $this->trafficControlItemId;
        }
        if (null !== $this->trafficControlItemName) {
            $res['TrafficControlItemName'] = $this->trafficControlItemName;
        }
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficControlItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficControlItemId'])) {
            $model->trafficControlItemId = $map['TrafficControlItemId'];
        }
        if (isset($map['TrafficControlItemName'])) {
            $model->trafficControlItemName = $map['TrafficControlItemName'];
        }
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }

        return $model;
    }
}
