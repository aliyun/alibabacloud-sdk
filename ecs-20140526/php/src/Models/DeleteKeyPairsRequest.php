<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DeleteKeyPairsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $keyPairNames;
    protected $_name = [
        'regionId'     => 'RegionId',
        'keyPairNames' => 'KeyPairNames',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('keyPairNames', $this->keyPairNames, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->keyPairNames) {
            $res['KeyPairNames'] = $this->keyPairNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteKeyPairsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['KeyPairNames'])) {
            $model->keyPairNames = $map['KeyPairNames'];
        }

        return $model;
    }
}
