<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponse\imageInfo;

use AlibabaCloud\Tea\Model;

class mezzanine extends Model
{
    /**
     * @description originalFileName
     *
     * @var string
     */
    public $originalFileName;

    /**
     * @description fileSize
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description width
     *
     * @var int
     */
    public $width;

    /**
     * @description height
     *
     * @var int
     */
    public $height;

    /**
     * @description fileUrl
     *
     * @var string
     */
    public $fileURL;
    protected $_name = [
        'originalFileName' => 'OriginalFileName',
        'fileSize'         => 'FileSize',
        'width'            => 'Width',
        'height'           => 'Height',
        'fileURL'          => 'FileURL',
    ];

    public function validate()
    {
        Model::validateRequired('originalFileName', $this->originalFileName, true);
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('fileURL', $this->fileURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalFileName) {
            $res['OriginalFileName'] = $this->originalFileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mezzanine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalFileName'])) {
            $model->originalFileName = $map['OriginalFileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }

        return $model;
    }
}
