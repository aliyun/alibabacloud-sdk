<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceOptionsResponse\data;

use AlibabaCloud\Tea\Model;

class optionList extends Model {
    protected $_name = [
        'key' => 'Key',
        'name' => 'Name',
    ];
    public function validate() {
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        $res['Key'] = $this->key;
        $res['Name'] = $this->name;
        return $res;
    }
    /**
     * @param array $map
     * @return optionList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Key'])){
            $model->key = $map['Key'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        return $model;
    }
    /**
     * @description key
     * @var string
     */
    public $key;

    /**
     * @description name
     * @var string
     */
    public $name;

}
