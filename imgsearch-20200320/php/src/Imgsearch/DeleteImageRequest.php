<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch;

use AlibabaCloud\Tea\Model;

class DeleteImageRequest extends Model
{
    public $dbName;
    public $dataId;
    protected $_required = [
        'dbName' => true,
        'dataId' => true,
    ];
    protected $_name = [
        'dbName' => 'DbName',
        'dataId' => 'DataId',
    ];
    protected $_description = [
        'dbName' => 'dbName',
        'dataId' => 'dataId',
    ];
}
