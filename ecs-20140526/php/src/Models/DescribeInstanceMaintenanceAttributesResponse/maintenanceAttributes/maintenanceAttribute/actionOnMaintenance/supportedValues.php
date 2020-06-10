<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance;

use AlibabaCloud\Tea\Model;

class supportedValues extends Model
{
    /**
     * @description SupportedValue
     *
     * @var array
     */
    public $supportedValue;
    protected $_name = [
        'supportedValue' => 'SupportedValue',
    ];

    public function validate()
    {
        Model::validateRequired('supportedValue', $this->supportedValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedValue) {
            $res['SupportedValue'] = [];
            if (null !== $this->supportedValue) {
                $res['SupportedValue'] = $this->supportedValue;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedValue'])) {
            if (!empty($map['SupportedValue'])) {
                $model->supportedValue = [];
                $model->supportedValue = $map['SupportedValue'];
            }
        }

        return $model;
    }
}
