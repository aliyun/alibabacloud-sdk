<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponse\stack;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description Description
     *
     * @var string
     */
    public $description;

    /**
     * @description LogicalResourceId
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description Properties
     *
     * @var array
     */
    public $properties;

    /**
     * @description ResourceType
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description Stack
     *
     * @var array
     */
    public $stack;

    /**
     * @description RequiredBy
     *
     * @var array
     */
    public $requiredBy;
    protected $_name = [
        'description'       => 'Description',
        'logicalResourceId' => 'LogicalResourceId',
        'properties'        => 'Properties',
        'resourceType'      => 'ResourceType',
        'stack'             => 'Stack',
        'requiredBy'        => 'RequiredBy',
    ];

    public function validate()
    {
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('logicalResourceId', $this->logicalResourceId, true);
        Model::validateRequired('properties', $this->properties, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('stack', $this->stack, true);
        Model::validateRequired('requiredBy', $this->requiredBy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->stack) {
            $res['Stack'] = $this->stack;
        }
        if (null !== $this->requiredBy) {
            $res['RequiredBy'] = [];
            if (null !== $this->requiredBy) {
                $res['RequiredBy'] = $this->requiredBy;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Stack'])) {
            $model->stack = $map['Stack'];
        }
        if (isset($map['RequiredBy'])) {
            if (!empty($map['RequiredBy'])) {
                $model->requiredBy = [];
                $model->requiredBy = $map['RequiredBy'];
            }
        }

        return $model;
    }
}
