<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponse\resourceDrifts;

use AlibabaCloud\Tea\Model;

class propertyDifferences extends Model
{
    /**
     * @description PropertyPath
     *
     * @var string
     */
    public $propertyPath;

    /**
     * @description ActualValue
     *
     * @var string
     */
    public $actualValue;

    /**
     * @description ExpectedValue
     *
     * @var string
     */
    public $expectedValue;

    /**
     * @description DifferenceType
     *
     * @var string
     */
    public $differenceType;
    protected $_name = [
        'propertyPath'   => 'PropertyPath',
        'actualValue'    => 'ActualValue',
        'expectedValue'  => 'ExpectedValue',
        'differenceType' => 'DifferenceType',
    ];

    public function validate()
    {
        Model::validateRequired('propertyPath', $this->propertyPath, true);
        Model::validateRequired('actualValue', $this->actualValue, true);
        Model::validateRequired('expectedValue', $this->expectedValue, true);
        Model::validateRequired('differenceType', $this->differenceType, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['PropertyPath']   = $this->propertyPath;
        $res['ActualValue']    = $this->actualValue;
        $res['ExpectedValue']  = $this->expectedValue;
        $res['DifferenceType'] = $this->differenceType;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyDifferences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyPath'])) {
            $model->propertyPath = $map['PropertyPath'];
        }
        if (isset($map['ActualValue'])) {
            $model->actualValue = $map['ActualValue'];
        }
        if (isset($map['ExpectedValue'])) {
            $model->expectedValue = $map['ExpectedValue'];
        }
        if (isset($map['DifferenceType'])) {
            $model->differenceType = $map['DifferenceType'];
        }

        return $model;
    }
}
