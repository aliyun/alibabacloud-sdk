<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateRequest extends Model
{
    /**
     * @description TemplateURL
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description TemplateName
     *
     * @var string
     */
    public $templateName;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;

    /**
     * @description TemplateBody
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description TemplateId
     *
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
        $res                 = [];
        $res['TemplateURL']  = $this->templateURL;
        $res['TemplateName'] = $this->templateName;
        $res['Description']  = $this->description;
        $res['TemplateBody'] = $this->templateBody;
        $res['TemplateId']   = $this->templateId;

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
