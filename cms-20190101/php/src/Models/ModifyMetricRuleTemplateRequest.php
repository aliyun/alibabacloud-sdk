<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates;
use AlibabaCloud\Tea\Model;

class ModifyMetricRuleTemplateRequest extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $templateId;

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
     * @description alertTemplatesJson
     *
     * @var array
     */
    public $alertTemplates;
    protected $_name = [
        'templateId'     => 'TemplateId',
        'name'           => 'Name',
        'description'    => 'Description',
        'restVersion'    => 'RestVersion',
        'alertTemplates' => 'AlertTemplates',
    ];

    public function validate()
    {
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('restVersion', $this->restVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->restVersion) {
            $res['RestVersion'] = $this->restVersion;
        }
        if (null !== $this->alertTemplates) {
            $res['AlertTemplates'] = [];
            if (null !== $this->alertTemplates && \is_array($this->alertTemplates)) {
                $n = 0;
                foreach ($this->alertTemplates as $item) {
                    $res['AlertTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMetricRuleTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RestVersion'])) {
            $model->restVersion = $map['RestVersion'];
        }
        if (isset($map['AlertTemplates'])) {
            if (!empty($map['AlertTemplates'])) {
                $model->alertTemplates = [];
                $n                     = 0;
                foreach ($map['AlertTemplates'] as $item) {
                    $model->alertTemplates[$n++] = null !== $item ? alertTemplates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
