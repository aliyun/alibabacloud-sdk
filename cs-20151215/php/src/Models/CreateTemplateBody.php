<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateBody extends Model {
    protected $_name = [
        'name' => 'name',
        'template' => 'template',
        'tags' => 'tags',
        'templateType' => 'template_type',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('template', $this->template, true);
    }
    public function toMap() {
        $res = [];
        $res['name'] = $this->name;
        $res['template'] = $this->template;
        $res['tags'] = $this->tags;
        $res['template_type'] = $this->templateType;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateTemplateBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['template'])){
            $model->template = $map['template'];
        }
        if(isset($map['tags'])){
            $model->tags = $map['tags'];
        }
        if(isset($map['template_type'])){
            $model->templateType = $map['template_type'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description template
     * @var string
     */
    public $template;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description template_type
     * @var string
     */
    public $templateType;

}
