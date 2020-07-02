<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class EnhanceImageColorRequest extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;

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
        'imageURL'     => 'ImageURL',
        'outputFormat' => 'OutputFormat',
        'mode'         => 'Mode',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('outputFormat', $this->outputFormat, true);
        Model::validateRequired('mode', $this->mode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
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
     * @return EnhanceImageColorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
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
