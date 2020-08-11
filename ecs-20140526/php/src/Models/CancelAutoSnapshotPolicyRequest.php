<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CancelAutoSnapshotPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $diskIds;
    protected $_name = [
        'regionId' => 'regionId',
        'diskIds'  => 'diskIds',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('diskIds', $this->diskIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->diskIds) {
            $res['diskIds'] = $this->diskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['diskIds'])) {
            $model->diskIds = $map['diskIds'];
        }

        return $model;
    }
}
