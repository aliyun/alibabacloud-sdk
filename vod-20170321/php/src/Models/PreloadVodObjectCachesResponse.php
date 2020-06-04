<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class PreloadVodObjectCachesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'preloadTaskId' => 'PreloadTaskId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('preloadTaskId', $this->preloadTaskId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PreloadTaskId'] = $this->preloadTaskId;
        return $res;
    }
    /**
     * @param array $map
     * @return PreloadVodObjectCachesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PreloadTaskId'])){
            $model->preloadTaskId = $map['PreloadTaskId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var string
     */
    public $preloadTaskId;

}
