<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponse\resources\resource;

use AlibabaCloud\Tea\Model;

class templateIds extends Model
{
    /**
     * @description TemplateId
     *
     * @var array
     */
    public $templateId;
    protected $_name = [
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        Model::validateRequired('templateId', $this->templateId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = [];
            if (null !== $this->templateId) {
                $res['TemplateId'] = $this->templateId;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            if (!empty($map['TemplateId'])) {
                $model->templateId = [];
                $model->templateId = $map['TemplateId'];
            }
        }

        return $model;
    }
}
