<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class ListFacesRequest extends Model
{
    public $dbName;
    public $fromScrollId;
    protected $_required = [
        'dbName' => true,
    ];
    protected $_name = [
        'dbName'       => 'DbName',
        'fromScrollId' => 'FromScrollId',
    ];
    protected $_description = [
        'dbName'       => 'dbName',
        'fromScrollId' => 'fromScrollId',
    ];
}
