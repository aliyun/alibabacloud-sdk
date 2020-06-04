<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponse\storageData;

class DescribeVodStorageDataResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'dataInterval' => 'DataInterval',
        'storageData' => 'StorageData',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('storageData', $this->storageData, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DataInterval'] = $this->dataInterval;
        $res['StorageData'] = null !== $this->storageData ? $this->storageData->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodStorageDataResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DataInterval'])){
            $model->dataInterval = $map['DataInterval'];
        }
        if(isset($map['StorageData'])){
            $model->storageData = storageData::fromMap($map['StorageData']);
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
     * @var storageData
     */
    public $storageData;

}
