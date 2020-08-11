<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponse\ipv6Translators\ipv6Translator;

use AlibabaCloud\Tea\Model;

class ipv6TranslatorEntryIds extends Model
{
    /**
     * @description Ipv6TranslatorEntryId
     *
     * @var array
     */
    public $ipv6TranslatorEntryId;
    protected $_name = [
        'ipv6TranslatorEntryId' => 'Ipv6TranslatorEntryId',
    ];

    public function validate()
    {
        Model::validateRequired('ipv6TranslatorEntryId', $this->ipv6TranslatorEntryId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6TranslatorEntryId) {
            $res['Ipv6TranslatorEntryId'] = $this->ipv6TranslatorEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6TranslatorEntryIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6TranslatorEntryId'])) {
            if (!empty($map['Ipv6TranslatorEntryId'])) {
                $model->ipv6TranslatorEntryId = $map['Ipv6TranslatorEntryId'];
            }
        }

        return $model;
    }
}
