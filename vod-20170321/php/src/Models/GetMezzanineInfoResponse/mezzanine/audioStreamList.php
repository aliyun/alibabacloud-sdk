<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse\mezzanine;

use AlibabaCloud\Tea\Model;

class audioStreamList extends Model
{
    /**
     * @description index
     *
     * @var string
     */
    public $index;

    /**
     * @description codecName
     *
     * @var string
     */
    public $codecName;

    /**
     * @description codecLongName
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description codecTimeBase
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description codecTagString
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description codecTag
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description sampleFmt
     *
     * @var string
     */
    public $sampleFmt;

    /**
     * @description sampleRate
     *
     * @var string
     */
    public $sampleRate;

    /**
     * @description channels
     *
     * @var string
     */
    public $channels;

    /**
     * @description channelLayout
     *
     * @var string
     */
    public $channelLayout;

    /**
     * @description timebase
     *
     * @var string
     */
    public $timebase;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description duration
     *
     * @var string
     */
    public $duration;

    /**
     * @description bitrate
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description numFrames
     *
     * @var string
     */
    public $numFrames;

    /**
     * @description lang
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'index'          => 'Index',
        'codecName'      => 'CodecName',
        'codecLongName'  => 'CodecLongName',
        'codecTimeBase'  => 'CodecTimeBase',
        'codecTagString' => 'CodecTagString',
        'codecTag'       => 'CodecTag',
        'sampleFmt'      => 'SampleFmt',
        'sampleRate'     => 'SampleRate',
        'channels'       => 'Channels',
        'channelLayout'  => 'ChannelLayout',
        'timebase'       => 'Timebase',
        'startTime'      => 'StartTime',
        'duration'       => 'Duration',
        'bitrate'        => 'Bitrate',
        'numFrames'      => 'NumFrames',
        'lang'           => 'Lang',
    ];

    public function validate()
    {
        Model::validateRequired('index', $this->index, true);
        Model::validateRequired('codecName', $this->codecName, true);
        Model::validateRequired('codecLongName', $this->codecLongName, true);
        Model::validateRequired('codecTimeBase', $this->codecTimeBase, true);
        Model::validateRequired('codecTagString', $this->codecTagString, true);
        Model::validateRequired('codecTag', $this->codecTag, true);
        Model::validateRequired('sampleFmt', $this->sampleFmt, true);
        Model::validateRequired('sampleRate', $this->sampleRate, true);
        Model::validateRequired('channels', $this->channels, true);
        Model::validateRequired('channelLayout', $this->channelLayout, true);
        Model::validateRequired('timebase', $this->timebase, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('bitrate', $this->bitrate, true);
        Model::validateRequired('numFrames', $this->numFrames, true);
        Model::validateRequired('lang', $this->lang, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }
        if (null !== $this->sampleFmt) {
            $res['SampleFmt'] = $this->sampleFmt;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->channelLayout) {
            $res['ChannelLayout'] = $this->channelLayout;
        }
        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->numFrames) {
            $res['NumFrames'] = $this->numFrames;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioStreamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }
        if (isset($map['SampleFmt'])) {
            $model->sampleFmt = $map['SampleFmt'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['ChannelLayout'])) {
            $model->channelLayout = $map['ChannelLayout'];
        }
        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['NumFrames'])) {
            $model->numFrames = $map['NumFrames'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
