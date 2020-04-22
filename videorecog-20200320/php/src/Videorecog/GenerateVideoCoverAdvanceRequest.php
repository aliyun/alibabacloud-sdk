<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Videorecog;

use AlibabaCloud\Tea\Model;

class GenerateVideoCoverAdvanceRequest extends Model
{
    /**
     * @description VideoUrlObject
     *
     * @var Stream
     */
    public $videoUrlObject;

    /**
     * @description isGif
     *
     * @var bool
     */
    public $isGif;
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'isGif'          => 'IsGif',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrlObject', $this->videoUrlObject, true);
        Model::validateRequired('isGif', $this->isGif, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['VideoUrlObject'] = $this->videoUrlObject;
        $res['IsGif']          = $this->isGif;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVideoCoverAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrlObject'])) {
            $model->videoUrlObject = $map['VideoUrlObject'];
        }
        if (isset($map['IsGif'])) {
            $model->isGif = $map['IsGif'];
        }

        return $model;
    }
}
