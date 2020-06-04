<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse\mezzanine;

use AlibabaCloud\Tea\Model;

class videoStreamList extends Model {
    protected $_name = [
        'index' => 'Index',
        'codecName' => 'CodecName',
        'codecLongName' => 'CodecLongName',
        'profile' => 'Profile',
        'codecTimeBase' => 'CodecTimeBase',
        'codecTagString' => 'CodecTagString',
        'codecTag' => 'CodecTag',
        'width' => 'Width',
        'height' => 'Height',
        'hasBFrames' => 'HasBFrames',
        'sar' => 'Sar',
        'dar' => 'Dar',
        'pixFmt' => 'PixFmt',
        'level' => 'Level',
        'fps' => 'Fps',
        'avgFPS' => 'AvgFPS',
        'timebase' => 'Timebase',
        'startTime' => 'StartTime',
        'duration' => 'Duration',
        'numFrames' => 'NumFrames',
        'lang' => 'Lang',
        'rotate' => 'Rotate',
    ];
    public function validate() {
        Model::validateRequired('index', $this->index, true);
        Model::validateRequired('codecName', $this->codecName, true);
        Model::validateRequired('codecLongName', $this->codecLongName, true);
        Model::validateRequired('profile', $this->profile, true);
        Model::validateRequired('codecTimeBase', $this->codecTimeBase, true);
        Model::validateRequired('codecTagString', $this->codecTagString, true);
        Model::validateRequired('codecTag', $this->codecTag, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('hasBFrames', $this->hasBFrames, true);
        Model::validateRequired('sar', $this->sar, true);
        Model::validateRequired('dar', $this->dar, true);
        Model::validateRequired('pixFmt', $this->pixFmt, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('fps', $this->fps, true);
        Model::validateRequired('avgFPS', $this->avgFPS, true);
        Model::validateRequired('timebase', $this->timebase, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('numFrames', $this->numFrames, true);
        Model::validateRequired('lang', $this->lang, true);
        Model::validateRequired('rotate', $this->rotate, true);
    }
    public function toMap() {
        $res = [];
        $res['Index'] = $this->index;
        $res['CodecName'] = $this->codecName;
        $res['CodecLongName'] = $this->codecLongName;
        $res['Profile'] = $this->profile;
        $res['CodecTimeBase'] = $this->codecTimeBase;
        $res['CodecTagString'] = $this->codecTagString;
        $res['CodecTag'] = $this->codecTag;
        $res['Width'] = $this->width;
        $res['Height'] = $this->height;
        $res['HasBFrames'] = $this->hasBFrames;
        $res['Sar'] = $this->sar;
        $res['Dar'] = $this->dar;
        $res['PixFmt'] = $this->pixFmt;
        $res['Level'] = $this->level;
        $res['Fps'] = $this->fps;
        $res['AvgFPS'] = $this->avgFPS;
        $res['Timebase'] = $this->timebase;
        $res['StartTime'] = $this->startTime;
        $res['Duration'] = $this->duration;
        $res['NumFrames'] = $this->numFrames;
        $res['Lang'] = $this->lang;
        $res['Rotate'] = $this->rotate;
        return $res;
    }
    /**
     * @param array $map
     * @return videoStreamList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Index'])){
            $model->index = $map['Index'];
        }
        if(isset($map['CodecName'])){
            $model->codecName = $map['CodecName'];
        }
        if(isset($map['CodecLongName'])){
            $model->codecLongName = $map['CodecLongName'];
        }
        if(isset($map['Profile'])){
            $model->profile = $map['Profile'];
        }
        if(isset($map['CodecTimeBase'])){
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if(isset($map['CodecTagString'])){
            $model->codecTagString = $map['CodecTagString'];
        }
        if(isset($map['CodecTag'])){
            $model->codecTag = $map['CodecTag'];
        }
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        if(isset($map['HasBFrames'])){
            $model->hasBFrames = $map['HasBFrames'];
        }
        if(isset($map['Sar'])){
            $model->sar = $map['Sar'];
        }
        if(isset($map['Dar'])){
            $model->dar = $map['Dar'];
        }
        if(isset($map['PixFmt'])){
            $model->pixFmt = $map['PixFmt'];
        }
        if(isset($map['Level'])){
            $model->level = $map['Level'];
        }
        if(isset($map['Fps'])){
            $model->fps = $map['Fps'];
        }
        if(isset($map['AvgFPS'])){
            $model->avgFPS = $map['AvgFPS'];
        }
        if(isset($map['Timebase'])){
            $model->timebase = $map['Timebase'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['NumFrames'])){
            $model->numFrames = $map['NumFrames'];
        }
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['Rotate'])){
            $model->rotate = $map['Rotate'];
        }
        return $model;
    }
    /**
     * @description index
     * @var string
     */
    public $index;

    /**
     * @description codecName
     * @var string
     */
    public $codecName;

    /**
     * @description codecLongName
     * @var string
     */
    public $codecLongName;

    /**
     * @description profile
     * @var string
     */
    public $profile;

    /**
     * @description codecTimeBase
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description codecTagString
     * @var string
     */
    public $codecTagString;

    /**
     * @description codecTag
     * @var string
     */
    public $codecTag;

    /**
     * @description width
     * @var string
     */
    public $width;

    /**
     * @description height
     * @var string
     */
    public $height;

    /**
     * @description hasBFrames
     * @var string
     */
    public $hasBFrames;

    /**
     * @description sar
     * @var string
     */
    public $sar;

    /**
     * @description dar
     * @var string
     */
    public $dar;

    /**
     * @description pixFmt
     * @var string
     */
    public $pixFmt;

    /**
     * @description level
     * @var string
     */
    public $level;

    /**
     * @description fps
     * @var string
     */
    public $fps;

    /**
     * @description avgFPS
     * @var string
     */
    public $avgFPS;

    /**
     * @description timebase
     * @var string
     */
    public $timebase;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description duration
     * @var string
     */
    public $duration;

    /**
     * @description numFrames
     * @var string
     */
    public $numFrames;

    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description rotate
     * @var string
     */
    public $rotate;

}
