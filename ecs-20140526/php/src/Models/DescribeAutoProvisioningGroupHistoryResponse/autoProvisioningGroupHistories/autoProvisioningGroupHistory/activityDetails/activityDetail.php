<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponse\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails;

use AlibabaCloud\Tea\Model;

class activityDetail extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'detail' => 'Detail',
        'status' => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('detail', $this->detail, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
