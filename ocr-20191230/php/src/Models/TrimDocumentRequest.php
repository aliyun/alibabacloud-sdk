<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class TrimDocumentRequest extends Model
{
    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $outputType;
    protected $_name = [
        'fileURL'    => 'FileURL',
        'fileType'   => 'FileType',
        'outputType' => 'OutputType',
    ];

    public function validate()
    {
        Model::validateRequired('fileURL', $this->fileURL, true);
        Model::validateRequired('fileType', $this->fileType, true);
        Model::validateRequired('outputType', $this->outputType, true);
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
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrimDocumentRequest
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
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        return $model;
    }
}
