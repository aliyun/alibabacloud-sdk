<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\AddSmsSignRequest;

use AlibabaCloud\Tea\Model;

class signFileList extends Model
{
    /**
     * @description fileSuffix
     *
     * @var string
     */
    public $fileSuffix;

    /**
     * @description fileContents
     *
     * @var string
     */
    public $fileContents;
    protected $_name = [
        'fileSuffix'   => 'FileSuffix',
        'fileContents' => 'FileContents',
    ];

    public function validate()
    {
        Model::validateRequired('fileSuffix', $this->fileSuffix, true);
        Model::validateRequired('fileContents', $this->fileContents, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['FileSuffix']   = $this->fileSuffix;
        $res['FileContents'] = $this->fileContents;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signFileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSuffix'])) {
            $model->fileSuffix = $map['FileSuffix'];
        }
        if (isset($map['FileContents'])) {
            $model->fileContents = $map['FileContents'];
        }

        return $model;
    }
}
