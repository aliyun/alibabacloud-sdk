// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type QuerySmsTemplateRequest struct {
	TemplateCode *string `json:"TemplateCode,omitempty" xml:"TemplateCode,omitempty" require:"true"`
}

func (s QuerySmsTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s QuerySmsTemplateRequest) GoString() string {
	return s.String()
}

func (s *QuerySmsTemplateRequest) SetTemplateCode(v string) *QuerySmsTemplateRequest {
	s.TemplateCode = &v
	return s
}

type QuerySmsTemplateResponse struct {
	RequestId       *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code            *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message         *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	TemplateStatus  *int    `json:"TemplateStatus,omitempty" xml:"TemplateStatus,omitempty" require:"true"`
	Reason          *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
	TemplateCode    *string `json:"TemplateCode,omitempty" xml:"TemplateCode,omitempty" require:"true"`
	TemplateType    *int    `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	TemplateName    *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	TemplateContent *string `json:"TemplateContent,omitempty" xml:"TemplateContent,omitempty" require:"true"`
	CreateDate      *string `json:"CreateDate,omitempty" xml:"CreateDate,omitempty" require:"true"`
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
	SignName *string `json:"SignName,omitempty" xml:"SignName,omitempty" require:"true"`
}

func (s QuerySmsSignRequest) String() string {
	return tea.Prettify(s)
}

func (s QuerySmsSignRequest) GoString() string {
	return s.String()
}

func (s *QuerySmsSignRequest) SetSignName(v string) *QuerySmsSignRequest {
	s.SignName = &v
	return s
}

type QuerySmsSignResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code       *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message    *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	SignStatus *int    `json:"SignStatus,omitempty" xml:"SignStatus,omitempty" require:"true"`
	Reason     *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
	SignName   *string `json:"SignName,omitempty" xml:"SignName,omitempty" require:"true"`
	CreateDate *string `json:"CreateDate,omitempty" xml:"CreateDate,omitempty" require:"true"`
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
	TemplateType    *int    `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	TemplateName    *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	TemplateCode    *string `json:"TemplateCode,omitempty" xml:"TemplateCode,omitempty" require:"true"`
	TemplateContent *string `json:"TemplateContent,omitempty" xml:"TemplateContent,omitempty" require:"true"`
	Remark          *string `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
}

func (s ModifySmsTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifySmsTemplateRequest) GoString() string {
	return s.String()
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
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateCode *string `json:"TemplateCode,omitempty" xml:"TemplateCode,omitempty" require:"true"`
	Code         *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message      *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
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
	SignName     *string                             `json:"SignName,omitempty" xml:"SignName,omitempty" require:"true"`
	SignSource   *int                                `json:"SignSource,omitempty" xml:"SignSource,omitempty" require:"true"`
	SignFileList []*ModifySmsSignRequestSignFileList `json:"SignFileList,omitempty" xml:"SignFileList,omitempty" require:"true" type:"Repeated"`
	Remark       *string                             `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
}

func (s ModifySmsSignRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifySmsSignRequest) GoString() string {
	return s.String()
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
	FileSuffix   *string `json:"FileSuffix,omitempty" xml:"FileSuffix,omitempty" require:"true"`
	FileContents *string `json:"FileContents,omitempty" xml:"FileContents,omitempty" require:"true"`
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
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SignName  *string `json:"SignName,omitempty" xml:"SignName,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
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
	TemplateCode *string `json:"TemplateCode,omitempty" xml:"TemplateCode,omitempty" require:"true"`
}

func (s DeleteSmsTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteSmsTemplateRequest) GoString() string {
	return s.String()
}

func (s *DeleteSmsTemplateRequest) SetTemplateCode(v string) *DeleteSmsTemplateRequest {
	s.TemplateCode = &v
	return s
}

type DeleteSmsTemplateResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateCode *string `json:"TemplateCode,omitempty" xml:"TemplateCode,omitempty" require:"true"`
	Code         *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message      *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
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
	SignName *string `json:"SignName,omitempty" xml:"SignName,omitempty" require:"true"`
}

func (s DeleteSmsSignRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteSmsSignRequest) GoString() string {
	return s.String()
}

func (s *DeleteSmsSignRequest) SetSignName(v string) *DeleteSmsSignRequest {
	s.SignName = &v
	return s
}

type DeleteSmsSignResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SignName  *string `json:"SignName,omitempty" xml:"SignName,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
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
	TemplateType    *int    `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	TemplateName    *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	TemplateContent *string `json:"TemplateContent,omitempty" xml:"TemplateContent,omitempty" require:"true"`
	Remark          *string `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
}

func (s AddSmsTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s AddSmsTemplateRequest) GoString() string {
	return s.String()
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
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateCode *string `json:"TemplateCode,omitempty" xml:"TemplateCode,omitempty" require:"true"`
	Code         *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message      *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
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
	SignName     *string                          `json:"SignName,omitempty" xml:"SignName,omitempty" require:"true"`
	SignSource   *int                             `json:"SignSource,omitempty" xml:"SignSource,omitempty" require:"true"`
	SignFileList []*AddSmsSignRequestSignFileList `json:"SignFileList,omitempty" xml:"SignFileList,omitempty" require:"true" type:"Repeated"`
	Remark       *string                          `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
}

func (s AddSmsSignRequest) String() string {
	return tea.Prettify(s)
}

func (s AddSmsSignRequest) GoString() string {
	return s.String()
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
	FileSuffix   *string `json:"FileSuffix,omitempty" xml:"FileSuffix,omitempty" require:"true"`
	FileContents *string `json:"FileContents,omitempty" xml:"FileContents,omitempty" require:"true"`
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
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SignName  *string `json:"SignName,omitempty" xml:"SignName,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
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
	PhoneNumberJson     *string `json:"PhoneNumberJson,omitempty" xml:"PhoneNumberJson,omitempty" require:"true"`
	SignNameJson        *string `json:"SignNameJson,omitempty" xml:"SignNameJson,omitempty" require:"true"`
	TemplateCode        *string `json:"TemplateCode,omitempty" xml:"TemplateCode,omitempty" require:"true"`
	TemplateParamJson   *string `json:"TemplateParamJson,omitempty" xml:"TemplateParamJson,omitempty"`
	SmsUpExtendCodeJson *string `json:"SmsUpExtendCodeJson,omitempty" xml:"SmsUpExtendCodeJson,omitempty"`
}

func (s SendBatchSmsRequest) String() string {
	return tea.Prettify(s)
}

func (s SendBatchSmsRequest) GoString() string {
	return s.String()
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
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	BizId     *string `json:"BizId,omitempty" xml:"BizId,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
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
	PhoneNumbers    *string `json:"PhoneNumbers,omitempty" xml:"PhoneNumbers,omitempty" require:"true"`
	SignName        *string `json:"SignName,omitempty" xml:"SignName,omitempty" require:"true"`
	TemplateCode    *string `json:"TemplateCode,omitempty" xml:"TemplateCode,omitempty" require:"true"`
	TemplateParam   *string `json:"TemplateParam,omitempty" xml:"TemplateParam,omitempty"`
	SmsUpExtendCode *string `json:"SmsUpExtendCode,omitempty" xml:"SmsUpExtendCode,omitempty"`
	OutId           *string `json:"OutId,omitempty" xml:"OutId,omitempty"`
}

func (s SendSmsRequest) String() string {
	return tea.Prettify(s)
}

func (s SendSmsRequest) GoString() string {
	return s.String()
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
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	BizId     *string `json:"BizId,omitempty" xml:"BizId,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
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
	PhoneNumber *string `json:"PhoneNumber,omitempty" xml:"PhoneNumber,omitempty" require:"true"`
	BizId       *string `json:"BizId,omitempty" xml:"BizId,omitempty"`
	SendDate    *string `json:"SendDate,omitempty" xml:"SendDate,omitempty" require:"true"`
	PageSize    *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	CurrentPage *int64  `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty" require:"true"`
}

func (s QuerySendDetailsRequest) String() string {
	return tea.Prettify(s)
}

func (s QuerySendDetailsRequest) GoString() string {
	return s.String()
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
	RequestId         *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code              *string                                    `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message           *string                                    `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	TotalCount        *string                                    `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	SmsSendDetailDTOs *QuerySendDetailsResponseSmsSendDetailDTOs `json:"SmsSendDetailDTOs,omitempty" xml:"SmsSendDetailDTOs,omitempty" require:"true" type:"Struct"`
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
	SmsSendDetailDTO []*QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO `json:"SmsSendDetailDTO,omitempty" xml:"SmsSendDetailDTO,omitempty" require:"true" type:"Repeated"`
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
	PhoneNum     *string `json:"PhoneNum,omitempty" xml:"PhoneNum,omitempty" require:"true"`
	SendStatus   *int64  `json:"SendStatus,omitempty" xml:"SendStatus,omitempty" require:"true"`
	ErrCode      *string `json:"ErrCode,omitempty" xml:"ErrCode,omitempty" require:"true"`
	TemplateCode *string `json:"TemplateCode,omitempty" xml:"TemplateCode,omitempty" require:"true"`
	Content      *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	SendDate     *string `json:"SendDate,omitempty" xml:"SendDate,omitempty" require:"true"`
	ReceiveDate  *string `json:"ReceiveDate,omitempty" xml:"ReceiveDate,omitempty" require:"true"`
	OutId        *string `json:"OutId,omitempty" xml:"OutId,omitempty" require:"true"`
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
	client.EndpointRule = tea.String("central")
	client.EndpointMap = map[string]*string{
		"ap-northeast-1":     tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"ap-northeast-2-pop": tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"ap-south-1":         tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-1":     tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-2":     tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-3":     tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-5":     tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"cn-beijing":         tea.String("dysmsapi-proxy.cn-beijing.aliyuncs.com"),
		"eu-central-1":       tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"eu-west-1":          tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"eu-west-1-oxs":      tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"me-east-1":          tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"rus-west-1-pop":     tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"us-east-1":          tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
		"us-west-1":          tea.String("dysmsapi.ap-southeast-1.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("dysmsapi"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) QuerySmsTemplateWithOptions(request *QuerySmsTemplateRequest, runtime *util.RuntimeOptions) (_result *QuerySmsTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QuerySmsTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("QuerySmsTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QuerySmsTemplate(request *QuerySmsTemplateRequest) (_result *QuerySmsTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QuerySmsTemplateResponse{}
	_body, _err := client.QuerySmsTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QuerySmsSignWithOptions(request *QuerySmsSignRequest, runtime *util.RuntimeOptions) (_result *QuerySmsSignResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QuerySmsSignResponse{}
	_body, _err := client.DoRequest(tea.String("QuerySmsSign"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QuerySmsSign(request *QuerySmsSignRequest) (_result *QuerySmsSignResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QuerySmsSignResponse{}
	_body, _err := client.QuerySmsSignWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifySmsTemplateWithOptions(request *ModifySmsTemplateRequest, runtime *util.RuntimeOptions) (_result *ModifySmsTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifySmsTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("ModifySmsTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifySmsTemplate(request *ModifySmsTemplateRequest) (_result *ModifySmsTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifySmsTemplateResponse{}
	_body, _err := client.ModifySmsTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifySmsSignWithOptions(request *ModifySmsSignRequest, runtime *util.RuntimeOptions) (_result *ModifySmsSignResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifySmsSignResponse{}
	_body, _err := client.DoRequest(tea.String("ModifySmsSign"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifySmsSign(request *ModifySmsSignRequest) (_result *ModifySmsSignResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifySmsSignResponse{}
	_body, _err := client.ModifySmsSignWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteSmsTemplateWithOptions(request *DeleteSmsTemplateRequest, runtime *util.RuntimeOptions) (_result *DeleteSmsTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteSmsTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteSmsTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteSmsTemplate(request *DeleteSmsTemplateRequest) (_result *DeleteSmsTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteSmsTemplateResponse{}
	_body, _err := client.DeleteSmsTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteSmsSignWithOptions(request *DeleteSmsSignRequest, runtime *util.RuntimeOptions) (_result *DeleteSmsSignResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteSmsSignResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteSmsSign"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteSmsSign(request *DeleteSmsSignRequest) (_result *DeleteSmsSignResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteSmsSignResponse{}
	_body, _err := client.DeleteSmsSignWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddSmsTemplateWithOptions(request *AddSmsTemplateRequest, runtime *util.RuntimeOptions) (_result *AddSmsTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddSmsTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("AddSmsTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddSmsTemplate(request *AddSmsTemplateRequest) (_result *AddSmsTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddSmsTemplateResponse{}
	_body, _err := client.AddSmsTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddSmsSignWithOptions(request *AddSmsSignRequest, runtime *util.RuntimeOptions) (_result *AddSmsSignResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddSmsSignResponse{}
	_body, _err := client.DoRequest(tea.String("AddSmsSign"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddSmsSign(request *AddSmsSignRequest) (_result *AddSmsSignResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddSmsSignResponse{}
	_body, _err := client.AddSmsSignWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SendBatchSmsWithOptions(request *SendBatchSmsRequest, runtime *util.RuntimeOptions) (_result *SendBatchSmsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SendBatchSmsResponse{}
	_body, _err := client.DoRequest(tea.String("SendBatchSms"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SendBatchSms(request *SendBatchSmsRequest) (_result *SendBatchSmsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SendBatchSmsResponse{}
	_body, _err := client.SendBatchSmsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SendSmsWithOptions(request *SendSmsRequest, runtime *util.RuntimeOptions) (_result *SendSmsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SendSmsResponse{}
	_body, _err := client.DoRequest(tea.String("SendSms"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SendSms(request *SendSmsRequest) (_result *SendSmsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SendSmsResponse{}
	_body, _err := client.SendSmsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QuerySendDetailsWithOptions(request *QuerySendDetailsRequest, runtime *util.RuntimeOptions) (_result *QuerySendDetailsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QuerySendDetailsResponse{}
	_body, _err := client.DoRequest(tea.String("QuerySendDetails"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QuerySendDetails(request *QuerySendDetailsRequest) (_result *QuerySendDetailsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QuerySendDetailsResponse{}
	_body, _err := client.QuerySendDetailsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetEndpoint(productId *string, regionId *string, endpointRule *string, network *string, suffix *string, endpointMap map[string]*string, endpoint *string) (_result *string, _err error) {
	if !tea.BoolValue(util.Empty(endpoint)) {
		_result = endpoint
		return _result, _err
	}

	if !tea.BoolValue(util.IsUnset(endpointMap)) && !tea.BoolValue(util.Empty(endpointMap[tea.StringValue(regionId)])) {
		_result = endpointMap[tea.StringValue(regionId)]
		return _result, _err
	}

	_body, _err := endpointutil.GetEndpointRules(productId, regionId, endpointRule, network, suffix)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}
