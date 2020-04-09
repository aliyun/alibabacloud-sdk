<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterAddonUpgradeStatusResponseBody\componentId;

use AlibabaCloud\Tea\Model;

class addonInfo extends Model
{
    /**
     * @description component_name
     *
     * @var string
     */
    public $componentName;
    /**
     * @description ready_to_upgrade
     *
     * @var string
     */
    public $readyToUpgrade;
    /**
     * @description message
     *
     * @var string
     */
    public $message;
    /**
     * @description version
     *
     * @var string
     */
    public $version;
    /**
     * @description yaml
     *
     * @var string
     */
    public $yaml;
    protected $_name = [
        'componentName'  => 'component_name',
        'readyToUpgrade' => 'ready_to_upgrade',
        'message'        => 'message',
        'version'        => 'version',
        'yaml'           => 'yaml',
    ];

    public function validate()
    {
        Model::validateRequired('componentName', $this->componentName, true);
        Model::validateRequired('readyToUpgrade', $this->readyToUpgrade, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('yaml', $this->yaml, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['component_name']   = $this->componentName;
        $res['ready_to_upgrade'] = $this->readyToUpgrade;
        $res['message']          = $this->message;
        $res['version']          = $this->version;
        $res['yaml']             = $this->yaml;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addonInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }
        if (isset($map['ready_to_upgrade'])) {
            $model->readyToUpgrade = $map['ready_to_upgrade'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['yaml'])) {
            $model->yaml = $map['yaml'];
        }

        return $model;
    }
}
