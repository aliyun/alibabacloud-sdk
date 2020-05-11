<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusResponseBody;

use AlibabaCloud\Tea\Model;

class addonInfo extends Model
{
    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description category
     *
     * @var string
     */
    public $category;

    /**
     * @description yaml
     *
     * @var string
     */
    public $yaml;

    /**
     * @description component_name
     *
     * @var string
     */
    public $componentName;

    /**
     * @description version
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'message'       => 'message',
        'category'      => 'category',
        'yaml'          => 'yaml',
        'componentName' => 'component_name',
        'version'       => 'version',
    ];

    public function validate()
    {
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('yaml', $this->yaml, true);
        Model::validateRequired('componentName', $this->componentName, true);
        Model::validateRequired('version', $this->version, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['message']        = $this->message;
        $res['category']       = $this->category;
        $res['yaml']           = $this->yaml;
        $res['component_name'] = $this->componentName;
        $res['version']        = $this->version;

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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['yaml'])) {
            $model->yaml = $map['yaml'];
        }
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
