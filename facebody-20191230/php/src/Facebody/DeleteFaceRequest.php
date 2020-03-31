<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class DeleteFaceRequest extends Model
{
    public $dbName;
    public $faceId;
    protected $_required = [
        'dbName' => true,
        'faceId' => true,
    ];
    protected $_name = [
        'dbName' => 'DbName',
        'faceId' => 'FaceId',
    ];
    protected $_description = [
        'dbName' => 'dbName',
        'faceId' => 'faceId',
    ];
}
