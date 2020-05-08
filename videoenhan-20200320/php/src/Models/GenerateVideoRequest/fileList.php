<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoRequest;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @description fileUrl
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description fileName
     *
     * @var string
     */
    public $fileName;

    /**
     * @description type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fileUrl'  => 'FileUrl',
        'fileName' => 'FileName',
        'type'     => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('fileUrl', $this->fileUrl, true);
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['FileUrl']  = $this->fileUrl;
        $res['FileName'] = $this->fileName;
        $res['Type']     = $this->type;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
