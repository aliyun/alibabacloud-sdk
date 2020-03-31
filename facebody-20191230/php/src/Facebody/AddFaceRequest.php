<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class AddFaceRequest extends Model
{
    public $dbName;
    public $faceId;
    public $imageUrl;
    public $entityId;
    public $extraData;
    protected $_required = [
        'dbName'   => true,
        'faceId'   => true,
        'imageUrl' => true,
        'entityId' => true,
    ];
    protected $_name = [
        'dbName'    => 'DbName',
        'faceId'    => 'FaceId',
        'imageUrl'  => 'ImageUrl',
        'entityId'  => 'EntityId',
        'extraData' => 'ExtraData',
    ];
    protected $_description = [
        'dbName'    => 'dbName',
        'faceId'    => 'faceId',
        'imageUrl'  => 'imageUrl',
        'entityId'  => 'entityId',
        'extraData' => 'extraData',
    ];
}
