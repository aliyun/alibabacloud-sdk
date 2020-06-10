<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule\eventPattern\eventPattern;

use AlibabaCloud\Tea\Model;

class levelList extends Model
{
    /**
     * @description LevelList
     *
     * @var array
     */
    public $levelList;
    protected $_name = [
        'levelList' => 'LevelList',
    ];

    public function validate()
    {
        Model::validateRequired('levelList', $this->levelList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->levelList) {
            $res['LevelList'] = [];
            if (null !== $this->levelList) {
                $res['LevelList'] = $this->levelList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return levelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LevelList'])) {
            if (!empty($map['LevelList'])) {
                $model->levelList = [];
                $model->levelList = $map['LevelList'];
            }
        }

        return $model;
    }
}
