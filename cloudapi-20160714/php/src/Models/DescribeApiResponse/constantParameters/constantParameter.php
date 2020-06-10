<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\constantParameters;

use AlibabaCloud\Tea\Model;

class constantParameter extends Model
{
    /**
     * @description serviceParameterName
     *
     * @var string
     */
    public $serviceParameterName;

    /**
     * @description constantValue
     *
     * @var string
     */
    public $constantValue;

    /**
     * @description location
     *
     * @var string
     */
    public $location;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'serviceParameterName' => 'ServiceParameterName',
        'constantValue'        => 'ConstantValue',
        'location'             => 'Location',
        'description'          => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('serviceParameterName', $this->serviceParameterName, true);
        Model::validateRequired('constantValue', $this->constantValue, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }
        if (null !== $this->constantValue) {
            $res['ConstantValue'] = $this->constantValue;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return constantParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }
        if (isset($map['ConstantValue'])) {
            $model->constantValue = $map['ConstantValue'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
