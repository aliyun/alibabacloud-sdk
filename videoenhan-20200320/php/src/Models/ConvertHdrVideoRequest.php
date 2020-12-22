<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ConvertHdrVideoRequest extends Model
{
    /**
     * @var string
     */
    public $videoURL;

    /**
     * @var string
     */
    public $HDRFormat;

    /**
     * @var int
     */
    public $maxIlluminance;

    /**
     * @var int
     */
    public $bitrate;
    protected $_name = [
        'videoURL'       => 'VideoURL',
        'HDRFormat'      => 'HDRFormat',
        'maxIlluminance' => 'MaxIlluminance',
        'bitrate'        => 'Bitrate',
    ];

    public function validate()
    {
        Model::validateRequired('videoURL', $this->videoURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }
        if (null !== $this->HDRFormat) {
            $res['HDRFormat'] = $this->HDRFormat;
        }
        if (null !== $this->maxIlluminance) {
            $res['MaxIlluminance'] = $this->maxIlluminance;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertHdrVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }
        if (isset($map['HDRFormat'])) {
            $model->HDRFormat = $map['HDRFormat'];
        }
        if (isset($map['MaxIlluminance'])) {
            $model->maxIlluminance = $map['MaxIlluminance'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }

        return $model;
    }
}
