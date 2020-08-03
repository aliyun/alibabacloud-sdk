<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class UpdateStackRequest extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $stackPolicyDuringUpdateBody;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var array
     */
    public $parameters;

    /**
     * @var string
     */
    public $stackPolicyURL;

    /**
     * @var string
     */
    public $stackPolicyDuringUpdateURL;

    /**
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @var bool
     */
    public $usePreviousParameters;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $replacementOption;
    protected $_name = [
        'stackId'                     => 'StackId',
        'clientToken'                 => 'ClientToken',
        'stackPolicyDuringUpdateBody' => 'StackPolicyDuringUpdateBody',
        'timeoutInMinutes'            => 'TimeoutInMinutes',
        'templateBody'                => 'TemplateBody',
        'parameters'                  => 'Parameters',
        'stackPolicyURL'              => 'StackPolicyURL',
        'stackPolicyDuringUpdateURL'  => 'StackPolicyDuringUpdateURL',
        'stackPolicyBody'             => 'StackPolicyBody',
        'usePreviousParameters'       => 'UsePreviousParameters',
        'regionId'                    => 'RegionId',
        'disableRollback'             => 'DisableRollback',
        'templateURL'                 => 'TemplateURL',
        'ramRoleName'                 => 'RamRoleName',
        'replacementOption'           => 'ReplacementOption',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->stackPolicyDuringUpdateBody) {
            $res['StackPolicyDuringUpdateBody'] = $this->stackPolicyDuringUpdateBody;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
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
        if (null !== $this->stackPolicyURL) {
            $res['StackPolicyURL'] = $this->stackPolicyURL;
        }
        if (null !== $this->stackPolicyDuringUpdateURL) {
            $res['StackPolicyDuringUpdateURL'] = $this->stackPolicyDuringUpdateURL;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->usePreviousParameters) {
            $res['UsePreviousParameters'] = $this->usePreviousParameters;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->replacementOption) {
            $res['ReplacementOption'] = $this->replacementOption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['StackPolicyDuringUpdateBody'])) {
            $model->stackPolicyDuringUpdateBody = $map['StackPolicyDuringUpdateBody'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
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
        if (isset($map['StackPolicyURL'])) {
            $model->stackPolicyURL = $map['StackPolicyURL'];
        }
        if (isset($map['StackPolicyDuringUpdateURL'])) {
            $model->stackPolicyDuringUpdateURL = $map['StackPolicyDuringUpdateURL'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['UsePreviousParameters'])) {
            $model->usePreviousParameters = $map['UsePreviousParameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['ReplacementOption'])) {
            $model->replacementOption = $map['ReplacementOption'];
        }

        return $model;
    }
}
