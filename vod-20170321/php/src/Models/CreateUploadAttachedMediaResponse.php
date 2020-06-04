<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadAttachedMediaResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaId' => 'MediaId',
        'mediaURL' => 'MediaURL',
        'uploadAddress' => 'UploadAddress',
        'uploadAuth' => 'UploadAuth',
        'fileURL' => 'FileURL',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('mediaURL', $this->mediaURL, true);
        Model::validateRequired('uploadAddress', $this->uploadAddress, true);
        Model::validateRequired('uploadAuth', $this->uploadAuth, true);
        Model::validateRequired('fileURL', $this->fileURL, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaId'] = $this->mediaId;
        $res['MediaURL'] = $this->mediaURL;
        $res['UploadAddress'] = $this->uploadAddress;
        $res['UploadAuth'] = $this->uploadAuth;
        $res['FileURL'] = $this->fileURL;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUploadAttachedMediaResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['MediaURL'])){
            $model->mediaURL = $map['MediaURL'];
        }
        if(isset($map['UploadAddress'])){
            $model->uploadAddress = $map['UploadAddress'];
        }
        if(isset($map['UploadAuth'])){
            $model->uploadAuth = $map['UploadAuth'];
        }
        if(isset($map['FileURL'])){
            $model->fileURL = $map['FileURL'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description data.mediaUrl
     * @var string
     */
    public $mediaURL;

    /**
     * @description data.uploadAddress
     * @var string
     */
    public $uploadAddress;

    /**
     * @description data.uploadAuth
     * @var string
     */
    public $uploadAuth;

    /**
     * @description data.fileUrl
     * @var string
     */
    public $fileURL;

}
