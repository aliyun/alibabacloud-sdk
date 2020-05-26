<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class UpdateStackRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description ClientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description StackPolicyDuringUpdateBody
     *
     * @var string
     */
    public $stackPolicyDuringUpdateBody;

    /**
     * @description TimeoutInMinutes
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description TemplateBody
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description Parameters
     *
     * @var array
     */
    public $parameters;

    /**
     * @description StackPolicyURL
     *
     * @var string
     */
    public $stackPolicyURL;

    /**
     * @description StackPolicyDuringUpdateURL
     *
     * @var string
     */
    public $stackPolicyDuringUpdateURL;

    /**
     * @description StackPolicyBody
     *
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @description UsePreviousParameters
     *
     * @var bool
     */
    public $usePreviousParameters;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description DisableRollback
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description TemplateURL
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description RoleName
     *
     * @var string
     */
    public $ramRoleName;
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
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res                                = [];
        $res['StackId']                     = $this->stackId;
        $res['ClientToken']                 = $this->clientToken;
        $res['StackPolicyDuringUpdateBody'] = $this->stackPolicyDuringUpdateBody;
        $res['TimeoutInMinutes']            = $this->timeoutInMinutes;
        $res['TemplateBody']                = $this->templateBody;
        $res['Parameters']                  = [];
        if (null !== $this->parameters && \is_array($this->parameters)) {
            $n = 0;
            foreach ($this->parameters as $item) {
                $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['StackPolicyURL']             = $this->stackPolicyURL;
        $res['StackPolicyDuringUpdateURL'] = $this->stackPolicyDuringUpdateURL;
        $res['StackPolicyBody']            = $this->stackPolicyBody;
        $res['UsePreviousParameters']      = $this->usePreviousParameters;
        $res['RegionId']                   = $this->regionId;
        $res['DisableRollback']            = $this->disableRollback;
        $res['TemplateURL']                = $this->templateURL;
        $res['RamRoleName']                = $this->ramRoleName;

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

        return $model;
    }
}
