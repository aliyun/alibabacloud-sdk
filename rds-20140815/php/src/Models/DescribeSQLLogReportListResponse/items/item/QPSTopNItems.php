<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponse\items\item;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponse\items\item\QPSTopNItems\QPSTopNItem;
use AlibabaCloud\Tea\Model;

class QPSTopNItems extends Model
{
    /**
     * @description QPSTopNItem
     *
     * @var array
     */
    public $QPSTopNItem;
    protected $_name = [
        'QPSTopNItem' => 'QPSTopNItem',
    ];

    public function validate()
    {
        Model::validateRequired('QPSTopNItem', $this->QPSTopNItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->QPSTopNItem) {
            $res['QPSTopNItem'] = [];
            if (null !== $this->QPSTopNItem && \is_array($this->QPSTopNItem)) {
                $n = 0;
                foreach ($this->QPSTopNItem as $item) {
                    $res['QPSTopNItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QPSTopNItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QPSTopNItem'])) {
            if (!empty($map['QPSTopNItem'])) {
                $model->QPSTopNItem = [];
                $n                  = 0;
                foreach ($map['QPSTopNItem'] as $item) {
                    $model->QPSTopNItem[$n++] = null !== $item ? QPSTopNItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
