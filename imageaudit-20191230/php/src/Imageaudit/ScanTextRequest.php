<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit;

use AlibabaCloud\Tea\Model;

class ScanTextRequest extends Model
{
    public $tasks;
    public $labels;
    protected $_required = [
        'tasks'  => true,
        'labels' => true,
    ];
    protected $_name = [
        'tasks'  => 'Tasks',
        'labels' => 'Labels',
    ];
    protected $_description = [
        'tasks'  => 'tasks',
        'labels' => 'labels',
    ];
}
