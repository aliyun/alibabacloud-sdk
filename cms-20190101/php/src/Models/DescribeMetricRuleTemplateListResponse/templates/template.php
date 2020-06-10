<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponse\templates;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponse\templates\template\applyHistories;
use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description version
     *
     * @var int
     */
    public $restVersion;

    /**
     * @description id
     *
     * @var int
     */
    public $templateId;

    /**
     * @description gmtCreate
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description gmtModified
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description applyHistories
     *
     * @var applyHistories
     */
    public $applyHistories;
    protected $_name = [
        'name'           => 'Name',
        'description'    => 'Description',
        'restVersion'    => 'RestVersion',
        'templateId'     => 'TemplateId',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'applyHistories' => 'ApplyHistories',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('restVersion', $this->restVersion, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('applyHistories', $this->applyHistories, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->restVersion) {
            $res['RestVersion'] = $this->restVersion;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->applyHistories) {
            $res['ApplyHistories'] = null !== $this->applyHistories ? $this->applyHistories->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RestVersion'])) {
            $model->restVersion = $map['RestVersion'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ApplyHistories'])) {
            $model->applyHistories = applyHistories::fromMap($map['ApplyHistories']);
        }

        return $model;
    }
}
