<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class ContinueCreateStackRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description RecreatingResources
     *
     * @var array
     */
    public $recreatingResources;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description RoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description Mode
     *
     * @var string
     */
    public $mode;

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
     * @description Parameters
     *
     * @var array
     */
    public $parameters;

    /**
     * @description DryRun
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'stackId'             => 'StackId',
        'recreatingResources' => 'RecreatingResources',
        'regionId'            => 'RegionId',
        'ramRoleName'         => 'RamRoleName',
        'mode'                => 'Mode',
        'templateBody'        => 'TemplateBody',
        'templateURL'         => 'TemplateURL',
        'parameters'          => 'Parameters',
        'dryRun'              => 'DryRun',
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
        if (null !== $this->recreatingResources) {
            $res['RecreatingResources'] = [];
            if (null !== $this->recreatingResources) {
                $res['RecreatingResources'] = $this->recreatingResources;
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContinueCreateStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['RecreatingResources'])) {
            if (!empty($map['RecreatingResources'])) {
                $model->recreatingResources = [];
                $model->recreatingResources = $map['RecreatingResources'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        return $model;
    }
}
