<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverResponse\data;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @description ImageURL
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description Confidence
     *
     * @var float
     */
    public $confidence;
    protected $_name = [
        'imageURL'   => 'ImageURL',
        'confidence' => 'Confidence',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('confidence', $this->confidence, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['ImageURL']   = $this->imageURL;
        $res['Confidence'] = $this->confidence;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        return $model;
    }
}
