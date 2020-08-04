<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeVATInvoiceRequest extends Model
{
    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $fileType;
    protected $_name = [
        'fileURL'  => 'FileURL',
        'fileType' => 'FileType',
    ];

    public function validate()
    {
        Model::validateRequired('fileURL', $this->fileURL, true);
        Model::validateRequired('fileType', $this->fileType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeVATInvoiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        return $model;
    }
}
