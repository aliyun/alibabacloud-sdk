<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsResponse\ipv6TranslatorAcls\IPv6TranslatorAcl;
use AlibabaCloud\Tea\Model;

class ipv6TranslatorAcls extends Model
{
    /**
     * @var array
     */
    public $IPv6TranslatorAcl;
    protected $_name = [
        'IPv6TranslatorAcl' => 'IPv6TranslatorAcl',
    ];

    public function validate()
    {
        Model::validateRequired('IPv6TranslatorAcl', $this->IPv6TranslatorAcl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPv6TranslatorAcl) {
            $res['IPv6TranslatorAcl'] = [];
            if (null !== $this->IPv6TranslatorAcl && \is_array($this->IPv6TranslatorAcl)) {
                $n = 0;
                foreach ($this->IPv6TranslatorAcl as $item) {
                    $res['IPv6TranslatorAcl'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6TranslatorAcls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPv6TranslatorAcl'])) {
            if (!empty($map['IPv6TranslatorAcl'])) {
                $model->IPv6TranslatorAcl = [];
                $n                        = 0;
                foreach ($map['IPv6TranslatorAcl'] as $item) {
                    $model->IPv6TranslatorAcl[$n++] = null !== $item ? IPv6TranslatorAcl::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
