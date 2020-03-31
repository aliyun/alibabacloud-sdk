<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class TrimDocumentAdvanceRequest extends Model
{
    public $fileURLObject;
    public $fileType;
    public $outputType;
    protected $_required = [
        'fileURLObject' => true,
        'fileType'      => true,
        'outputType'    => true,
    ];
    protected $_description = [
        'fileURLObject' => 'FileURLObject',
        'fileType'      => 'fileType',
        'outputType'    => 'outputType',
    ];
    protected $_name = [
        'fileURLObject' => 'FileURLObject',
        'fileType'      => 'FileType',
        'outputType'    => 'OutputType',
    ];
}
