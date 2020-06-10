<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsResponse\domainTransfers\domainTransfer;
use AlibabaCloud\Tea\Model;

class domainTransfers extends Model
{
    /**
     * @description DomainTransfer
     *
     * @var array
     */
    public $domainTransfer;
    protected $_name = [
        'domainTransfer' => 'DomainTransfer',
    ];

    public function validate()
    {
        Model::validateRequired('domainTransfer', $this->domainTransfer, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainTransfer) {
            $res['DomainTransfer'] = [];
            if (null !== $this->domainTransfer && \is_array($this->domainTransfer)) {
                $n = 0;
                foreach ($this->domainTransfer as $item) {
                    $res['DomainTransfer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainTransfers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainTransfer'])) {
            if (!empty($map['DomainTransfer'])) {
                $model->domainTransfer = [];
                $n                     = 0;
                foreach ($map['DomainTransfer'] as $item) {
                    $model->domainTransfer[$n++] = null !== $item ? domainTransfer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
