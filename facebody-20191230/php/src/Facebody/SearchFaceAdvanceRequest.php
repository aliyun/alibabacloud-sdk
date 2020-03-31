<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class SearchFaceAdvanceRequest extends Model
{
    public $imageUrlObject;
    public $dbName;
    public $limit;
    protected $_required = [
        'imageUrlObject' => true,
        'dbName'         => true,
        'limit'          => true,
    ];
    protected $_description = [
        'imageUrlObject' => 'ImageUrlObject',
        'dbName'         => 'dbName',
        'limit'          => 'limit',
    ];
    protected $_name = [
        'imageUrlObject' => 'ImageUrlObject',
        'dbName'         => 'DbName',
        'limit'          => 'Limit',
    ];
}
