// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type QuerySmsTemplateRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TemplateCode         *string `json:"TemplateCode" xml:"TemplateCode" require:"true"`
}

func (s QuerySmsTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s QuerySmsTemplateRequest) GoString() string {
	return s.String()
}

func (s *QuerySmsTemplateRequest) SetAccessKeyId(v string) *QuerySmsTemplateRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QuerySmsTemplateRequest) SetOwnerId(v int64) *QuerySmsTemplateRequest {
	s.OwnerId = &v
	return s
}

func (s *QuerySmsTemplateRequest) SetResourceOwnerAccount(v string) *QuerySmsTemplateRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QuerySmsTemplateRequest) SetResourceOwnerId(v int64) *QuerySmsTemplateRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QuerySmsTemplateRequest) SetTemplateCode(v string) *QuerySmsTemplateRequest {
	s.TemplateCode = &v
	return s
}

type QuerySmsTemplateResponse struct {
	RequestId       *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code            *string `json:"Code" xml:"Code" require:"true"`
	Message         *string `json:"Message" xml:"Message" require:"true"`
	TemplateStatus  *int    `json:"TemplateStatus" xml:"TemplateStatus" require:"true"`
	Reason          *string `json:"Reason" xml:"Reason" require:"true"`
	TemplateCode    *string `json:"TemplateCode" xml:"TemplateCode" require:"true"`
	TemplateType    *int    `json:"TemplateType" xml:"TemplateType" require:"true"`
	TemplateName    *string `json:"TemplateName" xml:"TemplateName" require:"true"`
	TemplateContent *string `json:"TemplateContent" xml:"TemplateContent" require:"true"`
	CreateDate      *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s QuerySmsTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s QuerySmsTemplateResponse) GoString() string {
	return s.String()
}

func (s *QuerySmsTemplateResponse) SetRequestId(v string) *QuerySmsTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *QuerySmsTemplateResponse) SetCode(v string) *QuerySmsTemplateResponse {
	s.Code = &v
	return s
}

func (s *QuerySmsTemplateResponse) SetMessage(v string) *QuerySmsTemplateResponse {
	s.Message = &v
	return s
}

func (s *QuerySmsTemplateResponse) SetTemplateStatus(v int) *QuerySmsTemplateResponse {
	s.TemplateStatus = &v
	return s
}

func (s *QuerySmsTemplateResponse) SetReason(v string) *QuerySmsTemplateResponse {
	s.Reason = &v
	return s
}

func (s *QuerySmsTemplateResponse) SetTemplateCode(v string) *QuerySmsTemplateResponse {
	s.TemplateCode = &v
	return s
}

func (s *QuerySmsTemplateResponse) SetTemplateType(v int) *QuerySmsTemplateResponse {
	s.TemplateType = &v
	return s
}

func (s *QuerySmsTemplateResponse) SetTemplateName(v string) *QuerySmsTemplateResponse {
	s.TemplateName = &v
	return s
}

func (s *QuerySmsTemplateResponse) SetTemplateContent(v string) *QuerySmsTemplateResponse {
	s.TemplateContent = &v
	return s
}

func (s *QuerySmsTemplateResponse) SetCreateDate(v string) *QuerySmsTemplateResponse {
	s.CreateDate = &v
	return s
}

type QuerySmsSignRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	SignName             *string `json:"SignName" xml:"SignName" require:"true"`
}

func (s QuerySmsSignRequest) String() string {
	return tea.Prettify(s)
}

func (s QuerySmsSignRequest) GoString() string {
	return s.String()
}

func (s *QuerySmsSignRequest) SetAccessKeyId(v string) *QuerySmsSignRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QuerySmsSignRequest) SetOwnerId(v int64) *QuerySmsSignRequest {
	s.OwnerId = &v
	return s
}

func (s *QuerySmsSignRequest) SetResourceOwnerAccount(v string) *QuerySmsSignRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QuerySmsSignRequest) SetResourceOwnerId(v int64) *QuerySmsSignRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QuerySmsSignRequest) SetSignName(v string) *QuerySmsSignRequest {
	s.SignName = &v
	return s
}

type QuerySmsSignResponse struct {
	RequestId  *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code       *string `json:"Code" xml:"Code" require:"true"`
	Message    *string `json:"Message" xml:"Message" require:"true"`
	SignStatus *int    `json:"SignStatus" xml:"SignStatus" require:"true"`
	Reason     *string `json:"Reason" xml:"Reason" require:"true"`
	SignName   *string `json:"SignName" xml:"SignName" require:"true"`
	CreateDate *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s QuerySmsSignResponse) String() string {
	return tea.Prettify(s)
}

func (s QuerySmsSignResponse) GoString() string {
	return s.String()
}

func (s *QuerySmsSignResponse) SetRequestId(v string) *QuerySmsSignResponse {
	s.RequestId = &v
	return s
}

func (s *QuerySmsSignResponse) SetCode(v string) *QuerySmsSignResponse {
	s.Code = &v
	return s
}

func (s *QuerySmsSignResponse) SetMessage(v string) *QuerySmsSignResponse {
	s.Message = &v
	return s
}

func (s *QuerySmsSignResponse) SetSignStatus(v int) *QuerySmsSignResponse {
	s.SignStatus = &v
	return s
}

func (s *QuerySmsSignResponse) SetReason(v string) *QuerySmsSignResponse {
	s.Reason = &v
	return s
}

func (s *QuerySmsSignResponse) SetSignName(v string) *QuerySmsSignResponse {
	s.SignName = &v
	return s
}

func (s *QuerySmsSignResponse) SetCreateDate(v string) *QuerySmsSignResponse {
	s.CreateDate = &v
	return s
}

type ModifySmsTemplateRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TemplateType         *int    `json:"TemplateType" xml:"TemplateType" require:"true"`
	TemplateName         *string `json:"TemplateName" xml:"TemplateName" require:"true"`
	TemplateCode         *string `json:"TemplateCode" xml:"TemplateCode" require:"true"`
	TemplateContent      *string `json:"TemplateContent" xml:"TemplateContent" require:"true"`
	Remark               *string `json:"Remark" xml:"Remark" require:"true"`
}

func (s ModifySmsTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifySmsTemplateRequest) GoString() string {
	return s.String()
}

func (s *ModifySmsTemplateRequest) SetAccessKeyId(v string) *ModifySmsTemplateRequest {
	s.AccessKeyId = &v
	return s
}

func (s *ModifySmsTemplateRequest) SetOwnerId(v int64) *ModifySmsTemplateRequest {
	s.OwnerId = &v
	return s
}

func (s *ModifySmsTemplateRequest) SetResourceOwnerAccount(v string) *ModifySmsTemplateRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *ModifySmsTemplateRequest) SetResourceOwnerId(v int64) *ModifySmsTemplateRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *ModifySmsTemplateRequest) SetTemplateType(v int) *ModifySmsTemplateRequest {
	s.TemplateType = &v
	return s
}

func (s *ModifySmsTemplateRequest) SetTemplateName(v string) *ModifySmsTemplateRequest {
	s.TemplateName = &v
	return s
}

func (s *ModifySmsTemplateRequest) SetTemplateCode(v string) *ModifySmsTemplateRequest {
	s.TemplateCode = &v
	return s
}

func (s *ModifySmsTemplateRequest) SetTemplateContent(v string) *ModifySmsTemplateRequest {
	s.TemplateContent = &v
	return s
}

func (s *ModifySmsTemplateRequest) SetRemark(v string) *ModifySmsTemplateRequest {
	s.Remark = &v
	return s
}

type ModifySmsTemplateResponse struct {
	RequestId    *string `json:"RequestId" xml:"RequestId" require:"true"`
	TemplateCode *string `json:"TemplateCode" xml:"TemplateCode" require:"true"`
	Code         *string `json:"Code" xml:"Code" require:"true"`
	Message      *string `json:"Message" xml:"Message" require:"true"`
}

func (s ModifySmsTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifySmsTemplateResponse) GoString() string {
	return s.String()
}

func (s *ModifySmsTemplateResponse) SetRequestId(v string) *ModifySmsTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *ModifySmsTemplateResponse) SetTemplateCode(v string) *ModifySmsTemplateResponse {
	s.TemplateCode = &v
	return s
}

func (s *ModifySmsTemplateResponse) SetCode(v string) *ModifySmsTemplateResponse {
	s.Code = &v
	return s
}

func (s *ModifySmsTemplateResponse) SetMessage(v string) *ModifySmsTemplateResponse {
	s.Message = &v
	return s
}

type ModifySmsSignRequest struct {
	AccessKeyId          *string                             `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64                              `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string                             `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64                              `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	SignName             *string                             `json:"SignName" xml:"SignName" require:"true"`
	SignSource           *int                                `json:"SignSource" xml:"SignSource" require:"true"`
	SignFileList         []*ModifySmsSignRequestSignFileList `json:"SignFileList" xml:"SignFileList" require:"true" type:"Repeated"`
	Remark               *string                             `json:"Remark" xml:"Remark" require:"true"`
}

func (s ModifySmsSignRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifySmsSignRequest) GoString() string {
	return s.String()
}

func (s *ModifySmsSignRequest) SetAccessKeyId(v string) *ModifySmsSignRequest {
	s.AccessKeyId = &v
	return s
}

func (s *ModifySmsSignRequest) SetOwnerId(v int64) *ModifySmsSignRequest {
	s.OwnerId = &v
	return s
}

func (s *ModifySmsSignRequest) SetResourceOwnerAccount(v string) *ModifySmsSignRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *ModifySmsSignRequest) SetResourceOwnerId(v int64) *ModifySmsSignRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *ModifySmsSignRequest) SetSignName(v string) *ModifySmsSignRequest {
	s.SignName = &v
	return s
}

func (s *ModifySmsSignRequest) SetSignSource(v int) *ModifySmsSignRequest {
	s.SignSource = &v
	return s
}

func (s *ModifySmsSignRequest) SetSignFileList(v []*ModifySmsSignRequestSignFileList) *ModifySmsSignRequest {
	s.SignFileList = v
	return s
}

func (s *ModifySmsSignRequest) SetRemark(v string) *ModifySmsSignRequest {
	s.Remark = &v
	return s
}

type ModifySmsSignRequestSignFileList struct {
	FileSuffix   *string `json:"FileSuffix" xml:"FileSuffix" require:"true"`
	FileContents *string `json:"FileContents" xml:"FileContents" require:"true"`
}

func (s ModifySmsSignRequestSignFileList) String() string {
	return tea.Prettify(s)
}

func (s ModifySmsSignRequestSignFileList) GoString() string {
	return s.String()
}

func (s *ModifySmsSignRequestSignFileList) SetFileSuffix(v string) *ModifySmsSignRequestSignFileList {
	s.FileSuffix = &v
	return s
}

func (s *ModifySmsSignRequestSignFileList) SetFileContents(v string) *ModifySmsSignRequestSignFileList {
	s.FileContents = &v
	return s
}

type ModifySmsSignResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	SignName  *string `json:"SignName" xml:"SignName" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s ModifySmsSignResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifySmsSignResponse) GoString() string {
	return s.String()
}

func (s *ModifySmsSignResponse) SetRequestId(v string) *ModifySmsSignResponse {
	s.RequestId = &v
	return s
}

func (s *ModifySmsSignResponse) SetSignName(v string) *ModifySmsSignResponse {
	s.SignName = &v
	return s
}

func (s *ModifySmsSignResponse) SetCode(v string) *ModifySmsSignResponse {
	s.Code = &v
	return s
}

func (s *ModifySmsSignResponse) SetMessage(v string) *ModifySmsSignResponse {
	s.Message = &v
	return s
}

type DeleteSmsTemplateRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TemplateCode         *string `json:"TemplateCode" xml:"TemplateCode" require:"true"`
}

func (s DeleteSmsTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteSmsTemplateRequest) GoString() string {
	return s.String()
}

func (s *DeleteSmsTemplateRequest) SetAccessKeyId(v string) *DeleteSmsTemplateRequest {
	s.AccessKeyId = &v
	return s
}

func (s *DeleteSmsTemplateRequest) SetOwnerId(v int64) *DeleteSmsTemplateRequest {
	s.OwnerId = &v
	return s
}

func (s *DeleteSmsTemplateRequest) SetResourceOwnerAccount(v string) *DeleteSmsTemplateRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *DeleteSmsTemplateRequest) SetResourceOwnerId(v int64) *DeleteSmsTemplateRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *DeleteSmsTemplateRequest) SetTemplateCode(v string) *DeleteSmsTemplateRequest {
	s.TemplateCode = &v
	return s
}

type DeleteSmsTemplateResponse struct {
	RequestId    *string `json:"RequestId" xml:"RequestId" require:"true"`
	TemplateCode *string `json:"TemplateCode" xml:"TemplateCode" require:"true"`
	Code         *string `json:"Code" xml:"Code" require:"true"`
	Message      *string `json:"Message" xml:"Message" require:"true"`
}

func (s DeleteSmsTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteSmsTemplateResponse) GoString() string {
	return s.String()
}

func (s *DeleteSmsTemplateResponse) SetRequestId(v string) *DeleteSmsTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteSmsTemplateResponse) SetTemplateCode(v string) *DeleteSmsTemplateResponse {
	s.TemplateCode = &v
	return s
}

func (s *DeleteSmsTemplateResponse) SetCode(v string) *DeleteSmsTemplateResponse {
	s.Code = &v
	return s
}

func (s *DeleteSmsTemplateResponse) SetMessage(v string) *DeleteSmsTemplateResponse {
	s.Message = &v
	return s
}

type DeleteSmsSignRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	SignName             *string `json:"SignName" xml:"SignName" require:"true"`
}

func (s DeleteSmsSignRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteSmsSignRequest) GoString() string {
	return s.String()
}

func (s *DeleteSmsSignRequest) SetAccessKeyId(v string) *DeleteSmsSignRequest {
	s.AccessKeyId = &v
	return s
}

func (s *DeleteSmsSignRequest) SetOwnerId(v int64) *DeleteSmsSignRequest {
	s.OwnerId = &v
	return s
}

func (s *DeleteSmsSignRequest) SetResourceOwnerAccount(v string) *DeleteSmsSignRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *DeleteSmsSignRequest) SetResourceOwnerId(v int64) *DeleteSmsSignRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *DeleteSmsSignRequest) SetSignName(v string) *DeleteSmsSignRequest {
	s.SignName = &v
	return s
}

type DeleteSmsSignResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	SignName  *string `json:"SignName" xml:"SignName" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s DeleteSmsSignResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteSmsSignResponse) GoString() string {
	return s.String()
}

func (s *DeleteSmsSignResponse) SetRequestId(v string) *DeleteSmsSignResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteSmsSignResponse) SetSignName(v string) *DeleteSmsSignResponse {
	s.SignName = &v
	return s
}

func (s *DeleteSmsSignResponse) SetCode(v string) *DeleteSmsSignResponse {
	s.Code = &v
	return s
}

func (s *DeleteSmsSignResponse) SetMessage(v string) *DeleteSmsSignResponse {
	s.Message = &v
	return s
}

type AddSmsTemplateRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TemplateType         *int    `json:"TemplateType" xml:"TemplateType" require:"true"`
	TemplateName         *string `json:"TemplateName" xml:"TemplateName" require:"true"`
	TemplateContent      *string `json:"TemplateContent" xml:"TemplateContent" require:"true"`
	Remark               *string `json:"Remark" xml:"Remark" require:"true"`
}

func (s AddSmsTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s AddSmsTemplateRequest) GoString() string {
	return s.String()
}

func (s *AddSmsTemplateRequest) SetAccessKeyId(v string) *AddSmsTemplateRequest {
	s.AccessKeyId = &v
	return s
}

func (s *AddSmsTemplateRequest) SetOwnerId(v int64) *AddSmsTemplateRequest {
	s.OwnerId = &v
	return s
}

func (s *AddSmsTemplateRequest) SetResourceOwnerAccount(v string) *AddSmsTemplateRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *AddSmsTemplateRequest) SetResourceOwnerId(v int64) *AddSmsTemplateRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *AddSmsTemplateRequest) SetTemplateType(v int) *AddSmsTemplateRequest {
	s.TemplateType = &v
	return s
}

func (s *AddSmsTemplateRequest) SetTemplateName(v string) *AddSmsTemplateRequest {
	s.TemplateName = &v
	return s
}

func (s *AddSmsTemplateRequest) SetTemplateContent(v string) *AddSmsTemplateRequest {
	s.TemplateContent = &v
	return s
}

func (s *AddSmsTemplateRequest) SetRemark(v string) *AddSmsTemplateRequest {
	s.Remark = &v
	return s
}

type AddSmsTemplateResponse struct {
	RequestId    *string `json:"RequestId" xml:"RequestId" require:"true"`
	TemplateCode *string `json:"TemplateCode" xml:"TemplateCode" require:"true"`
	Code         *string `json:"Code" xml:"Code" require:"true"`
	Message      *string `json:"Message" xml:"Message" require:"true"`
}

func (s AddSmsTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s AddSmsTemplateResponse) GoString() string {
	return s.String()
}

func (s *AddSmsTemplateResponse) SetRequestId(v string) *AddSmsTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *AddSmsTemplateResponse) SetTemplateCode(v string) *AddSmsTemplateResponse {
	s.TemplateCode = &v
	return s
}

func (s *AddSmsTemplateResponse) SetCode(v string) *AddSmsTemplateResponse {
	s.Code = &v
	return s
}

func (s *AddSmsTemplateResponse) SetMessage(v string) *AddSmsTemplateResponse {
	s.Message = &v
	return s
}

type AddSmsSignRequest struct {
	AccessKeyId          *string                          `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64                           `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string                          `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64                           `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	SignName             *string                          `json:"SignName" xml:"SignName" require:"true"`
	SignSource           *int                             `json:"SignSource" xml:"SignSource" require:"true"`
	SignFileList         []*AddSmsSignRequestSignFileList `json:"SignFileList" xml:"SignFileList" require:"true" type:"Repeated"`
	Remark               *string                          `json:"Remark" xml:"Remark" require:"true"`
}

func (s AddSmsSignRequest) String() string {
	return tea.Prettify(s)
}

func (s AddSmsSignRequest) GoString() string {
	return s.String()
}

func (s *AddSmsSignRequest) SetAccessKeyId(v string) *AddSmsSignRequest {
	s.AccessKeyId = &v
	return s
}

func (s *AddSmsSignRequest) SetOwnerId(v int64) *AddSmsSignRequest {
	s.OwnerId = &v
	return s
}

func (s *AddSmsSignRequest) SetResourceOwnerAccount(v string) *AddSmsSignRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *AddSmsSignRequest) SetResourceOwnerId(v int64) *AddSmsSignRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *AddSmsSignRequest) SetSignName(v string) *AddSmsSignRequest {
	s.SignName = &v
	return s
}

func (s *AddSmsSignRequest) SetSignSource(v int) *AddSmsSignRequest {
	s.SignSource = &v
	return s
}

func (s *AddSmsSignRequest) SetSignFileList(v []*AddSmsSignRequestSignFileList) *AddSmsSignRequest {
	s.SignFileList = v
	return s
}

func (s *AddSmsSignRequest) SetRemark(v string) *AddSmsSignRequest {
	s.Remark = &v
	return s
}

type AddSmsSignRequestSignFileList struct {
	FileSuffix   *string `json:"FileSuffix" xml:"FileSuffix" require:"true"`
	FileContents *string `json:"FileContents" xml:"FileContents" require:"true"`
}

func (s AddSmsSignRequestSignFileList) String() string {
	return tea.Prettify(s)
}

func (s AddSmsSignRequestSignFileList) GoString() string {
	return s.String()
}

func (s *AddSmsSignRequestSignFileList) SetFileSuffix(v string) *AddSmsSignRequestSignFileList {
	s.FileSuffix = &v
	return s
}

func (s *AddSmsSignRequestSignFileList) SetFileContents(v string) *AddSmsSignRequestSignFileList {
	s.FileContents = &v
	return s
}

type AddSmsSignResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	SignName  *string `json:"SignName" xml:"SignName" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s AddSmsSignResponse) String() string {
	return tea.Prettify(s)
}

func (s AddSmsSignResponse) GoString() string {
	return s.String()
}

func (s *AddSmsSignResponse) SetRequestId(v string) *AddSmsSignResponse {
	s.RequestId = &v
	return s
}

func (s *AddSmsSignResponse) SetSignName(v string) *AddSmsSignResponse {
	s.SignName = &v
	return s
}

func (s *AddSmsSignResponse) SetCode(v string) *AddSmsSignResponse {
	s.Code = &v
	return s
}

func (s *AddSmsSignResponse) SetMessage(v string) *AddSmsSignResponse {
	s.Message = &v
	return s
}

type SendBatchSmsRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PhoneNumberJson      *string `json:"PhoneNumberJson" xml:"PhoneNumberJson" require:"true"`
	SignNameJson         *string `json:"SignNameJson" xml:"SignNameJson" require:"true"`
	TemplateCode         *string `json:"TemplateCode" xml:"TemplateCode" require:"true"`
	TemplateParamJson    *string `json:"TemplateParamJson" xml:"TemplateParamJson"`
	SmsUpExtendCodeJson  *string `json:"SmsUpExtendCodeJson" xml:"SmsUpExtendCodeJson"`
}

func (s SendBatchSmsRequest) String() string {
	return tea.Prettify(s)
}

func (s SendBatchSmsRequest) GoString() string {
	return s.String()
}

func (s *SendBatchSmsRequest) SetAccessKeyId(v string) *SendBatchSmsRequest {
	s.AccessKeyId = &v
	return s
}

func (s *SendBatchSmsRequest) SetOwnerId(v int64) *SendBatchSmsRequest {
	s.OwnerId = &v
	return s
}

func (s *SendBatchSmsRequest) SetResourceOwnerAccount(v string) *SendBatchSmsRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *SendBatchSmsRequest) SetResourceOwnerId(v int64) *SendBatchSmsRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *SendBatchSmsRequest) SetPhoneNumberJson(v string) *SendBatchSmsRequest {
	s.PhoneNumberJson = &v
	return s
}

func (s *SendBatchSmsRequest) SetSignNameJson(v string) *SendBatchSmsRequest {
	s.SignNameJson = &v
	return s
}

func (s *SendBatchSmsRequest) SetTemplateCode(v string) *SendBatchSmsRequest {
	s.TemplateCode = &v
	return s
}

func (s *SendBatchSmsRequest) SetTemplateParamJson(v string) *SendBatchSmsRequest {
	s.TemplateParamJson = &v
	return s
}

func (s *SendBatchSmsRequest) SetSmsUpExtendCodeJson(v string) *SendBatchSmsRequest {
	s.SmsUpExtendCodeJson = &v
	return s
}

type SendBatchSmsResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	BizId     *string `json:"BizId" xml:"BizId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s SendBatchSmsResponse) String() string {
	return tea.Prettify(s)
}

func (s SendBatchSmsResponse) GoString() string {
	return s.String()
}

func (s *SendBatchSmsResponse) SetRequestId(v string) *SendBatchSmsResponse {
	s.RequestId = &v
	return s
}

func (s *SendBatchSmsResponse) SetBizId(v string) *SendBatchSmsResponse {
	s.BizId = &v
	return s
}

func (s *SendBatchSmsResponse) SetCode(v string) *SendBatchSmsResponse {
	s.Code = &v
	return s
}

func (s *SendBatchSmsResponse) SetMessage(v string) *SendBatchSmsResponse {
	s.Message = &v
	return s
}

type SendSmsRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PhoneNumbers         *string `json:"PhoneNumbers" xml:"PhoneNumbers" require:"true"`
	SignName             *string `json:"SignName" xml:"SignName" require:"true"`
	TemplateCode         *string `json:"TemplateCode" xml:"TemplateCode" require:"true"`
	TemplateParam        *string `json:"TemplateParam" xml:"TemplateParam"`
	SmsUpExtendCode      *string `json:"SmsUpExtendCode" xml:"SmsUpExtendCode"`
	OutId                *string `json:"OutId" xml:"OutId"`
}

func (s SendSmsRequest) String() string {
	return tea.Prettify(s)
}

func (s SendSmsRequest) GoString() string {
	return s.String()
}

func (s *SendSmsRequest) SetAccessKeyId(v string) *SendSmsRequest {
	s.AccessKeyId = &v
	return s
}

func (s *SendSmsRequest) SetOwnerId(v int64) *SendSmsRequest {
	s.OwnerId = &v
	return s
}

func (s *SendSmsRequest) SetResourceOwnerAccount(v string) *SendSmsRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *SendSmsRequest) SetResourceOwnerId(v int64) *SendSmsRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *SendSmsRequest) SetPhoneNumbers(v string) *SendSmsRequest {
	s.PhoneNumbers = &v
	return s
}

func (s *SendSmsRequest) SetSignName(v string) *SendSmsRequest {
	s.SignName = &v
	return s
}

func (s *SendSmsRequest) SetTemplateCode(v string) *SendSmsRequest {
	s.TemplateCode = &v
	return s
}

func (s *SendSmsRequest) SetTemplateParam(v string) *SendSmsRequest {
	s.TemplateParam = &v
	return s
}

func (s *SendSmsRequest) SetSmsUpExtendCode(v string) *SendSmsRequest {
	s.SmsUpExtendCode = &v
	return s
}

func (s *SendSmsRequest) SetOutId(v string) *SendSmsRequest {
	s.OutId = &v
	return s
}

type SendSmsResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	BizId     *string `json:"BizId" xml:"BizId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s SendSmsResponse) String() string {
	return tea.Prettify(s)
}

func (s SendSmsResponse) GoString() string {
	return s.String()
}

func (s *SendSmsResponse) SetRequestId(v string) *SendSmsResponse {
	s.RequestId = &v
	return s
}

func (s *SendSmsResponse) SetBizId(v string) *SendSmsResponse {
	s.BizId = &v
	return s
}

func (s *SendSmsResponse) SetCode(v string) *SendSmsResponse {
	s.Code = &v
	return s
}

func (s *SendSmsResponse) SetMessage(v string) *SendSmsResponse {
	s.Message = &v
	return s
}

type QuerySendDetailsRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PhoneNumber          *string `json:"PhoneNumber" xml:"PhoneNumber" require:"true"`
	BizId                *string `json:"BizId" xml:"BizId"`
	SendDate             *string `json:"SendDate" xml:"SendDate" require:"true"`
	PageSize             *int64  `json:"PageSize" xml:"PageSize" require:"true"`
	CurrentPage          *int64  `json:"CurrentPage" xml:"CurrentPage" require:"true"`
}

func (s QuerySendDetailsRequest) String() string {
	return tea.Prettify(s)
}

func (s QuerySendDetailsRequest) GoString() string {
	return s.String()
}

func (s *QuerySendDetailsRequest) SetAccessKeyId(v string) *QuerySendDetailsRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QuerySendDetailsRequest) SetOwnerId(v int64) *QuerySendDetailsRequest {
	s.OwnerId = &v
	return s
}

func (s *QuerySendDetailsRequest) SetResourceOwnerAccount(v string) *QuerySendDetailsRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QuerySendDetailsRequest) SetResourceOwnerId(v int64) *QuerySendDetailsRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QuerySendDetailsRequest) SetPhoneNumber(v string) *QuerySendDetailsRequest {
	s.PhoneNumber = &v
	return s
}

func (s *QuerySendDetailsRequest) SetBizId(v string) *QuerySendDetailsRequest {
	s.BizId = &v
	return s
}

func (s *QuerySendDetailsRequest) SetSendDate(v string) *QuerySendDetailsRequest {
	s.SendDate = &v
	return s
}

func (s *QuerySendDetailsRequest) SetPageSize(v int64) *QuerySendDetailsRequest {
	s.PageSize = &v
	return s
}

func (s *QuerySendDetailsRequest) SetCurrentPage(v int64) *QuerySendDetailsRequest {
	s.CurrentPage = &v
	return s
}

type QuerySendDetailsResponse struct {
	RequestId         *string                                    `json:"RequestId" xml:"RequestId" require:"true"`
	Code              *string                                    `json:"Code" xml:"Code" require:"true"`
	Message           *string                                    `json:"Message" xml:"Message" require:"true"`
	TotalCount        *string                                    `json:"TotalCount" xml:"TotalCount" require:"true"`
	SmsSendDetailDTOs *QuerySendDetailsResponseSmsSendDetailDTOs `json:"SmsSendDetailDTOs" xml:"SmsSendDetailDTOs" require:"true" type:"Struct"`
}

func (s QuerySendDetailsResponse) String() string {
	return tea.Prettify(s)
}

func (s QuerySendDetailsResponse) GoString() string {
	return s.String()
}

func (s *QuerySendDetailsResponse) SetRequestId(v string) *QuerySendDetailsResponse {
	s.RequestId = &v
	return s
}

func (s *QuerySendDetailsResponse) SetCode(v string) *QuerySendDetailsResponse {
	s.Code = &v
	return s
}

func (s *QuerySendDetailsResponse) SetMessage(v string) *QuerySendDetailsResponse {
	s.Message = &v
	return s
}

func (s *QuerySendDetailsResponse) SetTotalCount(v string) *QuerySendDetailsResponse {
	s.TotalCount = &v
	return s
}

func (s *QuerySendDetailsResponse) SetSmsSendDetailDTOs(v *QuerySendDetailsResponseSmsSendDetailDTOs) *QuerySendDetailsResponse {
	s.SmsSendDetailDTOs = v
	return s
}

type QuerySendDetailsResponseSmsSendDetailDTOs struct {
	SmsSendDetailDTO []*QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO `json:"SmsSendDetailDTO" xml:"SmsSendDetailDTO" require:"true" type:"Repeated"`
}

func (s QuerySendDetailsResponseSmsSendDetailDTOs) String() string {
	return tea.Prettify(s)
}

func (s QuerySendDetailsResponseSmsSendDetailDTOs) GoString() string {
	return s.String()
}

func (s *QuerySendDetailsResponseSmsSendDetailDTOs) SetSmsSendDetailDTO(v []*QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) *QuerySendDetailsResponseSmsSendDetailDTOs {
	s.SmsSendDetailDTO = v
	return s
}

type QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO struct {
	PhoneNum     *string `json:"PhoneNum" xml:"PhoneNum" require:"true"`
	SendStatus   *int64  `json:"SendStatus" xml:"SendStatus" require:"true"`
	ErrCode      *string `json:"ErrCode" xml:"ErrCode" require:"true"`
	TemplateCode *string `json:"TemplateCode" xml:"TemplateCode" require:"true"`
	Content      *string `json:"Content" xml:"Content" require:"true"`
	SendDate     *string `json:"SendDate" xml:"SendDate" require:"true"`
	ReceiveDate  *string `json:"ReceiveDate" xml:"ReceiveDate" require:"true"`
	OutId        *string `json:"OutId" xml:"OutId" require:"true"`
}

func (s QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) String() string {
	return tea.Prettify(s)
}

func (s QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) GoString() string {
	return s.String()
}

func (s *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) SetPhoneNum(v string) *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO {
	s.PhoneNum = &v
	return s
}

func (s *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) SetSendStatus(v int64) *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO {
	s.SendStatus = &v
	return s
}

func (s *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) SetErrCode(v string) *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO {
	s.ErrCode = &v
	return s
}

func (s *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) SetTemplateCode(v string) *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO {
	s.TemplateCode = &v
	return s
}

func (s *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) SetContent(v string) *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO {
	s.Content = &v
	return s
}

func (s *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) SetSendDate(v string) *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO {
	s.SendDate = &v
	return s
}

func (s *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) SetReceiveDate(v string) *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO {
	s.ReceiveDate = &v
	return s
}

func (s *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO) SetOutId(v string) *QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO {
	s.OutId = &v
	return s
}

type Client struct {
	rpc.Client
}

func NewClient(config *rpc.Config) (*Client, error) {
	client := new(Client)
	err := client.Init(config)
	return client, err
}

func (client *Client) Init(config *rpc.Config) (_err error) {
	_err = client.Client.Init(config)
	if _err != nil {
		return _err
	}
	client.EndpointRule = "central"
	client.EndpointMap = map[string]string{
		"ap-northeast-1":     "dysmsapi.ap-southeast-1.aliyuncs.com",
		"ap-northeast-2-pop": "dysmsapi.ap-southeast-1.aliyuncs.com",
		"ap-south-1":         "dysmsapi.ap-southeast-1.aliyuncs.com",
		"ap-southeast-1":     "dysmsapi.ap-southeast-1.aliyuncs.com",
		"ap-southeast-2":     "dysmsapi.ap-southeast-1.aliyuncs.com",
		"ap-southeast-3":     "dysmsapi.ap-southeast-1.aliyuncs.com",
		"ap-southeast-5":     "dysmsapi.ap-southeast-1.aliyuncs.com",
		"cn-beijing":         "dysmsapi-proxy.cn-beijing.aliyuncs.com",
		"eu-central-1":       "dysmsapi.ap-southeast-1.aliyuncs.com",
		"eu-west-1":          "dysmsapi.ap-southeast-1.aliyuncs.com",
		"eu-west-1-oxs":      "dysmsapi.ap-southeast-1.aliyuncs.com",
		"me-east-1":          "dysmsapi.ap-southeast-1.aliyuncs.com",
		"rus-west-1-pop":     "dysmsapi.ap-southeast-1.aliyuncs.com",
		"us-east-1":          "dysmsapi.ap-southeast-1.aliyuncs.com",
		"us-west-1":          "dysmsapi.ap-southeast-1.aliyuncs.com",
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return
	}
	client.Endpoint, _err = client.GetEndpoint(client.ProductId, client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) QuerySmsTemplate(request *QuerySmsTemplateRequest, runtime *util.RuntimeOptions) (_result *QuerySmsTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &QuerySmsTemplateResponse{}
	_body, _err := client.DoRequest("QuerySmsTemplate", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QuerySmsSign(request *QuerySmsSignRequest, runtime *util.RuntimeOptions) (_result *QuerySmsSignResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &QuerySmsSignResponse{}
	_body, _err := client.DoRequest("QuerySmsSign", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifySmsTemplate(request *ModifySmsTemplateRequest, runtime *util.RuntimeOptions) (_result *ModifySmsTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &ModifySmsTemplateResponse{}
	_body, _err := client.DoRequest("ModifySmsTemplate", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifySmsSign(request *ModifySmsSignRequest, runtime *util.RuntimeOptions) (_result *ModifySmsSignResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &ModifySmsSignResponse{}
	_body, _err := client.DoRequest("ModifySmsSign", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteSmsTemplate(request *DeleteSmsTemplateRequest, runtime *util.RuntimeOptions) (_result *DeleteSmsTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &DeleteSmsTemplateResponse{}
	_body, _err := client.DoRequest("DeleteSmsTemplate", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteSmsSign(request *DeleteSmsSignRequest, runtime *util.RuntimeOptions) (_result *DeleteSmsSignResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &DeleteSmsSignResponse{}
	_body, _err := client.DoRequest("DeleteSmsSign", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddSmsTemplate(request *AddSmsTemplateRequest, runtime *util.RuntimeOptions) (_result *AddSmsTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &AddSmsTemplateResponse{}
	_body, _err := client.DoRequest("AddSmsTemplate", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddSmsSign(request *AddSmsSignRequest, runtime *util.RuntimeOptions) (_result *AddSmsSignResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &AddSmsSignResponse{}
	_body, _err := client.DoRequest("AddSmsSign", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SendBatchSms(request *SendBatchSmsRequest, runtime *util.RuntimeOptions) (_result *SendBatchSmsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &SendBatchSmsResponse{}
	_body, _err := client.DoRequest("SendBatchSms", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SendSms(request *SendSmsRequest, runtime *util.RuntimeOptions) (_result *SendSmsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &SendSmsResponse{}
	_body, _err := client.DoRequest("SendSms", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QuerySendDetails(request *QuerySendDetailsRequest, runtime *util.RuntimeOptions) (_result *QuerySendDetailsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &QuerySendDetailsResponse{}
	_body, _err := client.DoRequest("QuerySendDetails", "HTTPS", "GET", "2017-05-25", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetEndpoint(productId string, regionId string, endpointRule string, network string, suffix string, endpointMap map[string]string, endpoint string) (_result string, _err error) {
	if !util.Empty(endpoint) {
		_result = endpoint
		return _result, _err
	}

	if !util.Empty(endpointMap[regionId]) {
		return _result, _err
	}

	_body, _err := endpointutil.GetEndpointRules(productId, regionId, endpointRule, network, suffix)
	if _err != nil {
		return "", _err
	}
	_result = _body
	return _result, _err
}
