<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule\eventPattern\eventPattern;

use AlibabaCloud\Tea\Model;

class nameList extends Model
{
    /**
     * @description NameList
     *
     * @var array
     */
    public $nameList;
    protected $_name = [
        'nameList' => 'NameList',
    ];

    public function validate()
    {
        Model::validateRequired('nameList', $this->nameList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameList) {
            $res['NameList'] = [];
            if (null !== $this->nameList) {
                $res['NameList'] = $this->nameList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameList'])) {
            if (!empty($map['NameList'])) {
                $model->nameList = [];
                $model->nameList = $map['NameList'];
            }
        }

        return $model;
    }
}
