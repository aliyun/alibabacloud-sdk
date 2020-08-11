<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponse\routerTableList\routerTableListType;
use AlibabaCloud\Tea\Model;

class routerTableList extends Model
{
    /**
     * @var array
     */
    public $routerTableListType;
    protected $_name = [
        'routerTableListType' => 'RouterTableListType',
    ];

    public function validate()
    {
        Model::validateRequired('routerTableListType', $this->routerTableListType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routerTableListType) {
            $res['RouterTableListType'] = [];
            if (null !== $this->routerTableListType && \is_array($this->routerTableListType)) {
                $n = 0;
                foreach ($this->routerTableListType as $item) {
                    $res['RouterTableListType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routerTableList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouterTableListType'])) {
            if (!empty($map['RouterTableListType'])) {
                $model->routerTableListType = [];
                $n                          = 0;
                foreach ($map['RouterTableListType'] as $item) {
                    $model->routerTableListType[$n++] = null !== $item ? routerTableListType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
