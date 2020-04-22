<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class AbstractFilmVideoRequest extends Model
{
    /**
     * @description videoUrl
     *
     * @var string
     */
    public $videoUrl;

    /**
     * @description length
     *
     * @var int
     */
    public $length;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'length'   => 'Length',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrl', $this->videoUrl, true);
        Model::validateRequired('length', $this->length, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['VideoUrl'] = $this->videoUrl;
        $res['Length']   = $this->length;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AbstractFilmVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        return $model;
    }
}
