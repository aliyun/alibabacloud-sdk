<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class MergeVideoFaceAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoURLObject;

    /**
     * @var string
     */
    public $postURL;

    /**
     * @var string
     */
    public $referenceURL;
    protected $_name = [
        'videoURLObject' => 'VideoURLObject',
        'postURL'        => 'PostURL',
        'referenceURL'   => 'ReferenceURL',
    ];

    public function validate()
    {
        Model::validateRequired('videoURLObject', $this->videoURLObject, true);
        Model::validateRequired('postURL', $this->postURL, true);
        Model::validateRequired('referenceURL', $this->referenceURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURLObject) {
            $res['VideoURLObject'] = $this->videoURLObject;
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
     * @return MergeVideoFaceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURLObject'])) {
            $model->videoURLObject = $map['VideoURLObject'];
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
