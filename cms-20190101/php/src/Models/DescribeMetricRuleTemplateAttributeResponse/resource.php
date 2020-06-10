<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponse\resource\alertTemplates;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description id
     *
     * @var string
     */
    public $templateId;

    /**
     * @description version
     *
     * @var string
     */
    public $restVersion;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description alertTemplates
     *
     * @var alertTemplates
     */
    public $alertTemplates;
    protected $_name = [
        'name'           => 'Name',
        'templateId'     => 'TemplateId',
        'restVersion'    => 'RestVersion',
        'description'    => 'Description',
        'alertTemplates' => 'AlertTemplates',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('restVersion', $this->restVersion, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('alertTemplates', $this->alertTemplates, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->restVersion) {
            $res['RestVersion'] = $this->restVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->alertTemplates) {
            $res['AlertTemplates'] = null !== $this->alertTemplates ? $this->alertTemplates->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['RestVersion'])) {
            $model->restVersion = $map['RestVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AlertTemplates'])) {
            $model->alertTemplates = alertTemplates::fromMap($map['AlertTemplates']);
        }

        return $model;
    }
}
