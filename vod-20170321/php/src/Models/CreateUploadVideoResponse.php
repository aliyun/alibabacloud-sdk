<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadVideoResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaInfo.mediaId
     *
     * @var string
     */
    public $videoId;

    /**
     * @description data.uploadAddress
     *
     * @var string
     */
    public $uploadAddress;

    /**
     * @description data.uploadAuth
     *
     * @var string
     */
    public $uploadAuth;
    protected $_name = [
        'requestId'     => 'RequestId',
        'videoId'       => 'VideoId',
        'uploadAddress' => 'UploadAddress',
        'uploadAuth'    => 'UploadAuth',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('uploadAddress', $this->uploadAddress, true);
        Model::validateRequired('uploadAuth', $this->uploadAuth, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->uploadAddress) {
            $res['UploadAddress'] = $this->uploadAddress;
        }
        if (null !== $this->uploadAuth) {
            $res['UploadAuth'] = $this->uploadAuth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadVideoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['UploadAddress'])) {
            $model->uploadAddress = $map['UploadAddress'];
        }
        if (isset($map['UploadAuth'])) {
            $model->uploadAuth = $map['UploadAuth'];
        }

        return $model;
    }
}
