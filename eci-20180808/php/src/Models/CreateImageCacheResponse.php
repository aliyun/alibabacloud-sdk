<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class CreateImageCacheResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.imageCacheId
     *
     * @var string
     */
    public $imageCacheId;

    /**
     * @description data.containerGroupId
     *
     * @var string
     */
    public $containerGroupId;
    protected $_name = [
        'requestId'        => 'RequestId',
        'imageCacheId'     => 'ImageCacheId',
        'containerGroupId' => 'ContainerGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('imageCacheId', $this->imageCacheId, true);
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->imageCacheId) {
            $res['ImageCacheId'] = $this->imageCacheId;
        }
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageCacheResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageCacheId'])) {
            $model->imageCacheId = $map['ImageCacheId'];
        }
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }

        return $model;
    }
}
