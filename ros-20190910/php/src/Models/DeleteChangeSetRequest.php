<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DeleteChangeSetRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $changeSetId;
    protected $_name = [
        'regionId'    => 'RegionId',
        'changeSetId' => 'ChangeSetId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('changeSetId', $this->changeSetId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteChangeSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }

        return $model;
    }
}
