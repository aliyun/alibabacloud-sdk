<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse\data\invoices;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description invoices
     *
     * @var array
     */
    public $invoices;
    protected $_name = [
        'invoices' => 'Invoices',
    ];

    public function validate()
    {
        Model::validateRequired('invoices', $this->invoices, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invoices) {
            $res['Invoices'] = [];
            if (null !== $this->invoices && \is_array($this->invoices)) {
                $n = 0;
                foreach ($this->invoices as $item) {
                    $res['Invoices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

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
        if (isset($map['Invoices'])) {
            if (!empty($map['Invoices'])) {
                $model->invoices = [];
                $n               = 0;
                foreach ($map['Invoices'] as $item) {
                    $model->invoices[$n++] = null !== $item ? invoices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
