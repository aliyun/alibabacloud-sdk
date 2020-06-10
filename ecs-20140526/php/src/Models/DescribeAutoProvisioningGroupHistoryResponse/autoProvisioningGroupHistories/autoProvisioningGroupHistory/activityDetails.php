<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponse\autoProvisioningGroupHistories\autoProvisioningGroupHistory;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponse\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail;
use AlibabaCloud\Tea\Model;

class activityDetails extends Model
{
    /**
     * @description ActivityDetail
     *
     * @var array
     */
    public $activityDetail;
    protected $_name = [
        'activityDetail' => 'ActivityDetail',
    ];

    public function validate()
    {
        Model::validateRequired('activityDetail', $this->activityDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityDetail) {
            $res['ActivityDetail'] = [];
            if (null !== $this->activityDetail && \is_array($this->activityDetail)) {
                $n = 0;
                foreach ($this->activityDetail as $item) {
                    $res['ActivityDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityDetail'])) {
            if (!empty($map['ActivityDetail'])) {
                $model->activityDetail = [];
                $n                     = 0;
                foreach ($map['ActivityDetail'] as $item) {
                    $model->activityDetail[$n++] = null !== $item ? activityDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
