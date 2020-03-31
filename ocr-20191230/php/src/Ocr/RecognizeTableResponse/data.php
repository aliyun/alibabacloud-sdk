<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTableResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $fileContent;
    public $tables;
    protected $_required = [
        'fileContent' => true,
        'tables'      => true,
    ];
    protected $_name = [
        'fileContent' => 'FileContent',
        'tables'      => 'Tables',
    ];
    protected $_description = [
        'fileContent' => 'fileContent',
        'tables'      => 'tables',
    ];
}
