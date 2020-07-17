// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type QuerySettleBillRequest struct {
	BillingCycle           *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	Type                   *string `json:"Type,omitempty" xml:"Type,omitempty"`
	ProductCode            *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ProductType            *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType       *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
	IsHideZeroCharge       *bool   `json:"IsHideZeroCharge,omitempty" xml:"IsHideZeroCharge,omitempty"`
	IsDisplayLocalCurrency *bool   `json:"IsDisplayLocalCurrency,omitempty" xml:"IsDisplayLocalCurrency,omitempty"`
	NextToken              *string `json:"NextToken,omitempty" xml:"NextToken,omitempty"`
	MaxResults             *int    `json:"MaxResults,omitempty" xml:"MaxResults,omitempty"`
}

func (s QuerySettleBillRequest) String() string {
	return tea.Prettify(s)
}

func (s QuerySettleBillRequest) GoString() string {
	return s.String()
}

func (s *QuerySettleBillRequest) SetBillingCycle(v string) *QuerySettleBillRequest {
	s.BillingCycle = &v
	return s
}

func (s *QuerySettleBillRequest) SetType(v string) *QuerySettleBillRequest {
	s.Type = &v
	return s
}

func (s *QuerySettleBillRequest) SetProductCode(v string) *QuerySettleBillRequest {
	s.ProductCode = &v
	return s
}

func (s *QuerySettleBillRequest) SetProductType(v string) *QuerySettleBillRequest {
	s.ProductType = &v
	return s
}

func (s *QuerySettleBillRequest) SetSubscriptionType(v string) *QuerySettleBillRequest {
	s.SubscriptionType = &v
	return s
}

func (s *QuerySettleBillRequest) SetIsHideZeroCharge(v bool) *QuerySettleBillRequest {
	s.IsHideZeroCharge = &v
	return s
}

func (s *QuerySettleBillRequest) SetIsDisplayLocalCurrency(v bool) *QuerySettleBillRequest {
	s.IsDisplayLocalCurrency = &v
	return s
}

func (s *QuerySettleBillRequest) SetNextToken(v string) *QuerySettleBillRequest {
	s.NextToken = &v
	return s
}

func (s *QuerySettleBillRequest) SetMaxResults(v int) *QuerySettleBillRequest {
	s.MaxResults = &v
	return s
}

type QuerySettleBillResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                        `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                      `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                      `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QuerySettleBillResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QuerySettleBillResponse) String() string {
	return tea.Prettify(s)
}

func (s QuerySettleBillResponse) GoString() string {
	return s.String()
}

func (s *QuerySettleBillResponse) SetRequestId(v string) *QuerySettleBillResponse {
	s.RequestId = &v
	return s
}

func (s *QuerySettleBillResponse) SetSuccess(v bool) *QuerySettleBillResponse {
	s.Success = &v
	return s
}

func (s *QuerySettleBillResponse) SetCode(v string) *QuerySettleBillResponse {
	s.Code = &v
	return s
}

func (s *QuerySettleBillResponse) SetMessage(v string) *QuerySettleBillResponse {
	s.Message = &v
	return s
}

func (s *QuerySettleBillResponse) SetData(v *QuerySettleBillResponseData) *QuerySettleBillResponse {
	s.Data = v
	return s
}

type QuerySettleBillResponseData struct {
	BillingCycle *string                           `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	AccountID    *string                           `json:"AccountID,omitempty" xml:"AccountID,omitempty" require:"true"`
	AccountName  *string                           `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	NextToken    *string                           `json:"NextToken,omitempty" xml:"NextToken,omitempty" require:"true"`
	MaxResults   *int                              `json:"MaxResults,omitempty" xml:"MaxResults,omitempty" require:"true"`
	TotalCount   *int                              `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Items        *QuerySettleBillResponseDataItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s QuerySettleBillResponseData) String() string {
	return tea.Prettify(s)
}

func (s QuerySettleBillResponseData) GoString() string {
	return s.String()
}

func (s *QuerySettleBillResponseData) SetBillingCycle(v string) *QuerySettleBillResponseData {
	s.BillingCycle = &v
	return s
}

func (s *QuerySettleBillResponseData) SetAccountID(v string) *QuerySettleBillResponseData {
	s.AccountID = &v
	return s
}

func (s *QuerySettleBillResponseData) SetAccountName(v string) *QuerySettleBillResponseData {
	s.AccountName = &v
	return s
}

func (s *QuerySettleBillResponseData) SetNextToken(v string) *QuerySettleBillResponseData {
	s.NextToken = &v
	return s
}

func (s *QuerySettleBillResponseData) SetMaxResults(v int) *QuerySettleBillResponseData {
	s.MaxResults = &v
	return s
}

func (s *QuerySettleBillResponseData) SetTotalCount(v int) *QuerySettleBillResponseData {
	s.TotalCount = &v
	return s
}

func (s *QuerySettleBillResponseData) SetItems(v *QuerySettleBillResponseDataItems) *QuerySettleBillResponseData {
	s.Items = v
	return s
}

type QuerySettleBillResponseDataItems struct {
	Item []*QuerySettleBillResponseDataItemsItem `json:"Item,omitempty" xml:"Item,omitempty" require:"true" type:"Repeated"`
}

func (s QuerySettleBillResponseDataItems) String() string {
	return tea.Prettify(s)
}

func (s QuerySettleBillResponseDataItems) GoString() string {
	return s.String()
}

func (s *QuerySettleBillResponseDataItems) SetItem(v []*QuerySettleBillResponseDataItemsItem) *QuerySettleBillResponseDataItems {
	s.Item = v
	return s
}

type QuerySettleBillResponseDataItemsItem struct {
	RecordID              *string  `json:"RecordID,omitempty" xml:"RecordID,omitempty" require:"true"`
	Item                  *string  `json:"Item,omitempty" xml:"Item,omitempty" require:"true"`
	OwnerID               *string  `json:"OwnerID,omitempty" xml:"OwnerID,omitempty" require:"true"`
	UsageStartTime        *string  `json:"UsageStartTime,omitempty" xml:"UsageStartTime,omitempty" require:"true"`
	UsageEndTime          *string  `json:"UsageEndTime,omitempty" xml:"UsageEndTime,omitempty" require:"true"`
	PaymentTime           *string  `json:"PaymentTime,omitempty" xml:"PaymentTime,omitempty" require:"true"`
	ProductCode           *string  `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType           *string  `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType      *string  `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	ProductName           *string  `json:"ProductName,omitempty" xml:"ProductName,omitempty" require:"true"`
	ProductDetail         *string  `json:"ProductDetail,omitempty" xml:"ProductDetail,omitempty" require:"true"`
	PretaxGrossAmount     *float32 `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	DeductedByCoupons     *float32 `json:"DeductedByCoupons,omitempty" xml:"DeductedByCoupons,omitempty" require:"true"`
	InvoiceDiscount       *float32 `json:"InvoiceDiscount,omitempty" xml:"InvoiceDiscount,omitempty" require:"true"`
	PretaxAmount          *float32 `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	Currency              *string  `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	PretaxAmountLocal     *float32 `json:"PretaxAmountLocal,omitempty" xml:"PretaxAmountLocal,omitempty" require:"true"`
	Tax                   *float32 `json:"Tax,omitempty" xml:"Tax,omitempty" require:"true"`
	PaymentAmount         *float32 `json:"PaymentAmount,omitempty" xml:"PaymentAmount,omitempty" require:"true"`
	DeductedByCashCoupons *float32 `json:"DeductedByCashCoupons,omitempty" xml:"DeductedByCashCoupons,omitempty" require:"true"`
	DeductedByPrepaidCard *float32 `json:"DeductedByPrepaidCard,omitempty" xml:"DeductedByPrepaidCard,omitempty" require:"true"`
	OutstandingAmount     *float32 `json:"OutstandingAmount,omitempty" xml:"OutstandingAmount,omitempty" require:"true"`
	AfterTaxAmount        *float32 `json:"AfterTaxAmount,omitempty" xml:"AfterTaxAmount,omitempty" require:"true"`
	Status                *string  `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	PaymentCurrency       *string  `json:"PaymentCurrency,omitempty" xml:"PaymentCurrency,omitempty" require:"true"`
	PaymentTransactionID  *string  `json:"PaymentTransactionID,omitempty" xml:"PaymentTransactionID,omitempty" require:"true"`
	RoundDownDiscount     *string  `json:"RoundDownDiscount,omitempty" xml:"RoundDownDiscount,omitempty" require:"true"`
	SubOrderId            *string  `json:"SubOrderId,omitempty" xml:"SubOrderId,omitempty" require:"true"`
}

func (s QuerySettleBillResponseDataItemsItem) String() string {
	return tea.Prettify(s)
}

func (s QuerySettleBillResponseDataItemsItem) GoString() string {
	return s.String()
}

func (s *QuerySettleBillResponseDataItemsItem) SetRecordID(v string) *QuerySettleBillResponseDataItemsItem {
	s.RecordID = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetItem(v string) *QuerySettleBillResponseDataItemsItem {
	s.Item = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetOwnerID(v string) *QuerySettleBillResponseDataItemsItem {
	s.OwnerID = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetUsageStartTime(v string) *QuerySettleBillResponseDataItemsItem {
	s.UsageStartTime = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetUsageEndTime(v string) *QuerySettleBillResponseDataItemsItem {
	s.UsageEndTime = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetPaymentTime(v string) *QuerySettleBillResponseDataItemsItem {
	s.PaymentTime = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetProductCode(v string) *QuerySettleBillResponseDataItemsItem {
	s.ProductCode = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetProductType(v string) *QuerySettleBillResponseDataItemsItem {
	s.ProductType = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetSubscriptionType(v string) *QuerySettleBillResponseDataItemsItem {
	s.SubscriptionType = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetProductName(v string) *QuerySettleBillResponseDataItemsItem {
	s.ProductName = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetProductDetail(v string) *QuerySettleBillResponseDataItemsItem {
	s.ProductDetail = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetPretaxGrossAmount(v float32) *QuerySettleBillResponseDataItemsItem {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetDeductedByCoupons(v float32) *QuerySettleBillResponseDataItemsItem {
	s.DeductedByCoupons = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetInvoiceDiscount(v float32) *QuerySettleBillResponseDataItemsItem {
	s.InvoiceDiscount = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetPretaxAmount(v float32) *QuerySettleBillResponseDataItemsItem {
	s.PretaxAmount = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetCurrency(v string) *QuerySettleBillResponseDataItemsItem {
	s.Currency = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetPretaxAmountLocal(v float32) *QuerySettleBillResponseDataItemsItem {
	s.PretaxAmountLocal = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetTax(v float32) *QuerySettleBillResponseDataItemsItem {
	s.Tax = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetPaymentAmount(v float32) *QuerySettleBillResponseDataItemsItem {
	s.PaymentAmount = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetDeductedByCashCoupons(v float32) *QuerySettleBillResponseDataItemsItem {
	s.DeductedByCashCoupons = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetDeductedByPrepaidCard(v float32) *QuerySettleBillResponseDataItemsItem {
	s.DeductedByPrepaidCard = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetOutstandingAmount(v float32) *QuerySettleBillResponseDataItemsItem {
	s.OutstandingAmount = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetAfterTaxAmount(v float32) *QuerySettleBillResponseDataItemsItem {
	s.AfterTaxAmount = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetStatus(v string) *QuerySettleBillResponseDataItemsItem {
	s.Status = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetPaymentCurrency(v string) *QuerySettleBillResponseDataItemsItem {
	s.PaymentCurrency = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetPaymentTransactionID(v string) *QuerySettleBillResponseDataItemsItem {
	s.PaymentTransactionID = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetRoundDownDiscount(v string) *QuerySettleBillResponseDataItemsItem {
	s.RoundDownDiscount = &v
	return s
}

func (s *QuerySettleBillResponseDataItemsItem) SetSubOrderId(v string) *QuerySettleBillResponseDataItemsItem {
	s.SubOrderId = &v
	return s
}

type QuerySplitItemBillRequest struct {
	BillingCycle     *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
	PageNum          *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize         *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s QuerySplitItemBillRequest) String() string {
	return tea.Prettify(s)
}

func (s QuerySplitItemBillRequest) GoString() string {
	return s.String()
}

func (s *QuerySplitItemBillRequest) SetBillingCycle(v string) *QuerySplitItemBillRequest {
	s.BillingCycle = &v
	return s
}

func (s *QuerySplitItemBillRequest) SetProductCode(v string) *QuerySplitItemBillRequest {
	s.ProductCode = &v
	return s
}

func (s *QuerySplitItemBillRequest) SetProductType(v string) *QuerySplitItemBillRequest {
	s.ProductType = &v
	return s
}

func (s *QuerySplitItemBillRequest) SetSubscriptionType(v string) *QuerySplitItemBillRequest {
	s.SubscriptionType = &v
	return s
}

func (s *QuerySplitItemBillRequest) SetPageNum(v int) *QuerySplitItemBillRequest {
	s.PageNum = &v
	return s
}

func (s *QuerySplitItemBillRequest) SetPageSize(v int) *QuerySplitItemBillRequest {
	s.PageSize = &v
	return s
}

type QuerySplitItemBillResponse struct {
	RequestId *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                           `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                         `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                         `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QuerySplitItemBillResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QuerySplitItemBillResponse) String() string {
	return tea.Prettify(s)
}

func (s QuerySplitItemBillResponse) GoString() string {
	return s.String()
}

func (s *QuerySplitItemBillResponse) SetRequestId(v string) *QuerySplitItemBillResponse {
	s.RequestId = &v
	return s
}

func (s *QuerySplitItemBillResponse) SetSuccess(v bool) *QuerySplitItemBillResponse {
	s.Success = &v
	return s
}

func (s *QuerySplitItemBillResponse) SetCode(v string) *QuerySplitItemBillResponse {
	s.Code = &v
	return s
}

func (s *QuerySplitItemBillResponse) SetMessage(v string) *QuerySplitItemBillResponse {
	s.Message = &v
	return s
}

func (s *QuerySplitItemBillResponse) SetData(v *QuerySplitItemBillResponseData) *QuerySplitItemBillResponse {
	s.Data = v
	return s
}

type QuerySplitItemBillResponseData struct {
	BillingCycle *string                              `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	AccountID    *string                              `json:"AccountID,omitempty" xml:"AccountID,omitempty" require:"true"`
	AccountName  *string                              `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	TotalCount   *int                                 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNum      *int                                 `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize     *int                                 `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Items        *QuerySplitItemBillResponseDataItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s QuerySplitItemBillResponseData) String() string {
	return tea.Prettify(s)
}

func (s QuerySplitItemBillResponseData) GoString() string {
	return s.String()
}

func (s *QuerySplitItemBillResponseData) SetBillingCycle(v string) *QuerySplitItemBillResponseData {
	s.BillingCycle = &v
	return s
}

func (s *QuerySplitItemBillResponseData) SetAccountID(v string) *QuerySplitItemBillResponseData {
	s.AccountID = &v
	return s
}

func (s *QuerySplitItemBillResponseData) SetAccountName(v string) *QuerySplitItemBillResponseData {
	s.AccountName = &v
	return s
}

func (s *QuerySplitItemBillResponseData) SetTotalCount(v int) *QuerySplitItemBillResponseData {
	s.TotalCount = &v
	return s
}

func (s *QuerySplitItemBillResponseData) SetPageNum(v int) *QuerySplitItemBillResponseData {
	s.PageNum = &v
	return s
}

func (s *QuerySplitItemBillResponseData) SetPageSize(v int) *QuerySplitItemBillResponseData {
	s.PageSize = &v
	return s
}

func (s *QuerySplitItemBillResponseData) SetItems(v *QuerySplitItemBillResponseDataItems) *QuerySplitItemBillResponseData {
	s.Items = v
	return s
}

type QuerySplitItemBillResponseDataItems struct {
	Item []*QuerySplitItemBillResponseDataItemsItem `json:"Item,omitempty" xml:"Item,omitempty" require:"true" type:"Repeated"`
}

func (s QuerySplitItemBillResponseDataItems) String() string {
	return tea.Prettify(s)
}

func (s QuerySplitItemBillResponseDataItems) GoString() string {
	return s.String()
}

func (s *QuerySplitItemBillResponseDataItems) SetItem(v []*QuerySplitItemBillResponseDataItemsItem) *QuerySplitItemBillResponseDataItems {
	s.Item = v
	return s
}

type QuerySplitItemBillResponseDataItemsItem struct {
	InstanceID                *string  `json:"InstanceID,omitempty" xml:"InstanceID,omitempty" require:"true"`
	BillingType               *string  `json:"BillingType,omitempty" xml:"BillingType,omitempty" require:"true"`
	CostUnit                  *string  `json:"CostUnit,omitempty" xml:"CostUnit,omitempty" require:"true"`
	ProductCode               *string  `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType               *string  `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType          *string  `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	ProductName               *string  `json:"ProductName,omitempty" xml:"ProductName,omitempty" require:"true"`
	ProductDetail             *string  `json:"ProductDetail,omitempty" xml:"ProductDetail,omitempty" require:"true"`
	OwnerID                   *string  `json:"OwnerID,omitempty" xml:"OwnerID,omitempty" require:"true"`
	BillingItem               *string  `json:"BillingItem,omitempty" xml:"BillingItem,omitempty" require:"true"`
	ListPrice                 *string  `json:"ListPrice,omitempty" xml:"ListPrice,omitempty" require:"true"`
	ListPriceUnit             *string  `json:"ListPriceUnit,omitempty" xml:"ListPriceUnit,omitempty" require:"true"`
	Usage                     *string  `json:"Usage,omitempty" xml:"Usage,omitempty" require:"true"`
	UsageUnit                 *string  `json:"UsageUnit,omitempty" xml:"UsageUnit,omitempty" require:"true"`
	DeductedByResourcePackage *string  `json:"DeductedByResourcePackage,omitempty" xml:"DeductedByResourcePackage,omitempty" require:"true"`
	PretaxGrossAmount         *float32 `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	InvoiceDiscount           *float32 `json:"InvoiceDiscount,omitempty" xml:"InvoiceDiscount,omitempty" require:"true"`
	DeductedByCoupons         *float32 `json:"DeductedByCoupons,omitempty" xml:"DeductedByCoupons,omitempty" require:"true"`
	PretaxAmount              *float32 `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	DeductedByCashCoupons     *float32 `json:"DeductedByCashCoupons,omitempty" xml:"DeductedByCashCoupons,omitempty" require:"true"`
	DeductedByPrepaidCard     *float32 `json:"DeductedByPrepaidCard,omitempty" xml:"DeductedByPrepaidCard,omitempty" require:"true"`
	PaymentAmount             *float32 `json:"PaymentAmount,omitempty" xml:"PaymentAmount,omitempty" require:"true"`
	OutstandingAmount         *float32 `json:"OutstandingAmount,omitempty" xml:"OutstandingAmount,omitempty" require:"true"`
	Currency                  *string  `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	NickName                  *string  `json:"NickName,omitempty" xml:"NickName,omitempty" require:"true"`
	ResourceGroup             *string  `json:"ResourceGroup,omitempty" xml:"ResourceGroup,omitempty" require:"true"`
	Tag                       *string  `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true"`
	InstanceConfig            *string  `json:"InstanceConfig,omitempty" xml:"InstanceConfig,omitempty" require:"true"`
	InstanceSpec              *string  `json:"InstanceSpec,omitempty" xml:"InstanceSpec,omitempty" require:"true"`
	InternetIP                *string  `json:"InternetIP,omitempty" xml:"InternetIP,omitempty" require:"true"`
	IntranetIP                *string  `json:"IntranetIP,omitempty" xml:"IntranetIP,omitempty" require:"true"`
	Region                    *string  `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	Zone                      *string  `json:"Zone,omitempty" xml:"Zone,omitempty" require:"true"`
	Item                      *string  `json:"Item,omitempty" xml:"Item,omitempty" require:"true"`
	ServicePeriod             *string  `json:"ServicePeriod,omitempty" xml:"ServicePeriod,omitempty" require:"true"`
	BillingDate               *string  `json:"BillingDate,omitempty" xml:"BillingDate,omitempty" require:"true"`
	SplitItemID               *string  `json:"SplitItemID,omitempty" xml:"SplitItemID,omitempty" require:"true"`
	SplitItemName             *string  `json:"SplitItemName,omitempty" xml:"SplitItemName,omitempty" require:"true"`
}

func (s QuerySplitItemBillResponseDataItemsItem) String() string {
	return tea.Prettify(s)
}

func (s QuerySplitItemBillResponseDataItemsItem) GoString() string {
	return s.String()
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetInstanceID(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.InstanceID = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetBillingType(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.BillingType = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetCostUnit(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.CostUnit = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetProductCode(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.ProductCode = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetProductType(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.ProductType = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetSubscriptionType(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.SubscriptionType = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetProductName(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.ProductName = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetProductDetail(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.ProductDetail = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetOwnerID(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.OwnerID = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetBillingItem(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.BillingItem = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetListPrice(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.ListPrice = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetListPriceUnit(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.ListPriceUnit = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetUsage(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.Usage = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetUsageUnit(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.UsageUnit = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetDeductedByResourcePackage(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.DeductedByResourcePackage = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetPretaxGrossAmount(v float32) *QuerySplitItemBillResponseDataItemsItem {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetInvoiceDiscount(v float32) *QuerySplitItemBillResponseDataItemsItem {
	s.InvoiceDiscount = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetDeductedByCoupons(v float32) *QuerySplitItemBillResponseDataItemsItem {
	s.DeductedByCoupons = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetPretaxAmount(v float32) *QuerySplitItemBillResponseDataItemsItem {
	s.PretaxAmount = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetDeductedByCashCoupons(v float32) *QuerySplitItemBillResponseDataItemsItem {
	s.DeductedByCashCoupons = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetDeductedByPrepaidCard(v float32) *QuerySplitItemBillResponseDataItemsItem {
	s.DeductedByPrepaidCard = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetPaymentAmount(v float32) *QuerySplitItemBillResponseDataItemsItem {
	s.PaymentAmount = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetOutstandingAmount(v float32) *QuerySplitItemBillResponseDataItemsItem {
	s.OutstandingAmount = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetCurrency(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.Currency = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetNickName(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.NickName = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetResourceGroup(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.ResourceGroup = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetTag(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.Tag = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetInstanceConfig(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.InstanceConfig = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetInstanceSpec(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.InstanceSpec = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetInternetIP(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.InternetIP = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetIntranetIP(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.IntranetIP = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetRegion(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.Region = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetZone(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.Zone = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetItem(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.Item = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetServicePeriod(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.ServicePeriod = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetBillingDate(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.BillingDate = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetSplitItemID(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.SplitItemID = &v
	return s
}

func (s *QuerySplitItemBillResponseDataItemsItem) SetSplitItemName(v string) *QuerySplitItemBillResponseDataItemsItem {
	s.SplitItemName = &v
	return s
}

type QueryRIUtilizationDetailRequest struct {
	RIInstanceId       *string `json:"RIInstanceId,omitempty" xml:"RIInstanceId,omitempty"`
	InstanceSpec       *string `json:"InstanceSpec,omitempty" xml:"InstanceSpec,omitempty"`
	RICommodityCode    *string `json:"RICommodityCode,omitempty" xml:"RICommodityCode,omitempty" require:"true"`
	DeductedInstanceId *string `json:"DeductedInstanceId,omitempty" xml:"DeductedInstanceId,omitempty"`
	StartTime          *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime            *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	PageNum            *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize           *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s QueryRIUtilizationDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryRIUtilizationDetailRequest) GoString() string {
	return s.String()
}

func (s *QueryRIUtilizationDetailRequest) SetRIInstanceId(v string) *QueryRIUtilizationDetailRequest {
	s.RIInstanceId = &v
	return s
}

func (s *QueryRIUtilizationDetailRequest) SetInstanceSpec(v string) *QueryRIUtilizationDetailRequest {
	s.InstanceSpec = &v
	return s
}

func (s *QueryRIUtilizationDetailRequest) SetRICommodityCode(v string) *QueryRIUtilizationDetailRequest {
	s.RICommodityCode = &v
	return s
}

func (s *QueryRIUtilizationDetailRequest) SetDeductedInstanceId(v string) *QueryRIUtilizationDetailRequest {
	s.DeductedInstanceId = &v
	return s
}

func (s *QueryRIUtilizationDetailRequest) SetStartTime(v string) *QueryRIUtilizationDetailRequest {
	s.StartTime = &v
	return s
}

func (s *QueryRIUtilizationDetailRequest) SetEndTime(v string) *QueryRIUtilizationDetailRequest {
	s.EndTime = &v
	return s
}

func (s *QueryRIUtilizationDetailRequest) SetPageNum(v int) *QueryRIUtilizationDetailRequest {
	s.PageNum = &v
	return s
}

func (s *QueryRIUtilizationDetailRequest) SetPageSize(v int) *QueryRIUtilizationDetailRequest {
	s.PageSize = &v
	return s
}

type QueryRIUtilizationDetailResponse struct {
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                 `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                               `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                               `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryRIUtilizationDetailResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryRIUtilizationDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryRIUtilizationDetailResponse) GoString() string {
	return s.String()
}

func (s *QueryRIUtilizationDetailResponse) SetRequestId(v string) *QueryRIUtilizationDetailResponse {
	s.RequestId = &v
	return s
}

func (s *QueryRIUtilizationDetailResponse) SetSuccess(v bool) *QueryRIUtilizationDetailResponse {
	s.Success = &v
	return s
}

func (s *QueryRIUtilizationDetailResponse) SetCode(v string) *QueryRIUtilizationDetailResponse {
	s.Code = &v
	return s
}

func (s *QueryRIUtilizationDetailResponse) SetMessage(v string) *QueryRIUtilizationDetailResponse {
	s.Message = &v
	return s
}

func (s *QueryRIUtilizationDetailResponse) SetData(v *QueryRIUtilizationDetailResponseData) *QueryRIUtilizationDetailResponse {
	s.Data = v
	return s
}

type QueryRIUtilizationDetailResponseData struct {
	PageNum    *int64                                          `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize   *int64                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int64                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	DetailList *QueryRIUtilizationDetailResponseDataDetailList `json:"DetailList,omitempty" xml:"DetailList,omitempty" require:"true" type:"Struct"`
}

func (s QueryRIUtilizationDetailResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryRIUtilizationDetailResponseData) GoString() string {
	return s.String()
}

func (s *QueryRIUtilizationDetailResponseData) SetPageNum(v int64) *QueryRIUtilizationDetailResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseData) SetPageSize(v int64) *QueryRIUtilizationDetailResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseData) SetTotalCount(v int64) *QueryRIUtilizationDetailResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseData) SetDetailList(v *QueryRIUtilizationDetailResponseDataDetailList) *QueryRIUtilizationDetailResponseData {
	s.DetailList = v
	return s
}

type QueryRIUtilizationDetailResponseDataDetailList struct {
	DetailList []*QueryRIUtilizationDetailResponseDataDetailListDetailList `json:"DetailList,omitempty" xml:"DetailList,omitempty" require:"true" type:"Repeated"`
}

func (s QueryRIUtilizationDetailResponseDataDetailList) String() string {
	return tea.Prettify(s)
}

func (s QueryRIUtilizationDetailResponseDataDetailList) GoString() string {
	return s.String()
}

func (s *QueryRIUtilizationDetailResponseDataDetailList) SetDetailList(v []*QueryRIUtilizationDetailResponseDataDetailListDetailList) *QueryRIUtilizationDetailResponseDataDetailList {
	s.DetailList = v
	return s
}

type QueryRIUtilizationDetailResponseDataDetailListDetailList struct {
	RIInstanceId          *string  `json:"RIInstanceId,omitempty" xml:"RIInstanceId,omitempty" require:"true"`
	InstanceSpec          *string  `json:"InstanceSpec,omitempty" xml:"InstanceSpec,omitempty" require:"true"`
	DeductedInstanceId    *string  `json:"DeductedInstanceId,omitempty" xml:"DeductedInstanceId,omitempty" require:"true"`
	DeductedCommodityCode *string  `json:"DeductedCommodityCode,omitempty" xml:"DeductedCommodityCode,omitempty" require:"true"`
	DeductDate            *string  `json:"DeductDate,omitempty" xml:"DeductDate,omitempty" require:"true"`
	DeductHours           *string  `json:"DeductHours,omitempty" xml:"DeductHours,omitempty" require:"true"`
	DeductedProductDetail *string  `json:"DeductedProductDetail,omitempty" xml:"DeductedProductDetail,omitempty" require:"true"`
	DeductQuantity        *float32 `json:"DeductQuantity,omitempty" xml:"DeductQuantity,omitempty" require:"true"`
	DeductFactorTotal     *float32 `json:"DeductFactorTotal,omitempty" xml:"DeductFactorTotal,omitempty" require:"true"`
}

func (s QueryRIUtilizationDetailResponseDataDetailListDetailList) String() string {
	return tea.Prettify(s)
}

func (s QueryRIUtilizationDetailResponseDataDetailListDetailList) GoString() string {
	return s.String()
}

func (s *QueryRIUtilizationDetailResponseDataDetailListDetailList) SetRIInstanceId(v string) *QueryRIUtilizationDetailResponseDataDetailListDetailList {
	s.RIInstanceId = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseDataDetailListDetailList) SetInstanceSpec(v string) *QueryRIUtilizationDetailResponseDataDetailListDetailList {
	s.InstanceSpec = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseDataDetailListDetailList) SetDeductedInstanceId(v string) *QueryRIUtilizationDetailResponseDataDetailListDetailList {
	s.DeductedInstanceId = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseDataDetailListDetailList) SetDeductedCommodityCode(v string) *QueryRIUtilizationDetailResponseDataDetailListDetailList {
	s.DeductedCommodityCode = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseDataDetailListDetailList) SetDeductDate(v string) *QueryRIUtilizationDetailResponseDataDetailListDetailList {
	s.DeductDate = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseDataDetailListDetailList) SetDeductHours(v string) *QueryRIUtilizationDetailResponseDataDetailListDetailList {
	s.DeductHours = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseDataDetailListDetailList) SetDeductedProductDetail(v string) *QueryRIUtilizationDetailResponseDataDetailListDetailList {
	s.DeductedProductDetail = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseDataDetailListDetailList) SetDeductQuantity(v float32) *QueryRIUtilizationDetailResponseDataDetailListDetailList {
	s.DeductQuantity = &v
	return s
}

func (s *QueryRIUtilizationDetailResponseDataDetailListDetailList) SetDeductFactorTotal(v float32) *QueryRIUtilizationDetailResponseDataDetailListDetailList {
	s.DeductFactorTotal = &v
	return s
}

type QueryBillToOSSSubscriptionRequest struct {
}

func (s QueryBillToOSSSubscriptionRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryBillToOSSSubscriptionRequest) GoString() string {
	return s.String()
}

type QueryBillToOSSSubscriptionResponse struct {
	RequestId *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                                 `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                                 `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryBillToOSSSubscriptionResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryBillToOSSSubscriptionResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryBillToOSSSubscriptionResponse) GoString() string {
	return s.String()
}

func (s *QueryBillToOSSSubscriptionResponse) SetRequestId(v string) *QueryBillToOSSSubscriptionResponse {
	s.RequestId = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponse) SetSuccess(v bool) *QueryBillToOSSSubscriptionResponse {
	s.Success = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponse) SetCode(v string) *QueryBillToOSSSubscriptionResponse {
	s.Code = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponse) SetMessage(v string) *QueryBillToOSSSubscriptionResponse {
	s.Message = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponse) SetData(v *QueryBillToOSSSubscriptionResponseData) *QueryBillToOSSSubscriptionResponse {
	s.Data = v
	return s
}

type QueryBillToOSSSubscriptionResponseData struct {
	AccountID   *string                                      `json:"AccountID,omitempty" xml:"AccountID,omitempty" require:"true"`
	AccountName *string                                      `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	Items       *QueryBillToOSSSubscriptionResponseDataItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s QueryBillToOSSSubscriptionResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryBillToOSSSubscriptionResponseData) GoString() string {
	return s.String()
}

func (s *QueryBillToOSSSubscriptionResponseData) SetAccountID(v string) *QueryBillToOSSSubscriptionResponseData {
	s.AccountID = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponseData) SetAccountName(v string) *QueryBillToOSSSubscriptionResponseData {
	s.AccountName = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponseData) SetItems(v *QueryBillToOSSSubscriptionResponseDataItems) *QueryBillToOSSSubscriptionResponseData {
	s.Items = v
	return s
}

type QueryBillToOSSSubscriptionResponseDataItems struct {
	Item []*QueryBillToOSSSubscriptionResponseDataItemsItem `json:"Item,omitempty" xml:"Item,omitempty" require:"true" type:"Repeated"`
}

func (s QueryBillToOSSSubscriptionResponseDataItems) String() string {
	return tea.Prettify(s)
}

func (s QueryBillToOSSSubscriptionResponseDataItems) GoString() string {
	return s.String()
}

func (s *QueryBillToOSSSubscriptionResponseDataItems) SetItem(v []*QueryBillToOSSSubscriptionResponseDataItemsItem) *QueryBillToOSSSubscriptionResponseDataItems {
	s.Item = v
	return s
}

type QueryBillToOSSSubscriptionResponseDataItemsItem struct {
	SubscribeType           *string `json:"SubscribeType,omitempty" xml:"SubscribeType,omitempty" require:"true"`
	SubscribeBucket         *string `json:"SubscribeBucket,omitempty" xml:"SubscribeBucket,omitempty" require:"true"`
	BucketOwnerId           *int64  `json:"BucketOwnerId,omitempty" xml:"BucketOwnerId,omitempty" require:"true"`
	SubscribeTime           *string `json:"SubscribeTime,omitempty" xml:"SubscribeTime,omitempty" require:"true"`
	SubscribeLanguage       *string `json:"SubscribeLanguage,omitempty" xml:"SubscribeLanguage,omitempty" require:"true"`
	MultAccountRelSubscribe *string `json:"MultAccountRelSubscribe,omitempty" xml:"MultAccountRelSubscribe,omitempty" require:"true"`
}

func (s QueryBillToOSSSubscriptionResponseDataItemsItem) String() string {
	return tea.Prettify(s)
}

func (s QueryBillToOSSSubscriptionResponseDataItemsItem) GoString() string {
	return s.String()
}

func (s *QueryBillToOSSSubscriptionResponseDataItemsItem) SetSubscribeType(v string) *QueryBillToOSSSubscriptionResponseDataItemsItem {
	s.SubscribeType = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponseDataItemsItem) SetSubscribeBucket(v string) *QueryBillToOSSSubscriptionResponseDataItemsItem {
	s.SubscribeBucket = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponseDataItemsItem) SetBucketOwnerId(v int64) *QueryBillToOSSSubscriptionResponseDataItemsItem {
	s.BucketOwnerId = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponseDataItemsItem) SetSubscribeTime(v string) *QueryBillToOSSSubscriptionResponseDataItemsItem {
	s.SubscribeTime = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponseDataItemsItem) SetSubscribeLanguage(v string) *QueryBillToOSSSubscriptionResponseDataItemsItem {
	s.SubscribeLanguage = &v
	return s
}

func (s *QueryBillToOSSSubscriptionResponseDataItemsItem) SetMultAccountRelSubscribe(v string) *QueryBillToOSSSubscriptionResponseDataItemsItem {
	s.MultAccountRelSubscribe = &v
	return s
}

type QueryAccountBillRequest struct {
	BillingCycle     *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	PageNum          *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize         *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	OwnerID          *int64  `json:"OwnerID,omitempty" xml:"OwnerID,omitempty"`
	IsGroupByProduct *bool   `json:"IsGroupByProduct,omitempty" xml:"IsGroupByProduct,omitempty"`
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
}

func (s QueryAccountBillRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountBillRequest) GoString() string {
	return s.String()
}

func (s *QueryAccountBillRequest) SetBillingCycle(v string) *QueryAccountBillRequest {
	s.BillingCycle = &v
	return s
}

func (s *QueryAccountBillRequest) SetPageNum(v int) *QueryAccountBillRequest {
	s.PageNum = &v
	return s
}

func (s *QueryAccountBillRequest) SetPageSize(v int) *QueryAccountBillRequest {
	s.PageSize = &v
	return s
}

func (s *QueryAccountBillRequest) SetOwnerID(v int64) *QueryAccountBillRequest {
	s.OwnerID = &v
	return s
}

func (s *QueryAccountBillRequest) SetIsGroupByProduct(v bool) *QueryAccountBillRequest {
	s.IsGroupByProduct = &v
	return s
}

func (s *QueryAccountBillRequest) SetProductCode(v string) *QueryAccountBillRequest {
	s.ProductCode = &v
	return s
}

type QueryAccountBillResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                       `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                       `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryAccountBillResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryAccountBillResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountBillResponse) GoString() string {
	return s.String()
}

func (s *QueryAccountBillResponse) SetRequestId(v string) *QueryAccountBillResponse {
	s.RequestId = &v
	return s
}

func (s *QueryAccountBillResponse) SetSuccess(v bool) *QueryAccountBillResponse {
	s.Success = &v
	return s
}

func (s *QueryAccountBillResponse) SetCode(v string) *QueryAccountBillResponse {
	s.Code = &v
	return s
}

func (s *QueryAccountBillResponse) SetMessage(v string) *QueryAccountBillResponse {
	s.Message = &v
	return s
}

func (s *QueryAccountBillResponse) SetData(v *QueryAccountBillResponseData) *QueryAccountBillResponse {
	s.Data = v
	return s
}

type QueryAccountBillResponseData struct {
	BillingCycle *string                            `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	AccountID    *string                            `json:"AccountID,omitempty" xml:"AccountID,omitempty" require:"true"`
	AccountName  *string                            `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	TotalCount   *int                               `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNum      *int                               `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize     *int                               `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Items        *QueryAccountBillResponseDataItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s QueryAccountBillResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountBillResponseData) GoString() string {
	return s.String()
}

func (s *QueryAccountBillResponseData) SetBillingCycle(v string) *QueryAccountBillResponseData {
	s.BillingCycle = &v
	return s
}

func (s *QueryAccountBillResponseData) SetAccountID(v string) *QueryAccountBillResponseData {
	s.AccountID = &v
	return s
}

func (s *QueryAccountBillResponseData) SetAccountName(v string) *QueryAccountBillResponseData {
	s.AccountName = &v
	return s
}

func (s *QueryAccountBillResponseData) SetTotalCount(v int) *QueryAccountBillResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryAccountBillResponseData) SetPageNum(v int) *QueryAccountBillResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryAccountBillResponseData) SetPageSize(v int) *QueryAccountBillResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryAccountBillResponseData) SetItems(v *QueryAccountBillResponseDataItems) *QueryAccountBillResponseData {
	s.Items = v
	return s
}

type QueryAccountBillResponseDataItems struct {
	Item []*QueryAccountBillResponseDataItemsItem `json:"Item,omitempty" xml:"Item,omitempty" require:"true" type:"Repeated"`
}

func (s QueryAccountBillResponseDataItems) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountBillResponseDataItems) GoString() string {
	return s.String()
}

func (s *QueryAccountBillResponseDataItems) SetItem(v []*QueryAccountBillResponseDataItemsItem) *QueryAccountBillResponseDataItems {
	s.Item = v
	return s
}

type QueryAccountBillResponseDataItemsItem struct {
	CostUnit              *string  `json:"CostUnit,omitempty" xml:"CostUnit,omitempty" require:"true"`
	OwnerID               *string  `json:"OwnerID,omitempty" xml:"OwnerID,omitempty" require:"true"`
	PretaxGrossAmount     *float32 `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	InvoiceDiscount       *float32 `json:"InvoiceDiscount,omitempty" xml:"InvoiceDiscount,omitempty" require:"true"`
	DeductedByCoupons     *float32 `json:"DeductedByCoupons,omitempty" xml:"DeductedByCoupons,omitempty" require:"true"`
	PretaxAmount          *float32 `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	DeductedByCashCoupons *float32 `json:"DeductedByCashCoupons,omitempty" xml:"DeductedByCashCoupons,omitempty" require:"true"`
	DeductedByPrepaidCard *float32 `json:"DeductedByPrepaidCard,omitempty" xml:"DeductedByPrepaidCard,omitempty" require:"true"`
	PaymentAmount         *float32 `json:"PaymentAmount,omitempty" xml:"PaymentAmount,omitempty" require:"true"`
	OutstandingAmount     *float32 `json:"OutstandingAmount,omitempty" xml:"OutstandingAmount,omitempty" require:"true"`
	Currency              *string  `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	OwnerName             *string  `json:"OwnerName,omitempty" xml:"OwnerName,omitempty" require:"true"`
	ProductCode           *string  `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductName           *string  `json:"ProductName,omitempty" xml:"ProductName,omitempty" require:"true"`
	SubscriptionType      *string  `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
}

func (s QueryAccountBillResponseDataItemsItem) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountBillResponseDataItemsItem) GoString() string {
	return s.String()
}

func (s *QueryAccountBillResponseDataItemsItem) SetCostUnit(v string) *QueryAccountBillResponseDataItemsItem {
	s.CostUnit = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetOwnerID(v string) *QueryAccountBillResponseDataItemsItem {
	s.OwnerID = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetPretaxGrossAmount(v float32) *QueryAccountBillResponseDataItemsItem {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetInvoiceDiscount(v float32) *QueryAccountBillResponseDataItemsItem {
	s.InvoiceDiscount = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetDeductedByCoupons(v float32) *QueryAccountBillResponseDataItemsItem {
	s.DeductedByCoupons = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetPretaxAmount(v float32) *QueryAccountBillResponseDataItemsItem {
	s.PretaxAmount = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetDeductedByCashCoupons(v float32) *QueryAccountBillResponseDataItemsItem {
	s.DeductedByCashCoupons = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetDeductedByPrepaidCard(v float32) *QueryAccountBillResponseDataItemsItem {
	s.DeductedByPrepaidCard = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetPaymentAmount(v float32) *QueryAccountBillResponseDataItemsItem {
	s.PaymentAmount = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetOutstandingAmount(v float32) *QueryAccountBillResponseDataItemsItem {
	s.OutstandingAmount = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetCurrency(v string) *QueryAccountBillResponseDataItemsItem {
	s.Currency = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetOwnerName(v string) *QueryAccountBillResponseDataItemsItem {
	s.OwnerName = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetProductCode(v string) *QueryAccountBillResponseDataItemsItem {
	s.ProductCode = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetProductName(v string) *QueryAccountBillResponseDataItemsItem {
	s.ProductName = &v
	return s
}

func (s *QueryAccountBillResponseDataItemsItem) SetSubscriptionType(v string) *QueryAccountBillResponseDataItemsItem {
	s.SubscriptionType = &v
	return s
}

type CreateCostUnitRequest struct {
	UnitEntityList []*CreateCostUnitRequestUnitEntityList `json:"UnitEntityList,omitempty" xml:"UnitEntityList,omitempty" type:"Repeated"`
}

func (s CreateCostUnitRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateCostUnitRequest) GoString() string {
	return s.String()
}

func (s *CreateCostUnitRequest) SetUnitEntityList(v []*CreateCostUnitRequestUnitEntityList) *CreateCostUnitRequest {
	s.UnitEntityList = v
	return s
}

type CreateCostUnitRequestUnitEntityList struct {
	OwnerUid     *int64  `json:"OwnerUid,omitempty" xml:"OwnerUid,omitempty" require:"true"`
	ParentUnitId *int64  `json:"ParentUnitId,omitempty" xml:"ParentUnitId,omitempty" require:"true"`
	UnitName     *string `json:"UnitName,omitempty" xml:"UnitName,omitempty" require:"true"`
}

func (s CreateCostUnitRequestUnitEntityList) String() string {
	return tea.Prettify(s)
}

func (s CreateCostUnitRequestUnitEntityList) GoString() string {
	return s.String()
}

func (s *CreateCostUnitRequestUnitEntityList) SetOwnerUid(v int64) *CreateCostUnitRequestUnitEntityList {
	s.OwnerUid = &v
	return s
}

func (s *CreateCostUnitRequestUnitEntityList) SetParentUnitId(v int64) *CreateCostUnitRequestUnitEntityList {
	s.ParentUnitId = &v
	return s
}

func (s *CreateCostUnitRequestUnitEntityList) SetUnitName(v string) *CreateCostUnitRequestUnitEntityList {
	s.UnitName = &v
	return s
}

type CreateCostUnitResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                       `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                     `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                     `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *CreateCostUnitResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s CreateCostUnitResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateCostUnitResponse) GoString() string {
	return s.String()
}

func (s *CreateCostUnitResponse) SetRequestId(v string) *CreateCostUnitResponse {
	s.RequestId = &v
	return s
}

func (s *CreateCostUnitResponse) SetSuccess(v bool) *CreateCostUnitResponse {
	s.Success = &v
	return s
}

func (s *CreateCostUnitResponse) SetCode(v string) *CreateCostUnitResponse {
	s.Code = &v
	return s
}

func (s *CreateCostUnitResponse) SetMessage(v string) *CreateCostUnitResponse {
	s.Message = &v
	return s
}

func (s *CreateCostUnitResponse) SetData(v *CreateCostUnitResponseData) *CreateCostUnitResponse {
	s.Data = v
	return s
}

type CreateCostUnitResponseData struct {
	CostUnitDtoList []*CreateCostUnitResponseDataCostUnitDtoList `json:"CostUnitDtoList,omitempty" xml:"CostUnitDtoList,omitempty" require:"true" type:"Repeated"`
}

func (s CreateCostUnitResponseData) String() string {
	return tea.Prettify(s)
}

func (s CreateCostUnitResponseData) GoString() string {
	return s.String()
}

func (s *CreateCostUnitResponseData) SetCostUnitDtoList(v []*CreateCostUnitResponseDataCostUnitDtoList) *CreateCostUnitResponseData {
	s.CostUnitDtoList = v
	return s
}

type CreateCostUnitResponseDataCostUnitDtoList struct {
	OwnerUid     *int64  `json:"OwnerUid,omitempty" xml:"OwnerUid,omitempty" require:"true"`
	ParentUnitId *int64  `json:"ParentUnitId,omitempty" xml:"ParentUnitId,omitempty" require:"true"`
	UnitId       *int64  `json:"UnitId,omitempty" xml:"UnitId,omitempty" require:"true"`
	UnitName     *string `json:"UnitName,omitempty" xml:"UnitName,omitempty" require:"true"`
}

func (s CreateCostUnitResponseDataCostUnitDtoList) String() string {
	return tea.Prettify(s)
}

func (s CreateCostUnitResponseDataCostUnitDtoList) GoString() string {
	return s.String()
}

func (s *CreateCostUnitResponseDataCostUnitDtoList) SetOwnerUid(v int64) *CreateCostUnitResponseDataCostUnitDtoList {
	s.OwnerUid = &v
	return s
}

func (s *CreateCostUnitResponseDataCostUnitDtoList) SetParentUnitId(v int64) *CreateCostUnitResponseDataCostUnitDtoList {
	s.ParentUnitId = &v
	return s
}

func (s *CreateCostUnitResponseDataCostUnitDtoList) SetUnitId(v int64) *CreateCostUnitResponseDataCostUnitDtoList {
	s.UnitId = &v
	return s
}

func (s *CreateCostUnitResponseDataCostUnitDtoList) SetUnitName(v string) *CreateCostUnitResponseDataCostUnitDtoList {
	s.UnitName = &v
	return s
}

type ModifyCostUnitRequest struct {
	UnitEntityList []*ModifyCostUnitRequestUnitEntityList `json:"UnitEntityList,omitempty" xml:"UnitEntityList,omitempty" type:"Repeated"`
}

func (s ModifyCostUnitRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyCostUnitRequest) GoString() string {
	return s.String()
}

func (s *ModifyCostUnitRequest) SetUnitEntityList(v []*ModifyCostUnitRequestUnitEntityList) *ModifyCostUnitRequest {
	s.UnitEntityList = v
	return s
}

type ModifyCostUnitRequestUnitEntityList struct {
	OwnerUid    *int64  `json:"OwnerUid,omitempty" xml:"OwnerUid,omitempty" require:"true"`
	UnitId      *int64  `json:"UnitId,omitempty" xml:"UnitId,omitempty" require:"true"`
	NewUnitName *string `json:"NewUnitName,omitempty" xml:"NewUnitName,omitempty" require:"true"`
}

func (s ModifyCostUnitRequestUnitEntityList) String() string {
	return tea.Prettify(s)
}

func (s ModifyCostUnitRequestUnitEntityList) GoString() string {
	return s.String()
}

func (s *ModifyCostUnitRequestUnitEntityList) SetOwnerUid(v int64) *ModifyCostUnitRequestUnitEntityList {
	s.OwnerUid = &v
	return s
}

func (s *ModifyCostUnitRequestUnitEntityList) SetUnitId(v int64) *ModifyCostUnitRequestUnitEntityList {
	s.UnitId = &v
	return s
}

func (s *ModifyCostUnitRequestUnitEntityList) SetNewUnitName(v string) *ModifyCostUnitRequestUnitEntityList {
	s.NewUnitName = &v
	return s
}

type ModifyCostUnitResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                       `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                       `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      []*ModifyCostUnitResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s ModifyCostUnitResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyCostUnitResponse) GoString() string {
	return s.String()
}

func (s *ModifyCostUnitResponse) SetRequestId(v string) *ModifyCostUnitResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyCostUnitResponse) SetSuccess(v bool) *ModifyCostUnitResponse {
	s.Success = &v
	return s
}

func (s *ModifyCostUnitResponse) SetCode(v string) *ModifyCostUnitResponse {
	s.Code = &v
	return s
}

func (s *ModifyCostUnitResponse) SetMessage(v string) *ModifyCostUnitResponse {
	s.Message = &v
	return s
}

func (s *ModifyCostUnitResponse) SetData(v []*ModifyCostUnitResponseData) *ModifyCostUnitResponse {
	s.Data = v
	return s
}

type ModifyCostUnitResponseData struct {
	OwnerUid  *int64 `json:"OwnerUid,omitempty" xml:"OwnerUid,omitempty" require:"true"`
	UnitId    *int64 `json:"UnitId,omitempty" xml:"UnitId,omitempty" require:"true"`
	IsSuccess *bool  `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s ModifyCostUnitResponseData) String() string {
	return tea.Prettify(s)
}

func (s ModifyCostUnitResponseData) GoString() string {
	return s.String()
}

func (s *ModifyCostUnitResponseData) SetOwnerUid(v int64) *ModifyCostUnitResponseData {
	s.OwnerUid = &v
	return s
}

func (s *ModifyCostUnitResponseData) SetUnitId(v int64) *ModifyCostUnitResponseData {
	s.UnitId = &v
	return s
}

func (s *ModifyCostUnitResponseData) SetIsSuccess(v bool) *ModifyCostUnitResponseData {
	s.IsSuccess = &v
	return s
}

type QueryCostUnitRequest struct {
	OwnerUid     *int64 `json:"OwnerUid,omitempty" xml:"OwnerUid,omitempty" require:"true"`
	ParentUnitId *int64 `json:"ParentUnitId,omitempty" xml:"ParentUnitId,omitempty" require:"true"`
	PageNum      *int   `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize     *int   `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s QueryCostUnitRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryCostUnitRequest) GoString() string {
	return s.String()
}

func (s *QueryCostUnitRequest) SetOwnerUid(v int64) *QueryCostUnitRequest {
	s.OwnerUid = &v
	return s
}

func (s *QueryCostUnitRequest) SetParentUnitId(v int64) *QueryCostUnitRequest {
	s.ParentUnitId = &v
	return s
}

func (s *QueryCostUnitRequest) SetPageNum(v int) *QueryCostUnitRequest {
	s.PageNum = &v
	return s
}

func (s *QueryCostUnitRequest) SetPageSize(v int) *QueryCostUnitRequest {
	s.PageSize = &v
	return s
}

type QueryCostUnitResponse struct {
	RequestId *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                      `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                    `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                    `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryCostUnitResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryCostUnitResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryCostUnitResponse) GoString() string {
	return s.String()
}

func (s *QueryCostUnitResponse) SetRequestId(v string) *QueryCostUnitResponse {
	s.RequestId = &v
	return s
}

func (s *QueryCostUnitResponse) SetSuccess(v bool) *QueryCostUnitResponse {
	s.Success = &v
	return s
}

func (s *QueryCostUnitResponse) SetCode(v string) *QueryCostUnitResponse {
	s.Code = &v
	return s
}

func (s *QueryCostUnitResponse) SetMessage(v string) *QueryCostUnitResponse {
	s.Message = &v
	return s
}

func (s *QueryCostUnitResponse) SetData(v *QueryCostUnitResponseData) *QueryCostUnitResponse {
	s.Data = v
	return s
}

type QueryCostUnitResponseData struct {
	PageNum         *int                                        `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize        *int                                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount      *int                                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	CostUnitDtoList []*QueryCostUnitResponseDataCostUnitDtoList `json:"CostUnitDtoList,omitempty" xml:"CostUnitDtoList,omitempty" require:"true" type:"Repeated"`
}

func (s QueryCostUnitResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryCostUnitResponseData) GoString() string {
	return s.String()
}

func (s *QueryCostUnitResponseData) SetPageNum(v int) *QueryCostUnitResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryCostUnitResponseData) SetPageSize(v int) *QueryCostUnitResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryCostUnitResponseData) SetTotalCount(v int) *QueryCostUnitResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryCostUnitResponseData) SetCostUnitDtoList(v []*QueryCostUnitResponseDataCostUnitDtoList) *QueryCostUnitResponseData {
	s.CostUnitDtoList = v
	return s
}

type QueryCostUnitResponseDataCostUnitDtoList struct {
	OwnerUid     *int64  `json:"OwnerUid,omitempty" xml:"OwnerUid,omitempty" require:"true"`
	ParentUnitId *int64  `json:"ParentUnitId,omitempty" xml:"ParentUnitId,omitempty" require:"true"`
	UnitId       *int64  `json:"UnitId,omitempty" xml:"UnitId,omitempty" require:"true"`
	UnitName     *string `json:"UnitName,omitempty" xml:"UnitName,omitempty" require:"true"`
}

func (s QueryCostUnitResponseDataCostUnitDtoList) String() string {
	return tea.Prettify(s)
}

func (s QueryCostUnitResponseDataCostUnitDtoList) GoString() string {
	return s.String()
}

func (s *QueryCostUnitResponseDataCostUnitDtoList) SetOwnerUid(v int64) *QueryCostUnitResponseDataCostUnitDtoList {
	s.OwnerUid = &v
	return s
}

func (s *QueryCostUnitResponseDataCostUnitDtoList) SetParentUnitId(v int64) *QueryCostUnitResponseDataCostUnitDtoList {
	s.ParentUnitId = &v
	return s
}

func (s *QueryCostUnitResponseDataCostUnitDtoList) SetUnitId(v int64) *QueryCostUnitResponseDataCostUnitDtoList {
	s.UnitId = &v
	return s
}

func (s *QueryCostUnitResponseDataCostUnitDtoList) SetUnitName(v string) *QueryCostUnitResponseDataCostUnitDtoList {
	s.UnitName = &v
	return s
}

type DeleteCostUnitRequest struct {
	OwnerUid *int64 `json:"OwnerUid,omitempty" xml:"OwnerUid,omitempty" require:"true"`
	UnitId   *int64 `json:"UnitId,omitempty" xml:"UnitId,omitempty" require:"true"`
}

func (s DeleteCostUnitRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteCostUnitRequest) GoString() string {
	return s.String()
}

func (s *DeleteCostUnitRequest) SetOwnerUid(v int64) *DeleteCostUnitRequest {
	s.OwnerUid = &v
	return s
}

func (s *DeleteCostUnitRequest) SetUnitId(v int64) *DeleteCostUnitRequest {
	s.UnitId = &v
	return s
}

type DeleteCostUnitResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                       `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                     `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                     `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *DeleteCostUnitResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DeleteCostUnitResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteCostUnitResponse) GoString() string {
	return s.String()
}

func (s *DeleteCostUnitResponse) SetRequestId(v string) *DeleteCostUnitResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteCostUnitResponse) SetSuccess(v bool) *DeleteCostUnitResponse {
	s.Success = &v
	return s
}

func (s *DeleteCostUnitResponse) SetCode(v string) *DeleteCostUnitResponse {
	s.Code = &v
	return s
}

func (s *DeleteCostUnitResponse) SetMessage(v string) *DeleteCostUnitResponse {
	s.Message = &v
	return s
}

func (s *DeleteCostUnitResponse) SetData(v *DeleteCostUnitResponseData) *DeleteCostUnitResponse {
	s.Data = v
	return s
}

type DeleteCostUnitResponseData struct {
	OwnerUid  *int64 `json:"OwnerUid,omitempty" xml:"OwnerUid,omitempty" require:"true"`
	UnitId    *int64 `json:"UnitId,omitempty" xml:"UnitId,omitempty" require:"true"`
	IsSuccess *bool  `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s DeleteCostUnitResponseData) String() string {
	return tea.Prettify(s)
}

func (s DeleteCostUnitResponseData) GoString() string {
	return s.String()
}

func (s *DeleteCostUnitResponseData) SetOwnerUid(v int64) *DeleteCostUnitResponseData {
	s.OwnerUid = &v
	return s
}

func (s *DeleteCostUnitResponseData) SetUnitId(v int64) *DeleteCostUnitResponseData {
	s.UnitId = &v
	return s
}

func (s *DeleteCostUnitResponseData) SetIsSuccess(v bool) *DeleteCostUnitResponseData {
	s.IsSuccess = &v
	return s
}

type AllocateCostUnitResourceRequest struct {
	FromUnitUserId       *int64                                                 `json:"FromUnitUserId,omitempty" xml:"FromUnitUserId,omitempty" require:"true"`
	FromUnitId           *int64                                                 `json:"FromUnitId,omitempty" xml:"FromUnitId,omitempty" require:"true"`
	ResourceInstanceList []*AllocateCostUnitResourceRequestResourceInstanceList `json:"ResourceInstanceList,omitempty" xml:"ResourceInstanceList,omitempty" require:"true" type:"Repeated"`
	ToUnitUserId         *int64                                                 `json:"ToUnitUserId,omitempty" xml:"ToUnitUserId,omitempty" require:"true"`
	ToUnitId             *int64                                                 `json:"ToUnitId,omitempty" xml:"ToUnitId,omitempty" require:"true"`
}

func (s AllocateCostUnitResourceRequest) String() string {
	return tea.Prettify(s)
}

func (s AllocateCostUnitResourceRequest) GoString() string {
	return s.String()
}

func (s *AllocateCostUnitResourceRequest) SetFromUnitUserId(v int64) *AllocateCostUnitResourceRequest {
	s.FromUnitUserId = &v
	return s
}

func (s *AllocateCostUnitResourceRequest) SetFromUnitId(v int64) *AllocateCostUnitResourceRequest {
	s.FromUnitId = &v
	return s
}

func (s *AllocateCostUnitResourceRequest) SetResourceInstanceList(v []*AllocateCostUnitResourceRequestResourceInstanceList) *AllocateCostUnitResourceRequest {
	s.ResourceInstanceList = v
	return s
}

func (s *AllocateCostUnitResourceRequest) SetToUnitUserId(v int64) *AllocateCostUnitResourceRequest {
	s.ToUnitUserId = &v
	return s
}

func (s *AllocateCostUnitResourceRequest) SetToUnitId(v int64) *AllocateCostUnitResourceRequest {
	s.ToUnitId = &v
	return s
}

type AllocateCostUnitResourceRequestResourceInstanceList struct {
	ResourceUserId *int64  `json:"ResourceUserId,omitempty" xml:"ResourceUserId,omitempty" require:"true"`
	ResourceId     *string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true"`
	CommodityCode  *string `json:"CommodityCode,omitempty" xml:"CommodityCode,omitempty" require:"true"`
	ApportionCode  *string `json:"ApportionCode,omitempty" xml:"ApportionCode,omitempty"`
}

func (s AllocateCostUnitResourceRequestResourceInstanceList) String() string {
	return tea.Prettify(s)
}

func (s AllocateCostUnitResourceRequestResourceInstanceList) GoString() string {
	return s.String()
}

func (s *AllocateCostUnitResourceRequestResourceInstanceList) SetResourceUserId(v int64) *AllocateCostUnitResourceRequestResourceInstanceList {
	s.ResourceUserId = &v
	return s
}

func (s *AllocateCostUnitResourceRequestResourceInstanceList) SetResourceId(v string) *AllocateCostUnitResourceRequestResourceInstanceList {
	s.ResourceId = &v
	return s
}

func (s *AllocateCostUnitResourceRequestResourceInstanceList) SetCommodityCode(v string) *AllocateCostUnitResourceRequestResourceInstanceList {
	s.CommodityCode = &v
	return s
}

func (s *AllocateCostUnitResourceRequestResourceInstanceList) SetApportionCode(v string) *AllocateCostUnitResourceRequestResourceInstanceList {
	s.ApportionCode = &v
	return s
}

type AllocateCostUnitResourceResponse struct {
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                 `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                               `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                               `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *AllocateCostUnitResourceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s AllocateCostUnitResourceResponse) String() string {
	return tea.Prettify(s)
}

func (s AllocateCostUnitResourceResponse) GoString() string {
	return s.String()
}

func (s *AllocateCostUnitResourceResponse) SetRequestId(v string) *AllocateCostUnitResourceResponse {
	s.RequestId = &v
	return s
}

func (s *AllocateCostUnitResourceResponse) SetSuccess(v bool) *AllocateCostUnitResourceResponse {
	s.Success = &v
	return s
}

func (s *AllocateCostUnitResourceResponse) SetCode(v string) *AllocateCostUnitResourceResponse {
	s.Code = &v
	return s
}

func (s *AllocateCostUnitResourceResponse) SetMessage(v string) *AllocateCostUnitResourceResponse {
	s.Message = &v
	return s
}

func (s *AllocateCostUnitResourceResponse) SetData(v *AllocateCostUnitResourceResponseData) *AllocateCostUnitResourceResponse {
	s.Data = v
	return s
}

type AllocateCostUnitResourceResponseData struct {
	ToUnitUserId *int64 `json:"ToUnitUserId,omitempty" xml:"ToUnitUserId,omitempty" require:"true"`
	ToUnitId     *int64 `json:"ToUnitId,omitempty" xml:"ToUnitId,omitempty" require:"true"`
	IsSuccess    *bool  `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s AllocateCostUnitResourceResponseData) String() string {
	return tea.Prettify(s)
}

func (s AllocateCostUnitResourceResponseData) GoString() string {
	return s.String()
}

func (s *AllocateCostUnitResourceResponseData) SetToUnitUserId(v int64) *AllocateCostUnitResourceResponseData {
	s.ToUnitUserId = &v
	return s
}

func (s *AllocateCostUnitResourceResponseData) SetToUnitId(v int64) *AllocateCostUnitResourceResponseData {
	s.ToUnitId = &v
	return s
}

func (s *AllocateCostUnitResourceResponseData) SetIsSuccess(v bool) *AllocateCostUnitResourceResponseData {
	s.IsSuccess = &v
	return s
}

type QueryCostUnitResourceRequest struct {
	OwnerUid *int64 `json:"OwnerUid,omitempty" xml:"OwnerUid,omitempty" require:"true"`
	UnitId   *int64 `json:"UnitId,omitempty" xml:"UnitId,omitempty" require:"true"`
	PageNum  *int   `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize *int   `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s QueryCostUnitResourceRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryCostUnitResourceRequest) GoString() string {
	return s.String()
}

func (s *QueryCostUnitResourceRequest) SetOwnerUid(v int64) *QueryCostUnitResourceRequest {
	s.OwnerUid = &v
	return s
}

func (s *QueryCostUnitResourceRequest) SetUnitId(v int64) *QueryCostUnitResourceRequest {
	s.UnitId = &v
	return s
}

func (s *QueryCostUnitResourceRequest) SetPageNum(v int) *QueryCostUnitResourceRequest {
	s.PageNum = &v
	return s
}

func (s *QueryCostUnitResourceRequest) SetPageSize(v int) *QueryCostUnitResourceRequest {
	s.PageSize = &v
	return s
}

type QueryCostUnitResourceResponse struct {
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                              `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                            `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                            `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryCostUnitResourceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryCostUnitResourceResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryCostUnitResourceResponse) GoString() string {
	return s.String()
}

func (s *QueryCostUnitResourceResponse) SetRequestId(v string) *QueryCostUnitResourceResponse {
	s.RequestId = &v
	return s
}

func (s *QueryCostUnitResourceResponse) SetSuccess(v bool) *QueryCostUnitResourceResponse {
	s.Success = &v
	return s
}

func (s *QueryCostUnitResourceResponse) SetCode(v string) *QueryCostUnitResourceResponse {
	s.Code = &v
	return s
}

func (s *QueryCostUnitResourceResponse) SetMessage(v string) *QueryCostUnitResourceResponse {
	s.Message = &v
	return s
}

func (s *QueryCostUnitResourceResponse) SetData(v *QueryCostUnitResourceResponseData) *QueryCostUnitResourceResponse {
	s.Data = v
	return s
}

type QueryCostUnitResourceResponseData struct {
	PageNum                 *int                                                        `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize                *int                                                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount              *int                                                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	ResourceInstanceDtoList []*QueryCostUnitResourceResponseDataResourceInstanceDtoList `json:"ResourceInstanceDtoList,omitempty" xml:"ResourceInstanceDtoList,omitempty" require:"true" type:"Repeated"`
	CostUnit                *QueryCostUnitResourceResponseDataCostUnit                  `json:"CostUnit,omitempty" xml:"CostUnit,omitempty" require:"true" type:"Struct"`
	CostUnitStatisInfo      *QueryCostUnitResourceResponseDataCostUnitStatisInfo        `json:"CostUnitStatisInfo,omitempty" xml:"CostUnitStatisInfo,omitempty" require:"true" type:"Struct"`
}

func (s QueryCostUnitResourceResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryCostUnitResourceResponseData) GoString() string {
	return s.String()
}

func (s *QueryCostUnitResourceResponseData) SetPageNum(v int) *QueryCostUnitResourceResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryCostUnitResourceResponseData) SetPageSize(v int) *QueryCostUnitResourceResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryCostUnitResourceResponseData) SetTotalCount(v int) *QueryCostUnitResourceResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryCostUnitResourceResponseData) SetResourceInstanceDtoList(v []*QueryCostUnitResourceResponseDataResourceInstanceDtoList) *QueryCostUnitResourceResponseData {
	s.ResourceInstanceDtoList = v
	return s
}

func (s *QueryCostUnitResourceResponseData) SetCostUnit(v *QueryCostUnitResourceResponseDataCostUnit) *QueryCostUnitResourceResponseData {
	s.CostUnit = v
	return s
}

func (s *QueryCostUnitResourceResponseData) SetCostUnitStatisInfo(v *QueryCostUnitResourceResponseDataCostUnitStatisInfo) *QueryCostUnitResourceResponseData {
	s.CostUnitStatisInfo = v
	return s
}

type QueryCostUnitResourceResponseDataResourceInstanceDtoList struct {
	ResourceUserId   *int64  `json:"ResourceUserId,omitempty" xml:"ResourceUserId,omitempty" require:"true"`
	ResourceId       *string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true"`
	CommodityCode    *string `json:"CommodityCode,omitempty" xml:"CommodityCode,omitempty" require:"true"`
	ResourceUserName *string `json:"ResourceUserName,omitempty" xml:"ResourceUserName,omitempty" require:"true"`
	CommodityName    *string `json:"CommodityName,omitempty" xml:"CommodityName,omitempty" require:"true"`
	ResourceGroup    *string `json:"ResourceGroup,omitempty" xml:"ResourceGroup,omitempty" require:"true"`
	ResourceTag      *string `json:"ResourceTag,omitempty" xml:"ResourceTag,omitempty" require:"true"`
	ResourceNick     *string `json:"ResourceNick,omitempty" xml:"ResourceNick,omitempty" require:"true"`
	ResourceType     *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	ResourceStatus   *string `json:"ResourceStatus,omitempty" xml:"ResourceStatus,omitempty" require:"true"`
	RelatedResources *string `json:"RelatedResources,omitempty" xml:"RelatedResources,omitempty" require:"true"`
	ApportionCode    *string `json:"ApportionCode,omitempty" xml:"ApportionCode,omitempty" require:"true"`
	ApportionName    *string `json:"ApportionName,omitempty" xml:"ApportionName,omitempty" require:"true"`
}

func (s QueryCostUnitResourceResponseDataResourceInstanceDtoList) String() string {
	return tea.Prettify(s)
}

func (s QueryCostUnitResourceResponseDataResourceInstanceDtoList) GoString() string {
	return s.String()
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetResourceUserId(v int64) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.ResourceUserId = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetResourceId(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.ResourceId = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetCommodityCode(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.CommodityCode = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetResourceUserName(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.ResourceUserName = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetCommodityName(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.CommodityName = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetResourceGroup(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.ResourceGroup = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetResourceTag(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.ResourceTag = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetResourceNick(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.ResourceNick = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetResourceType(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.ResourceType = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetResourceStatus(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.ResourceStatus = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetRelatedResources(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.RelatedResources = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetApportionCode(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.ApportionCode = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataResourceInstanceDtoList) SetApportionName(v string) *QueryCostUnitResourceResponseDataResourceInstanceDtoList {
	s.ApportionName = &v
	return s
}

type QueryCostUnitResourceResponseDataCostUnit struct {
	OwnerUid     *int64  `json:"OwnerUid,omitempty" xml:"OwnerUid,omitempty" require:"true"`
	ParentUnitId *int64  `json:"ParentUnitId,omitempty" xml:"ParentUnitId,omitempty" require:"true"`
	UnitId       *int64  `json:"UnitId,omitempty" xml:"UnitId,omitempty" require:"true"`
	UnitName     *string `json:"UnitName,omitempty" xml:"UnitName,omitempty" require:"true"`
}

func (s QueryCostUnitResourceResponseDataCostUnit) String() string {
	return tea.Prettify(s)
}

func (s QueryCostUnitResourceResponseDataCostUnit) GoString() string {
	return s.String()
}

func (s *QueryCostUnitResourceResponseDataCostUnit) SetOwnerUid(v int64) *QueryCostUnitResourceResponseDataCostUnit {
	s.OwnerUid = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataCostUnit) SetParentUnitId(v int64) *QueryCostUnitResourceResponseDataCostUnit {
	s.ParentUnitId = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataCostUnit) SetUnitId(v int64) *QueryCostUnitResourceResponseDataCostUnit {
	s.UnitId = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataCostUnit) SetUnitName(v string) *QueryCostUnitResourceResponseDataCostUnit {
	s.UnitName = &v
	return s
}

type QueryCostUnitResourceResponseDataCostUnitStatisInfo struct {
	ResourceCount           *int64 `json:"ResourceCount,omitempty" xml:"ResourceCount,omitempty" require:"true"`
	ResourceGroupCount      *int64 `json:"ResourceGroupCount,omitempty" xml:"ResourceGroupCount,omitempty" require:"true"`
	SubUnitCount            *int64 `json:"SubUnitCount,omitempty" xml:"SubUnitCount,omitempty" require:"true"`
	UserCount               *int64 `json:"UserCount,omitempty" xml:"UserCount,omitempty" require:"true"`
	TotalResourceCount      *int64 `json:"TotalResourceCount,omitempty" xml:"TotalResourceCount,omitempty" require:"true"`
	TotalUserCount          *int64 `json:"TotalUserCount,omitempty" xml:"TotalUserCount,omitempty" require:"true"`
	TotalResourceGroupCount *int64 `json:"TotalResourceGroupCount,omitempty" xml:"TotalResourceGroupCount,omitempty" require:"true"`
}

func (s QueryCostUnitResourceResponseDataCostUnitStatisInfo) String() string {
	return tea.Prettify(s)
}

func (s QueryCostUnitResourceResponseDataCostUnitStatisInfo) GoString() string {
	return s.String()
}

func (s *QueryCostUnitResourceResponseDataCostUnitStatisInfo) SetResourceCount(v int64) *QueryCostUnitResourceResponseDataCostUnitStatisInfo {
	s.ResourceCount = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataCostUnitStatisInfo) SetResourceGroupCount(v int64) *QueryCostUnitResourceResponseDataCostUnitStatisInfo {
	s.ResourceGroupCount = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataCostUnitStatisInfo) SetSubUnitCount(v int64) *QueryCostUnitResourceResponseDataCostUnitStatisInfo {
	s.SubUnitCount = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataCostUnitStatisInfo) SetUserCount(v int64) *QueryCostUnitResourceResponseDataCostUnitStatisInfo {
	s.UserCount = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataCostUnitStatisInfo) SetTotalResourceCount(v int64) *QueryCostUnitResourceResponseDataCostUnitStatisInfo {
	s.TotalResourceCount = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataCostUnitStatisInfo) SetTotalUserCount(v int64) *QueryCostUnitResourceResponseDataCostUnitStatisInfo {
	s.TotalUserCount = &v
	return s
}

func (s *QueryCostUnitResourceResponseDataCostUnitStatisInfo) SetTotalResourceGroupCount(v int64) *QueryCostUnitResourceResponseDataCostUnitStatisInfo {
	s.TotalResourceGroupCount = &v
	return s
}

type RenewResourcePackageRequest struct {
	InstanceId    *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	EffectiveDate *string `json:"EffectiveDate,omitempty" xml:"EffectiveDate,omitempty"`
	Duration      *int    `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	PricingCycle  *string `json:"PricingCycle,omitempty" xml:"PricingCycle,omitempty" require:"true"`
}

func (s RenewResourcePackageRequest) String() string {
	return tea.Prettify(s)
}

func (s RenewResourcePackageRequest) GoString() string {
	return s.String()
}

func (s *RenewResourcePackageRequest) SetInstanceId(v string) *RenewResourcePackageRequest {
	s.InstanceId = &v
	return s
}

func (s *RenewResourcePackageRequest) SetEffectiveDate(v string) *RenewResourcePackageRequest {
	s.EffectiveDate = &v
	return s
}

func (s *RenewResourcePackageRequest) SetDuration(v int) *RenewResourcePackageRequest {
	s.Duration = &v
	return s
}

func (s *RenewResourcePackageRequest) SetPricingCycle(v string) *RenewResourcePackageRequest {
	s.PricingCycle = &v
	return s
}

type RenewResourcePackageResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OrderId   *int64                            `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
	Success   *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                           `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                           `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *RenewResourcePackageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RenewResourcePackageResponse) String() string {
	return tea.Prettify(s)
}

func (s RenewResourcePackageResponse) GoString() string {
	return s.String()
}

func (s *RenewResourcePackageResponse) SetRequestId(v string) *RenewResourcePackageResponse {
	s.RequestId = &v
	return s
}

func (s *RenewResourcePackageResponse) SetOrderId(v int64) *RenewResourcePackageResponse {
	s.OrderId = &v
	return s
}

func (s *RenewResourcePackageResponse) SetSuccess(v bool) *RenewResourcePackageResponse {
	s.Success = &v
	return s
}

func (s *RenewResourcePackageResponse) SetCode(v string) *RenewResourcePackageResponse {
	s.Code = &v
	return s
}

func (s *RenewResourcePackageResponse) SetMessage(v string) *RenewResourcePackageResponse {
	s.Message = &v
	return s
}

func (s *RenewResourcePackageResponse) SetData(v *RenewResourcePackageResponseData) *RenewResourcePackageResponse {
	s.Data = v
	return s
}

type RenewResourcePackageResponseData struct {
	OrderId    *int64  `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s RenewResourcePackageResponseData) String() string {
	return tea.Prettify(s)
}

func (s RenewResourcePackageResponseData) GoString() string {
	return s.String()
}

func (s *RenewResourcePackageResponseData) SetOrderId(v int64) *RenewResourcePackageResponseData {
	s.OrderId = &v
	return s
}

func (s *RenewResourcePackageResponseData) SetInstanceId(v string) *RenewResourcePackageResponseData {
	s.InstanceId = &v
	return s
}

type UpgradeResourcePackageRequest struct {
	InstanceId    *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
	EffectiveDate *string `json:"EffectiveDate,omitempty" xml:"EffectiveDate,omitempty"`
	Specification *string `json:"Specification,omitempty" xml:"Specification,omitempty"`
}

func (s UpgradeResourcePackageRequest) String() string {
	return tea.Prettify(s)
}

func (s UpgradeResourcePackageRequest) GoString() string {
	return s.String()
}

func (s *UpgradeResourcePackageRequest) SetInstanceId(v string) *UpgradeResourcePackageRequest {
	s.InstanceId = &v
	return s
}

func (s *UpgradeResourcePackageRequest) SetEffectiveDate(v string) *UpgradeResourcePackageRequest {
	s.EffectiveDate = &v
	return s
}

func (s *UpgradeResourcePackageRequest) SetSpecification(v string) *UpgradeResourcePackageRequest {
	s.Specification = &v
	return s
}

type UpgradeResourcePackageResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OrderId   *int64                              `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
	Success   *bool                               `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                             `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                             `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *UpgradeResourcePackageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s UpgradeResourcePackageResponse) String() string {
	return tea.Prettify(s)
}

func (s UpgradeResourcePackageResponse) GoString() string {
	return s.String()
}

func (s *UpgradeResourcePackageResponse) SetRequestId(v string) *UpgradeResourcePackageResponse {
	s.RequestId = &v
	return s
}

func (s *UpgradeResourcePackageResponse) SetOrderId(v int64) *UpgradeResourcePackageResponse {
	s.OrderId = &v
	return s
}

func (s *UpgradeResourcePackageResponse) SetSuccess(v bool) *UpgradeResourcePackageResponse {
	s.Success = &v
	return s
}

func (s *UpgradeResourcePackageResponse) SetCode(v string) *UpgradeResourcePackageResponse {
	s.Code = &v
	return s
}

func (s *UpgradeResourcePackageResponse) SetMessage(v string) *UpgradeResourcePackageResponse {
	s.Message = &v
	return s
}

func (s *UpgradeResourcePackageResponse) SetData(v *UpgradeResourcePackageResponseData) *UpgradeResourcePackageResponse {
	s.Data = v
	return s
}

type UpgradeResourcePackageResponseData struct {
	OrderId    *int64  `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s UpgradeResourcePackageResponseData) String() string {
	return tea.Prettify(s)
}

func (s UpgradeResourcePackageResponseData) GoString() string {
	return s.String()
}

func (s *UpgradeResourcePackageResponseData) SetOrderId(v int64) *UpgradeResourcePackageResponseData {
	s.OrderId = &v
	return s
}

func (s *UpgradeResourcePackageResponseData) SetInstanceId(v string) *UpgradeResourcePackageResponseData {
	s.InstanceId = &v
	return s
}

type CreateAgAccountRequest struct {
	LoginEmail     *string `json:"LoginEmail,omitempty" xml:"LoginEmail,omitempty" require:"true"`
	AccountAttr    *string `json:"AccountAttr,omitempty" xml:"AccountAttr,omitempty"`
	EnterpriseName *string `json:"EnterpriseName,omitempty" xml:"EnterpriseName,omitempty"`
	FirstName      *string `json:"FirstName,omitempty" xml:"FirstName,omitempty"`
	LastName       *string `json:"LastName,omitempty" xml:"LastName,omitempty"`
	NationCode     *string `json:"NationCode,omitempty" xml:"NationCode,omitempty"`
	ProvinceName   *string `json:"ProvinceName,omitempty" xml:"ProvinceName,omitempty"`
	CityName       *string `json:"CityName,omitempty" xml:"CityName,omitempty"`
	Postcode       *string `json:"Postcode,omitempty" xml:"Postcode,omitempty"`
}

func (s CreateAgAccountRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAgAccountRequest) GoString() string {
	return s.String()
}

func (s *CreateAgAccountRequest) SetLoginEmail(v string) *CreateAgAccountRequest {
	s.LoginEmail = &v
	return s
}

func (s *CreateAgAccountRequest) SetAccountAttr(v string) *CreateAgAccountRequest {
	s.AccountAttr = &v
	return s
}

func (s *CreateAgAccountRequest) SetEnterpriseName(v string) *CreateAgAccountRequest {
	s.EnterpriseName = &v
	return s
}

func (s *CreateAgAccountRequest) SetFirstName(v string) *CreateAgAccountRequest {
	s.FirstName = &v
	return s
}

func (s *CreateAgAccountRequest) SetLastName(v string) *CreateAgAccountRequest {
	s.LastName = &v
	return s
}

func (s *CreateAgAccountRequest) SetNationCode(v string) *CreateAgAccountRequest {
	s.NationCode = &v
	return s
}

func (s *CreateAgAccountRequest) SetProvinceName(v string) *CreateAgAccountRequest {
	s.ProvinceName = &v
	return s
}

func (s *CreateAgAccountRequest) SetCityName(v string) *CreateAgAccountRequest {
	s.CityName = &v
	return s
}

func (s *CreateAgAccountRequest) SetPostcode(v string) *CreateAgAccountRequest {
	s.Postcode = &v
	return s
}

type CreateAgAccountResponse struct {
	RequestId     *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code          *string                               `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message       *string                               `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Success       *bool                                 `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	AgRelationDto *CreateAgAccountResponseAgRelationDto `json:"AgRelationDto,omitempty" xml:"AgRelationDto,omitempty" require:"true" type:"Struct"`
}

func (s CreateAgAccountResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAgAccountResponse) GoString() string {
	return s.String()
}

func (s *CreateAgAccountResponse) SetRequestId(v string) *CreateAgAccountResponse {
	s.RequestId = &v
	return s
}

func (s *CreateAgAccountResponse) SetCode(v string) *CreateAgAccountResponse {
	s.Code = &v
	return s
}

func (s *CreateAgAccountResponse) SetMessage(v string) *CreateAgAccountResponse {
	s.Message = &v
	return s
}

func (s *CreateAgAccountResponse) SetSuccess(v bool) *CreateAgAccountResponse {
	s.Success = &v
	return s
}

func (s *CreateAgAccountResponse) SetAgRelationDto(v *CreateAgAccountResponseAgRelationDto) *CreateAgAccountResponse {
	s.AgRelationDto = v
	return s
}

type CreateAgAccountResponseAgRelationDto struct {
	Pk               *string `json:"Pk,omitempty" xml:"Pk,omitempty" require:"true"`
	Type             *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Mpk              *string `json:"Mpk,omitempty" xml:"Mpk,omitempty" require:"true"`
	RamAdminRoleName *string `json:"RamAdminRoleName,omitempty" xml:"RamAdminRoleName,omitempty" require:"true"`
}

func (s CreateAgAccountResponseAgRelationDto) String() string {
	return tea.Prettify(s)
}

func (s CreateAgAccountResponseAgRelationDto) GoString() string {
	return s.String()
}

func (s *CreateAgAccountResponseAgRelationDto) SetPk(v string) *CreateAgAccountResponseAgRelationDto {
	s.Pk = &v
	return s
}

func (s *CreateAgAccountResponseAgRelationDto) SetType(v string) *CreateAgAccountResponseAgRelationDto {
	s.Type = &v
	return s
}

func (s *CreateAgAccountResponseAgRelationDto) SetMpk(v string) *CreateAgAccountResponseAgRelationDto {
	s.Mpk = &v
	return s
}

func (s *CreateAgAccountResponseAgRelationDto) SetRamAdminRoleName(v string) *CreateAgAccountResponseAgRelationDto {
	s.RamAdminRoleName = &v
	return s
}

type GetCustomerAccountInfoRequest struct {
}

func (s GetCustomerAccountInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s GetCustomerAccountInfoRequest) GoString() string {
	return s.String()
}

type GetCustomerAccountInfoResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                               `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                             `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                             `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *GetCustomerAccountInfoResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetCustomerAccountInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s GetCustomerAccountInfoResponse) GoString() string {
	return s.String()
}

func (s *GetCustomerAccountInfoResponse) SetRequestId(v string) *GetCustomerAccountInfoResponse {
	s.RequestId = &v
	return s
}

func (s *GetCustomerAccountInfoResponse) SetSuccess(v bool) *GetCustomerAccountInfoResponse {
	s.Success = &v
	return s
}

func (s *GetCustomerAccountInfoResponse) SetCode(v string) *GetCustomerAccountInfoResponse {
	s.Code = &v
	return s
}

func (s *GetCustomerAccountInfoResponse) SetMessage(v string) *GetCustomerAccountInfoResponse {
	s.Message = &v
	return s
}

func (s *GetCustomerAccountInfoResponse) SetData(v *GetCustomerAccountInfoResponseData) *GetCustomerAccountInfoResponse {
	s.Data = v
	return s
}

type GetCustomerAccountInfoResponseData struct {
	LoginEmail        *string `json:"LoginEmail,omitempty" xml:"LoginEmail,omitempty" require:"true"`
	AccountType       *string `json:"AccountType,omitempty" xml:"AccountType,omitempty" require:"true"`
	Mpk               *int64  `json:"Mpk,omitempty" xml:"Mpk,omitempty" require:"true"`
	HostingStatus     *string `json:"HostingStatus,omitempty" xml:"HostingStatus,omitempty" require:"true"`
	CreditLimitStatus *string `json:"CreditLimitStatus,omitempty" xml:"CreditLimitStatus,omitempty" require:"true"`
	IsCertified       *bool   `json:"IsCertified,omitempty" xml:"IsCertified,omitempty" require:"true"`
}

func (s GetCustomerAccountInfoResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetCustomerAccountInfoResponseData) GoString() string {
	return s.String()
}

func (s *GetCustomerAccountInfoResponseData) SetLoginEmail(v string) *GetCustomerAccountInfoResponseData {
	s.LoginEmail = &v
	return s
}

func (s *GetCustomerAccountInfoResponseData) SetAccountType(v string) *GetCustomerAccountInfoResponseData {
	s.AccountType = &v
	return s
}

func (s *GetCustomerAccountInfoResponseData) SetMpk(v int64) *GetCustomerAccountInfoResponseData {
	s.Mpk = &v
	return s
}

func (s *GetCustomerAccountInfoResponseData) SetHostingStatus(v string) *GetCustomerAccountInfoResponseData {
	s.HostingStatus = &v
	return s
}

func (s *GetCustomerAccountInfoResponseData) SetCreditLimitStatus(v string) *GetCustomerAccountInfoResponseData {
	s.CreditLimitStatus = &v
	return s
}

func (s *GetCustomerAccountInfoResponseData) SetIsCertified(v bool) *GetCustomerAccountInfoResponseData {
	s.IsCertified = &v
	return s
}

type GetCustomerListRequest struct {
}

func (s GetCustomerListRequest) String() string {
	return tea.Prettify(s)
}

func (s GetCustomerListRequest) GoString() string {
	return s.String()
}

type GetCustomerListResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                        `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                      `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                      `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *GetCustomerListResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetCustomerListResponse) String() string {
	return tea.Prettify(s)
}

func (s GetCustomerListResponse) GoString() string {
	return s.String()
}

func (s *GetCustomerListResponse) SetRequestId(v string) *GetCustomerListResponse {
	s.RequestId = &v
	return s
}

func (s *GetCustomerListResponse) SetSuccess(v bool) *GetCustomerListResponse {
	s.Success = &v
	return s
}

func (s *GetCustomerListResponse) SetCode(v string) *GetCustomerListResponse {
	s.Code = &v
	return s
}

func (s *GetCustomerListResponse) SetMessage(v string) *GetCustomerListResponse {
	s.Message = &v
	return s
}

func (s *GetCustomerListResponse) SetData(v *GetCustomerListResponseData) *GetCustomerListResponse {
	s.Data = v
	return s
}

type GetCustomerListResponseData struct {
	UidList []*string `json:"UidList,omitempty" xml:"UidList,omitempty" require:"true" type:"Repeated"`
}

func (s GetCustomerListResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetCustomerListResponseData) GoString() string {
	return s.String()
}

func (s *GetCustomerListResponseData) SetUidList(v []*string) *GetCustomerListResponseData {
	s.UidList = v
	return s
}

type ChangeResellerConsumeAmountRequest struct {
	AdjustType   *string `json:"AdjustType,omitempty" xml:"AdjustType,omitempty" require:"true"`
	Amount       *string `json:"Amount,omitempty" xml:"Amount,omitempty" require:"true"`
	Currency     *string `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	BusinessType *string `json:"BusinessType,omitempty" xml:"BusinessType,omitempty" require:"true"`
	Source       *string `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	OutBizId     *string `json:"OutBizId,omitempty" xml:"OutBizId,omitempty" require:"true"`
	ExtendMap    *string `json:"ExtendMap,omitempty" xml:"ExtendMap,omitempty"`
}

func (s ChangeResellerConsumeAmountRequest) String() string {
	return tea.Prettify(s)
}

func (s ChangeResellerConsumeAmountRequest) GoString() string {
	return s.String()
}

func (s *ChangeResellerConsumeAmountRequest) SetAdjustType(v string) *ChangeResellerConsumeAmountRequest {
	s.AdjustType = &v
	return s
}

func (s *ChangeResellerConsumeAmountRequest) SetAmount(v string) *ChangeResellerConsumeAmountRequest {
	s.Amount = &v
	return s
}

func (s *ChangeResellerConsumeAmountRequest) SetCurrency(v string) *ChangeResellerConsumeAmountRequest {
	s.Currency = &v
	return s
}

func (s *ChangeResellerConsumeAmountRequest) SetBusinessType(v string) *ChangeResellerConsumeAmountRequest {
	s.BusinessType = &v
	return s
}

func (s *ChangeResellerConsumeAmountRequest) SetSource(v string) *ChangeResellerConsumeAmountRequest {
	s.Source = &v
	return s
}

func (s *ChangeResellerConsumeAmountRequest) SetOutBizId(v string) *ChangeResellerConsumeAmountRequest {
	s.OutBizId = &v
	return s
}

func (s *ChangeResellerConsumeAmountRequest) SetExtendMap(v string) *ChangeResellerConsumeAmountRequest {
	s.ExtendMap = &v
	return s
}

type ChangeResellerConsumeAmountResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s ChangeResellerConsumeAmountResponse) String() string {
	return tea.Prettify(s)
}

func (s ChangeResellerConsumeAmountResponse) GoString() string {
	return s.String()
}

func (s *ChangeResellerConsumeAmountResponse) SetRequestId(v string) *ChangeResellerConsumeAmountResponse {
	s.RequestId = &v
	return s
}

func (s *ChangeResellerConsumeAmountResponse) SetCode(v string) *ChangeResellerConsumeAmountResponse {
	s.Code = &v
	return s
}

func (s *ChangeResellerConsumeAmountResponse) SetMessage(v string) *ChangeResellerConsumeAmountResponse {
	s.Message = &v
	return s
}

func (s *ChangeResellerConsumeAmountResponse) SetSuccess(v bool) *ChangeResellerConsumeAmountResponse {
	s.Success = &v
	return s
}

func (s *ChangeResellerConsumeAmountResponse) SetData(v string) *ChangeResellerConsumeAmountResponse {
	s.Data = &v
	return s
}

type SetResellerUserStatusRequest struct {
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	BusinessType *string `json:"BusinessType,omitempty" xml:"BusinessType,omitempty" require:"true"`
}

func (s SetResellerUserStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s SetResellerUserStatusRequest) GoString() string {
	return s.String()
}

func (s *SetResellerUserStatusRequest) SetStatus(v string) *SetResellerUserStatusRequest {
	s.Status = &v
	return s
}

func (s *SetResellerUserStatusRequest) SetBusinessType(v string) *SetResellerUserStatusRequest {
	s.BusinessType = &v
	return s
}

type SetResellerUserStatusResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data      *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s SetResellerUserStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s SetResellerUserStatusResponse) GoString() string {
	return s.String()
}

func (s *SetResellerUserStatusResponse) SetRequestId(v string) *SetResellerUserStatusResponse {
	s.RequestId = &v
	return s
}

func (s *SetResellerUserStatusResponse) SetCode(v string) *SetResellerUserStatusResponse {
	s.Code = &v
	return s
}

func (s *SetResellerUserStatusResponse) SetMessage(v string) *SetResellerUserStatusResponse {
	s.Message = &v
	return s
}

func (s *SetResellerUserStatusResponse) SetSuccess(v bool) *SetResellerUserStatusResponse {
	s.Success = &v
	return s
}

func (s *SetResellerUserStatusResponse) SetData(v bool) *SetResellerUserStatusResponse {
	s.Data = &v
	return s
}

type CreateResellerUserQuotaRequest struct {
	Amount   *string `json:"Amount,omitempty" xml:"Amount,omitempty" require:"true"`
	Currency *string `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	OutBizId *string `json:"OutBizId,omitempty" xml:"OutBizId,omitempty"`
}

func (s CreateResellerUserQuotaRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateResellerUserQuotaRequest) GoString() string {
	return s.String()
}

func (s *CreateResellerUserQuotaRequest) SetAmount(v string) *CreateResellerUserQuotaRequest {
	s.Amount = &v
	return s
}

func (s *CreateResellerUserQuotaRequest) SetCurrency(v string) *CreateResellerUserQuotaRequest {
	s.Currency = &v
	return s
}

func (s *CreateResellerUserQuotaRequest) SetOutBizId(v string) *CreateResellerUserQuotaRequest {
	s.OutBizId = &v
	return s
}

type CreateResellerUserQuotaResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data      *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s CreateResellerUserQuotaResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateResellerUserQuotaResponse) GoString() string {
	return s.String()
}

func (s *CreateResellerUserQuotaResponse) SetRequestId(v string) *CreateResellerUserQuotaResponse {
	s.RequestId = &v
	return s
}

func (s *CreateResellerUserQuotaResponse) SetCode(v string) *CreateResellerUserQuotaResponse {
	s.Code = &v
	return s
}

func (s *CreateResellerUserQuotaResponse) SetMessage(v string) *CreateResellerUserQuotaResponse {
	s.Message = &v
	return s
}

func (s *CreateResellerUserQuotaResponse) SetSuccess(v bool) *CreateResellerUserQuotaResponse {
	s.Success = &v
	return s
}

func (s *CreateResellerUserQuotaResponse) SetData(v bool) *CreateResellerUserQuotaResponse {
	s.Data = &v
	return s
}

type SetResellerUserQuotaRequest struct {
	Amount   *string `json:"Amount,omitempty" xml:"Amount,omitempty" require:"true"`
	Currency *string `json:"Currency,omitempty" xml:"Currency,omitempty"`
	OutBizId *string `json:"OutBizId,omitempty" xml:"OutBizId,omitempty"`
}

func (s SetResellerUserQuotaRequest) String() string {
	return tea.Prettify(s)
}

func (s SetResellerUserQuotaRequest) GoString() string {
	return s.String()
}

func (s *SetResellerUserQuotaRequest) SetAmount(v string) *SetResellerUserQuotaRequest {
	s.Amount = &v
	return s
}

func (s *SetResellerUserQuotaRequest) SetCurrency(v string) *SetResellerUserQuotaRequest {
	s.Currency = &v
	return s
}

func (s *SetResellerUserQuotaRequest) SetOutBizId(v string) *SetResellerUserQuotaRequest {
	s.OutBizId = &v
	return s
}

type SetResellerUserQuotaResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data      *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s SetResellerUserQuotaResponse) String() string {
	return tea.Prettify(s)
}

func (s SetResellerUserQuotaResponse) GoString() string {
	return s.String()
}

func (s *SetResellerUserQuotaResponse) SetRequestId(v string) *SetResellerUserQuotaResponse {
	s.RequestId = &v
	return s
}

func (s *SetResellerUserQuotaResponse) SetCode(v string) *SetResellerUserQuotaResponse {
	s.Code = &v
	return s
}

func (s *SetResellerUserQuotaResponse) SetMessage(v string) *SetResellerUserQuotaResponse {
	s.Message = &v
	return s
}

func (s *SetResellerUserQuotaResponse) SetSuccess(v bool) *SetResellerUserQuotaResponse {
	s.Success = &v
	return s
}

func (s *SetResellerUserQuotaResponse) SetData(v bool) *SetResellerUserQuotaResponse {
	s.Data = &v
	return s
}

type QueryResellerAvailableQuotaRequest struct {
	ItemCodes *string `json:"ItemCodes,omitempty" xml:"ItemCodes,omitempty"`
}

func (s QueryResellerAvailableQuotaRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryResellerAvailableQuotaRequest) GoString() string {
	return s.String()
}

func (s *QueryResellerAvailableQuotaRequest) SetItemCodes(v string) *QueryResellerAvailableQuotaRequest {
	s.ItemCodes = &v
	return s
}

type QueryResellerAvailableQuotaResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s QueryResellerAvailableQuotaResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryResellerAvailableQuotaResponse) GoString() string {
	return s.String()
}

func (s *QueryResellerAvailableQuotaResponse) SetRequestId(v string) *QueryResellerAvailableQuotaResponse {
	s.RequestId = &v
	return s
}

func (s *QueryResellerAvailableQuotaResponse) SetCode(v string) *QueryResellerAvailableQuotaResponse {
	s.Code = &v
	return s
}

func (s *QueryResellerAvailableQuotaResponse) SetMessage(v string) *QueryResellerAvailableQuotaResponse {
	s.Message = &v
	return s
}

func (s *QueryResellerAvailableQuotaResponse) SetSuccess(v bool) *QueryResellerAvailableQuotaResponse {
	s.Success = &v
	return s
}

func (s *QueryResellerAvailableQuotaResponse) SetData(v string) *QueryResellerAvailableQuotaResponse {
	s.Data = &v
	return s
}

type SetResellerUserAlarmThresholdRequest struct {
	AlarmType       *string `json:"AlarmType,omitempty" xml:"AlarmType,omitempty" require:"true"`
	AlarmThresholds *string `json:"AlarmThresholds,omitempty" xml:"AlarmThresholds,omitempty"`
}

func (s SetResellerUserAlarmThresholdRequest) String() string {
	return tea.Prettify(s)
}

func (s SetResellerUserAlarmThresholdRequest) GoString() string {
	return s.String()
}

func (s *SetResellerUserAlarmThresholdRequest) SetAlarmType(v string) *SetResellerUserAlarmThresholdRequest {
	s.AlarmType = &v
	return s
}

func (s *SetResellerUserAlarmThresholdRequest) SetAlarmThresholds(v string) *SetResellerUserAlarmThresholdRequest {
	s.AlarmThresholds = &v
	return s
}

type SetResellerUserAlarmThresholdResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data      *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s SetResellerUserAlarmThresholdResponse) String() string {
	return tea.Prettify(s)
}

func (s SetResellerUserAlarmThresholdResponse) GoString() string {
	return s.String()
}

func (s *SetResellerUserAlarmThresholdResponse) SetRequestId(v string) *SetResellerUserAlarmThresholdResponse {
	s.RequestId = &v
	return s
}

func (s *SetResellerUserAlarmThresholdResponse) SetCode(v string) *SetResellerUserAlarmThresholdResponse {
	s.Code = &v
	return s
}

func (s *SetResellerUserAlarmThresholdResponse) SetMessage(v string) *SetResellerUserAlarmThresholdResponse {
	s.Message = &v
	return s
}

func (s *SetResellerUserAlarmThresholdResponse) SetSuccess(v bool) *SetResellerUserAlarmThresholdResponse {
	s.Success = &v
	return s
}

func (s *SetResellerUserAlarmThresholdResponse) SetData(v bool) *SetResellerUserAlarmThresholdResponse {
	s.Data = &v
	return s
}

type QueryAccountTransactionsRequest struct {
	TransactionNumber    *string `json:"TransactionNumber,omitempty" xml:"TransactionNumber,omitempty"`
	RecordID             *string `json:"RecordID,omitempty" xml:"RecordID,omitempty"`
	TransactionChannelSN *string `json:"TransactionChannelSN,omitempty" xml:"TransactionChannelSN,omitempty"`
	CreateTimeStart      *string `json:"CreateTimeStart,omitempty" xml:"CreateTimeStart,omitempty"`
	CreateTimeEnd        *string `json:"CreateTimeEnd,omitempty" xml:"CreateTimeEnd,omitempty"`
	PageNum              *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize             *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s QueryAccountTransactionsRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountTransactionsRequest) GoString() string {
	return s.String()
}

func (s *QueryAccountTransactionsRequest) SetTransactionNumber(v string) *QueryAccountTransactionsRequest {
	s.TransactionNumber = &v
	return s
}

func (s *QueryAccountTransactionsRequest) SetRecordID(v string) *QueryAccountTransactionsRequest {
	s.RecordID = &v
	return s
}

func (s *QueryAccountTransactionsRequest) SetTransactionChannelSN(v string) *QueryAccountTransactionsRequest {
	s.TransactionChannelSN = &v
	return s
}

func (s *QueryAccountTransactionsRequest) SetCreateTimeStart(v string) *QueryAccountTransactionsRequest {
	s.CreateTimeStart = &v
	return s
}

func (s *QueryAccountTransactionsRequest) SetCreateTimeEnd(v string) *QueryAccountTransactionsRequest {
	s.CreateTimeEnd = &v
	return s
}

func (s *QueryAccountTransactionsRequest) SetPageNum(v int) *QueryAccountTransactionsRequest {
	s.PageNum = &v
	return s
}

func (s *QueryAccountTransactionsRequest) SetPageSize(v int) *QueryAccountTransactionsRequest {
	s.PageSize = &v
	return s
}

type QueryAccountTransactionsResponse struct {
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                 `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                               `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                               `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryAccountTransactionsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryAccountTransactionsResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountTransactionsResponse) GoString() string {
	return s.String()
}

func (s *QueryAccountTransactionsResponse) SetRequestId(v string) *QueryAccountTransactionsResponse {
	s.RequestId = &v
	return s
}

func (s *QueryAccountTransactionsResponse) SetSuccess(v bool) *QueryAccountTransactionsResponse {
	s.Success = &v
	return s
}

func (s *QueryAccountTransactionsResponse) SetCode(v string) *QueryAccountTransactionsResponse {
	s.Code = &v
	return s
}

func (s *QueryAccountTransactionsResponse) SetMessage(v string) *QueryAccountTransactionsResponse {
	s.Message = &v
	return s
}

func (s *QueryAccountTransactionsResponse) SetData(v *QueryAccountTransactionsResponseData) *QueryAccountTransactionsResponse {
	s.Data = v
	return s
}

type QueryAccountTransactionsResponseData struct {
	AccountName             *string                                                      `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	TotalCount              *int                                                         `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNum                 *int                                                         `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize                *int                                                         `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	AccountTransactionsList *QueryAccountTransactionsResponseDataAccountTransactionsList `json:"AccountTransactionsList,omitempty" xml:"AccountTransactionsList,omitempty" require:"true" type:"Struct"`
}

func (s QueryAccountTransactionsResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountTransactionsResponseData) GoString() string {
	return s.String()
}

func (s *QueryAccountTransactionsResponseData) SetAccountName(v string) *QueryAccountTransactionsResponseData {
	s.AccountName = &v
	return s
}

func (s *QueryAccountTransactionsResponseData) SetTotalCount(v int) *QueryAccountTransactionsResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryAccountTransactionsResponseData) SetPageNum(v int) *QueryAccountTransactionsResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryAccountTransactionsResponseData) SetPageSize(v int) *QueryAccountTransactionsResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryAccountTransactionsResponseData) SetAccountTransactionsList(v *QueryAccountTransactionsResponseDataAccountTransactionsList) *QueryAccountTransactionsResponseData {
	s.AccountTransactionsList = v
	return s
}

type QueryAccountTransactionsResponseDataAccountTransactionsList struct {
	AccountTransactionsList []*QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList `json:"AccountTransactionsList,omitempty" xml:"AccountTransactionsList,omitempty" require:"true" type:"Repeated"`
}

func (s QueryAccountTransactionsResponseDataAccountTransactionsList) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountTransactionsResponseDataAccountTransactionsList) GoString() string {
	return s.String()
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsList) SetAccountTransactionsList(v []*QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) *QueryAccountTransactionsResponseDataAccountTransactionsList {
	s.AccountTransactionsList = v
	return s
}

type QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList struct {
	TransactionNumber    *string `json:"TransactionNumber,omitempty" xml:"TransactionNumber,omitempty" require:"true"`
	TransactionTime      *string `json:"TransactionTime,omitempty" xml:"TransactionTime,omitempty" require:"true"`
	TransactionFlow      *string `json:"TransactionFlow,omitempty" xml:"TransactionFlow,omitempty" require:"true"`
	TransactionType      *string `json:"TransactionType,omitempty" xml:"TransactionType,omitempty" require:"true"`
	TransactionChannel   *string `json:"TransactionChannel,omitempty" xml:"TransactionChannel,omitempty" require:"true"`
	TransactionChannelSN *string `json:"TransactionChannelSN,omitempty" xml:"TransactionChannelSN,omitempty" require:"true"`
	FundType             *string `json:"FundType,omitempty" xml:"FundType,omitempty" require:"true"`
	RecordID             *string `json:"RecordID,omitempty" xml:"RecordID,omitempty" require:"true"`
	Remarks              *string `json:"Remarks,omitempty" xml:"Remarks,omitempty" require:"true"`
	BillingCycle         *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	Amount               *string `json:"Amount,omitempty" xml:"Amount,omitempty" require:"true"`
	Balance              *string `json:"Balance,omitempty" xml:"Balance,omitempty" require:"true"`
	TransactionAccount   *string `json:"TransactionAccount,omitempty" xml:"TransactionAccount,omitempty" require:"true"`
}

func (s QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) GoString() string {
	return s.String()
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetTransactionNumber(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.TransactionNumber = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetTransactionTime(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.TransactionTime = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetTransactionFlow(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.TransactionFlow = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetTransactionType(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.TransactionType = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetTransactionChannel(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.TransactionChannel = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetTransactionChannelSN(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.TransactionChannelSN = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetFundType(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.FundType = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetRecordID(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.RecordID = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetRemarks(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.Remarks = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetBillingCycle(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.BillingCycle = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetAmount(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.Amount = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetBalance(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.Balance = &v
	return s
}

func (s *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList) SetTransactionAccount(v string) *QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList {
	s.TransactionAccount = &v
	return s
}

type UnsubscribeBillToOSSRequest struct {
	SubscribeType           *string `json:"SubscribeType,omitempty" xml:"SubscribeType,omitempty" require:"true"`
	MultAccountRelSubscribe *string `json:"MultAccountRelSubscribe,omitempty" xml:"MultAccountRelSubscribe,omitempty"`
}

func (s UnsubscribeBillToOSSRequest) String() string {
	return tea.Prettify(s)
}

func (s UnsubscribeBillToOSSRequest) GoString() string {
	return s.String()
}

func (s *UnsubscribeBillToOSSRequest) SetSubscribeType(v string) *UnsubscribeBillToOSSRequest {
	s.SubscribeType = &v
	return s
}

func (s *UnsubscribeBillToOSSRequest) SetMultAccountRelSubscribe(v string) *UnsubscribeBillToOSSRequest {
	s.MultAccountRelSubscribe = &v
	return s
}

type UnsubscribeBillToOSSResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s UnsubscribeBillToOSSResponse) String() string {
	return tea.Prettify(s)
}

func (s UnsubscribeBillToOSSResponse) GoString() string {
	return s.String()
}

func (s *UnsubscribeBillToOSSResponse) SetRequestId(v string) *UnsubscribeBillToOSSResponse {
	s.RequestId = &v
	return s
}

func (s *UnsubscribeBillToOSSResponse) SetSuccess(v bool) *UnsubscribeBillToOSSResponse {
	s.Success = &v
	return s
}

func (s *UnsubscribeBillToOSSResponse) SetCode(v string) *UnsubscribeBillToOSSResponse {
	s.Code = &v
	return s
}

func (s *UnsubscribeBillToOSSResponse) SetMessage(v string) *UnsubscribeBillToOSSResponse {
	s.Message = &v
	return s
}

type SubscribeBillToOSSRequest struct {
	SubscribeBucket         *string `json:"SubscribeBucket,omitempty" xml:"SubscribeBucket,omitempty" require:"true"`
	SubscribeType           *string `json:"SubscribeType,omitempty" xml:"SubscribeType,omitempty"`
	MultAccountRelSubscribe *string `json:"MultAccountRelSubscribe,omitempty" xml:"MultAccountRelSubscribe,omitempty"`
	BucketOwnerId           *int64  `json:"BucketOwnerId,omitempty" xml:"BucketOwnerId,omitempty"`
}

func (s SubscribeBillToOSSRequest) String() string {
	return tea.Prettify(s)
}

func (s SubscribeBillToOSSRequest) GoString() string {
	return s.String()
}

func (s *SubscribeBillToOSSRequest) SetSubscribeBucket(v string) *SubscribeBillToOSSRequest {
	s.SubscribeBucket = &v
	return s
}

func (s *SubscribeBillToOSSRequest) SetSubscribeType(v string) *SubscribeBillToOSSRequest {
	s.SubscribeType = &v
	return s
}

func (s *SubscribeBillToOSSRequest) SetMultAccountRelSubscribe(v string) *SubscribeBillToOSSRequest {
	s.MultAccountRelSubscribe = &v
	return s
}

func (s *SubscribeBillToOSSRequest) SetBucketOwnerId(v int64) *SubscribeBillToOSSRequest {
	s.BucketOwnerId = &v
	return s
}

type SubscribeBillToOSSResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s SubscribeBillToOSSResponse) String() string {
	return tea.Prettify(s)
}

func (s SubscribeBillToOSSResponse) GoString() string {
	return s.String()
}

func (s *SubscribeBillToOSSResponse) SetRequestId(v string) *SubscribeBillToOSSResponse {
	s.RequestId = &v
	return s
}

func (s *SubscribeBillToOSSResponse) SetSuccess(v bool) *SubscribeBillToOSSResponse {
	s.Success = &v
	return s
}

func (s *SubscribeBillToOSSResponse) SetCode(v string) *SubscribeBillToOSSResponse {
	s.Code = &v
	return s
}

func (s *SubscribeBillToOSSResponse) SetMessage(v string) *SubscribeBillToOSSResponse {
	s.Message = &v
	return s
}

type QueryUserOmsDataRequest struct {
	Table     *string `json:"Table,omitempty" xml:"Table,omitempty" require:"true"`
	DataType  *string `json:"DataType,omitempty" xml:"DataType,omitempty" require:"true"`
	StartTime *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime   *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	Marker    *string `json:"Marker,omitempty" xml:"Marker,omitempty"`
	PageSize  *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s QueryUserOmsDataRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryUserOmsDataRequest) GoString() string {
	return s.String()
}

func (s *QueryUserOmsDataRequest) SetTable(v string) *QueryUserOmsDataRequest {
	s.Table = &v
	return s
}

func (s *QueryUserOmsDataRequest) SetDataType(v string) *QueryUserOmsDataRequest {
	s.DataType = &v
	return s
}

func (s *QueryUserOmsDataRequest) SetStartTime(v string) *QueryUserOmsDataRequest {
	s.StartTime = &v
	return s
}

func (s *QueryUserOmsDataRequest) SetEndTime(v string) *QueryUserOmsDataRequest {
	s.EndTime = &v
	return s
}

func (s *QueryUserOmsDataRequest) SetMarker(v string) *QueryUserOmsDataRequest {
	s.Marker = &v
	return s
}

func (s *QueryUserOmsDataRequest) SetPageSize(v int) *QueryUserOmsDataRequest {
	s.PageSize = &v
	return s
}

type QueryUserOmsDataResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                       `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                       `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryUserOmsDataResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryUserOmsDataResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryUserOmsDataResponse) GoString() string {
	return s.String()
}

func (s *QueryUserOmsDataResponse) SetRequestId(v string) *QueryUserOmsDataResponse {
	s.RequestId = &v
	return s
}

func (s *QueryUserOmsDataResponse) SetSuccess(v bool) *QueryUserOmsDataResponse {
	s.Success = &v
	return s
}

func (s *QueryUserOmsDataResponse) SetCode(v string) *QueryUserOmsDataResponse {
	s.Code = &v
	return s
}

func (s *QueryUserOmsDataResponse) SetMessage(v string) *QueryUserOmsDataResponse {
	s.Message = &v
	return s
}

func (s *QueryUserOmsDataResponse) SetData(v *QueryUserOmsDataResponseData) *QueryUserOmsDataResponse {
	s.Data = v
	return s
}

type QueryUserOmsDataResponseData struct {
	Marker  *string                  `json:"Marker,omitempty" xml:"Marker,omitempty" require:"true"`
	HostId  *string                  `json:"HostId,omitempty" xml:"HostId,omitempty" require:"true"`
	OmsData []map[string]interface{} `json:"OmsData,omitempty" xml:"OmsData,omitempty" require:"true" type:"Repeated"`
}

func (s QueryUserOmsDataResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryUserOmsDataResponseData) GoString() string {
	return s.String()
}

func (s *QueryUserOmsDataResponseData) SetMarker(v string) *QueryUserOmsDataResponseData {
	s.Marker = &v
	return s
}

func (s *QueryUserOmsDataResponseData) SetHostId(v string) *QueryUserOmsDataResponseData {
	s.HostId = &v
	return s
}

func (s *QueryUserOmsDataResponseData) SetOmsData(v []map[string]interface{}) *QueryUserOmsDataResponseData {
	s.OmsData = v
	return s
}

type CancelOrderRequest struct {
	OrderId *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
}

func (s CancelOrderRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelOrderRequest) GoString() string {
	return s.String()
}

func (s *CancelOrderRequest) SetOrderId(v string) *CancelOrderRequest {
	s.OrderId = &v
	return s
}

type CancelOrderResponse struct {
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                    `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                  `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                  `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *CancelOrderResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s CancelOrderResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelOrderResponse) GoString() string {
	return s.String()
}

func (s *CancelOrderResponse) SetRequestId(v string) *CancelOrderResponse {
	s.RequestId = &v
	return s
}

func (s *CancelOrderResponse) SetSuccess(v bool) *CancelOrderResponse {
	s.Success = &v
	return s
}

func (s *CancelOrderResponse) SetCode(v string) *CancelOrderResponse {
	s.Code = &v
	return s
}

func (s *CancelOrderResponse) SetMessage(v string) *CancelOrderResponse {
	s.Message = &v
	return s
}

func (s *CancelOrderResponse) SetData(v *CancelOrderResponseData) *CancelOrderResponse {
	s.Data = v
	return s
}

type CancelOrderResponseData struct {
	HostId *string `json:"HostId,omitempty" xml:"HostId,omitempty" require:"true"`
}

func (s CancelOrderResponseData) String() string {
	return tea.Prettify(s)
}

func (s CancelOrderResponseData) GoString() string {
	return s.String()
}

func (s *CancelOrderResponseData) SetHostId(v string) *CancelOrderResponseData {
	s.HostId = &v
	return s
}

type ApplyInvoiceRequest struct {
	InvoiceAmount   *int64   `json:"InvoiceAmount,omitempty" xml:"InvoiceAmount,omitempty" require:"true"`
	CustomerId      *int64   `json:"CustomerId,omitempty" xml:"CustomerId,omitempty" require:"true"`
	AddressId       *int64   `json:"AddressId,omitempty" xml:"AddressId,omitempty" require:"true"`
	InvoicingType   *int     `json:"InvoicingType,omitempty" xml:"InvoicingType,omitempty"`
	ProcessWay      *int     `json:"ProcessWay,omitempty" xml:"ProcessWay,omitempty"`
	ApplyUserNick   *string  `json:"ApplyUserNick,omitempty" xml:"ApplyUserNick,omitempty" require:"true"`
	SelectedIds     []*int64 `json:"SelectedIds,omitempty" xml:"SelectedIds,omitempty" require:"true" type:"Repeated"`
	InvoiceByAmount *bool    `json:"InvoiceByAmount,omitempty" xml:"InvoiceByAmount,omitempty"`
}

func (s ApplyInvoiceRequest) String() string {
	return tea.Prettify(s)
}

func (s ApplyInvoiceRequest) GoString() string {
	return s.String()
}

func (s *ApplyInvoiceRequest) SetInvoiceAmount(v int64) *ApplyInvoiceRequest {
	s.InvoiceAmount = &v
	return s
}

func (s *ApplyInvoiceRequest) SetCustomerId(v int64) *ApplyInvoiceRequest {
	s.CustomerId = &v
	return s
}

func (s *ApplyInvoiceRequest) SetAddressId(v int64) *ApplyInvoiceRequest {
	s.AddressId = &v
	return s
}

func (s *ApplyInvoiceRequest) SetInvoicingType(v int) *ApplyInvoiceRequest {
	s.InvoicingType = &v
	return s
}

func (s *ApplyInvoiceRequest) SetProcessWay(v int) *ApplyInvoiceRequest {
	s.ProcessWay = &v
	return s
}

func (s *ApplyInvoiceRequest) SetApplyUserNick(v string) *ApplyInvoiceRequest {
	s.ApplyUserNick = &v
	return s
}

func (s *ApplyInvoiceRequest) SetSelectedIds(v []*int64) *ApplyInvoiceRequest {
	s.SelectedIds = v
	return s
}

func (s *ApplyInvoiceRequest) SetInvoiceByAmount(v bool) *ApplyInvoiceRequest {
	s.InvoiceByAmount = &v
	return s
}

type ApplyInvoiceResponse struct {
	RequestId *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                     `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                   `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                   `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *ApplyInvoiceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ApplyInvoiceResponse) String() string {
	return tea.Prettify(s)
}

func (s ApplyInvoiceResponse) GoString() string {
	return s.String()
}

func (s *ApplyInvoiceResponse) SetRequestId(v string) *ApplyInvoiceResponse {
	s.RequestId = &v
	return s
}

func (s *ApplyInvoiceResponse) SetSuccess(v bool) *ApplyInvoiceResponse {
	s.Success = &v
	return s
}

func (s *ApplyInvoiceResponse) SetCode(v string) *ApplyInvoiceResponse {
	s.Code = &v
	return s
}

func (s *ApplyInvoiceResponse) SetMessage(v string) *ApplyInvoiceResponse {
	s.Message = &v
	return s
}

func (s *ApplyInvoiceResponse) SetData(v *ApplyInvoiceResponseData) *ApplyInvoiceResponse {
	s.Data = v
	return s
}

type ApplyInvoiceResponseData struct {
	InvoiceApplyId *int64 `json:"InvoiceApplyId,omitempty" xml:"InvoiceApplyId,omitempty" require:"true"`
}

func (s ApplyInvoiceResponseData) String() string {
	return tea.Prettify(s)
}

func (s ApplyInvoiceResponseData) GoString() string {
	return s.String()
}

func (s *ApplyInvoiceResponseData) SetInvoiceApplyId(v int64) *ApplyInvoiceResponseData {
	s.InvoiceApplyId = &v
	return s
}

type QueryCustomerAddressListRequest struct {
}

func (s QueryCustomerAddressListRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryCustomerAddressListRequest) GoString() string {
	return s.String()
}

type QueryCustomerAddressListResponse struct {
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                 `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                               `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                               `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryCustomerAddressListResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryCustomerAddressListResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryCustomerAddressListResponse) GoString() string {
	return s.String()
}

func (s *QueryCustomerAddressListResponse) SetRequestId(v string) *QueryCustomerAddressListResponse {
	s.RequestId = &v
	return s
}

func (s *QueryCustomerAddressListResponse) SetSuccess(v bool) *QueryCustomerAddressListResponse {
	s.Success = &v
	return s
}

func (s *QueryCustomerAddressListResponse) SetCode(v string) *QueryCustomerAddressListResponse {
	s.Code = &v
	return s
}

func (s *QueryCustomerAddressListResponse) SetMessage(v string) *QueryCustomerAddressListResponse {
	s.Message = &v
	return s
}

func (s *QueryCustomerAddressListResponse) SetData(v *QueryCustomerAddressListResponseData) *QueryCustomerAddressListResponse {
	s.Data = v
	return s
}

type QueryCustomerAddressListResponseData struct {
	CustomerInvoiceAddressList *QueryCustomerAddressListResponseDataCustomerInvoiceAddressList `json:"CustomerInvoiceAddressList,omitempty" xml:"CustomerInvoiceAddressList,omitempty" require:"true" type:"Struct"`
}

func (s QueryCustomerAddressListResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryCustomerAddressListResponseData) GoString() string {
	return s.String()
}

func (s *QueryCustomerAddressListResponseData) SetCustomerInvoiceAddressList(v *QueryCustomerAddressListResponseDataCustomerInvoiceAddressList) *QueryCustomerAddressListResponseData {
	s.CustomerInvoiceAddressList = v
	return s
}

type QueryCustomerAddressListResponseDataCustomerInvoiceAddressList struct {
	CustomerInvoiceAddress []*QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress `json:"CustomerInvoiceAddress,omitempty" xml:"CustomerInvoiceAddress,omitempty" require:"true" type:"Repeated"`
}

func (s QueryCustomerAddressListResponseDataCustomerInvoiceAddressList) String() string {
	return tea.Prettify(s)
}

func (s QueryCustomerAddressListResponseDataCustomerInvoiceAddressList) GoString() string {
	return s.String()
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressList) SetCustomerInvoiceAddress(v []*QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressList {
	s.CustomerInvoiceAddress = v
	return s
}

type QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress struct {
	Id              *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	UserId          *int64  `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	UserNick        *string `json:"UserNick,omitempty" xml:"UserNick,omitempty" require:"true"`
	Addressee       *string `json:"Addressee,omitempty" xml:"Addressee,omitempty" require:"true"`
	Province        *string `json:"Province,omitempty" xml:"Province,omitempty" require:"true"`
	City            *string `json:"City,omitempty" xml:"City,omitempty" require:"true"`
	County          *string `json:"County,omitempty" xml:"County,omitempty" require:"true"`
	Street          *string `json:"Street,omitempty" xml:"Street,omitempty" require:"true"`
	PostalCode      *string `json:"PostalCode,omitempty" xml:"PostalCode,omitempty" require:"true"`
	Phone           *string `json:"Phone,omitempty" xml:"Phone,omitempty" require:"true"`
	BizType         *string `json:"BizType,omitempty" xml:"BizType,omitempty" require:"true"`
	DeliveryAddress *string `json:"DeliveryAddress,omitempty" xml:"DeliveryAddress,omitempty" require:"true"`
}

func (s QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) String() string {
	return tea.Prettify(s)
}

func (s QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) GoString() string {
	return s.String()
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetId(v int64) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.Id = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetUserId(v int64) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.UserId = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetUserNick(v string) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.UserNick = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetAddressee(v string) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.Addressee = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetProvince(v string) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.Province = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetCity(v string) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.City = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetCounty(v string) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.County = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetStreet(v string) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.Street = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetPostalCode(v string) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.PostalCode = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetPhone(v string) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.Phone = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetBizType(v string) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.BizType = &v
	return s
}

func (s *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress) SetDeliveryAddress(v string) *QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress {
	s.DeliveryAddress = &v
	return s
}

type QueryEvaluateListRequest struct {
	Type            *int      `json:"Type,omitempty" xml:"Type,omitempty"`
	OutBizId        *string   `json:"OutBizId,omitempty" xml:"OutBizId,omitempty"`
	PageNum         *int      `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize        *int      `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	StartAmount     *int64    `json:"StartAmount,omitempty" xml:"StartAmount,omitempty"`
	EndAmount       *int64    `json:"EndAmount,omitempty" xml:"EndAmount,omitempty"`
	StartBizTime    *string   `json:"StartBizTime,omitempty" xml:"StartBizTime,omitempty"`
	EndBizTime      *string   `json:"EndBizTime,omitempty" xml:"EndBizTime,omitempty"`
	SortType        *int      `json:"SortType,omitempty" xml:"SortType,omitempty"`
	StartSearchTime *string   `json:"StartSearchTime,omitempty" xml:"StartSearchTime,omitempty"`
	EndSearchTime   *string   `json:"EndSearchTime,omitempty" xml:"EndSearchTime,omitempty"`
	BillCycle       *string   `json:"BillCycle,omitempty" xml:"BillCycle,omitempty"`
	BizTypeList     []*string `json:"BizTypeList,omitempty" xml:"BizTypeList,omitempty" type:"Repeated"`
}

func (s QueryEvaluateListRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryEvaluateListRequest) GoString() string {
	return s.String()
}

func (s *QueryEvaluateListRequest) SetType(v int) *QueryEvaluateListRequest {
	s.Type = &v
	return s
}

func (s *QueryEvaluateListRequest) SetOutBizId(v string) *QueryEvaluateListRequest {
	s.OutBizId = &v
	return s
}

func (s *QueryEvaluateListRequest) SetPageNum(v int) *QueryEvaluateListRequest {
	s.PageNum = &v
	return s
}

func (s *QueryEvaluateListRequest) SetPageSize(v int) *QueryEvaluateListRequest {
	s.PageSize = &v
	return s
}

func (s *QueryEvaluateListRequest) SetStartAmount(v int64) *QueryEvaluateListRequest {
	s.StartAmount = &v
	return s
}

func (s *QueryEvaluateListRequest) SetEndAmount(v int64) *QueryEvaluateListRequest {
	s.EndAmount = &v
	return s
}

func (s *QueryEvaluateListRequest) SetStartBizTime(v string) *QueryEvaluateListRequest {
	s.StartBizTime = &v
	return s
}

func (s *QueryEvaluateListRequest) SetEndBizTime(v string) *QueryEvaluateListRequest {
	s.EndBizTime = &v
	return s
}

func (s *QueryEvaluateListRequest) SetSortType(v int) *QueryEvaluateListRequest {
	s.SortType = &v
	return s
}

func (s *QueryEvaluateListRequest) SetStartSearchTime(v string) *QueryEvaluateListRequest {
	s.StartSearchTime = &v
	return s
}

func (s *QueryEvaluateListRequest) SetEndSearchTime(v string) *QueryEvaluateListRequest {
	s.EndSearchTime = &v
	return s
}

func (s *QueryEvaluateListRequest) SetBillCycle(v string) *QueryEvaluateListRequest {
	s.BillCycle = &v
	return s
}

func (s *QueryEvaluateListRequest) SetBizTypeList(v []*string) *QueryEvaluateListRequest {
	s.BizTypeList = v
	return s
}

type QueryEvaluateListResponse struct {
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                        `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                        `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryEvaluateListResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryEvaluateListResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryEvaluateListResponse) GoString() string {
	return s.String()
}

func (s *QueryEvaluateListResponse) SetRequestId(v string) *QueryEvaluateListResponse {
	s.RequestId = &v
	return s
}

func (s *QueryEvaluateListResponse) SetSuccess(v bool) *QueryEvaluateListResponse {
	s.Success = &v
	return s
}

func (s *QueryEvaluateListResponse) SetCode(v string) *QueryEvaluateListResponse {
	s.Code = &v
	return s
}

func (s *QueryEvaluateListResponse) SetMessage(v string) *QueryEvaluateListResponse {
	s.Message = &v
	return s
}

func (s *QueryEvaluateListResponse) SetData(v *QueryEvaluateListResponseData) *QueryEvaluateListResponse {
	s.Data = v
	return s
}

type QueryEvaluateListResponseData struct {
	HostId                      *string                                    `json:"HostId,omitempty" xml:"HostId,omitempty" require:"true"`
	PageNum                     *int                                       `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize                    *int                                       `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount                  *int                                       `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalInvoiceAmount          *int64                                     `json:"TotalInvoiceAmount,omitempty" xml:"TotalInvoiceAmount,omitempty" require:"true"`
	TotalUnAppliedInvoiceAmount *int64                                     `json:"TotalUnAppliedInvoiceAmount,omitempty" xml:"TotalUnAppliedInvoiceAmount,omitempty" require:"true"`
	EvaluateList                *QueryEvaluateListResponseDataEvaluateList `json:"EvaluateList,omitempty" xml:"EvaluateList,omitempty" require:"true" type:"Struct"`
}

func (s QueryEvaluateListResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryEvaluateListResponseData) GoString() string {
	return s.String()
}

func (s *QueryEvaluateListResponseData) SetHostId(v string) *QueryEvaluateListResponseData {
	s.HostId = &v
	return s
}

func (s *QueryEvaluateListResponseData) SetPageNum(v int) *QueryEvaluateListResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryEvaluateListResponseData) SetPageSize(v int) *QueryEvaluateListResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryEvaluateListResponseData) SetTotalCount(v int) *QueryEvaluateListResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryEvaluateListResponseData) SetTotalInvoiceAmount(v int64) *QueryEvaluateListResponseData {
	s.TotalInvoiceAmount = &v
	return s
}

func (s *QueryEvaluateListResponseData) SetTotalUnAppliedInvoiceAmount(v int64) *QueryEvaluateListResponseData {
	s.TotalUnAppliedInvoiceAmount = &v
	return s
}

func (s *QueryEvaluateListResponseData) SetEvaluateList(v *QueryEvaluateListResponseDataEvaluateList) *QueryEvaluateListResponseData {
	s.EvaluateList = v
	return s
}

type QueryEvaluateListResponseDataEvaluateList struct {
	Evaluate []*QueryEvaluateListResponseDataEvaluateListEvaluate `json:"Evaluate,omitempty" xml:"Evaluate,omitempty" require:"true" type:"Repeated"`
}

func (s QueryEvaluateListResponseDataEvaluateList) String() string {
	return tea.Prettify(s)
}

func (s QueryEvaluateListResponseDataEvaluateList) GoString() string {
	return s.String()
}

func (s *QueryEvaluateListResponseDataEvaluateList) SetEvaluate(v []*QueryEvaluateListResponseDataEvaluateListEvaluate) *QueryEvaluateListResponseDataEvaluateList {
	s.Evaluate = v
	return s
}

type QueryEvaluateListResponseDataEvaluateListEvaluate struct {
	Id                 *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	GmtCreate          *string `json:"GmtCreate,omitempty" xml:"GmtCreate,omitempty" require:"true"`
	GmtModified        *string `json:"GmtModified,omitempty" xml:"GmtModified,omitempty" require:"true"`
	UserId             *int64  `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	UserNick           *string `json:"UserNick,omitempty" xml:"UserNick,omitempty" require:"true"`
	OutBizId           *string `json:"OutBizId,omitempty" xml:"OutBizId,omitempty" require:"true"`
	BillId             *int64  `json:"BillId,omitempty" xml:"BillId,omitempty" require:"true"`
	ItemId             *int64  `json:"ItemId,omitempty" xml:"ItemId,omitempty" require:"true"`
	BillCycle          *string `json:"BillCycle,omitempty" xml:"BillCycle,omitempty" require:"true"`
	BizType            *string `json:"BizType,omitempty" xml:"BizType,omitempty" require:"true"`
	OriginalAmount     *int64  `json:"OriginalAmount,omitempty" xml:"OriginalAmount,omitempty" require:"true"`
	PresentAmount      *int64  `json:"PresentAmount,omitempty" xml:"PresentAmount,omitempty" require:"true"`
	CanInvoiceAmount   *int64  `json:"CanInvoiceAmount,omitempty" xml:"CanInvoiceAmount,omitempty" require:"true"`
	InvoicedAmount     *int64  `json:"InvoicedAmount,omitempty" xml:"InvoicedAmount,omitempty" require:"true"`
	OffsetCostAmount   *int64  `json:"OffsetCostAmount,omitempty" xml:"OffsetCostAmount,omitempty" require:"true"`
	OffsetAcceptAmount *int64  `json:"OffsetAcceptAmount,omitempty" xml:"OffsetAcceptAmount,omitempty" require:"true"`
	Status             *int    `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	OpId               *string `json:"OpId,omitempty" xml:"OpId,omitempty" require:"true"`
	Name               *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	BizTime            *string `json:"BizTime,omitempty" xml:"BizTime,omitempty" require:"true"`
	Type               *int    `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s QueryEvaluateListResponseDataEvaluateListEvaluate) String() string {
	return tea.Prettify(s)
}

func (s QueryEvaluateListResponseDataEvaluateListEvaluate) GoString() string {
	return s.String()
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetId(v int64) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.Id = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetGmtCreate(v string) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.GmtCreate = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetGmtModified(v string) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.GmtModified = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetUserId(v int64) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.UserId = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetUserNick(v string) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.UserNick = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetOutBizId(v string) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.OutBizId = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetBillId(v int64) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.BillId = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetItemId(v int64) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.ItemId = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetBillCycle(v string) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.BillCycle = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetBizType(v string) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.BizType = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetOriginalAmount(v int64) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.OriginalAmount = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetPresentAmount(v int64) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.PresentAmount = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetCanInvoiceAmount(v int64) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.CanInvoiceAmount = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetInvoicedAmount(v int64) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.InvoicedAmount = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetOffsetCostAmount(v int64) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.OffsetCostAmount = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetOffsetAcceptAmount(v int64) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.OffsetAcceptAmount = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetStatus(v int) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.Status = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetOpId(v string) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.OpId = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetName(v string) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.Name = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetBizTime(v string) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.BizTime = &v
	return s
}

func (s *QueryEvaluateListResponseDataEvaluateListEvaluate) SetType(v int) *QueryEvaluateListResponseDataEvaluateListEvaluate {
	s.Type = &v
	return s
}

type QueryInvoicingCustomerListRequest struct {
}

func (s QueryInvoicingCustomerListRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryInvoicingCustomerListRequest) GoString() string {
	return s.String()
}

type QueryInvoicingCustomerListResponse struct {
	RequestId *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                                 `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                                 `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryInvoicingCustomerListResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryInvoicingCustomerListResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryInvoicingCustomerListResponse) GoString() string {
	return s.String()
}

func (s *QueryInvoicingCustomerListResponse) SetRequestId(v string) *QueryInvoicingCustomerListResponse {
	s.RequestId = &v
	return s
}

func (s *QueryInvoicingCustomerListResponse) SetSuccess(v bool) *QueryInvoicingCustomerListResponse {
	s.Success = &v
	return s
}

func (s *QueryInvoicingCustomerListResponse) SetCode(v string) *QueryInvoicingCustomerListResponse {
	s.Code = &v
	return s
}

func (s *QueryInvoicingCustomerListResponse) SetMessage(v string) *QueryInvoicingCustomerListResponse {
	s.Message = &v
	return s
}

func (s *QueryInvoicingCustomerListResponse) SetData(v *QueryInvoicingCustomerListResponseData) *QueryInvoicingCustomerListResponse {
	s.Data = v
	return s
}

type QueryInvoicingCustomerListResponseData struct {
	CustomerInvoiceList *QueryInvoicingCustomerListResponseDataCustomerInvoiceList `json:"CustomerInvoiceList,omitempty" xml:"CustomerInvoiceList,omitempty" require:"true" type:"Struct"`
}

func (s QueryInvoicingCustomerListResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryInvoicingCustomerListResponseData) GoString() string {
	return s.String()
}

func (s *QueryInvoicingCustomerListResponseData) SetCustomerInvoiceList(v *QueryInvoicingCustomerListResponseDataCustomerInvoiceList) *QueryInvoicingCustomerListResponseData {
	s.CustomerInvoiceList = v
	return s
}

type QueryInvoicingCustomerListResponseDataCustomerInvoiceList struct {
	CustomerInvoice []*QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice `json:"CustomerInvoice,omitempty" xml:"CustomerInvoice,omitempty" require:"true" type:"Repeated"`
}

func (s QueryInvoicingCustomerListResponseDataCustomerInvoiceList) String() string {
	return tea.Prettify(s)
}

func (s QueryInvoicingCustomerListResponseDataCustomerInvoiceList) GoString() string {
	return s.String()
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceList) SetCustomerInvoice(v []*QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) *QueryInvoicingCustomerListResponseDataCustomerInvoiceList {
	s.CustomerInvoice = v
	return s
}

type QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice struct {
	Id                      *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	UserId                  *int64  `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	UserNick                *string `json:"UserNick,omitempty" xml:"UserNick,omitempty" require:"true"`
	InvoiceTitle            *string `json:"InvoiceTitle,omitempty" xml:"InvoiceTitle,omitempty" require:"true"`
	CustomerType            *int64  `json:"CustomerType,omitempty" xml:"CustomerType,omitempty" require:"true"`
	TaxpayerType            *int64  `json:"TaxpayerType,omitempty" xml:"TaxpayerType,omitempty" require:"true"`
	Bank                    *string `json:"Bank,omitempty" xml:"Bank,omitempty" require:"true"`
	BankNo                  *string `json:"BankNo,omitempty" xml:"BankNo,omitempty" require:"true"`
	OperatingLicenseAddress *string `json:"OperatingLicenseAddress,omitempty" xml:"OperatingLicenseAddress,omitempty" require:"true"`
	OperatingLicensePhone   *string `json:"OperatingLicensePhone,omitempty" xml:"OperatingLicensePhone,omitempty" require:"true"`
	RegisterNo              *string `json:"RegisterNo,omitempty" xml:"RegisterNo,omitempty" require:"true"`
	StartCycle              *int64  `json:"StartCycle,omitempty" xml:"StartCycle,omitempty" require:"true"`
	Status                  *int64  `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	GmtCreate               *string `json:"GmtCreate,omitempty" xml:"GmtCreate,omitempty" require:"true"`
	TaxationLicense         *string `json:"TaxationLicense,omitempty" xml:"TaxationLicense,omitempty" require:"true"`
	AdjustType              *int64  `json:"AdjustType,omitempty" xml:"AdjustType,omitempty" require:"true"`
	EndCycle                *int64  `json:"EndCycle,omitempty" xml:"EndCycle,omitempty" require:"true"`
	TitleChangeInstructions *string `json:"TitleChangeInstructions,omitempty" xml:"TitleChangeInstructions,omitempty" require:"true"`
	IssueType               *int64  `json:"IssueType,omitempty" xml:"IssueType,omitempty" require:"true"`
	Type                    *int64  `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	DefaultRemark           *string `json:"DefaultRemark,omitempty" xml:"DefaultRemark,omitempty" require:"true"`
}

func (s QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) String() string {
	return tea.Prettify(s)
}

func (s QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) GoString() string {
	return s.String()
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetId(v int64) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.Id = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetUserId(v int64) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.UserId = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetUserNick(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.UserNick = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetInvoiceTitle(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.InvoiceTitle = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetCustomerType(v int64) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.CustomerType = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetTaxpayerType(v int64) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.TaxpayerType = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetBank(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.Bank = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetBankNo(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.BankNo = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetOperatingLicenseAddress(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.OperatingLicenseAddress = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetOperatingLicensePhone(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.OperatingLicensePhone = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetRegisterNo(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.RegisterNo = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetStartCycle(v int64) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.StartCycle = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetStatus(v int64) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.Status = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetGmtCreate(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.GmtCreate = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetTaxationLicense(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.TaxationLicense = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetAdjustType(v int64) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.AdjustType = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetEndCycle(v int64) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.EndCycle = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetTitleChangeInstructions(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.TitleChangeInstructions = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetIssueType(v int64) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.IssueType = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetType(v int64) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.Type = &v
	return s
}

func (s *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice) SetDefaultRemark(v string) *QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice {
	s.DefaultRemark = &v
	return s
}

type QueryBillOverviewRequest struct {
	BillingCycle     *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
}

func (s QueryBillOverviewRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryBillOverviewRequest) GoString() string {
	return s.String()
}

func (s *QueryBillOverviewRequest) SetBillingCycle(v string) *QueryBillOverviewRequest {
	s.BillingCycle = &v
	return s
}

func (s *QueryBillOverviewRequest) SetProductCode(v string) *QueryBillOverviewRequest {
	s.ProductCode = &v
	return s
}

func (s *QueryBillOverviewRequest) SetProductType(v string) *QueryBillOverviewRequest {
	s.ProductType = &v
	return s
}

func (s *QueryBillOverviewRequest) SetSubscriptionType(v string) *QueryBillOverviewRequest {
	s.SubscriptionType = &v
	return s
}

type QueryBillOverviewResponse struct {
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                        `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                        `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryBillOverviewResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryBillOverviewResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryBillOverviewResponse) GoString() string {
	return s.String()
}

func (s *QueryBillOverviewResponse) SetRequestId(v string) *QueryBillOverviewResponse {
	s.RequestId = &v
	return s
}

func (s *QueryBillOverviewResponse) SetSuccess(v bool) *QueryBillOverviewResponse {
	s.Success = &v
	return s
}

func (s *QueryBillOverviewResponse) SetCode(v string) *QueryBillOverviewResponse {
	s.Code = &v
	return s
}

func (s *QueryBillOverviewResponse) SetMessage(v string) *QueryBillOverviewResponse {
	s.Message = &v
	return s
}

func (s *QueryBillOverviewResponse) SetData(v *QueryBillOverviewResponseData) *QueryBillOverviewResponse {
	s.Data = v
	return s
}

type QueryBillOverviewResponseData struct {
	BillingCycle *string                             `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	AccountID    *string                             `json:"AccountID,omitempty" xml:"AccountID,omitempty" require:"true"`
	AccountName  *string                             `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	Items        *QueryBillOverviewResponseDataItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s QueryBillOverviewResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryBillOverviewResponseData) GoString() string {
	return s.String()
}

func (s *QueryBillOverviewResponseData) SetBillingCycle(v string) *QueryBillOverviewResponseData {
	s.BillingCycle = &v
	return s
}

func (s *QueryBillOverviewResponseData) SetAccountID(v string) *QueryBillOverviewResponseData {
	s.AccountID = &v
	return s
}

func (s *QueryBillOverviewResponseData) SetAccountName(v string) *QueryBillOverviewResponseData {
	s.AccountName = &v
	return s
}

func (s *QueryBillOverviewResponseData) SetItems(v *QueryBillOverviewResponseDataItems) *QueryBillOverviewResponseData {
	s.Items = v
	return s
}

type QueryBillOverviewResponseDataItems struct {
	Item []*QueryBillOverviewResponseDataItemsItem `json:"Item,omitempty" xml:"Item,omitempty" require:"true" type:"Repeated"`
}

func (s QueryBillOverviewResponseDataItems) String() string {
	return tea.Prettify(s)
}

func (s QueryBillOverviewResponseDataItems) GoString() string {
	return s.String()
}

func (s *QueryBillOverviewResponseDataItems) SetItem(v []*QueryBillOverviewResponseDataItemsItem) *QueryBillOverviewResponseDataItems {
	s.Item = v
	return s
}

type QueryBillOverviewResponseDataItemsItem struct {
	Item                  *string  `json:"Item,omitempty" xml:"Item,omitempty" require:"true"`
	ProductCode           *string  `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType           *string  `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType      *string  `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	ProductName           *string  `json:"ProductName,omitempty" xml:"ProductName,omitempty" require:"true"`
	ProductDetail         *string  `json:"ProductDetail,omitempty" xml:"ProductDetail,omitempty" require:"true"`
	PretaxGrossAmount     *float32 `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	InvoiceDiscount       *float32 `json:"InvoiceDiscount,omitempty" xml:"InvoiceDiscount,omitempty" require:"true"`
	DeductedByCoupons     *float32 `json:"DeductedByCoupons,omitempty" xml:"DeductedByCoupons,omitempty" require:"true"`
	PretaxAmount          *float32 `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	Currency              *string  `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	PaymentAmount         *float32 `json:"PaymentAmount,omitempty" xml:"PaymentAmount,omitempty" require:"true"`
	OutstandingAmount     *float32 `json:"OutstandingAmount,omitempty" xml:"OutstandingAmount,omitempty" require:"true"`
	DeductedByCashCoupons *float32 `json:"DeductedByCashCoupons,omitempty" xml:"DeductedByCashCoupons,omitempty" require:"true"`
	DeductedByPrepaidCard *float32 `json:"DeductedByPrepaidCard,omitempty" xml:"DeductedByPrepaidCard,omitempty" require:"true"`
	PretaxAmountLocal     *float32 `json:"PretaxAmountLocal,omitempty" xml:"PretaxAmountLocal,omitempty" require:"true"`
	Tax                   *float32 `json:"Tax,omitempty" xml:"Tax,omitempty" require:"true"`
	AfterTaxAmount        *float32 `json:"AfterTaxAmount,omitempty" xml:"AfterTaxAmount,omitempty" require:"true"`
	PaymentCurrency       *string  `json:"PaymentCurrency,omitempty" xml:"PaymentCurrency,omitempty" require:"true"`
	RoundDownDiscount     *string  `json:"RoundDownDiscount,omitempty" xml:"RoundDownDiscount,omitempty" require:"true"`
}

func (s QueryBillOverviewResponseDataItemsItem) String() string {
	return tea.Prettify(s)
}

func (s QueryBillOverviewResponseDataItemsItem) GoString() string {
	return s.String()
}

func (s *QueryBillOverviewResponseDataItemsItem) SetItem(v string) *QueryBillOverviewResponseDataItemsItem {
	s.Item = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetProductCode(v string) *QueryBillOverviewResponseDataItemsItem {
	s.ProductCode = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetProductType(v string) *QueryBillOverviewResponseDataItemsItem {
	s.ProductType = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetSubscriptionType(v string) *QueryBillOverviewResponseDataItemsItem {
	s.SubscriptionType = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetProductName(v string) *QueryBillOverviewResponseDataItemsItem {
	s.ProductName = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetProductDetail(v string) *QueryBillOverviewResponseDataItemsItem {
	s.ProductDetail = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetPretaxGrossAmount(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetInvoiceDiscount(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.InvoiceDiscount = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetDeductedByCoupons(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.DeductedByCoupons = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetPretaxAmount(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.PretaxAmount = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetCurrency(v string) *QueryBillOverviewResponseDataItemsItem {
	s.Currency = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetPaymentAmount(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.PaymentAmount = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetOutstandingAmount(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.OutstandingAmount = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetDeductedByCashCoupons(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.DeductedByCashCoupons = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetDeductedByPrepaidCard(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.DeductedByPrepaidCard = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetPretaxAmountLocal(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.PretaxAmountLocal = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetTax(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.Tax = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetAfterTaxAmount(v float32) *QueryBillOverviewResponseDataItemsItem {
	s.AfterTaxAmount = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetPaymentCurrency(v string) *QueryBillOverviewResponseDataItemsItem {
	s.PaymentCurrency = &v
	return s
}

func (s *QueryBillOverviewResponseDataItemsItem) SetRoundDownDiscount(v string) *QueryBillOverviewResponseDataItemsItem {
	s.RoundDownDiscount = &v
	return s
}

type QueryBillRequest struct {
	BillingCycle           *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	Type                   *string `json:"Type,omitempty" xml:"Type,omitempty"`
	ProductCode            *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ProductType            *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType       *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
	IsHideZeroCharge       *bool   `json:"IsHideZeroCharge,omitempty" xml:"IsHideZeroCharge,omitempty"`
	IsDisplayLocalCurrency *bool   `json:"IsDisplayLocalCurrency,omitempty" xml:"IsDisplayLocalCurrency,omitempty"`
	PageNum                *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize               *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s QueryBillRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryBillRequest) GoString() string {
	return s.String()
}

func (s *QueryBillRequest) SetBillingCycle(v string) *QueryBillRequest {
	s.BillingCycle = &v
	return s
}

func (s *QueryBillRequest) SetType(v string) *QueryBillRequest {
	s.Type = &v
	return s
}

func (s *QueryBillRequest) SetProductCode(v string) *QueryBillRequest {
	s.ProductCode = &v
	return s
}

func (s *QueryBillRequest) SetProductType(v string) *QueryBillRequest {
	s.ProductType = &v
	return s
}

func (s *QueryBillRequest) SetSubscriptionType(v string) *QueryBillRequest {
	s.SubscriptionType = &v
	return s
}

func (s *QueryBillRequest) SetIsHideZeroCharge(v bool) *QueryBillRequest {
	s.IsHideZeroCharge = &v
	return s
}

func (s *QueryBillRequest) SetIsDisplayLocalCurrency(v bool) *QueryBillRequest {
	s.IsDisplayLocalCurrency = &v
	return s
}

func (s *QueryBillRequest) SetPageNum(v int) *QueryBillRequest {
	s.PageNum = &v
	return s
}

func (s *QueryBillRequest) SetPageSize(v int) *QueryBillRequest {
	s.PageSize = &v
	return s
}

type QueryBillResponse struct {
	RequestId *string                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                  `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryBillResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryBillResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryBillResponse) GoString() string {
	return s.String()
}

func (s *QueryBillResponse) SetRequestId(v string) *QueryBillResponse {
	s.RequestId = &v
	return s
}

func (s *QueryBillResponse) SetSuccess(v bool) *QueryBillResponse {
	s.Success = &v
	return s
}

func (s *QueryBillResponse) SetCode(v string) *QueryBillResponse {
	s.Code = &v
	return s
}

func (s *QueryBillResponse) SetMessage(v string) *QueryBillResponse {
	s.Message = &v
	return s
}

func (s *QueryBillResponse) SetData(v *QueryBillResponseData) *QueryBillResponse {
	s.Data = v
	return s
}

type QueryBillResponseData struct {
	BillingCycle *string                     `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	AccountID    *string                     `json:"AccountID,omitempty" xml:"AccountID,omitempty" require:"true"`
	AccountName  *string                     `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	PageNum      *int                        `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize     *int                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount   *int                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Items        *QueryBillResponseDataItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s QueryBillResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryBillResponseData) GoString() string {
	return s.String()
}

func (s *QueryBillResponseData) SetBillingCycle(v string) *QueryBillResponseData {
	s.BillingCycle = &v
	return s
}

func (s *QueryBillResponseData) SetAccountID(v string) *QueryBillResponseData {
	s.AccountID = &v
	return s
}

func (s *QueryBillResponseData) SetAccountName(v string) *QueryBillResponseData {
	s.AccountName = &v
	return s
}

func (s *QueryBillResponseData) SetPageNum(v int) *QueryBillResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryBillResponseData) SetPageSize(v int) *QueryBillResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryBillResponseData) SetTotalCount(v int) *QueryBillResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryBillResponseData) SetItems(v *QueryBillResponseDataItems) *QueryBillResponseData {
	s.Items = v
	return s
}

type QueryBillResponseDataItems struct {
	Item []*QueryBillResponseDataItemsItem `json:"Item,omitempty" xml:"Item,omitempty" require:"true" type:"Repeated"`
}

func (s QueryBillResponseDataItems) String() string {
	return tea.Prettify(s)
}

func (s QueryBillResponseDataItems) GoString() string {
	return s.String()
}

func (s *QueryBillResponseDataItems) SetItem(v []*QueryBillResponseDataItemsItem) *QueryBillResponseDataItems {
	s.Item = v
	return s
}

type QueryBillResponseDataItemsItem struct {
	RecordID              *string  `json:"RecordID,omitempty" xml:"RecordID,omitempty" require:"true"`
	Item                  *string  `json:"Item,omitempty" xml:"Item,omitempty" require:"true"`
	OwnerID               *string  `json:"OwnerID,omitempty" xml:"OwnerID,omitempty" require:"true"`
	UsageStartTime        *string  `json:"UsageStartTime,omitempty" xml:"UsageStartTime,omitempty" require:"true"`
	UsageEndTime          *string  `json:"UsageEndTime,omitempty" xml:"UsageEndTime,omitempty" require:"true"`
	PaymentTime           *string  `json:"PaymentTime,omitempty" xml:"PaymentTime,omitempty" require:"true"`
	ProductCode           *string  `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType           *string  `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType      *string  `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	ProductName           *string  `json:"ProductName,omitempty" xml:"ProductName,omitempty" require:"true"`
	ProductDetail         *string  `json:"ProductDetail,omitempty" xml:"ProductDetail,omitempty" require:"true"`
	PretaxGrossAmount     *float32 `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	DeductedByCoupons     *float32 `json:"DeductedByCoupons,omitempty" xml:"DeductedByCoupons,omitempty" require:"true"`
	InvoiceDiscount       *float32 `json:"InvoiceDiscount,omitempty" xml:"InvoiceDiscount,omitempty" require:"true"`
	PretaxAmount          *float32 `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	Currency              *string  `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	PretaxAmountLocal     *float32 `json:"PretaxAmountLocal,omitempty" xml:"PretaxAmountLocal,omitempty" require:"true"`
	Tax                   *float32 `json:"Tax,omitempty" xml:"Tax,omitempty" require:"true"`
	PaymentAmount         *float32 `json:"PaymentAmount,omitempty" xml:"PaymentAmount,omitempty" require:"true"`
	DeductedByCashCoupons *float32 `json:"DeductedByCashCoupons,omitempty" xml:"DeductedByCashCoupons,omitempty" require:"true"`
	DeductedByPrepaidCard *float32 `json:"DeductedByPrepaidCard,omitempty" xml:"DeductedByPrepaidCard,omitempty" require:"true"`
	OutstandingAmount     *float32 `json:"OutstandingAmount,omitempty" xml:"OutstandingAmount,omitempty" require:"true"`
	AfterTaxAmount        *float32 `json:"AfterTaxAmount,omitempty" xml:"AfterTaxAmount,omitempty" require:"true"`
	Status                *string  `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	PaymentCurrency       *string  `json:"PaymentCurrency,omitempty" xml:"PaymentCurrency,omitempty" require:"true"`
	PaymentTransactionID  *string  `json:"PaymentTransactionID,omitempty" xml:"PaymentTransactionID,omitempty" require:"true"`
	RoundDownDiscount     *string  `json:"RoundDownDiscount,omitempty" xml:"RoundDownDiscount,omitempty" require:"true"`
	SubOrderId            *string  `json:"SubOrderId,omitempty" xml:"SubOrderId,omitempty" require:"true"`
}

func (s QueryBillResponseDataItemsItem) String() string {
	return tea.Prettify(s)
}

func (s QueryBillResponseDataItemsItem) GoString() string {
	return s.String()
}

func (s *QueryBillResponseDataItemsItem) SetRecordID(v string) *QueryBillResponseDataItemsItem {
	s.RecordID = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetItem(v string) *QueryBillResponseDataItemsItem {
	s.Item = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetOwnerID(v string) *QueryBillResponseDataItemsItem {
	s.OwnerID = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetUsageStartTime(v string) *QueryBillResponseDataItemsItem {
	s.UsageStartTime = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetUsageEndTime(v string) *QueryBillResponseDataItemsItem {
	s.UsageEndTime = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetPaymentTime(v string) *QueryBillResponseDataItemsItem {
	s.PaymentTime = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetProductCode(v string) *QueryBillResponseDataItemsItem {
	s.ProductCode = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetProductType(v string) *QueryBillResponseDataItemsItem {
	s.ProductType = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetSubscriptionType(v string) *QueryBillResponseDataItemsItem {
	s.SubscriptionType = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetProductName(v string) *QueryBillResponseDataItemsItem {
	s.ProductName = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetProductDetail(v string) *QueryBillResponseDataItemsItem {
	s.ProductDetail = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetPretaxGrossAmount(v float32) *QueryBillResponseDataItemsItem {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetDeductedByCoupons(v float32) *QueryBillResponseDataItemsItem {
	s.DeductedByCoupons = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetInvoiceDiscount(v float32) *QueryBillResponseDataItemsItem {
	s.InvoiceDiscount = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetPretaxAmount(v float32) *QueryBillResponseDataItemsItem {
	s.PretaxAmount = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetCurrency(v string) *QueryBillResponseDataItemsItem {
	s.Currency = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetPretaxAmountLocal(v float32) *QueryBillResponseDataItemsItem {
	s.PretaxAmountLocal = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetTax(v float32) *QueryBillResponseDataItemsItem {
	s.Tax = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetPaymentAmount(v float32) *QueryBillResponseDataItemsItem {
	s.PaymentAmount = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetDeductedByCashCoupons(v float32) *QueryBillResponseDataItemsItem {
	s.DeductedByCashCoupons = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetDeductedByPrepaidCard(v float32) *QueryBillResponseDataItemsItem {
	s.DeductedByPrepaidCard = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetOutstandingAmount(v float32) *QueryBillResponseDataItemsItem {
	s.OutstandingAmount = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetAfterTaxAmount(v float32) *QueryBillResponseDataItemsItem {
	s.AfterTaxAmount = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetStatus(v string) *QueryBillResponseDataItemsItem {
	s.Status = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetPaymentCurrency(v string) *QueryBillResponseDataItemsItem {
	s.PaymentCurrency = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetPaymentTransactionID(v string) *QueryBillResponseDataItemsItem {
	s.PaymentTransactionID = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetRoundDownDiscount(v string) *QueryBillResponseDataItemsItem {
	s.RoundDownDiscount = &v
	return s
}

func (s *QueryBillResponseDataItemsItem) SetSubOrderId(v string) *QueryBillResponseDataItemsItem {
	s.SubOrderId = &v
	return s
}

type QueryInstanceBillRequest struct {
	BillingCycle     *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
	IsBillingItem    *bool   `json:"IsBillingItem,omitempty" xml:"IsBillingItem,omitempty"`
	PageNum          *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize         *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	IsHideZeroCharge *bool   `json:"IsHideZeroCharge,omitempty" xml:"IsHideZeroCharge,omitempty"`
	BillingDate      *string `json:"BillingDate,omitempty" xml:"BillingDate,omitempty"`
	Granularity      *string `json:"Granularity,omitempty" xml:"Granularity,omitempty"`
}

func (s QueryInstanceBillRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryInstanceBillRequest) GoString() string {
	return s.String()
}

func (s *QueryInstanceBillRequest) SetBillingCycle(v string) *QueryInstanceBillRequest {
	s.BillingCycle = &v
	return s
}

func (s *QueryInstanceBillRequest) SetProductCode(v string) *QueryInstanceBillRequest {
	s.ProductCode = &v
	return s
}

func (s *QueryInstanceBillRequest) SetProductType(v string) *QueryInstanceBillRequest {
	s.ProductType = &v
	return s
}

func (s *QueryInstanceBillRequest) SetSubscriptionType(v string) *QueryInstanceBillRequest {
	s.SubscriptionType = &v
	return s
}

func (s *QueryInstanceBillRequest) SetIsBillingItem(v bool) *QueryInstanceBillRequest {
	s.IsBillingItem = &v
	return s
}

func (s *QueryInstanceBillRequest) SetPageNum(v int) *QueryInstanceBillRequest {
	s.PageNum = &v
	return s
}

func (s *QueryInstanceBillRequest) SetPageSize(v int) *QueryInstanceBillRequest {
	s.PageSize = &v
	return s
}

func (s *QueryInstanceBillRequest) SetIsHideZeroCharge(v bool) *QueryInstanceBillRequest {
	s.IsHideZeroCharge = &v
	return s
}

func (s *QueryInstanceBillRequest) SetBillingDate(v string) *QueryInstanceBillRequest {
	s.BillingDate = &v
	return s
}

func (s *QueryInstanceBillRequest) SetGranularity(v string) *QueryInstanceBillRequest {
	s.Granularity = &v
	return s
}

type QueryInstanceBillResponse struct {
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                        `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                        `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryInstanceBillResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryInstanceBillResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryInstanceBillResponse) GoString() string {
	return s.String()
}

func (s *QueryInstanceBillResponse) SetRequestId(v string) *QueryInstanceBillResponse {
	s.RequestId = &v
	return s
}

func (s *QueryInstanceBillResponse) SetSuccess(v bool) *QueryInstanceBillResponse {
	s.Success = &v
	return s
}

func (s *QueryInstanceBillResponse) SetCode(v string) *QueryInstanceBillResponse {
	s.Code = &v
	return s
}

func (s *QueryInstanceBillResponse) SetMessage(v string) *QueryInstanceBillResponse {
	s.Message = &v
	return s
}

func (s *QueryInstanceBillResponse) SetData(v *QueryInstanceBillResponseData) *QueryInstanceBillResponse {
	s.Data = v
	return s
}

type QueryInstanceBillResponseData struct {
	BillingCycle *string                             `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	AccountID    *string                             `json:"AccountID,omitempty" xml:"AccountID,omitempty" require:"true"`
	AccountName  *string                             `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	TotalCount   *int                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNum      *int                                `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize     *int                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Items        *QueryInstanceBillResponseDataItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s QueryInstanceBillResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryInstanceBillResponseData) GoString() string {
	return s.String()
}

func (s *QueryInstanceBillResponseData) SetBillingCycle(v string) *QueryInstanceBillResponseData {
	s.BillingCycle = &v
	return s
}

func (s *QueryInstanceBillResponseData) SetAccountID(v string) *QueryInstanceBillResponseData {
	s.AccountID = &v
	return s
}

func (s *QueryInstanceBillResponseData) SetAccountName(v string) *QueryInstanceBillResponseData {
	s.AccountName = &v
	return s
}

func (s *QueryInstanceBillResponseData) SetTotalCount(v int) *QueryInstanceBillResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryInstanceBillResponseData) SetPageNum(v int) *QueryInstanceBillResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryInstanceBillResponseData) SetPageSize(v int) *QueryInstanceBillResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryInstanceBillResponseData) SetItems(v *QueryInstanceBillResponseDataItems) *QueryInstanceBillResponseData {
	s.Items = v
	return s
}

type QueryInstanceBillResponseDataItems struct {
	Item []*QueryInstanceBillResponseDataItemsItem `json:"Item,omitempty" xml:"Item,omitempty" require:"true" type:"Repeated"`
}

func (s QueryInstanceBillResponseDataItems) String() string {
	return tea.Prettify(s)
}

func (s QueryInstanceBillResponseDataItems) GoString() string {
	return s.String()
}

func (s *QueryInstanceBillResponseDataItems) SetItem(v []*QueryInstanceBillResponseDataItemsItem) *QueryInstanceBillResponseDataItems {
	s.Item = v
	return s
}

type QueryInstanceBillResponseDataItemsItem struct {
	InstanceID                *string  `json:"InstanceID,omitempty" xml:"InstanceID,omitempty" require:"true"`
	BillingType               *string  `json:"BillingType,omitempty" xml:"BillingType,omitempty" require:"true"`
	CostUnit                  *string  `json:"CostUnit,omitempty" xml:"CostUnit,omitempty" require:"true"`
	ProductCode               *string  `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType               *string  `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType          *string  `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	ProductName               *string  `json:"ProductName,omitempty" xml:"ProductName,omitempty" require:"true"`
	ProductDetail             *string  `json:"ProductDetail,omitempty" xml:"ProductDetail,omitempty" require:"true"`
	OwnerID                   *string  `json:"OwnerID,omitempty" xml:"OwnerID,omitempty" require:"true"`
	BillingItem               *string  `json:"BillingItem,omitempty" xml:"BillingItem,omitempty" require:"true"`
	ListPrice                 *string  `json:"ListPrice,omitempty" xml:"ListPrice,omitempty" require:"true"`
	ListPriceUnit             *string  `json:"ListPriceUnit,omitempty" xml:"ListPriceUnit,omitempty" require:"true"`
	Usage                     *string  `json:"Usage,omitempty" xml:"Usage,omitempty" require:"true"`
	UsageUnit                 *string  `json:"UsageUnit,omitempty" xml:"UsageUnit,omitempty" require:"true"`
	DeductedByResourcePackage *string  `json:"DeductedByResourcePackage,omitempty" xml:"DeductedByResourcePackage,omitempty" require:"true"`
	PretaxGrossAmount         *float32 `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	InvoiceDiscount           *float32 `json:"InvoiceDiscount,omitempty" xml:"InvoiceDiscount,omitempty" require:"true"`
	DeductedByCoupons         *float32 `json:"DeductedByCoupons,omitempty" xml:"DeductedByCoupons,omitempty" require:"true"`
	PretaxAmount              *float32 `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	DeductedByCashCoupons     *float32 `json:"DeductedByCashCoupons,omitempty" xml:"DeductedByCashCoupons,omitempty" require:"true"`
	DeductedByPrepaidCard     *float32 `json:"DeductedByPrepaidCard,omitempty" xml:"DeductedByPrepaidCard,omitempty" require:"true"`
	PaymentAmount             *float32 `json:"PaymentAmount,omitempty" xml:"PaymentAmount,omitempty" require:"true"`
	OutstandingAmount         *float32 `json:"OutstandingAmount,omitempty" xml:"OutstandingAmount,omitempty" require:"true"`
	Currency                  *string  `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	NickName                  *string  `json:"NickName,omitempty" xml:"NickName,omitempty" require:"true"`
	ResourceGroup             *string  `json:"ResourceGroup,omitempty" xml:"ResourceGroup,omitempty" require:"true"`
	Tag                       *string  `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true"`
	InstanceConfig            *string  `json:"InstanceConfig,omitempty" xml:"InstanceConfig,omitempty" require:"true"`
	InstanceSpec              *string  `json:"InstanceSpec,omitempty" xml:"InstanceSpec,omitempty" require:"true"`
	InternetIP                *string  `json:"InternetIP,omitempty" xml:"InternetIP,omitempty" require:"true"`
	IntranetIP                *string  `json:"IntranetIP,omitempty" xml:"IntranetIP,omitempty" require:"true"`
	Region                    *string  `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	Zone                      *string  `json:"Zone,omitempty" xml:"Zone,omitempty" require:"true"`
	Item                      *string  `json:"Item,omitempty" xml:"Item,omitempty" require:"true"`
	ServicePeriod             *string  `json:"ServicePeriod,omitempty" xml:"ServicePeriod,omitempty" require:"true"`
	BillingDate               *string  `json:"BillingDate,omitempty" xml:"BillingDate,omitempty" require:"true"`
	ServicePeriodUnit         *string  `json:"ServicePeriodUnit,omitempty" xml:"ServicePeriodUnit,omitempty" require:"true"`
}

func (s QueryInstanceBillResponseDataItemsItem) String() string {
	return tea.Prettify(s)
}

func (s QueryInstanceBillResponseDataItemsItem) GoString() string {
	return s.String()
}

func (s *QueryInstanceBillResponseDataItemsItem) SetInstanceID(v string) *QueryInstanceBillResponseDataItemsItem {
	s.InstanceID = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetBillingType(v string) *QueryInstanceBillResponseDataItemsItem {
	s.BillingType = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetCostUnit(v string) *QueryInstanceBillResponseDataItemsItem {
	s.CostUnit = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetProductCode(v string) *QueryInstanceBillResponseDataItemsItem {
	s.ProductCode = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetProductType(v string) *QueryInstanceBillResponseDataItemsItem {
	s.ProductType = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetSubscriptionType(v string) *QueryInstanceBillResponseDataItemsItem {
	s.SubscriptionType = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetProductName(v string) *QueryInstanceBillResponseDataItemsItem {
	s.ProductName = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetProductDetail(v string) *QueryInstanceBillResponseDataItemsItem {
	s.ProductDetail = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetOwnerID(v string) *QueryInstanceBillResponseDataItemsItem {
	s.OwnerID = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetBillingItem(v string) *QueryInstanceBillResponseDataItemsItem {
	s.BillingItem = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetListPrice(v string) *QueryInstanceBillResponseDataItemsItem {
	s.ListPrice = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetListPriceUnit(v string) *QueryInstanceBillResponseDataItemsItem {
	s.ListPriceUnit = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetUsage(v string) *QueryInstanceBillResponseDataItemsItem {
	s.Usage = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetUsageUnit(v string) *QueryInstanceBillResponseDataItemsItem {
	s.UsageUnit = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetDeductedByResourcePackage(v string) *QueryInstanceBillResponseDataItemsItem {
	s.DeductedByResourcePackage = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetPretaxGrossAmount(v float32) *QueryInstanceBillResponseDataItemsItem {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetInvoiceDiscount(v float32) *QueryInstanceBillResponseDataItemsItem {
	s.InvoiceDiscount = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetDeductedByCoupons(v float32) *QueryInstanceBillResponseDataItemsItem {
	s.DeductedByCoupons = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetPretaxAmount(v float32) *QueryInstanceBillResponseDataItemsItem {
	s.PretaxAmount = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetDeductedByCashCoupons(v float32) *QueryInstanceBillResponseDataItemsItem {
	s.DeductedByCashCoupons = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetDeductedByPrepaidCard(v float32) *QueryInstanceBillResponseDataItemsItem {
	s.DeductedByPrepaidCard = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetPaymentAmount(v float32) *QueryInstanceBillResponseDataItemsItem {
	s.PaymentAmount = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetOutstandingAmount(v float32) *QueryInstanceBillResponseDataItemsItem {
	s.OutstandingAmount = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetCurrency(v string) *QueryInstanceBillResponseDataItemsItem {
	s.Currency = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetNickName(v string) *QueryInstanceBillResponseDataItemsItem {
	s.NickName = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetResourceGroup(v string) *QueryInstanceBillResponseDataItemsItem {
	s.ResourceGroup = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetTag(v string) *QueryInstanceBillResponseDataItemsItem {
	s.Tag = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetInstanceConfig(v string) *QueryInstanceBillResponseDataItemsItem {
	s.InstanceConfig = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetInstanceSpec(v string) *QueryInstanceBillResponseDataItemsItem {
	s.InstanceSpec = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetInternetIP(v string) *QueryInstanceBillResponseDataItemsItem {
	s.InternetIP = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetIntranetIP(v string) *QueryInstanceBillResponseDataItemsItem {
	s.IntranetIP = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetRegion(v string) *QueryInstanceBillResponseDataItemsItem {
	s.Region = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetZone(v string) *QueryInstanceBillResponseDataItemsItem {
	s.Zone = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetItem(v string) *QueryInstanceBillResponseDataItemsItem {
	s.Item = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetServicePeriod(v string) *QueryInstanceBillResponseDataItemsItem {
	s.ServicePeriod = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetBillingDate(v string) *QueryInstanceBillResponseDataItemsItem {
	s.BillingDate = &v
	return s
}

func (s *QueryInstanceBillResponseDataItemsItem) SetServicePeriodUnit(v string) *QueryInstanceBillResponseDataItemsItem {
	s.ServicePeriodUnit = &v
	return s
}

type EnableBillGenerationRequest struct {
	ProductCode *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
}

func (s EnableBillGenerationRequest) String() string {
	return tea.Prettify(s)
}

func (s EnableBillGenerationRequest) GoString() string {
	return s.String()
}

func (s *EnableBillGenerationRequest) SetProductCode(v string) *EnableBillGenerationRequest {
	s.ProductCode = &v
	return s
}

type EnableBillGenerationResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                           `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                           `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *EnableBillGenerationResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s EnableBillGenerationResponse) String() string {
	return tea.Prettify(s)
}

func (s EnableBillGenerationResponse) GoString() string {
	return s.String()
}

func (s *EnableBillGenerationResponse) SetRequestId(v string) *EnableBillGenerationResponse {
	s.RequestId = &v
	return s
}

func (s *EnableBillGenerationResponse) SetSuccess(v bool) *EnableBillGenerationResponse {
	s.Success = &v
	return s
}

func (s *EnableBillGenerationResponse) SetCode(v string) *EnableBillGenerationResponse {
	s.Code = &v
	return s
}

func (s *EnableBillGenerationResponse) SetMessage(v string) *EnableBillGenerationResponse {
	s.Message = &v
	return s
}

func (s *EnableBillGenerationResponse) SetData(v *EnableBillGenerationResponseData) *EnableBillGenerationResponse {
	s.Data = v
	return s
}

type EnableBillGenerationResponseData struct {
	Boolean *bool `json:"Boolean,omitempty" xml:"Boolean,omitempty" require:"true"`
}

func (s EnableBillGenerationResponseData) String() string {
	return tea.Prettify(s)
}

func (s EnableBillGenerationResponseData) GoString() string {
	return s.String()
}

func (s *EnableBillGenerationResponseData) SetBoolean(v bool) *EnableBillGenerationResponseData {
	s.Boolean = &v
	return s
}

type QueryRedeemRequest struct {
	ExpiryTimeStart *string `json:"ExpiryTimeStart,omitempty" xml:"ExpiryTimeStart,omitempty"`
	ExpiryTimeEnd   *string `json:"ExpiryTimeEnd,omitempty" xml:"ExpiryTimeEnd,omitempty"`
	EffectiveOrNot  *bool   `json:"EffectiveOrNot,omitempty" xml:"EffectiveOrNot,omitempty"`
	PageNum         *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize        *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s QueryRedeemRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryRedeemRequest) GoString() string {
	return s.String()
}

func (s *QueryRedeemRequest) SetExpiryTimeStart(v string) *QueryRedeemRequest {
	s.ExpiryTimeStart = &v
	return s
}

func (s *QueryRedeemRequest) SetExpiryTimeEnd(v string) *QueryRedeemRequest {
	s.ExpiryTimeEnd = &v
	return s
}

func (s *QueryRedeemRequest) SetEffectiveOrNot(v bool) *QueryRedeemRequest {
	s.EffectiveOrNot = &v
	return s
}

func (s *QueryRedeemRequest) SetPageNum(v int) *QueryRedeemRequest {
	s.PageNum = &v
	return s
}

func (s *QueryRedeemRequest) SetPageSize(v int) *QueryRedeemRequest {
	s.PageSize = &v
	return s
}

type QueryRedeemResponse struct {
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                    `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                  `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                  `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryRedeemResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryRedeemResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryRedeemResponse) GoString() string {
	return s.String()
}

func (s *QueryRedeemResponse) SetRequestId(v string) *QueryRedeemResponse {
	s.RequestId = &v
	return s
}

func (s *QueryRedeemResponse) SetSuccess(v bool) *QueryRedeemResponse {
	s.Success = &v
	return s
}

func (s *QueryRedeemResponse) SetCode(v string) *QueryRedeemResponse {
	s.Code = &v
	return s
}

func (s *QueryRedeemResponse) SetMessage(v string) *QueryRedeemResponse {
	s.Message = &v
	return s
}

func (s *QueryRedeemResponse) SetData(v *QueryRedeemResponseData) *QueryRedeemResponse {
	s.Data = v
	return s
}

type QueryRedeemResponseData struct {
	PageNum    *int64                         `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize   *int64                         `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int64                         `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Redeem     *QueryRedeemResponseDataRedeem `json:"Redeem,omitempty" xml:"Redeem,omitempty" require:"true" type:"Struct"`
}

func (s QueryRedeemResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryRedeemResponseData) GoString() string {
	return s.String()
}

func (s *QueryRedeemResponseData) SetPageNum(v int64) *QueryRedeemResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryRedeemResponseData) SetPageSize(v int64) *QueryRedeemResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryRedeemResponseData) SetTotalCount(v int64) *QueryRedeemResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryRedeemResponseData) SetRedeem(v *QueryRedeemResponseDataRedeem) *QueryRedeemResponseData {
	s.Redeem = v
	return s
}

type QueryRedeemResponseDataRedeem struct {
	Redeem []*QueryRedeemResponseDataRedeemRedeem `json:"Redeem,omitempty" xml:"Redeem,omitempty" require:"true" type:"Repeated"`
}

func (s QueryRedeemResponseDataRedeem) String() string {
	return tea.Prettify(s)
}

func (s QueryRedeemResponseDataRedeem) GoString() string {
	return s.String()
}

func (s *QueryRedeemResponseDataRedeem) SetRedeem(v []*QueryRedeemResponseDataRedeemRedeem) *QueryRedeemResponseDataRedeem {
	s.Redeem = v
	return s
}

type QueryRedeemResponseDataRedeemRedeem struct {
	RedeemId           *string `json:"RedeemId,omitempty" xml:"RedeemId,omitempty" require:"true"`
	RedeemNo           *string `json:"RedeemNo,omitempty" xml:"RedeemNo,omitempty" require:"true"`
	Status             *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	GrantedTime        *string `json:"GrantedTime,omitempty" xml:"GrantedTime,omitempty" require:"true"`
	EffectiveTime      *string `json:"EffectiveTime,omitempty" xml:"EffectiveTime,omitempty" require:"true"`
	ExpiryTime         *string `json:"ExpiryTime,omitempty" xml:"ExpiryTime,omitempty" require:"true"`
	NominalValue       *string `json:"NominalValue,omitempty" xml:"NominalValue,omitempty" require:"true"`
	Balance            *string `json:"Balance,omitempty" xml:"Balance,omitempty" require:"true"`
	ApplicableProducts *string `json:"ApplicableProducts,omitempty" xml:"ApplicableProducts,omitempty" require:"true"`
	Specification      *string `json:"Specification,omitempty" xml:"Specification,omitempty" require:"true"`
}

func (s QueryRedeemResponseDataRedeemRedeem) String() string {
	return tea.Prettify(s)
}

func (s QueryRedeemResponseDataRedeemRedeem) GoString() string {
	return s.String()
}

func (s *QueryRedeemResponseDataRedeemRedeem) SetRedeemId(v string) *QueryRedeemResponseDataRedeemRedeem {
	s.RedeemId = &v
	return s
}

func (s *QueryRedeemResponseDataRedeemRedeem) SetRedeemNo(v string) *QueryRedeemResponseDataRedeemRedeem {
	s.RedeemNo = &v
	return s
}

func (s *QueryRedeemResponseDataRedeemRedeem) SetStatus(v string) *QueryRedeemResponseDataRedeemRedeem {
	s.Status = &v
	return s
}

func (s *QueryRedeemResponseDataRedeemRedeem) SetGrantedTime(v string) *QueryRedeemResponseDataRedeemRedeem {
	s.GrantedTime = &v
	return s
}

func (s *QueryRedeemResponseDataRedeemRedeem) SetEffectiveTime(v string) *QueryRedeemResponseDataRedeemRedeem {
	s.EffectiveTime = &v
	return s
}

func (s *QueryRedeemResponseDataRedeemRedeem) SetExpiryTime(v string) *QueryRedeemResponseDataRedeemRedeem {
	s.ExpiryTime = &v
	return s
}

func (s *QueryRedeemResponseDataRedeemRedeem) SetNominalValue(v string) *QueryRedeemResponseDataRedeemRedeem {
	s.NominalValue = &v
	return s
}

func (s *QueryRedeemResponseDataRedeemRedeem) SetBalance(v string) *QueryRedeemResponseDataRedeemRedeem {
	s.Balance = &v
	return s
}

func (s *QueryRedeemResponseDataRedeemRedeem) SetApplicableProducts(v string) *QueryRedeemResponseDataRedeemRedeem {
	s.ApplicableProducts = &v
	return s
}

func (s *QueryRedeemResponseDataRedeemRedeem) SetSpecification(v string) *QueryRedeemResponseDataRedeemRedeem {
	s.Specification = &v
	return s
}

type ConvertChargeTypeRequest struct {
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	Period           *int    `json:"Period,omitempty" xml:"Period,omitempty"`
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	InstanceId       *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s ConvertChargeTypeRequest) String() string {
	return tea.Prettify(s)
}

func (s ConvertChargeTypeRequest) GoString() string {
	return s.String()
}

func (s *ConvertChargeTypeRequest) SetProductType(v string) *ConvertChargeTypeRequest {
	s.ProductType = &v
	return s
}

func (s *ConvertChargeTypeRequest) SetSubscriptionType(v string) *ConvertChargeTypeRequest {
	s.SubscriptionType = &v
	return s
}

func (s *ConvertChargeTypeRequest) SetPeriod(v int) *ConvertChargeTypeRequest {
	s.Period = &v
	return s
}

func (s *ConvertChargeTypeRequest) SetProductCode(v string) *ConvertChargeTypeRequest {
	s.ProductCode = &v
	return s
}

func (s *ConvertChargeTypeRequest) SetInstanceId(v string) *ConvertChargeTypeRequest {
	s.InstanceId = &v
	return s
}

type ConvertChargeTypeResponse struct {
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                        `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                        `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *ConvertChargeTypeResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ConvertChargeTypeResponse) String() string {
	return tea.Prettify(s)
}

func (s ConvertChargeTypeResponse) GoString() string {
	return s.String()
}

func (s *ConvertChargeTypeResponse) SetRequestId(v string) *ConvertChargeTypeResponse {
	s.RequestId = &v
	return s
}

func (s *ConvertChargeTypeResponse) SetSuccess(v bool) *ConvertChargeTypeResponse {
	s.Success = &v
	return s
}

func (s *ConvertChargeTypeResponse) SetCode(v string) *ConvertChargeTypeResponse {
	s.Code = &v
	return s
}

func (s *ConvertChargeTypeResponse) SetMessage(v string) *ConvertChargeTypeResponse {
	s.Message = &v
	return s
}

func (s *ConvertChargeTypeResponse) SetData(v *ConvertChargeTypeResponseData) *ConvertChargeTypeResponse {
	s.Data = v
	return s
}

type ConvertChargeTypeResponseData struct {
	OrderId *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
}

func (s ConvertChargeTypeResponseData) String() string {
	return tea.Prettify(s)
}

func (s ConvertChargeTypeResponseData) GoString() string {
	return s.String()
}

func (s *ConvertChargeTypeResponseData) SetOrderId(v string) *ConvertChargeTypeResponseData {
	s.OrderId = &v
	return s
}

type CreateInstanceRequest struct {
	ProductCode      *string                           `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	Parameter        []*CreateInstanceRequestParameter `json:"Parameter,omitempty" xml:"Parameter,omitempty" type:"Repeated"`
	ProductType      *string                           `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string                           `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	Period           *int                              `json:"Period,omitempty" xml:"Period,omitempty"`
	RenewalStatus    *string                           `json:"RenewalStatus,omitempty" xml:"RenewalStatus,omitempty"`
	RenewPeriod      *int                              `json:"RenewPeriod,omitempty" xml:"RenewPeriod,omitempty"`
	ClientToken      *string                           `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s CreateInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateInstanceRequest) GoString() string {
	return s.String()
}

func (s *CreateInstanceRequest) SetProductCode(v string) *CreateInstanceRequest {
	s.ProductCode = &v
	return s
}

func (s *CreateInstanceRequest) SetParameter(v []*CreateInstanceRequestParameter) *CreateInstanceRequest {
	s.Parameter = v
	return s
}

func (s *CreateInstanceRequest) SetProductType(v string) *CreateInstanceRequest {
	s.ProductType = &v
	return s
}

func (s *CreateInstanceRequest) SetSubscriptionType(v string) *CreateInstanceRequest {
	s.SubscriptionType = &v
	return s
}

func (s *CreateInstanceRequest) SetPeriod(v int) *CreateInstanceRequest {
	s.Period = &v
	return s
}

func (s *CreateInstanceRequest) SetRenewalStatus(v string) *CreateInstanceRequest {
	s.RenewalStatus = &v
	return s
}

func (s *CreateInstanceRequest) SetRenewPeriod(v int) *CreateInstanceRequest {
	s.RenewPeriod = &v
	return s
}

func (s *CreateInstanceRequest) SetClientToken(v string) *CreateInstanceRequest {
	s.ClientToken = &v
	return s
}

type CreateInstanceRequestParameter struct {
	Code  *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s CreateInstanceRequestParameter) String() string {
	return tea.Prettify(s)
}

func (s CreateInstanceRequestParameter) GoString() string {
	return s.String()
}

func (s *CreateInstanceRequestParameter) SetCode(v string) *CreateInstanceRequestParameter {
	s.Code = &v
	return s
}

func (s *CreateInstanceRequestParameter) SetValue(v string) *CreateInstanceRequestParameter {
	s.Value = &v
	return s
}

type CreateInstanceResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                       `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                     `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                     `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *CreateInstanceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s CreateInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateInstanceResponse) GoString() string {
	return s.String()
}

func (s *CreateInstanceResponse) SetRequestId(v string) *CreateInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *CreateInstanceResponse) SetSuccess(v bool) *CreateInstanceResponse {
	s.Success = &v
	return s
}

func (s *CreateInstanceResponse) SetCode(v string) *CreateInstanceResponse {
	s.Code = &v
	return s
}

func (s *CreateInstanceResponse) SetMessage(v string) *CreateInstanceResponse {
	s.Message = &v
	return s
}

func (s *CreateInstanceResponse) SetData(v *CreateInstanceResponseData) *CreateInstanceResponse {
	s.Data = v
	return s
}

type CreateInstanceResponseData struct {
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	OrderId    *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
}

func (s CreateInstanceResponseData) String() string {
	return tea.Prettify(s)
}

func (s CreateInstanceResponseData) GoString() string {
	return s.String()
}

func (s *CreateInstanceResponseData) SetInstanceId(v string) *CreateInstanceResponseData {
	s.InstanceId = &v
	return s
}

func (s *CreateInstanceResponseData) SetOrderId(v string) *CreateInstanceResponseData {
	s.OrderId = &v
	return s
}

type ModifyInstanceRequest struct {
	ProductCode      *string                           `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType      *string                           `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string                           `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	ModifyType       *string                           `json:"ModifyType,omitempty" xml:"ModifyType,omitempty" require:"true"`
	InstanceId       *string                           `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
	Parameter        []*ModifyInstanceRequestParameter `json:"Parameter,omitempty" xml:"Parameter,omitempty" type:"Repeated"`
	ClientToken      *string                           `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s ModifyInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyInstanceRequest) GoString() string {
	return s.String()
}

func (s *ModifyInstanceRequest) SetProductCode(v string) *ModifyInstanceRequest {
	s.ProductCode = &v
	return s
}

func (s *ModifyInstanceRequest) SetProductType(v string) *ModifyInstanceRequest {
	s.ProductType = &v
	return s
}

func (s *ModifyInstanceRequest) SetSubscriptionType(v string) *ModifyInstanceRequest {
	s.SubscriptionType = &v
	return s
}

func (s *ModifyInstanceRequest) SetModifyType(v string) *ModifyInstanceRequest {
	s.ModifyType = &v
	return s
}

func (s *ModifyInstanceRequest) SetInstanceId(v string) *ModifyInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *ModifyInstanceRequest) SetParameter(v []*ModifyInstanceRequestParameter) *ModifyInstanceRequest {
	s.Parameter = v
	return s
}

func (s *ModifyInstanceRequest) SetClientToken(v string) *ModifyInstanceRequest {
	s.ClientToken = &v
	return s
}

type ModifyInstanceRequestParameter struct {
	Code  *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s ModifyInstanceRequestParameter) String() string {
	return tea.Prettify(s)
}

func (s ModifyInstanceRequestParameter) GoString() string {
	return s.String()
}

func (s *ModifyInstanceRequestParameter) SetCode(v string) *ModifyInstanceRequestParameter {
	s.Code = &v
	return s
}

func (s *ModifyInstanceRequestParameter) SetValue(v string) *ModifyInstanceRequestParameter {
	s.Value = &v
	return s
}

type ModifyInstanceResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                       `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                     `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                     `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *ModifyInstanceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ModifyInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyInstanceResponse) GoString() string {
	return s.String()
}

func (s *ModifyInstanceResponse) SetRequestId(v string) *ModifyInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyInstanceResponse) SetSuccess(v bool) *ModifyInstanceResponse {
	s.Success = &v
	return s
}

func (s *ModifyInstanceResponse) SetCode(v string) *ModifyInstanceResponse {
	s.Code = &v
	return s
}

func (s *ModifyInstanceResponse) SetMessage(v string) *ModifyInstanceResponse {
	s.Message = &v
	return s
}

func (s *ModifyInstanceResponse) SetData(v *ModifyInstanceResponseData) *ModifyInstanceResponse {
	s.Data = v
	return s
}

type ModifyInstanceResponseData struct {
	HostId  *string `json:"HostId,omitempty" xml:"HostId,omitempty" require:"true"`
	OrderId *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
}

func (s ModifyInstanceResponseData) String() string {
	return tea.Prettify(s)
}

func (s ModifyInstanceResponseData) GoString() string {
	return s.String()
}

func (s *ModifyInstanceResponseData) SetHostId(v string) *ModifyInstanceResponseData {
	s.HostId = &v
	return s
}

func (s *ModifyInstanceResponseData) SetOrderId(v string) *ModifyInstanceResponseData {
	s.OrderId = &v
	return s
}

type DescribePricingModuleRequest struct {
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
}

func (s DescribePricingModuleRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribePricingModuleRequest) GoString() string {
	return s.String()
}

func (s *DescribePricingModuleRequest) SetProductCode(v string) *DescribePricingModuleRequest {
	s.ProductCode = &v
	return s
}

func (s *DescribePricingModuleRequest) SetProductType(v string) *DescribePricingModuleRequest {
	s.ProductType = &v
	return s
}

func (s *DescribePricingModuleRequest) SetSubscriptionType(v string) *DescribePricingModuleRequest {
	s.SubscriptionType = &v
	return s
}

type DescribePricingModuleResponse struct {
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                              `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                            `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                            `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *DescribePricingModuleResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DescribePricingModuleResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribePricingModuleResponse) GoString() string {
	return s.String()
}

func (s *DescribePricingModuleResponse) SetRequestId(v string) *DescribePricingModuleResponse {
	s.RequestId = &v
	return s
}

func (s *DescribePricingModuleResponse) SetSuccess(v bool) *DescribePricingModuleResponse {
	s.Success = &v
	return s
}

func (s *DescribePricingModuleResponse) SetCode(v string) *DescribePricingModuleResponse {
	s.Code = &v
	return s
}

func (s *DescribePricingModuleResponse) SetMessage(v string) *DescribePricingModuleResponse {
	s.Message = &v
	return s
}

func (s *DescribePricingModuleResponse) SetData(v *DescribePricingModuleResponseData) *DescribePricingModuleResponse {
	s.Data = v
	return s
}

type DescribePricingModuleResponseData struct {
	ModuleList    *DescribePricingModuleResponseDataModuleList    `json:"ModuleList,omitempty" xml:"ModuleList,omitempty" require:"true" type:"Struct"`
	AttributeList *DescribePricingModuleResponseDataAttributeList `json:"AttributeList,omitempty" xml:"AttributeList,omitempty" require:"true" type:"Struct"`
}

func (s DescribePricingModuleResponseData) String() string {
	return tea.Prettify(s)
}

func (s DescribePricingModuleResponseData) GoString() string {
	return s.String()
}

func (s *DescribePricingModuleResponseData) SetModuleList(v *DescribePricingModuleResponseDataModuleList) *DescribePricingModuleResponseData {
	s.ModuleList = v
	return s
}

func (s *DescribePricingModuleResponseData) SetAttributeList(v *DescribePricingModuleResponseDataAttributeList) *DescribePricingModuleResponseData {
	s.AttributeList = v
	return s
}

type DescribePricingModuleResponseDataModuleList struct {
	Module []*DescribePricingModuleResponseDataModuleListModule `json:"Module,omitempty" xml:"Module,omitempty" require:"true" type:"Repeated"`
}

func (s DescribePricingModuleResponseDataModuleList) String() string {
	return tea.Prettify(s)
}

func (s DescribePricingModuleResponseDataModuleList) GoString() string {
	return s.String()
}

func (s *DescribePricingModuleResponseDataModuleList) SetModule(v []*DescribePricingModuleResponseDataModuleListModule) *DescribePricingModuleResponseDataModuleList {
	s.Module = v
	return s
}

type DescribePricingModuleResponseDataModuleListModule struct {
	ModuleCode *string                                                      `json:"ModuleCode,omitempty" xml:"ModuleCode,omitempty" require:"true"`
	ModuleName *string                                                      `json:"ModuleName,omitempty" xml:"ModuleName,omitempty" require:"true"`
	PriceType  *string                                                      `json:"PriceType,omitempty" xml:"PriceType,omitempty" require:"true"`
	Currency   *string                                                      `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	ConfigList *DescribePricingModuleResponseDataModuleListModuleConfigList `json:"ConfigList,omitempty" xml:"ConfigList,omitempty" require:"true" type:"Struct"`
}

func (s DescribePricingModuleResponseDataModuleListModule) String() string {
	return tea.Prettify(s)
}

func (s DescribePricingModuleResponseDataModuleListModule) GoString() string {
	return s.String()
}

func (s *DescribePricingModuleResponseDataModuleListModule) SetModuleCode(v string) *DescribePricingModuleResponseDataModuleListModule {
	s.ModuleCode = &v
	return s
}

func (s *DescribePricingModuleResponseDataModuleListModule) SetModuleName(v string) *DescribePricingModuleResponseDataModuleListModule {
	s.ModuleName = &v
	return s
}

func (s *DescribePricingModuleResponseDataModuleListModule) SetPriceType(v string) *DescribePricingModuleResponseDataModuleListModule {
	s.PriceType = &v
	return s
}

func (s *DescribePricingModuleResponseDataModuleListModule) SetCurrency(v string) *DescribePricingModuleResponseDataModuleListModule {
	s.Currency = &v
	return s
}

func (s *DescribePricingModuleResponseDataModuleListModule) SetConfigList(v *DescribePricingModuleResponseDataModuleListModuleConfigList) *DescribePricingModuleResponseDataModuleListModule {
	s.ConfigList = v
	return s
}

type DescribePricingModuleResponseDataModuleListModuleConfigList struct {
	ConfigList []*string `json:"ConfigList,omitempty" xml:"ConfigList,omitempty" require:"true" type:"Repeated"`
}

func (s DescribePricingModuleResponseDataModuleListModuleConfigList) String() string {
	return tea.Prettify(s)
}

func (s DescribePricingModuleResponseDataModuleListModuleConfigList) GoString() string {
	return s.String()
}

func (s *DescribePricingModuleResponseDataModuleListModuleConfigList) SetConfigList(v []*string) *DescribePricingModuleResponseDataModuleListModuleConfigList {
	s.ConfigList = v
	return s
}

type DescribePricingModuleResponseDataAttributeList struct {
	Attribute []*DescribePricingModuleResponseDataAttributeListAttribute `json:"Attribute,omitempty" xml:"Attribute,omitempty" require:"true" type:"Repeated"`
}

func (s DescribePricingModuleResponseDataAttributeList) String() string {
	return tea.Prettify(s)
}

func (s DescribePricingModuleResponseDataAttributeList) GoString() string {
	return s.String()
}

func (s *DescribePricingModuleResponseDataAttributeList) SetAttribute(v []*DescribePricingModuleResponseDataAttributeListAttribute) *DescribePricingModuleResponseDataAttributeList {
	s.Attribute = v
	return s
}

type DescribePricingModuleResponseDataAttributeListAttribute struct {
	Code *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Unit *string `json:"Unit,omitempty" xml:"Unit,omitempty" require:"true"`
}

func (s DescribePricingModuleResponseDataAttributeListAttribute) String() string {
	return tea.Prettify(s)
}

func (s DescribePricingModuleResponseDataAttributeListAttribute) GoString() string {
	return s.String()
}

func (s *DescribePricingModuleResponseDataAttributeListAttribute) SetCode(v string) *DescribePricingModuleResponseDataAttributeListAttribute {
	s.Code = &v
	return s
}

func (s *DescribePricingModuleResponseDataAttributeListAttribute) SetName(v string) *DescribePricingModuleResponseDataAttributeListAttribute {
	s.Name = &v
	return s
}

func (s *DescribePricingModuleResponseDataAttributeListAttribute) SetUnit(v string) *DescribePricingModuleResponseDataAttributeListAttribute {
	s.Unit = &v
	return s
}

type QueryProductListRequest struct {
	QueryTotalCount *bool `json:"QueryTotalCount,omitempty" xml:"QueryTotalCount,omitempty"`
	PageNum         *int  `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize        *int  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s QueryProductListRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryProductListRequest) GoString() string {
	return s.String()
}

func (s *QueryProductListRequest) SetQueryTotalCount(v bool) *QueryProductListRequest {
	s.QueryTotalCount = &v
	return s
}

func (s *QueryProductListRequest) SetPageNum(v int) *QueryProductListRequest {
	s.PageNum = &v
	return s
}

func (s *QueryProductListRequest) SetPageSize(v int) *QueryProductListRequest {
	s.PageSize = &v
	return s
}

type QueryProductListResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                       `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                       `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryProductListResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryProductListResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryProductListResponse) GoString() string {
	return s.String()
}

func (s *QueryProductListResponse) SetRequestId(v string) *QueryProductListResponse {
	s.RequestId = &v
	return s
}

func (s *QueryProductListResponse) SetSuccess(v bool) *QueryProductListResponse {
	s.Success = &v
	return s
}

func (s *QueryProductListResponse) SetCode(v string) *QueryProductListResponse {
	s.Code = &v
	return s
}

func (s *QueryProductListResponse) SetMessage(v string) *QueryProductListResponse {
	s.Message = &v
	return s
}

func (s *QueryProductListResponse) SetData(v *QueryProductListResponseData) *QueryProductListResponse {
	s.Data = v
	return s
}

type QueryProductListResponseData struct {
	TotalCount  *int                                     `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNum     *int                                     `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize    *int                                     `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	ProductList *QueryProductListResponseDataProductList `json:"ProductList,omitempty" xml:"ProductList,omitempty" require:"true" type:"Struct"`
}

func (s QueryProductListResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryProductListResponseData) GoString() string {
	return s.String()
}

func (s *QueryProductListResponseData) SetTotalCount(v int) *QueryProductListResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryProductListResponseData) SetPageNum(v int) *QueryProductListResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryProductListResponseData) SetPageSize(v int) *QueryProductListResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryProductListResponseData) SetProductList(v *QueryProductListResponseDataProductList) *QueryProductListResponseData {
	s.ProductList = v
	return s
}

type QueryProductListResponseDataProductList struct {
	Product []*QueryProductListResponseDataProductListProduct `json:"Product,omitempty" xml:"Product,omitempty" require:"true" type:"Repeated"`
}

func (s QueryProductListResponseDataProductList) String() string {
	return tea.Prettify(s)
}

func (s QueryProductListResponseDataProductList) GoString() string {
	return s.String()
}

func (s *QueryProductListResponseDataProductList) SetProduct(v []*QueryProductListResponseDataProductListProduct) *QueryProductListResponseDataProductList {
	s.Product = v
	return s
}

type QueryProductListResponseDataProductListProduct struct {
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductName      *string `json:"ProductName,omitempty" xml:"ProductName,omitempty" require:"true"`
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
}

func (s QueryProductListResponseDataProductListProduct) String() string {
	return tea.Prettify(s)
}

func (s QueryProductListResponseDataProductListProduct) GoString() string {
	return s.String()
}

func (s *QueryProductListResponseDataProductListProduct) SetProductCode(v string) *QueryProductListResponseDataProductListProduct {
	s.ProductCode = &v
	return s
}

func (s *QueryProductListResponseDataProductListProduct) SetProductName(v string) *QueryProductListResponseDataProductListProduct {
	s.ProductName = &v
	return s
}

func (s *QueryProductListResponseDataProductListProduct) SetProductType(v string) *QueryProductListResponseDataProductListProduct {
	s.ProductType = &v
	return s
}

func (s *QueryProductListResponseDataProductListProduct) SetSubscriptionType(v string) *QueryProductListResponseDataProductListProduct {
	s.SubscriptionType = &v
	return s
}

type QueryInstanceGaapCostRequest struct {
	PageNum          *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize         *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	BillingCycle     *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
}

func (s QueryInstanceGaapCostRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryInstanceGaapCostRequest) GoString() string {
	return s.String()
}

func (s *QueryInstanceGaapCostRequest) SetPageNum(v int) *QueryInstanceGaapCostRequest {
	s.PageNum = &v
	return s
}

func (s *QueryInstanceGaapCostRequest) SetPageSize(v int) *QueryInstanceGaapCostRequest {
	s.PageSize = &v
	return s
}

func (s *QueryInstanceGaapCostRequest) SetBillingCycle(v string) *QueryInstanceGaapCostRequest {
	s.BillingCycle = &v
	return s
}

func (s *QueryInstanceGaapCostRequest) SetProductCode(v string) *QueryInstanceGaapCostRequest {
	s.ProductCode = &v
	return s
}

func (s *QueryInstanceGaapCostRequest) SetProductType(v string) *QueryInstanceGaapCostRequest {
	s.ProductType = &v
	return s
}

func (s *QueryInstanceGaapCostRequest) SetSubscriptionType(v string) *QueryInstanceGaapCostRequest {
	s.SubscriptionType = &v
	return s
}

type QueryInstanceGaapCostResponse struct {
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                              `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                            `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                            `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryInstanceGaapCostResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryInstanceGaapCostResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryInstanceGaapCostResponse) GoString() string {
	return s.String()
}

func (s *QueryInstanceGaapCostResponse) SetRequestId(v string) *QueryInstanceGaapCostResponse {
	s.RequestId = &v
	return s
}

func (s *QueryInstanceGaapCostResponse) SetSuccess(v bool) *QueryInstanceGaapCostResponse {
	s.Success = &v
	return s
}

func (s *QueryInstanceGaapCostResponse) SetCode(v string) *QueryInstanceGaapCostResponse {
	s.Code = &v
	return s
}

func (s *QueryInstanceGaapCostResponse) SetMessage(v string) *QueryInstanceGaapCostResponse {
	s.Message = &v
	return s
}

func (s *QueryInstanceGaapCostResponse) SetData(v *QueryInstanceGaapCostResponseData) *QueryInstanceGaapCostResponse {
	s.Data = v
	return s
}

type QueryInstanceGaapCostResponseData struct {
	HostId     *string                                   `json:"HostId,omitempty" xml:"HostId,omitempty" require:"true"`
	PageNum    *int                                      `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize   *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Modules    *QueryInstanceGaapCostResponseDataModules `json:"Modules,omitempty" xml:"Modules,omitempty" require:"true" type:"Struct"`
}

func (s QueryInstanceGaapCostResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryInstanceGaapCostResponseData) GoString() string {
	return s.String()
}

func (s *QueryInstanceGaapCostResponseData) SetHostId(v string) *QueryInstanceGaapCostResponseData {
	s.HostId = &v
	return s
}

func (s *QueryInstanceGaapCostResponseData) SetPageNum(v int) *QueryInstanceGaapCostResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryInstanceGaapCostResponseData) SetPageSize(v int) *QueryInstanceGaapCostResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryInstanceGaapCostResponseData) SetTotalCount(v int) *QueryInstanceGaapCostResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseData) SetModules(v *QueryInstanceGaapCostResponseDataModules) *QueryInstanceGaapCostResponseData {
	s.Modules = v
	return s
}

type QueryInstanceGaapCostResponseDataModules struct {
	Module []*QueryInstanceGaapCostResponseDataModulesModule `json:"Module,omitempty" xml:"Module,omitempty" require:"true" type:"Repeated"`
}

func (s QueryInstanceGaapCostResponseDataModules) String() string {
	return tea.Prettify(s)
}

func (s QueryInstanceGaapCostResponseDataModules) GoString() string {
	return s.String()
}

func (s *QueryInstanceGaapCostResponseDataModules) SetModule(v []*QueryInstanceGaapCostResponseDataModulesModule) *QueryInstanceGaapCostResponseDataModules {
	s.Module = v
	return s
}

type QueryInstanceGaapCostResponseDataModulesModule struct {
	BillingCycle                     *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	InstanceID                       *string `json:"InstanceID,omitempty" xml:"InstanceID,omitempty" require:"true"`
	ProductCode                      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType                      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType                 *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	Tag                              *string `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true"`
	ResourceGroup                    *string `json:"ResourceGroup,omitempty" xml:"ResourceGroup,omitempty" require:"true"`
	AccountingUnit                   *string `json:"AccountingUnit,omitempty" xml:"AccountingUnit,omitempty" require:"true"`
	PayerAccount                     *string `json:"PayerAccount,omitempty" xml:"PayerAccount,omitempty" require:"true"`
	OwnerID                          *string `json:"OwnerID,omitempty" xml:"OwnerID,omitempty" require:"true"`
	Region                           *string `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	Currency                         *string `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	PaymentCurrency                  *string `json:"PaymentCurrency,omitempty" xml:"PaymentCurrency,omitempty" require:"true"`
	OrderType                        *string `json:"OrderType,omitempty" xml:"OrderType,omitempty" require:"true"`
	PayTime                          *string `json:"PayTime,omitempty" xml:"PayTime,omitempty" require:"true"`
	PretaxGrossAmount                *string `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	PricingDiscount                  *string `json:"PricingDiscount,omitempty" xml:"PricingDiscount,omitempty" require:"true"`
	DeductedByCoupons                *string `json:"DeductedByCoupons,omitempty" xml:"DeductedByCoupons,omitempty" require:"true"`
	PretaxAmount                     *string `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	PretaxAmountLocal                *string `json:"PretaxAmountLocal,omitempty" xml:"PretaxAmountLocal,omitempty" require:"true"`
	DeductedByCashCoupons            *string `json:"DeductedByCashCoupons,omitempty" xml:"DeductedByCashCoupons,omitempty" require:"true"`
	DeductedByPrepaidCard            *string `json:"DeductedByPrepaidCard,omitempty" xml:"DeductedByPrepaidCard,omitempty" require:"true"`
	PaymentAmount                    *string `json:"PaymentAmount,omitempty" xml:"PaymentAmount,omitempty" require:"true"`
	GaapPretaxGrossAmount            *string `json:"GaapPretaxGrossAmount,omitempty" xml:"GaapPretaxGrossAmount,omitempty" require:"true"`
	GaapPricingDiscount              *string `json:"GaapPricingDiscount,omitempty" xml:"GaapPricingDiscount,omitempty" require:"true"`
	GaapDeductedByCoupons            *string `json:"GaapDeductedByCoupons,omitempty" xml:"GaapDeductedByCoupons,omitempty" require:"true"`
	GaapPretaxAmount                 *string `json:"GaapPretaxAmount,omitempty" xml:"GaapPretaxAmount,omitempty" require:"true"`
	GaapPretaxAmountLocal            *string `json:"GaapPretaxAmountLocal,omitempty" xml:"GaapPretaxAmountLocal,omitempty" require:"true"`
	GaapDeductedByCashCoupons        *string `json:"GaapDeductedByCashCoupons,omitempty" xml:"GaapDeductedByCashCoupons,omitempty" require:"true"`
	GaapDeductedByPrepaidCard        *string `json:"GaapDeductedByPrepaidCard,omitempty" xml:"GaapDeductedByPrepaidCard,omitempty" require:"true"`
	GaapPaymentAmount                *string `json:"GaapPaymentAmount,omitempty" xml:"GaapPaymentAmount,omitempty" require:"true"`
	MonthGaapPretaxGrossAmount       *string `json:"MonthGaapPretaxGrossAmount,omitempty" xml:"MonthGaapPretaxGrossAmount,omitempty" require:"true"`
	MonthGaapPricingDiscount         *string `json:"MonthGaapPricingDiscount,omitempty" xml:"MonthGaapPricingDiscount,omitempty" require:"true"`
	MonthGaapDeductedByCoupons       *string `json:"MonthGaapDeductedByCoupons,omitempty" xml:"MonthGaapDeductedByCoupons,omitempty" require:"true"`
	MonthGaapPretaxAmount            *string `json:"MonthGaapPretaxAmount,omitempty" xml:"MonthGaapPretaxAmount,omitempty" require:"true"`
	MonthGaapPretaxAmountLocal       *string `json:"MonthGaapPretaxAmountLocal,omitempty" xml:"MonthGaapPretaxAmountLocal,omitempty" require:"true"`
	MonthGaapDeductedByCashCoupons   *string `json:"MonthGaapDeductedByCashCoupons,omitempty" xml:"MonthGaapDeductedByCashCoupons,omitempty" require:"true"`
	MonthGaapDeductedByPrepaidCard   *string `json:"MonthGaapDeductedByPrepaidCard,omitempty" xml:"MonthGaapDeductedByPrepaidCard,omitempty" require:"true"`
	MonthGaapPaymentAmount           *string `json:"MonthGaapPaymentAmount,omitempty" xml:"MonthGaapPaymentAmount,omitempty" require:"true"`
	UnallocatedPaymentAmount         *string `json:"UnallocatedPaymentAmount,omitempty" xml:"UnallocatedPaymentAmount,omitempty" require:"true"`
	UsageStartDate                   *string `json:"UsageStartDate,omitempty" xml:"UsageStartDate,omitempty" require:"true"`
	UsageEndDate                     *string `json:"UsageEndDate,omitempty" xml:"UsageEndDate,omitempty" require:"true"`
	BillType                         *string `json:"BillType,omitempty" xml:"BillType,omitempty" require:"true"`
	OrderId                          *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
	SubOrderId                       *string `json:"SubOrderId,omitempty" xml:"SubOrderId,omitempty" require:"true"`
	UnallocatedPretaxGrossAmount     *string `json:"UnallocatedPretaxGrossAmount,omitempty" xml:"UnallocatedPretaxGrossAmount,omitempty" require:"true"`
	UnallocatedPricingDiscount       *string `json:"UnallocatedPricingDiscount,omitempty" xml:"UnallocatedPricingDiscount,omitempty" require:"true"`
	UnallocatedDeductedByCoupons     *string `json:"UnallocatedDeductedByCoupons,omitempty" xml:"UnallocatedDeductedByCoupons,omitempty" require:"true"`
	UnallocatedPretaxAmount          *string `json:"UnallocatedPretaxAmount,omitempty" xml:"UnallocatedPretaxAmount,omitempty" require:"true"`
	UnallocatedPretaxAmountLocal     *string `json:"UnallocatedPretaxAmountLocal,omitempty" xml:"UnallocatedPretaxAmountLocal,omitempty" require:"true"`
	UnallocatedDeductedByCashCoupons *string `json:"UnallocatedDeductedByCashCoupons,omitempty" xml:"UnallocatedDeductedByCashCoupons,omitempty" require:"true"`
	UnallocatedDeductedByPrepaidCard *string `json:"UnallocatedDeductedByPrepaidCard,omitempty" xml:"UnallocatedDeductedByPrepaidCard,omitempty" require:"true"`
}

func (s QueryInstanceGaapCostResponseDataModulesModule) String() string {
	return tea.Prettify(s)
}

func (s QueryInstanceGaapCostResponseDataModulesModule) GoString() string {
	return s.String()
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetBillingCycle(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.BillingCycle = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetInstanceID(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.InstanceID = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetProductCode(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.ProductCode = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetProductType(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.ProductType = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetSubscriptionType(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.SubscriptionType = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetTag(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.Tag = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetResourceGroup(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.ResourceGroup = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetAccountingUnit(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.AccountingUnit = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetPayerAccount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.PayerAccount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetOwnerID(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.OwnerID = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetRegion(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.Region = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetCurrency(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.Currency = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetPaymentCurrency(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.PaymentCurrency = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetOrderType(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.OrderType = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetPayTime(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.PayTime = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetPretaxGrossAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetPricingDiscount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.PricingDiscount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetDeductedByCoupons(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.DeductedByCoupons = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetPretaxAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.PretaxAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetPretaxAmountLocal(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.PretaxAmountLocal = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetDeductedByCashCoupons(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.DeductedByCashCoupons = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetDeductedByPrepaidCard(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.DeductedByPrepaidCard = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetPaymentAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.PaymentAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetGaapPretaxGrossAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.GaapPretaxGrossAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetGaapPricingDiscount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.GaapPricingDiscount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetGaapDeductedByCoupons(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.GaapDeductedByCoupons = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetGaapPretaxAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.GaapPretaxAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetGaapPretaxAmountLocal(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.GaapPretaxAmountLocal = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetGaapDeductedByCashCoupons(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.GaapDeductedByCashCoupons = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetGaapDeductedByPrepaidCard(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.GaapDeductedByPrepaidCard = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetGaapPaymentAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.GaapPaymentAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetMonthGaapPretaxGrossAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.MonthGaapPretaxGrossAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetMonthGaapPricingDiscount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.MonthGaapPricingDiscount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetMonthGaapDeductedByCoupons(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.MonthGaapDeductedByCoupons = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetMonthGaapPretaxAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.MonthGaapPretaxAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetMonthGaapPretaxAmountLocal(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.MonthGaapPretaxAmountLocal = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetMonthGaapDeductedByCashCoupons(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.MonthGaapDeductedByCashCoupons = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetMonthGaapDeductedByPrepaidCard(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.MonthGaapDeductedByPrepaidCard = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetMonthGaapPaymentAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.MonthGaapPaymentAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetUnallocatedPaymentAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.UnallocatedPaymentAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetUsageStartDate(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.UsageStartDate = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetUsageEndDate(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.UsageEndDate = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetBillType(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.BillType = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetOrderId(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.OrderId = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetSubOrderId(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.SubOrderId = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetUnallocatedPretaxGrossAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.UnallocatedPretaxGrossAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetUnallocatedPricingDiscount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.UnallocatedPricingDiscount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetUnallocatedDeductedByCoupons(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.UnallocatedDeductedByCoupons = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetUnallocatedPretaxAmount(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.UnallocatedPretaxAmount = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetUnallocatedPretaxAmountLocal(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.UnallocatedPretaxAmountLocal = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetUnallocatedDeductedByCashCoupons(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.UnallocatedDeductedByCashCoupons = &v
	return s
}

func (s *QueryInstanceGaapCostResponseDataModulesModule) SetUnallocatedDeductedByPrepaidCard(v string) *QueryInstanceGaapCostResponseDataModulesModule {
	s.UnallocatedDeductedByPrepaidCard = &v
	return s
}

type RenewInstanceRequest struct {
	ProductCode *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	InstanceId  *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	RenewPeriod *int    `json:"RenewPeriod,omitempty" xml:"RenewPeriod,omitempty" require:"true"`
	ClientToken *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	ProductType *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
}

func (s RenewInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RenewInstanceRequest) GoString() string {
	return s.String()
}

func (s *RenewInstanceRequest) SetProductCode(v string) *RenewInstanceRequest {
	s.ProductCode = &v
	return s
}

func (s *RenewInstanceRequest) SetInstanceId(v string) *RenewInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *RenewInstanceRequest) SetRenewPeriod(v int) *RenewInstanceRequest {
	s.RenewPeriod = &v
	return s
}

func (s *RenewInstanceRequest) SetClientToken(v string) *RenewInstanceRequest {
	s.ClientToken = &v
	return s
}

func (s *RenewInstanceRequest) SetProductType(v string) *RenewInstanceRequest {
	s.ProductType = &v
	return s
}

type RenewInstanceResponse struct {
	RequestId *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                      `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                    `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                    `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *RenewInstanceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RenewInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s RenewInstanceResponse) GoString() string {
	return s.String()
}

func (s *RenewInstanceResponse) SetRequestId(v string) *RenewInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *RenewInstanceResponse) SetSuccess(v bool) *RenewInstanceResponse {
	s.Success = &v
	return s
}

func (s *RenewInstanceResponse) SetCode(v string) *RenewInstanceResponse {
	s.Code = &v
	return s
}

func (s *RenewInstanceResponse) SetMessage(v string) *RenewInstanceResponse {
	s.Message = &v
	return s
}

func (s *RenewInstanceResponse) SetData(v *RenewInstanceResponseData) *RenewInstanceResponse {
	s.Data = v
	return s
}

type RenewInstanceResponseData struct {
	OrderId *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
}

func (s RenewInstanceResponseData) String() string {
	return tea.Prettify(s)
}

func (s RenewInstanceResponseData) GoString() string {
	return s.String()
}

func (s *RenewInstanceResponseData) SetOrderId(v string) *RenewInstanceResponseData {
	s.OrderId = &v
	return s
}

type GetOrderDetailRequest struct {
	OrderId *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
}

func (s GetOrderDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s GetOrderDetailRequest) GoString() string {
	return s.String()
}

func (s *GetOrderDetailRequest) SetOrderId(v string) *GetOrderDetailRequest {
	s.OrderId = &v
	return s
}

type GetOrderDetailResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                       `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                     `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                     `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *GetOrderDetailResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetOrderDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s GetOrderDetailResponse) GoString() string {
	return s.String()
}

func (s *GetOrderDetailResponse) SetRequestId(v string) *GetOrderDetailResponse {
	s.RequestId = &v
	return s
}

func (s *GetOrderDetailResponse) SetSuccess(v bool) *GetOrderDetailResponse {
	s.Success = &v
	return s
}

func (s *GetOrderDetailResponse) SetCode(v string) *GetOrderDetailResponse {
	s.Code = &v
	return s
}

func (s *GetOrderDetailResponse) SetMessage(v string) *GetOrderDetailResponse {
	s.Message = &v
	return s
}

func (s *GetOrderDetailResponse) SetData(v *GetOrderDetailResponseData) *GetOrderDetailResponse {
	s.Data = v
	return s
}

type GetOrderDetailResponseData struct {
	HostName   *string                              `json:"HostName,omitempty" xml:"HostName,omitempty" require:"true"`
	PageNum    *int                                 `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize   *int                                 `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	OrderList  *GetOrderDetailResponseDataOrderList `json:"OrderList,omitempty" xml:"OrderList,omitempty" require:"true" type:"Struct"`
}

func (s GetOrderDetailResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetOrderDetailResponseData) GoString() string {
	return s.String()
}

func (s *GetOrderDetailResponseData) SetHostName(v string) *GetOrderDetailResponseData {
	s.HostName = &v
	return s
}

func (s *GetOrderDetailResponseData) SetPageNum(v int) *GetOrderDetailResponseData {
	s.PageNum = &v
	return s
}

func (s *GetOrderDetailResponseData) SetPageSize(v int) *GetOrderDetailResponseData {
	s.PageSize = &v
	return s
}

func (s *GetOrderDetailResponseData) SetTotalCount(v int) *GetOrderDetailResponseData {
	s.TotalCount = &v
	return s
}

func (s *GetOrderDetailResponseData) SetOrderList(v *GetOrderDetailResponseDataOrderList) *GetOrderDetailResponseData {
	s.OrderList = v
	return s
}

type GetOrderDetailResponseDataOrderList struct {
	Order []*GetOrderDetailResponseDataOrderListOrder `json:"Order,omitempty" xml:"Order,omitempty" require:"true" type:"Repeated"`
}

func (s GetOrderDetailResponseDataOrderList) String() string {
	return tea.Prettify(s)
}

func (s GetOrderDetailResponseDataOrderList) GoString() string {
	return s.String()
}

func (s *GetOrderDetailResponseDataOrderList) SetOrder(v []*GetOrderDetailResponseDataOrderListOrder) *GetOrderDetailResponseDataOrderList {
	s.Order = v
	return s
}

type GetOrderDetailResponseDataOrderListOrder struct {
	OrderId           *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
	SubOrderId        *string `json:"SubOrderId,omitempty" xml:"SubOrderId,omitempty" require:"true"`
	ProductCode       *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType       *string `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType  *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	OrderType         *string `json:"OrderType,omitempty" xml:"OrderType,omitempty" require:"true"`
	CreateTime        *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	PaymentTime       *string `json:"PaymentTime,omitempty" xml:"PaymentTime,omitempty" require:"true"`
	PaymentStatus     *string `json:"PaymentStatus,omitempty" xml:"PaymentStatus,omitempty" require:"true"`
	Region            *string `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	Config            *string `json:"Config,omitempty" xml:"Config,omitempty" require:"true"`
	Quantity          *string `json:"Quantity,omitempty" xml:"Quantity,omitempty" require:"true"`
	UsageStartTime    *string `json:"UsageStartTime,omitempty" xml:"UsageStartTime,omitempty" require:"true"`
	UsageEndTime      *string `json:"UsageEndTime,omitempty" xml:"UsageEndTime,omitempty" require:"true"`
	InstanceIDs       *string `json:"InstanceIDs,omitempty" xml:"InstanceIDs,omitempty" require:"true"`
	PretaxGrossAmount *string `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	PretaxAmount      *string `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	Currency          *string `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	PretaxAmountLocal *string `json:"PretaxAmountLocal,omitempty" xml:"PretaxAmountLocal,omitempty" require:"true"`
	Tax               *string `json:"Tax,omitempty" xml:"Tax,omitempty" require:"true"`
	AfterTaxAmount    *string `json:"AfterTaxAmount,omitempty" xml:"AfterTaxAmount,omitempty" require:"true"`
	PaymentCurrency   *string `json:"PaymentCurrency,omitempty" xml:"PaymentCurrency,omitempty" require:"true"`
	Operator          *string `json:"Operator,omitempty" xml:"Operator,omitempty" require:"true"`
	RelatedOrderId    *string `json:"RelatedOrderId,omitempty" xml:"RelatedOrderId,omitempty" require:"true"`
	OrderSubType      *string `json:"OrderSubType,omitempty" xml:"OrderSubType,omitempty" require:"true"`
	OriginalConfig    *string `json:"OriginalConfig,omitempty" xml:"OriginalConfig,omitempty" require:"true"`
}

func (s GetOrderDetailResponseDataOrderListOrder) String() string {
	return tea.Prettify(s)
}

func (s GetOrderDetailResponseDataOrderListOrder) GoString() string {
	return s.String()
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetOrderId(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.OrderId = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetSubOrderId(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.SubOrderId = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetProductCode(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.ProductCode = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetProductType(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.ProductType = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetSubscriptionType(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.SubscriptionType = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetOrderType(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.OrderType = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetCreateTime(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.CreateTime = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetPaymentTime(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.PaymentTime = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetPaymentStatus(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.PaymentStatus = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetRegion(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.Region = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetConfig(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.Config = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetQuantity(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.Quantity = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetUsageStartTime(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.UsageStartTime = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetUsageEndTime(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.UsageEndTime = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetInstanceIDs(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.InstanceIDs = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetPretaxGrossAmount(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.PretaxGrossAmount = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetPretaxAmount(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.PretaxAmount = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetCurrency(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.Currency = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetPretaxAmountLocal(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.PretaxAmountLocal = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetTax(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.Tax = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetAfterTaxAmount(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.AfterTaxAmount = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetPaymentCurrency(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.PaymentCurrency = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetOperator(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.Operator = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetRelatedOrderId(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.RelatedOrderId = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetOrderSubType(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.OrderSubType = &v
	return s
}

func (s *GetOrderDetailResponseDataOrderListOrder) SetOriginalConfig(v string) *GetOrderDetailResponseDataOrderListOrder {
	s.OriginalConfig = &v
	return s
}

type QueryOrdersRequest struct {
	CreateTimeEnd    *string `json:"CreateTimeEnd,omitempty" xml:"CreateTimeEnd,omitempty"`
	PageNum          *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize         *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
	OrderType        *string `json:"OrderType,omitempty" xml:"OrderType,omitempty"`
	PaymentStatus    *string `json:"PaymentStatus,omitempty" xml:"PaymentStatus,omitempty"`
	CreateTimeStart  *string `json:"CreateTimeStart,omitempty" xml:"CreateTimeStart,omitempty"`
}

func (s QueryOrdersRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryOrdersRequest) GoString() string {
	return s.String()
}

func (s *QueryOrdersRequest) SetCreateTimeEnd(v string) *QueryOrdersRequest {
	s.CreateTimeEnd = &v
	return s
}

func (s *QueryOrdersRequest) SetPageNum(v int) *QueryOrdersRequest {
	s.PageNum = &v
	return s
}

func (s *QueryOrdersRequest) SetPageSize(v int) *QueryOrdersRequest {
	s.PageSize = &v
	return s
}

func (s *QueryOrdersRequest) SetProductCode(v string) *QueryOrdersRequest {
	s.ProductCode = &v
	return s
}

func (s *QueryOrdersRequest) SetProductType(v string) *QueryOrdersRequest {
	s.ProductType = &v
	return s
}

func (s *QueryOrdersRequest) SetSubscriptionType(v string) *QueryOrdersRequest {
	s.SubscriptionType = &v
	return s
}

func (s *QueryOrdersRequest) SetOrderType(v string) *QueryOrdersRequest {
	s.OrderType = &v
	return s
}

func (s *QueryOrdersRequest) SetPaymentStatus(v string) *QueryOrdersRequest {
	s.PaymentStatus = &v
	return s
}

func (s *QueryOrdersRequest) SetCreateTimeStart(v string) *QueryOrdersRequest {
	s.CreateTimeStart = &v
	return s
}

type QueryOrdersResponse struct {
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                    `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                  `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                  `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryOrdersResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryOrdersResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryOrdersResponse) GoString() string {
	return s.String()
}

func (s *QueryOrdersResponse) SetRequestId(v string) *QueryOrdersResponse {
	s.RequestId = &v
	return s
}

func (s *QueryOrdersResponse) SetSuccess(v bool) *QueryOrdersResponse {
	s.Success = &v
	return s
}

func (s *QueryOrdersResponse) SetCode(v string) *QueryOrdersResponse {
	s.Code = &v
	return s
}

func (s *QueryOrdersResponse) SetMessage(v string) *QueryOrdersResponse {
	s.Message = &v
	return s
}

func (s *QueryOrdersResponse) SetData(v *QueryOrdersResponseData) *QueryOrdersResponse {
	s.Data = v
	return s
}

type QueryOrdersResponseData struct {
	HostName   *string                           `json:"HostName,omitempty" xml:"HostName,omitempty" require:"true"`
	PageNum    *int                              `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize   *int                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                              `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	OrderList  *QueryOrdersResponseDataOrderList `json:"OrderList,omitempty" xml:"OrderList,omitempty" require:"true" type:"Struct"`
}

func (s QueryOrdersResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryOrdersResponseData) GoString() string {
	return s.String()
}

func (s *QueryOrdersResponseData) SetHostName(v string) *QueryOrdersResponseData {
	s.HostName = &v
	return s
}

func (s *QueryOrdersResponseData) SetPageNum(v int) *QueryOrdersResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryOrdersResponseData) SetPageSize(v int) *QueryOrdersResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryOrdersResponseData) SetTotalCount(v int) *QueryOrdersResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryOrdersResponseData) SetOrderList(v *QueryOrdersResponseDataOrderList) *QueryOrdersResponseData {
	s.OrderList = v
	return s
}

type QueryOrdersResponseDataOrderList struct {
	Order []*QueryOrdersResponseDataOrderListOrder `json:"Order,omitempty" xml:"Order,omitempty" require:"true" type:"Repeated"`
}

func (s QueryOrdersResponseDataOrderList) String() string {
	return tea.Prettify(s)
}

func (s QueryOrdersResponseDataOrderList) GoString() string {
	return s.String()
}

func (s *QueryOrdersResponseDataOrderList) SetOrder(v []*QueryOrdersResponseDataOrderListOrder) *QueryOrdersResponseDataOrderList {
	s.Order = v
	return s
}

type QueryOrdersResponseDataOrderListOrder struct {
	OrderId           *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
	ProductCode       *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType       *string `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType  *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	OrderType         *string `json:"OrderType,omitempty" xml:"OrderType,omitempty" require:"true"`
	CreateTime        *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	PaymentTime       *string `json:"PaymentTime,omitempty" xml:"PaymentTime,omitempty" require:"true"`
	PaymentStatus     *string `json:"PaymentStatus,omitempty" xml:"PaymentStatus,omitempty" require:"true"`
	PretaxGrossAmount *string `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	PretaxAmount      *string `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	Currency          *string `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	PretaxAmountLocal *string `json:"PretaxAmountLocal,omitempty" xml:"PretaxAmountLocal,omitempty" require:"true"`
	Tax               *string `json:"Tax,omitempty" xml:"Tax,omitempty" require:"true"`
	AfterTaxAmount    *string `json:"AfterTaxAmount,omitempty" xml:"AfterTaxAmount,omitempty" require:"true"`
	PaymentCurrency   *string `json:"PaymentCurrency,omitempty" xml:"PaymentCurrency,omitempty" require:"true"`
	RelatedOrderId    *string `json:"RelatedOrderId,omitempty" xml:"RelatedOrderId,omitempty" require:"true"`
}

func (s QueryOrdersResponseDataOrderListOrder) String() string {
	return tea.Prettify(s)
}

func (s QueryOrdersResponseDataOrderListOrder) GoString() string {
	return s.String()
}

func (s *QueryOrdersResponseDataOrderListOrder) SetOrderId(v string) *QueryOrdersResponseDataOrderListOrder {
	s.OrderId = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetProductCode(v string) *QueryOrdersResponseDataOrderListOrder {
	s.ProductCode = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetProductType(v string) *QueryOrdersResponseDataOrderListOrder {
	s.ProductType = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetSubscriptionType(v string) *QueryOrdersResponseDataOrderListOrder {
	s.SubscriptionType = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetOrderType(v string) *QueryOrdersResponseDataOrderListOrder {
	s.OrderType = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetCreateTime(v string) *QueryOrdersResponseDataOrderListOrder {
	s.CreateTime = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetPaymentTime(v string) *QueryOrdersResponseDataOrderListOrder {
	s.PaymentTime = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetPaymentStatus(v string) *QueryOrdersResponseDataOrderListOrder {
	s.PaymentStatus = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetPretaxGrossAmount(v string) *QueryOrdersResponseDataOrderListOrder {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetPretaxAmount(v string) *QueryOrdersResponseDataOrderListOrder {
	s.PretaxAmount = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetCurrency(v string) *QueryOrdersResponseDataOrderListOrder {
	s.Currency = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetPretaxAmountLocal(v string) *QueryOrdersResponseDataOrderListOrder {
	s.PretaxAmountLocal = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetTax(v string) *QueryOrdersResponseDataOrderListOrder {
	s.Tax = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetAfterTaxAmount(v string) *QueryOrdersResponseDataOrderListOrder {
	s.AfterTaxAmount = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetPaymentCurrency(v string) *QueryOrdersResponseDataOrderListOrder {
	s.PaymentCurrency = &v
	return s
}

func (s *QueryOrdersResponseDataOrderListOrder) SetRelatedOrderId(v string) *QueryOrdersResponseDataOrderListOrder {
	s.RelatedOrderId = &v
	return s
}

type QueryMonthlyInstanceConsumptionRequest struct {
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	PageNum          *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize         *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	BillingCycle     *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
}

func (s QueryMonthlyInstanceConsumptionRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryMonthlyInstanceConsumptionRequest) GoString() string {
	return s.String()
}

func (s *QueryMonthlyInstanceConsumptionRequest) SetProductCode(v string) *QueryMonthlyInstanceConsumptionRequest {
	s.ProductCode = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionRequest) SetPageNum(v int) *QueryMonthlyInstanceConsumptionRequest {
	s.PageNum = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionRequest) SetPageSize(v int) *QueryMonthlyInstanceConsumptionRequest {
	s.PageSize = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionRequest) SetBillingCycle(v string) *QueryMonthlyInstanceConsumptionRequest {
	s.BillingCycle = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionRequest) SetProductType(v string) *QueryMonthlyInstanceConsumptionRequest {
	s.ProductType = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionRequest) SetSubscriptionType(v string) *QueryMonthlyInstanceConsumptionRequest {
	s.SubscriptionType = &v
	return s
}

type QueryMonthlyInstanceConsumptionResponse struct {
	RequestId *string                                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                        `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                                      `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                                      `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryMonthlyInstanceConsumptionResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryMonthlyInstanceConsumptionResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryMonthlyInstanceConsumptionResponse) GoString() string {
	return s.String()
}

func (s *QueryMonthlyInstanceConsumptionResponse) SetRequestId(v string) *QueryMonthlyInstanceConsumptionResponse {
	s.RequestId = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponse) SetSuccess(v bool) *QueryMonthlyInstanceConsumptionResponse {
	s.Success = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponse) SetCode(v string) *QueryMonthlyInstanceConsumptionResponse {
	s.Code = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponse) SetMessage(v string) *QueryMonthlyInstanceConsumptionResponse {
	s.Message = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponse) SetData(v *QueryMonthlyInstanceConsumptionResponseData) *QueryMonthlyInstanceConsumptionResponse {
	s.Data = v
	return s
}

type QueryMonthlyInstanceConsumptionResponseData struct {
	PageNum      *int                                              `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize     *int                                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount   *int                                              `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	BillingCycle *string                                           `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	Items        *QueryMonthlyInstanceConsumptionResponseDataItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s QueryMonthlyInstanceConsumptionResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryMonthlyInstanceConsumptionResponseData) GoString() string {
	return s.String()
}

func (s *QueryMonthlyInstanceConsumptionResponseData) SetPageNum(v int) *QueryMonthlyInstanceConsumptionResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseData) SetPageSize(v int) *QueryMonthlyInstanceConsumptionResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseData) SetTotalCount(v int) *QueryMonthlyInstanceConsumptionResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseData) SetBillingCycle(v string) *QueryMonthlyInstanceConsumptionResponseData {
	s.BillingCycle = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseData) SetItems(v *QueryMonthlyInstanceConsumptionResponseDataItems) *QueryMonthlyInstanceConsumptionResponseData {
	s.Items = v
	return s
}

type QueryMonthlyInstanceConsumptionResponseDataItems struct {
	Item []*QueryMonthlyInstanceConsumptionResponseDataItemsItem `json:"Item,omitempty" xml:"Item,omitempty" require:"true" type:"Repeated"`
}

func (s QueryMonthlyInstanceConsumptionResponseDataItems) String() string {
	return tea.Prettify(s)
}

func (s QueryMonthlyInstanceConsumptionResponseDataItems) GoString() string {
	return s.String()
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItems) SetItem(v []*QueryMonthlyInstanceConsumptionResponseDataItemsItem) *QueryMonthlyInstanceConsumptionResponseDataItems {
	s.Item = v
	return s
}

type QueryMonthlyInstanceConsumptionResponseDataItemsItem struct {
	InstanceID        *string  `json:"InstanceID,omitempty" xml:"InstanceID,omitempty" require:"true"`
	ProductCode       *string  `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType       *string  `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType  *string  `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	Tag               *string  `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true"`
	ResourceGroup     *string  `json:"ResourceGroup,omitempty" xml:"ResourceGroup,omitempty" require:"true"`
	PayerAccount      *string  `json:"PayerAccount,omitempty" xml:"PayerAccount,omitempty" require:"true"`
	OwnerID           *string  `json:"OwnerID,omitempty" xml:"OwnerID,omitempty" require:"true"`
	Region            *string  `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	PretaxGrossAmount *float32 `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	DiscountAmount    *float32 `json:"DiscountAmount,omitempty" xml:"DiscountAmount,omitempty" require:"true"`
	PretaxAmount      *float32 `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	Currency          *string  `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	PretaxAmountLocal *float32 `json:"PretaxAmountLocal,omitempty" xml:"PretaxAmountLocal,omitempty" require:"true"`
	Tax               *float32 `json:"Tax,omitempty" xml:"Tax,omitempty" require:"true"`
	AfterTaxAmount    *float32 `json:"AfterTaxAmount,omitempty" xml:"AfterTaxAmount,omitempty" require:"true"`
	PaymentCurrency   *string  `json:"PaymentCurrency,omitempty" xml:"PaymentCurrency,omitempty" require:"true"`
}

func (s QueryMonthlyInstanceConsumptionResponseDataItemsItem) String() string {
	return tea.Prettify(s)
}

func (s QueryMonthlyInstanceConsumptionResponseDataItemsItem) GoString() string {
	return s.String()
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetInstanceID(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.InstanceID = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetProductCode(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.ProductCode = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetProductType(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.ProductType = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetSubscriptionType(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.SubscriptionType = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetTag(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.Tag = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetResourceGroup(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.ResourceGroup = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetPayerAccount(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.PayerAccount = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetOwnerID(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.OwnerID = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetRegion(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.Region = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetPretaxGrossAmount(v float32) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetDiscountAmount(v float32) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.DiscountAmount = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetPretaxAmount(v float32) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.PretaxAmount = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetCurrency(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.Currency = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetPretaxAmountLocal(v float32) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.PretaxAmountLocal = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetTax(v float32) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.Tax = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetAfterTaxAmount(v float32) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.AfterTaxAmount = &v
	return s
}

func (s *QueryMonthlyInstanceConsumptionResponseDataItemsItem) SetPaymentCurrency(v string) *QueryMonthlyInstanceConsumptionResponseDataItemsItem {
	s.PaymentCurrency = &v
	return s
}

type QuerySettlementBillRequest struct {
	PageSize         *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNum          *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	BillingCycle     *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	StartTime        *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime          *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
	Type             *string `json:"Type,omitempty" xml:"Type,omitempty"`
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
	IsHideZeroCharge *bool   `json:"IsHideZeroCharge,omitempty" xml:"IsHideZeroCharge,omitempty"`
}

func (s QuerySettlementBillRequest) String() string {
	return tea.Prettify(s)
}

func (s QuerySettlementBillRequest) GoString() string {
	return s.String()
}

func (s *QuerySettlementBillRequest) SetPageSize(v int) *QuerySettlementBillRequest {
	s.PageSize = &v
	return s
}

func (s *QuerySettlementBillRequest) SetPageNum(v int) *QuerySettlementBillRequest {
	s.PageNum = &v
	return s
}

func (s *QuerySettlementBillRequest) SetBillingCycle(v string) *QuerySettlementBillRequest {
	s.BillingCycle = &v
	return s
}

func (s *QuerySettlementBillRequest) SetStartTime(v string) *QuerySettlementBillRequest {
	s.StartTime = &v
	return s
}

func (s *QuerySettlementBillRequest) SetEndTime(v string) *QuerySettlementBillRequest {
	s.EndTime = &v
	return s
}

func (s *QuerySettlementBillRequest) SetType(v string) *QuerySettlementBillRequest {
	s.Type = &v
	return s
}

func (s *QuerySettlementBillRequest) SetProductCode(v string) *QuerySettlementBillRequest {
	s.ProductCode = &v
	return s
}

func (s *QuerySettlementBillRequest) SetProductType(v string) *QuerySettlementBillRequest {
	s.ProductType = &v
	return s
}

func (s *QuerySettlementBillRequest) SetSubscriptionType(v string) *QuerySettlementBillRequest {
	s.SubscriptionType = &v
	return s
}

func (s *QuerySettlementBillRequest) SetIsHideZeroCharge(v bool) *QuerySettlementBillRequest {
	s.IsHideZeroCharge = &v
	return s
}

type QuerySettlementBillResponse struct {
	RequestId *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                            `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                          `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                          `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QuerySettlementBillResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QuerySettlementBillResponse) String() string {
	return tea.Prettify(s)
}

func (s QuerySettlementBillResponse) GoString() string {
	return s.String()
}

func (s *QuerySettlementBillResponse) SetRequestId(v string) *QuerySettlementBillResponse {
	s.RequestId = &v
	return s
}

func (s *QuerySettlementBillResponse) SetSuccess(v bool) *QuerySettlementBillResponse {
	s.Success = &v
	return s
}

func (s *QuerySettlementBillResponse) SetCode(v string) *QuerySettlementBillResponse {
	s.Code = &v
	return s
}

func (s *QuerySettlementBillResponse) SetMessage(v string) *QuerySettlementBillResponse {
	s.Message = &v
	return s
}

func (s *QuerySettlementBillResponse) SetData(v *QuerySettlementBillResponseData) *QuerySettlementBillResponse {
	s.Data = v
	return s
}

type QuerySettlementBillResponseData struct {
	PageNum      *int                                  `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize     *int                                  `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount   *int                                  `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	BillingCycle *string                               `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	Items        *QuerySettlementBillResponseDataItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s QuerySettlementBillResponseData) String() string {
	return tea.Prettify(s)
}

func (s QuerySettlementBillResponseData) GoString() string {
	return s.String()
}

func (s *QuerySettlementBillResponseData) SetPageNum(v int) *QuerySettlementBillResponseData {
	s.PageNum = &v
	return s
}

func (s *QuerySettlementBillResponseData) SetPageSize(v int) *QuerySettlementBillResponseData {
	s.PageSize = &v
	return s
}

func (s *QuerySettlementBillResponseData) SetTotalCount(v int) *QuerySettlementBillResponseData {
	s.TotalCount = &v
	return s
}

func (s *QuerySettlementBillResponseData) SetBillingCycle(v string) *QuerySettlementBillResponseData {
	s.BillingCycle = &v
	return s
}

func (s *QuerySettlementBillResponseData) SetItems(v *QuerySettlementBillResponseDataItems) *QuerySettlementBillResponseData {
	s.Items = v
	return s
}

type QuerySettlementBillResponseDataItems struct {
	Item []*QuerySettlementBillResponseDataItemsItem `json:"Item,omitempty" xml:"Item,omitempty" require:"true" type:"Repeated"`
}

func (s QuerySettlementBillResponseDataItems) String() string {
	return tea.Prettify(s)
}

func (s QuerySettlementBillResponseDataItems) GoString() string {
	return s.String()
}

func (s *QuerySettlementBillResponseDataItems) SetItem(v []*QuerySettlementBillResponseDataItemsItem) *QuerySettlementBillResponseDataItems {
	s.Item = v
	return s
}

type QuerySettlementBillResponseDataItemsItem struct {
	RecordID                    *string  `json:"RecordID,omitempty" xml:"RecordID,omitempty" require:"true"`
	Item                        *string  `json:"Item,omitempty" xml:"Item,omitempty" require:"true"`
	PayerAccount                *string  `json:"PayerAccount,omitempty" xml:"PayerAccount,omitempty" require:"true"`
	OwnerID                     *string  `json:"OwnerID,omitempty" xml:"OwnerID,omitempty" require:"true"`
	CreateTime                  *string  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	UsageStartTime              *string  `json:"UsageStartTime,omitempty" xml:"UsageStartTime,omitempty" require:"true"`
	UsageEndTime                *string  `json:"UsageEndTime,omitempty" xml:"UsageEndTime,omitempty" require:"true"`
	SuborderID                  *string  `json:"SuborderID,omitempty" xml:"SuborderID,omitempty" require:"true"`
	OrderID                     *string  `json:"OrderID,omitempty" xml:"OrderID,omitempty" require:"true"`
	OrderType                   *string  `json:"OrderType,omitempty" xml:"OrderType,omitempty" require:"true"`
	LinkedCustomerOrderID       *string  `json:"LinkedCustomerOrderID,omitempty" xml:"LinkedCustomerOrderID,omitempty" require:"true"`
	OriginalOrderID             *string  `json:"OriginalOrderID,omitempty" xml:"OriginalOrderID,omitempty" require:"true"`
	PaymentTime                 *string  `json:"PaymentTime,omitempty" xml:"PaymentTime,omitempty" require:"true"`
	SolutionID                  *string  `json:"SolutionID,omitempty" xml:"SolutionID,omitempty" require:"true"`
	SolutionName                *string  `json:"SolutionName,omitempty" xml:"SolutionName,omitempty" require:"true"`
	BillID                      *string  `json:"BillID,omitempty" xml:"BillID,omitempty" require:"true"`
	ProductCode                 *string  `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType                 *string  `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType            *string  `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	Region                      *string  `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	Config                      *string  `json:"Config,omitempty" xml:"Config,omitempty" require:"true"`
	Quantity                    *string  `json:"Quantity,omitempty" xml:"Quantity,omitempty" require:"true"`
	PretaxGrossAmount           *float32 `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	ChargeDiscount              *float32 `json:"ChargeDiscount,omitempty" xml:"ChargeDiscount,omitempty" require:"true"`
	DeductedByCoupons           *float32 `json:"DeductedByCoupons,omitempty" xml:"DeductedByCoupons,omitempty" require:"true"`
	AccountDiscount             *float32 `json:"AccountDiscount,omitempty" xml:"AccountDiscount,omitempty" require:"true"`
	Promotion                   *string  `json:"Promotion,omitempty" xml:"Promotion,omitempty" require:"true"`
	PretaxAmount                *float32 `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	Currency                    *string  `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	PretaxAmountLocal           *float32 `json:"PretaxAmountLocal,omitempty" xml:"PretaxAmountLocal,omitempty" require:"true"`
	PreviousBillingCycleBalance *float32 `json:"PreviousBillingCycleBalance,omitempty" xml:"PreviousBillingCycleBalance,omitempty" require:"true"`
	Tax                         *float32 `json:"Tax,omitempty" xml:"Tax,omitempty" require:"true"`
	AfterTaxAmount              *float32 `json:"AfterTaxAmount,omitempty" xml:"AfterTaxAmount,omitempty" require:"true"`
	Status                      *string  `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	ClearedTime                 *string  `json:"ClearedTime,omitempty" xml:"ClearedTime,omitempty" require:"true"`
	OutstandingAmount           *float32 `json:"OutstandingAmount,omitempty" xml:"OutstandingAmount,omitempty" require:"true"`
	DeductedByCashCoupons       *float32 `json:"DeductedByCashCoupons,omitempty" xml:"DeductedByCashCoupons,omitempty" require:"true"`
	DeductedByPrepaidCard       *float32 `json:"DeductedByPrepaidCard,omitempty" xml:"DeductedByPrepaidCard,omitempty" require:"true"`
	MybankPaymentAmount         *float32 `json:"MybankPaymentAmount,omitempty" xml:"MybankPaymentAmount,omitempty" require:"true"`
	PaymentAmount               *float32 `json:"PaymentAmount,omitempty" xml:"PaymentAmount,omitempty" require:"true"`
	PaymentCurrency             *string  `json:"PaymentCurrency,omitempty" xml:"PaymentCurrency,omitempty" require:"true"`
	Seller                      *string  `json:"Seller,omitempty" xml:"Seller,omitempty" require:"true"`
	InvoiceNo                   *string  `json:"InvoiceNo,omitempty" xml:"InvoiceNo,omitempty" require:"true"`
}

func (s QuerySettlementBillResponseDataItemsItem) String() string {
	return tea.Prettify(s)
}

func (s QuerySettlementBillResponseDataItemsItem) GoString() string {
	return s.String()
}

func (s *QuerySettlementBillResponseDataItemsItem) SetRecordID(v string) *QuerySettlementBillResponseDataItemsItem {
	s.RecordID = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetItem(v string) *QuerySettlementBillResponseDataItemsItem {
	s.Item = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetPayerAccount(v string) *QuerySettlementBillResponseDataItemsItem {
	s.PayerAccount = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetOwnerID(v string) *QuerySettlementBillResponseDataItemsItem {
	s.OwnerID = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetCreateTime(v string) *QuerySettlementBillResponseDataItemsItem {
	s.CreateTime = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetUsageStartTime(v string) *QuerySettlementBillResponseDataItemsItem {
	s.UsageStartTime = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetUsageEndTime(v string) *QuerySettlementBillResponseDataItemsItem {
	s.UsageEndTime = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetSuborderID(v string) *QuerySettlementBillResponseDataItemsItem {
	s.SuborderID = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetOrderID(v string) *QuerySettlementBillResponseDataItemsItem {
	s.OrderID = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetOrderType(v string) *QuerySettlementBillResponseDataItemsItem {
	s.OrderType = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetLinkedCustomerOrderID(v string) *QuerySettlementBillResponseDataItemsItem {
	s.LinkedCustomerOrderID = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetOriginalOrderID(v string) *QuerySettlementBillResponseDataItemsItem {
	s.OriginalOrderID = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetPaymentTime(v string) *QuerySettlementBillResponseDataItemsItem {
	s.PaymentTime = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetSolutionID(v string) *QuerySettlementBillResponseDataItemsItem {
	s.SolutionID = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetSolutionName(v string) *QuerySettlementBillResponseDataItemsItem {
	s.SolutionName = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetBillID(v string) *QuerySettlementBillResponseDataItemsItem {
	s.BillID = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetProductCode(v string) *QuerySettlementBillResponseDataItemsItem {
	s.ProductCode = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetProductType(v string) *QuerySettlementBillResponseDataItemsItem {
	s.ProductType = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetSubscriptionType(v string) *QuerySettlementBillResponseDataItemsItem {
	s.SubscriptionType = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetRegion(v string) *QuerySettlementBillResponseDataItemsItem {
	s.Region = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetConfig(v string) *QuerySettlementBillResponseDataItemsItem {
	s.Config = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetQuantity(v string) *QuerySettlementBillResponseDataItemsItem {
	s.Quantity = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetPretaxGrossAmount(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetChargeDiscount(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.ChargeDiscount = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetDeductedByCoupons(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.DeductedByCoupons = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetAccountDiscount(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.AccountDiscount = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetPromotion(v string) *QuerySettlementBillResponseDataItemsItem {
	s.Promotion = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetPretaxAmount(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.PretaxAmount = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetCurrency(v string) *QuerySettlementBillResponseDataItemsItem {
	s.Currency = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetPretaxAmountLocal(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.PretaxAmountLocal = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetPreviousBillingCycleBalance(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.PreviousBillingCycleBalance = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetTax(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.Tax = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetAfterTaxAmount(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.AfterTaxAmount = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetStatus(v string) *QuerySettlementBillResponseDataItemsItem {
	s.Status = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetClearedTime(v string) *QuerySettlementBillResponseDataItemsItem {
	s.ClearedTime = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetOutstandingAmount(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.OutstandingAmount = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetDeductedByCashCoupons(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.DeductedByCashCoupons = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetDeductedByPrepaidCard(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.DeductedByPrepaidCard = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetMybankPaymentAmount(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.MybankPaymentAmount = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetPaymentAmount(v float32) *QuerySettlementBillResponseDataItemsItem {
	s.PaymentAmount = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetPaymentCurrency(v string) *QuerySettlementBillResponseDataItemsItem {
	s.PaymentCurrency = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetSeller(v string) *QuerySettlementBillResponseDataItemsItem {
	s.Seller = &v
	return s
}

func (s *QuerySettlementBillResponseDataItemsItem) SetInvoiceNo(v string) *QuerySettlementBillResponseDataItemsItem {
	s.InvoiceNo = &v
	return s
}

type QueryMonthlyBillRequest struct {
	BillingCycle *string `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
}

func (s QueryMonthlyBillRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryMonthlyBillRequest) GoString() string {
	return s.String()
}

func (s *QueryMonthlyBillRequest) SetBillingCycle(v string) *QueryMonthlyBillRequest {
	s.BillingCycle = &v
	return s
}

type QueryMonthlyBillResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                       `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                       `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryMonthlyBillResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryMonthlyBillResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryMonthlyBillResponse) GoString() string {
	return s.String()
}

func (s *QueryMonthlyBillResponse) SetRequestId(v string) *QueryMonthlyBillResponse {
	s.RequestId = &v
	return s
}

func (s *QueryMonthlyBillResponse) SetSuccess(v bool) *QueryMonthlyBillResponse {
	s.Success = &v
	return s
}

func (s *QueryMonthlyBillResponse) SetCode(v string) *QueryMonthlyBillResponse {
	s.Code = &v
	return s
}

func (s *QueryMonthlyBillResponse) SetMessage(v string) *QueryMonthlyBillResponse {
	s.Message = &v
	return s
}

func (s *QueryMonthlyBillResponse) SetData(v *QueryMonthlyBillResponseData) *QueryMonthlyBillResponse {
	s.Data = v
	return s
}

type QueryMonthlyBillResponseData struct {
	OutstandingAmount      *float32                           `json:"OutstandingAmount,omitempty" xml:"OutstandingAmount,omitempty" require:"true"`
	TotalOutstandingAmount *float32                           `json:"TotalOutstandingAmount,omitempty" xml:"TotalOutstandingAmount,omitempty" require:"true"`
	NewInvoiceAmount       *float32                           `json:"NewInvoiceAmount,omitempty" xml:"NewInvoiceAmount,omitempty" require:"true"`
	BillingCycle           *string                            `json:"BillingCycle,omitempty" xml:"BillingCycle,omitempty" require:"true"`
	Items                  *QueryMonthlyBillResponseDataItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s QueryMonthlyBillResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryMonthlyBillResponseData) GoString() string {
	return s.String()
}

func (s *QueryMonthlyBillResponseData) SetOutstandingAmount(v float32) *QueryMonthlyBillResponseData {
	s.OutstandingAmount = &v
	return s
}

func (s *QueryMonthlyBillResponseData) SetTotalOutstandingAmount(v float32) *QueryMonthlyBillResponseData {
	s.TotalOutstandingAmount = &v
	return s
}

func (s *QueryMonthlyBillResponseData) SetNewInvoiceAmount(v float32) *QueryMonthlyBillResponseData {
	s.NewInvoiceAmount = &v
	return s
}

func (s *QueryMonthlyBillResponseData) SetBillingCycle(v string) *QueryMonthlyBillResponseData {
	s.BillingCycle = &v
	return s
}

func (s *QueryMonthlyBillResponseData) SetItems(v *QueryMonthlyBillResponseDataItems) *QueryMonthlyBillResponseData {
	s.Items = v
	return s
}

type QueryMonthlyBillResponseDataItems struct {
	Item []*QueryMonthlyBillResponseDataItemsItem `json:"Item,omitempty" xml:"Item,omitempty" require:"true" type:"Repeated"`
}

func (s QueryMonthlyBillResponseDataItems) String() string {
	return tea.Prettify(s)
}

func (s QueryMonthlyBillResponseDataItems) GoString() string {
	return s.String()
}

func (s *QueryMonthlyBillResponseDataItems) SetItem(v []*QueryMonthlyBillResponseDataItemsItem) *QueryMonthlyBillResponseDataItems {
	s.Item = v
	return s
}

type QueryMonthlyBillResponseDataItemsItem struct {
	Item                  *string  `json:"Item,omitempty" xml:"Item,omitempty" require:"true"`
	ProductCode           *string  `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType           *string  `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType      *string  `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	SolutionCode          *string  `json:"SolutionCode,omitempty" xml:"SolutionCode,omitempty" require:"true"`
	SolutionName          *string  `json:"SolutionName,omitempty" xml:"SolutionName,omitempty" require:"true"`
	PretaxGrossAmount     *float32 `json:"PretaxGrossAmount,omitempty" xml:"PretaxGrossAmount,omitempty" require:"true"`
	InvoiceDiscount       *float32 `json:"InvoiceDiscount,omitempty" xml:"InvoiceDiscount,omitempty" require:"true"`
	DeductedByCoupons     *float32 `json:"DeductedByCoupons,omitempty" xml:"DeductedByCoupons,omitempty" require:"true"`
	PretaxAmount          *float32 `json:"PretaxAmount,omitempty" xml:"PretaxAmount,omitempty" require:"true"`
	Currency              *string  `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	PretaxAmountLocal     *float32 `json:"PretaxAmountLocal,omitempty" xml:"PretaxAmountLocal,omitempty" require:"true"`
	Tax                   *float32 `json:"Tax,omitempty" xml:"Tax,omitempty" require:"true"`
	AfterTaxAmount        *float32 `json:"AfterTaxAmount,omitempty" xml:"AfterTaxAmount,omitempty" require:"true"`
	OutstandingAmount     *float32 `json:"OutstandingAmount,omitempty" xml:"OutstandingAmount,omitempty" require:"true"`
	DeductedByCashCoupons *float32 `json:"DeductedByCashCoupons,omitempty" xml:"DeductedByCashCoupons,omitempty" require:"true"`
	DeductedByPrepaidCard *float32 `json:"DeductedByPrepaidCard,omitempty" xml:"DeductedByPrepaidCard,omitempty" require:"true"`
	PaymentAmount         *float32 `json:"PaymentAmount,omitempty" xml:"PaymentAmount,omitempty" require:"true"`
	PaymentCurrency       *string  `json:"PaymentCurrency,omitempty" xml:"PaymentCurrency,omitempty" require:"true"`
}

func (s QueryMonthlyBillResponseDataItemsItem) String() string {
	return tea.Prettify(s)
}

func (s QueryMonthlyBillResponseDataItemsItem) GoString() string {
	return s.String()
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetItem(v string) *QueryMonthlyBillResponseDataItemsItem {
	s.Item = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetProductCode(v string) *QueryMonthlyBillResponseDataItemsItem {
	s.ProductCode = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetProductType(v string) *QueryMonthlyBillResponseDataItemsItem {
	s.ProductType = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetSubscriptionType(v string) *QueryMonthlyBillResponseDataItemsItem {
	s.SubscriptionType = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetSolutionCode(v string) *QueryMonthlyBillResponseDataItemsItem {
	s.SolutionCode = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetSolutionName(v string) *QueryMonthlyBillResponseDataItemsItem {
	s.SolutionName = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetPretaxGrossAmount(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.PretaxGrossAmount = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetInvoiceDiscount(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.InvoiceDiscount = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetDeductedByCoupons(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.DeductedByCoupons = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetPretaxAmount(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.PretaxAmount = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetCurrency(v string) *QueryMonthlyBillResponseDataItemsItem {
	s.Currency = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetPretaxAmountLocal(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.PretaxAmountLocal = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetTax(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.Tax = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetAfterTaxAmount(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.AfterTaxAmount = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetOutstandingAmount(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.OutstandingAmount = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetDeductedByCashCoupons(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.DeductedByCashCoupons = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetDeductedByPrepaidCard(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.DeductedByPrepaidCard = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetPaymentAmount(v float32) *QueryMonthlyBillResponseDataItemsItem {
	s.PaymentAmount = &v
	return s
}

func (s *QueryMonthlyBillResponseDataItemsItem) SetPaymentCurrency(v string) *QueryMonthlyBillResponseDataItemsItem {
	s.PaymentCurrency = &v
	return s
}

type SetRenewalRequest struct {
	RenewalPeriod     *int    `json:"RenewalPeriod,omitempty" xml:"RenewalPeriod,omitempty"`
	InstanceIDs       *string `json:"InstanceIDs,omitempty" xml:"InstanceIDs,omitempty" require:"true"`
	ProductCode       *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ProductType       *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType  *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
	RenewalPeriodUnit *string `json:"RenewalPeriodUnit,omitempty" xml:"RenewalPeriodUnit,omitempty"`
	RenewalStatus     *string `json:"RenewalStatus,omitempty" xml:"RenewalStatus,omitempty" require:"true"`
}

func (s SetRenewalRequest) String() string {
	return tea.Prettify(s)
}

func (s SetRenewalRequest) GoString() string {
	return s.String()
}

func (s *SetRenewalRequest) SetRenewalPeriod(v int) *SetRenewalRequest {
	s.RenewalPeriod = &v
	return s
}

func (s *SetRenewalRequest) SetInstanceIDs(v string) *SetRenewalRequest {
	s.InstanceIDs = &v
	return s
}

func (s *SetRenewalRequest) SetProductCode(v string) *SetRenewalRequest {
	s.ProductCode = &v
	return s
}

func (s *SetRenewalRequest) SetProductType(v string) *SetRenewalRequest {
	s.ProductType = &v
	return s
}

func (s *SetRenewalRequest) SetSubscriptionType(v string) *SetRenewalRequest {
	s.SubscriptionType = &v
	return s
}

func (s *SetRenewalRequest) SetRenewalPeriodUnit(v string) *SetRenewalRequest {
	s.RenewalPeriodUnit = &v
	return s
}

func (s *SetRenewalRequest) SetRenewalStatus(v string) *SetRenewalRequest {
	s.RenewalStatus = &v
	return s
}

type SetRenewalResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s SetRenewalResponse) String() string {
	return tea.Prettify(s)
}

func (s SetRenewalResponse) GoString() string {
	return s.String()
}

func (s *SetRenewalResponse) SetRequestId(v string) *SetRenewalResponse {
	s.RequestId = &v
	return s
}

func (s *SetRenewalResponse) SetSuccess(v bool) *SetRenewalResponse {
	s.Success = &v
	return s
}

func (s *SetRenewalResponse) SetCode(v string) *SetRenewalResponse {
	s.Code = &v
	return s
}

func (s *SetRenewalResponse) SetMessage(v string) *SetRenewalResponse {
	s.Message = &v
	return s
}

type QueryAvailableInstancesRequest struct {
	Region           *string `json:"Region,omitempty" xml:"Region,omitempty"`
	PageNum          *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize         *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	ProductCode      *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ProductType      *string `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty"`
	InstanceIDs      *string `json:"InstanceIDs,omitempty" xml:"InstanceIDs,omitempty"`
	EndTimeStart     *string `json:"EndTimeStart,omitempty" xml:"EndTimeStart,omitempty"`
	EndTimeEnd       *string `json:"EndTimeEnd,omitempty" xml:"EndTimeEnd,omitempty"`
	CreateTimeStart  *string `json:"CreateTimeStart,omitempty" xml:"CreateTimeStart,omitempty"`
	CreateTimeEnd    *string `json:"CreateTimeEnd,omitempty" xml:"CreateTimeEnd,omitempty"`
	RenewStatus      *string `json:"RenewStatus,omitempty" xml:"RenewStatus,omitempty"`
}

func (s QueryAvailableInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryAvailableInstancesRequest) GoString() string {
	return s.String()
}

func (s *QueryAvailableInstancesRequest) SetRegion(v string) *QueryAvailableInstancesRequest {
	s.Region = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetPageNum(v int) *QueryAvailableInstancesRequest {
	s.PageNum = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetPageSize(v int) *QueryAvailableInstancesRequest {
	s.PageSize = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetProductCode(v string) *QueryAvailableInstancesRequest {
	s.ProductCode = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetProductType(v string) *QueryAvailableInstancesRequest {
	s.ProductType = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetSubscriptionType(v string) *QueryAvailableInstancesRequest {
	s.SubscriptionType = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetInstanceIDs(v string) *QueryAvailableInstancesRequest {
	s.InstanceIDs = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetEndTimeStart(v string) *QueryAvailableInstancesRequest {
	s.EndTimeStart = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetEndTimeEnd(v string) *QueryAvailableInstancesRequest {
	s.EndTimeEnd = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetCreateTimeStart(v string) *QueryAvailableInstancesRequest {
	s.CreateTimeStart = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetCreateTimeEnd(v string) *QueryAvailableInstancesRequest {
	s.CreateTimeEnd = &v
	return s
}

func (s *QueryAvailableInstancesRequest) SetRenewStatus(v string) *QueryAvailableInstancesRequest {
	s.RenewStatus = &v
	return s
}

type QueryAvailableInstancesResponse struct {
	RequestId *string                              `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                              `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                              `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryAvailableInstancesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryAvailableInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryAvailableInstancesResponse) GoString() string {
	return s.String()
}

func (s *QueryAvailableInstancesResponse) SetRequestId(v string) *QueryAvailableInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *QueryAvailableInstancesResponse) SetSuccess(v bool) *QueryAvailableInstancesResponse {
	s.Success = &v
	return s
}

func (s *QueryAvailableInstancesResponse) SetCode(v string) *QueryAvailableInstancesResponse {
	s.Code = &v
	return s
}

func (s *QueryAvailableInstancesResponse) SetMessage(v string) *QueryAvailableInstancesResponse {
	s.Message = &v
	return s
}

func (s *QueryAvailableInstancesResponse) SetData(v *QueryAvailableInstancesResponseData) *QueryAvailableInstancesResponse {
	s.Data = v
	return s
}

type QueryAvailableInstancesResponseData struct {
	PageNum      *int                                               `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize     *int                                               `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount   *int                                               `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	InstanceList []*QueryAvailableInstancesResponseDataInstanceList `json:"InstanceList,omitempty" xml:"InstanceList,omitempty" require:"true" type:"Repeated"`
}

func (s QueryAvailableInstancesResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryAvailableInstancesResponseData) GoString() string {
	return s.String()
}

func (s *QueryAvailableInstancesResponseData) SetPageNum(v int) *QueryAvailableInstancesResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryAvailableInstancesResponseData) SetPageSize(v int) *QueryAvailableInstancesResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryAvailableInstancesResponseData) SetTotalCount(v int) *QueryAvailableInstancesResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryAvailableInstancesResponseData) SetInstanceList(v []*QueryAvailableInstancesResponseDataInstanceList) *QueryAvailableInstancesResponseData {
	s.InstanceList = v
	return s
}

type QueryAvailableInstancesResponseDataInstanceList struct {
	OwnerId             *int64  `json:"OwnerId,omitempty" xml:"OwnerId,omitempty" require:"true"`
	SellerId            *int64  `json:"SellerId,omitempty" xml:"SellerId,omitempty" require:"true"`
	ProductCode         *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType         *string `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	SubscriptionType    *string `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	InstanceID          *string `json:"InstanceID,omitempty" xml:"InstanceID,omitempty" require:"true"`
	Region              *string `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	CreateTime          *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	EndTime             *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	StopTime            *string `json:"StopTime,omitempty" xml:"StopTime,omitempty" require:"true"`
	ReleaseTime         *string `json:"ReleaseTime,omitempty" xml:"ReleaseTime,omitempty" require:"true"`
	ExpectedReleaseTime *string `json:"ExpectedReleaseTime,omitempty" xml:"ExpectedReleaseTime,omitempty" require:"true"`
	Status              *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	SubStatus           *string `json:"SubStatus,omitempty" xml:"SubStatus,omitempty" require:"true"`
	RenewStatus         *string `json:"RenewStatus,omitempty" xml:"RenewStatus,omitempty" require:"true"`
	RenewalDuration     *int    `json:"RenewalDuration,omitempty" xml:"RenewalDuration,omitempty" require:"true"`
	RenewalDurationUnit *string `json:"RenewalDurationUnit,omitempty" xml:"RenewalDurationUnit,omitempty" require:"true"`
	Seller              *string `json:"Seller,omitempty" xml:"Seller,omitempty" require:"true"`
}

func (s QueryAvailableInstancesResponseDataInstanceList) String() string {
	return tea.Prettify(s)
}

func (s QueryAvailableInstancesResponseDataInstanceList) GoString() string {
	return s.String()
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetOwnerId(v int64) *QueryAvailableInstancesResponseDataInstanceList {
	s.OwnerId = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetSellerId(v int64) *QueryAvailableInstancesResponseDataInstanceList {
	s.SellerId = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetProductCode(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.ProductCode = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetProductType(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.ProductType = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetSubscriptionType(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.SubscriptionType = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetInstanceID(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.InstanceID = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetRegion(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.Region = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetCreateTime(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.CreateTime = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetEndTime(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.EndTime = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetStopTime(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.StopTime = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetReleaseTime(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.ReleaseTime = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetExpectedReleaseTime(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.ExpectedReleaseTime = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetStatus(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.Status = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetSubStatus(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.SubStatus = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetRenewStatus(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.RenewStatus = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetRenewalDuration(v int) *QueryAvailableInstancesResponseDataInstanceList {
	s.RenewalDuration = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetRenewalDurationUnit(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.RenewalDurationUnit = &v
	return s
}

func (s *QueryAvailableInstancesResponseDataInstanceList) SetSeller(v string) *QueryAvailableInstancesResponseDataInstanceList {
	s.Seller = &v
	return s
}

type CreateResourcePackageRequest struct {
	ProductCode   *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	PackageType   *string `json:"PackageType,omitempty" xml:"PackageType,omitempty"`
	EffectiveDate *string `json:"EffectiveDate,omitempty" xml:"EffectiveDate,omitempty"`
	Specification *string `json:"Specification,omitempty" xml:"Specification,omitempty"`
	Duration      *int    `json:"Duration,omitempty" xml:"Duration,omitempty"`
	PricingCycle  *string `json:"PricingCycle,omitempty" xml:"PricingCycle,omitempty"`
}

func (s CreateResourcePackageRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateResourcePackageRequest) GoString() string {
	return s.String()
}

func (s *CreateResourcePackageRequest) SetProductCode(v string) *CreateResourcePackageRequest {
	s.ProductCode = &v
	return s
}

func (s *CreateResourcePackageRequest) SetPackageType(v string) *CreateResourcePackageRequest {
	s.PackageType = &v
	return s
}

func (s *CreateResourcePackageRequest) SetEffectiveDate(v string) *CreateResourcePackageRequest {
	s.EffectiveDate = &v
	return s
}

func (s *CreateResourcePackageRequest) SetSpecification(v string) *CreateResourcePackageRequest {
	s.Specification = &v
	return s
}

func (s *CreateResourcePackageRequest) SetDuration(v int) *CreateResourcePackageRequest {
	s.Duration = &v
	return s
}

func (s *CreateResourcePackageRequest) SetPricingCycle(v string) *CreateResourcePackageRequest {
	s.PricingCycle = &v
	return s
}

type CreateResourcePackageResponse struct {
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OrderId   *int64                             `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
	Success   *bool                              `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                            `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                            `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *CreateResourcePackageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s CreateResourcePackageResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateResourcePackageResponse) GoString() string {
	return s.String()
}

func (s *CreateResourcePackageResponse) SetRequestId(v string) *CreateResourcePackageResponse {
	s.RequestId = &v
	return s
}

func (s *CreateResourcePackageResponse) SetOrderId(v int64) *CreateResourcePackageResponse {
	s.OrderId = &v
	return s
}

func (s *CreateResourcePackageResponse) SetSuccess(v bool) *CreateResourcePackageResponse {
	s.Success = &v
	return s
}

func (s *CreateResourcePackageResponse) SetCode(v string) *CreateResourcePackageResponse {
	s.Code = &v
	return s
}

func (s *CreateResourcePackageResponse) SetMessage(v string) *CreateResourcePackageResponse {
	s.Message = &v
	return s
}

func (s *CreateResourcePackageResponse) SetData(v *CreateResourcePackageResponseData) *CreateResourcePackageResponse {
	s.Data = v
	return s
}

type CreateResourcePackageResponseData struct {
	OrderId    *int64  `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s CreateResourcePackageResponseData) String() string {
	return tea.Prettify(s)
}

func (s CreateResourcePackageResponseData) GoString() string {
	return s.String()
}

func (s *CreateResourcePackageResponseData) SetOrderId(v int64) *CreateResourcePackageResponseData {
	s.OrderId = &v
	return s
}

func (s *CreateResourcePackageResponseData) SetInstanceId(v string) *CreateResourcePackageResponseData {
	s.InstanceId = &v
	return s
}

type QueryResourcePackageInstancesRequest struct {
	ProductCode     *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	ExpiryTimeStart *string `json:"ExpiryTimeStart,omitempty" xml:"ExpiryTimeStart,omitempty"`
	ExpiryTimeEnd   *string `json:"ExpiryTimeEnd,omitempty" xml:"ExpiryTimeEnd,omitempty"`
	PageNum         *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize        *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s QueryResourcePackageInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryResourcePackageInstancesRequest) GoString() string {
	return s.String()
}

func (s *QueryResourcePackageInstancesRequest) SetProductCode(v string) *QueryResourcePackageInstancesRequest {
	s.ProductCode = &v
	return s
}

func (s *QueryResourcePackageInstancesRequest) SetExpiryTimeStart(v string) *QueryResourcePackageInstancesRequest {
	s.ExpiryTimeStart = &v
	return s
}

func (s *QueryResourcePackageInstancesRequest) SetExpiryTimeEnd(v string) *QueryResourcePackageInstancesRequest {
	s.ExpiryTimeEnd = &v
	return s
}

func (s *QueryResourcePackageInstancesRequest) SetPageNum(v int) *QueryResourcePackageInstancesRequest {
	s.PageNum = &v
	return s
}

func (s *QueryResourcePackageInstancesRequest) SetPageSize(v int) *QueryResourcePackageInstancesRequest {
	s.PageSize = &v
	return s
}

type QueryResourcePackageInstancesResponse struct {
	RequestId *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                      `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                                    `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                                    `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Page      *int                                       `json:"Page,omitempty" xml:"Page,omitempty" require:"true"`
	PageSize  *int                                       `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Total     *int                                       `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	Data      *QueryResourcePackageInstancesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryResourcePackageInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryResourcePackageInstancesResponse) GoString() string {
	return s.String()
}

func (s *QueryResourcePackageInstancesResponse) SetRequestId(v string) *QueryResourcePackageInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *QueryResourcePackageInstancesResponse) SetSuccess(v bool) *QueryResourcePackageInstancesResponse {
	s.Success = &v
	return s
}

func (s *QueryResourcePackageInstancesResponse) SetCode(v string) *QueryResourcePackageInstancesResponse {
	s.Code = &v
	return s
}

func (s *QueryResourcePackageInstancesResponse) SetMessage(v string) *QueryResourcePackageInstancesResponse {
	s.Message = &v
	return s
}

func (s *QueryResourcePackageInstancesResponse) SetPage(v int) *QueryResourcePackageInstancesResponse {
	s.Page = &v
	return s
}

func (s *QueryResourcePackageInstancesResponse) SetPageSize(v int) *QueryResourcePackageInstancesResponse {
	s.PageSize = &v
	return s
}

func (s *QueryResourcePackageInstancesResponse) SetTotal(v int) *QueryResourcePackageInstancesResponse {
	s.Total = &v
	return s
}

func (s *QueryResourcePackageInstancesResponse) SetData(v *QueryResourcePackageInstancesResponseData) *QueryResourcePackageInstancesResponse {
	s.Data = v
	return s
}

type QueryResourcePackageInstancesResponseData struct {
	HostId     *string                                             `json:"HostId,omitempty" xml:"HostId,omitempty" require:"true"`
	PageNum    *string                                             `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize   *string                                             `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *string                                             `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Instances  *QueryResourcePackageInstancesResponseDataInstances `json:"Instances,omitempty" xml:"Instances,omitempty" require:"true" type:"Struct"`
}

func (s QueryResourcePackageInstancesResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryResourcePackageInstancesResponseData) GoString() string {
	return s.String()
}

func (s *QueryResourcePackageInstancesResponseData) SetHostId(v string) *QueryResourcePackageInstancesResponseData {
	s.HostId = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseData) SetPageNum(v string) *QueryResourcePackageInstancesResponseData {
	s.PageNum = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseData) SetPageSize(v string) *QueryResourcePackageInstancesResponseData {
	s.PageSize = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseData) SetTotalCount(v string) *QueryResourcePackageInstancesResponseData {
	s.TotalCount = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseData) SetInstances(v *QueryResourcePackageInstancesResponseDataInstances) *QueryResourcePackageInstancesResponseData {
	s.Instances = v
	return s
}

type QueryResourcePackageInstancesResponseDataInstances struct {
	Instance []*QueryResourcePackageInstancesResponseDataInstancesInstance `json:"Instance,omitempty" xml:"Instance,omitempty" require:"true" type:"Repeated"`
}

func (s QueryResourcePackageInstancesResponseDataInstances) String() string {
	return tea.Prettify(s)
}

func (s QueryResourcePackageInstancesResponseDataInstances) GoString() string {
	return s.String()
}

func (s *QueryResourcePackageInstancesResponseDataInstances) SetInstance(v []*QueryResourcePackageInstancesResponseDataInstancesInstance) *QueryResourcePackageInstancesResponseDataInstances {
	s.Instance = v
	return s
}

type QueryResourcePackageInstancesResponseDataInstancesInstance struct {
	InstanceId          *string                                                                       `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Region              *string                                                                       `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	TotalAmount         *string                                                                       `json:"TotalAmount,omitempty" xml:"TotalAmount,omitempty" require:"true"`
	TotalAmountUnit     *string                                                                       `json:"TotalAmountUnit,omitempty" xml:"TotalAmountUnit,omitempty" require:"true"`
	RemainingAmount     *string                                                                       `json:"RemainingAmount,omitempty" xml:"RemainingAmount,omitempty" require:"true"`
	RemainingAmountUnit *string                                                                       `json:"RemainingAmountUnit,omitempty" xml:"RemainingAmountUnit,omitempty" require:"true"`
	EffectiveTime       *string                                                                       `json:"EffectiveTime,omitempty" xml:"EffectiveTime,omitempty" require:"true"`
	ExpiryTime          *string                                                                       `json:"ExpiryTime,omitempty" xml:"ExpiryTime,omitempty" require:"true"`
	Remark              *string                                                                       `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
	PackageType         *string                                                                       `json:"PackageType,omitempty" xml:"PackageType,omitempty" require:"true"`
	Status              *string                                                                       `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	DeductType          *string                                                                       `json:"DeductType,omitempty" xml:"DeductType,omitempty" require:"true"`
	ApplicableProducts  *QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts `json:"ApplicableProducts,omitempty" xml:"ApplicableProducts,omitempty" require:"true" type:"Struct"`
}

func (s QueryResourcePackageInstancesResponseDataInstancesInstance) String() string {
	return tea.Prettify(s)
}

func (s QueryResourcePackageInstancesResponseDataInstancesInstance) GoString() string {
	return s.String()
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetInstanceId(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.InstanceId = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetRegion(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.Region = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetTotalAmount(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.TotalAmount = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetTotalAmountUnit(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.TotalAmountUnit = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetRemainingAmount(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.RemainingAmount = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetRemainingAmountUnit(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.RemainingAmountUnit = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetEffectiveTime(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.EffectiveTime = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetExpiryTime(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.ExpiryTime = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetRemark(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.Remark = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetPackageType(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.PackageType = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetStatus(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.Status = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetDeductType(v string) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.DeductType = &v
	return s
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstance) SetApplicableProducts(v *QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts) *QueryResourcePackageInstancesResponseDataInstancesInstance {
	s.ApplicableProducts = v
	return s
}

type QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts struct {
	Product []*string `json:"Product,omitempty" xml:"Product,omitempty" require:"true" type:"Repeated"`
}

func (s QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts) String() string {
	return tea.Prettify(s)
}

func (s QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts) GoString() string {
	return s.String()
}

func (s *QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts) SetProduct(v []*string) *QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts {
	s.Product = v
	return s
}

type GetResourcePackagePriceRequest struct {
	ProductCode   *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
	PackageType   *string `json:"PackageType,omitempty" xml:"PackageType,omitempty"`
	EffectiveDate *string `json:"EffectiveDate,omitempty" xml:"EffectiveDate,omitempty"`
	Specification *string `json:"Specification,omitempty" xml:"Specification,omitempty"`
	Duration      *int    `json:"Duration,omitempty" xml:"Duration,omitempty"`
	PricingCycle  *string `json:"PricingCycle,omitempty" xml:"PricingCycle,omitempty"`
	OrderType     *string `json:"OrderType,omitempty" xml:"OrderType,omitempty"`
	InstanceId    *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
}

func (s GetResourcePackagePriceRequest) String() string {
	return tea.Prettify(s)
}

func (s GetResourcePackagePriceRequest) GoString() string {
	return s.String()
}

func (s *GetResourcePackagePriceRequest) SetProductCode(v string) *GetResourcePackagePriceRequest {
	s.ProductCode = &v
	return s
}

func (s *GetResourcePackagePriceRequest) SetPackageType(v string) *GetResourcePackagePriceRequest {
	s.PackageType = &v
	return s
}

func (s *GetResourcePackagePriceRequest) SetEffectiveDate(v string) *GetResourcePackagePriceRequest {
	s.EffectiveDate = &v
	return s
}

func (s *GetResourcePackagePriceRequest) SetSpecification(v string) *GetResourcePackagePriceRequest {
	s.Specification = &v
	return s
}

func (s *GetResourcePackagePriceRequest) SetDuration(v int) *GetResourcePackagePriceRequest {
	s.Duration = &v
	return s
}

func (s *GetResourcePackagePriceRequest) SetPricingCycle(v string) *GetResourcePackagePriceRequest {
	s.PricingCycle = &v
	return s
}

func (s *GetResourcePackagePriceRequest) SetOrderType(v string) *GetResourcePackagePriceRequest {
	s.OrderType = &v
	return s
}

func (s *GetResourcePackagePriceRequest) SetInstanceId(v string) *GetResourcePackagePriceRequest {
	s.InstanceId = &v
	return s
}

type GetResourcePackagePriceResponse struct {
	RequestId *string                              `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                              `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                              `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *GetResourcePackagePriceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetResourcePackagePriceResponse) String() string {
	return tea.Prettify(s)
}

func (s GetResourcePackagePriceResponse) GoString() string {
	return s.String()
}

func (s *GetResourcePackagePriceResponse) SetRequestId(v string) *GetResourcePackagePriceResponse {
	s.RequestId = &v
	return s
}

func (s *GetResourcePackagePriceResponse) SetSuccess(v bool) *GetResourcePackagePriceResponse {
	s.Success = &v
	return s
}

func (s *GetResourcePackagePriceResponse) SetCode(v string) *GetResourcePackagePriceResponse {
	s.Code = &v
	return s
}

func (s *GetResourcePackagePriceResponse) SetMessage(v string) *GetResourcePackagePriceResponse {
	s.Message = &v
	return s
}

func (s *GetResourcePackagePriceResponse) SetData(v *GetResourcePackagePriceResponseData) *GetResourcePackagePriceResponse {
	s.Data = v
	return s
}

type GetResourcePackagePriceResponseData struct {
	Currency      *string                                        `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	OriginalPrice *float32                                       `json:"OriginalPrice,omitempty" xml:"OriginalPrice,omitempty" require:"true"`
	TradePrice    *float32                                       `json:"TradePrice,omitempty" xml:"TradePrice,omitempty" require:"true"`
	DiscountPrice *float32                                       `json:"DiscountPrice,omitempty" xml:"DiscountPrice,omitempty" require:"true"`
	Promotions    *GetResourcePackagePriceResponseDataPromotions `json:"Promotions,omitempty" xml:"Promotions,omitempty" require:"true" type:"Struct"`
}

func (s GetResourcePackagePriceResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetResourcePackagePriceResponseData) GoString() string {
	return s.String()
}

func (s *GetResourcePackagePriceResponseData) SetCurrency(v string) *GetResourcePackagePriceResponseData {
	s.Currency = &v
	return s
}

func (s *GetResourcePackagePriceResponseData) SetOriginalPrice(v float32) *GetResourcePackagePriceResponseData {
	s.OriginalPrice = &v
	return s
}

func (s *GetResourcePackagePriceResponseData) SetTradePrice(v float32) *GetResourcePackagePriceResponseData {
	s.TradePrice = &v
	return s
}

func (s *GetResourcePackagePriceResponseData) SetDiscountPrice(v float32) *GetResourcePackagePriceResponseData {
	s.DiscountPrice = &v
	return s
}

func (s *GetResourcePackagePriceResponseData) SetPromotions(v *GetResourcePackagePriceResponseDataPromotions) *GetResourcePackagePriceResponseData {
	s.Promotions = v
	return s
}

type GetResourcePackagePriceResponseDataPromotions struct {
	Promotion []*GetResourcePackagePriceResponseDataPromotionsPromotion `json:"Promotion,omitempty" xml:"Promotion,omitempty" require:"true" type:"Repeated"`
}

func (s GetResourcePackagePriceResponseDataPromotions) String() string {
	return tea.Prettify(s)
}

func (s GetResourcePackagePriceResponseDataPromotions) GoString() string {
	return s.String()
}

func (s *GetResourcePackagePriceResponseDataPromotions) SetPromotion(v []*GetResourcePackagePriceResponseDataPromotionsPromotion) *GetResourcePackagePriceResponseDataPromotions {
	s.Promotion = v
	return s
}

type GetResourcePackagePriceResponseDataPromotionsPromotion struct {
	Id   *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s GetResourcePackagePriceResponseDataPromotionsPromotion) String() string {
	return tea.Prettify(s)
}

func (s GetResourcePackagePriceResponseDataPromotionsPromotion) GoString() string {
	return s.String()
}

func (s *GetResourcePackagePriceResponseDataPromotionsPromotion) SetId(v int64) *GetResourcePackagePriceResponseDataPromotionsPromotion {
	s.Id = &v
	return s
}

func (s *GetResourcePackagePriceResponseDataPromotionsPromotion) SetName(v string) *GetResourcePackagePriceResponseDataPromotionsPromotion {
	s.Name = &v
	return s
}

type GetSubscriptionPriceRequest struct {
	ServicePeriodUnit     *string                                  `json:"ServicePeriodUnit,omitempty" xml:"ServicePeriodUnit,omitempty"`
	SubscriptionType      *string                                  `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	ProductCode           *string                                  `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	OrderType             *string                                  `json:"OrderType,omitempty" xml:"OrderType,omitempty" require:"true"`
	ServicePeriodQuantity *int                                     `json:"ServicePeriodQuantity,omitempty" xml:"ServicePeriodQuantity,omitempty"`
	ProductType           *string                                  `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	Region                *string                                  `json:"Region,omitempty" xml:"Region,omitempty"`
	InstanceId            *string                                  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
	ModuleList            []*GetSubscriptionPriceRequestModuleList `json:"ModuleList,omitempty" xml:"ModuleList,omitempty" require:"true" type:"Repeated"`
	Quantity              *int                                     `json:"Quantity,omitempty" xml:"Quantity,omitempty"`
}

func (s GetSubscriptionPriceRequest) String() string {
	return tea.Prettify(s)
}

func (s GetSubscriptionPriceRequest) GoString() string {
	return s.String()
}

func (s *GetSubscriptionPriceRequest) SetServicePeriodUnit(v string) *GetSubscriptionPriceRequest {
	s.ServicePeriodUnit = &v
	return s
}

func (s *GetSubscriptionPriceRequest) SetSubscriptionType(v string) *GetSubscriptionPriceRequest {
	s.SubscriptionType = &v
	return s
}

func (s *GetSubscriptionPriceRequest) SetProductCode(v string) *GetSubscriptionPriceRequest {
	s.ProductCode = &v
	return s
}

func (s *GetSubscriptionPriceRequest) SetOrderType(v string) *GetSubscriptionPriceRequest {
	s.OrderType = &v
	return s
}

func (s *GetSubscriptionPriceRequest) SetServicePeriodQuantity(v int) *GetSubscriptionPriceRequest {
	s.ServicePeriodQuantity = &v
	return s
}

func (s *GetSubscriptionPriceRequest) SetProductType(v string) *GetSubscriptionPriceRequest {
	s.ProductType = &v
	return s
}

func (s *GetSubscriptionPriceRequest) SetRegion(v string) *GetSubscriptionPriceRequest {
	s.Region = &v
	return s
}

func (s *GetSubscriptionPriceRequest) SetInstanceId(v string) *GetSubscriptionPriceRequest {
	s.InstanceId = &v
	return s
}

func (s *GetSubscriptionPriceRequest) SetModuleList(v []*GetSubscriptionPriceRequestModuleList) *GetSubscriptionPriceRequest {
	s.ModuleList = v
	return s
}

func (s *GetSubscriptionPriceRequest) SetQuantity(v int) *GetSubscriptionPriceRequest {
	s.Quantity = &v
	return s
}

type GetSubscriptionPriceRequestModuleList struct {
	ModuleCode   *string `json:"ModuleCode,omitempty" xml:"ModuleCode,omitempty" require:"true"`
	Config       *string `json:"Config,omitempty" xml:"Config,omitempty" require:"true"`
	ModuleStatus *int    `json:"ModuleStatus,omitempty" xml:"ModuleStatus,omitempty"`
	Tag          *string `json:"Tag,omitempty" xml:"Tag,omitempty"`
}

func (s GetSubscriptionPriceRequestModuleList) String() string {
	return tea.Prettify(s)
}

func (s GetSubscriptionPriceRequestModuleList) GoString() string {
	return s.String()
}

func (s *GetSubscriptionPriceRequestModuleList) SetModuleCode(v string) *GetSubscriptionPriceRequestModuleList {
	s.ModuleCode = &v
	return s
}

func (s *GetSubscriptionPriceRequestModuleList) SetConfig(v string) *GetSubscriptionPriceRequestModuleList {
	s.Config = &v
	return s
}

func (s *GetSubscriptionPriceRequestModuleList) SetModuleStatus(v int) *GetSubscriptionPriceRequestModuleList {
	s.ModuleStatus = &v
	return s
}

func (s *GetSubscriptionPriceRequestModuleList) SetTag(v string) *GetSubscriptionPriceRequestModuleList {
	s.Tag = &v
	return s
}

type GetSubscriptionPriceResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                           `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                           `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *GetSubscriptionPriceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetSubscriptionPriceResponse) String() string {
	return tea.Prettify(s)
}

func (s GetSubscriptionPriceResponse) GoString() string {
	return s.String()
}

func (s *GetSubscriptionPriceResponse) SetRequestId(v string) *GetSubscriptionPriceResponse {
	s.RequestId = &v
	return s
}

func (s *GetSubscriptionPriceResponse) SetSuccess(v bool) *GetSubscriptionPriceResponse {
	s.Success = &v
	return s
}

func (s *GetSubscriptionPriceResponse) SetCode(v string) *GetSubscriptionPriceResponse {
	s.Code = &v
	return s
}

func (s *GetSubscriptionPriceResponse) SetMessage(v string) *GetSubscriptionPriceResponse {
	s.Message = &v
	return s
}

func (s *GetSubscriptionPriceResponse) SetData(v *GetSubscriptionPriceResponseData) *GetSubscriptionPriceResponse {
	s.Data = v
	return s
}

type GetSubscriptionPriceResponseData struct {
	OriginalPrice    *float32                                          `json:"OriginalPrice,omitempty" xml:"OriginalPrice,omitempty" require:"true"`
	DiscountPrice    *float32                                          `json:"DiscountPrice,omitempty" xml:"DiscountPrice,omitempty" require:"true"`
	TradePrice       *float32                                          `json:"TradePrice,omitempty" xml:"TradePrice,omitempty" require:"true"`
	Currency         *string                                           `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	Quantity         *int                                              `json:"Quantity,omitempty" xml:"Quantity,omitempty" require:"true"`
	ModuleDetails    *GetSubscriptionPriceResponseDataModuleDetails    `json:"ModuleDetails,omitempty" xml:"ModuleDetails,omitempty" require:"true" type:"Struct"`
	PromotionDetails *GetSubscriptionPriceResponseDataPromotionDetails `json:"PromotionDetails,omitempty" xml:"PromotionDetails,omitempty" require:"true" type:"Struct"`
}

func (s GetSubscriptionPriceResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetSubscriptionPriceResponseData) GoString() string {
	return s.String()
}

func (s *GetSubscriptionPriceResponseData) SetOriginalPrice(v float32) *GetSubscriptionPriceResponseData {
	s.OriginalPrice = &v
	return s
}

func (s *GetSubscriptionPriceResponseData) SetDiscountPrice(v float32) *GetSubscriptionPriceResponseData {
	s.DiscountPrice = &v
	return s
}

func (s *GetSubscriptionPriceResponseData) SetTradePrice(v float32) *GetSubscriptionPriceResponseData {
	s.TradePrice = &v
	return s
}

func (s *GetSubscriptionPriceResponseData) SetCurrency(v string) *GetSubscriptionPriceResponseData {
	s.Currency = &v
	return s
}

func (s *GetSubscriptionPriceResponseData) SetQuantity(v int) *GetSubscriptionPriceResponseData {
	s.Quantity = &v
	return s
}

func (s *GetSubscriptionPriceResponseData) SetModuleDetails(v *GetSubscriptionPriceResponseDataModuleDetails) *GetSubscriptionPriceResponseData {
	s.ModuleDetails = v
	return s
}

func (s *GetSubscriptionPriceResponseData) SetPromotionDetails(v *GetSubscriptionPriceResponseDataPromotionDetails) *GetSubscriptionPriceResponseData {
	s.PromotionDetails = v
	return s
}

type GetSubscriptionPriceResponseDataModuleDetails struct {
	ModuleDetail []*GetSubscriptionPriceResponseDataModuleDetailsModuleDetail `json:"ModuleDetail,omitempty" xml:"ModuleDetail,omitempty" require:"true" type:"Repeated"`
}

func (s GetSubscriptionPriceResponseDataModuleDetails) String() string {
	return tea.Prettify(s)
}

func (s GetSubscriptionPriceResponseDataModuleDetails) GoString() string {
	return s.String()
}

func (s *GetSubscriptionPriceResponseDataModuleDetails) SetModuleDetail(v []*GetSubscriptionPriceResponseDataModuleDetailsModuleDetail) *GetSubscriptionPriceResponseDataModuleDetails {
	s.ModuleDetail = v
	return s
}

type GetSubscriptionPriceResponseDataModuleDetailsModuleDetail struct {
	ModuleCode        *string  `json:"ModuleCode,omitempty" xml:"ModuleCode,omitempty" require:"true"`
	OriginalCost      *float32 `json:"OriginalCost,omitempty" xml:"OriginalCost,omitempty" require:"true"`
	InvoiceDiscount   *float32 `json:"InvoiceDiscount,omitempty" xml:"InvoiceDiscount,omitempty" require:"true"`
	CostAfterDiscount *float32 `json:"CostAfterDiscount,omitempty" xml:"CostAfterDiscount,omitempty" require:"true"`
	UnitPrice         *float32 `json:"UnitPrice,omitempty" xml:"UnitPrice,omitempty" require:"true"`
}

func (s GetSubscriptionPriceResponseDataModuleDetailsModuleDetail) String() string {
	return tea.Prettify(s)
}

func (s GetSubscriptionPriceResponseDataModuleDetailsModuleDetail) GoString() string {
	return s.String()
}

func (s *GetSubscriptionPriceResponseDataModuleDetailsModuleDetail) SetModuleCode(v string) *GetSubscriptionPriceResponseDataModuleDetailsModuleDetail {
	s.ModuleCode = &v
	return s
}

func (s *GetSubscriptionPriceResponseDataModuleDetailsModuleDetail) SetOriginalCost(v float32) *GetSubscriptionPriceResponseDataModuleDetailsModuleDetail {
	s.OriginalCost = &v
	return s
}

func (s *GetSubscriptionPriceResponseDataModuleDetailsModuleDetail) SetInvoiceDiscount(v float32) *GetSubscriptionPriceResponseDataModuleDetailsModuleDetail {
	s.InvoiceDiscount = &v
	return s
}

func (s *GetSubscriptionPriceResponseDataModuleDetailsModuleDetail) SetCostAfterDiscount(v float32) *GetSubscriptionPriceResponseDataModuleDetailsModuleDetail {
	s.CostAfterDiscount = &v
	return s
}

func (s *GetSubscriptionPriceResponseDataModuleDetailsModuleDetail) SetUnitPrice(v float32) *GetSubscriptionPriceResponseDataModuleDetailsModuleDetail {
	s.UnitPrice = &v
	return s
}

type GetSubscriptionPriceResponseDataPromotionDetails struct {
	PromotionDetail []*GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail `json:"PromotionDetail,omitempty" xml:"PromotionDetail,omitempty" require:"true" type:"Repeated"`
}

func (s GetSubscriptionPriceResponseDataPromotionDetails) String() string {
	return tea.Prettify(s)
}

func (s GetSubscriptionPriceResponseDataPromotionDetails) GoString() string {
	return s.String()
}

func (s *GetSubscriptionPriceResponseDataPromotionDetails) SetPromotionDetail(v []*GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail) *GetSubscriptionPriceResponseDataPromotionDetails {
	s.PromotionDetail = v
	return s
}

type GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail struct {
	PromotionName *string `json:"PromotionName,omitempty" xml:"PromotionName,omitempty" require:"true"`
	PromotionDesc *string `json:"PromotionDesc,omitempty" xml:"PromotionDesc,omitempty" require:"true"`
	PromotionId   *int64  `json:"PromotionId,omitempty" xml:"PromotionId,omitempty" require:"true"`
}

func (s GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail) String() string {
	return tea.Prettify(s)
}

func (s GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail) GoString() string {
	return s.String()
}

func (s *GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail) SetPromotionName(v string) *GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail {
	s.PromotionName = &v
	return s
}

func (s *GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail) SetPromotionDesc(v string) *GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail {
	s.PromotionDesc = &v
	return s
}

func (s *GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail) SetPromotionId(v int64) *GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail {
	s.PromotionId = &v
	return s
}

type GetPayAsYouGoPriceRequest struct {
	ProductCode      *string                                `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType      *string                                `json:"ProductType,omitempty" xml:"ProductType,omitempty"`
	SubscriptionType *string                                `json:"SubscriptionType,omitempty" xml:"SubscriptionType,omitempty" require:"true"`
	Region           *string                                `json:"Region,omitempty" xml:"Region,omitempty"`
	ModuleList       []*GetPayAsYouGoPriceRequestModuleList `json:"ModuleList,omitempty" xml:"ModuleList,omitempty" require:"true" type:"Repeated"`
}

func (s GetPayAsYouGoPriceRequest) String() string {
	return tea.Prettify(s)
}

func (s GetPayAsYouGoPriceRequest) GoString() string {
	return s.String()
}

func (s *GetPayAsYouGoPriceRequest) SetProductCode(v string) *GetPayAsYouGoPriceRequest {
	s.ProductCode = &v
	return s
}

func (s *GetPayAsYouGoPriceRequest) SetProductType(v string) *GetPayAsYouGoPriceRequest {
	s.ProductType = &v
	return s
}

func (s *GetPayAsYouGoPriceRequest) SetSubscriptionType(v string) *GetPayAsYouGoPriceRequest {
	s.SubscriptionType = &v
	return s
}

func (s *GetPayAsYouGoPriceRequest) SetRegion(v string) *GetPayAsYouGoPriceRequest {
	s.Region = &v
	return s
}

func (s *GetPayAsYouGoPriceRequest) SetModuleList(v []*GetPayAsYouGoPriceRequestModuleList) *GetPayAsYouGoPriceRequest {
	s.ModuleList = v
	return s
}

type GetPayAsYouGoPriceRequestModuleList struct {
	ModuleCode *string `json:"ModuleCode,omitempty" xml:"ModuleCode,omitempty" require:"true"`
	Config     *string `json:"Config,omitempty" xml:"Config,omitempty" require:"true"`
	PriceType  *string `json:"PriceType,omitempty" xml:"PriceType,omitempty" require:"true"`
}

func (s GetPayAsYouGoPriceRequestModuleList) String() string {
	return tea.Prettify(s)
}

func (s GetPayAsYouGoPriceRequestModuleList) GoString() string {
	return s.String()
}

func (s *GetPayAsYouGoPriceRequestModuleList) SetModuleCode(v string) *GetPayAsYouGoPriceRequestModuleList {
	s.ModuleCode = &v
	return s
}

func (s *GetPayAsYouGoPriceRequestModuleList) SetConfig(v string) *GetPayAsYouGoPriceRequestModuleList {
	s.Config = &v
	return s
}

func (s *GetPayAsYouGoPriceRequestModuleList) SetPriceType(v string) *GetPayAsYouGoPriceRequestModuleList {
	s.PriceType = &v
	return s
}

type GetPayAsYouGoPriceResponse struct {
	RequestId *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                           `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                         `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                         `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *GetPayAsYouGoPriceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetPayAsYouGoPriceResponse) String() string {
	return tea.Prettify(s)
}

func (s GetPayAsYouGoPriceResponse) GoString() string {
	return s.String()
}

func (s *GetPayAsYouGoPriceResponse) SetRequestId(v string) *GetPayAsYouGoPriceResponse {
	s.RequestId = &v
	return s
}

func (s *GetPayAsYouGoPriceResponse) SetSuccess(v bool) *GetPayAsYouGoPriceResponse {
	s.Success = &v
	return s
}

func (s *GetPayAsYouGoPriceResponse) SetCode(v string) *GetPayAsYouGoPriceResponse {
	s.Code = &v
	return s
}

func (s *GetPayAsYouGoPriceResponse) SetMessage(v string) *GetPayAsYouGoPriceResponse {
	s.Message = &v
	return s
}

func (s *GetPayAsYouGoPriceResponse) SetData(v *GetPayAsYouGoPriceResponseData) *GetPayAsYouGoPriceResponse {
	s.Data = v
	return s
}

type GetPayAsYouGoPriceResponseData struct {
	Currency         *string                                         `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	ModuleDetails    *GetPayAsYouGoPriceResponseDataModuleDetails    `json:"ModuleDetails,omitempty" xml:"ModuleDetails,omitempty" require:"true" type:"Struct"`
	PromotionDetails *GetPayAsYouGoPriceResponseDataPromotionDetails `json:"PromotionDetails,omitempty" xml:"PromotionDetails,omitempty" require:"true" type:"Struct"`
}

func (s GetPayAsYouGoPriceResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetPayAsYouGoPriceResponseData) GoString() string {
	return s.String()
}

func (s *GetPayAsYouGoPriceResponseData) SetCurrency(v string) *GetPayAsYouGoPriceResponseData {
	s.Currency = &v
	return s
}

func (s *GetPayAsYouGoPriceResponseData) SetModuleDetails(v *GetPayAsYouGoPriceResponseDataModuleDetails) *GetPayAsYouGoPriceResponseData {
	s.ModuleDetails = v
	return s
}

func (s *GetPayAsYouGoPriceResponseData) SetPromotionDetails(v *GetPayAsYouGoPriceResponseDataPromotionDetails) *GetPayAsYouGoPriceResponseData {
	s.PromotionDetails = v
	return s
}

type GetPayAsYouGoPriceResponseDataModuleDetails struct {
	ModuleDetail []*GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail `json:"ModuleDetail,omitempty" xml:"ModuleDetail,omitempty" require:"true" type:"Repeated"`
}

func (s GetPayAsYouGoPriceResponseDataModuleDetails) String() string {
	return tea.Prettify(s)
}

func (s GetPayAsYouGoPriceResponseDataModuleDetails) GoString() string {
	return s.String()
}

func (s *GetPayAsYouGoPriceResponseDataModuleDetails) SetModuleDetail(v []*GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail) *GetPayAsYouGoPriceResponseDataModuleDetails {
	s.ModuleDetail = v
	return s
}

type GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail struct {
	ModuleCode        *string  `json:"ModuleCode,omitempty" xml:"ModuleCode,omitempty" require:"true"`
	OriginalCost      *float32 `json:"OriginalCost,omitempty" xml:"OriginalCost,omitempty" require:"true"`
	InvoiceDiscount   *float32 `json:"InvoiceDiscount,omitempty" xml:"InvoiceDiscount,omitempty" require:"true"`
	CostAfterDiscount *float32 `json:"CostAfterDiscount,omitempty" xml:"CostAfterDiscount,omitempty" require:"true"`
	UnitPrice         *float32 `json:"UnitPrice,omitempty" xml:"UnitPrice,omitempty" require:"true"`
}

func (s GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail) String() string {
	return tea.Prettify(s)
}

func (s GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail) GoString() string {
	return s.String()
}

func (s *GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail) SetModuleCode(v string) *GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail {
	s.ModuleCode = &v
	return s
}

func (s *GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail) SetOriginalCost(v float32) *GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail {
	s.OriginalCost = &v
	return s
}

func (s *GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail) SetInvoiceDiscount(v float32) *GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail {
	s.InvoiceDiscount = &v
	return s
}

func (s *GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail) SetCostAfterDiscount(v float32) *GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail {
	s.CostAfterDiscount = &v
	return s
}

func (s *GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail) SetUnitPrice(v float32) *GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail {
	s.UnitPrice = &v
	return s
}

type GetPayAsYouGoPriceResponseDataPromotionDetails struct {
	PromotionDetail []*GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail `json:"PromotionDetail,omitempty" xml:"PromotionDetail,omitempty" require:"true" type:"Repeated"`
}

func (s GetPayAsYouGoPriceResponseDataPromotionDetails) String() string {
	return tea.Prettify(s)
}

func (s GetPayAsYouGoPriceResponseDataPromotionDetails) GoString() string {
	return s.String()
}

func (s *GetPayAsYouGoPriceResponseDataPromotionDetails) SetPromotionDetail(v []*GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail) *GetPayAsYouGoPriceResponseDataPromotionDetails {
	s.PromotionDetail = v
	return s
}

type GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail struct {
	PromotionName *string `json:"PromotionName,omitempty" xml:"PromotionName,omitempty" require:"true"`
	PromotionDesc *string `json:"PromotionDesc,omitempty" xml:"PromotionDesc,omitempty" require:"true"`
	PromotionId   *int64  `json:"PromotionId,omitempty" xml:"PromotionId,omitempty" require:"true"`
}

func (s GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail) String() string {
	return tea.Prettify(s)
}

func (s GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail) GoString() string {
	return s.String()
}

func (s *GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail) SetPromotionName(v string) *GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail {
	s.PromotionName = &v
	return s
}

func (s *GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail) SetPromotionDesc(v string) *GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail {
	s.PromotionDesc = &v
	return s
}

func (s *GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail) SetPromotionId(v int64) *GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail {
	s.PromotionId = &v
	return s
}

type QueryPrepaidCardsRequest struct {
	ExpiryTimeEnd   *string `json:"ExpiryTimeEnd,omitempty" xml:"ExpiryTimeEnd,omitempty"`
	ExpiryTimeStart *string `json:"ExpiryTimeStart,omitempty" xml:"ExpiryTimeStart,omitempty"`
	EffectiveOrNot  *bool   `json:"EffectiveOrNot,omitempty" xml:"EffectiveOrNot,omitempty"`
}

func (s QueryPrepaidCardsRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryPrepaidCardsRequest) GoString() string {
	return s.String()
}

func (s *QueryPrepaidCardsRequest) SetExpiryTimeEnd(v string) *QueryPrepaidCardsRequest {
	s.ExpiryTimeEnd = &v
	return s
}

func (s *QueryPrepaidCardsRequest) SetExpiryTimeStart(v string) *QueryPrepaidCardsRequest {
	s.ExpiryTimeStart = &v
	return s
}

func (s *QueryPrepaidCardsRequest) SetEffectiveOrNot(v bool) *QueryPrepaidCardsRequest {
	s.EffectiveOrNot = &v
	return s
}

type QueryPrepaidCardsResponse struct {
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                        `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                        `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryPrepaidCardsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryPrepaidCardsResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryPrepaidCardsResponse) GoString() string {
	return s.String()
}

func (s *QueryPrepaidCardsResponse) SetRequestId(v string) *QueryPrepaidCardsResponse {
	s.RequestId = &v
	return s
}

func (s *QueryPrepaidCardsResponse) SetSuccess(v bool) *QueryPrepaidCardsResponse {
	s.Success = &v
	return s
}

func (s *QueryPrepaidCardsResponse) SetCode(v string) *QueryPrepaidCardsResponse {
	s.Code = &v
	return s
}

func (s *QueryPrepaidCardsResponse) SetMessage(v string) *QueryPrepaidCardsResponse {
	s.Message = &v
	return s
}

func (s *QueryPrepaidCardsResponse) SetData(v *QueryPrepaidCardsResponseData) *QueryPrepaidCardsResponse {
	s.Data = v
	return s
}

type QueryPrepaidCardsResponseData struct {
	PrepaidCard []*QueryPrepaidCardsResponseDataPrepaidCard `json:"PrepaidCard,omitempty" xml:"PrepaidCard,omitempty" require:"true" type:"Repeated"`
}

func (s QueryPrepaidCardsResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryPrepaidCardsResponseData) GoString() string {
	return s.String()
}

func (s *QueryPrepaidCardsResponseData) SetPrepaidCard(v []*QueryPrepaidCardsResponseDataPrepaidCard) *QueryPrepaidCardsResponseData {
	s.PrepaidCard = v
	return s
}

type QueryPrepaidCardsResponseDataPrepaidCard struct {
	PrepaidCardId       *int64  `json:"PrepaidCardId,omitempty" xml:"PrepaidCardId,omitempty" require:"true"`
	PrepaidCardNo       *string `json:"PrepaidCardNo,omitempty" xml:"PrepaidCardNo,omitempty" require:"true"`
	GrantedTime         *string `json:"GrantedTime,omitempty" xml:"GrantedTime,omitempty" require:"true"`
	EffectiveTime       *string `json:"EffectiveTime,omitempty" xml:"EffectiveTime,omitempty" require:"true"`
	ExpiryTime          *string `json:"ExpiryTime,omitempty" xml:"ExpiryTime,omitempty" require:"true"`
	ApplicableProducts  *string `json:"ApplicableProducts,omitempty" xml:"ApplicableProducts,omitempty" require:"true"`
	ApplicableScenarios *string `json:"ApplicableScenarios,omitempty" xml:"ApplicableScenarios,omitempty" require:"true"`
	NominalValue        *string `json:"NominalValue,omitempty" xml:"NominalValue,omitempty" require:"true"`
	Balance             *string `json:"Balance,omitempty" xml:"Balance,omitempty" require:"true"`
	Status              *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s QueryPrepaidCardsResponseDataPrepaidCard) String() string {
	return tea.Prettify(s)
}

func (s QueryPrepaidCardsResponseDataPrepaidCard) GoString() string {
	return s.String()
}

func (s *QueryPrepaidCardsResponseDataPrepaidCard) SetPrepaidCardId(v int64) *QueryPrepaidCardsResponseDataPrepaidCard {
	s.PrepaidCardId = &v
	return s
}

func (s *QueryPrepaidCardsResponseDataPrepaidCard) SetPrepaidCardNo(v string) *QueryPrepaidCardsResponseDataPrepaidCard {
	s.PrepaidCardNo = &v
	return s
}

func (s *QueryPrepaidCardsResponseDataPrepaidCard) SetGrantedTime(v string) *QueryPrepaidCardsResponseDataPrepaidCard {
	s.GrantedTime = &v
	return s
}

func (s *QueryPrepaidCardsResponseDataPrepaidCard) SetEffectiveTime(v string) *QueryPrepaidCardsResponseDataPrepaidCard {
	s.EffectiveTime = &v
	return s
}

func (s *QueryPrepaidCardsResponseDataPrepaidCard) SetExpiryTime(v string) *QueryPrepaidCardsResponseDataPrepaidCard {
	s.ExpiryTime = &v
	return s
}

func (s *QueryPrepaidCardsResponseDataPrepaidCard) SetApplicableProducts(v string) *QueryPrepaidCardsResponseDataPrepaidCard {
	s.ApplicableProducts = &v
	return s
}

func (s *QueryPrepaidCardsResponseDataPrepaidCard) SetApplicableScenarios(v string) *QueryPrepaidCardsResponseDataPrepaidCard {
	s.ApplicableScenarios = &v
	return s
}

func (s *QueryPrepaidCardsResponseDataPrepaidCard) SetNominalValue(v string) *QueryPrepaidCardsResponseDataPrepaidCard {
	s.NominalValue = &v
	return s
}

func (s *QueryPrepaidCardsResponseDataPrepaidCard) SetBalance(v string) *QueryPrepaidCardsResponseDataPrepaidCard {
	s.Balance = &v
	return s
}

func (s *QueryPrepaidCardsResponseDataPrepaidCard) SetStatus(v string) *QueryPrepaidCardsResponseDataPrepaidCard {
	s.Status = &v
	return s
}

type QueryCashCouponsRequest struct {
	ExpiryTimeEnd   *string `json:"ExpiryTimeEnd,omitempty" xml:"ExpiryTimeEnd,omitempty"`
	ExpiryTimeStart *string `json:"ExpiryTimeStart,omitempty" xml:"ExpiryTimeStart,omitempty"`
	EffectiveOrNot  *bool   `json:"EffectiveOrNot,omitempty" xml:"EffectiveOrNot,omitempty"`
}

func (s QueryCashCouponsRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryCashCouponsRequest) GoString() string {
	return s.String()
}

func (s *QueryCashCouponsRequest) SetExpiryTimeEnd(v string) *QueryCashCouponsRequest {
	s.ExpiryTimeEnd = &v
	return s
}

func (s *QueryCashCouponsRequest) SetExpiryTimeStart(v string) *QueryCashCouponsRequest {
	s.ExpiryTimeStart = &v
	return s
}

func (s *QueryCashCouponsRequest) SetEffectiveOrNot(v bool) *QueryCashCouponsRequest {
	s.EffectiveOrNot = &v
	return s
}

type QueryCashCouponsResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                       `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                       `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryCashCouponsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryCashCouponsResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryCashCouponsResponse) GoString() string {
	return s.String()
}

func (s *QueryCashCouponsResponse) SetRequestId(v string) *QueryCashCouponsResponse {
	s.RequestId = &v
	return s
}

func (s *QueryCashCouponsResponse) SetSuccess(v bool) *QueryCashCouponsResponse {
	s.Success = &v
	return s
}

func (s *QueryCashCouponsResponse) SetCode(v string) *QueryCashCouponsResponse {
	s.Code = &v
	return s
}

func (s *QueryCashCouponsResponse) SetMessage(v string) *QueryCashCouponsResponse {
	s.Message = &v
	return s
}

func (s *QueryCashCouponsResponse) SetData(v *QueryCashCouponsResponseData) *QueryCashCouponsResponse {
	s.Data = v
	return s
}

type QueryCashCouponsResponseData struct {
	CashCoupon []*QueryCashCouponsResponseDataCashCoupon `json:"CashCoupon,omitempty" xml:"CashCoupon,omitempty" require:"true" type:"Repeated"`
}

func (s QueryCashCouponsResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryCashCouponsResponseData) GoString() string {
	return s.String()
}

func (s *QueryCashCouponsResponseData) SetCashCoupon(v []*QueryCashCouponsResponseDataCashCoupon) *QueryCashCouponsResponseData {
	s.CashCoupon = v
	return s
}

type QueryCashCouponsResponseDataCashCoupon struct {
	CashCouponId        *int64  `json:"CashCouponId,omitempty" xml:"CashCouponId,omitempty" require:"true"`
	CashCouponNo        *string `json:"CashCouponNo,omitempty" xml:"CashCouponNo,omitempty" require:"true"`
	GrantedTime         *string `json:"GrantedTime,omitempty" xml:"GrantedTime,omitempty" require:"true"`
	EffectiveTime       *string `json:"EffectiveTime,omitempty" xml:"EffectiveTime,omitempty" require:"true"`
	ExpiryTime          *string `json:"ExpiryTime,omitempty" xml:"ExpiryTime,omitempty" require:"true"`
	ApplicableProducts  *string `json:"ApplicableProducts,omitempty" xml:"ApplicableProducts,omitempty" require:"true"`
	ApplicableScenarios *string `json:"ApplicableScenarios,omitempty" xml:"ApplicableScenarios,omitempty" require:"true"`
	NominalValue        *string `json:"NominalValue,omitempty" xml:"NominalValue,omitempty" require:"true"`
	Balance             *string `json:"Balance,omitempty" xml:"Balance,omitempty" require:"true"`
	Status              *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s QueryCashCouponsResponseDataCashCoupon) String() string {
	return tea.Prettify(s)
}

func (s QueryCashCouponsResponseDataCashCoupon) GoString() string {
	return s.String()
}

func (s *QueryCashCouponsResponseDataCashCoupon) SetCashCouponId(v int64) *QueryCashCouponsResponseDataCashCoupon {
	s.CashCouponId = &v
	return s
}

func (s *QueryCashCouponsResponseDataCashCoupon) SetCashCouponNo(v string) *QueryCashCouponsResponseDataCashCoupon {
	s.CashCouponNo = &v
	return s
}

func (s *QueryCashCouponsResponseDataCashCoupon) SetGrantedTime(v string) *QueryCashCouponsResponseDataCashCoupon {
	s.GrantedTime = &v
	return s
}

func (s *QueryCashCouponsResponseDataCashCoupon) SetEffectiveTime(v string) *QueryCashCouponsResponseDataCashCoupon {
	s.EffectiveTime = &v
	return s
}

func (s *QueryCashCouponsResponseDataCashCoupon) SetExpiryTime(v string) *QueryCashCouponsResponseDataCashCoupon {
	s.ExpiryTime = &v
	return s
}

func (s *QueryCashCouponsResponseDataCashCoupon) SetApplicableProducts(v string) *QueryCashCouponsResponseDataCashCoupon {
	s.ApplicableProducts = &v
	return s
}

func (s *QueryCashCouponsResponseDataCashCoupon) SetApplicableScenarios(v string) *QueryCashCouponsResponseDataCashCoupon {
	s.ApplicableScenarios = &v
	return s
}

func (s *QueryCashCouponsResponseDataCashCoupon) SetNominalValue(v string) *QueryCashCouponsResponseDataCashCoupon {
	s.NominalValue = &v
	return s
}

func (s *QueryCashCouponsResponseDataCashCoupon) SetBalance(v string) *QueryCashCouponsResponseDataCashCoupon {
	s.Balance = &v
	return s
}

func (s *QueryCashCouponsResponseDataCashCoupon) SetStatus(v string) *QueryCashCouponsResponseDataCashCoupon {
	s.Status = &v
	return s
}

type QueryAccountBalanceRequest struct {
}

func (s QueryAccountBalanceRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountBalanceRequest) GoString() string {
	return s.String()
}

type QueryAccountBalanceResponse struct {
	RequestId *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                            `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                          `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                          `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *QueryAccountBalanceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s QueryAccountBalanceResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountBalanceResponse) GoString() string {
	return s.String()
}

func (s *QueryAccountBalanceResponse) SetRequestId(v string) *QueryAccountBalanceResponse {
	s.RequestId = &v
	return s
}

func (s *QueryAccountBalanceResponse) SetSuccess(v bool) *QueryAccountBalanceResponse {
	s.Success = &v
	return s
}

func (s *QueryAccountBalanceResponse) SetCode(v string) *QueryAccountBalanceResponse {
	s.Code = &v
	return s
}

func (s *QueryAccountBalanceResponse) SetMessage(v string) *QueryAccountBalanceResponse {
	s.Message = &v
	return s
}

func (s *QueryAccountBalanceResponse) SetData(v *QueryAccountBalanceResponseData) *QueryAccountBalanceResponse {
	s.Data = v
	return s
}

type QueryAccountBalanceResponseData struct {
	AvailableAmount     *string `json:"AvailableAmount,omitempty" xml:"AvailableAmount,omitempty" require:"true"`
	AvailableCashAmount *string `json:"AvailableCashAmount,omitempty" xml:"AvailableCashAmount,omitempty" require:"true"`
	CreditAmount        *string `json:"CreditAmount,omitempty" xml:"CreditAmount,omitempty" require:"true"`
	MybankCreditAmount  *string `json:"MybankCreditAmount,omitempty" xml:"MybankCreditAmount,omitempty" require:"true"`
	Currency            *string `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
}

func (s QueryAccountBalanceResponseData) String() string {
	return tea.Prettify(s)
}

func (s QueryAccountBalanceResponseData) GoString() string {
	return s.String()
}

func (s *QueryAccountBalanceResponseData) SetAvailableAmount(v string) *QueryAccountBalanceResponseData {
	s.AvailableAmount = &v
	return s
}

func (s *QueryAccountBalanceResponseData) SetAvailableCashAmount(v string) *QueryAccountBalanceResponseData {
	s.AvailableCashAmount = &v
	return s
}

func (s *QueryAccountBalanceResponseData) SetCreditAmount(v string) *QueryAccountBalanceResponseData {
	s.CreditAmount = &v
	return s
}

func (s *QueryAccountBalanceResponseData) SetMybankCreditAmount(v string) *QueryAccountBalanceResponseData {
	s.MybankCreditAmount = &v
	return s
}

func (s *QueryAccountBalanceResponseData) SetCurrency(v string) *QueryAccountBalanceResponseData {
	s.Currency = &v
	return s
}

type DescribeResourcePackageProductRequest struct {
	ProductCode *string `json:"ProductCode,omitempty" xml:"ProductCode,omitempty"`
}

func (s DescribeResourcePackageProductRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductRequest) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductRequest) SetProductCode(v string) *DescribeResourcePackageProductRequest {
	s.ProductCode = &v
	return s
}

type DescribeResourcePackageProductResponse struct {
	RequestId *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OrderId   *int64                                      `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
	Success   *bool                                       `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                                     `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                                     `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *DescribeResourcePackageProductResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DescribeResourcePackageProductResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponse) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponse) SetRequestId(v string) *DescribeResourcePackageProductResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeResourcePackageProductResponse) SetOrderId(v int64) *DescribeResourcePackageProductResponse {
	s.OrderId = &v
	return s
}

func (s *DescribeResourcePackageProductResponse) SetSuccess(v bool) *DescribeResourcePackageProductResponse {
	s.Success = &v
	return s
}

func (s *DescribeResourcePackageProductResponse) SetCode(v string) *DescribeResourcePackageProductResponse {
	s.Code = &v
	return s
}

func (s *DescribeResourcePackageProductResponse) SetMessage(v string) *DescribeResourcePackageProductResponse {
	s.Message = &v
	return s
}

func (s *DescribeResourcePackageProductResponse) SetData(v *DescribeResourcePackageProductResponseData) *DescribeResourcePackageProductResponse {
	s.Data = v
	return s
}

type DescribeResourcePackageProductResponseData struct {
	ResourcePackages *DescribeResourcePackageProductResponseDataResourcePackages `json:"ResourcePackages,omitempty" xml:"ResourcePackages,omitempty" require:"true" type:"Struct"`
}

func (s DescribeResourcePackageProductResponseData) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseData) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseData) SetResourcePackages(v *DescribeResourcePackageProductResponseDataResourcePackages) *DescribeResourcePackageProductResponseData {
	s.ResourcePackages = v
	return s
}

type DescribeResourcePackageProductResponseDataResourcePackages struct {
	ResourcePackage []*DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage `json:"ResourcePackage,omitempty" xml:"ResourcePackage,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeResourcePackageProductResponseDataResourcePackages) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseDataResourcePackages) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseDataResourcePackages) SetResourcePackage(v []*DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage) *DescribeResourcePackageProductResponseDataResourcePackages {
	s.ResourcePackage = v
	return s
}

type DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage struct {
	ProductCode  *string                                                                                `json:"ProductCode,omitempty" xml:"ProductCode,omitempty" require:"true"`
	ProductType  *string                                                                                `json:"ProductType,omitempty" xml:"ProductType,omitempty" require:"true"`
	Name         *string                                                                                `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	PackageTypes *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes `json:"PackageTypes,omitempty" xml:"PackageTypes,omitempty" require:"true" type:"Struct"`
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage) SetProductCode(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage {
	s.ProductCode = &v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage) SetProductType(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage {
	s.ProductType = &v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage) SetName(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage {
	s.Name = &v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage) SetPackageTypes(v *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage {
	s.PackageTypes = v
	return s
}

type DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes struct {
	PackageType []*DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType `json:"PackageType,omitempty" xml:"PackageType,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes) SetPackageType(v []*DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes {
	s.PackageType = v
	return s
}

type DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType struct {
	Name           *string                                                                                                         `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Code           *string                                                                                                         `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Properties     *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties     `json:"Properties,omitempty" xml:"Properties,omitempty" require:"true" type:"Struct"`
	Specifications *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications `json:"Specifications,omitempty" xml:"Specifications,omitempty" require:"true" type:"Struct"`
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType) SetName(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType {
	s.Name = &v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType) SetCode(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType {
	s.Code = &v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType) SetProperties(v *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType {
	s.Properties = v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType) SetSpecifications(v *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType {
	s.Specifications = v
	return s
}

type DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties struct {
	Property []*DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty `json:"Property,omitempty" xml:"Property,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties) SetProperty(v []*DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties {
	s.Property = v
	return s
}

type DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty) SetName(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty {
	s.Name = &v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty) SetValue(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty {
	s.Value = &v
	return s
}

type DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications struct {
	Specification []*DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification `json:"Specification,omitempty" xml:"Specification,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications) SetSpecification(v []*DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications {
	s.Specification = v
	return s
}

type DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification struct {
	Name               *string                                                                                                                                        `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value              *string                                                                                                                                        `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	AvailableDurations *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations `json:"AvailableDurations,omitempty" xml:"AvailableDurations,omitempty" require:"true" type:"Struct"`
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification) SetName(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification {
	s.Name = &v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification) SetValue(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification {
	s.Value = &v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification) SetAvailableDurations(v *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification {
	s.AvailableDurations = v
	return s
}

type DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations struct {
	AvailableDuration []*DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration `json:"AvailableDuration,omitempty" xml:"AvailableDuration,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations) SetAvailableDuration(v []*DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations {
	s.AvailableDuration = v
	return s
}

type DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *int    `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	Unit  *string `json:"Unit,omitempty" xml:"Unit,omitempty" require:"true"`
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration) GoString() string {
	return s.String()
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration) SetName(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration {
	s.Name = &v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration) SetValue(v int) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration {
	s.Value = &v
	return s
}

func (s *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration) SetUnit(v string) *DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration {
	s.Unit = &v
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
	client.EndpointRule = tea.String("regional")
	client.EndpointMap = map[string]*string{
		"ap-northeast-1":              tea.String("business.ap-southeast-1.aliyuncs.com"),
		"ap-northeast-2-pop":          tea.String("business.ap-southeast-1.aliyuncs.com"),
		"ap-south-1":                  tea.String("business.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-1":              tea.String("business.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-2":              tea.String("business.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-3":              tea.String("business.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-5":              tea.String("business.ap-southeast-1.aliyuncs.com"),
		"cn-beijing":                  tea.String("business.aliyuncs.com"),
		"cn-beijing-finance-1":        tea.String("business.aliyuncs.com"),
		"cn-beijing-finance-pop":      tea.String("business.aliyuncs.com"),
		"cn-beijing-gov-1":            tea.String("business.aliyuncs.com"),
		"cn-beijing-nu16-b01":         tea.String("business.aliyuncs.com"),
		"cn-chengdu":                  tea.String("business.aliyuncs.com"),
		"cn-edge-1":                   tea.String("business.aliyuncs.com"),
		"cn-fujian":                   tea.String("business.aliyuncs.com"),
		"cn-haidian-cm12-c01":         tea.String("business.aliyuncs.com"),
		"cn-hangzhou":                 tea.String("business.aliyuncs.com"),
		"cn-hangzhou-bj-b01":          tea.String("business.aliyuncs.com"),
		"cn-hangzhou-finance":         tea.String("business.aliyuncs.com"),
		"cn-hangzhou-internal-prod-1": tea.String("business.aliyuncs.com"),
		"cn-hangzhou-internal-test-1": tea.String("business.aliyuncs.com"),
		"cn-hangzhou-internal-test-2": tea.String("business.aliyuncs.com"),
		"cn-hangzhou-internal-test-3": tea.String("business.aliyuncs.com"),
		"cn-hangzhou-test-306":        tea.String("business.aliyuncs.com"),
		"cn-hongkong":                 tea.String("business.aliyuncs.com"),
		"cn-hongkong-finance-pop":     tea.String("business.aliyuncs.com"),
		"cn-huhehaote":                tea.String("business.aliyuncs.com"),
		"cn-north-2-gov-1":            tea.String("business.aliyuncs.com"),
		"cn-qingdao":                  tea.String("business.aliyuncs.com"),
		"cn-qingdao-nebula":           tea.String("business.aliyuncs.com"),
		"cn-shanghai":                 tea.String("business.aliyuncs.com"),
		"cn-shanghai-et15-b01":        tea.String("business.aliyuncs.com"),
		"cn-shanghai-et2-b01":         tea.String("business.aliyuncs.com"),
		"cn-shanghai-finance-1":       tea.String("business.aliyuncs.com"),
		"cn-shanghai-inner":           tea.String("business.aliyuncs.com"),
		"cn-shanghai-internal-test-1": tea.String("business.aliyuncs.com"),
		"cn-shenzhen":                 tea.String("business.aliyuncs.com"),
		"cn-shenzhen-finance-1":       tea.String("business.aliyuncs.com"),
		"cn-shenzhen-inner":           tea.String("business.aliyuncs.com"),
		"cn-shenzhen-st4-d01":         tea.String("business.aliyuncs.com"),
		"cn-shenzhen-su18-b01":        tea.String("business.aliyuncs.com"),
		"cn-wuhan":                    tea.String("business.aliyuncs.com"),
		"cn-yushanfang":               tea.String("business.aliyuncs.com"),
		"cn-zhangbei-na61-b01":        tea.String("business.aliyuncs.com"),
		"cn-zhangjiakou":              tea.String("business.aliyuncs.com"),
		"cn-zhangjiakou-na62-a01":     tea.String("business.aliyuncs.com"),
		"cn-zhengzhou-nebula-1":       tea.String("business.aliyuncs.com"),
		"eu-central-1":                tea.String("business.ap-southeast-1.aliyuncs.com"),
		"eu-west-1":                   tea.String("business.ap-southeast-1.aliyuncs.com"),
		"eu-west-1-oxs":               tea.String("business.ap-southeast-1.aliyuncs.com"),
		"me-east-1":                   tea.String("business.ap-southeast-1.aliyuncs.com"),
		"rus-west-1-pop":              tea.String("business.ap-southeast-1.aliyuncs.com"),
		"us-east-1":                   tea.String("business.ap-southeast-1.aliyuncs.com"),
		"us-west-1":                   tea.String("business.ap-southeast-1.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("bssopenapi"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) QuerySettleBillWithOptions(request *QuerySettleBillRequest, runtime *util.RuntimeOptions) (_result *QuerySettleBillResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QuerySettleBillResponse{}
	_body, _err := client.DoRequest(tea.String("QuerySettleBill"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QuerySettleBill(request *QuerySettleBillRequest) (_result *QuerySettleBillResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QuerySettleBillResponse{}
	_body, _err := client.QuerySettleBillWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QuerySplitItemBillWithOptions(request *QuerySplitItemBillRequest, runtime *util.RuntimeOptions) (_result *QuerySplitItemBillResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QuerySplitItemBillResponse{}
	_body, _err := client.DoRequest(tea.String("QuerySplitItemBill"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QuerySplitItemBill(request *QuerySplitItemBillRequest) (_result *QuerySplitItemBillResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QuerySplitItemBillResponse{}
	_body, _err := client.QuerySplitItemBillWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryRIUtilizationDetailWithOptions(request *QueryRIUtilizationDetailRequest, runtime *util.RuntimeOptions) (_result *QueryRIUtilizationDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryRIUtilizationDetailResponse{}
	_body, _err := client.DoRequest(tea.String("QueryRIUtilizationDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryRIUtilizationDetail(request *QueryRIUtilizationDetailRequest) (_result *QueryRIUtilizationDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryRIUtilizationDetailResponse{}
	_body, _err := client.QueryRIUtilizationDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryBillToOSSSubscriptionWithOptions(request *QueryBillToOSSSubscriptionRequest, runtime *util.RuntimeOptions) (_result *QueryBillToOSSSubscriptionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryBillToOSSSubscriptionResponse{}
	_body, _err := client.DoRequest(tea.String("QueryBillToOSSSubscription"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryBillToOSSSubscription(request *QueryBillToOSSSubscriptionRequest) (_result *QueryBillToOSSSubscriptionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryBillToOSSSubscriptionResponse{}
	_body, _err := client.QueryBillToOSSSubscriptionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryAccountBillWithOptions(request *QueryAccountBillRequest, runtime *util.RuntimeOptions) (_result *QueryAccountBillResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryAccountBillResponse{}
	_body, _err := client.DoRequest(tea.String("QueryAccountBill"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryAccountBill(request *QueryAccountBillRequest) (_result *QueryAccountBillResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryAccountBillResponse{}
	_body, _err := client.QueryAccountBillWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateCostUnitWithOptions(request *CreateCostUnitRequest, runtime *util.RuntimeOptions) (_result *CreateCostUnitResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateCostUnitResponse{}
	_body, _err := client.DoRequest(tea.String("CreateCostUnit"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateCostUnit(request *CreateCostUnitRequest) (_result *CreateCostUnitResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateCostUnitResponse{}
	_body, _err := client.CreateCostUnitWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyCostUnitWithOptions(request *ModifyCostUnitRequest, runtime *util.RuntimeOptions) (_result *ModifyCostUnitResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyCostUnitResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyCostUnit"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyCostUnit(request *ModifyCostUnitRequest) (_result *ModifyCostUnitResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyCostUnitResponse{}
	_body, _err := client.ModifyCostUnitWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryCostUnitWithOptions(request *QueryCostUnitRequest, runtime *util.RuntimeOptions) (_result *QueryCostUnitResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryCostUnitResponse{}
	_body, _err := client.DoRequest(tea.String("QueryCostUnit"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryCostUnit(request *QueryCostUnitRequest) (_result *QueryCostUnitResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryCostUnitResponse{}
	_body, _err := client.QueryCostUnitWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteCostUnitWithOptions(request *DeleteCostUnitRequest, runtime *util.RuntimeOptions) (_result *DeleteCostUnitResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteCostUnitResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteCostUnit"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteCostUnit(request *DeleteCostUnitRequest) (_result *DeleteCostUnitResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteCostUnitResponse{}
	_body, _err := client.DeleteCostUnitWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AllocateCostUnitResourceWithOptions(request *AllocateCostUnitResourceRequest, runtime *util.RuntimeOptions) (_result *AllocateCostUnitResourceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AllocateCostUnitResourceResponse{}
	_body, _err := client.DoRequest(tea.String("AllocateCostUnitResource"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AllocateCostUnitResource(request *AllocateCostUnitResourceRequest) (_result *AllocateCostUnitResourceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AllocateCostUnitResourceResponse{}
	_body, _err := client.AllocateCostUnitResourceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryCostUnitResourceWithOptions(request *QueryCostUnitResourceRequest, runtime *util.RuntimeOptions) (_result *QueryCostUnitResourceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryCostUnitResourceResponse{}
	_body, _err := client.DoRequest(tea.String("QueryCostUnitResource"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryCostUnitResource(request *QueryCostUnitResourceRequest) (_result *QueryCostUnitResourceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryCostUnitResourceResponse{}
	_body, _err := client.QueryCostUnitResourceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RenewResourcePackageWithOptions(request *RenewResourcePackageRequest, runtime *util.RuntimeOptions) (_result *RenewResourcePackageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RenewResourcePackageResponse{}
	_body, _err := client.DoRequest(tea.String("RenewResourcePackage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RenewResourcePackage(request *RenewResourcePackageRequest) (_result *RenewResourcePackageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RenewResourcePackageResponse{}
	_body, _err := client.RenewResourcePackageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpgradeResourcePackageWithOptions(request *UpgradeResourcePackageRequest, runtime *util.RuntimeOptions) (_result *UpgradeResourcePackageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpgradeResourcePackageResponse{}
	_body, _err := client.DoRequest(tea.String("UpgradeResourcePackage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpgradeResourcePackage(request *UpgradeResourcePackageRequest) (_result *UpgradeResourcePackageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpgradeResourcePackageResponse{}
	_body, _err := client.UpgradeResourcePackageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAgAccountWithOptions(request *CreateAgAccountRequest, runtime *util.RuntimeOptions) (_result *CreateAgAccountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAgAccountResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAgAccount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAgAccount(request *CreateAgAccountRequest) (_result *CreateAgAccountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAgAccountResponse{}
	_body, _err := client.CreateAgAccountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetCustomerAccountInfoWithOptions(request *GetCustomerAccountInfoRequest, runtime *util.RuntimeOptions) (_result *GetCustomerAccountInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetCustomerAccountInfoResponse{}
	_body, _err := client.DoRequest(tea.String("GetCustomerAccountInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetCustomerAccountInfo(request *GetCustomerAccountInfoRequest) (_result *GetCustomerAccountInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetCustomerAccountInfoResponse{}
	_body, _err := client.GetCustomerAccountInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetCustomerListWithOptions(request *GetCustomerListRequest, runtime *util.RuntimeOptions) (_result *GetCustomerListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetCustomerListResponse{}
	_body, _err := client.DoRequest(tea.String("GetCustomerList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetCustomerList(request *GetCustomerListRequest) (_result *GetCustomerListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetCustomerListResponse{}
	_body, _err := client.GetCustomerListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ChangeResellerConsumeAmountWithOptions(request *ChangeResellerConsumeAmountRequest, runtime *util.RuntimeOptions) (_result *ChangeResellerConsumeAmountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ChangeResellerConsumeAmountResponse{}
	_body, _err := client.DoRequest(tea.String("ChangeResellerConsumeAmount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ChangeResellerConsumeAmount(request *ChangeResellerConsumeAmountRequest) (_result *ChangeResellerConsumeAmountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ChangeResellerConsumeAmountResponse{}
	_body, _err := client.ChangeResellerConsumeAmountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetResellerUserStatusWithOptions(request *SetResellerUserStatusRequest, runtime *util.RuntimeOptions) (_result *SetResellerUserStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetResellerUserStatusResponse{}
	_body, _err := client.DoRequest(tea.String("SetResellerUserStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetResellerUserStatus(request *SetResellerUserStatusRequest) (_result *SetResellerUserStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetResellerUserStatusResponse{}
	_body, _err := client.SetResellerUserStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateResellerUserQuotaWithOptions(request *CreateResellerUserQuotaRequest, runtime *util.RuntimeOptions) (_result *CreateResellerUserQuotaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateResellerUserQuotaResponse{}
	_body, _err := client.DoRequest(tea.String("CreateResellerUserQuota"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateResellerUserQuota(request *CreateResellerUserQuotaRequest) (_result *CreateResellerUserQuotaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateResellerUserQuotaResponse{}
	_body, _err := client.CreateResellerUserQuotaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetResellerUserQuotaWithOptions(request *SetResellerUserQuotaRequest, runtime *util.RuntimeOptions) (_result *SetResellerUserQuotaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetResellerUserQuotaResponse{}
	_body, _err := client.DoRequest(tea.String("SetResellerUserQuota"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetResellerUserQuota(request *SetResellerUserQuotaRequest) (_result *SetResellerUserQuotaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetResellerUserQuotaResponse{}
	_body, _err := client.SetResellerUserQuotaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryResellerAvailableQuotaWithOptions(request *QueryResellerAvailableQuotaRequest, runtime *util.RuntimeOptions) (_result *QueryResellerAvailableQuotaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryResellerAvailableQuotaResponse{}
	_body, _err := client.DoRequest(tea.String("QueryResellerAvailableQuota"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryResellerAvailableQuota(request *QueryResellerAvailableQuotaRequest) (_result *QueryResellerAvailableQuotaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryResellerAvailableQuotaResponse{}
	_body, _err := client.QueryResellerAvailableQuotaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetResellerUserAlarmThresholdWithOptions(request *SetResellerUserAlarmThresholdRequest, runtime *util.RuntimeOptions) (_result *SetResellerUserAlarmThresholdResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetResellerUserAlarmThresholdResponse{}
	_body, _err := client.DoRequest(tea.String("SetResellerUserAlarmThreshold"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetResellerUserAlarmThreshold(request *SetResellerUserAlarmThresholdRequest) (_result *SetResellerUserAlarmThresholdResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetResellerUserAlarmThresholdResponse{}
	_body, _err := client.SetResellerUserAlarmThresholdWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryAccountTransactionsWithOptions(request *QueryAccountTransactionsRequest, runtime *util.RuntimeOptions) (_result *QueryAccountTransactionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryAccountTransactionsResponse{}
	_body, _err := client.DoRequest(tea.String("QueryAccountTransactions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryAccountTransactions(request *QueryAccountTransactionsRequest) (_result *QueryAccountTransactionsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryAccountTransactionsResponse{}
	_body, _err := client.QueryAccountTransactionsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UnsubscribeBillToOSSWithOptions(request *UnsubscribeBillToOSSRequest, runtime *util.RuntimeOptions) (_result *UnsubscribeBillToOSSResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UnsubscribeBillToOSSResponse{}
	_body, _err := client.DoRequest(tea.String("UnsubscribeBillToOSS"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UnsubscribeBillToOSS(request *UnsubscribeBillToOSSRequest) (_result *UnsubscribeBillToOSSResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UnsubscribeBillToOSSResponse{}
	_body, _err := client.UnsubscribeBillToOSSWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SubscribeBillToOSSWithOptions(request *SubscribeBillToOSSRequest, runtime *util.RuntimeOptions) (_result *SubscribeBillToOSSResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SubscribeBillToOSSResponse{}
	_body, _err := client.DoRequest(tea.String("SubscribeBillToOSS"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SubscribeBillToOSS(request *SubscribeBillToOSSRequest) (_result *SubscribeBillToOSSResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SubscribeBillToOSSResponse{}
	_body, _err := client.SubscribeBillToOSSWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryUserOmsDataWithOptions(request *QueryUserOmsDataRequest, runtime *util.RuntimeOptions) (_result *QueryUserOmsDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryUserOmsDataResponse{}
	_body, _err := client.DoRequest(tea.String("QueryUserOmsData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryUserOmsData(request *QueryUserOmsDataRequest) (_result *QueryUserOmsDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryUserOmsDataResponse{}
	_body, _err := client.QueryUserOmsDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelOrderWithOptions(request *CancelOrderRequest, runtime *util.RuntimeOptions) (_result *CancelOrderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelOrderResponse{}
	_body, _err := client.DoRequest(tea.String("CancelOrder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelOrder(request *CancelOrderRequest) (_result *CancelOrderResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelOrderResponse{}
	_body, _err := client.CancelOrderWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ApplyInvoiceWithOptions(request *ApplyInvoiceRequest, runtime *util.RuntimeOptions) (_result *ApplyInvoiceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ApplyInvoiceResponse{}
	_body, _err := client.DoRequest(tea.String("ApplyInvoice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ApplyInvoice(request *ApplyInvoiceRequest) (_result *ApplyInvoiceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ApplyInvoiceResponse{}
	_body, _err := client.ApplyInvoiceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryCustomerAddressListWithOptions(request *QueryCustomerAddressListRequest, runtime *util.RuntimeOptions) (_result *QueryCustomerAddressListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryCustomerAddressListResponse{}
	_body, _err := client.DoRequest(tea.String("QueryCustomerAddressList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryCustomerAddressList(request *QueryCustomerAddressListRequest) (_result *QueryCustomerAddressListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryCustomerAddressListResponse{}
	_body, _err := client.QueryCustomerAddressListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryEvaluateListWithOptions(request *QueryEvaluateListRequest, runtime *util.RuntimeOptions) (_result *QueryEvaluateListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryEvaluateListResponse{}
	_body, _err := client.DoRequest(tea.String("QueryEvaluateList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryEvaluateList(request *QueryEvaluateListRequest) (_result *QueryEvaluateListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryEvaluateListResponse{}
	_body, _err := client.QueryEvaluateListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryInvoicingCustomerListWithOptions(request *QueryInvoicingCustomerListRequest, runtime *util.RuntimeOptions) (_result *QueryInvoicingCustomerListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryInvoicingCustomerListResponse{}
	_body, _err := client.DoRequest(tea.String("QueryInvoicingCustomerList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryInvoicingCustomerList(request *QueryInvoicingCustomerListRequest) (_result *QueryInvoicingCustomerListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryInvoicingCustomerListResponse{}
	_body, _err := client.QueryInvoicingCustomerListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryBillOverviewWithOptions(request *QueryBillOverviewRequest, runtime *util.RuntimeOptions) (_result *QueryBillOverviewResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryBillOverviewResponse{}
	_body, _err := client.DoRequest(tea.String("QueryBillOverview"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryBillOverview(request *QueryBillOverviewRequest) (_result *QueryBillOverviewResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryBillOverviewResponse{}
	_body, _err := client.QueryBillOverviewWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryBillWithOptions(request *QueryBillRequest, runtime *util.RuntimeOptions) (_result *QueryBillResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryBillResponse{}
	_body, _err := client.DoRequest(tea.String("QueryBill"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryBill(request *QueryBillRequest) (_result *QueryBillResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryBillResponse{}
	_body, _err := client.QueryBillWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryInstanceBillWithOptions(request *QueryInstanceBillRequest, runtime *util.RuntimeOptions) (_result *QueryInstanceBillResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryInstanceBillResponse{}
	_body, _err := client.DoRequest(tea.String("QueryInstanceBill"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryInstanceBill(request *QueryInstanceBillRequest) (_result *QueryInstanceBillResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryInstanceBillResponse{}
	_body, _err := client.QueryInstanceBillWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) EnableBillGenerationWithOptions(request *EnableBillGenerationRequest, runtime *util.RuntimeOptions) (_result *EnableBillGenerationResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &EnableBillGenerationResponse{}
	_body, _err := client.DoRequest(tea.String("EnableBillGeneration"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EnableBillGeneration(request *EnableBillGenerationRequest) (_result *EnableBillGenerationResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &EnableBillGenerationResponse{}
	_body, _err := client.EnableBillGenerationWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryRedeemWithOptions(request *QueryRedeemRequest, runtime *util.RuntimeOptions) (_result *QueryRedeemResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryRedeemResponse{}
	_body, _err := client.DoRequest(tea.String("QueryRedeem"), tea.String("HTTPS"), tea.String("GET"), tea.String("2017-12-14"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryRedeem(request *QueryRedeemRequest) (_result *QueryRedeemResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryRedeemResponse{}
	_body, _err := client.QueryRedeemWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ConvertChargeTypeWithOptions(request *ConvertChargeTypeRequest, runtime *util.RuntimeOptions) (_result *ConvertChargeTypeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ConvertChargeTypeResponse{}
	_body, _err := client.DoRequest(tea.String("ConvertChargeType"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ConvertChargeType(request *ConvertChargeTypeRequest) (_result *ConvertChargeTypeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ConvertChargeTypeResponse{}
	_body, _err := client.ConvertChargeTypeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateInstanceWithOptions(request *CreateInstanceRequest, runtime *util.RuntimeOptions) (_result *CreateInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("CreateInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateInstance(request *CreateInstanceRequest) (_result *CreateInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateInstanceResponse{}
	_body, _err := client.CreateInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyInstanceWithOptions(request *ModifyInstanceRequest, runtime *util.RuntimeOptions) (_result *ModifyInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyInstance(request *ModifyInstanceRequest) (_result *ModifyInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyInstanceResponse{}
	_body, _err := client.ModifyInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribePricingModuleWithOptions(request *DescribePricingModuleRequest, runtime *util.RuntimeOptions) (_result *DescribePricingModuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribePricingModuleResponse{}
	_body, _err := client.DoRequest(tea.String("DescribePricingModule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribePricingModule(request *DescribePricingModuleRequest) (_result *DescribePricingModuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribePricingModuleResponse{}
	_body, _err := client.DescribePricingModuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryProductListWithOptions(request *QueryProductListRequest, runtime *util.RuntimeOptions) (_result *QueryProductListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryProductListResponse{}
	_body, _err := client.DoRequest(tea.String("QueryProductList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryProductList(request *QueryProductListRequest) (_result *QueryProductListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryProductListResponse{}
	_body, _err := client.QueryProductListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryInstanceGaapCostWithOptions(request *QueryInstanceGaapCostRequest, runtime *util.RuntimeOptions) (_result *QueryInstanceGaapCostResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryInstanceGaapCostResponse{}
	_body, _err := client.DoRequest(tea.String("QueryInstanceGaapCost"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryInstanceGaapCost(request *QueryInstanceGaapCostRequest) (_result *QueryInstanceGaapCostResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryInstanceGaapCostResponse{}
	_body, _err := client.QueryInstanceGaapCostWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RenewInstanceWithOptions(request *RenewInstanceRequest, runtime *util.RuntimeOptions) (_result *RenewInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RenewInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("RenewInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RenewInstance(request *RenewInstanceRequest) (_result *RenewInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RenewInstanceResponse{}
	_body, _err := client.RenewInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetOrderDetailWithOptions(request *GetOrderDetailRequest, runtime *util.RuntimeOptions) (_result *GetOrderDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetOrderDetailResponse{}
	_body, _err := client.DoRequest(tea.String("GetOrderDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetOrderDetail(request *GetOrderDetailRequest) (_result *GetOrderDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetOrderDetailResponse{}
	_body, _err := client.GetOrderDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryOrdersWithOptions(request *QueryOrdersRequest, runtime *util.RuntimeOptions) (_result *QueryOrdersResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryOrdersResponse{}
	_body, _err := client.DoRequest(tea.String("QueryOrders"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryOrders(request *QueryOrdersRequest) (_result *QueryOrdersResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryOrdersResponse{}
	_body, _err := client.QueryOrdersWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryMonthlyInstanceConsumptionWithOptions(request *QueryMonthlyInstanceConsumptionRequest, runtime *util.RuntimeOptions) (_result *QueryMonthlyInstanceConsumptionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryMonthlyInstanceConsumptionResponse{}
	_body, _err := client.DoRequest(tea.String("QueryMonthlyInstanceConsumption"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryMonthlyInstanceConsumption(request *QueryMonthlyInstanceConsumptionRequest) (_result *QueryMonthlyInstanceConsumptionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryMonthlyInstanceConsumptionResponse{}
	_body, _err := client.QueryMonthlyInstanceConsumptionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QuerySettlementBillWithOptions(request *QuerySettlementBillRequest, runtime *util.RuntimeOptions) (_result *QuerySettlementBillResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QuerySettlementBillResponse{}
	_body, _err := client.DoRequest(tea.String("QuerySettlementBill"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QuerySettlementBill(request *QuerySettlementBillRequest) (_result *QuerySettlementBillResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QuerySettlementBillResponse{}
	_body, _err := client.QuerySettlementBillWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryMonthlyBillWithOptions(request *QueryMonthlyBillRequest, runtime *util.RuntimeOptions) (_result *QueryMonthlyBillResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryMonthlyBillResponse{}
	_body, _err := client.DoRequest(tea.String("QueryMonthlyBill"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryMonthlyBill(request *QueryMonthlyBillRequest) (_result *QueryMonthlyBillResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryMonthlyBillResponse{}
	_body, _err := client.QueryMonthlyBillWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetRenewalWithOptions(request *SetRenewalRequest, runtime *util.RuntimeOptions) (_result *SetRenewalResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetRenewalResponse{}
	_body, _err := client.DoRequest(tea.String("SetRenewal"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetRenewal(request *SetRenewalRequest) (_result *SetRenewalResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetRenewalResponse{}
	_body, _err := client.SetRenewalWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryAvailableInstancesWithOptions(request *QueryAvailableInstancesRequest, runtime *util.RuntimeOptions) (_result *QueryAvailableInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryAvailableInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("QueryAvailableInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryAvailableInstances(request *QueryAvailableInstancesRequest) (_result *QueryAvailableInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryAvailableInstancesResponse{}
	_body, _err := client.QueryAvailableInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateResourcePackageWithOptions(request *CreateResourcePackageRequest, runtime *util.RuntimeOptions) (_result *CreateResourcePackageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateResourcePackageResponse{}
	_body, _err := client.DoRequest(tea.String("CreateResourcePackage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateResourcePackage(request *CreateResourcePackageRequest) (_result *CreateResourcePackageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateResourcePackageResponse{}
	_body, _err := client.CreateResourcePackageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryResourcePackageInstancesWithOptions(request *QueryResourcePackageInstancesRequest, runtime *util.RuntimeOptions) (_result *QueryResourcePackageInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryResourcePackageInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("QueryResourcePackageInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryResourcePackageInstances(request *QueryResourcePackageInstancesRequest) (_result *QueryResourcePackageInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryResourcePackageInstancesResponse{}
	_body, _err := client.QueryResourcePackageInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetResourcePackagePriceWithOptions(request *GetResourcePackagePriceRequest, runtime *util.RuntimeOptions) (_result *GetResourcePackagePriceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetResourcePackagePriceResponse{}
	_body, _err := client.DoRequest(tea.String("GetResourcePackagePrice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetResourcePackagePrice(request *GetResourcePackagePriceRequest) (_result *GetResourcePackagePriceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetResourcePackagePriceResponse{}
	_body, _err := client.GetResourcePackagePriceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetSubscriptionPriceWithOptions(request *GetSubscriptionPriceRequest, runtime *util.RuntimeOptions) (_result *GetSubscriptionPriceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetSubscriptionPriceResponse{}
	_body, _err := client.DoRequest(tea.String("GetSubscriptionPrice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetSubscriptionPrice(request *GetSubscriptionPriceRequest) (_result *GetSubscriptionPriceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetSubscriptionPriceResponse{}
	_body, _err := client.GetSubscriptionPriceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetPayAsYouGoPriceWithOptions(request *GetPayAsYouGoPriceRequest, runtime *util.RuntimeOptions) (_result *GetPayAsYouGoPriceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetPayAsYouGoPriceResponse{}
	_body, _err := client.DoRequest(tea.String("GetPayAsYouGoPrice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetPayAsYouGoPrice(request *GetPayAsYouGoPriceRequest) (_result *GetPayAsYouGoPriceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetPayAsYouGoPriceResponse{}
	_body, _err := client.GetPayAsYouGoPriceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryPrepaidCardsWithOptions(request *QueryPrepaidCardsRequest, runtime *util.RuntimeOptions) (_result *QueryPrepaidCardsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryPrepaidCardsResponse{}
	_body, _err := client.DoRequest(tea.String("QueryPrepaidCards"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryPrepaidCards(request *QueryPrepaidCardsRequest) (_result *QueryPrepaidCardsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryPrepaidCardsResponse{}
	_body, _err := client.QueryPrepaidCardsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryCashCouponsWithOptions(request *QueryCashCouponsRequest, runtime *util.RuntimeOptions) (_result *QueryCashCouponsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryCashCouponsResponse{}
	_body, _err := client.DoRequest(tea.String("QueryCashCoupons"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryCashCoupons(request *QueryCashCouponsRequest) (_result *QueryCashCouponsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryCashCouponsResponse{}
	_body, _err := client.QueryCashCouponsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryAccountBalanceWithOptions(request *QueryAccountBalanceRequest, runtime *util.RuntimeOptions) (_result *QueryAccountBalanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryAccountBalanceResponse{}
	_body, _err := client.DoRequest(tea.String("QueryAccountBalance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryAccountBalance(request *QueryAccountBalanceRequest) (_result *QueryAccountBalanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryAccountBalanceResponse{}
	_body, _err := client.QueryAccountBalanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeResourcePackageProductWithOptions(request *DescribeResourcePackageProductRequest, runtime *util.RuntimeOptions) (_result *DescribeResourcePackageProductResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeResourcePackageProductResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeResourcePackageProduct"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeResourcePackageProduct(request *DescribeResourcePackageProductRequest) (_result *DescribeResourcePackageProductResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeResourcePackageProductResponse{}
	_body, _err := client.DescribeResourcePackageProductWithOptions(request, runtime)
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
