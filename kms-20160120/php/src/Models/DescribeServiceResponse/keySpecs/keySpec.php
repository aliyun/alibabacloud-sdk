<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponse\keySpecs;

use AlibabaCloud\SDK\Kms\V20160120\Models\keySpec\supportedProtectionLevels;
use AlibabaCloud\SDK\Kms\V20160120\Models\keySpec\usages;
use AlibabaCloud\Tea\Model;

class keySpec extends Model
{
    /**
     * @description Name
     *
     * @var string
     */
    public $name;

    /**
     * @description SupportedProtectionLevels
     *
     * @var supportedProtectionLevels
     */
    public $supportedProtectionLevels;

    /**
     * @description Usages
     *
     * @var usages
     */
    public $usages;
    protected $_name = [
        'name'                      => 'Name',
        'supportedProtectionLevels' => 'SupportedProtectionLevels',
        'usages'                    => 'Usages',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('supportedProtectionLevels', $this->supportedProtectionLevels, true);
        Model::validateRequired('usages', $this->usages, true);
    }

    public function toMap()
    {
        $res                              = [];
        $res['Name']                      = $this->name;
        $res['SupportedProtectionLevels'] = null !== $this->supportedProtectionLevels ? $this->supportedProtectionLevels->toMap() : null;
        $res['Usages']                    = null !== $this->usages ? $this->usages->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keySpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SupportedProtectionLevels'])) {
            $model->supportedProtectionLevels = supportedProtectionLevels::fromMap($map['SupportedProtectionLevels']);
        }
        if (isset($map['Usages'])) {
            $model->usages = usages::fromMap($map['Usages']);
        }

        return $model;
    }
}
