<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class TrimDocumentAdvanceRequest extends Model
{
    /**
     * @description FileURLObject
     *
     * @var Stream
     */
    public $fileURLObject;

    /**
     * @description fileType
     *
     * @var string
     */
    public $fileType;

    /**
     * @description outputType
     *
     * @var string
     */
    public $outputType;
    protected $_name = [
        'fileURLObject' => 'FileURLObject',
        'fileType'      => 'FileType',
        'outputType'    => 'OutputType',
    ];

    public function validate()
    {
        Model::validateRequired('fileURLObject', $this->fileURLObject, true);
        Model::validateRequired('fileType', $this->fileType, true);
        Model::validateRequired('outputType', $this->outputType, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['FileURLObject'] = $this->fileURLObject;
        $res['FileType']      = $this->fileType;
        $res['OutputType']    = $this->outputType;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrimDocumentAdvanceRequest
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
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        return $model;
    }
}
