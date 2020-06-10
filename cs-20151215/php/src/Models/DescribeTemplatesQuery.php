<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeTemplatesQuery extends Model
{
    /**
     * @description template_type
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'templateType' => 'template_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateType) {
            $res['template_type'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTemplatesQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['template_type'])) {
            $model->templateType = $map['template_type'];
        }

        return $model;
    }
}
