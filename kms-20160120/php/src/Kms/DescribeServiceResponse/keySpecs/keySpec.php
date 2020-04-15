<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeServiceResponse\keySpecs;

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
     * @var array
     */
    public $supportedProtectionLevels;
    /**
     * @description Usages
     *
     * @var array
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
        $res['SupportedProtectionLevels'] = [];
        if (null !== $this->supportedProtectionLevels && \is_array($this->supportedProtectionLevels)) {
            $n = 0;
            foreach ($this->supportedProtectionLevels as $item) {
                $res['SupportedProtectionLevels'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Usages'] = [];
        if (null !== $this->usages && \is_array($this->usages)) {
            $n = 0;
            foreach ($this->usages as $item) {
                $res['Usages'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

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
            if (!empty($map['SupportedProtectionLevels'])) {
                $model->supportedProtectionLevels = [];
                $n                                = 0;
                foreach ($map['SupportedProtectionLevels'] as $item) {
                    $model->supportedProtectionLevels[$n++] = null !== $item ? DescribeServiceResponse\keySpecs\keySpec\supportedProtectionLevels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Usages'])) {
            if (!empty($map['Usages'])) {
                $model->usages = [];
                $n             = 0;
                foreach ($map['Usages'] as $item) {
                    $model->usages[$n++] = null !== $item ? DescribeServiceResponse\keySpecs\keySpec\usages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
