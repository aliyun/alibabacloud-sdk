<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch;

use AlibabaCloud\Tea\Model;

class SearchImageRequest extends Model
{
    public $dbName;
    public $imageUrl;
    public $limit;
    protected $_required = [
        'dbName'   => true,
        'imageUrl' => true,
        'limit'    => true,
    ];
    protected $_name = [
        'dbName'   => 'DbName',
        'imageUrl' => 'ImageUrl',
        'limit'    => 'Limit',
    ];
    protected $_description = [
        'dbName'   => 'dbName',
        'imageUrl' => 'imageUrl',
        'limit'    => 'limit',
    ];
}
