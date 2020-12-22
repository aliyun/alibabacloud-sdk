<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoRequest\fileList;
use AlibabaCloud\Tea\Model;

class GenerateVideoRequest extends Model
{
    /**
     * @var fileList[]
     */
    public $fileList;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $style;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var bool
     */
    public $durationAdaption;

    /**
     * @var string
     */
    public $transitionStyle;

    /**
     * @var bool
     */
    public $smartEffect;

    /**
     * @var bool
     */
    public $puzzleEffect;

    /**
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
        $res = [];
        if (null !== $this->fileList) {
            $res['FileList'] = [];
            if (null !== $this->fileList && \is_array($this->fileList)) {
                $n = 0;
                foreach ($this->fileList as $item) {
                    $res['FileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->durationAdaption) {
            $res['DurationAdaption'] = $this->durationAdaption;
        }
        if (null !== $this->transitionStyle) {
            $res['TransitionStyle'] = $this->transitionStyle;
        }
        if (null !== $this->smartEffect) {
            $res['SmartEffect'] = $this->smartEffect;
        }
        if (null !== $this->puzzleEffect) {
            $res['PuzzleEffect'] = $this->puzzleEffect;
        }
        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }

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
