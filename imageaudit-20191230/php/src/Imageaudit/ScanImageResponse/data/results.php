<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse\data;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    public $dataId;
    public $taskId;
    public $imageURL;
    public $subResults;
    protected $_required = [
        'dataId'     => true,
        'taskId'     => true,
        'imageURL'   => true,
        'subResults' => true,
    ];
    protected $_name = [
        'dataId'     => 'DataId',
        'taskId'     => 'TaskId',
        'imageURL'   => 'ImageURL',
        'subResults' => 'SubResults',
    ];
    protected $_description = [
        'dataId'     => 'dataId',
        'taskId'     => 'taskId',
        'imageURL'   => 'imageUrl',
        'subResults' => 'subResults',
    ];
}
