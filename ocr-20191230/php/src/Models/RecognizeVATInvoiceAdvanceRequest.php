<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeVATInvoiceAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $fileURLObject;

    /**
     * @var string
     */
    public $fileType;
    protected $_name = [
        'fileURLObject' => 'FileURLObject',
        'fileType'      => 'FileType',
    ];

    public function validate()
    {
        Model::validateRequired('fileURLObject', $this->fileURLObject, true);
        Model::validateRequired('fileType', $this->fileType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileURLObject) {
            $res['FileURLObject'] = $this->fileURLObject;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeVATInvoiceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURLObject'])) {
            $model->fileURLObject = $map['FileURLObject'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        return $model;
    }
}
