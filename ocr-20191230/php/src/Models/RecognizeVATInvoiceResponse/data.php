<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponse;

use AlibabaCloud\SDK\Ocr\V20191230\Models\data\box;
use AlibabaCloud\SDK\Ocr\V20191230\Models\data\content;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description content
     *
     * @var data.content
     */
    public $content;

    /**
     * @description box
     *
     * @var data.box
     */
    public $box;
    protected $_name = [
        'content' => 'Content',
        'box'     => 'Box',
    ];

    public function validate()
    {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('box', $this->box, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        $res['Box']     = null !== $this->box ? $this->box->toMap() : null;

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
            $model->content = content::fromMap($map['Content']);
        }
        if (isset($map['Box'])) {
            $model->box = box::fromMap($map['Box']);
        }

        return $model;
    }
}
