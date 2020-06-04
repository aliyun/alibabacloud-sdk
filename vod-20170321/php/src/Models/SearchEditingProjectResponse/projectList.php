<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponse\projectList\project;

class projectList extends Model {
    protected $_name = [
        'project' => 'Project',
    ];
    public function validate() {
        Model::validateRequired('project', $this->project, true);
    }
    public function toMap() {
        $res = [];
        $res['Project'] = [];
        if(null !== $this->project && is_array($this->project)){
            $n = 0;
            foreach($this->project as $item){
                $res['Project'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return projectList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Project'])){
            if(!empty($map['Project'])){
                $model->project = [];
                $n = 0;
                foreach($map['Project'] as $item) {
                    $model->project[$n++] = null !== $item ? project::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Project
     * @var array
     */
    public $project;

}
