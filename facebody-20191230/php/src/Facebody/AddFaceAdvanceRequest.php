<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class AddFaceAdvanceRequest extends Model
{
    public $imageUrlObject;
    public $dbName;
    public $faceId;
    public $entityId;
    public $extraData;
    protected $_required = [
        'imageUrlObject' => true,
        'dbName'         => true,
        'faceId'         => true,
        'entityId'       => true,
    ];
    protected $_description = [
        'imageUrlObject' => 'ImageUrlObject',
        'dbName'         => 'dbName',
        'faceId'         => 'faceId',
        'entityId'       => 'entityId',
        'extraData'      => 'extraData',
    ];
    protected $_name = [
        'imageUrlObject' => 'ImageUrlObject',
        'dbName'         => 'DbName',
        'faceId'         => 'FaceId',
        'entityId'       => 'EntityId',
        'extraData'      => 'ExtraData',
    ];
}
