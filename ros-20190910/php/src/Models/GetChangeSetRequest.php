<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetChangeSetRequest extends Model
{
    /**
     * @var bool
     */
    public $showTemplate;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $changeSetId;
    protected $_name = [
        'showTemplate' => 'ShowTemplate',
        'regionId'     => 'RegionId',
        'changeSetId'  => 'ChangeSetId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('changeSetId', $this->changeSetId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->showTemplate) {
            $res['ShowTemplate'] = $this->showTemplate;
        }
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
     * @return GetChangeSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShowTemplate'])) {
            $model->showTemplate = $map['ShowTemplate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }

        return $model;
    }
}
