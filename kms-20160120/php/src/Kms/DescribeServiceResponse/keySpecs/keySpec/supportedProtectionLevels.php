<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeServiceResponse\keySpecs\keySpec;

use AlibabaCloud\Tea\Model;

class supportedProtectionLevels extends Model
{
    /**
     * @description SupportedProtectionLevel
     *
     * @var array
     */
    public $supportedProtectionLevel;
    protected $_name = [
        'supportedProtectionLevel' => 'SupportedProtectionLevel',
    ];

    public function validate()
    {
        Model::validateRequired('supportedProtectionLevel', $this->supportedProtectionLevel, true);
    }

    public function toMap()
    {
        $res                             = [];
        $res['SupportedProtectionLevel'] = [];
        if (null !== $this->supportedProtectionLevel) {
            $res['SupportedProtectionLevel'] = $this->supportedProtectionLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedProtectionLevels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedProtectionLevel'])) {
            if (!empty($map['SupportedProtectionLevel'])) {
                $model->supportedProtectionLevel = [];
                $model->supportedProtectionLevel = $map['SupportedProtectionLevel'];
            }
        }

        return $model;
    }
}
