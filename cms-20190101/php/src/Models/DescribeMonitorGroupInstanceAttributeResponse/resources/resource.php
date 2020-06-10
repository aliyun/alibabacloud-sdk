<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponse\resources;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponse\resources\resource\region;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponse\resources\resource\tags;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponse\resources\resource\vpc;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description desc
     *
     * @var string
     */
    public $desc;

    /**
     * @description networkType
     *
     * @var string
     */
    public $networkType;

    /**
     * @description category
     *
     * @var string
     */
    public $category;

    /**
     * @description dimension
     *
     * @var string
     */
    public $dimension;

    /**
     * @description tags
     *
     * @var tags
     */
    public $tags;

    /**
     * @description region
     *
     * @var region
     */
    public $region;

    /**
     * @description vpc
     *
     * @var vpc
     */
    public $vpc;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'instanceId'   => 'InstanceId',
        'desc'         => 'Desc',
        'networkType'  => 'NetworkType',
        'category'     => 'Category',
        'dimension'    => 'Dimension',
        'tags'         => 'Tags',
        'region'       => 'Region',
        'vpc'          => 'Vpc',
    ];

    public function validate()
    {
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('desc', $this->desc, true);
        Model::validateRequired('networkType', $this->networkType, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('dimension', $this->dimension, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('vpc', $this->vpc, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->region) {
            $res['Region'] = null !== $this->region ? $this->region->toMap() : null;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = null !== $this->vpc ? $this->vpc->toMap() : null;
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Region'])) {
            $model->region = region::fromMap($map['Region']);
        }
        if (isset($map['Vpc'])) {
            $model->vpc = vpc::fromMap($map['Vpc']);
        }

        return $model;
    }
}
