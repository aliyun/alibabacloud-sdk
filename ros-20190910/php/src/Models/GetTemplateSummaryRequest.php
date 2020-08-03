<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $changeSetId;
    protected $_name = [
        'stackId'      => 'StackId',
        'templateBody' => 'TemplateBody',
        'regionId'     => 'RegionId',
        'templateId'   => 'TemplateId',
        'templateURL'  => 'TemplateURL',
        'changeSetId'  => 'ChangeSetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }

        return $model;
    }
}
