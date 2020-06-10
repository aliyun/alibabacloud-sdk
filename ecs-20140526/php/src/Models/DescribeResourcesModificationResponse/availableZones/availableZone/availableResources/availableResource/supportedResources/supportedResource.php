<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponse\availableZones\availableZone\availableResources\availableResource\supportedResources;

use AlibabaCloud\Tea\Model;

class supportedResource extends Model
{
    /**
     * @description value
     *
     * @var string
     */
    public $value;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description statusCategory
     *
     * @var string
     */
    public $statusCategory;

    /**
     * @description min
     *
     * @var int
     */
    public $min;

    /**
     * @description max
     *
     * @var int
     */
    public $max;

    /**
     * @description unit
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'value'          => 'Value',
        'status'         => 'Status',
        'statusCategory' => 'StatusCategory',
        'min'            => 'Min',
        'max'            => 'Max',
        'unit'           => 'Unit',
    ];

    public function validate()
    {
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusCategory', $this->statusCategory, true);
        Model::validateRequired('min', $this->min, true);
        Model::validateRequired('max', $this->max, true);
        Model::validateRequired('unit', $this->unit, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusCategory) {
            $res['StatusCategory'] = $this->statusCategory;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusCategory'])) {
            $model->statusCategory = $map['StatusCategory'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
