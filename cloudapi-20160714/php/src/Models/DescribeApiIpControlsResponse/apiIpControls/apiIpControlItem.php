<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsResponse\apiIpControls;

use AlibabaCloud\Tea\Model;

class apiIpControlItem extends Model
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
    public $ipControlId;

    /**
     * @description ruleName
     *
     * @var string
     */
    public $ipControlName;

    /**
     * @description createdTime
     *
     * @var string
     */
    public $boundTime;
    protected $_name = [
        'apiId'         => 'ApiId',
        'apiName'       => 'ApiName',
        'ipControlId'   => 'IpControlId',
        'ipControlName' => 'IpControlName',
        'boundTime'     => 'BoundTime',
    ];

    public function validate()
    {
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('apiName', $this->apiName, true);
        Model::validateRequired('ipControlId', $this->ipControlId, true);
        Model::validateRequired('ipControlName', $this->ipControlName, true);
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
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->ipControlName) {
            $res['IpControlName'] = $this->ipControlName;
        }
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiIpControlItem
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
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['IpControlName'])) {
            $model->ipControlName = $map['IpControlName'];
        }
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }

        return $model;
    }
}
