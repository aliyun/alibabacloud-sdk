<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoRequest\fileList;
use AlibabaCloud\Tea\Model;

class GenerateVideoRequest extends Model
{
    /**
     * @description fileList
     *
     * @var array
     */
    public $fileList;

    /**
     * @description scene
     *
     * @var string
     */
    public $scene;

    /**
     * @description width
     *
     * @var int
     */
    public $width;

    /**
     * @description height
     *
     * @var int
     */
    public $height;

    /**
     * @description style
     *
     * @var string
     */
    public $style;

    /**
     * @description duration
     *
     * @var float
     */
    public $duration;

    /**
     * @description durationAdaption
     *
     * @var bool
     */
    public $durationAdaption;

    /**
     * @description transitionStyle
     *
     * @var string
     */
    public $transitionStyle;

    /**
     * @description smartEffect
     *
     * @var bool
     */
    public $smartEffect;

    /**
     * @description puzzleEffect
     *
     * @var bool
     */
    public $puzzleEffect;

    /**
     * @description mute
     *
     * @var bool
     */
    public $mute;
    protected $_name = [
        'fileList'         => 'FileList',
        'scene'            => 'Scene',
        'width'            => 'Width',
        'height'           => 'Height',
        'style'            => 'Style',
        'duration'         => 'Duration',
        'durationAdaption' => 'DurationAdaption',
        'transitionStyle'  => 'TransitionStyle',
        'smartEffect'      => 'SmartEffect',
        'puzzleEffect'     => 'PuzzleEffect',
        'mute'             => 'Mute',
    ];

    public function validate()
    {
        Model::validateRequired('fileList', $this->fileList, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['FileList'] = [];
        if (null !== $this->fileList && \is_array($this->fileList)) {
            $n = 0;
            foreach ($this->fileList as $item) {
                $res['FileList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Scene']            = $this->scene;
        $res['Width']            = $this->width;
        $res['Height']           = $this->height;
        $res['Style']            = $this->style;
        $res['Duration']         = $this->duration;
        $res['DurationAdaption'] = $this->durationAdaption;
        $res['TransitionStyle']  = $this->transitionStyle;
        $res['SmartEffect']      = $this->smartEffect;
        $res['PuzzleEffect']     = $this->puzzleEffect;
        $res['Mute']             = $this->mute;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n               = 0;
                foreach ($map['FileList'] as $item) {
                    $model->fileList[$n++] = null !== $item ? fileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['DurationAdaption'])) {
            $model->durationAdaption = $map['DurationAdaption'];
        }
        if (isset($map['TransitionStyle'])) {
            $model->transitionStyle = $map['TransitionStyle'];
        }
        if (isset($map['SmartEffect'])) {
            $model->smartEffect = $map['SmartEffect'];
        }
        if (isset($map['PuzzleEffect'])) {
            $model->puzzleEffect = $map['PuzzleEffect'];
        }
        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }

        return $model;
    }
}
