<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateURL;

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
    public $templateName;
    protected $_name = [
        'templateURL'  => 'TemplateURL',
        'description'  => 'Description',
        'templateBody' => 'TemplateBody',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        Model::validateRequired('templateName', $this->templateName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
