<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetChangeSetRequest extends Model
{
    /**
     * @description ShowTemplate
     *
     * @var bool
     */
    public $showTemplate;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ChangeSetId
     *
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
        $res                 = [];
        $res['ShowTemplate'] = $this->showTemplate;
        $res['RegionId']     = $this->regionId;
        $res['ChangeSetId']  = $this->changeSetId;

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
