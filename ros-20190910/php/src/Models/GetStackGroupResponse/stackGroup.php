<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponse;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponse\stackGroup\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponse\stackGroup\stackGroupDriftDetectionDetail;
use AlibabaCloud\Tea\Model;

class stackGroup extends Model
{
    /**
     * @description StackGroupName
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description StackGroupId
     *
     * @var string
     */
    public $stackGroupId;

    /**
     * @description Status
     *
     * @var string
     */
    public $status;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;

    /**
     * @description TemplateBody
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description ExecutionRoleName
     *
     * @var string
     */
    public $executionRoleName;

    /**
     * @description AdministrationRoleName
     *
     * @var string
     */
    public $administrationRoleName;

    /**
     * @description Parameters
     *
     * @var array
     */
    public $parameters;

    /**
     * @description StackGroupDriftDetectionDetail
     *
     * @var stackGroupDriftDetectionDetail
     */
    public $stackGroupDriftDetectionDetail;
    protected $_name = [
        'stackGroupName'                 => 'StackGroupName',
        'stackGroupId'                   => 'StackGroupId',
        'status'                         => 'Status',
        'description'                    => 'Description',
        'templateBody'                   => 'TemplateBody',
        'executionRoleName'              => 'ExecutionRoleName',
        'administrationRoleName'         => 'AdministrationRoleName',
        'parameters'                     => 'Parameters',
        'stackGroupDriftDetectionDetail' => 'StackGroupDriftDetectionDetail',
    ];

    public function validate()
    {
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
        Model::validateRequired('stackGroupId', $this->stackGroupId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('templateBody', $this->templateBody, true);
        Model::validateRequired('executionRoleName', $this->executionRoleName, true);
        Model::validateRequired('administrationRoleName', $this->administrationRoleName, true);
        Model::validateRequired('parameters', $this->parameters, true);
        Model::validateRequired('stackGroupDriftDetectionDetail', $this->stackGroupDriftDetectionDetail, true);
    }

    public function toMap()
    {
        $res                           = [];
        $res['StackGroupName']         = $this->stackGroupName;
        $res['StackGroupId']           = $this->stackGroupId;
        $res['Status']                 = $this->status;
        $res['Description']            = $this->description;
        $res['TemplateBody']           = $this->templateBody;
        $res['ExecutionRoleName']      = $this->executionRoleName;
        $res['AdministrationRoleName'] = $this->administrationRoleName;
        $res['Parameters']             = [];
        if (null !== $this->parameters && \is_array($this->parameters)) {
            $n = 0;
            foreach ($this->parameters as $item) {
                $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['StackGroupDriftDetectionDetail'] = null !== $this->stackGroupDriftDetectionDetail ? $this->stackGroupDriftDetectionDetail->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
        }
        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StackGroupDriftDetectionDetail'])) {
            $model->stackGroupDriftDetectionDetail = stackGroupDriftDetectionDetail::fromMap($map['StackGroupDriftDetectionDetail']);
        }

        return $model;
    }
}
