<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UpdateStackTemplateByResourcesRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description DryRun
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ClientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description TemplateFormat
     *
     * @var string
     */
    public $templateFormat;

    /**
     * @description LogicalResourceId
     *
     * @var array
     */
    public $logicalResourceId;
    protected $_name = [
        'stackId'           => 'StackId',
        'dryRun'            => 'DryRun',
        'regionId'          => 'RegionId',
        'clientToken'       => 'ClientToken',
        'templateFormat'    => 'TemplateFormat',
        'logicalResourceId' => 'LogicalResourceId',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['StackId']           = $this->stackId;
        $res['DryRun']            = $this->dryRun;
        $res['RegionId']          = $this->regionId;
        $res['ClientToken']       = $this->clientToken;
        $res['TemplateFormat']    = $this->templateFormat;
        $res['LogicalResourceId'] = [];
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStackTemplateByResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['TemplateFormat'])) {
            $model->templateFormat = $map['TemplateFormat'];
        }
        if (isset($map['LogicalResourceId'])) {
            if (!empty($map['LogicalResourceId'])) {
                $model->logicalResourceId = [];
                $model->logicalResourceId = $map['LogicalResourceId'];
            }
        }

        return $model;
    }
}
