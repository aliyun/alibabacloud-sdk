<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\DetectVideoShotResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description ShotFrameIds
     *
     * @var array
     */
    public $shotFrameIds;
    protected $_name = [
        'shotFrameIds' => 'ShotFrameIds',
    ];

    public function validate()
    {
        Model::validateRequired('shotFrameIds', $this->shotFrameIds, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['ShotFrameIds'] = [];
        if (null !== $this->shotFrameIds) {
            $res['ShotFrameIds'] = $this->shotFrameIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShotFrameIds'])) {
            if (!empty($map['ShotFrameIds'])) {
                $model->shotFrameIds = [];
                $model->shotFrameIds = $map['ShotFrameIds'];
            }
        }

        return $model;
    }
}
