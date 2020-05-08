<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\TrimDocumentResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Content
     *
     * @var string
     */
    public $content;
    protected $_name = [
        'content' => 'Content',
    ];

    public function validate()
    {
        Model::validateRequired('content', $this->content, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['Content'] = $this->content;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
