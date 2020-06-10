<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponse\tagGroupList\tagGroup;

use AlibabaCloud\Tea\Model;

class templateIdList extends Model
{
    /**
     * @description TemplateIdList
     *
     * @var array
     */
    public $templateIdList;
    protected $_name = [
        'templateIdList' => 'TemplateIdList',
    ];

    public function validate()
    {
        Model::validateRequired('templateIdList', $this->templateIdList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateIdList) {
            $res['TemplateIdList'] = [];
            if (null !== $this->templateIdList) {
                $res['TemplateIdList'] = $this->templateIdList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateIdList'])) {
            if (!empty($map['TemplateIdList'])) {
                $model->templateIdList = [];
                $model->templateIdList = $map['TemplateIdList'];
            }
        }

        return $model;
    }
}
