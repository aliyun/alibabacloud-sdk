<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsBody\options;

class DescribeClusterAttachScriptsBody extends Model {
    protected $_name = [
        'options' => 'options',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['options'] = null !== $this->options ? $this->options->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeClusterAttachScriptsBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['options'])){
            $model->options = options::fromMap($map['options']);
        }
        return $model;
    }
    /**
     * @description options
     * @var options
     */
    public $options;

}
