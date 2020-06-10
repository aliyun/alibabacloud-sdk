<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponse\slbSubDomains\slbSubDomain;
use AlibabaCloud\Tea\Model;

class slbSubDomains extends Model
{
    /**
     * @description SlbSubDomain
     *
     * @var array
     */
    public $slbSubDomain;
    protected $_name = [
        'slbSubDomain' => 'SlbSubDomain',
    ];

    public function validate()
    {
        Model::validateRequired('slbSubDomain', $this->slbSubDomain, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slbSubDomain) {
            $res['SlbSubDomain'] = [];
            if (null !== $this->slbSubDomain && \is_array($this->slbSubDomain)) {
                $n = 0;
                foreach ($this->slbSubDomain as $item) {
                    $res['SlbSubDomain'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slbSubDomains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlbSubDomain'])) {
            if (!empty($map['SlbSubDomain'])) {
                $model->slbSubDomain = [];
                $n                   = 0;
                foreach ($map['SlbSubDomain'] as $item) {
                    $model->slbSubDomain[$n++] = null !== $item ? slbSubDomain::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
