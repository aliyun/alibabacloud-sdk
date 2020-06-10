<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponse\stageItems;

use AlibabaCloud\Tea\Model;

class stageInfo extends Model
{
    /**
     * @description stageId
     *
     * @var string
     */
    public $stageId;

    /**
     * @description stageName
     *
     * @var string
     */
    public $stageName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'stageId'     => 'StageId',
        'stageName'   => 'StageName',
        'description' => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('stageId', $this->stageId, true);
        Model::validateRequired('stageName', $this->stageName, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
