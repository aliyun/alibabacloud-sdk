<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class TrimDocumentRequest extends Model
{
    public $fileURL;
    public $fileType;
    public $outputType;
    protected $_required = [
        'fileURL'    => true,
        'fileType'   => true,
        'outputType' => true,
    ];
    protected $_name = [
        'fileURL'    => 'FileURL',
        'fileType'   => 'FileType',
        'outputType' => 'OutputType',
    ];
    protected $_description = [
        'fileURL'    => 'fileUrl',
        'fileType'   => 'fileType',
        'outputType' => 'outputType',
    ];
}
