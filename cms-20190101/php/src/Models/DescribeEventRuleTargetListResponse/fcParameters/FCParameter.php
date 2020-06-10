<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\fcParameters;

use AlibabaCloud\Tea\Model;

class FCParameter extends Model
{
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

    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description arn
     *
     * @var string
     */
    public $arn;
    protected $_name = [
        'region'       => 'Region',
        'serviceName'  => 'ServiceName',
        'functionName' => 'FunctionName',
        'id'           => 'Id',
        'arn'          => 'Arn',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('serviceName', $this->serviceName, true);
        Model::validateRequired('functionName', $this->functionName, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('arn', $this->arn, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FCParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        return $model;
    }
}
