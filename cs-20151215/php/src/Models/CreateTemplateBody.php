<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateBody extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description template
     *
     * @var string
     */
    public $template;

    /**
     * @description tags
     *
     * @var string
     */
    public $tags;

    /**
     * @description template_type
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'name'         => 'name',
        'template'     => 'template',
        'tags'         => 'tags',
        'templateType' => 'template_type',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('template', $this->template, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->templateType) {
            $res['template_type'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['template_type'])) {
            $model->templateType = $map['template_type'];
        }

        return $model;
    }
}
