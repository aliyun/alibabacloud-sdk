<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit;

use AlibabaCloud\Tea\Model;

class ScanImageRequest extends Model
{
    public $task;
    public $scene;
    protected $_required = [
        'task'  => true,
        'scene' => true,
    ];
    protected $_name = [
        'task'  => 'Task',
        'scene' => 'Scene',
    ];
    protected $_description = [
        'task'  => 'tasks',
        'scene' => 'scenes',
    ];
}
