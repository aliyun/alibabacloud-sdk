<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponse\AIData;

class DescribeVodAIDataResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'dataInterval' => 'DataInterval',
        'AIData' => 'AIData',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('AIData', $this->AIData, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DataInterval'] = $this->dataInterval;
        $res['AIData'] = null !== $this->AIData ? $this->AIData->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodAIDataResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DataInterval'])){
            $model->dataInterval = $map['DataInterval'];
        }
        if(isset($map['AIData'])){
            $model->AIData = AIData::fromMap($map['AIData']);
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
     * @var AIData
     */
    public $AIData;

}
