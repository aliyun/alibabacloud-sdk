<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponse\items;

use AlibabaCloud\Tea\Model;

class parameterChangeLog extends Model
{
    /**
     * @description changeTime
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description oldParameterValue
     *
     * @var string
     */
    public $oldParameterValue;

    /**
     * @description newParameterValue
     *
     * @var string
     */
    public $newParameterValue;

    /**
     * @description parameterName
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description isApplied
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'modifyTime'        => 'ModifyTime',
        'oldParameterValue' => 'OldParameterValue',
        'newParameterValue' => 'NewParameterValue',
        'parameterName'     => 'ParameterName',
        'status'            => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('oldParameterValue', $this->oldParameterValue, true);
        Model::validateRequired('newParameterValue', $this->newParameterValue, true);
        Model::validateRequired('parameterName', $this->parameterName, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->oldParameterValue) {
            $res['OldParameterValue'] = $this->oldParameterValue;
        }
        if (null !== $this->newParameterValue) {
            $res['NewParameterValue'] = $this->newParameterValue;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterChangeLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['OldParameterValue'])) {
            $model->oldParameterValue = $map['OldParameterValue'];
        }
        if (isset($map['NewParameterValue'])) {
            $model->newParameterValue = $map['NewParameterValue'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
