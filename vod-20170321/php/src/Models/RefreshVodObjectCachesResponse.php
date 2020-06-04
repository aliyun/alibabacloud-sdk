<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshVodObjectCachesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'refreshTaskId' => 'RefreshTaskId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('refreshTaskId', $this->refreshTaskId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RefreshTaskId'] = $this->refreshTaskId;
        return $res;
    }
    /**
     * @param array $map
     * @return RefreshVodObjectCachesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RefreshTaskId'])){
            $model->refreshTaskId = $map['RefreshTaskId'];
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
    public $refreshTaskId;

}
