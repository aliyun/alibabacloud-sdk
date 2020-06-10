<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\customSystemParameters;

use AlibabaCloud\Tea\Model;

class customSystemParameter extends Model
{
    /**
     * @description apiParameterName
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description serviceParameterName
     *
     * @var string
     */
    public $serviceParameterName;

    /**
     * @description location
     *
     * @var string
     */
    public $location;

    /**
     * @description demoValue
     *
     * @var string
     */
    public $demoValue;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'parameterName'        => 'ParameterName',
        'serviceParameterName' => 'ServiceParameterName',
        'location'             => 'Location',
        'demoValue'            => 'DemoValue',
        'description'          => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('parameterName', $this->parameterName, true);
        Model::validateRequired('serviceParameterName', $this->serviceParameterName, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('demoValue', $this->demoValue, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->demoValue) {
            $res['DemoValue'] = $this->demoValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customSystemParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['DemoValue'])) {
            $model->demoValue = $map['DemoValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
