<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponse\signatures\signatureItem;
use AlibabaCloud\Tea\Model;

class signatures extends Model
{
    /**
     * @description SignatureItem
     *
     * @var array
     */
    public $signatureItem;
    protected $_name = [
        'signatureItem' => 'SignatureItem',
    ];

    public function validate()
    {
        Model::validateRequired('signatureItem', $this->signatureItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signatureItem) {
            $res['SignatureItem'] = [];
            if (null !== $this->signatureItem && \is_array($this->signatureItem)) {
                $n = 0;
                foreach ($this->signatureItem as $item) {
                    $res['SignatureItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignatureItem'])) {
            if (!empty($map['SignatureItem'])) {
                $model->signatureItem = [];
                $n                    = 0;
                foreach ($map['SignatureItem'] as $item) {
                    $model->signatureItem[$n++] = null !== $item ? signatureItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
