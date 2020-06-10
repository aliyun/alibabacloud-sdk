<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponse\serviceParameters;

use AlibabaCloud\Tea\Model;

class serviceParameter extends Model
{
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
     * @description parameterType
     *
     * @var string
     */
    public $parameterType;
    protected $_name = [
        'serviceParameterName' => 'ServiceParameterName',
        'location'             => 'Location',
        'parameterType'        => 'ParameterType',
    ];

    public function validate()
    {
        Model::validateRequired('serviceParameterName', $this->serviceParameterName, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('parameterType', $this->parameterType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->parameterType) {
            $res['ParameterType'] = $this->parameterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ParameterType'])) {
            $model->parameterType = $map['ParameterType'];
        }

        return $model;
    }
}
