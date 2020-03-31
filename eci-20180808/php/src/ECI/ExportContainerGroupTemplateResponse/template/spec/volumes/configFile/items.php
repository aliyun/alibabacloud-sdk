<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\volumes\configFile;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    public $mode;
    public $path;
    public $content;
    protected $_required = [
        'mode'    => true,
        'path'    => true,
        'content' => true,
    ];
    protected $_name = [
        'mode'    => 'Mode',
        'path'    => 'Path',
        'content' => 'Content',
    ];
    protected $_description = [
        'mode'    => 'mode',
        'path'    => 'path',
        'content' => 'content',
    ];
}
