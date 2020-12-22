<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class MergeVideoFaceRequest extends Model
{
    /**
     * @var string
     */
    public $videoURL;

    /**
     * @var string
     */
    public $postURL;

    /**
     * @var string
     */
    public $referenceURL;
    protected $_name = [
        'videoURL'     => 'VideoURL',
        'postURL'      => 'PostURL',
        'referenceURL' => 'ReferenceURL',
    ];

    public function validate()
    {
        Model::validateRequired('videoURL', $this->videoURL, true);
        Model::validateRequired('postURL', $this->postURL, true);
        Model::validateRequired('referenceURL', $this->referenceURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }
        if (null !== $this->postURL) {
            $res['PostURL'] = $this->postURL;
        }
        if (null !== $this->referenceURL) {
            $res['ReferenceURL'] = $this->referenceURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeVideoFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }
        if (isset($map['PostURL'])) {
            $model->postURL = $map['PostURL'];
        }
        if (isset($map['ReferenceURL'])) {
            $model->referenceURL = $map['ReferenceURL'];
        }

        return $model;
    }
}
