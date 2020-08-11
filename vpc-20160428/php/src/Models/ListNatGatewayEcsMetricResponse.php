<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatGatewayEcsMetricResponse\metricDataList;
use AlibabaCloud\Tea\Model;

class ListNatGatewayEcsMetricResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var array
     */
    public $metricDataList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'nextToken'      => 'NextToken',
        'maxResults'     => 'MaxResults',
        'metricDataList' => 'MetricDataList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('maxResults', $this->maxResults, true);
        Model::validateRequired('metricDataList', $this->metricDataList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->metricDataList) {
            $res['MetricDataList'] = [];
            if (null !== $this->metricDataList && \is_array($this->metricDataList)) {
                $n = 0;
                foreach ($this->metricDataList as $item) {
                    $res['MetricDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNatGatewayEcsMetricResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MetricDataList'])) {
            if (!empty($map['MetricDataList'])) {
                $model->metricDataList = [];
                $n                     = 0;
                foreach ($map['MetricDataList'] as $item) {
                    $model->metricDataList[$n++] = null !== $item ? metricDataList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
