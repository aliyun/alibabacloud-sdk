<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList\nodeTaskConfig\alertConfig;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList\nodeTaskConfig\alertConfig\escalationList\escalationList;
use AlibabaCloud\Tea\Model;

class escalationList extends Model
{
    /**
     * @description escalationList
     *
     * @var array
     */
    public $escalationList;
    protected $_name = [
        'escalationList' => 'escalationList',
    ];

    public function validate()
    {
        Model::validateRequired('escalationList', $this->escalationList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationList) {
            $res['escalationList'] = [];
            if (null !== $this->escalationList && \is_array($this->escalationList)) {
                $n = 0;
                foreach ($this->escalationList as $item) {
                    $res['escalationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalationList'])) {
            if (!empty($map['escalationList'])) {
                $model->escalationList = [];
                $n                     = 0;
                foreach ($map['escalationList'] as $item) {
                    $model->escalationList[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
