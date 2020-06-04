<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponse\transcodeData;

class DescribeVodTranscodeDataResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'dataInterval' => 'DataInterval',
        'transcodeData' => 'TranscodeData',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('transcodeData', $this->transcodeData, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DataInterval'] = $this->dataInterval;
        $res['TranscodeData'] = null !== $this->transcodeData ? $this->transcodeData->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodTranscodeDataResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DataInterval'])){
            $model->dataInterval = $map['DataInterval'];
        }
        if(isset($map['TranscodeData'])){
            $model->transcodeData = transcodeData::fromMap($map['TranscodeData']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.content.interval
     * @var string
     */
    public $dataInterval;

    /**
     * @description data.content.data
     * @var transcodeData
     */
    public $transcodeData;

}
