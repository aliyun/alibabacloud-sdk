<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeChinapassportResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description authority
     *
     * @var string
     */
    public $authority;

    /**
     * @description birthDate
     *
     * @var string
     */
    public $birthDate;

    /**
     * @description birthDay
     *
     * @var string
     */
    public $birthDay;

    /**
     * @description birthPlace
     *
     * @var string
     */
    public $birthPlace;

    /**
     * @description birthPlaceRaw
     *
     * @var string
     */
    public $birthPlaceRaw;

    /**
     * @description country
     *
     * @var string
     */
    public $country;

    /**
     * @description expiryDate
     *
     * @var string
     */
    public $expiryDate;

    /**
     * @description expiryDay
     *
     * @var string
     */
    public $expiryDay;

    /**
     * @description issueDate
     *
     * @var string
     */
    public $issueDate;

    /**
     * @description issuePlace
     *
     * @var string
     */
    public $issuePlace;

    /**
     * @description issuePlaceRaw
     *
     * @var string
     */
    public $issuePlaceRaw;

    /**
     * @description lineZero
     *
     * @var string
     */
    public $lineZero;

    /**
     * @description lineOne
     *
     * @var string
     */
    public $lineOne;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description nameChinese
     *
     * @var string
     */
    public $nameChinese;

    /**
     * @description nameChineseRaw
     *
     * @var string
     */
    public $nameChineseRaw;

    /**
     * @description passportNo
     *
     * @var string
     */
    public $passportNo;

    /**
     * @description personId
     *
     * @var string
     */
    public $personId;

    /**
     * @description sex
     *
     * @var string
     */
    public $sex;

    /**
     * @description sourceCountry
     *
     * @var string
     */
    public $sourceCountry;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'authority'      => 'Authority',
        'birthDate'      => 'BirthDate',
        'birthDay'       => 'BirthDay',
        'birthPlace'     => 'BirthPlace',
        'birthPlaceRaw'  => 'BirthPlaceRaw',
        'country'        => 'Country',
        'expiryDate'     => 'ExpiryDate',
        'expiryDay'      => 'ExpiryDay',
        'issueDate'      => 'IssueDate',
        'issuePlace'     => 'IssuePlace',
        'issuePlaceRaw'  => 'IssuePlaceRaw',
        'lineZero'       => 'LineZero',
        'lineOne'        => 'LineOne',
        'name'           => 'Name',
        'nameChinese'    => 'NameChinese',
        'nameChineseRaw' => 'NameChineseRaw',
        'passportNo'     => 'PassportNo',
        'personId'       => 'PersonId',
        'sex'            => 'Sex',
        'sourceCountry'  => 'SourceCountry',
        'success'        => 'Success',
        'type'           => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('authority', $this->authority, true);
        Model::validateRequired('birthDate', $this->birthDate, true);
        Model::validateRequired('birthDay', $this->birthDay, true);
        Model::validateRequired('birthPlace', $this->birthPlace, true);
        Model::validateRequired('birthPlaceRaw', $this->birthPlaceRaw, true);
        Model::validateRequired('country', $this->country, true);
        Model::validateRequired('expiryDate', $this->expiryDate, true);
        Model::validateRequired('expiryDay', $this->expiryDay, true);
        Model::validateRequired('issueDate', $this->issueDate, true);
        Model::validateRequired('issuePlace', $this->issuePlace, true);
        Model::validateRequired('issuePlaceRaw', $this->issuePlaceRaw, true);
        Model::validateRequired('lineZero', $this->lineZero, true);
        Model::validateRequired('lineOne', $this->lineOne, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('nameChinese', $this->nameChinese, true);
        Model::validateRequired('nameChineseRaw', $this->nameChineseRaw, true);
        Model::validateRequired('passportNo', $this->passportNo, true);
        Model::validateRequired('personId', $this->personId, true);
        Model::validateRequired('sex', $this->sex, true);
        Model::validateRequired('sourceCountry', $this->sourceCountry, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['Authority']      = $this->authority;
        $res['BirthDate']      = $this->birthDate;
        $res['BirthDay']       = $this->birthDay;
        $res['BirthPlace']     = $this->birthPlace;
        $res['BirthPlaceRaw']  = $this->birthPlaceRaw;
        $res['Country']        = $this->country;
        $res['ExpiryDate']     = $this->expiryDate;
        $res['ExpiryDay']      = $this->expiryDay;
        $res['IssueDate']      = $this->issueDate;
        $res['IssuePlace']     = $this->issuePlace;
        $res['IssuePlaceRaw']  = $this->issuePlaceRaw;
        $res['LineZero']       = $this->lineZero;
        $res['LineOne']        = $this->lineOne;
        $res['Name']           = $this->name;
        $res['NameChinese']    = $this->nameChinese;
        $res['NameChineseRaw'] = $this->nameChineseRaw;
        $res['PassportNo']     = $this->passportNo;
        $res['PersonId']       = $this->personId;
        $res['Sex']            = $this->sex;
        $res['SourceCountry']  = $this->sourceCountry;
        $res['Success']        = $this->success;
        $res['Type']           = $this->type;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authority'])) {
            $model->authority = $map['Authority'];
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = $map['BirthDate'];
        }
        if (isset($map['BirthDay'])) {
            $model->birthDay = $map['BirthDay'];
        }
        if (isset($map['BirthPlace'])) {
            $model->birthPlace = $map['BirthPlace'];
        }
        if (isset($map['BirthPlaceRaw'])) {
            $model->birthPlaceRaw = $map['BirthPlaceRaw'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['ExpiryDate'])) {
            $model->expiryDate = $map['ExpiryDate'];
        }
        if (isset($map['ExpiryDay'])) {
            $model->expiryDay = $map['ExpiryDay'];
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = $map['IssueDate'];
        }
        if (isset($map['IssuePlace'])) {
            $model->issuePlace = $map['IssuePlace'];
        }
        if (isset($map['IssuePlaceRaw'])) {
            $model->issuePlaceRaw = $map['IssuePlaceRaw'];
        }
        if (isset($map['LineZero'])) {
            $model->lineZero = $map['LineZero'];
        }
        if (isset($map['LineOne'])) {
            $model->lineOne = $map['LineOne'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameChinese'])) {
            $model->nameChinese = $map['NameChinese'];
        }
        if (isset($map['NameChineseRaw'])) {
            $model->nameChineseRaw = $map['NameChineseRaw'];
        }
        if (isset($map['PassportNo'])) {
            $model->passportNo = $map['PassportNo'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['SourceCountry'])) {
            $model->sourceCountry = $map['SourceCountry'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
