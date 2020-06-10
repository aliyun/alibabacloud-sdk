<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponse\failedFcParameters;

use AlibabaCloud\Tea\Model;

class fcParameter extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description serviceName
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description functionName
     *
     * @var string
     */
    public $functionName;
    protected $_name = [
        'id'           => 'Id',
        'region'       => 'Region',
        'serviceName'  => 'ServiceName',
        'functionName' => 'FunctionName',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('serviceName', $this->serviceName, true);
        Model::validateRequired('functionName', $this->functionName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fcParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
