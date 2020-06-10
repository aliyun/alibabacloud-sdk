<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListStackResourceDriftsRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description MaxResults
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description ResourceDriftStatus
     *
     * @var array
     */
    public $resourceDriftStatus;

    /**
     * @description NextToken
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'stackId'             => 'StackId',
        'regionId'            => 'RegionId',
        'maxResults'          => 'MaxResults',
        'resourceDriftStatus' => 'ResourceDriftStatus',
        'nextToken'           => 'NextToken',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->resourceDriftStatus) {
            $res['ResourceDriftStatus'] = [];
            if (null !== $this->resourceDriftStatus) {
                $res['ResourceDriftStatus'] = $this->resourceDriftStatus;
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackResourceDriftsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ResourceDriftStatus'])) {
            if (!empty($map['ResourceDriftStatus'])) {
                $model->resourceDriftStatus = [];
                $model->resourceDriftStatus = $map['ResourceDriftStatus'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
