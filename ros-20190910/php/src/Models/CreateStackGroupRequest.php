<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupRequest\parameters;
use AlibabaCloud\Tea\Model;

class CreateStackGroupRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var array
     */
    public $parameters;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $administrationRoleName;

    /**
     * @var string
     */
    public $executionRoleName;
    protected $_name = [
        'regionId'               => 'RegionId',
        'stackGroupName'         => 'StackGroupName',
        'description'            => 'Description',
        'parameters'             => 'Parameters',
        'templateBody'           => 'TemplateBody',
        'templateURL'            => 'TemplateURL',
        'clientToken'            => 'ClientToken',
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
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
        }
        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStackGroupRequest
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
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
