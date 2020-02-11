// This file is auto-generated, don't edit it. Thanks.
package client

import (
	"encoding/json"
	"io"

	"github.com/alibabacloud-go/tea/tea"
	oss "github.com/aliyun/alibabacloud-oss-sdk/golang/client"
	common "github.com/aliyun/alibabacloud-rpc-util-sdk/golang/common"
	openplatform "github.com/aliyun/alibabacloud-sdk/openplatform-20191219/golang/client"
	"github.com/aliyun/rpc-client-go/service"
)

type Config struct {
	AccessKeyId          *string `json:"accessKeyId" xml:"accessKeyId"`
	AccessKeySecret      *string `json:"accessKeySecret" xml:"accessKeySecret"`
	Type                 *string `json:"type" xml:"type" require:"true"`
	SecurityToken        *string `json:"securityToken" xml:"securityToken" require:"true"`
	Endpoint             *string `json:"endpoint" xml:"endpoint" require:"true"`
	Protocol             *string `json:"protocol" xml:"protocol" require:"true"`
	RegionId             *string `json:"regionId" xml:"regionId" require:"true"`
	UserAgent            *string `json:"userAgent" xml:"userAgent" require:"true"`
	ReadTimeout          *int    `json:"readTimeout" xml:"readTimeout" require:"true"`
	ConnectTimeout       *int    `json:"connectTimeout" xml:"connectTimeout" require:"true"`
	LocalAddr            *string `json:"localAddr" xml:"localAddr" require:"true"`
	HttpProxy            *string `json:"httpProxy" xml:"httpProxy" require:"true"`
	HttpsProxy           *string `json:"httpsProxy" xml:"httpsProxy" require:"true"`
	NoProxy              *string `json:"noProxy" xml:"noProxy" require:"true"`
	Socks5Proxy          *string `json:"socks5Proxy" xml:"socks5Proxy" require:"true"`
	Socks5NetWork        *string `json:"socks5NetWork" xml:"socks5NetWork" require:"true"`
	MaxIdleConns         *int    `json:"maxIdleConns" xml:"maxIdleConns" require:"true"`
	EndpointType         *string `json:"endpointType" xml:"endpointType" require:"true"`
	OpenPlatformEndpoint *string `json:"openPlatformEndpoint" xml:"openPlatformEndpoint" require:"true"`
}

func (s Config) String() string {
	return service.Prettify(s)
}

func (s Config) GoString() string {
	return s.String()
}

func (s *Config) SetAccessKeyId(v string) *Config {
	s.AccessKeyId = &v
	return s
}

func (s *Config) SetAccessKeySecret(v string) *Config {
	s.AccessKeySecret = &v
	return s
}

func (s *Config) SetType(v string) *Config {
	s.Type = &v
	return s
}

func (s *Config) SetSecurityToken(v string) *Config {
	s.SecurityToken = &v
	return s
}

func (s *Config) SetEndpoint(v string) *Config {
	s.Endpoint = &v
	return s
}

func (s *Config) SetProtocol(v string) *Config {
	s.Protocol = &v
	return s
}

func (s *Config) SetRegionId(v string) *Config {
	s.RegionId = &v
	return s
}

func (s *Config) SetUserAgent(v string) *Config {
	s.UserAgent = &v
	return s
}

func (s *Config) SetReadTimeout(v int) *Config {
	s.ReadTimeout = &v
	return s
}

func (s *Config) SetConnectTimeout(v int) *Config {
	s.ConnectTimeout = &v
	return s
}

func (s *Config) SetLocalAddr(v string) *Config {
	s.LocalAddr = &v
	return s
}

func (s *Config) SetHttpProxy(v string) *Config {
	s.HttpProxy = &v
	return s
}

func (s *Config) SetHttpsProxy(v string) *Config {
	s.HttpsProxy = &v
	return s
}

func (s *Config) SetNoProxy(v string) *Config {
	s.NoProxy = &v
	return s
}

func (s *Config) SetSocks5Proxy(v string) *Config {
	s.Socks5Proxy = &v
	return s
}

func (s *Config) SetSocks5NetWork(v string) *Config {
	s.Socks5NetWork = &v
	return s
}

func (s *Config) SetMaxIdleConns(v int) *Config {
	s.MaxIdleConns = &v
	return s
}

func (s *Config) SetEndpointType(v string) *Config {
	s.EndpointType = &v
	return s
}

func (s *Config) SetOpenPlatformEndpoint(v string) *Config {
	s.OpenPlatformEndpoint = &v
	return s
}

type RecognizeCharacterRequest struct {
	ImageType         *int    `json:"ImageType" xml:"ImageType"`
	ImageURL          *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	MinHeight         *int    `json:"MinHeight" xml:"MinHeight" require:"true"`
	OutputProbability *bool   `json:"OutputProbability" xml:"OutputProbability" require:"true"`
}

func (s RecognizeCharacterRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeCharacterRequest) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterRequest) SetImageType(v int) *RecognizeCharacterRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeCharacterRequest) SetImageURL(v string) *RecognizeCharacterRequest {
	s.ImageURL = &v
	return s
}

func (s *RecognizeCharacterRequest) SetMinHeight(v int) *RecognizeCharacterRequest {
	s.MinHeight = &v
	return s
}

func (s *RecognizeCharacterRequest) SetOutputProbability(v bool) *RecognizeCharacterRequest {
	s.OutputProbability = &v
	return s
}

type RecognizeCharacterResponse struct {
	RequestId *string                         `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeCharacterResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeCharacterResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeCharacterResponse) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterResponse) SetRequestId(v string) *RecognizeCharacterResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeCharacterResponse) SetData(v *RecognizeCharacterResponseData) *RecognizeCharacterResponse {
	s.Data = v
	return s
}

type RecognizeCharacterResponseData struct {
	Results []*RecognizeCharacterResponseDataResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
}

func (s RecognizeCharacterResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeCharacterResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterResponseData) SetResults(v []*RecognizeCharacterResponseDataResults) *RecognizeCharacterResponseData {
	s.Results = v
	return s
}

type RecognizeCharacterResponseDataResults struct {
	Probability    *float32                                               `json:"Probability" xml:"Probability" require:"true"`
	Text           *string                                                `json:"Text" xml:"Text" require:"true"`
	TextRectangles []*RecognizeCharacterResponseDataResultsTextRectangles `json:"TextRectangles" xml:"TextRectangles" require:"true" type:"Repeated"`
}

func (s RecognizeCharacterResponseDataResults) String() string {
	return service.Prettify(s)
}

func (s RecognizeCharacterResponseDataResults) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterResponseDataResults) SetProbability(v float32) *RecognizeCharacterResponseDataResults {
	s.Probability = &v
	return s
}

func (s *RecognizeCharacterResponseDataResults) SetText(v string) *RecognizeCharacterResponseDataResults {
	s.Text = &v
	return s
}

func (s *RecognizeCharacterResponseDataResults) SetTextRectangles(v []*RecognizeCharacterResponseDataResultsTextRectangles) *RecognizeCharacterResponseDataResults {
	s.TextRectangles = v
	return s
}

type RecognizeCharacterResponseDataResultsTextRectangles struct {
	Angle  *int `json:"Angle" xml:"Angle" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
}

func (s RecognizeCharacterResponseDataResultsTextRectangles) String() string {
	return service.Prettify(s)
}

func (s RecognizeCharacterResponseDataResultsTextRectangles) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterResponseDataResultsTextRectangles) SetAngle(v int) *RecognizeCharacterResponseDataResultsTextRectangles {
	s.Angle = &v
	return s
}

func (s *RecognizeCharacterResponseDataResultsTextRectangles) SetLeft(v int) *RecognizeCharacterResponseDataResultsTextRectangles {
	s.Left = &v
	return s
}

func (s *RecognizeCharacterResponseDataResultsTextRectangles) SetTop(v int) *RecognizeCharacterResponseDataResultsTextRectangles {
	s.Top = &v
	return s
}

func (s *RecognizeCharacterResponseDataResultsTextRectangles) SetWidth(v int) *RecognizeCharacterResponseDataResultsTextRectangles {
	s.Width = &v
	return s
}

func (s *RecognizeCharacterResponseDataResultsTextRectangles) SetHeight(v int) *RecognizeCharacterResponseDataResultsTextRectangles {
	s.Height = &v
	return s
}

type RecognizeCharacterAdvanceRequest struct {
	ImageURLObject    io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType         *int      `json:"ImageType" xml:"ImageType"`
	MinHeight         *int      `json:"MinHeight" xml:"MinHeight" require:"true"`
	OutputProbability *bool     `json:"OutputProbability" xml:"OutputProbability" require:"true"`
}

func (s RecognizeCharacterAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeCharacterAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeCharacterAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeCharacterAdvanceRequest) SetImageType(v int) *RecognizeCharacterAdvanceRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeCharacterAdvanceRequest) SetMinHeight(v int) *RecognizeCharacterAdvanceRequest {
	s.MinHeight = &v
	return s
}

func (s *RecognizeCharacterAdvanceRequest) SetOutputProbability(v bool) *RecognizeCharacterAdvanceRequest {
	s.OutputProbability = &v
	return s
}

type RecognizeDriverLicenseRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	Side      *string `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeDriverLicenseRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeDriverLicenseRequest) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseRequest) SetImageType(v int) *RecognizeDriverLicenseRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeDriverLicenseRequest) SetImageURL(v string) *RecognizeDriverLicenseRequest {
	s.ImageURL = &v
	return s
}

func (s *RecognizeDriverLicenseRequest) SetSide(v string) *RecognizeDriverLicenseRequest {
	s.Side = &v
	return s
}

type RecognizeDriverLicenseResponse struct {
	RequestId *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeDriverLicenseResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeDriverLicenseResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeDriverLicenseResponse) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseResponse) SetRequestId(v string) *RecognizeDriverLicenseResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeDriverLicenseResponse) SetData(v *RecognizeDriverLicenseResponseData) *RecognizeDriverLicenseResponse {
	s.Data = v
	return s
}

type RecognizeDriverLicenseResponseData struct {
	FaceResult *RecognizeDriverLicenseResponseDataFaceResult `json:"FaceResult" xml:"FaceResult" require:"true" type:"Struct"`
	BackResult *RecognizeDriverLicenseResponseDataBackResult `json:"BackResult" xml:"BackResult" require:"true" type:"Struct"`
}

func (s RecognizeDriverLicenseResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeDriverLicenseResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseResponseData) SetFaceResult(v *RecognizeDriverLicenseResponseDataFaceResult) *RecognizeDriverLicenseResponseData {
	s.FaceResult = v
	return s
}

func (s *RecognizeDriverLicenseResponseData) SetBackResult(v *RecognizeDriverLicenseResponseDataBackResult) *RecognizeDriverLicenseResponseData {
	s.BackResult = v
	return s
}

type RecognizeDriverLicenseResponseDataFaceResult struct {
	Name          *string `json:"Name" xml:"Name" require:"true"`
	LicenseNumber *string `json:"LicenseNumber" xml:"LicenseNumber" require:"true"`
	VehicleType   *string `json:"VehicleType" xml:"VehicleType" require:"true"`
	StartDate     *string `json:"StartDate" xml:"StartDate" require:"true"`
	EndDate       *string `json:"EndDate" xml:"EndDate" require:"true"`
	IssueDate     *string `json:"IssueDate" xml:"IssueDate" require:"true"`
	Address       *string `json:"Address" xml:"Address" require:"true"`
	Gender        *string `json:"Gender" xml:"Gender" require:"true"`
}

func (s RecognizeDriverLicenseResponseDataFaceResult) String() string {
	return service.Prettify(s)
}

func (s RecognizeDriverLicenseResponseDataFaceResult) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetName(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.Name = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetLicenseNumber(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.LicenseNumber = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetVehicleType(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.VehicleType = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetStartDate(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.StartDate = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetEndDate(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.EndDate = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetIssueDate(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.IssueDate = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetAddress(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.Address = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetGender(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.Gender = &v
	return s
}

type RecognizeDriverLicenseResponseDataBackResult struct {
	ArchiveNumber *string `json:"ArchiveNumber" xml:"ArchiveNumber" require:"true"`
}

func (s RecognizeDriverLicenseResponseDataBackResult) String() string {
	return service.Prettify(s)
}

func (s RecognizeDriverLicenseResponseDataBackResult) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseResponseDataBackResult) SetArchiveNumber(v string) *RecognizeDriverLicenseResponseDataBackResult {
	s.ArchiveNumber = &v
	return s
}

type RecognizeDriverLicenseAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
	Side           *string   `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeDriverLicenseAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeDriverLicenseAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeDriverLicenseAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeDriverLicenseAdvanceRequest) SetImageType(v int) *RecognizeDriverLicenseAdvanceRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeDriverLicenseAdvanceRequest) SetSide(v string) *RecognizeDriverLicenseAdvanceRequest {
	s.Side = &v
	return s
}

type RecognizeLicensePlateRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeLicensePlateRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeLicensePlateRequest) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateRequest) SetImageType(v int) *RecognizeLicensePlateRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeLicensePlateRequest) SetImageURL(v string) *RecognizeLicensePlateRequest {
	s.ImageURL = &v
	return s
}

type RecognizeLicensePlateResponse struct {
	RequestId *string                            `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeLicensePlateResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeLicensePlateResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeLicensePlateResponse) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateResponse) SetRequestId(v string) *RecognizeLicensePlateResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeLicensePlateResponse) SetData(v *RecognizeLicensePlateResponseData) *RecognizeLicensePlateResponse {
	s.Data = v
	return s
}

type RecognizeLicensePlateResponseData struct {
	Plates []*RecognizeLicensePlateResponseDataPlates `json:"Plates" xml:"Plates" require:"true" type:"Repeated"`
}

func (s RecognizeLicensePlateResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeLicensePlateResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateResponseData) SetPlates(v []*RecognizeLicensePlateResponseDataPlates) *RecognizeLicensePlateResponseData {
	s.Plates = v
	return s
}

type RecognizeLicensePlateResponseDataPlates struct {
	Confidence          *float32                                    `json:"Confidence" xml:"Confidence" require:"true"`
	PlateNumber         *string                                     `json:"PlateNumber" xml:"PlateNumber" require:"true"`
	PlateType           *string                                     `json:"PlateType" xml:"PlateType" require:"true"`
	PlateTypeConfidence *float32                                    `json:"PlateTypeConfidence" xml:"PlateTypeConfidence" require:"true"`
	Roi                 *RecognizeLicensePlateResponseDataPlatesRoi `json:"Roi" xml:"Roi" require:"true" type:"Struct"`
}

func (s RecognizeLicensePlateResponseDataPlates) String() string {
	return service.Prettify(s)
}

func (s RecognizeLicensePlateResponseDataPlates) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateResponseDataPlates) SetConfidence(v float32) *RecognizeLicensePlateResponseDataPlates {
	s.Confidence = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlates) SetPlateNumber(v string) *RecognizeLicensePlateResponseDataPlates {
	s.PlateNumber = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlates) SetPlateType(v string) *RecognizeLicensePlateResponseDataPlates {
	s.PlateType = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlates) SetPlateTypeConfidence(v float32) *RecognizeLicensePlateResponseDataPlates {
	s.PlateTypeConfidence = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlates) SetRoi(v *RecognizeLicensePlateResponseDataPlatesRoi) *RecognizeLicensePlateResponseDataPlates {
	s.Roi = v
	return s
}

type RecognizeLicensePlateResponseDataPlatesRoi struct {
	H *int `json:"H" xml:"H" require:"true"`
	W *int `json:"W" xml:"W" require:"true"`
	X *int `json:"X" xml:"X" require:"true"`
	Y *int `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeLicensePlateResponseDataPlatesRoi) String() string {
	return service.Prettify(s)
}

func (s RecognizeLicensePlateResponseDataPlatesRoi) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateResponseDataPlatesRoi) SetH(v int) *RecognizeLicensePlateResponseDataPlatesRoi {
	s.H = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlatesRoi) SetW(v int) *RecognizeLicensePlateResponseDataPlatesRoi {
	s.W = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlatesRoi) SetX(v int) *RecognizeLicensePlateResponseDataPlatesRoi {
	s.X = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlatesRoi) SetY(v int) *RecognizeLicensePlateResponseDataPlatesRoi {
	s.Y = &v
	return s
}

type RecognizeLicensePlateAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeLicensePlateAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeLicensePlateAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeLicensePlateAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeLicensePlateAdvanceRequest) SetImageType(v int) *RecognizeLicensePlateAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeTableRequest struct {
	ImageType       *int    `json:"ImageType" xml:"ImageType"`
	ImageURL        *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	OutputFormat    *string `json:"OutputFormat" xml:"OutputFormat" require:"true"`
	UseFinanceModel *bool   `json:"UseFinanceModel" xml:"UseFinanceModel" require:"true"`
	AssureDirection *bool   `json:"AssureDirection" xml:"AssureDirection" require:"true"`
	HasLine         *bool   `json:"HasLine" xml:"HasLine" require:"true"`
	SkipDetection   *bool   `json:"SkipDetection" xml:"SkipDetection" require:"true"`
}

func (s RecognizeTableRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeTableRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTableRequest) SetImageType(v int) *RecognizeTableRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeTableRequest) SetImageURL(v string) *RecognizeTableRequest {
	s.ImageURL = &v
	return s
}

func (s *RecognizeTableRequest) SetOutputFormat(v string) *RecognizeTableRequest {
	s.OutputFormat = &v
	return s
}

func (s *RecognizeTableRequest) SetUseFinanceModel(v bool) *RecognizeTableRequest {
	s.UseFinanceModel = &v
	return s
}

func (s *RecognizeTableRequest) SetAssureDirection(v bool) *RecognizeTableRequest {
	s.AssureDirection = &v
	return s
}

func (s *RecognizeTableRequest) SetHasLine(v bool) *RecognizeTableRequest {
	s.HasLine = &v
	return s
}

func (s *RecognizeTableRequest) SetSkipDetection(v bool) *RecognizeTableRequest {
	s.SkipDetection = &v
	return s
}

type RecognizeTableResponse struct {
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeTableResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeTableResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeTableResponse) GoString() string {
	return s.String()
}

func (s *RecognizeTableResponse) SetRequestId(v string) *RecognizeTableResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeTableResponse) SetData(v *RecognizeTableResponseData) *RecognizeTableResponse {
	s.Data = v
	return s
}

type RecognizeTableResponseData struct {
	FileContent *string                             `json:"FileContent" xml:"FileContent" require:"true"`
	Tables      []*RecognizeTableResponseDataTables `json:"Tables" xml:"Tables" require:"true" type:"Repeated"`
}

func (s RecognizeTableResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeTableResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeTableResponseData) SetFileContent(v string) *RecognizeTableResponseData {
	s.FileContent = &v
	return s
}

func (s *RecognizeTableResponseData) SetTables(v []*RecognizeTableResponseDataTables) *RecognizeTableResponseData {
	s.Tables = v
	return s
}

type RecognizeTableResponseDataTables struct {
	Head      *string                                      `json:"Head" xml:"Head" require:"true"`
	Tail      *string                                      `json:"Tail" xml:"Tail" require:"true"`
	TableRows []*RecognizeTableResponseDataTablesTableRows `json:"TableRows" xml:"TableRows" require:"true" type:"Repeated"`
}

func (s RecognizeTableResponseDataTables) String() string {
	return service.Prettify(s)
}

func (s RecognizeTableResponseDataTables) GoString() string {
	return s.String()
}

func (s *RecognizeTableResponseDataTables) SetHead(v string) *RecognizeTableResponseDataTables {
	s.Head = &v
	return s
}

func (s *RecognizeTableResponseDataTables) SetTail(v string) *RecognizeTableResponseDataTables {
	s.Tail = &v
	return s
}

func (s *RecognizeTableResponseDataTables) SetTableRows(v []*RecognizeTableResponseDataTablesTableRows) *RecognizeTableResponseDataTables {
	s.TableRows = v
	return s
}

type RecognizeTableResponseDataTablesTableRows struct {
	TableColumns []*RecognizeTableResponseDataTablesTableRowsTableColumns `json:"TableColumns" xml:"TableColumns" require:"true" type:"Repeated"`
}

func (s RecognizeTableResponseDataTablesTableRows) String() string {
	return service.Prettify(s)
}

func (s RecognizeTableResponseDataTablesTableRows) GoString() string {
	return s.String()
}

func (s *RecognizeTableResponseDataTablesTableRows) SetTableColumns(v []*RecognizeTableResponseDataTablesTableRowsTableColumns) *RecognizeTableResponseDataTablesTableRows {
	s.TableColumns = v
	return s
}

type RecognizeTableResponseDataTablesTableRowsTableColumns struct {
	StartColumn *int `json:"StartColumn" xml:"StartColumn" require:"true"`
	StartRow    *int `json:"StartRow" xml:"StartRow" require:"true"`
	EndColumn   *int `json:"EndColumn" xml:"EndColumn" require:"true"`
	EndRow      *int `json:"EndRow" xml:"EndRow" require:"true"`
	Height      *int `json:"Height" xml:"Height" require:"true"`
	Width       *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeTableResponseDataTablesTableRowsTableColumns) String() string {
	return service.Prettify(s)
}

func (s RecognizeTableResponseDataTablesTableRowsTableColumns) GoString() string {
	return s.String()
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetStartColumn(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.StartColumn = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetStartRow(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.StartRow = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetEndColumn(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.EndColumn = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetEndRow(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.EndRow = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetHeight(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.Height = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetWidth(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.Width = &v
	return s
}

type RecognizeTableAdvanceRequest struct {
	ImageURLObject  io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType       *int      `json:"ImageType" xml:"ImageType"`
	OutputFormat    *string   `json:"OutputFormat" xml:"OutputFormat" require:"true"`
	UseFinanceModel *bool     `json:"UseFinanceModel" xml:"UseFinanceModel" require:"true"`
	AssureDirection *bool     `json:"AssureDirection" xml:"AssureDirection" require:"true"`
	HasLine         *bool     `json:"HasLine" xml:"HasLine" require:"true"`
	SkipDetection   *bool     `json:"SkipDetection" xml:"SkipDetection" require:"true"`
}

func (s RecognizeTableAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeTableAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTableAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeTableAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetImageType(v int) *RecognizeTableAdvanceRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetOutputFormat(v string) *RecognizeTableAdvanceRequest {
	s.OutputFormat = &v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetUseFinanceModel(v bool) *RecognizeTableAdvanceRequest {
	s.UseFinanceModel = &v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetAssureDirection(v bool) *RecognizeTableAdvanceRequest {
	s.AssureDirection = &v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetHasLine(v bool) *RecognizeTableAdvanceRequest {
	s.HasLine = &v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetSkipDetection(v bool) *RecognizeTableAdvanceRequest {
	s.SkipDetection = &v
	return s
}

type RecognizeStampRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeStampRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeStampRequest) GoString() string {
	return s.String()
}

func (s *RecognizeStampRequest) SetImageType(v int) *RecognizeStampRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeStampRequest) SetImageURL(v string) *RecognizeStampRequest {
	s.ImageURL = &v
	return s
}

type RecognizeStampResponse struct {
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeStampResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeStampResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeStampResponse) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponse) SetRequestId(v string) *RecognizeStampResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeStampResponse) SetData(v *RecognizeStampResponseData) *RecognizeStampResponse {
	s.Data = v
	return s
}

type RecognizeStampResponseData struct {
	Results []*RecognizeStampResponseDataResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
}

func (s RecognizeStampResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeStampResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponseData) SetResults(v []*RecognizeStampResponseDataResults) *RecognizeStampResponseData {
	s.Results = v
	return s
}

type RecognizeStampResponseDataResults struct {
	GeneralText []*RecognizeStampResponseDataResultsGeneralText `json:"GeneralText" xml:"GeneralText" require:"true" type:"Repeated"`
	Roi         *RecognizeStampResponseDataResultsRoi           `json:"Roi" xml:"Roi" require:"true" type:"Struct"`
	Text        *RecognizeStampResponseDataResultsText          `json:"Text" xml:"Text" require:"true" type:"Struct"`
}

func (s RecognizeStampResponseDataResults) String() string {
	return service.Prettify(s)
}

func (s RecognizeStampResponseDataResults) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponseDataResults) SetGeneralText(v []*RecognizeStampResponseDataResultsGeneralText) *RecognizeStampResponseDataResults {
	s.GeneralText = v
	return s
}

func (s *RecognizeStampResponseDataResults) SetRoi(v *RecognizeStampResponseDataResultsRoi) *RecognizeStampResponseDataResults {
	s.Roi = v
	return s
}

func (s *RecognizeStampResponseDataResults) SetText(v *RecognizeStampResponseDataResultsText) *RecognizeStampResponseDataResults {
	s.Text = v
	return s
}

type RecognizeStampResponseDataResultsGeneralText struct {
	Content    *string  `json:"Content" xml:"Content" require:"true"`
	Confidence *float32 `json:"Confidence" xml:"Confidence" require:"true"`
}

func (s RecognizeStampResponseDataResultsGeneralText) String() string {
	return service.Prettify(s)
}

func (s RecognizeStampResponseDataResultsGeneralText) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponseDataResultsGeneralText) SetContent(v string) *RecognizeStampResponseDataResultsGeneralText {
	s.Content = &v
	return s
}

func (s *RecognizeStampResponseDataResultsGeneralText) SetConfidence(v float32) *RecognizeStampResponseDataResultsGeneralText {
	s.Confidence = &v
	return s
}

type RecognizeStampResponseDataResultsRoi struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
}

func (s RecognizeStampResponseDataResultsRoi) String() string {
	return service.Prettify(s)
}

func (s RecognizeStampResponseDataResultsRoi) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponseDataResultsRoi) SetLeft(v int) *RecognizeStampResponseDataResultsRoi {
	s.Left = &v
	return s
}

func (s *RecognizeStampResponseDataResultsRoi) SetTop(v int) *RecognizeStampResponseDataResultsRoi {
	s.Top = &v
	return s
}

func (s *RecognizeStampResponseDataResultsRoi) SetWidth(v int) *RecognizeStampResponseDataResultsRoi {
	s.Width = &v
	return s
}

func (s *RecognizeStampResponseDataResultsRoi) SetHeight(v int) *RecognizeStampResponseDataResultsRoi {
	s.Height = &v
	return s
}

type RecognizeStampResponseDataResultsText struct {
	Content    *string  `json:"Content" xml:"Content" require:"true"`
	Confidence *float32 `json:"Confidence" xml:"Confidence" require:"true"`
}

func (s RecognizeStampResponseDataResultsText) String() string {
	return service.Prettify(s)
}

func (s RecognizeStampResponseDataResultsText) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponseDataResultsText) SetContent(v string) *RecognizeStampResponseDataResultsText {
	s.Content = &v
	return s
}

func (s *RecognizeStampResponseDataResultsText) SetConfidence(v float32) *RecognizeStampResponseDataResultsText {
	s.Confidence = &v
	return s
}

type RecognizeStampAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeStampAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeStampAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeStampAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeStampAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeStampAdvanceRequest) SetImageType(v int) *RecognizeStampAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeAccountPageRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeAccountPageRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeAccountPageRequest) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageRequest) SetImageType(v int) *RecognizeAccountPageRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeAccountPageRequest) SetImageURL(v string) *RecognizeAccountPageRequest {
	s.ImageURL = &v
	return s
}

type RecognizeAccountPageResponse struct {
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeAccountPageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeAccountPageResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeAccountPageResponse) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponse) SetRequestId(v string) *RecognizeAccountPageResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeAccountPageResponse) SetData(v *RecognizeAccountPageResponseData) *RecognizeAccountPageResponse {
	s.Data = v
	return s
}

type RecognizeAccountPageResponseData struct {
	Angle               *float32                                               `json:"Angle" xml:"Angle" require:"true"`
	Name                *string                                                `json:"Name" xml:"Name" require:"true"`
	Gender              *string                                                `json:"Gender" xml:"Gender" require:"true"`
	Relation            *string                                                `json:"Relation" xml:"Relation" require:"true"`
	BirthPlace          *string                                                `json:"BirthPlace" xml:"BirthPlace" require:"true"`
	Nationality         *string                                                `json:"Nationality" xml:"Nationality" require:"true"`
	NativePlace         *string                                                `json:"NativePlace" xml:"NativePlace" require:"true"`
	BirthDate           *string                                                `json:"BirthDate" xml:"BirthDate" require:"true"`
	IDNumber            *string                                                `json:"IDNumber" xml:"IDNumber" require:"true"`
	InvalidStampAreas   []*RecognizeAccountPageResponseDataInvalidStampAreas   `json:"InvalidStampAreas" xml:"InvalidStampAreas" require:"true" type:"Repeated"`
	UndertakeStampAreas []*RecognizeAccountPageResponseDataUndertakeStampAreas `json:"UndertakeStampAreas" xml:"UndertakeStampAreas" require:"true" type:"Repeated"`
	RegisterStampAreas  []*RecognizeAccountPageResponseDataRegisterStampAreas  `json:"RegisterStampAreas" xml:"RegisterStampAreas" require:"true" type:"Repeated"`
	OtherStampAreas     []*RecognizeAccountPageResponseDataOtherStampAreas     `json:"OtherStampAreas" xml:"OtherStampAreas" require:"true" type:"Repeated"`
	TitleArea           *RecognizeAccountPageResponseDataTitleArea             `json:"TitleArea" xml:"TitleArea" require:"true" type:"Struct"`
}

func (s RecognizeAccountPageResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeAccountPageResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseData) SetAngle(v float32) *RecognizeAccountPageResponseData {
	s.Angle = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetName(v string) *RecognizeAccountPageResponseData {
	s.Name = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetGender(v string) *RecognizeAccountPageResponseData {
	s.Gender = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetRelation(v string) *RecognizeAccountPageResponseData {
	s.Relation = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetBirthPlace(v string) *RecognizeAccountPageResponseData {
	s.BirthPlace = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetNationality(v string) *RecognizeAccountPageResponseData {
	s.Nationality = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetNativePlace(v string) *RecognizeAccountPageResponseData {
	s.NativePlace = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetBirthDate(v string) *RecognizeAccountPageResponseData {
	s.BirthDate = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetIDNumber(v string) *RecognizeAccountPageResponseData {
	s.IDNumber = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetInvalidStampAreas(v []*RecognizeAccountPageResponseDataInvalidStampAreas) *RecognizeAccountPageResponseData {
	s.InvalidStampAreas = v
	return s
}

func (s *RecognizeAccountPageResponseData) SetUndertakeStampAreas(v []*RecognizeAccountPageResponseDataUndertakeStampAreas) *RecognizeAccountPageResponseData {
	s.UndertakeStampAreas = v
	return s
}

func (s *RecognizeAccountPageResponseData) SetRegisterStampAreas(v []*RecognizeAccountPageResponseDataRegisterStampAreas) *RecognizeAccountPageResponseData {
	s.RegisterStampAreas = v
	return s
}

func (s *RecognizeAccountPageResponseData) SetOtherStampAreas(v []*RecognizeAccountPageResponseDataOtherStampAreas) *RecognizeAccountPageResponseData {
	s.OtherStampAreas = v
	return s
}

func (s *RecognizeAccountPageResponseData) SetTitleArea(v *RecognizeAccountPageResponseDataTitleArea) *RecognizeAccountPageResponseData {
	s.TitleArea = v
	return s
}

type RecognizeAccountPageResponseDataInvalidStampAreas struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeAccountPageResponseDataInvalidStampAreas) String() string {
	return service.Prettify(s)
}

func (s RecognizeAccountPageResponseDataInvalidStampAreas) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseDataInvalidStampAreas) SetLeft(v int) *RecognizeAccountPageResponseDataInvalidStampAreas {
	s.Left = &v
	return s
}

func (s *RecognizeAccountPageResponseDataInvalidStampAreas) SetTop(v int) *RecognizeAccountPageResponseDataInvalidStampAreas {
	s.Top = &v
	return s
}

func (s *RecognizeAccountPageResponseDataInvalidStampAreas) SetHeight(v int) *RecognizeAccountPageResponseDataInvalidStampAreas {
	s.Height = &v
	return s
}

func (s *RecognizeAccountPageResponseDataInvalidStampAreas) SetWidth(v int) *RecognizeAccountPageResponseDataInvalidStampAreas {
	s.Width = &v
	return s
}

type RecognizeAccountPageResponseDataUndertakeStampAreas struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeAccountPageResponseDataUndertakeStampAreas) String() string {
	return service.Prettify(s)
}

func (s RecognizeAccountPageResponseDataUndertakeStampAreas) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseDataUndertakeStampAreas) SetLeft(v int) *RecognizeAccountPageResponseDataUndertakeStampAreas {
	s.Left = &v
	return s
}

func (s *RecognizeAccountPageResponseDataUndertakeStampAreas) SetTop(v int) *RecognizeAccountPageResponseDataUndertakeStampAreas {
	s.Top = &v
	return s
}

func (s *RecognizeAccountPageResponseDataUndertakeStampAreas) SetHeight(v int) *RecognizeAccountPageResponseDataUndertakeStampAreas {
	s.Height = &v
	return s
}

func (s *RecognizeAccountPageResponseDataUndertakeStampAreas) SetWidth(v int) *RecognizeAccountPageResponseDataUndertakeStampAreas {
	s.Width = &v
	return s
}

type RecognizeAccountPageResponseDataRegisterStampAreas struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeAccountPageResponseDataRegisterStampAreas) String() string {
	return service.Prettify(s)
}

func (s RecognizeAccountPageResponseDataRegisterStampAreas) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseDataRegisterStampAreas) SetLeft(v int) *RecognizeAccountPageResponseDataRegisterStampAreas {
	s.Left = &v
	return s
}

func (s *RecognizeAccountPageResponseDataRegisterStampAreas) SetTop(v int) *RecognizeAccountPageResponseDataRegisterStampAreas {
	s.Top = &v
	return s
}

func (s *RecognizeAccountPageResponseDataRegisterStampAreas) SetHeight(v int) *RecognizeAccountPageResponseDataRegisterStampAreas {
	s.Height = &v
	return s
}

func (s *RecognizeAccountPageResponseDataRegisterStampAreas) SetWidth(v int) *RecognizeAccountPageResponseDataRegisterStampAreas {
	s.Width = &v
	return s
}

type RecognizeAccountPageResponseDataOtherStampAreas struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeAccountPageResponseDataOtherStampAreas) String() string {
	return service.Prettify(s)
}

func (s RecognizeAccountPageResponseDataOtherStampAreas) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseDataOtherStampAreas) SetLeft(v int) *RecognizeAccountPageResponseDataOtherStampAreas {
	s.Left = &v
	return s
}

func (s *RecognizeAccountPageResponseDataOtherStampAreas) SetTop(v int) *RecognizeAccountPageResponseDataOtherStampAreas {
	s.Top = &v
	return s
}

func (s *RecognizeAccountPageResponseDataOtherStampAreas) SetHeight(v int) *RecognizeAccountPageResponseDataOtherStampAreas {
	s.Height = &v
	return s
}

func (s *RecognizeAccountPageResponseDataOtherStampAreas) SetWidth(v int) *RecognizeAccountPageResponseDataOtherStampAreas {
	s.Width = &v
	return s
}

type RecognizeAccountPageResponseDataTitleArea struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeAccountPageResponseDataTitleArea) String() string {
	return service.Prettify(s)
}

func (s RecognizeAccountPageResponseDataTitleArea) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseDataTitleArea) SetLeft(v int) *RecognizeAccountPageResponseDataTitleArea {
	s.Left = &v
	return s
}

func (s *RecognizeAccountPageResponseDataTitleArea) SetTop(v int) *RecognizeAccountPageResponseDataTitleArea {
	s.Top = &v
	return s
}

func (s *RecognizeAccountPageResponseDataTitleArea) SetHeight(v int) *RecognizeAccountPageResponseDataTitleArea {
	s.Height = &v
	return s
}

func (s *RecognizeAccountPageResponseDataTitleArea) SetWidth(v int) *RecognizeAccountPageResponseDataTitleArea {
	s.Width = &v
	return s
}

type RecognizeAccountPageAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeAccountPageAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeAccountPageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeAccountPageAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeAccountPageAdvanceRequest) SetImageType(v int) *RecognizeAccountPageAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeTaxiInvoiceRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeTaxiInvoiceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeTaxiInvoiceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceRequest) SetImageType(v int) *RecognizeTaxiInvoiceRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeTaxiInvoiceRequest) SetImageURL(v string) *RecognizeTaxiInvoiceRequest {
	s.ImageURL = &v
	return s
}

type RecognizeTaxiInvoiceResponse struct {
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeTaxiInvoiceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeTaxiInvoiceResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponse) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponse) SetRequestId(v string) *RecognizeTaxiInvoiceResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponse) SetData(v *RecognizeTaxiInvoiceResponseData) *RecognizeTaxiInvoiceResponse {
	s.Data = v
	return s
}

type RecognizeTaxiInvoiceResponseData struct {
	Invoices []*RecognizeTaxiInvoiceResponseDataInvoices `json:"Invoices" xml:"Invoices" require:"true" type:"Repeated"`
}

func (s RecognizeTaxiInvoiceResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseData) SetInvoices(v []*RecognizeTaxiInvoiceResponseDataInvoices) *RecognizeTaxiInvoiceResponseData {
	s.Invoices = v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoices struct {
	RotateType *int                                                `json:"RotateType" xml:"RotateType" require:"true"`
	Items      []*RecognizeTaxiInvoiceResponseDataInvoicesItems    `json:"Items" xml:"Items" require:"true" type:"Repeated"`
	InvoiceRoi *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi `json:"InvoiceRoi" xml:"InvoiceRoi" require:"true" type:"Struct"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoices) String() string {
	return service.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoices) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoices) SetRotateType(v int) *RecognizeTaxiInvoiceResponseDataInvoices {
	s.RotateType = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoices) SetItems(v []*RecognizeTaxiInvoiceResponseDataInvoicesItems) *RecognizeTaxiInvoiceResponseDataInvoices {
	s.Items = v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoices) SetInvoiceRoi(v *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) *RecognizeTaxiInvoiceResponseDataInvoices {
	s.InvoiceRoi = v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoicesItems struct {
	Text    *string                                               `json:"Text" xml:"Text" require:"true"`
	ItemRoi *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi `json:"ItemRoi" xml:"ItemRoi" require:"true" type:"Struct"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItems) String() string {
	return service.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItems) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItems) SetText(v string) *RecognizeTaxiInvoiceResponseDataInvoicesItems {
	s.Text = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItems) SetItemRoi(v *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) *RecognizeTaxiInvoiceResponseDataInvoicesItems {
	s.ItemRoi = v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi struct {
	Angle  *float32                                                    `json:"Angle" xml:"Angle" require:"true"`
	Center *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter `json:"Center" xml:"Center" require:"true" type:"Struct"`
	Size   *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize   `json:"Size" xml:"Size" require:"true" type:"Struct"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) String() string {
	return service.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) SetAngle(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi {
	s.Angle = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) SetCenter(v *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi {
	s.Center = v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) SetSize(v *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi {
	s.Size = v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter struct {
	X *float32 `json:"X" xml:"X" require:"true"`
	Y *float32 `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter) String() string {
	return service.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter) SetX(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter {
	s.X = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter) SetY(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter {
	s.Y = &v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize struct {
	H *float32 `json:"H" xml:"H" require:"true"`
	W *float32 `json:"W" xml:"W" require:"true"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize) String() string {
	return service.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize) SetH(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize {
	s.H = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize) SetW(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize {
	s.W = &v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi struct {
	H *float32 `json:"H" xml:"H" require:"true"`
	W *float32 `json:"W" xml:"W" require:"true"`
	X *float32 `json:"X" xml:"X" require:"true"`
	Y *float32 `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) String() string {
	return service.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) SetH(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi {
	s.H = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) SetW(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi {
	s.W = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) SetX(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi {
	s.X = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) SetY(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi {
	s.Y = &v
	return s
}

type RecognizeTaxiInvoiceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeTaxiInvoiceAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeTaxiInvoiceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeTaxiInvoiceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeTaxiInvoiceAdvanceRequest) SetImageType(v int) *RecognizeTaxiInvoiceAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeIdentityCardRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	Side      *string `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeIdentityCardRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardRequest) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardRequest) SetImageType(v int) *RecognizeIdentityCardRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeIdentityCardRequest) SetImageURL(v string) *RecognizeIdentityCardRequest {
	s.ImageURL = &v
	return s
}

func (s *RecognizeIdentityCardRequest) SetSide(v string) *RecognizeIdentityCardRequest {
	s.Side = &v
	return s
}

type RecognizeIdentityCardResponse struct {
	RequestId *string                            `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeIdentityCardResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeIdentityCardResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardResponse) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponse) SetRequestId(v string) *RecognizeIdentityCardResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeIdentityCardResponse) SetData(v *RecognizeIdentityCardResponseData) *RecognizeIdentityCardResponse {
	s.Data = v
	return s
}

type RecognizeIdentityCardResponseData struct {
	FrontResult *RecognizeIdentityCardResponseDataFrontResult `json:"FrontResult" xml:"FrontResult" require:"true" type:"Struct"`
	BackResult  *RecognizeIdentityCardResponseDataBackResult  `json:"BackResult" xml:"BackResult" require:"true" type:"Struct"`
}

func (s RecognizeIdentityCardResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseData) SetFrontResult(v *RecognizeIdentityCardResponseDataFrontResult) *RecognizeIdentityCardResponseData {
	s.FrontResult = v
	return s
}

func (s *RecognizeIdentityCardResponseData) SetBackResult(v *RecognizeIdentityCardResponseDataBackResult) *RecognizeIdentityCardResponseData {
	s.BackResult = v
	return s
}

type RecognizeIdentityCardResponseDataFrontResult struct {
	Address          *string                                                         `json:"Address" xml:"Address" require:"true"`
	Name             *string                                                         `json:"Name" xml:"Name" require:"true"`
	Nationality      *string                                                         `json:"Nationality" xml:"Nationality" require:"true"`
	IDNumber         *string                                                         `json:"IDNumber" xml:"IDNumber" require:"true"`
	Gender           *string                                                         `json:"Gender" xml:"Gender" require:"true"`
	BirthDate        *string                                                         `json:"BirthDate" xml:"BirthDate" require:"true"`
	CardAreas        []*RecognizeIdentityCardResponseDataFrontResultCardAreas        `json:"CardAreas" xml:"CardAreas" require:"true" type:"Repeated"`
	FaceRectVertices []*RecognizeIdentityCardResponseDataFrontResultFaceRectVertices `json:"FaceRectVertices" xml:"FaceRectVertices" require:"true" type:"Repeated"`
	FaceRectangle    *RecognizeIdentityCardResponseDataFrontResultFaceRectangle      `json:"FaceRectangle" xml:"FaceRectangle" require:"true" type:"Struct"`
}

func (s RecognizeIdentityCardResponseDataFrontResult) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResult) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetAddress(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.Address = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetName(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.Name = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetNationality(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.Nationality = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetIDNumber(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.IDNumber = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetGender(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.Gender = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetBirthDate(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.BirthDate = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetCardAreas(v []*RecognizeIdentityCardResponseDataFrontResultCardAreas) *RecognizeIdentityCardResponseDataFrontResult {
	s.CardAreas = v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetFaceRectVertices(v []*RecognizeIdentityCardResponseDataFrontResultFaceRectVertices) *RecognizeIdentityCardResponseDataFrontResult {
	s.FaceRectVertices = v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetFaceRectangle(v *RecognizeIdentityCardResponseDataFrontResultFaceRectangle) *RecognizeIdentityCardResponseDataFrontResult {
	s.FaceRectangle = v
	return s
}

type RecognizeIdentityCardResponseDataFrontResultCardAreas struct {
	X *float32 `json:"X" xml:"X" require:"true"`
	Y *float32 `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeIdentityCardResponseDataFrontResultCardAreas) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResultCardAreas) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResultCardAreas) SetX(v float32) *RecognizeIdentityCardResponseDataFrontResultCardAreas {
	s.X = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultCardAreas) SetY(v float32) *RecognizeIdentityCardResponseDataFrontResultCardAreas {
	s.Y = &v
	return s
}

type RecognizeIdentityCardResponseDataFrontResultFaceRectVertices struct {
	X *float32 `json:"X" xml:"X" require:"true"`
	Y *float32 `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectVertices) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectVertices) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectVertices) SetX(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectVertices {
	s.X = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectVertices) SetY(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectVertices {
	s.Y = &v
	return s
}

type RecognizeIdentityCardResponseDataFrontResultFaceRectangle struct {
	Angle  *float32                                                         `json:"Angle" xml:"Angle" require:"true"`
	Center *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter `json:"Center" xml:"Center" require:"true" type:"Struct"`
	Size   *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize   `json:"Size" xml:"Size" require:"true" type:"Struct"`
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangle) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangle) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangle) SetAngle(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectangle {
	s.Angle = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangle) SetCenter(v *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter) *RecognizeIdentityCardResponseDataFrontResultFaceRectangle {
	s.Center = v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangle) SetSize(v *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize) *RecognizeIdentityCardResponseDataFrontResultFaceRectangle {
	s.Size = v
	return s
}

type RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter struct {
	X *float32 `json:"X" xml:"X" require:"true"`
	Y *float32 `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter) SetX(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter {
	s.X = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter) SetY(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter {
	s.Y = &v
	return s
}

type RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize struct {
	Height *float32 `json:"Height" xml:"Height" require:"true"`
	Width  *float32 `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize) SetHeight(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize {
	s.Height = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize) SetWidth(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize {
	s.Width = &v
	return s
}

type RecognizeIdentityCardResponseDataBackResult struct {
	StartDate *string `json:"StartDate" xml:"StartDate" require:"true"`
	EndDate   *string `json:"EndDate" xml:"EndDate" require:"true"`
	Issue     *string `json:"Issue" xml:"Issue" require:"true"`
}

func (s RecognizeIdentityCardResponseDataBackResult) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataBackResult) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataBackResult) SetStartDate(v string) *RecognizeIdentityCardResponseDataBackResult {
	s.StartDate = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataBackResult) SetEndDate(v string) *RecognizeIdentityCardResponseDataBackResult {
	s.EndDate = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataBackResult) SetIssue(v string) *RecognizeIdentityCardResponseDataBackResult {
	s.Issue = &v
	return s
}

type RecognizeIdentityCardAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
	Side           *string   `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeIdentityCardAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeIdentityCardAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeIdentityCardAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeIdentityCardAdvanceRequest) SetImageType(v int) *RecognizeIdentityCardAdvanceRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeIdentityCardAdvanceRequest) SetSide(v string) *RecognizeIdentityCardAdvanceRequest {
	s.Side = &v
	return s
}

type RecognizeBusinessCardRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeBusinessCardRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessCardRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessCardRequest) SetImageType(v int) *RecognizeBusinessCardRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeBusinessCardRequest) SetImageURL(v string) *RecognizeBusinessCardRequest {
	s.ImageURL = &v
	return s
}

type RecognizeBusinessCardResponse struct {
	RequestId *string                            `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeBusinessCardResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeBusinessCardResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessCardResponse) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessCardResponse) SetRequestId(v string) *RecognizeBusinessCardResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeBusinessCardResponse) SetData(v *RecognizeBusinessCardResponseData) *RecognizeBusinessCardResponse {
	s.Data = v
	return s
}

type RecognizeBusinessCardResponseData struct {
	Name *string `json:"Name" xml:"Name" require:"true"`
}

func (s RecognizeBusinessCardResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessCardResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessCardResponseData) SetName(v string) *RecognizeBusinessCardResponseData {
	s.Name = &v
	return s
}

type RecognizeBusinessCardAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeBusinessCardAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessCardAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessCardAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeBusinessCardAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeBusinessCardAdvanceRequest) SetImageType(v int) *RecognizeBusinessCardAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeBankCardRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeBankCardRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeBankCardRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBankCardRequest) SetImageType(v int) *RecognizeBankCardRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeBankCardRequest) SetImageURL(v string) *RecognizeBankCardRequest {
	s.ImageURL = &v
	return s
}

type RecognizeBankCardResponse struct {
	RequestId *string                        `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeBankCardResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeBankCardResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeBankCardResponse) GoString() string {
	return s.String()
}

func (s *RecognizeBankCardResponse) SetRequestId(v string) *RecognizeBankCardResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeBankCardResponse) SetData(v *RecognizeBankCardResponseData) *RecognizeBankCardResponse {
	s.Data = v
	return s
}

type RecognizeBankCardResponseData struct {
	BankName   *string `json:"BankName" xml:"BankName" require:"true"`
	CardNumber *string `json:"CardNumber" xml:"CardNumber" require:"true"`
	ValidDate  *string `json:"ValidDate" xml:"ValidDate" require:"true"`
}

func (s RecognizeBankCardResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeBankCardResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeBankCardResponseData) SetBankName(v string) *RecognizeBankCardResponseData {
	s.BankName = &v
	return s
}

func (s *RecognizeBankCardResponseData) SetCardNumber(v string) *RecognizeBankCardResponseData {
	s.CardNumber = &v
	return s
}

func (s *RecognizeBankCardResponseData) SetValidDate(v string) *RecognizeBankCardResponseData {
	s.ValidDate = &v
	return s
}

type RecognizeBankCardAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeBankCardAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeBankCardAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBankCardAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeBankCardAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeBankCardAdvanceRequest) SetImageType(v int) *RecognizeBankCardAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeVINCodeRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeVINCodeRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeVINCodeRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVINCodeRequest) SetImageType(v int) *RecognizeVINCodeRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeVINCodeRequest) SetImageURL(v string) *RecognizeVINCodeRequest {
	s.ImageURL = &v
	return s
}

type RecognizeVINCodeResponse struct {
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeVINCodeResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeVINCodeResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeVINCodeResponse) GoString() string {
	return s.String()
}

func (s *RecognizeVINCodeResponse) SetRequestId(v string) *RecognizeVINCodeResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeVINCodeResponse) SetData(v *RecognizeVINCodeResponseData) *RecognizeVINCodeResponse {
	s.Data = v
	return s
}

type RecognizeVINCodeResponseData struct {
	VinCode *string `json:"VinCode" xml:"VinCode" require:"true"`
}

func (s RecognizeVINCodeResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeVINCodeResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeVINCodeResponseData) SetVinCode(v string) *RecognizeVINCodeResponseData {
	s.VinCode = &v
	return s
}

type RecognizeVINCodeAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeVINCodeAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeVINCodeAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVINCodeAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeVINCodeAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeVINCodeAdvanceRequest) SetImageType(v int) *RecognizeVINCodeAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeBusinessLicenseRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeBusinessLicenseRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessLicenseRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseRequest) SetImageType(v int) *RecognizeBusinessLicenseRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeBusinessLicenseRequest) SetImageURL(v string) *RecognizeBusinessLicenseRequest {
	s.ImageURL = &v
	return s
}

type RecognizeBusinessLicenseResponse struct {
	RequestId *string                               `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeBusinessLicenseResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeBusinessLicenseResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessLicenseResponse) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponse) SetRequestId(v string) *RecognizeBusinessLicenseResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeBusinessLicenseResponse) SetData(v *RecognizeBusinessLicenseResponseData) *RecognizeBusinessLicenseResponse {
	s.Data = v
	return s
}

type RecognizeBusinessLicenseResponseData struct {
	Angle          *string                                     `json:"Angle" xml:"Angle" require:"true"`
	RegisterNumber *string                                     `json:"RegisterNumber" xml:"RegisterNumber" require:"true"`
	Name           *string                                     `json:"Name" xml:"Name" require:"true"`
	Type           *string                                     `json:"Type" xml:"Type" require:"true"`
	LegalPerson    *string                                     `json:"LegalPerson" xml:"LegalPerson" require:"true"`
	EstablishDate  *string                                     `json:"EstablishDate" xml:"EstablishDate" require:"true"`
	ValidPeriod    *string                                     `json:"ValidPeriod" xml:"ValidPeriod" require:"true"`
	Address        *string                                     `json:"Address" xml:"Address" require:"true"`
	Capital        *string                                     `json:"Capital" xml:"Capital" require:"true"`
	Business       *string                                     `json:"Business" xml:"Business" require:"true"`
	Emblem         *RecognizeBusinessLicenseResponseDataEmblem `json:"Emblem" xml:"Emblem" require:"true" type:"Struct"`
	Title          *RecognizeBusinessLicenseResponseDataTitle  `json:"Title" xml:"Title" require:"true" type:"Struct"`
	Stamp          *RecognizeBusinessLicenseResponseDataStamp  `json:"Stamp" xml:"Stamp" require:"true" type:"Struct"`
	QRCode         *RecognizeBusinessLicenseResponseDataQRCode `json:"QRCode" xml:"QRCode" require:"true" type:"Struct"`
}

func (s RecognizeBusinessLicenseResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessLicenseResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponseData) SetAngle(v string) *RecognizeBusinessLicenseResponseData {
	s.Angle = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetRegisterNumber(v string) *RecognizeBusinessLicenseResponseData {
	s.RegisterNumber = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetName(v string) *RecognizeBusinessLicenseResponseData {
	s.Name = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetType(v string) *RecognizeBusinessLicenseResponseData {
	s.Type = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetLegalPerson(v string) *RecognizeBusinessLicenseResponseData {
	s.LegalPerson = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetEstablishDate(v string) *RecognizeBusinessLicenseResponseData {
	s.EstablishDate = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetValidPeriod(v string) *RecognizeBusinessLicenseResponseData {
	s.ValidPeriod = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetAddress(v string) *RecognizeBusinessLicenseResponseData {
	s.Address = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetCapital(v string) *RecognizeBusinessLicenseResponseData {
	s.Capital = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetBusiness(v string) *RecognizeBusinessLicenseResponseData {
	s.Business = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetEmblem(v *RecognizeBusinessLicenseResponseDataEmblem) *RecognizeBusinessLicenseResponseData {
	s.Emblem = v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetTitle(v *RecognizeBusinessLicenseResponseDataTitle) *RecognizeBusinessLicenseResponseData {
	s.Title = v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetStamp(v *RecognizeBusinessLicenseResponseDataStamp) *RecognizeBusinessLicenseResponseData {
	s.Stamp = v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetQRCode(v *RecognizeBusinessLicenseResponseDataQRCode) *RecognizeBusinessLicenseResponseData {
	s.QRCode = v
	return s
}

type RecognizeBusinessLicenseResponseDataEmblem struct {
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeBusinessLicenseResponseDataEmblem) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessLicenseResponseDataEmblem) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponseDataEmblem) SetTop(v int) *RecognizeBusinessLicenseResponseDataEmblem {
	s.Top = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataEmblem) SetLeft(v int) *RecognizeBusinessLicenseResponseDataEmblem {
	s.Left = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataEmblem) SetHeight(v int) *RecognizeBusinessLicenseResponseDataEmblem {
	s.Height = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataEmblem) SetWidth(v int) *RecognizeBusinessLicenseResponseDataEmblem {
	s.Width = &v
	return s
}

type RecognizeBusinessLicenseResponseDataTitle struct {
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeBusinessLicenseResponseDataTitle) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessLicenseResponseDataTitle) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponseDataTitle) SetTop(v int) *RecognizeBusinessLicenseResponseDataTitle {
	s.Top = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataTitle) SetLeft(v int) *RecognizeBusinessLicenseResponseDataTitle {
	s.Left = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataTitle) SetHeight(v int) *RecognizeBusinessLicenseResponseDataTitle {
	s.Height = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataTitle) SetWidth(v int) *RecognizeBusinessLicenseResponseDataTitle {
	s.Width = &v
	return s
}

type RecognizeBusinessLicenseResponseDataStamp struct {
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeBusinessLicenseResponseDataStamp) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessLicenseResponseDataStamp) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponseDataStamp) SetTop(v int) *RecognizeBusinessLicenseResponseDataStamp {
	s.Top = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataStamp) SetLeft(v int) *RecognizeBusinessLicenseResponseDataStamp {
	s.Left = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataStamp) SetHeight(v int) *RecognizeBusinessLicenseResponseDataStamp {
	s.Height = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataStamp) SetWidth(v int) *RecognizeBusinessLicenseResponseDataStamp {
	s.Width = &v
	return s
}

type RecognizeBusinessLicenseResponseDataQRCode struct {
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeBusinessLicenseResponseDataQRCode) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessLicenseResponseDataQRCode) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponseDataQRCode) SetTop(v int) *RecognizeBusinessLicenseResponseDataQRCode {
	s.Top = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataQRCode) SetLeft(v int) *RecognizeBusinessLicenseResponseDataQRCode {
	s.Left = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataQRCode) SetHeight(v int) *RecognizeBusinessLicenseResponseDataQRCode {
	s.Height = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataQRCode) SetWidth(v int) *RecognizeBusinessLicenseResponseDataQRCode {
	s.Width = &v
	return s
}

type RecognizeBusinessLicenseAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeBusinessLicenseAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeBusinessLicenseAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeBusinessLicenseAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeBusinessLicenseAdvanceRequest) SetImageType(v int) *RecognizeBusinessLicenseAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeTrainTicketRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeTrainTicketRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeTrainTicketRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTrainTicketRequest) SetImageType(v int) *RecognizeTrainTicketRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeTrainTicketRequest) SetImageURL(v string) *RecognizeTrainTicketRequest {
	s.ImageURL = &v
	return s
}

type RecognizeTrainTicketResponse struct {
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeTrainTicketResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeTrainTicketResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeTrainTicketResponse) GoString() string {
	return s.String()
}

func (s *RecognizeTrainTicketResponse) SetRequestId(v string) *RecognizeTrainTicketResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeTrainTicketResponse) SetData(v *RecognizeTrainTicketResponseData) *RecognizeTrainTicketResponse {
	s.Data = v
	return s
}

type RecognizeTrainTicketResponseData struct {
	Date             *string  `json:"Date" xml:"Date" require:"true"`
	Destination      *string  `json:"Destination" xml:"Destination" require:"true"`
	Level            *string  `json:"Level" xml:"Level" require:"true"`
	Number           *string  `json:"Number" xml:"Number" require:"true"`
	Name             *string  `json:"Name" xml:"Name" require:"true"`
	DepartureStation *string  `json:"DepartureStation" xml:"DepartureStation" require:"true"`
	Seat             *string  `json:"Seat" xml:"Seat" require:"true"`
	Price            *float32 `json:"Price" xml:"Price" require:"true"`
}

func (s RecognizeTrainTicketResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeTrainTicketResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeTrainTicketResponseData) SetDate(v string) *RecognizeTrainTicketResponseData {
	s.Date = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetDestination(v string) *RecognizeTrainTicketResponseData {
	s.Destination = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetLevel(v string) *RecognizeTrainTicketResponseData {
	s.Level = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetNumber(v string) *RecognizeTrainTicketResponseData {
	s.Number = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetName(v string) *RecognizeTrainTicketResponseData {
	s.Name = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetDepartureStation(v string) *RecognizeTrainTicketResponseData {
	s.DepartureStation = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetSeat(v string) *RecognizeTrainTicketResponseData {
	s.Seat = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetPrice(v float32) *RecognizeTrainTicketResponseData {
	s.Price = &v
	return s
}

type RecognizeTrainTicketAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeTrainTicketAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeTrainTicketAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTrainTicketAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeTrainTicketAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeTrainTicketAdvanceRequest) SetImageType(v int) *RecognizeTrainTicketAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeDrivingLicenseRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	Side      *string `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeDrivingLicenseRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeDrivingLicenseRequest) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseRequest) SetImageType(v int) *RecognizeDrivingLicenseRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeDrivingLicenseRequest) SetImageURL(v string) *RecognizeDrivingLicenseRequest {
	s.ImageURL = &v
	return s
}

func (s *RecognizeDrivingLicenseRequest) SetSide(v string) *RecognizeDrivingLicenseRequest {
	s.Side = &v
	return s
}

type RecognizeDrivingLicenseResponse struct {
	RequestId *string                              `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeDrivingLicenseResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeDrivingLicenseResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeDrivingLicenseResponse) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseResponse) SetRequestId(v string) *RecognizeDrivingLicenseResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeDrivingLicenseResponse) SetData(v *RecognizeDrivingLicenseResponseData) *RecognizeDrivingLicenseResponse {
	s.Data = v
	return s
}

type RecognizeDrivingLicenseResponseData struct {
	FaceResult *RecognizeDrivingLicenseResponseDataFaceResult `json:"FaceResult" xml:"FaceResult" require:"true" type:"Struct"`
	BackResult *RecognizeDrivingLicenseResponseDataBackResult `json:"BackResult" xml:"BackResult" require:"true" type:"Struct"`
}

func (s RecognizeDrivingLicenseResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeDrivingLicenseResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseResponseData) SetFaceResult(v *RecognizeDrivingLicenseResponseDataFaceResult) *RecognizeDrivingLicenseResponseData {
	s.FaceResult = v
	return s
}

func (s *RecognizeDrivingLicenseResponseData) SetBackResult(v *RecognizeDrivingLicenseResponseDataBackResult) *RecognizeDrivingLicenseResponseData {
	s.BackResult = v
	return s
}

type RecognizeDrivingLicenseResponseDataFaceResult struct {
	PlateNumber  *string `json:"PlateNumber" xml:"PlateNumber" require:"true"`
	VehicleType  *string `json:"VehicleType" xml:"VehicleType" require:"true"`
	Owner        *string `json:"Owner" xml:"Owner" require:"true"`
	UseCharacter *string `json:"UseCharacter" xml:"UseCharacter" require:"true"`
	Address      *string `json:"Address" xml:"Address" require:"true"`
	Model        *string `json:"Model" xml:"Model" require:"true"`
	Vin          *string `json:"Vin" xml:"Vin" require:"true"`
	EngineNumber *string `json:"EngineNumber" xml:"EngineNumber" require:"true"`
	RegisterDate *string `json:"RegisterDate" xml:"RegisterDate" require:"true"`
	IssueDate    *string `json:"IssueDate" xml:"IssueDate" require:"true"`
}

func (s RecognizeDrivingLicenseResponseDataFaceResult) String() string {
	return service.Prettify(s)
}

func (s RecognizeDrivingLicenseResponseDataFaceResult) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetPlateNumber(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.PlateNumber = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetVehicleType(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.VehicleType = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetOwner(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.Owner = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetUseCharacter(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.UseCharacter = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetAddress(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.Address = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetModel(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.Model = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetVin(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.Vin = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetEngineNumber(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.EngineNumber = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetRegisterDate(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.RegisterDate = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetIssueDate(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.IssueDate = &v
	return s
}

type RecognizeDrivingLicenseResponseDataBackResult struct {
	ApprovedPassengerCapacity *string `json:"ApprovedPassengerCapacity" xml:"ApprovedPassengerCapacity" require:"true"`
	ApprovedLoad              *string `json:"ApprovedLoad" xml:"ApprovedLoad" require:"true"`
	FileNumber                *string `json:"FileNumber" xml:"FileNumber" require:"true"`
	GrossMass                 *string `json:"GrossMass" xml:"GrossMass" require:"true"`
	EnergyType                *string `json:"EnergyType" xml:"EnergyType" require:"true"`
	InspectionRecord          *string `json:"InspectionRecord" xml:"InspectionRecord" require:"true"`
	OverallDimension          *string `json:"OverallDimension" xml:"OverallDimension" require:"true"`
	TractionMass              *string `json:"TractionMass" xml:"TractionMass" require:"true"`
	UnladenMass               *string `json:"UnladenMass" xml:"UnladenMass" require:"true"`
	PlateNumber               *string `json:"PlateNumber" xml:"PlateNumber" require:"true"`
}

func (s RecognizeDrivingLicenseResponseDataBackResult) String() string {
	return service.Prettify(s)
}

func (s RecognizeDrivingLicenseResponseDataBackResult) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetApprovedPassengerCapacity(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.ApprovedPassengerCapacity = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetApprovedLoad(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.ApprovedLoad = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetFileNumber(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.FileNumber = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetGrossMass(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.GrossMass = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetEnergyType(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.EnergyType = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetInspectionRecord(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.InspectionRecord = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetOverallDimension(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.OverallDimension = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetTractionMass(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.TractionMass = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetUnladenMass(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.UnladenMass = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetPlateNumber(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.PlateNumber = &v
	return s
}

type RecognizeDrivingLicenseAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
	Side           *string   `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeDrivingLicenseAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeDrivingLicenseAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeDrivingLicenseAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeDrivingLicenseAdvanceRequest) SetImageType(v int) *RecognizeDrivingLicenseAdvanceRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeDrivingLicenseAdvanceRequest) SetSide(v string) *RecognizeDrivingLicenseAdvanceRequest {
	s.Side = &v
	return s
}

type Client struct {
	service.BaseClient
}

func NewClient(config *Config) (*Client, error) {
	client := &Client{}
	input := make(map[string]interface{})
	byt, _ := json.Marshal(config)
	err := json.Unmarshal(byt, &input)
	if err != nil {
		return nil, err
	}
	err = client.InitClient(input)
	if err != nil {
		return nil, err
	}
	return client, nil
}

func (client *Client) _request(action string, protocol string, method string, request map[string]interface{}, runtime *common.RuntimeObject) (_result map[string]interface{}, _err error) {
	_err = tea.Validate(runtime)
	if _err != nil {
		return make(map[string]interface{}), _err
	}
	_runtime := map[string]interface{}{
		"timeouted":      "retry",
		"readTimeout":    common.DefaultNumber(tea.IntValue(runtime.ReadTimeout), client.ReadTimeout),
		"connectTimeout": common.DefaultNumber(tea.IntValue(runtime.ConnectTimeout), client.ConnectTimeout),
		"httpProxy":      common.Default(tea.StringValue(runtime.HttpProxy), client.HttpProxy),
		"httpsProxy":     common.Default(tea.StringValue(runtime.HttpsProxy), client.HttpsProxy),
		"noProxy":        common.Default(tea.StringValue(runtime.NoProxy), client.NoProxy),
		"maxIdleConns":   common.DefaultNumber(tea.IntValue(runtime.MaxIdleConns), client.MaxIdleConns),
		"retry": map[string]interface{}{
			"retryable":   tea.BoolValue(runtime.Autoretry),
			"maxAttempts": common.DefaultNumber(tea.IntValue(runtime.MaxAttempts), 3),
		},
		"backoff": map[string]interface{}{
			"policy": common.Default(tea.StringValue(runtime.BackoffPolicy), "no"),
			"period": common.DefaultNumber(tea.IntValue(runtime.BackoffPeriod), 1),
		},
		"ignoreSSL": tea.BoolValue(runtime.IgnoreSSL),
	}

	_resp := make(map[string]interface{})
	for _retryTimes := 0; tea.AllowRetry(_runtime["retry"], _retryTimes); _retryTimes++ {
		if _retryTimes > 0 {
			_backoffTime := tea.GetBackoffTime(_runtime["backoff"], _retryTimes)
			if _backoffTime > 0 {
				tea.Sleep(_backoffTime)
			}
		}

		_resp, _err = func() (map[string]interface{}, error) {
			request_ := tea.NewRequest()
			request_.Protocol = common.Default(client.Protocol, protocol)
			request_.Method = method
			request_.Pathname = "/"
			request_.Query = common.Query(tea.ToMap(map[string]interface{}{
				"Action":           action,
				"Format":           "json",
				"RegionId":         client.RegionId,
				"Timestamp":        common.GetTimestamp(),
				"Date":             common.GetTimestamp(),
				"Version":          "2019-12-30",
				"SignatureMethod":  "HMAC-SHA1",
				"SignatureVersion": "1.0",
				"SignatureNonce":   common.GetNonce(),
				"AccessKeyId":      client.GetAccessKeyId(),
			}, request))
			request_.Headers = map[string]string{
				"host":       common.GetHost("ocr", client.RegionId, client.Endpoint),
				"user-agent": common.GetUserAgent(client.UserAgent),
			}
			request_.Query["Signature"] = common.GetSignature(request_, client.GetAccessKeySecret())
			response_, _err := tea.DoRequest(request_, _runtime)
			if _err != nil {
				return make(map[string]interface{}), _err
			}
			body, _err := common.Json(response_)
			if _err != nil {
				return make(map[string]interface{}), _err
			}

			if common.HasError(body) {
				_err = tea.NewSDKError(map[string]interface{}{
					"message": body["Message"],
					"data":    body,
					"code":    body["Code"],
				})
				return make(map[string]interface{}), _err
			}

			return body, _err
		}()
		if !tea.Retryable(_err) {
			break
		}
	}

	return _resp, _err
}

func (client *Client) RecognizeCharacter(request *RecognizeCharacterRequest, runtime *common.RuntimeObject) (_result *RecognizeCharacterResponse, _err error) {
	_result = &RecognizeCharacterResponse{}
	_body, _err := client._request("RecognizeCharacter", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeCharacterAdvance(request *RecognizeCharacterAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeCharacterResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeCharacterreq := &RecognizeCharacterRequest{}
	common.Convert(request, recognizeCharacterreq)
	recognizeCharacterreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeCharacterResp, _err := client.RecognizeCharacter(recognizeCharacterreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeCharacterResp, _err
}

func (client *Client) RecognizeDriverLicense(request *RecognizeDriverLicenseRequest, runtime *common.RuntimeObject) (_result *RecognizeDriverLicenseResponse, _err error) {
	_result = &RecognizeDriverLicenseResponse{}
	_body, _err := client._request("RecognizeDriverLicense", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeDriverLicenseAdvance(request *RecognizeDriverLicenseAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeDriverLicenseResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeDriverLicensereq := &RecognizeDriverLicenseRequest{}
	common.Convert(request, recognizeDriverLicensereq)
	recognizeDriverLicensereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeDriverLicenseResp, _err := client.RecognizeDriverLicense(recognizeDriverLicensereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeDriverLicenseResp, _err
}

func (client *Client) RecognizeLicensePlate(request *RecognizeLicensePlateRequest, runtime *common.RuntimeObject) (_result *RecognizeLicensePlateResponse, _err error) {
	_result = &RecognizeLicensePlateResponse{}
	_body, _err := client._request("RecognizeLicensePlate", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeLicensePlateAdvance(request *RecognizeLicensePlateAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeLicensePlateResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeLicensePlatereq := &RecognizeLicensePlateRequest{}
	common.Convert(request, recognizeLicensePlatereq)
	recognizeLicensePlatereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeLicensePlateResp, _err := client.RecognizeLicensePlate(recognizeLicensePlatereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeLicensePlateResp, _err
}

func (client *Client) RecognizeTable(request *RecognizeTableRequest, runtime *common.RuntimeObject) (_result *RecognizeTableResponse, _err error) {
	_result = &RecognizeTableResponse{}
	_body, _err := client._request("RecognizeTable", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTableAdvance(request *RecognizeTableAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeTableResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeTablereq := &RecognizeTableRequest{}
	common.Convert(request, recognizeTablereq)
	recognizeTablereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTableResp, _err := client.RecognizeTable(recognizeTablereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeTableResp, _err
}

func (client *Client) RecognizeStamp(request *RecognizeStampRequest, runtime *common.RuntimeObject) (_result *RecognizeStampResponse, _err error) {
	_result = &RecognizeStampResponse{}
	_body, _err := client._request("RecognizeStamp", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeStampAdvance(request *RecognizeStampAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeStampResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeStampreq := &RecognizeStampRequest{}
	common.Convert(request, recognizeStampreq)
	recognizeStampreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeStampResp, _err := client.RecognizeStamp(recognizeStampreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeStampResp, _err
}

func (client *Client) RecognizeAccountPage(request *RecognizeAccountPageRequest, runtime *common.RuntimeObject) (_result *RecognizeAccountPageResponse, _err error) {
	_result = &RecognizeAccountPageResponse{}
	_body, _err := client._request("RecognizeAccountPage", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeAccountPageAdvance(request *RecognizeAccountPageAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeAccountPageResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeAccountPagereq := &RecognizeAccountPageRequest{}
	common.Convert(request, recognizeAccountPagereq)
	recognizeAccountPagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeAccountPageResp, _err := client.RecognizeAccountPage(recognizeAccountPagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeAccountPageResp, _err
}

func (client *Client) RecognizeTaxiInvoice(request *RecognizeTaxiInvoiceRequest, runtime *common.RuntimeObject) (_result *RecognizeTaxiInvoiceResponse, _err error) {
	_result = &RecognizeTaxiInvoiceResponse{}
	_body, _err := client._request("RecognizeTaxiInvoice", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTaxiInvoiceAdvance(request *RecognizeTaxiInvoiceAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeTaxiInvoiceResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeTaxiInvoicereq := &RecognizeTaxiInvoiceRequest{}
	common.Convert(request, recognizeTaxiInvoicereq)
	recognizeTaxiInvoicereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTaxiInvoiceResp, _err := client.RecognizeTaxiInvoice(recognizeTaxiInvoicereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeTaxiInvoiceResp, _err
}

func (client *Client) RecognizeIdentityCard(request *RecognizeIdentityCardRequest, runtime *common.RuntimeObject) (_result *RecognizeIdentityCardResponse, _err error) {
	_result = &RecognizeIdentityCardResponse{}
	_body, _err := client._request("RecognizeIdentityCard", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeIdentityCardAdvance(request *RecognizeIdentityCardAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeIdentityCardResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeIdentityCardreq := &RecognizeIdentityCardRequest{}
	common.Convert(request, recognizeIdentityCardreq)
	recognizeIdentityCardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeIdentityCardResp, _err := client.RecognizeIdentityCard(recognizeIdentityCardreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeIdentityCardResp, _err
}

func (client *Client) RecognizeBusinessCard(request *RecognizeBusinessCardRequest, runtime *common.RuntimeObject) (_result *RecognizeBusinessCardResponse, _err error) {
	_result = &RecognizeBusinessCardResponse{}
	_body, _err := client._request("RecognizeBusinessCard", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeBusinessCardAdvance(request *RecognizeBusinessCardAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeBusinessCardResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeBusinessCardreq := &RecognizeBusinessCardRequest{}
	common.Convert(request, recognizeBusinessCardreq)
	recognizeBusinessCardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeBusinessCardResp, _err := client.RecognizeBusinessCard(recognizeBusinessCardreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeBusinessCardResp, _err
}

func (client *Client) RecognizeBankCard(request *RecognizeBankCardRequest, runtime *common.RuntimeObject) (_result *RecognizeBankCardResponse, _err error) {
	_result = &RecognizeBankCardResponse{}
	_body, _err := client._request("RecognizeBankCard", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeBankCardAdvance(request *RecognizeBankCardAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeBankCardResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeBankCardreq := &RecognizeBankCardRequest{}
	common.Convert(request, recognizeBankCardreq)
	recognizeBankCardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeBankCardResp, _err := client.RecognizeBankCard(recognizeBankCardreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeBankCardResp, _err
}

func (client *Client) RecognizeVINCode(request *RecognizeVINCodeRequest, runtime *common.RuntimeObject) (_result *RecognizeVINCodeResponse, _err error) {
	_result = &RecognizeVINCodeResponse{}
	_body, _err := client._request("RecognizeVINCode", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVINCodeAdvance(request *RecognizeVINCodeAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeVINCodeResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeVINCodereq := &RecognizeVINCodeRequest{}
	common.Convert(request, recognizeVINCodereq)
	recognizeVINCodereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVINCodeResp, _err := client.RecognizeVINCode(recognizeVINCodereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeVINCodeResp, _err
}

func (client *Client) RecognizeBusinessLicense(request *RecognizeBusinessLicenseRequest, runtime *common.RuntimeObject) (_result *RecognizeBusinessLicenseResponse, _err error) {
	_result = &RecognizeBusinessLicenseResponse{}
	_body, _err := client._request("RecognizeBusinessLicense", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeBusinessLicenseAdvance(request *RecognizeBusinessLicenseAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeBusinessLicenseResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeBusinessLicensereq := &RecognizeBusinessLicenseRequest{}
	common.Convert(request, recognizeBusinessLicensereq)
	recognizeBusinessLicensereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeBusinessLicenseResp, _err := client.RecognizeBusinessLicense(recognizeBusinessLicensereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeBusinessLicenseResp, _err
}

func (client *Client) RecognizeTrainTicket(request *RecognizeTrainTicketRequest, runtime *common.RuntimeObject) (_result *RecognizeTrainTicketResponse, _err error) {
	_result = &RecognizeTrainTicketResponse{}
	_body, _err := client._request("RecognizeTrainTicket", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTrainTicketAdvance(request *RecognizeTrainTicketAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeTrainTicketResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeTrainTicketreq := &RecognizeTrainTicketRequest{}
	common.Convert(request, recognizeTrainTicketreq)
	recognizeTrainTicketreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTrainTicketResp, _err := client.RecognizeTrainTicket(recognizeTrainTicketreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeTrainTicketResp, _err
}

func (client *Client) RecognizeDrivingLicense(request *RecognizeDrivingLicenseRequest, runtime *common.RuntimeObject) (_result *RecognizeDrivingLicenseResponse, _err error) {
	_result = &RecognizeDrivingLicenseResponse{}
	_body, _err := client._request("RecognizeDrivingLicense", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeDrivingLicenseAdvance(request *RecognizeDrivingLicenseAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeDrivingLicenseResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	str, _err := common.ReadAsString(request.ImageURLObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossClient.PostObject(uploadRequest, runtime)
	recognizeDrivingLicensereq := &RecognizeDrivingLicenseRequest{}
	common.Convert(request, recognizeDrivingLicensereq)
	recognizeDrivingLicensereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeDrivingLicenseResp, _err := client.RecognizeDrivingLicense(recognizeDrivingLicensereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeDrivingLicenseResp, _err
}
