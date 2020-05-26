<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class PreviewStackRequest extends Model
{
    /**
     * @description DisableRollback
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description TimeoutInMinutes
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description Parameters
     *
     * @var array
     */
    public $parameters;

    /**
     * @description TemplateBody
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description StackPolicyURL
     *
     * @var string
     */
    public $stackPolicyURL;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description StackPolicyBody
     *
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @description StackName
     *
     * @var string
     */
    public $stackName;

    /**
     * @description ClientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description TemplateURL
     *
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
        $res                     = [];
        $res['DisableRollback']  = $this->disableRollback;
        $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        $res['Parameters']       = [];
        if (null !== $this->parameters && \is_array($this->parameters)) {
            $n = 0;
            foreach ($this->parameters as $item) {
                $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['TemplateBody']    = $this->templateBody;
        $res['StackPolicyURL']  = $this->stackPolicyURL;
        $res['RegionId']        = $this->regionId;
        $res['StackPolicyBody'] = $this->stackPolicyBody;
        $res['StackName']       = $this->stackName;
        $res['ClientToken']     = $this->clientToken;
        $res['TemplateURL']     = $this->templateURL;

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
