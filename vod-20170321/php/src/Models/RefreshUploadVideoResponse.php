<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshUploadVideoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'uploadAuth' => 'UploadAuth',
        'uploadAddress' => 'UploadAddress',
        'videoId' => 'VideoId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('uploadAuth', $this->uploadAuth, true);
        Model::validateRequired('uploadAddress', $this->uploadAddress, true);
        Model::validateRequired('videoId', $this->videoId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['UploadAuth'] = $this->uploadAuth;
        $res['UploadAddress'] = $this->uploadAddress;
        $res['VideoId'] = $this->videoId;
        return $res;
    }
    /**
     * @param array $map
     * @return RefreshUploadVideoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['UploadAuth'])){
            $model->uploadAuth = $map['UploadAuth'];
        }
        if(isset($map['UploadAddress'])){
            $model->uploadAddress = $map['UploadAddress'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.uploadAuth
     * @var string
     */
    public $uploadAuth;

    /**
     * @description data.uploadAddress
     * @var string
     */
    public $uploadAddress;

    /**
     * @description data.videoId
     * @var string
     */
    public $videoId;

}
