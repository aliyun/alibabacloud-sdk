<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse\liveRecordVideoList\liveRecordVideo\playInfoList;

use AlibabaCloud\Tea\Model;

class playInfo extends Model {
    protected $_name = [
        'width' => 'Width',
        'height' => 'Height',
        'size' => 'Size',
        'playURL' => 'PlayURL',
        'bitrate' => 'Bitrate',
        'definition' => 'Definition',
        'duration' => 'Duration',
        'format' => 'Format',
        'fps' => 'Fps',
        'encrypt' => 'Encrypt',
        'plaintext' => 'Plaintext',
        'complexity' => 'Complexity',
        'streamType' => 'StreamType',
        'rand' => 'Rand',
        'jobId' => 'JobId',
    ];
    public function validate() {
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('playURL', $this->playURL, true);
        Model::validateRequired('bitrate', $this->bitrate, true);
        Model::validateRequired('definition', $this->definition, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('fps', $this->fps, true);
        Model::validateRequired('encrypt', $this->encrypt, true);
        Model::validateRequired('plaintext', $this->plaintext, true);
        Model::validateRequired('complexity', $this->complexity, true);
        Model::validateRequired('streamType', $this->streamType, true);
        Model::validateRequired('rand', $this->rand, true);
        Model::validateRequired('jobId', $this->jobId, true);
    }
    public function toMap() {
        $res = [];
        $res['Width'] = $this->width;
        $res['Height'] = $this->height;
        $res['Size'] = $this->size;
        $res['PlayURL'] = $this->playURL;
        $res['Bitrate'] = $this->bitrate;
        $res['Definition'] = $this->definition;
        $res['Duration'] = $this->duration;
        $res['Format'] = $this->format;
        $res['Fps'] = $this->fps;
        $res['Encrypt'] = $this->encrypt;
        $res['Plaintext'] = $this->plaintext;
        $res['Complexity'] = $this->complexity;
        $res['StreamType'] = $this->streamType;
        $res['Rand'] = $this->rand;
        $res['JobId'] = $this->jobId;
        return $res;
    }
    /**
     * @param array $map
     * @return playInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        if(isset($map['Size'])){
            $model->size = $map['Size'];
        }
        if(isset($map['PlayURL'])){
            $model->playURL = $map['PlayURL'];
        }
        if(isset($map['Bitrate'])){
            $model->bitrate = $map['Bitrate'];
        }
        if(isset($map['Definition'])){
            $model->definition = $map['Definition'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['Format'])){
            $model->format = $map['Format'];
        }
        if(isset($map['Fps'])){
            $model->fps = $map['Fps'];
        }
        if(isset($map['Encrypt'])){
            $model->encrypt = $map['Encrypt'];
        }
        if(isset($map['Plaintext'])){
            $model->plaintext = $map['Plaintext'];
        }
        if(isset($map['Complexity'])){
            $model->complexity = $map['Complexity'];
        }
        if(isset($map['StreamType'])){
            $model->streamType = $map['StreamType'];
        }
        if(isset($map['Rand'])){
            $model->rand = $map['Rand'];
        }
        if(isset($map['JobId'])){
            $model->jobId = $map['JobId'];
        }
        return $model;
    }
    /**
     * @description width
     * @var integer
     */
    public $width;

    /**
     * @description height
     * @var integer
     */
    public $height;

    /**
     * @description size
     * @var integer
     */
    public $size;

    /**
     * @description playURL
     * @var string
     */
    public $playURL;

    /**
     * @description bitrate
     * @var string
     */
    public $bitrate;

    /**
     * @description definition
     * @var string
     */
    public $definition;

    /**
     * @description duration
     * @var string
     */
    public $duration;

    /**
     * @description format
     * @var string
     */
    public $format;

    /**
     * @description fps
     * @var string
     */
    public $fps;

    /**
     * @description encrypt
     * @var integer
     */
    public $encrypt;

    /**
     * @description plaintext
     * @var string
     */
    public $plaintext;

    /**
     * @description complexity
     * @var string
     */
    public $complexity;

    /**
     * @description streamType
     * @var string
     */
    public $streamType;

    /**
     * @description rand
     * @var string
     */
    public $rand;

    /**
     * @description jobId
     * @var string
     */
    public $jobId;

}
