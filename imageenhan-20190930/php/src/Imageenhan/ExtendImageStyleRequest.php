<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class ExtendImageStyleRequest extends Model
{
    /**
     * @description styleUrl
     *
     * @var string
     */
    public $styleUrl;

    /**
     * @description majorUrl
     *
     * @var string
     */
    public $majorUrl;
    protected $_name = [
        'styleUrl' => 'StyleUrl',
        'majorUrl' => 'MajorUrl',
    ];

    public function validate()
    {
        Model::validateRequired('styleUrl', $this->styleUrl, true);
        Model::validateRequired('majorUrl', $this->majorUrl, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['StyleUrl'] = $this->styleUrl;
        $res['MajorUrl'] = $this->majorUrl;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtendImageStyleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StyleUrl'])) {
            $model->styleUrl = $map['StyleUrl'];
        }
        if (isset($map['MajorUrl'])) {
            $model->majorUrl = $map['MajorUrl'];
        }

        return $model;
    }
}
