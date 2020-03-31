<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class ExportContainerGroupTemplateResponse extends Model
{
    public $requestId;
    public $template;
    protected $_required = [
        'requestId' => true,
        'template'  => true,
    ];
    protected $_name = [
        'requestId' => 'RequestId',
        'template'  => 'Template',
    ];
    protected $_description = [
        'requestId' => 'requestId',
        'template'  => 'data',
    ];
}
