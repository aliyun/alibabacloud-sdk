<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponse\autoProvisioningGroupHistories\autoProvisioningGroupHistory;
use AlibabaCloud\Tea\Model;

class autoProvisioningGroupHistories extends Model
{
    /**
     * @description AutoProvisioningGroupHistory
     *
     * @var array
     */
    public $autoProvisioningGroupHistory;
    protected $_name = [
        'autoProvisioningGroupHistory' => 'AutoProvisioningGroupHistory',
    ];

    public function validate()
    {
        Model::validateRequired('autoProvisioningGroupHistory', $this->autoProvisioningGroupHistory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupHistory) {
            $res['AutoProvisioningGroupHistory'] = [];
            if (null !== $this->autoProvisioningGroupHistory && \is_array($this->autoProvisioningGroupHistory)) {
                $n = 0;
                foreach ($this->autoProvisioningGroupHistory as $item) {
                    $res['AutoProvisioningGroupHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoProvisioningGroupHistories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoProvisioningGroupHistory'])) {
            if (!empty($map['AutoProvisioningGroupHistory'])) {
                $model->autoProvisioningGroupHistory = [];
                $n                                   = 0;
                foreach ($map['AutoProvisioningGroupHistory'] as $item) {
                    $model->autoProvisioningGroupHistory[$n++] = null !== $item ? autoProvisioningGroupHistory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
