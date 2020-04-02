<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Videorecog;

use AlibabaCloud\Tea\Model;

class DetectVideoShotAdvanceRequest extends Model
{
    /**
     * @description VideoUrlObject
     *
     * @var Stream
     */
    public $videoUrlObject;
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrlObject', $this->videoUrlObject, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['VideoUrlObject'] = $this->videoUrlObject;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVideoShotAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrlObject'])) {
            $model->videoUrlObject = $map['VideoUrlObject'];
        }

        return $model;
    }
}
