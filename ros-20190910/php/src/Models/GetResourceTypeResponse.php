<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeResponse extends Model
{
    /**
     * @description Attributes
     *
     * @var array
     */
    public $attributes;

    /**
     * @description Properties
     *
     * @var array
     */
    public $properties;

    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description ResourceType
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description SupportDriftDetection
     *
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
        $res                          = [];
        $res['Attributes']            = $this->attributes;
        $res['Properties']            = $this->properties;
        $res['RequestId']             = $this->requestId;
        $res['ResourceType']          = $this->resourceType;
        $res['SupportDriftDetection'] = $this->supportDriftDetection;

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
