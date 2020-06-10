<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricMetaListResponse\resources;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description project
     *
     * @var string
     */
    public $namespace;

    /**
     * @description metric
     *
     * @var string
     */
    public $metricName;

    /**
     * @description statistics
     *
     * @var string
     */
    public $statistics;

    /**
     * @description unit
     *
     * @var string
     */
    public $unit;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description dimensions
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description periods
     *
     * @var string
     */
    public $periods;

    /**
     * @description labels
     *
     * @var string
     */
    public $labels;
    protected $_name = [
        'namespace'   => 'Namespace',
        'metricName'  => 'MetricName',
        'statistics'  => 'Statistics',
        'unit'        => 'Unit',
        'description' => 'Description',
        'dimensions'  => 'Dimensions',
        'periods'     => 'Periods',
        'labels'      => 'Labels',
    ];

    public function validate()
    {
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('statistics', $this->statistics, true);
        Model::validateRequired('unit', $this->unit, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('dimensions', $this->dimensions, true);
        Model::validateRequired('periods', $this->periods, true);
        Model::validateRequired('labels', $this->labels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->periods) {
            $res['Periods'] = $this->periods;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['Periods'])) {
            $model->periods = $map['Periods'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        return $model;
    }
}
