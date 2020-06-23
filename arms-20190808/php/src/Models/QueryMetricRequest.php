<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricRequest\filters;
use AlibabaCloud\Tea\Model;

class QueryMetricRequest extends Model
{
    /**
     * @description intervalInSec
     *
     * @var int
     */
    public $intervalInSec;

    /**
     * @description startTime
     *
     * @var int
     */
    public $startTime;

    /**
     * @description endTime
     *
     * @var int
     */
    public $endTime;

    /**
     * @description orderBy
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description limit
     *
     * @var int
     */
    public $limit;

    /**
     * @description filters
     *
     * @var array
     */
    public $filters;

    /**
     * @description dimensions
     *
     * @var array
     */
    public $dimensions;

    /**
     * @description metric
     *
     * @var string
     */
    public $metric;

    /**
     * @description measures
     *
     * @var array
     */
    public $measures;

    /**
     * @description order
     *
     * @var string
     */
    public $order;

    /**
     * @description proxyUserId
     *
     * @var string
     */
    public $proxyUserId;

    /**
     * @description consistencyDataKey
     *
     * @var string
     */
    public $consistencyDataKey;

    /**
     * @description consistencyQueryStrategy
     *
     * @var string
     */
    public $consistencyQueryStrategy;
    protected $_name = [
        'intervalInSec'            => 'IntervalInSec',
        'startTime'                => 'StartTime',
        'endTime'                  => 'EndTime',
        'orderBy'                  => 'OrderBy',
        'limit'                    => 'Limit',
        'filters'                  => 'Filters',
        'dimensions'               => 'Dimensions',
        'metric'                   => 'Metric',
        'measures'                 => 'Measures',
        'order'                    => 'Order',
        'proxyUserId'              => 'ProxyUserId',
        'consistencyDataKey'       => 'ConsistencyDataKey',
        'consistencyQueryStrategy' => 'ConsistencyQueryStrategy',
    ];

    public function validate()
    {
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('metric', $this->metric, true);
        Model::validateRequired('measures', $this->measures, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intervalInSec) {
            $res['IntervalInSec'] = $this->intervalInSec;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions) {
                $res['Dimensions'] = $this->dimensions;
            }
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->measures) {
            $res['Measures'] = [];
            if (null !== $this->measures) {
                $res['Measures'] = $this->measures;
            }
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->consistencyDataKey) {
            $res['ConsistencyDataKey'] = $this->consistencyDataKey;
        }
        if (null !== $this->consistencyQueryStrategy) {
            $res['ConsistencyQueryStrategy'] = $this->consistencyQueryStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntervalInSec'])) {
            $model->intervalInSec = $map['IntervalInSec'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $model->dimensions = $map['Dimensions'];
            }
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['Measures'])) {
            if (!empty($map['Measures'])) {
                $model->measures = [];
                $model->measures = $map['Measures'];
            }
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['ConsistencyDataKey'])) {
            $model->consistencyDataKey = $map['ConsistencyDataKey'];
        }
        if (isset($map['ConsistencyQueryStrategy'])) {
            $model->consistencyQueryStrategy = $map['ConsistencyQueryStrategy'];
        }

        return $model;
    }
}
