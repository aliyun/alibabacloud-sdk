<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeVATInvoiceAdvanceRequest extends Model
{
    public $fileURLObject;
    public $fileType;
    protected $_required = [
        'fileURLObject' => true,
        'fileType'      => true,
    ];
    protected $_description = [
        'fileURLObject' => 'FileURLObject',
        'fileType'      => 'fileType',
    ];
    protected $_name = [
        'fileURLObject' => 'FileURLObject',
        'fileType'      => 'FileType',
    ];
}
