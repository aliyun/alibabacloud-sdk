<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse\data\detailList\detailList;
use AlibabaCloud\Tea\Model;

class detailList extends Model
{
    /**
     * @description DetailList
     *
     * @var array
     */
    public $detailList;
    protected $_name = [
        'detailList' => 'DetailList',
    ];

    public function validate()
    {
        Model::validateRequired('detailList', $this->detailList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailList) {
            $res['DetailList'] = [];
            if (null !== $this->detailList && \is_array($this->detailList)) {
                $n = 0;
                foreach ($this->detailList as $item) {
                    $res['DetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailList'])) {
            if (!empty($map['DetailList'])) {
                $model->detailList = [];
                $n                 = 0;
                foreach ($map['DetailList'] as $item) {
                    $model->detailList[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
