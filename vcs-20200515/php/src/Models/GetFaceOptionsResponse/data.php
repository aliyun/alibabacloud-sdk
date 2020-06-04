<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceOptionsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceOptionsResponse\data\optionList;

class data extends Model {
    protected $_name = [
        'key' => 'Key',
        'name' => 'Name',
        'optionList' => 'OptionList',
    ];
    public function validate() {
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('optionList', $this->optionList, true);
    }
    public function toMap() {
        $res = [];
        $res['Key'] = $this->key;
        $res['Name'] = $this->name;
        $res['OptionList'] = [];
        if(null !== $this->optionList && is_array($this->optionList)){
            $n = 0;
            foreach($this->optionList as $item){
                $res['OptionList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Key'])){
            $model->key = $map['Key'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['OptionList'])){
            if(!empty($map['OptionList'])){
                $model->optionList = [];
                $n = 0;
                foreach($map['OptionList'] as $item) {
                    $model->optionList[$n++] = null !== $item ? optionList::fromMap($item) : $item;
                }
            }
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

    /**
     * @description optionList
     * @var array
     */
    public $optionList;

}
