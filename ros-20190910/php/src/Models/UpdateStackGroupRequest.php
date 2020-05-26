<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest\parameters;
use AlibabaCloud\Tea\Model;

class UpdateStackGroupRequest extends Model
{
    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description StackGroupName
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;

    /**
     * @description Parameters
     *
     * @var array
     */
    public $parameters;

    /**
     * @description AccountIds
     *
     * @var array
     */
    public $accountIds;

    /**
     * @description RegionIds
     *
     * @var array
     */
    public $regionIds;

    /**
     * @description TemplateBody
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description TemplateURL
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description ClientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description OperationDescription
     *
     * @var string
     */
    public $operationDescription;

    /**
     * @description OperationPreferences
     *
     * @var array
     */
    public $operationPreferences;

    /**
     * @description AdministrationRoleName
     *
     * @var string
     */
    public $administrationRoleName;

    /**
     * @description ExecutionRoleName
     *
     * @var string
     */
    public $executionRoleName;
    protected $_name = [
        'regionId'               => 'RegionId',
        'stackGroupName'         => 'StackGroupName',
        'description'            => 'Description',
        'parameters'             => 'Parameters',
        'accountIds'             => 'AccountIds',
        'regionIds'              => 'RegionIds',
        'templateBody'           => 'TemplateBody',
        'templateURL'            => 'TemplateURL',
        'clientToken'            => 'ClientToken',
        'operationDescription'   => 'OperationDescription',
        'operationPreferences'   => 'OperationPreferences',
        'administrationRoleName' => 'AdministrationRoleName',
        'executionRoleName'      => 'ExecutionRoleName',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['RegionId']       = $this->regionId;
        $res['StackGroupName'] = $this->stackGroupName;
        $res['Description']    = $this->description;
        $res['Parameters']     = [];
        if (null !== $this->parameters && \is_array($this->parameters)) {
            $n = 0;
            foreach ($this->parameters as $item) {
                $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['AccountIds']             = $this->accountIds;
        $res['RegionIds']              = $this->regionIds;
        $res['TemplateBody']           = $this->templateBody;
        $res['TemplateURL']            = $this->templateURL;
        $res['ClientToken']            = $this->clientToken;
        $res['OperationDescription']   = $this->operationDescription;
        $res['OperationPreferences']   = $this->operationPreferences;
        $res['AdministrationRoleName'] = $this->administrationRoleName;
        $res['ExecutionRoleName']      = $this->executionRoleName;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStackGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['AccountIds'])) {
            $model->accountIds = $map['AccountIds'];
        }
        if (isset($map['RegionIds'])) {
            $model->regionIds = $map['RegionIds'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferences = $map['OperationPreferences'];
        }
        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
        }
        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
        }

        return $model;
    }
}
