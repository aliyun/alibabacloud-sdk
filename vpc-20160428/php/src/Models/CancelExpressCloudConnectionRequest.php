<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CancelExpressCloudConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $eccId;
    protected $_name = [
        'regionId' => 'RegionId',
        'eccId'    => 'EccId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('eccId', $this->eccId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelExpressCloudConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }

        return $model;
    }
}
