<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventRuleListRequest extends Model
{
    /**
     * @description namePrefix
     *
     * @var string
     */
    public $namePrefix;

    /**
     * @description page
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;
    protected $_name = [
        'namePrefix' => 'NamePrefix',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'groupId'    => 'GroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namePrefix) {
            $res['NamePrefix'] = $this->namePrefix;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventRuleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamePrefix'])) {
            $model->namePrefix = $map['NamePrefix'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
