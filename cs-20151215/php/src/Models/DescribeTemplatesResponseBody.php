<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeTemplatesResponseBody extends Model
{
    /**
     * @description template
     *
     * @var string
     */
    public $template;

    /**
     * @description acl
     *
     * @var string
     */
    public $acl;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

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

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'template'     => 'template',
        'acl'          => 'acl',
        'name'         => 'name',
        'tags'         => 'tags',
        'templateType' => 'template_type',
        'description'  => 'description',
    ];

    public function validate()
    {
        Model::validateRequired('template', $this->template, true);
        Model::validateRequired('acl', $this->acl, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('templateType', $this->templateType, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['template']      = $this->template;
        $res['acl']           = $this->acl;
        $res['name']          = $this->name;
        $res['tags']          = $this->tags;
        $res['template_type'] = $this->templateType;
        $res['description']   = $this->description;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['acl'])) {
            $model->acl = $map['acl'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['template_type'])) {
            $model->templateType = $map['template_type'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
