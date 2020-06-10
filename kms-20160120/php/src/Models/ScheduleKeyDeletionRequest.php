<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ScheduleKeyDeletionRequest extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description pendingWindowInDays
     *
     * @var int
     */
    public $pendingWindowInDays;
    protected $_name = [
        'keyId'               => 'KeyId',
        'pendingWindowInDays' => 'PendingWindowInDays',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->pendingWindowInDays) {
            $res['PendingWindowInDays'] = $this->pendingWindowInDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScheduleKeyDeletionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['PendingWindowInDays'])) {
            $model->pendingWindowInDays = $map['PendingWindowInDays'];
        }

        return $model;
    }
}
