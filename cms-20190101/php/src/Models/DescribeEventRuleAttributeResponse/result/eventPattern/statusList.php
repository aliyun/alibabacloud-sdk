<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponse\result\eventPattern;

use AlibabaCloud\Tea\Model;

class statusList extends Model
{
    /**
     * @description StatusList
     *
     * @var array
     */
    public $statusList;
    protected $_name = [
        'statusList' => 'StatusList',
    ];

    public function validate()
    {
        Model::validateRequired('statusList', $this->statusList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statusList) {
            $res['StatusList'] = [];
            if (null !== $this->statusList) {
                $res['StatusList'] = $this->statusList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}
