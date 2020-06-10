<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\ListReceiversResponse;

use AlibabaCloud\Tea\Model;

class receivers extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description emailCheckCode
     *
     * @var string
     */
    public $emailCheckCode;

    /**
     * @description mobileCheckCode
     *
     * @var string
     */
    public $mobileCheckCode;

    /**
     * @description dingTalk
     *
     * @var string
     */
    public $dingTalk;

    /**
     * @description mobile
     *
     * @var string
     */
    public $mobile;

    /**
     * @description source
     *
     * @var string
     */
    public $source;

    /**
     * @description deleted
     *
     * @var int
     */
    public $deleted;

    /**
     * @description email
     *
     * @var string
     */
    public $email;

    /**
     * @description wangwang
     *
     * @var string
     */
    public $wangwang;

    /**
     * @description uid
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'id'              => 'Id',
        'name'            => 'Name',
        'emailCheckCode'  => 'EmailCheckCode',
        'mobileCheckCode' => 'MobileCheckCode',
        'dingTalk'        => 'DingTalk',
        'mobile'          => 'Mobile',
        'source'          => 'Source',
        'deleted'         => 'Deleted',
        'email'           => 'Email',
        'wangwang'        => 'Wangwang',
        'uid'             => 'Uid',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('emailCheckCode', $this->emailCheckCode, true);
        Model::validateRequired('mobileCheckCode', $this->mobileCheckCode, true);
        Model::validateRequired('dingTalk', $this->dingTalk, true);
        Model::validateRequired('mobile', $this->mobile, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('deleted', $this->deleted, true);
        Model::validateRequired('email', $this->email, true);
        Model::validateRequired('wangwang', $this->wangwang, true);
        Model::validateRequired('uid', $this->uid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->emailCheckCode) {
            $res['EmailCheckCode'] = $this->emailCheckCode;
        }
        if (null !== $this->mobileCheckCode) {
            $res['MobileCheckCode'] = $this->mobileCheckCode;
        }
        if (null !== $this->dingTalk) {
            $res['DingTalk'] = $this->dingTalk;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->wangwang) {
            $res['Wangwang'] = $this->wangwang;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return receivers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EmailCheckCode'])) {
            $model->emailCheckCode = $map['EmailCheckCode'];
        }
        if (isset($map['MobileCheckCode'])) {
            $model->mobileCheckCode = $map['MobileCheckCode'];
        }
        if (isset($map['DingTalk'])) {
            $model->dingTalk = $map['DingTalk'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Wangwang'])) {
            $model->wangwang = $map['Wangwang'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
