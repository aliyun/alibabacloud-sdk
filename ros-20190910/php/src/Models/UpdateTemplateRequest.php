<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'templateURL'  => 'TemplateURL',
        'templateName' => 'TemplateName',
        'description'  => 'Description',
        'templateBody' => 'TemplateBody',
        'templateId'   => 'TemplateId',
    ];

    public function validate()
    {
        Model::validateRequired('templateId', $this->templateId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
