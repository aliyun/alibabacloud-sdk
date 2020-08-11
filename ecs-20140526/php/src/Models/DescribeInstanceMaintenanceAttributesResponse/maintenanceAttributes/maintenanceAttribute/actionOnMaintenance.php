<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse\maintenanceAttributes\maintenanceAttribute;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance\supportedValues;
use AlibabaCloud\Tea\Model;

class actionOnMaintenance extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var supportedValues
     */
    public $supportedValues;
    protected $_name = [
        'value'           => 'Value',
        'defaultValue'    => 'DefaultValue',
        'supportedValues' => 'SupportedValues',
    ];

    public function validate()
    {
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('defaultValue', $this->defaultValue, true);
        Model::validateRequired('supportedValues', $this->supportedValues, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->supportedValues) {
            $res['SupportedValues'] = null !== $this->supportedValues ? $this->supportedValues->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionOnMaintenance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['SupportedValues'])) {
            $model->supportedValues = supportedValues::fromMap($map['SupportedValues']);
        }

        return $model;
    }
}
