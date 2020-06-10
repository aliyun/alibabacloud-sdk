<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse\domains\domain;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @description Domain
     *
     * @var array
     */
    public $domain;
    protected $_name = [
        'domain' => 'Domain',
    ];

    public function validate()
    {
        Model::validateRequired('domain', $this->domain, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = [];
            if (null !== $this->domain && \is_array($this->domain)) {
                $n = 0;
                foreach ($this->domain as $item) {
                    $res['Domain'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            if (!empty($map['Domain'])) {
                $model->domain = [];
                $n             = 0;
                foreach ($map['Domain'] as $item) {
                    $model->domain[$n++] = null !== $item ? domain::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
