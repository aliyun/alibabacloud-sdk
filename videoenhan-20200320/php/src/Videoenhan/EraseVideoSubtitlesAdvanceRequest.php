<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class EraseVideoSubtitlesAdvanceRequest extends Model
{
    /**
     * @description VideoUrlObject
     *
     * @var Stream
     */
    public $videoUrlObject;
    /**
     * @description bx
     *
     * @var float
     */
    public $BX;
    /**
     * @description by
     *
     * @var float
     */
    public $BY;
    /**
     * @description bw
     *
     * @var float
     */
    public $BW;
    /**
     * @description bh
     *
     * @var float
     */
    public $BH;
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'BX'             => 'BX',
        'BY'             => 'BY',
        'BW'             => 'BW',
        'BH'             => 'BH',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrlObject', $this->videoUrlObject, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['VideoUrlObject'] = $this->videoUrlObject;
        $res['BX']             = $this->BX;
        $res['BY']             = $this->BY;
        $res['BW']             = $this->BW;
        $res['BH']             = $this->BH;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EraseVideoSubtitlesAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrlObject'])) {
            $model->videoUrlObject = $map['VideoUrlObject'];
        }
        if (isset($map['BX'])) {
            $model->BX = $map['BX'];
        }
        if (isset($map['BY'])) {
            $model->BY = $map['BY'];
        }
        if (isset($map['BW'])) {
            $model->BW = $map['BW'];
        }
        if (isset($map['BH'])) {
            $model->BH = $map['BH'];
        }

        return $model;
    }
}
