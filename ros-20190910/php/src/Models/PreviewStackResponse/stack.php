<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponse;

use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponse\stack\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponse\stack\resources;
use AlibabaCloud\Tea\Model;

class stack extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var array
     */
    public $stackPolicyBody;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var array
     */
    public $parameters;

    /**
     * @var array
     */
    public $resources;
    protected $_name = [
        'description'         => 'Description',
        'disableRollback'     => 'DisableRollback',
        'regionId'            => 'RegionId',
        'stackName'           => 'StackName',
        'stackPolicyBody'     => 'StackPolicyBody',
        'templateDescription' => 'TemplateDescription',
        'timeoutInMinutes'    => 'TimeoutInMinutes',
        'parameters'          => 'Parameters',
        'resources'           => 'Resources',
    ];

    public function validate()
    {
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('disableRollback', $this->disableRollback, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackName', $this->stackName, true);
        Model::validateRequired('stackPolicyBody', $this->stackPolicyBody, true);
        Model::validateRequired('templateDescription', $this->templateDescription, true);
        Model::validateRequired('timeoutInMinutes', $this->timeoutInMinutes, true);
        Model::validateRequired('parameters', $this->parameters, true);
        Model::validateRequired('resources', $this->resources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
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
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
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
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
