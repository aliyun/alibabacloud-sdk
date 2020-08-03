<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeResponse extends Model
{
    /**
     * @var array
     */
    public $attributes;

    /**
     * @var array
     */
    public $properties;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var bool
     */
    public $supportDriftDetection;
    protected $_name = [
        'attributes'            => 'Attributes',
        'properties'            => 'Properties',
        'requestId'             => 'RequestId',
        'resourceType'          => 'ResourceType',
        'supportDriftDetection' => 'SupportDriftDetection',
    ];

    public function validate()
    {
        Model::validateRequired('attributes', $this->attributes, true);
        Model::validateRequired('properties', $this->properties, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('supportDriftDetection', $this->supportDriftDetection, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->supportDriftDetection) {
            $res['SupportDriftDetection'] = $this->supportDriftDetection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceTypeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SupportDriftDetection'])) {
            $model->supportDriftDetection = $map['SupportDriftDetection'];
        }

        return $model;
    }
}
