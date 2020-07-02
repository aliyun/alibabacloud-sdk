<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class EnhanceImageColorAdvanceRequest extends Model
{
    /**
     * @description ImageURLObject
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @description outputFormat
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @description mode
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'outputFormat'   => 'OutputFormat',
        'mode'           => 'Mode',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
        Model::validateRequired('outputFormat', $this->outputFormat, true);
        Model::validateRequired('mode', $this->mode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnhanceImageColorAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
