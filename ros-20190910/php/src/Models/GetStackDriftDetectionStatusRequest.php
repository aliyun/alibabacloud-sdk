<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackDriftDetectionStatusRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $driftDetectionId;
    protected $_name = [
        'regionId'         => 'RegionId',
        'driftDetectionId' => 'DriftDetectionId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('driftDetectionId', $this->driftDetectionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->driftDetectionId) {
            $res['DriftDetectionId'] = $this->driftDetectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackDriftDetectionStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DriftDetectionId'])) {
            $model->driftDetectionId = $map['DriftDetectionId'];
        }

        return $model;
    }
}
