<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponse\apiTrafficControls;

use AlibabaCloud\Tea\Model;

class apiTrafficControlItem extends Model
{
    /**
     * @description apiId
     *
     * @var string
     */
    public $apiId;

    /**
     * @description apiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description ruleId
     *
     * @var string
     */
    public $trafficControlId;

    /**
     * @description ruleName
     *
     * @var string
     */
    public $trafficControlName;

    /**
     * @description createdTime
     *
     * @var string
     */
    public $boundTime;
    protected $_name = [
        'apiId'              => 'ApiId',
        'apiName'            => 'ApiName',
        'trafficControlId'   => 'TrafficControlId',
        'trafficControlName' => 'TrafficControlName',
        'boundTime'          => 'BoundTime',
    ];

    public function validate()
    {
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('apiName', $this->apiName, true);
        Model::validateRequired('trafficControlId', $this->trafficControlId, true);
        Model::validateRequired('trafficControlName', $this->trafficControlName, true);
        Model::validateRequired('boundTime', $this->boundTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }
        if (null !== $this->trafficControlName) {
            $res['TrafficControlName'] = $this->trafficControlName;
        }
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiTrafficControlItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }
        if (isset($map['TrafficControlName'])) {
            $model->trafficControlName = $map['TrafficControlName'];
        }
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }

        return $model;
    }
}
