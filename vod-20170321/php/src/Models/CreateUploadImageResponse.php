<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadImageResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaId
     *
     * @var string
     */
    public $imageId;

    /**
     * @description data.imageURL
     *
     * @var string
     */
    public $imageURL;

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

    /**
     * @description data.fileUrl
     *
     * @var string
     */
    public $fileURL;
    protected $_name = [
        'requestId'     => 'RequestId',
        'imageId'       => 'ImageId',
        'imageURL'      => 'ImageURL',
        'uploadAddress' => 'UploadAddress',
        'uploadAuth'    => 'UploadAuth',
        'fileURL'       => 'FileURL',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('uploadAddress', $this->uploadAddress, true);
        Model::validateRequired('uploadAuth', $this->uploadAuth, true);
        Model::validateRequired('fileURL', $this->fileURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->uploadAddress) {
            $res['UploadAddress'] = $this->uploadAddress;
        }
        if (null !== $this->uploadAuth) {
            $res['UploadAuth'] = $this->uploadAuth;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadImageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['UploadAddress'])) {
            $model->uploadAddress = $map['UploadAddress'];
        }
        if (isset($map['UploadAuth'])) {
            $model->uploadAuth = $map['UploadAuth'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }

        return $model;
    }
}
