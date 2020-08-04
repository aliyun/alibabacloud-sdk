<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeChinapassportResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authority;

    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var string
     */
    public $birthDay;

    /**
     * @var string
     */
    public $birthPlace;

    /**
     * @var string
     */
    public $birthPlaceRaw;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $expiryDate;

    /**
     * @var string
     */
    public $expiryDay;

    /**
     * @var string
     */
    public $issueDate;

    /**
     * @var string
     */
    public $issuePlace;

    /**
     * @var string
     */
    public $issuePlaceRaw;

    /**
     * @var string
     */
    public $lineZero;

    /**
     * @var string
     */
    public $lineOne;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameChinese;

    /**
     * @var string
     */
    public $nameChineseRaw;

    /**
     * @var string
     */
    public $passportNo;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $sex;

    /**
     * @var string
     */
    public $sourceCountry;

    /**
     * @var bool
     */
    public $success;

    /**
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
        $res = [];
        if (null !== $this->authority) {
            $res['Authority'] = $this->authority;
        }
        if (null !== $this->birthDate) {
            $res['BirthDate'] = $this->birthDate;
        }
        if (null !== $this->birthDay) {
            $res['BirthDay'] = $this->birthDay;
        }
        if (null !== $this->birthPlace) {
            $res['BirthPlace'] = $this->birthPlace;
        }
        if (null !== $this->birthPlaceRaw) {
            $res['BirthPlaceRaw'] = $this->birthPlaceRaw;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->expiryDate) {
            $res['ExpiryDate'] = $this->expiryDate;
        }
        if (null !== $this->expiryDay) {
            $res['ExpiryDay'] = $this->expiryDay;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = $this->issueDate;
        }
        if (null !== $this->issuePlace) {
            $res['IssuePlace'] = $this->issuePlace;
        }
        if (null !== $this->issuePlaceRaw) {
            $res['IssuePlaceRaw'] = $this->issuePlaceRaw;
        }
        if (null !== $this->lineZero) {
            $res['LineZero'] = $this->lineZero;
        }
        if (null !== $this->lineOne) {
            $res['LineOne'] = $this->lineOne;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameChinese) {
            $res['NameChinese'] = $this->nameChinese;
        }
        if (null !== $this->nameChineseRaw) {
            $res['NameChineseRaw'] = $this->nameChineseRaw;
        }
        if (null !== $this->passportNo) {
            $res['PassportNo'] = $this->passportNo;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->sourceCountry) {
            $res['SourceCountry'] = $this->sourceCountry;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

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
