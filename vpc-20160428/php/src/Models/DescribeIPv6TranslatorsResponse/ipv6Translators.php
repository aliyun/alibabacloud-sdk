<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponse\ipv6Translators\ipv6Translator;
use AlibabaCloud\Tea\Model;

class ipv6Translators extends Model
{
    /**
     * @var array
     */
    public $ipv6Translator;
    protected $_name = [
        'ipv6Translator' => 'Ipv6Translator',
    ];

    public function validate()
    {
        Model::validateRequired('ipv6Translator', $this->ipv6Translator, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6Translator) {
            $res['Ipv6Translator'] = [];
            if (null !== $this->ipv6Translator && \is_array($this->ipv6Translator)) {
                $n = 0;
                foreach ($this->ipv6Translator as $item) {
                    $res['Ipv6Translator'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6Translators
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Translator'])) {
            if (!empty($map['Ipv6Translator'])) {
                $model->ipv6Translator = [];
                $n                     = 0;
                foreach ($map['Ipv6Translator'] as $item) {
                    $model->ipv6Translator[$n++] = null !== $item ? ipv6Translator::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
