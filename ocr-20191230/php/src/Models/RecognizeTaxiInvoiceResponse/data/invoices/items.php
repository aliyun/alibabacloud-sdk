<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse\data\invoices;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse\data\invoices\items\itemRoi;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var itemRoi
     */
    public $itemRoi;
    protected $_name = [
        'text'    => 'Text',
        'itemRoi' => 'ItemRoi',
    ];

    public function validate()
    {
        Model::validateRequired('text', $this->text, true);
        Model::validateRequired('itemRoi', $this->itemRoi, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->itemRoi) {
            $res['ItemRoi'] = null !== $this->itemRoi ? $this->itemRoi->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['ItemRoi'])) {
            $model->itemRoi = itemRoi::fromMap($map['ItemRoi']);
        }

        return $model;
    }
}
