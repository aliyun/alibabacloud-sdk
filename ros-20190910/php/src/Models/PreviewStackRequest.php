<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class PreviewStackRequest extends Model
{
    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var int
     */
    public $timeoutInMinutes;

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
    public $stackPolicyURL;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $templateURL;
    protected $_name = [
        'disableRollback'  => 'DisableRollback',
        'timeoutInMinutes' => 'TimeoutInMinutes',
        'parameters'       => 'Parameters',
        'templateBody'     => 'TemplateBody',
        'stackPolicyURL'   => 'StackPolicyURL',
        'regionId'         => 'RegionId',
        'stackPolicyBody'  => 'StackPolicyBody',
        'stackName'        => 'StackName',
        'clientToken'      => 'ClientToken',
        'templateURL'      => 'TemplateURL',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackName', $this->stackName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
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
        if (null !== $this->stackPolicyURL) {
            $res['StackPolicyURL'] = $this->stackPolicyURL;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreviewStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
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
        if (isset($map['StackPolicyURL'])) {
            $model->stackPolicyURL = $map['StackPolicyURL'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }

        return $model;
    }
}
