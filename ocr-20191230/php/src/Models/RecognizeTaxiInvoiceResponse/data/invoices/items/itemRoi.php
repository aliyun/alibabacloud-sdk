<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse\data\invoices\items;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse\data\invoices\items\itemRoi\center;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse\data\invoices\items\itemRoi\size;
use AlibabaCloud\Tea\Model;

class itemRoi extends Model
{
    /**
     * @description angle
     *
     * @var float
     */
    public $angle;

    /**
     * @description center
     *
     * @var center
     */
    public $center;

    /**
     * @description size
     *
     * @var size
     */
    public $size;
    protected $_name = [
        'angle'  => 'Angle',
        'center' => 'Center',
        'size'   => 'Size',
    ];

    public function validate()
    {
        Model::validateRequired('angle', $this->angle, true);
        Model::validateRequired('center', $this->center, true);
        Model::validateRequired('size', $this->size, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Angle']  = $this->angle;
        $res['Center'] = null !== $this->center ? $this->center->toMap() : null;
        $res['Size']   = null !== $this->size ? $this->size->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemRoi
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Center'])) {
            $model->center = center::fromMap($map['Center']);
        }
        if (isset($map['Size'])) {
            $model->size = size::fromMap($map['Size']);
        }

        return $model;
    }
}
