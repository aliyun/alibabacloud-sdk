<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SuperResolveVideoAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoUrlObject;

    /**
     * @var int
     */
    public $bitRate;
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'bitRate'        => 'BitRate',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrlObject', $this->videoUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrlObject) {
            $res['VideoUrlObject'] = $this->videoUrlObject;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SuperResolveVideoAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrlObject'])) {
            $model->videoUrlObject = $map['VideoUrlObject'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }

        return $model;
    }
}
