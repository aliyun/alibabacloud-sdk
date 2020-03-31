<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch;

use AlibabaCloud\Tea\Model;

class ListImagesRequest extends Model
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
