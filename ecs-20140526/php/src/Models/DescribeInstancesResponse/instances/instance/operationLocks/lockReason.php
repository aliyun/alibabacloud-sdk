<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\operationLocks;

use AlibabaCloud\Tea\Model;

class lockReason extends Model
{
    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $lockMsg;
    protected $_name = [
        'lockReason' => 'LockReason',
        'lockMsg'    => 'LockMsg',
    ];

    public function validate()
    {
        Model::validateRequired('lockReason', $this->lockReason, true);
        Model::validateRequired('lockMsg', $this->lockMsg, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->lockMsg) {
            $res['LockMsg'] = $this->lockMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lockReason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['LockMsg'])) {
            $model->lockMsg = $map['LockMsg'];
        }

        return $model;
    }
}
