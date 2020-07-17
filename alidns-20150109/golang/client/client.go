// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type DescribeDohDomainStatisticsSummaryRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	StartDate  *string `json:"StartDate,omitempty" xml:"StartDate,omitempty"`
	EndDate    *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
}

func (s DescribeDohDomainStatisticsSummaryRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohDomainStatisticsSummaryRequest) GoString() string {
	return s.String()
}

func (s *DescribeDohDomainStatisticsSummaryRequest) SetLang(v string) *DescribeDohDomainStatisticsSummaryRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryRequest) SetPageNumber(v int) *DescribeDohDomainStatisticsSummaryRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryRequest) SetPageSize(v int) *DescribeDohDomainStatisticsSummaryRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryRequest) SetStartDate(v string) *DescribeDohDomainStatisticsSummaryRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryRequest) SetEndDate(v string) *DescribeDohDomainStatisticsSummaryRequest {
	s.EndDate = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryRequest) SetDomainName(v string) *DescribeDohDomainStatisticsSummaryRequest {
	s.DomainName = &v
	return s
}

type DescribeDohDomainStatisticsSummaryResponse struct {
	RequestId  *string                                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems *int                                                    `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	TotalPages *int                                                    `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	PageSize   *int                                                    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                                    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Statistics []*DescribeDohDomainStatisticsSummaryResponseStatistics `json:"Statistics,omitempty" xml:"Statistics,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDohDomainStatisticsSummaryResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohDomainStatisticsSummaryResponse) GoString() string {
	return s.String()
}

func (s *DescribeDohDomainStatisticsSummaryResponse) SetRequestId(v string) *DescribeDohDomainStatisticsSummaryResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponse) SetTotalItems(v int) *DescribeDohDomainStatisticsSummaryResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponse) SetTotalPages(v int) *DescribeDohDomainStatisticsSummaryResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponse) SetPageSize(v int) *DescribeDohDomainStatisticsSummaryResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponse) SetPageNumber(v int) *DescribeDohDomainStatisticsSummaryResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponse) SetStatistics(v []*DescribeDohDomainStatisticsSummaryResponseStatistics) *DescribeDohDomainStatisticsSummaryResponse {
	s.Statistics = v
	return s
}

type DescribeDohDomainStatisticsSummaryResponseStatistics struct {
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	V4HttpCount  *int64  `json:"V4HttpCount,omitempty" xml:"V4HttpCount,omitempty" require:"true"`
	V6HttpCount  *int64  `json:"V6HttpCount,omitempty" xml:"V6HttpCount,omitempty" require:"true"`
	V4HttpsCount *int64  `json:"V4HttpsCount,omitempty" xml:"V4HttpsCount,omitempty" require:"true"`
	V6HttpsCount *int64  `json:"V6HttpsCount,omitempty" xml:"V6HttpsCount,omitempty" require:"true"`
	TotalCount   *int64  `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	IpCount      *int64  `json:"IpCount,omitempty" xml:"IpCount,omitempty" require:"true"`
	HttpCount    *int64  `json:"HttpCount,omitempty" xml:"HttpCount,omitempty" require:"true"`
	HttpsCount   *int64  `json:"HttpsCount,omitempty" xml:"HttpsCount,omitempty" require:"true"`
}

func (s DescribeDohDomainStatisticsSummaryResponseStatistics) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohDomainStatisticsSummaryResponseStatistics) GoString() string {
	return s.String()
}

func (s *DescribeDohDomainStatisticsSummaryResponseStatistics) SetDomainName(v string) *DescribeDohDomainStatisticsSummaryResponseStatistics {
	s.DomainName = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponseStatistics) SetV4HttpCount(v int64) *DescribeDohDomainStatisticsSummaryResponseStatistics {
	s.V4HttpCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponseStatistics) SetV6HttpCount(v int64) *DescribeDohDomainStatisticsSummaryResponseStatistics {
	s.V6HttpCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponseStatistics) SetV4HttpsCount(v int64) *DescribeDohDomainStatisticsSummaryResponseStatistics {
	s.V4HttpsCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponseStatistics) SetV6HttpsCount(v int64) *DescribeDohDomainStatisticsSummaryResponseStatistics {
	s.V6HttpsCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponseStatistics) SetTotalCount(v int64) *DescribeDohDomainStatisticsSummaryResponseStatistics {
	s.TotalCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponseStatistics) SetIpCount(v int64) *DescribeDohDomainStatisticsSummaryResponseStatistics {
	s.IpCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponseStatistics) SetHttpCount(v int64) *DescribeDohDomainStatisticsSummaryResponseStatistics {
	s.HttpCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsSummaryResponseStatistics) SetHttpsCount(v int64) *DescribeDohDomainStatisticsSummaryResponseStatistics {
	s.HttpsCount = &v
	return s
}

type DescribeDohAccountStatisticsRequest struct {
	Lang      *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	StartDate *string `json:"StartDate,omitempty" xml:"StartDate,omitempty"`
	EndDate   *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
}

func (s DescribeDohAccountStatisticsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohAccountStatisticsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDohAccountStatisticsRequest) SetLang(v string) *DescribeDohAccountStatisticsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDohAccountStatisticsRequest) SetStartDate(v string) *DescribeDohAccountStatisticsRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeDohAccountStatisticsRequest) SetEndDate(v string) *DescribeDohAccountStatisticsRequest {
	s.EndDate = &v
	return s
}

type DescribeDohAccountStatisticsResponse struct {
	RequestId  *string                                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Statistics []*DescribeDohAccountStatisticsResponseStatistics `json:"Statistics,omitempty" xml:"Statistics,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDohAccountStatisticsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohAccountStatisticsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDohAccountStatisticsResponse) SetRequestId(v string) *DescribeDohAccountStatisticsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDohAccountStatisticsResponse) SetStatistics(v []*DescribeDohAccountStatisticsResponseStatistics) *DescribeDohAccountStatisticsResponse {
	s.Statistics = v
	return s
}

type DescribeDohAccountStatisticsResponseStatistics struct {
	Timestamp    *int64 `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	V4HttpCount  *int64 `json:"V4HttpCount,omitempty" xml:"V4HttpCount,omitempty" require:"true"`
	V6HttpCount  *int64 `json:"V6HttpCount,omitempty" xml:"V6HttpCount,omitempty" require:"true"`
	V4HttpsCount *int64 `json:"V4HttpsCount,omitempty" xml:"V4HttpsCount,omitempty" require:"true"`
	V6HttpsCount *int64 `json:"V6HttpsCount,omitempty" xml:"V6HttpsCount,omitempty" require:"true"`
	TotalCount   *int64 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
}

func (s DescribeDohAccountStatisticsResponseStatistics) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohAccountStatisticsResponseStatistics) GoString() string {
	return s.String()
}

func (s *DescribeDohAccountStatisticsResponseStatistics) SetTimestamp(v int64) *DescribeDohAccountStatisticsResponseStatistics {
	s.Timestamp = &v
	return s
}

func (s *DescribeDohAccountStatisticsResponseStatistics) SetV4HttpCount(v int64) *DescribeDohAccountStatisticsResponseStatistics {
	s.V4HttpCount = &v
	return s
}

func (s *DescribeDohAccountStatisticsResponseStatistics) SetV6HttpCount(v int64) *DescribeDohAccountStatisticsResponseStatistics {
	s.V6HttpCount = &v
	return s
}

func (s *DescribeDohAccountStatisticsResponseStatistics) SetV4HttpsCount(v int64) *DescribeDohAccountStatisticsResponseStatistics {
	s.V4HttpsCount = &v
	return s
}

func (s *DescribeDohAccountStatisticsResponseStatistics) SetV6HttpsCount(v int64) *DescribeDohAccountStatisticsResponseStatistics {
	s.V6HttpsCount = &v
	return s
}

func (s *DescribeDohAccountStatisticsResponseStatistics) SetTotalCount(v int64) *DescribeDohAccountStatisticsResponseStatistics {
	s.TotalCount = &v
	return s
}

type DescribeDohSubDomainStatisticsRequest struct {
	Lang      *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	SubDomain *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	StartDate *string `json:"StartDate,omitempty" xml:"StartDate,omitempty"`
	EndDate   *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
}

func (s DescribeDohSubDomainStatisticsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohSubDomainStatisticsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDohSubDomainStatisticsRequest) SetLang(v string) *DescribeDohSubDomainStatisticsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsRequest) SetSubDomain(v string) *DescribeDohSubDomainStatisticsRequest {
	s.SubDomain = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsRequest) SetStartDate(v string) *DescribeDohSubDomainStatisticsRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsRequest) SetEndDate(v string) *DescribeDohSubDomainStatisticsRequest {
	s.EndDate = &v
	return s
}

type DescribeDohSubDomainStatisticsResponse struct {
	RequestId  *string                                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Statistics []*DescribeDohSubDomainStatisticsResponseStatistics `json:"Statistics,omitempty" xml:"Statistics,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDohSubDomainStatisticsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohSubDomainStatisticsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDohSubDomainStatisticsResponse) SetRequestId(v string) *DescribeDohSubDomainStatisticsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsResponse) SetStatistics(v []*DescribeDohSubDomainStatisticsResponseStatistics) *DescribeDohSubDomainStatisticsResponse {
	s.Statistics = v
	return s
}

type DescribeDohSubDomainStatisticsResponseStatistics struct {
	Timestamp    *int64 `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	V4HttpCount  *int64 `json:"V4HttpCount,omitempty" xml:"V4HttpCount,omitempty" require:"true"`
	V4HttpsCount *int64 `json:"V4HttpsCount,omitempty" xml:"V4HttpsCount,omitempty" require:"true"`
	V6HttpCount  *int64 `json:"V6HttpCount,omitempty" xml:"V6HttpCount,omitempty" require:"true"`
	V6HttpsCount *int64 `json:"V6HttpsCount,omitempty" xml:"V6HttpsCount,omitempty" require:"true"`
	TotalCount   *int64 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
}

func (s DescribeDohSubDomainStatisticsResponseStatistics) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohSubDomainStatisticsResponseStatistics) GoString() string {
	return s.String()
}

func (s *DescribeDohSubDomainStatisticsResponseStatistics) SetTimestamp(v int64) *DescribeDohSubDomainStatisticsResponseStatistics {
	s.Timestamp = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsResponseStatistics) SetV4HttpCount(v int64) *DescribeDohSubDomainStatisticsResponseStatistics {
	s.V4HttpCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsResponseStatistics) SetV4HttpsCount(v int64) *DescribeDohSubDomainStatisticsResponseStatistics {
	s.V4HttpsCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsResponseStatistics) SetV6HttpCount(v int64) *DescribeDohSubDomainStatisticsResponseStatistics {
	s.V6HttpCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsResponseStatistics) SetV6HttpsCount(v int64) *DescribeDohSubDomainStatisticsResponseStatistics {
	s.V6HttpsCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsResponseStatistics) SetTotalCount(v int64) *DescribeDohSubDomainStatisticsResponseStatistics {
	s.TotalCount = &v
	return s
}

type DescribeDohSubDomainStatisticsSummaryRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	StartDate  *string `json:"StartDate,omitempty" xml:"StartDate,omitempty"`
	EndDate    *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
	SubDomain  *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
}

func (s DescribeDohSubDomainStatisticsSummaryRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohSubDomainStatisticsSummaryRequest) GoString() string {
	return s.String()
}

func (s *DescribeDohSubDomainStatisticsSummaryRequest) SetLang(v string) *DescribeDohSubDomainStatisticsSummaryRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryRequest) SetPageNumber(v int) *DescribeDohSubDomainStatisticsSummaryRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryRequest) SetPageSize(v int) *DescribeDohSubDomainStatisticsSummaryRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryRequest) SetStartDate(v string) *DescribeDohSubDomainStatisticsSummaryRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryRequest) SetEndDate(v string) *DescribeDohSubDomainStatisticsSummaryRequest {
	s.EndDate = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryRequest) SetSubDomain(v string) *DescribeDohSubDomainStatisticsSummaryRequest {
	s.SubDomain = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryRequest) SetDomainName(v string) *DescribeDohSubDomainStatisticsSummaryRequest {
	s.DomainName = &v
	return s
}

type DescribeDohSubDomainStatisticsSummaryResponse struct {
	RequestId  *string                                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems *int                                                       `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	TotalPages *int                                                       `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	PageSize   *int                                                       `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                                       `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Statistics []*DescribeDohSubDomainStatisticsSummaryResponseStatistics `json:"Statistics,omitempty" xml:"Statistics,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDohSubDomainStatisticsSummaryResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohSubDomainStatisticsSummaryResponse) GoString() string {
	return s.String()
}

func (s *DescribeDohSubDomainStatisticsSummaryResponse) SetRequestId(v string) *DescribeDohSubDomainStatisticsSummaryResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponse) SetTotalItems(v int) *DescribeDohSubDomainStatisticsSummaryResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponse) SetTotalPages(v int) *DescribeDohSubDomainStatisticsSummaryResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponse) SetPageSize(v int) *DescribeDohSubDomainStatisticsSummaryResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponse) SetPageNumber(v int) *DescribeDohSubDomainStatisticsSummaryResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponse) SetStatistics(v []*DescribeDohSubDomainStatisticsSummaryResponseStatistics) *DescribeDohSubDomainStatisticsSummaryResponse {
	s.Statistics = v
	return s
}

type DescribeDohSubDomainStatisticsSummaryResponseStatistics struct {
	SubDomain    *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	V4HttpCount  *int64  `json:"V4HttpCount,omitempty" xml:"V4HttpCount,omitempty" require:"true"`
	V6HttpCount  *int64  `json:"V6HttpCount,omitempty" xml:"V6HttpCount,omitempty" require:"true"`
	V4HttpsCount *int64  `json:"V4HttpsCount,omitempty" xml:"V4HttpsCount,omitempty" require:"true"`
	V6HttpsCount *int64  `json:"V6HttpsCount,omitempty" xml:"V6HttpsCount,omitempty" require:"true"`
	TotalCount   *int64  `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	IpCount      *int64  `json:"IpCount,omitempty" xml:"IpCount,omitempty" require:"true"`
	HttpCount    *int64  `json:"HttpCount,omitempty" xml:"HttpCount,omitempty" require:"true"`
	HttpsCount   *int64  `json:"HttpsCount,omitempty" xml:"HttpsCount,omitempty" require:"true"`
}

func (s DescribeDohSubDomainStatisticsSummaryResponseStatistics) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohSubDomainStatisticsSummaryResponseStatistics) GoString() string {
	return s.String()
}

func (s *DescribeDohSubDomainStatisticsSummaryResponseStatistics) SetSubDomain(v string) *DescribeDohSubDomainStatisticsSummaryResponseStatistics {
	s.SubDomain = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponseStatistics) SetV4HttpCount(v int64) *DescribeDohSubDomainStatisticsSummaryResponseStatistics {
	s.V4HttpCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponseStatistics) SetV6HttpCount(v int64) *DescribeDohSubDomainStatisticsSummaryResponseStatistics {
	s.V6HttpCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponseStatistics) SetV4HttpsCount(v int64) *DescribeDohSubDomainStatisticsSummaryResponseStatistics {
	s.V4HttpsCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponseStatistics) SetV6HttpsCount(v int64) *DescribeDohSubDomainStatisticsSummaryResponseStatistics {
	s.V6HttpsCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponseStatistics) SetTotalCount(v int64) *DescribeDohSubDomainStatisticsSummaryResponseStatistics {
	s.TotalCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponseStatistics) SetIpCount(v int64) *DescribeDohSubDomainStatisticsSummaryResponseStatistics {
	s.IpCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponseStatistics) SetHttpCount(v int64) *DescribeDohSubDomainStatisticsSummaryResponseStatistics {
	s.HttpCount = &v
	return s
}

func (s *DescribeDohSubDomainStatisticsSummaryResponseStatistics) SetHttpsCount(v int64) *DescribeDohSubDomainStatisticsSummaryResponseStatistics {
	s.HttpsCount = &v
	return s
}

type DescribeDohDomainStatisticsRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	StartDate  *string `json:"StartDate,omitempty" xml:"StartDate,omitempty"`
	EndDate    *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
}

func (s DescribeDohDomainStatisticsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohDomainStatisticsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDohDomainStatisticsRequest) SetLang(v string) *DescribeDohDomainStatisticsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDohDomainStatisticsRequest) SetDomainName(v string) *DescribeDohDomainStatisticsRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeDohDomainStatisticsRequest) SetStartDate(v string) *DescribeDohDomainStatisticsRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeDohDomainStatisticsRequest) SetEndDate(v string) *DescribeDohDomainStatisticsRequest {
	s.EndDate = &v
	return s
}

type DescribeDohDomainStatisticsResponse struct {
	RequestId  *string                                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Statistics []*DescribeDohDomainStatisticsResponseStatistics `json:"Statistics,omitempty" xml:"Statistics,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDohDomainStatisticsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohDomainStatisticsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDohDomainStatisticsResponse) SetRequestId(v string) *DescribeDohDomainStatisticsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDohDomainStatisticsResponse) SetStatistics(v []*DescribeDohDomainStatisticsResponseStatistics) *DescribeDohDomainStatisticsResponse {
	s.Statistics = v
	return s
}

type DescribeDohDomainStatisticsResponseStatistics struct {
	Timestamp    *int64 `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	V4HttpCount  *int64 `json:"V4HttpCount,omitempty" xml:"V4HttpCount,omitempty" require:"true"`
	V6HttpCount  *int64 `json:"V6HttpCount,omitempty" xml:"V6HttpCount,omitempty" require:"true"`
	V4HttpsCount *int64 `json:"V4HttpsCount,omitempty" xml:"V4HttpsCount,omitempty" require:"true"`
	V6HttpsCount *int64 `json:"V6HttpsCount,omitempty" xml:"V6HttpsCount,omitempty" require:"true"`
	TotalCount   *int64 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
}

func (s DescribeDohDomainStatisticsResponseStatistics) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohDomainStatisticsResponseStatistics) GoString() string {
	return s.String()
}

func (s *DescribeDohDomainStatisticsResponseStatistics) SetTimestamp(v int64) *DescribeDohDomainStatisticsResponseStatistics {
	s.Timestamp = &v
	return s
}

func (s *DescribeDohDomainStatisticsResponseStatistics) SetV4HttpCount(v int64) *DescribeDohDomainStatisticsResponseStatistics {
	s.V4HttpCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsResponseStatistics) SetV6HttpCount(v int64) *DescribeDohDomainStatisticsResponseStatistics {
	s.V6HttpCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsResponseStatistics) SetV4HttpsCount(v int64) *DescribeDohDomainStatisticsResponseStatistics {
	s.V4HttpsCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsResponseStatistics) SetV6HttpsCount(v int64) *DescribeDohDomainStatisticsResponseStatistics {
	s.V6HttpsCount = &v
	return s
}

func (s *DescribeDohDomainStatisticsResponseStatistics) SetTotalCount(v int64) *DescribeDohDomainStatisticsResponseStatistics {
	s.TotalCount = &v
	return s
}

type DescribeDohUserInfoRequest struct {
	Lang      *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	StartDate *string `json:"StartDate,omitempty" xml:"StartDate,omitempty"`
	EndDate   *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
}

func (s DescribeDohUserInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohUserInfoRequest) GoString() string {
	return s.String()
}

func (s *DescribeDohUserInfoRequest) SetLang(v string) *DescribeDohUserInfoRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDohUserInfoRequest) SetStartDate(v string) *DescribeDohUserInfoRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeDohUserInfoRequest) SetEndDate(v string) *DescribeDohUserInfoRequest {
	s.EndDate = &v
	return s
}

type DescribeDohUserInfoResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PdnsId         *int64  `json:"PdnsId,omitempty" xml:"PdnsId,omitempty" require:"true"`
	DomainCount    *int    `json:"DomainCount,omitempty" xml:"DomainCount,omitempty" require:"true"`
	SubDomainCount *int    `json:"SubDomainCount,omitempty" xml:"SubDomainCount,omitempty" require:"true"`
}

func (s DescribeDohUserInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDohUserInfoResponse) GoString() string {
	return s.String()
}

func (s *DescribeDohUserInfoResponse) SetRequestId(v string) *DescribeDohUserInfoResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDohUserInfoResponse) SetPdnsId(v int64) *DescribeDohUserInfoResponse {
	s.PdnsId = &v
	return s
}

func (s *DescribeDohUserInfoResponse) SetDomainCount(v int) *DescribeDohUserInfoResponse {
	s.DomainCount = &v
	return s
}

func (s *DescribeDohUserInfoResponse) SetSubDomainCount(v int) *DescribeDohUserInfoResponse {
	s.SubDomainCount = &v
	return s
}

type ListTagResourcesRequest struct {
	Lang         *string                       `json:"Lang,omitempty" xml:"Lang,omitempty"`
	ResourceType *string                       `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Tag          []*ListTagResourcesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	ResourceId   []*string                     `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" type:"Repeated"`
	NextToken    *string                       `json:"NextToken,omitempty" xml:"NextToken,omitempty"`
}

func (s ListTagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesRequest) GoString() string {
	return s.String()
}

func (s *ListTagResourcesRequest) SetLang(v string) *ListTagResourcesRequest {
	s.Lang = &v
	return s
}

func (s *ListTagResourcesRequest) SetResourceType(v string) *ListTagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *ListTagResourcesRequest) SetTag(v []*ListTagResourcesRequestTag) *ListTagResourcesRequest {
	s.Tag = v
	return s
}

func (s *ListTagResourcesRequest) SetResourceId(v []*string) *ListTagResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *ListTagResourcesRequest) SetNextToken(v string) *ListTagResourcesRequest {
	s.NextToken = &v
	return s
}

type ListTagResourcesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s ListTagResourcesRequestTag) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesRequestTag) GoString() string {
	return s.String()
}

func (s *ListTagResourcesRequestTag) SetKey(v string) *ListTagResourcesRequestTag {
	s.Key = &v
	return s
}

func (s *ListTagResourcesRequestTag) SetValue(v string) *ListTagResourcesRequestTag {
	s.Value = &v
	return s
}

type ListTagResourcesResponse struct {
	RequestId    *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NextToken    *string                                 `json:"NextToken,omitempty" xml:"NextToken,omitempty" require:"true"`
	TagResources []*ListTagResourcesResponseTagResources `json:"TagResources,omitempty" xml:"TagResources,omitempty" require:"true" type:"Repeated"`
}

func (s ListTagResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesResponse) GoString() string {
	return s.String()
}

func (s *ListTagResourcesResponse) SetRequestId(v string) *ListTagResourcesResponse {
	s.RequestId = &v
	return s
}

func (s *ListTagResourcesResponse) SetNextToken(v string) *ListTagResourcesResponse {
	s.NextToken = &v
	return s
}

func (s *ListTagResourcesResponse) SetTagResources(v []*ListTagResourcesResponseTagResources) *ListTagResourcesResponse {
	s.TagResources = v
	return s
}

type ListTagResourcesResponseTagResources struct {
	TagKey       *string `json:"TagKey,omitempty" xml:"TagKey,omitempty" require:"true"`
	TagValue     *string `json:"TagValue,omitempty" xml:"TagValue,omitempty" require:"true"`
	ResourceId   *string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true"`
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
}

func (s ListTagResourcesResponseTagResources) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesResponseTagResources) GoString() string {
	return s.String()
}

func (s *ListTagResourcesResponseTagResources) SetTagKey(v string) *ListTagResourcesResponseTagResources {
	s.TagKey = &v
	return s
}

func (s *ListTagResourcesResponseTagResources) SetTagValue(v string) *ListTagResourcesResponseTagResources {
	s.TagValue = &v
	return s
}

func (s *ListTagResourcesResponseTagResources) SetResourceId(v string) *ListTagResourcesResponseTagResources {
	s.ResourceId = &v
	return s
}

func (s *ListTagResourcesResponseTagResources) SetResourceType(v string) *ListTagResourcesResponseTagResources {
	s.ResourceType = &v
	return s
}

type TagResourcesRequest struct {
	Lang         *string                   `json:"Lang,omitempty" xml:"Lang,omitempty"`
	ResourceType *string                   `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Tag          []*TagResourcesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
	ResourceId   []*string                 `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
}

func (s TagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s TagResourcesRequest) GoString() string {
	return s.String()
}

func (s *TagResourcesRequest) SetLang(v string) *TagResourcesRequest {
	s.Lang = &v
	return s
}

func (s *TagResourcesRequest) SetResourceType(v string) *TagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *TagResourcesRequest) SetTag(v []*TagResourcesRequestTag) *TagResourcesRequest {
	s.Tag = v
	return s
}

func (s *TagResourcesRequest) SetResourceId(v []*string) *TagResourcesRequest {
	s.ResourceId = v
	return s
}

type TagResourcesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s TagResourcesRequestTag) String() string {
	return tea.Prettify(s)
}

func (s TagResourcesRequestTag) GoString() string {
	return s.String()
}

func (s *TagResourcesRequestTag) SetKey(v string) *TagResourcesRequestTag {
	s.Key = &v
	return s
}

func (s *TagResourcesRequestTag) SetValue(v string) *TagResourcesRequestTag {
	s.Value = &v
	return s
}

type TagResourcesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s TagResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s TagResourcesResponse) GoString() string {
	return s.String()
}

func (s *TagResourcesResponse) SetRequestId(v string) *TagResourcesResponse {
	s.RequestId = &v
	return s
}

type UntagResourcesRequest struct {
	Lang         *string   `json:"Lang,omitempty" xml:"Lang,omitempty"`
	ResourceType *string   `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	All          *bool     `json:"All,omitempty" xml:"All,omitempty"`
	ResourceId   []*string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
	TagKey       []*string `json:"TagKey,omitempty" xml:"TagKey,omitempty" type:"Repeated"`
}

func (s UntagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s UntagResourcesRequest) GoString() string {
	return s.String()
}

func (s *UntagResourcesRequest) SetLang(v string) *UntagResourcesRequest {
	s.Lang = &v
	return s
}

func (s *UntagResourcesRequest) SetResourceType(v string) *UntagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *UntagResourcesRequest) SetAll(v bool) *UntagResourcesRequest {
	s.All = &v
	return s
}

func (s *UntagResourcesRequest) SetResourceId(v []*string) *UntagResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *UntagResourcesRequest) SetTagKey(v []*string) *UntagResourcesRequest {
	s.TagKey = v
	return s
}

type UntagResourcesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UntagResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s UntagResourcesResponse) GoString() string {
	return s.String()
}

func (s *UntagResourcesResponse) SetRequestId(v string) *UntagResourcesResponse {
	s.RequestId = &v
	return s
}

type DescribeTagsRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	PageNumber   *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize     *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeTagsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagsRequest) GoString() string {
	return s.String()
}

func (s *DescribeTagsRequest) SetLang(v string) *DescribeTagsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeTagsRequest) SetResourceType(v string) *DescribeTagsRequest {
	s.ResourceType = &v
	return s
}

func (s *DescribeTagsRequest) SetPageNumber(v int64) *DescribeTagsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeTagsRequest) SetPageSize(v int64) *DescribeTagsRequest {
	s.PageSize = &v
	return s
}

type DescribeTagsResponse struct {
	RequestId  *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int64                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber *int64                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int64                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Tags       []*DescribeTagsResponseTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeTagsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagsResponse) GoString() string {
	return s.String()
}

func (s *DescribeTagsResponse) SetRequestId(v string) *DescribeTagsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeTagsResponse) SetTotalCount(v int64) *DescribeTagsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeTagsResponse) SetPageNumber(v int64) *DescribeTagsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeTagsResponse) SetPageSize(v int64) *DescribeTagsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeTagsResponse) SetTags(v []*DescribeTagsResponseTags) *DescribeTagsResponse {
	s.Tags = v
	return s
}

type DescribeTagsResponseTags struct {
	Key *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
}

func (s DescribeTagsResponseTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagsResponseTags) GoString() string {
	return s.String()
}

func (s *DescribeTagsResponseTags) SetKey(v string) *DescribeTagsResponseTags {
	s.Key = &v
	return s
}

type CopyGtmConfigRequest struct {
	Lang     *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	SourceId *string `json:"SourceId,omitempty" xml:"SourceId,omitempty" require:"true"`
	TargetId *string `json:"TargetId,omitempty" xml:"TargetId,omitempty" require:"true"`
	CopyType *string `json:"CopyType,omitempty" xml:"CopyType,omitempty" require:"true"`
}

func (s CopyGtmConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s CopyGtmConfigRequest) GoString() string {
	return s.String()
}

func (s *CopyGtmConfigRequest) SetLang(v string) *CopyGtmConfigRequest {
	s.Lang = &v
	return s
}

func (s *CopyGtmConfigRequest) SetSourceId(v string) *CopyGtmConfigRequest {
	s.SourceId = &v
	return s
}

func (s *CopyGtmConfigRequest) SetTargetId(v string) *CopyGtmConfigRequest {
	s.TargetId = &v
	return s
}

func (s *CopyGtmConfigRequest) SetCopyType(v string) *CopyGtmConfigRequest {
	s.CopyType = &v
	return s
}

type CopyGtmConfigResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CopyGtmConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s CopyGtmConfigResponse) GoString() string {
	return s.String()
}

func (s *CopyGtmConfigResponse) SetRequestId(v string) *CopyGtmConfigResponse {
	s.RequestId = &v
	return s
}

type DescribeDomainDnssecInfoRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DescribeDomainDnssecInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainDnssecInfoRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainDnssecInfoRequest) SetLang(v string) *DescribeDomainDnssecInfoRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainDnssecInfoRequest) SetDomainName(v string) *DescribeDomainDnssecInfoRequest {
	s.DomainName = &v
	return s
}

type DescribeDomainDnssecInfoResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	DsRecord   *string `json:"DsRecord,omitempty" xml:"DsRecord,omitempty" require:"true"`
	Digest     *string `json:"Digest,omitempty" xml:"Digest,omitempty" require:"true"`
	DigestType *string `json:"DigestType,omitempty" xml:"DigestType,omitempty" require:"true"`
	Algorithm  *string `json:"Algorithm,omitempty" xml:"Algorithm,omitempty" require:"true"`
	PublicKey  *string `json:"PublicKey,omitempty" xml:"PublicKey,omitempty" require:"true"`
	KeyTag     *string `json:"KeyTag,omitempty" xml:"KeyTag,omitempty" require:"true"`
	Flags      *string `json:"Flags,omitempty" xml:"Flags,omitempty" require:"true"`
}

func (s DescribeDomainDnssecInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainDnssecInfoResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainDnssecInfoResponse) SetRequestId(v string) *DescribeDomainDnssecInfoResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainDnssecInfoResponse) SetDomainName(v string) *DescribeDomainDnssecInfoResponse {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainDnssecInfoResponse) SetStatus(v string) *DescribeDomainDnssecInfoResponse {
	s.Status = &v
	return s
}

func (s *DescribeDomainDnssecInfoResponse) SetDsRecord(v string) *DescribeDomainDnssecInfoResponse {
	s.DsRecord = &v
	return s
}

func (s *DescribeDomainDnssecInfoResponse) SetDigest(v string) *DescribeDomainDnssecInfoResponse {
	s.Digest = &v
	return s
}

func (s *DescribeDomainDnssecInfoResponse) SetDigestType(v string) *DescribeDomainDnssecInfoResponse {
	s.DigestType = &v
	return s
}

func (s *DescribeDomainDnssecInfoResponse) SetAlgorithm(v string) *DescribeDomainDnssecInfoResponse {
	s.Algorithm = &v
	return s
}

func (s *DescribeDomainDnssecInfoResponse) SetPublicKey(v string) *DescribeDomainDnssecInfoResponse {
	s.PublicKey = &v
	return s
}

func (s *DescribeDomainDnssecInfoResponse) SetKeyTag(v string) *DescribeDomainDnssecInfoResponse {
	s.KeyTag = &v
	return s
}

func (s *DescribeDomainDnssecInfoResponse) SetFlags(v string) *DescribeDomainDnssecInfoResponse {
	s.Flags = &v
	return s
}

type SetDomainDnssecStatusRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s SetDomainDnssecStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDomainDnssecStatusRequest) GoString() string {
	return s.String()
}

func (s *SetDomainDnssecStatusRequest) SetLang(v string) *SetDomainDnssecStatusRequest {
	s.Lang = &v
	return s
}

func (s *SetDomainDnssecStatusRequest) SetDomainName(v string) *SetDomainDnssecStatusRequest {
	s.DomainName = &v
	return s
}

func (s *SetDomainDnssecStatusRequest) SetStatus(v string) *SetDomainDnssecStatusRequest {
	s.Status = &v
	return s
}

type SetDomainDnssecStatusResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetDomainDnssecStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDomainDnssecStatusResponse) GoString() string {
	return s.String()
}

func (s *SetDomainDnssecStatusResponse) SetRequestId(v string) *SetDomainDnssecStatusResponse {
	s.RequestId = &v
	return s
}

type TransferDomainRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainNames  *string `json:"DomainNames,omitempty" xml:"DomainNames,omitempty" require:"true"`
	Remark       *string `json:"Remark,omitempty" xml:"Remark,omitempty"`
	TargetUserId *int64  `json:"TargetUserId,omitempty" xml:"TargetUserId,omitempty" require:"true"`
}

func (s TransferDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s TransferDomainRequest) GoString() string {
	return s.String()
}

func (s *TransferDomainRequest) SetLang(v string) *TransferDomainRequest {
	s.Lang = &v
	return s
}

func (s *TransferDomainRequest) SetDomainNames(v string) *TransferDomainRequest {
	s.DomainNames = &v
	return s
}

func (s *TransferDomainRequest) SetRemark(v string) *TransferDomainRequest {
	s.Remark = &v
	return s
}

func (s *TransferDomainRequest) SetTargetUserId(v int64) *TransferDomainRequest {
	s.TargetUserId = &v
	return s
}

type TransferDomainResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TaskId    *int64  `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
}

func (s TransferDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s TransferDomainResponse) GoString() string {
	return s.String()
}

func (s *TransferDomainResponse) SetRequestId(v string) *TransferDomainResponse {
	s.RequestId = &v
	return s
}

func (s *TransferDomainResponse) SetTaskId(v int64) *TransferDomainResponse {
	s.TaskId = &v
	return s
}

type DescribeTransferDomainsRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	PageNumber   *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize     *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	TransferType *string `json:"TransferType,omitempty" xml:"TransferType,omitempty" require:"true"`
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
	FromUserId   *int64  `json:"FromUserId,omitempty" xml:"FromUserId,omitempty"`
	TargetUserId *int64  `json:"TargetUserId,omitempty" xml:"TargetUserId,omitempty"`
}

func (s DescribeTransferDomainsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTransferDomainsRequest) GoString() string {
	return s.String()
}

func (s *DescribeTransferDomainsRequest) SetLang(v string) *DescribeTransferDomainsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeTransferDomainsRequest) SetPageNumber(v int64) *DescribeTransferDomainsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeTransferDomainsRequest) SetPageSize(v int64) *DescribeTransferDomainsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeTransferDomainsRequest) SetTransferType(v string) *DescribeTransferDomainsRequest {
	s.TransferType = &v
	return s
}

func (s *DescribeTransferDomainsRequest) SetDomainName(v string) *DescribeTransferDomainsRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeTransferDomainsRequest) SetFromUserId(v int64) *DescribeTransferDomainsRequest {
	s.FromUserId = &v
	return s
}

func (s *DescribeTransferDomainsRequest) SetTargetUserId(v int64) *DescribeTransferDomainsRequest {
	s.TargetUserId = &v
	return s
}

type DescribeTransferDomainsResponse struct {
	RequestId       *string                                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount      *int64                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber      *int64                                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize        *int64                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	DomainTransfers *DescribeTransferDomainsResponseDomainTransfers `json:"DomainTransfers,omitempty" xml:"DomainTransfers,omitempty" require:"true" type:"Struct"`
}

func (s DescribeTransferDomainsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTransferDomainsResponse) GoString() string {
	return s.String()
}

func (s *DescribeTransferDomainsResponse) SetRequestId(v string) *DescribeTransferDomainsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeTransferDomainsResponse) SetTotalCount(v int64) *DescribeTransferDomainsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeTransferDomainsResponse) SetPageNumber(v int64) *DescribeTransferDomainsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeTransferDomainsResponse) SetPageSize(v int64) *DescribeTransferDomainsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeTransferDomainsResponse) SetDomainTransfers(v *DescribeTransferDomainsResponseDomainTransfers) *DescribeTransferDomainsResponse {
	s.DomainTransfers = v
	return s
}

type DescribeTransferDomainsResponseDomainTransfers struct {
	DomainTransfer []*DescribeTransferDomainsResponseDomainTransfersDomainTransfer `json:"DomainTransfer,omitempty" xml:"DomainTransfer,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeTransferDomainsResponseDomainTransfers) String() string {
	return tea.Prettify(s)
}

func (s DescribeTransferDomainsResponseDomainTransfers) GoString() string {
	return s.String()
}

func (s *DescribeTransferDomainsResponseDomainTransfers) SetDomainTransfer(v []*DescribeTransferDomainsResponseDomainTransfersDomainTransfer) *DescribeTransferDomainsResponseDomainTransfers {
	s.DomainTransfer = v
	return s
}

type DescribeTransferDomainsResponseDomainTransfersDomainTransfer struct {
	DomainName      *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	CreateTime      *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp *int64  `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	FromUserId      *int64  `json:"FromUserId,omitempty" xml:"FromUserId,omitempty" require:"true"`
	TargetUserId    *int64  `json:"TargetUserId,omitempty" xml:"TargetUserId,omitempty" require:"true"`
	Id              *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
}

func (s DescribeTransferDomainsResponseDomainTransfersDomainTransfer) String() string {
	return tea.Prettify(s)
}

func (s DescribeTransferDomainsResponseDomainTransfersDomainTransfer) GoString() string {
	return s.String()
}

func (s *DescribeTransferDomainsResponseDomainTransfersDomainTransfer) SetDomainName(v string) *DescribeTransferDomainsResponseDomainTransfersDomainTransfer {
	s.DomainName = &v
	return s
}

func (s *DescribeTransferDomainsResponseDomainTransfersDomainTransfer) SetCreateTime(v string) *DescribeTransferDomainsResponseDomainTransfersDomainTransfer {
	s.CreateTime = &v
	return s
}

func (s *DescribeTransferDomainsResponseDomainTransfersDomainTransfer) SetCreateTimestamp(v int64) *DescribeTransferDomainsResponseDomainTransfersDomainTransfer {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeTransferDomainsResponseDomainTransfersDomainTransfer) SetFromUserId(v int64) *DescribeTransferDomainsResponseDomainTransfersDomainTransfer {
	s.FromUserId = &v
	return s
}

func (s *DescribeTransferDomainsResponseDomainTransfersDomainTransfer) SetTargetUserId(v int64) *DescribeTransferDomainsResponseDomainTransfersDomainTransfer {
	s.TargetUserId = &v
	return s
}

func (s *DescribeTransferDomainsResponseDomainTransfersDomainTransfer) SetId(v int64) *DescribeTransferDomainsResponseDomainTransfersDomainTransfer {
	s.Id = &v
	return s
}

type AddDomainBackupRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	PeriodType *string `json:"PeriodType,omitempty" xml:"PeriodType,omitempty" require:"true"`
}

func (s AddDomainBackupRequest) String() string {
	return tea.Prettify(s)
}

func (s AddDomainBackupRequest) GoString() string {
	return s.String()
}

func (s *AddDomainBackupRequest) SetLang(v string) *AddDomainBackupRequest {
	s.Lang = &v
	return s
}

func (s *AddDomainBackupRequest) SetDomainName(v string) *AddDomainBackupRequest {
	s.DomainName = &v
	return s
}

func (s *AddDomainBackupRequest) SetPeriodType(v string) *AddDomainBackupRequest {
	s.PeriodType = &v
	return s
}

type AddDomainBackupResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	PeriodType *string `json:"PeriodType,omitempty" xml:"PeriodType,omitempty" require:"true"`
}

func (s AddDomainBackupResponse) String() string {
	return tea.Prettify(s)
}

func (s AddDomainBackupResponse) GoString() string {
	return s.String()
}

func (s *AddDomainBackupResponse) SetRequestId(v string) *AddDomainBackupResponse {
	s.RequestId = &v
	return s
}

func (s *AddDomainBackupResponse) SetDomainName(v string) *AddDomainBackupResponse {
	s.DomainName = &v
	return s
}

func (s *AddDomainBackupResponse) SetPeriodType(v string) *AddDomainBackupResponse {
	s.PeriodType = &v
	return s
}

type RetrieveDomainRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s RetrieveDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s RetrieveDomainRequest) GoString() string {
	return s.String()
}

func (s *RetrieveDomainRequest) SetLang(v string) *RetrieveDomainRequest {
	s.Lang = &v
	return s
}

func (s *RetrieveDomainRequest) SetDomainName(v string) *RetrieveDomainRequest {
	s.DomainName = &v
	return s
}

type RetrieveDomainResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RetrieveDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s RetrieveDomainResponse) GoString() string {
	return s.String()
}

func (s *RetrieveDomainResponse) SetRequestId(v string) *RetrieveDomainResponse {
	s.RequestId = &v
	return s
}

type DescribeGtmRecoveryPlanRequest struct {
	Lang           *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	RecoveryPlanId *int64  `json:"RecoveryPlanId,omitempty" xml:"RecoveryPlanId,omitempty" require:"true"`
}

func (s DescribeGtmRecoveryPlanRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanRequest) SetLang(v string) *DescribeGtmRecoveryPlanRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmRecoveryPlanRequest) SetRecoveryPlanId(v int64) *DescribeGtmRecoveryPlanRequest {
	s.RecoveryPlanId = &v
	return s
}

type DescribeGtmRecoveryPlanResponse struct {
	RequestId             *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RecoveryPlanId        *int64                                         `json:"RecoveryPlanId,omitempty" xml:"RecoveryPlanId,omitempty" require:"true"`
	Name                  *string                                        `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Remark                *string                                        `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
	FaultAddrPoolNum      *int                                           `json:"FaultAddrPoolNum,omitempty" xml:"FaultAddrPoolNum,omitempty" require:"true"`
	Status                *string                                        `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	LastExecuteTime       *string                                        `json:"LastExecuteTime,omitempty" xml:"LastExecuteTime,omitempty" require:"true"`
	LastExecuteTimestamp  *int64                                         `json:"LastExecuteTimestamp,omitempty" xml:"LastExecuteTimestamp,omitempty" require:"true"`
	LastRollbackTime      *string                                        `json:"LastRollbackTime,omitempty" xml:"LastRollbackTime,omitempty" require:"true"`
	LastRollbackTimestamp *int64                                         `json:"LastRollbackTimestamp,omitempty" xml:"LastRollbackTimestamp,omitempty" require:"true"`
	CreateTime            *string                                        `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp       *int64                                         `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	UpdateTime            *string                                        `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	UpdateTimestamp       *int64                                         `json:"UpdateTimestamp,omitempty" xml:"UpdateTimestamp,omitempty" require:"true"`
	FaultAddrPools        *DescribeGtmRecoveryPlanResponseFaultAddrPools `json:"FaultAddrPools,omitempty" xml:"FaultAddrPools,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmRecoveryPlanResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanResponse) SetRequestId(v string) *DescribeGtmRecoveryPlanResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetRecoveryPlanId(v int64) *DescribeGtmRecoveryPlanResponse {
	s.RecoveryPlanId = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetName(v string) *DescribeGtmRecoveryPlanResponse {
	s.Name = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetRemark(v string) *DescribeGtmRecoveryPlanResponse {
	s.Remark = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetFaultAddrPoolNum(v int) *DescribeGtmRecoveryPlanResponse {
	s.FaultAddrPoolNum = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetStatus(v string) *DescribeGtmRecoveryPlanResponse {
	s.Status = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetLastExecuteTime(v string) *DescribeGtmRecoveryPlanResponse {
	s.LastExecuteTime = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetLastExecuteTimestamp(v int64) *DescribeGtmRecoveryPlanResponse {
	s.LastExecuteTimestamp = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetLastRollbackTime(v string) *DescribeGtmRecoveryPlanResponse {
	s.LastRollbackTime = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetLastRollbackTimestamp(v int64) *DescribeGtmRecoveryPlanResponse {
	s.LastRollbackTimestamp = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetCreateTime(v string) *DescribeGtmRecoveryPlanResponse {
	s.CreateTime = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetCreateTimestamp(v int64) *DescribeGtmRecoveryPlanResponse {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetUpdateTime(v string) *DescribeGtmRecoveryPlanResponse {
	s.UpdateTime = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetUpdateTimestamp(v int64) *DescribeGtmRecoveryPlanResponse {
	s.UpdateTimestamp = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponse) SetFaultAddrPools(v *DescribeGtmRecoveryPlanResponseFaultAddrPools) *DescribeGtmRecoveryPlanResponse {
	s.FaultAddrPools = v
	return s
}

type DescribeGtmRecoveryPlanResponseFaultAddrPools struct {
	FaultAddrPool []*DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool `json:"FaultAddrPool,omitempty" xml:"FaultAddrPool,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmRecoveryPlanResponseFaultAddrPools) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanResponseFaultAddrPools) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanResponseFaultAddrPools) SetFaultAddrPool(v []*DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool) *DescribeGtmRecoveryPlanResponseFaultAddrPools {
	s.FaultAddrPool = v
	return s
}

type DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool struct {
	AddrPoolId   *string                                                          `json:"AddrPoolId,omitempty" xml:"AddrPoolId,omitempty" require:"true"`
	AddrPoolName *string                                                          `json:"AddrPoolName,omitempty" xml:"AddrPoolName,omitempty" require:"true"`
	InstanceId   *string                                                          `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Addrs        *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs `json:"Addrs,omitempty" xml:"Addrs,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool) SetAddrPoolId(v string) *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool {
	s.AddrPoolId = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool) SetAddrPoolName(v string) *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool {
	s.AddrPoolName = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool) SetInstanceId(v string) *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool {
	s.InstanceId = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool) SetAddrs(v *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs) *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool {
	s.Addrs = v
	return s
}

type DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs struct {
	Addr []*DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr `json:"Addr,omitempty" xml:"Addr,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs) SetAddr(v []*DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr) *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs {
	s.Addr = v
	return s
}

type DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr struct {
	Id    *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Mode  *string `json:"Mode,omitempty" xml:"Mode,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr) SetId(v int64) *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr {
	s.Id = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr) SetMode(v string) *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr {
	s.Mode = &v
	return s
}

func (s *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr) SetValue(v string) *DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr {
	s.Value = &v
	return s
}

type AddGtmRecoveryPlanRequest struct {
	Lang          *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	Name          *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Remark        *string `json:"Remark,omitempty" xml:"Remark,omitempty"`
	FaultAddrPool *string `json:"FaultAddrPool,omitempty" xml:"FaultAddrPool,omitempty" require:"true"`
}

func (s AddGtmRecoveryPlanRequest) String() string {
	return tea.Prettify(s)
}

func (s AddGtmRecoveryPlanRequest) GoString() string {
	return s.String()
}

func (s *AddGtmRecoveryPlanRequest) SetLang(v string) *AddGtmRecoveryPlanRequest {
	s.Lang = &v
	return s
}

func (s *AddGtmRecoveryPlanRequest) SetName(v string) *AddGtmRecoveryPlanRequest {
	s.Name = &v
	return s
}

func (s *AddGtmRecoveryPlanRequest) SetRemark(v string) *AddGtmRecoveryPlanRequest {
	s.Remark = &v
	return s
}

func (s *AddGtmRecoveryPlanRequest) SetFaultAddrPool(v string) *AddGtmRecoveryPlanRequest {
	s.FaultAddrPool = &v
	return s
}

type AddGtmRecoveryPlanResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RecoveryPlanId *string `json:"RecoveryPlanId,omitempty" xml:"RecoveryPlanId,omitempty" require:"true"`
}

func (s AddGtmRecoveryPlanResponse) String() string {
	return tea.Prettify(s)
}

func (s AddGtmRecoveryPlanResponse) GoString() string {
	return s.String()
}

func (s *AddGtmRecoveryPlanResponse) SetRequestId(v string) *AddGtmRecoveryPlanResponse {
	s.RequestId = &v
	return s
}

func (s *AddGtmRecoveryPlanResponse) SetRecoveryPlanId(v string) *AddGtmRecoveryPlanResponse {
	s.RecoveryPlanId = &v
	return s
}

type UpdateGtmRecoveryPlanRequest struct {
	Lang           *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	RecoveryPlanId *int64  `json:"RecoveryPlanId,omitempty" xml:"RecoveryPlanId,omitempty" require:"true"`
	Name           *string `json:"Name,omitempty" xml:"Name,omitempty"`
	Remark         *string `json:"Remark,omitempty" xml:"Remark,omitempty"`
	FaultAddrPool  *string `json:"FaultAddrPool,omitempty" xml:"FaultAddrPool,omitempty"`
}

func (s UpdateGtmRecoveryPlanRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmRecoveryPlanRequest) GoString() string {
	return s.String()
}

func (s *UpdateGtmRecoveryPlanRequest) SetLang(v string) *UpdateGtmRecoveryPlanRequest {
	s.Lang = &v
	return s
}

func (s *UpdateGtmRecoveryPlanRequest) SetRecoveryPlanId(v int64) *UpdateGtmRecoveryPlanRequest {
	s.RecoveryPlanId = &v
	return s
}

func (s *UpdateGtmRecoveryPlanRequest) SetName(v string) *UpdateGtmRecoveryPlanRequest {
	s.Name = &v
	return s
}

func (s *UpdateGtmRecoveryPlanRequest) SetRemark(v string) *UpdateGtmRecoveryPlanRequest {
	s.Remark = &v
	return s
}

func (s *UpdateGtmRecoveryPlanRequest) SetFaultAddrPool(v string) *UpdateGtmRecoveryPlanRequest {
	s.FaultAddrPool = &v
	return s
}

type UpdateGtmRecoveryPlanResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateGtmRecoveryPlanResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmRecoveryPlanResponse) GoString() string {
	return s.String()
}

func (s *UpdateGtmRecoveryPlanResponse) SetRequestId(v string) *UpdateGtmRecoveryPlanResponse {
	s.RequestId = &v
	return s
}

type DeleteGtmRecoveryPlanRequest struct {
	Lang           *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	RecoveryPlanId *int64  `json:"RecoveryPlanId,omitempty" xml:"RecoveryPlanId,omitempty" require:"true"`
}

func (s DeleteGtmRecoveryPlanRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteGtmRecoveryPlanRequest) GoString() string {
	return s.String()
}

func (s *DeleteGtmRecoveryPlanRequest) SetLang(v string) *DeleteGtmRecoveryPlanRequest {
	s.Lang = &v
	return s
}

func (s *DeleteGtmRecoveryPlanRequest) SetRecoveryPlanId(v int64) *DeleteGtmRecoveryPlanRequest {
	s.RecoveryPlanId = &v
	return s
}

type DeleteGtmRecoveryPlanResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteGtmRecoveryPlanResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteGtmRecoveryPlanResponse) GoString() string {
	return s.String()
}

func (s *DeleteGtmRecoveryPlanResponse) SetRequestId(v string) *DeleteGtmRecoveryPlanResponse {
	s.RequestId = &v
	return s
}

type DescribeGtmRecoveryPlansRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	Keyword    *string `json:"Keyword,omitempty" xml:"Keyword,omitempty"`
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeGtmRecoveryPlansRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlansRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlansRequest) SetLang(v string) *DescribeGtmRecoveryPlansRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmRecoveryPlansRequest) SetKeyword(v string) *DescribeGtmRecoveryPlansRequest {
	s.Keyword = &v
	return s
}

func (s *DescribeGtmRecoveryPlansRequest) SetPageNumber(v int) *DescribeGtmRecoveryPlansRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeGtmRecoveryPlansRequest) SetPageSize(v int) *DescribeGtmRecoveryPlansRequest {
	s.PageSize = &v
	return s
}

type DescribeGtmRecoveryPlansResponse struct {
	RequestId     *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems    *int                                           `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	TotalPages    *int                                           `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	PageNumber    *int                                           `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *int                                           `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	RecoveryPlans *DescribeGtmRecoveryPlansResponseRecoveryPlans `json:"RecoveryPlans,omitempty" xml:"RecoveryPlans,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmRecoveryPlansResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlansResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlansResponse) SetRequestId(v string) *DescribeGtmRecoveryPlansResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponse) SetTotalItems(v int) *DescribeGtmRecoveryPlansResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponse) SetTotalPages(v int) *DescribeGtmRecoveryPlansResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponse) SetPageNumber(v int) *DescribeGtmRecoveryPlansResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponse) SetPageSize(v int) *DescribeGtmRecoveryPlansResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponse) SetRecoveryPlans(v *DescribeGtmRecoveryPlansResponseRecoveryPlans) *DescribeGtmRecoveryPlansResponse {
	s.RecoveryPlans = v
	return s
}

type DescribeGtmRecoveryPlansResponseRecoveryPlans struct {
	RecoveryPlan []*DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan `json:"RecoveryPlan,omitempty" xml:"RecoveryPlan,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmRecoveryPlansResponseRecoveryPlans) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlansResponseRecoveryPlans) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlans) SetRecoveryPlan(v []*DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) *DescribeGtmRecoveryPlansResponseRecoveryPlans {
	s.RecoveryPlan = v
	return s
}

type DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan struct {
	RecoveryPlanId        *int64  `json:"RecoveryPlanId,omitempty" xml:"RecoveryPlanId,omitempty" require:"true"`
	Name                  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Remark                *string `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
	FaultAddrPoolNum      *int    `json:"FaultAddrPoolNum,omitempty" xml:"FaultAddrPoolNum,omitempty" require:"true"`
	LastExecuteTime       *string `json:"LastExecuteTime,omitempty" xml:"LastExecuteTime,omitempty" require:"true"`
	LastExecuteTimestamp  *int64  `json:"LastExecuteTimestamp,omitempty" xml:"LastExecuteTimestamp,omitempty" require:"true"`
	LastRollbackTime      *string `json:"LastRollbackTime,omitempty" xml:"LastRollbackTime,omitempty" require:"true"`
	LastRollbackTimestamp *int64  `json:"LastRollbackTimestamp,omitempty" xml:"LastRollbackTimestamp,omitempty" require:"true"`
	CreateTime            *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp       *int64  `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	UpdateTime            *string `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	UpdateTimestamp       *int64  `json:"UpdateTimestamp,omitempty" xml:"UpdateTimestamp,omitempty" require:"true"`
	Status                *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetRecoveryPlanId(v int64) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.RecoveryPlanId = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetName(v string) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.Name = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetRemark(v string) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.Remark = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetFaultAddrPoolNum(v int) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.FaultAddrPoolNum = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetLastExecuteTime(v string) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.LastExecuteTime = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetLastExecuteTimestamp(v int64) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.LastExecuteTimestamp = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetLastRollbackTime(v string) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.LastRollbackTime = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetLastRollbackTimestamp(v int64) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.LastRollbackTimestamp = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetCreateTime(v string) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.CreateTime = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetCreateTimestamp(v int64) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetUpdateTime(v string) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.UpdateTime = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetUpdateTimestamp(v int64) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.UpdateTimestamp = &v
	return s
}

func (s *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan) SetStatus(v string) *DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan {
	s.Status = &v
	return s
}

type DescribeGtmRecoveryPlanAvailableConfigRequest struct {
	Lang *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
}

func (s DescribeGtmRecoveryPlanAvailableConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanAvailableConfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanAvailableConfigRequest) SetLang(v string) *DescribeGtmRecoveryPlanAvailableConfigRequest {
	s.Lang = &v
	return s
}

type DescribeGtmRecoveryPlanAvailableConfigResponse struct {
	RequestId *string                                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Instances *DescribeGtmRecoveryPlanAvailableConfigResponseInstances `json:"Instances,omitempty" xml:"Instances,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmRecoveryPlanAvailableConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanAvailableConfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanAvailableConfigResponse) SetRequestId(v string) *DescribeGtmRecoveryPlanAvailableConfigResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmRecoveryPlanAvailableConfigResponse) SetInstances(v *DescribeGtmRecoveryPlanAvailableConfigResponseInstances) *DescribeGtmRecoveryPlanAvailableConfigResponse {
	s.Instances = v
	return s
}

type DescribeGtmRecoveryPlanAvailableConfigResponseInstances struct {
	Instance []*DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance `json:"Instance,omitempty" xml:"Instance,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmRecoveryPlanAvailableConfigResponseInstances) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanAvailableConfigResponseInstances) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanAvailableConfigResponseInstances) SetInstance(v []*DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance) *DescribeGtmRecoveryPlanAvailableConfigResponseInstances {
	s.Instance = v
	return s
}

type DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance struct {
	InstanceId   *string                                                                   `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	InstanceName *string                                                                   `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
	AddrPools    *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools `json:"AddrPools,omitempty" xml:"AddrPools,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance) SetInstanceId(v string) *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance {
	s.InstanceId = &v
	return s
}

func (s *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance) SetInstanceName(v string) *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance {
	s.InstanceName = &v
	return s
}

func (s *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance) SetAddrPools(v *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools) *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance {
	s.AddrPools = v
	return s
}

type DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools struct {
	AddrPool []*DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool `json:"AddrPool,omitempty" xml:"AddrPool,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools) SetAddrPool(v []*DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool) *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools {
	s.AddrPool = v
	return s
}

type DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool struct {
	AddrPoolId *string `json:"AddrPoolId,omitempty" xml:"AddrPoolId,omitempty" require:"true"`
	Name       *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool) GoString() string {
	return s.String()
}

func (s *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool) SetAddrPoolId(v string) *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool {
	s.AddrPoolId = &v
	return s
}

func (s *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool) SetName(v string) *DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool {
	s.Name = &v
	return s
}

type ExecuteGtmRecoveryPlanRequest struct {
	Lang           *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	RecoveryPlanId *int64  `json:"RecoveryPlanId,omitempty" xml:"RecoveryPlanId,omitempty" require:"true"`
}

func (s ExecuteGtmRecoveryPlanRequest) String() string {
	return tea.Prettify(s)
}

func (s ExecuteGtmRecoveryPlanRequest) GoString() string {
	return s.String()
}

func (s *ExecuteGtmRecoveryPlanRequest) SetLang(v string) *ExecuteGtmRecoveryPlanRequest {
	s.Lang = &v
	return s
}

func (s *ExecuteGtmRecoveryPlanRequest) SetRecoveryPlanId(v int64) *ExecuteGtmRecoveryPlanRequest {
	s.RecoveryPlanId = &v
	return s
}

type ExecuteGtmRecoveryPlanResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ExecuteGtmRecoveryPlanResponse) String() string {
	return tea.Prettify(s)
}

func (s ExecuteGtmRecoveryPlanResponse) GoString() string {
	return s.String()
}

func (s *ExecuteGtmRecoveryPlanResponse) SetRequestId(v string) *ExecuteGtmRecoveryPlanResponse {
	s.RequestId = &v
	return s
}

type RollbackGtmRecoveryPlanRequest struct {
	Lang           *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	RecoveryPlanId *int64  `json:"RecoveryPlanId,omitempty" xml:"RecoveryPlanId,omitempty" require:"true"`
}

func (s RollbackGtmRecoveryPlanRequest) String() string {
	return tea.Prettify(s)
}

func (s RollbackGtmRecoveryPlanRequest) GoString() string {
	return s.String()
}

func (s *RollbackGtmRecoveryPlanRequest) SetLang(v string) *RollbackGtmRecoveryPlanRequest {
	s.Lang = &v
	return s
}

func (s *RollbackGtmRecoveryPlanRequest) SetRecoveryPlanId(v int64) *RollbackGtmRecoveryPlanRequest {
	s.RecoveryPlanId = &v
	return s
}

type RollbackGtmRecoveryPlanResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RollbackGtmRecoveryPlanResponse) String() string {
	return tea.Prettify(s)
}

func (s RollbackGtmRecoveryPlanResponse) GoString() string {
	return s.String()
}

func (s *RollbackGtmRecoveryPlanResponse) SetRequestId(v string) *RollbackGtmRecoveryPlanResponse {
	s.RequestId = &v
	return s
}

type PreviewGtmRecoveryPlanRequest struct {
	Lang           *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	RecoveryPlanId *int64  `json:"RecoveryPlanId,omitempty" xml:"RecoveryPlanId,omitempty" require:"true"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s PreviewGtmRecoveryPlanRequest) String() string {
	return tea.Prettify(s)
}

func (s PreviewGtmRecoveryPlanRequest) GoString() string {
	return s.String()
}

func (s *PreviewGtmRecoveryPlanRequest) SetLang(v string) *PreviewGtmRecoveryPlanRequest {
	s.Lang = &v
	return s
}

func (s *PreviewGtmRecoveryPlanRequest) SetRecoveryPlanId(v int64) *PreviewGtmRecoveryPlanRequest {
	s.RecoveryPlanId = &v
	return s
}

func (s *PreviewGtmRecoveryPlanRequest) SetPageNumber(v int) *PreviewGtmRecoveryPlanRequest {
	s.PageNumber = &v
	return s
}

func (s *PreviewGtmRecoveryPlanRequest) SetPageSize(v int) *PreviewGtmRecoveryPlanRequest {
	s.PageSize = &v
	return s
}

type PreviewGtmRecoveryPlanResponse struct {
	RequestId  *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems *int                                    `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	TotalPages *int                                    `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	PageSize   *int                                    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Previews   *PreviewGtmRecoveryPlanResponsePreviews `json:"Previews,omitempty" xml:"Previews,omitempty" require:"true" type:"Struct"`
}

func (s PreviewGtmRecoveryPlanResponse) String() string {
	return tea.Prettify(s)
}

func (s PreviewGtmRecoveryPlanResponse) GoString() string {
	return s.String()
}

func (s *PreviewGtmRecoveryPlanResponse) SetRequestId(v string) *PreviewGtmRecoveryPlanResponse {
	s.RequestId = &v
	return s
}

func (s *PreviewGtmRecoveryPlanResponse) SetTotalItems(v int) *PreviewGtmRecoveryPlanResponse {
	s.TotalItems = &v
	return s
}

func (s *PreviewGtmRecoveryPlanResponse) SetTotalPages(v int) *PreviewGtmRecoveryPlanResponse {
	s.TotalPages = &v
	return s
}

func (s *PreviewGtmRecoveryPlanResponse) SetPageSize(v int) *PreviewGtmRecoveryPlanResponse {
	s.PageSize = &v
	return s
}

func (s *PreviewGtmRecoveryPlanResponse) SetPageNumber(v int) *PreviewGtmRecoveryPlanResponse {
	s.PageNumber = &v
	return s
}

func (s *PreviewGtmRecoveryPlanResponse) SetPreviews(v *PreviewGtmRecoveryPlanResponsePreviews) *PreviewGtmRecoveryPlanResponse {
	s.Previews = v
	return s
}

type PreviewGtmRecoveryPlanResponsePreviews struct {
	Preview []*PreviewGtmRecoveryPlanResponsePreviewsPreview `json:"Preview,omitempty" xml:"Preview,omitempty" require:"true" type:"Repeated"`
}

func (s PreviewGtmRecoveryPlanResponsePreviews) String() string {
	return tea.Prettify(s)
}

func (s PreviewGtmRecoveryPlanResponsePreviews) GoString() string {
	return s.String()
}

func (s *PreviewGtmRecoveryPlanResponsePreviews) SetPreview(v []*PreviewGtmRecoveryPlanResponsePreviewsPreview) *PreviewGtmRecoveryPlanResponsePreviews {
	s.Preview = v
	return s
}

type PreviewGtmRecoveryPlanResponsePreviewsPreview struct {
	InstanceId     *string                                                   `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Name           *string                                                   `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	UserDomainName *string                                                   `json:"UserDomainName,omitempty" xml:"UserDomainName,omitempty" require:"true"`
	SwitchInfos    *PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos `json:"SwitchInfos,omitempty" xml:"SwitchInfos,omitempty" require:"true" type:"Struct"`
}

func (s PreviewGtmRecoveryPlanResponsePreviewsPreview) String() string {
	return tea.Prettify(s)
}

func (s PreviewGtmRecoveryPlanResponsePreviewsPreview) GoString() string {
	return s.String()
}

func (s *PreviewGtmRecoveryPlanResponsePreviewsPreview) SetInstanceId(v string) *PreviewGtmRecoveryPlanResponsePreviewsPreview {
	s.InstanceId = &v
	return s
}

func (s *PreviewGtmRecoveryPlanResponsePreviewsPreview) SetName(v string) *PreviewGtmRecoveryPlanResponsePreviewsPreview {
	s.Name = &v
	return s
}

func (s *PreviewGtmRecoveryPlanResponsePreviewsPreview) SetUserDomainName(v string) *PreviewGtmRecoveryPlanResponsePreviewsPreview {
	s.UserDomainName = &v
	return s
}

func (s *PreviewGtmRecoveryPlanResponsePreviewsPreview) SetSwitchInfos(v *PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos) *PreviewGtmRecoveryPlanResponsePreviewsPreview {
	s.SwitchInfos = v
	return s
}

type PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos struct {
	SwitchInfo []*PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo `json:"SwitchInfo,omitempty" xml:"SwitchInfo,omitempty" require:"true" type:"Repeated"`
}

func (s PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos) String() string {
	return tea.Prettify(s)
}

func (s PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos) GoString() string {
	return s.String()
}

func (s *PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos) SetSwitchInfo(v []*PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo) *PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos {
	s.SwitchInfo = v
	return s
}

type PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo struct {
	StrategyName *string `json:"StrategyName,omitempty" xml:"StrategyName,omitempty" require:"true"`
	Content      *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
}

func (s PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo) String() string {
	return tea.Prettify(s)
}

func (s PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo) GoString() string {
	return s.String()
}

func (s *PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo) SetStrategyName(v string) *PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo {
	s.StrategyName = &v
	return s
}

func (s *PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo) SetContent(v string) *PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo {
	s.Content = &v
	return s
}

type GetTxtRecordForVerifyRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s GetTxtRecordForVerifyRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTxtRecordForVerifyRequest) GoString() string {
	return s.String()
}

func (s *GetTxtRecordForVerifyRequest) SetLang(v string) *GetTxtRecordForVerifyRequest {
	s.Lang = &v
	return s
}

func (s *GetTxtRecordForVerifyRequest) SetDomainName(v string) *GetTxtRecordForVerifyRequest {
	s.DomainName = &v
	return s
}

func (s *GetTxtRecordForVerifyRequest) SetType(v string) *GetTxtRecordForVerifyRequest {
	s.Type = &v
	return s
}

type GetTxtRecordForVerifyResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	RR         *string `json:"RR,omitempty" xml:"RR,omitempty" require:"true"`
	Value      *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s GetTxtRecordForVerifyResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTxtRecordForVerifyResponse) GoString() string {
	return s.String()
}

func (s *GetTxtRecordForVerifyResponse) SetRequestId(v string) *GetTxtRecordForVerifyResponse {
	s.RequestId = &v
	return s
}

func (s *GetTxtRecordForVerifyResponse) SetDomainName(v string) *GetTxtRecordForVerifyResponse {
	s.DomainName = &v
	return s
}

func (s *GetTxtRecordForVerifyResponse) SetRR(v string) *GetTxtRecordForVerifyResponse {
	s.RR = &v
	return s
}

func (s *GetTxtRecordForVerifyResponse) SetValue(v string) *GetTxtRecordForVerifyResponse {
	s.Value = &v
	return s
}

type DescribeDomainStatisticsRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	StartDate  *string `json:"StartDate,omitempty" xml:"StartDate,omitempty" require:"true"`
	EndDate    *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
}

func (s DescribeDomainStatisticsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainStatisticsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainStatisticsRequest) SetLang(v string) *DescribeDomainStatisticsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainStatisticsRequest) SetDomainName(v string) *DescribeDomainStatisticsRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainStatisticsRequest) SetStartDate(v string) *DescribeDomainStatisticsRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeDomainStatisticsRequest) SetEndDate(v string) *DescribeDomainStatisticsRequest {
	s.EndDate = &v
	return s
}

type DescribeDomainStatisticsResponse struct {
	RequestId  *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Statistics *DescribeDomainStatisticsResponseStatistics `json:"Statistics,omitempty" xml:"Statistics,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainStatisticsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainStatisticsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainStatisticsResponse) SetRequestId(v string) *DescribeDomainStatisticsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainStatisticsResponse) SetStatistics(v *DescribeDomainStatisticsResponseStatistics) *DescribeDomainStatisticsResponse {
	s.Statistics = v
	return s
}

type DescribeDomainStatisticsResponseStatistics struct {
	Statistic []*DescribeDomainStatisticsResponseStatisticsStatistic `json:"Statistic,omitempty" xml:"Statistic,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainStatisticsResponseStatistics) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainStatisticsResponseStatistics) GoString() string {
	return s.String()
}

func (s *DescribeDomainStatisticsResponseStatistics) SetStatistic(v []*DescribeDomainStatisticsResponseStatisticsStatistic) *DescribeDomainStatisticsResponseStatistics {
	s.Statistic = v
	return s
}

type DescribeDomainStatisticsResponseStatisticsStatistic struct {
	Timestamp *int64 `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Count     *int64 `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
}

func (s DescribeDomainStatisticsResponseStatisticsStatistic) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainStatisticsResponseStatisticsStatistic) GoString() string {
	return s.String()
}

func (s *DescribeDomainStatisticsResponseStatisticsStatistic) SetTimestamp(v int64) *DescribeDomainStatisticsResponseStatisticsStatistic {
	s.Timestamp = &v
	return s
}

func (s *DescribeDomainStatisticsResponseStatisticsStatistic) SetCount(v int64) *DescribeDomainStatisticsResponseStatisticsStatistic {
	s.Count = &v
	return s
}

type DescribeRecordStatisticsRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	StartDate  *string `json:"StartDate,omitempty" xml:"StartDate,omitempty" require:"true"`
	EndDate    *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	Rr         *string `json:"Rr,omitempty" xml:"Rr,omitempty" require:"true"`
}

func (s DescribeRecordStatisticsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordStatisticsRequest) GoString() string {
	return s.String()
}

func (s *DescribeRecordStatisticsRequest) SetLang(v string) *DescribeRecordStatisticsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeRecordStatisticsRequest) SetStartDate(v string) *DescribeRecordStatisticsRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeRecordStatisticsRequest) SetEndDate(v string) *DescribeRecordStatisticsRequest {
	s.EndDate = &v
	return s
}

func (s *DescribeRecordStatisticsRequest) SetDomainName(v string) *DescribeRecordStatisticsRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeRecordStatisticsRequest) SetRr(v string) *DescribeRecordStatisticsRequest {
	s.Rr = &v
	return s
}

type DescribeRecordStatisticsResponse struct {
	RequestId  *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Statistics *DescribeRecordStatisticsResponseStatistics `json:"Statistics,omitempty" xml:"Statistics,omitempty" require:"true" type:"Struct"`
}

func (s DescribeRecordStatisticsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordStatisticsResponse) GoString() string {
	return s.String()
}

func (s *DescribeRecordStatisticsResponse) SetRequestId(v string) *DescribeRecordStatisticsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeRecordStatisticsResponse) SetStatistics(v *DescribeRecordStatisticsResponseStatistics) *DescribeRecordStatisticsResponse {
	s.Statistics = v
	return s
}

type DescribeRecordStatisticsResponseStatistics struct {
	Statistic []*DescribeRecordStatisticsResponseStatisticsStatistic `json:"Statistic,omitempty" xml:"Statistic,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeRecordStatisticsResponseStatistics) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordStatisticsResponseStatistics) GoString() string {
	return s.String()
}

func (s *DescribeRecordStatisticsResponseStatistics) SetStatistic(v []*DescribeRecordStatisticsResponseStatisticsStatistic) *DescribeRecordStatisticsResponseStatistics {
	s.Statistic = v
	return s
}

type DescribeRecordStatisticsResponseStatisticsStatistic struct {
	Timestamp *int64 `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Count     *int64 `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
}

func (s DescribeRecordStatisticsResponseStatisticsStatistic) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordStatisticsResponseStatisticsStatistic) GoString() string {
	return s.String()
}

func (s *DescribeRecordStatisticsResponseStatisticsStatistic) SetTimestamp(v int64) *DescribeRecordStatisticsResponseStatisticsStatistic {
	s.Timestamp = &v
	return s
}

func (s *DescribeRecordStatisticsResponseStatisticsStatistic) SetCount(v int64) *DescribeRecordStatisticsResponseStatisticsStatistic {
	s.Count = &v
	return s
}

type DescribeGtmInstanceSystemCnameRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s DescribeGtmInstanceSystemCnameRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceSystemCnameRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceSystemCnameRequest) SetLang(v string) *DescribeGtmInstanceSystemCnameRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmInstanceSystemCnameRequest) SetInstanceId(v string) *DescribeGtmInstanceSystemCnameRequest {
	s.InstanceId = &v
	return s
}

type DescribeGtmInstanceSystemCnameResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SystemCname *string `json:"SystemCname,omitempty" xml:"SystemCname,omitempty" require:"true"`
}

func (s DescribeGtmInstanceSystemCnameResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceSystemCnameResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceSystemCnameResponse) SetRequestId(v string) *DescribeGtmInstanceSystemCnameResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmInstanceSystemCnameResponse) SetSystemCname(v string) *DescribeGtmInstanceSystemCnameResponse {
	s.SystemCname = &v
	return s
}

type DescribeInstanceDomainsRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	PageNumber *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s DescribeInstanceDomainsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeInstanceDomainsRequest) GoString() string {
	return s.String()
}

func (s *DescribeInstanceDomainsRequest) SetLang(v string) *DescribeInstanceDomainsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeInstanceDomainsRequest) SetPageNumber(v int64) *DescribeInstanceDomainsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeInstanceDomainsRequest) SetPageSize(v int64) *DescribeInstanceDomainsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeInstanceDomainsRequest) SetInstanceId(v string) *DescribeInstanceDomainsRequest {
	s.InstanceId = &v
	return s
}

type DescribeInstanceDomainsResponse struct {
	RequestId       *string                                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems      *int                                              `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	PageNumber      *int                                              `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize        *int                                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalPages      *int                                              `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	InstanceDomains []*DescribeInstanceDomainsResponseInstanceDomains `json:"InstanceDomains,omitempty" xml:"InstanceDomains,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeInstanceDomainsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeInstanceDomainsResponse) GoString() string {
	return s.String()
}

func (s *DescribeInstanceDomainsResponse) SetRequestId(v string) *DescribeInstanceDomainsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeInstanceDomainsResponse) SetTotalItems(v int) *DescribeInstanceDomainsResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeInstanceDomainsResponse) SetPageNumber(v int) *DescribeInstanceDomainsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeInstanceDomainsResponse) SetPageSize(v int) *DescribeInstanceDomainsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeInstanceDomainsResponse) SetTotalPages(v int) *DescribeInstanceDomainsResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeInstanceDomainsResponse) SetInstanceDomains(v []*DescribeInstanceDomainsResponseInstanceDomains) *DescribeInstanceDomainsResponse {
	s.InstanceDomains = v
	return s
}

type DescribeInstanceDomainsResponseInstanceDomains struct {
	DomainName      *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	CreateTime      *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp *int64  `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
}

func (s DescribeInstanceDomainsResponseInstanceDomains) String() string {
	return tea.Prettify(s)
}

func (s DescribeInstanceDomainsResponseInstanceDomains) GoString() string {
	return s.String()
}

func (s *DescribeInstanceDomainsResponseInstanceDomains) SetDomainName(v string) *DescribeInstanceDomainsResponseInstanceDomains {
	s.DomainName = &v
	return s
}

func (s *DescribeInstanceDomainsResponseInstanceDomains) SetCreateTime(v string) *DescribeInstanceDomainsResponseInstanceDomains {
	s.CreateTime = &v
	return s
}

func (s *DescribeInstanceDomainsResponseInstanceDomains) SetCreateTimestamp(v int64) *DescribeInstanceDomainsResponseInstanceDomains {
	s.CreateTimestamp = &v
	return s
}

type BindInstanceDomainsRequest struct {
	Lang        *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId  *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	DomainNames *string `json:"DomainNames,omitempty" xml:"DomainNames,omitempty" require:"true"`
}

func (s BindInstanceDomainsRequest) String() string {
	return tea.Prettify(s)
}

func (s BindInstanceDomainsRequest) GoString() string {
	return s.String()
}

func (s *BindInstanceDomainsRequest) SetLang(v string) *BindInstanceDomainsRequest {
	s.Lang = &v
	return s
}

func (s *BindInstanceDomainsRequest) SetInstanceId(v string) *BindInstanceDomainsRequest {
	s.InstanceId = &v
	return s
}

func (s *BindInstanceDomainsRequest) SetDomainNames(v string) *BindInstanceDomainsRequest {
	s.DomainNames = &v
	return s
}

type BindInstanceDomainsResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SuccessCount *int    `json:"SuccessCount,omitempty" xml:"SuccessCount,omitempty" require:"true"`
	FailedCount  *int    `json:"FailedCount,omitempty" xml:"FailedCount,omitempty" require:"true"`
}

func (s BindInstanceDomainsResponse) String() string {
	return tea.Prettify(s)
}

func (s BindInstanceDomainsResponse) GoString() string {
	return s.String()
}

func (s *BindInstanceDomainsResponse) SetRequestId(v string) *BindInstanceDomainsResponse {
	s.RequestId = &v
	return s
}

func (s *BindInstanceDomainsResponse) SetSuccessCount(v int) *BindInstanceDomainsResponse {
	s.SuccessCount = &v
	return s
}

func (s *BindInstanceDomainsResponse) SetFailedCount(v int) *BindInstanceDomainsResponse {
	s.FailedCount = &v
	return s
}

type UnbindInstanceDomainsRequest struct {
	Lang        *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainNames *string `json:"DomainNames,omitempty" xml:"DomainNames,omitempty" require:"true"`
	InstanceId  *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s UnbindInstanceDomainsRequest) String() string {
	return tea.Prettify(s)
}

func (s UnbindInstanceDomainsRequest) GoString() string {
	return s.String()
}

func (s *UnbindInstanceDomainsRequest) SetLang(v string) *UnbindInstanceDomainsRequest {
	s.Lang = &v
	return s
}

func (s *UnbindInstanceDomainsRequest) SetDomainNames(v string) *UnbindInstanceDomainsRequest {
	s.DomainNames = &v
	return s
}

func (s *UnbindInstanceDomainsRequest) SetInstanceId(v string) *UnbindInstanceDomainsRequest {
	s.InstanceId = &v
	return s
}

type UnbindInstanceDomainsResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SuccessCount *int    `json:"SuccessCount,omitempty" xml:"SuccessCount,omitempty" require:"true"`
	FailedCount  *int    `json:"FailedCount,omitempty" xml:"FailedCount,omitempty" require:"true"`
}

func (s UnbindInstanceDomainsResponse) String() string {
	return tea.Prettify(s)
}

func (s UnbindInstanceDomainsResponse) GoString() string {
	return s.String()
}

func (s *UnbindInstanceDomainsResponse) SetRequestId(v string) *UnbindInstanceDomainsResponse {
	s.RequestId = &v
	return s
}

func (s *UnbindInstanceDomainsResponse) SetSuccessCount(v int) *UnbindInstanceDomainsResponse {
	s.SuccessCount = &v
	return s
}

func (s *UnbindInstanceDomainsResponse) SetFailedCount(v int) *UnbindInstanceDomainsResponse {
	s.FailedCount = &v
	return s
}

type UpdateCustomLineRequest struct {
	Lang      *string                             `json:"Lang,omitempty" xml:"Lang,omitempty"`
	LineName  *string                             `json:"LineName,omitempty" xml:"LineName,omitempty"`
	IpSegment []*UpdateCustomLineRequestIpSegment `json:"IpSegment,omitempty" xml:"IpSegment,omitempty" type:"Repeated"`
	LineId    *int64                              `json:"LineId,omitempty" xml:"LineId,omitempty" require:"true"`
}

func (s UpdateCustomLineRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateCustomLineRequest) GoString() string {
	return s.String()
}

func (s *UpdateCustomLineRequest) SetLang(v string) *UpdateCustomLineRequest {
	s.Lang = &v
	return s
}

func (s *UpdateCustomLineRequest) SetLineName(v string) *UpdateCustomLineRequest {
	s.LineName = &v
	return s
}

func (s *UpdateCustomLineRequest) SetIpSegment(v []*UpdateCustomLineRequestIpSegment) *UpdateCustomLineRequest {
	s.IpSegment = v
	return s
}

func (s *UpdateCustomLineRequest) SetLineId(v int64) *UpdateCustomLineRequest {
	s.LineId = &v
	return s
}

type UpdateCustomLineRequestIpSegment struct {
	StartIp *string `json:"StartIp,omitempty" xml:"StartIp,omitempty"`
	EndIp   *string `json:"EndIp,omitempty" xml:"EndIp,omitempty"`
}

func (s UpdateCustomLineRequestIpSegment) String() string {
	return tea.Prettify(s)
}

func (s UpdateCustomLineRequestIpSegment) GoString() string {
	return s.String()
}

func (s *UpdateCustomLineRequestIpSegment) SetStartIp(v string) *UpdateCustomLineRequestIpSegment {
	s.StartIp = &v
	return s
}

func (s *UpdateCustomLineRequestIpSegment) SetEndIp(v string) *UpdateCustomLineRequestIpSegment {
	s.EndIp = &v
	return s
}

type UpdateCustomLineResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateCustomLineResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateCustomLineResponse) GoString() string {
	return s.String()
}

func (s *UpdateCustomLineResponse) SetRequestId(v string) *UpdateCustomLineResponse {
	s.RequestId = &v
	return s
}

type AddCustomLineRequest struct {
	Lang       *string                          `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string                          `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	LineName   *string                          `json:"LineName,omitempty" xml:"LineName,omitempty" require:"true"`
	IpSegment  []*AddCustomLineRequestIpSegment `json:"IpSegment,omitempty" xml:"IpSegment,omitempty" require:"true" type:"Repeated"`
}

func (s AddCustomLineRequest) String() string {
	return tea.Prettify(s)
}

func (s AddCustomLineRequest) GoString() string {
	return s.String()
}

func (s *AddCustomLineRequest) SetLang(v string) *AddCustomLineRequest {
	s.Lang = &v
	return s
}

func (s *AddCustomLineRequest) SetDomainName(v string) *AddCustomLineRequest {
	s.DomainName = &v
	return s
}

func (s *AddCustomLineRequest) SetLineName(v string) *AddCustomLineRequest {
	s.LineName = &v
	return s
}

func (s *AddCustomLineRequest) SetIpSegment(v []*AddCustomLineRequestIpSegment) *AddCustomLineRequest {
	s.IpSegment = v
	return s
}

type AddCustomLineRequestIpSegment struct {
	StartIp *string `json:"StartIp,omitempty" xml:"StartIp,omitempty"`
	EndIp   *string `json:"EndIp,omitempty" xml:"EndIp,omitempty"`
}

func (s AddCustomLineRequestIpSegment) String() string {
	return tea.Prettify(s)
}

func (s AddCustomLineRequestIpSegment) GoString() string {
	return s.String()
}

func (s *AddCustomLineRequestIpSegment) SetStartIp(v string) *AddCustomLineRequestIpSegment {
	s.StartIp = &v
	return s
}

func (s *AddCustomLineRequestIpSegment) SetEndIp(v string) *AddCustomLineRequestIpSegment {
	s.EndIp = &v
	return s
}

type AddCustomLineResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	LineId    *int64  `json:"LineId,omitempty" xml:"LineId,omitempty" require:"true"`
	LineCode  *string `json:"LineCode,omitempty" xml:"LineCode,omitempty" require:"true"`
}

func (s AddCustomLineResponse) String() string {
	return tea.Prettify(s)
}

func (s AddCustomLineResponse) GoString() string {
	return s.String()
}

func (s *AddCustomLineResponse) SetRequestId(v string) *AddCustomLineResponse {
	s.RequestId = &v
	return s
}

func (s *AddCustomLineResponse) SetLineId(v int64) *AddCustomLineResponse {
	s.LineId = &v
	return s
}

func (s *AddCustomLineResponse) SetLineCode(v string) *AddCustomLineResponse {
	s.LineCode = &v
	return s
}

type DeleteCustomLinesRequest struct {
	Lang    *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	LineIds *string `json:"LineIds,omitempty" xml:"LineIds,omitempty" require:"true"`
}

func (s DeleteCustomLinesRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteCustomLinesRequest) GoString() string {
	return s.String()
}

func (s *DeleteCustomLinesRequest) SetLang(v string) *DeleteCustomLinesRequest {
	s.Lang = &v
	return s
}

func (s *DeleteCustomLinesRequest) SetLineIds(v string) *DeleteCustomLinesRequest {
	s.LineIds = &v
	return s
}

type DeleteCustomLinesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteCustomLinesResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteCustomLinesResponse) GoString() string {
	return s.String()
}

func (s *DeleteCustomLinesResponse) SetRequestId(v string) *DeleteCustomLinesResponse {
	s.RequestId = &v
	return s
}

type DescribeCustomLineRequest struct {
	LineId *int64  `json:"LineId,omitempty" xml:"LineId,omitempty"`
	Lang   *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
}

func (s DescribeCustomLineRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomLineRequest) GoString() string {
	return s.String()
}

func (s *DescribeCustomLineRequest) SetLineId(v int64) *DescribeCustomLineRequest {
	s.LineId = &v
	return s
}

func (s *DescribeCustomLineRequest) SetLang(v string) *DescribeCustomLineRequest {
	s.Lang = &v
	return s
}

type DescribeCustomLineResponse struct {
	RequestId       *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Id              *int64                                     `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Name            *string                                    `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	DomainName      *string                                    `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	CreateTime      *string                                    `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp *int64                                     `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	IpSegments      *string                                    `json:"IpSegments,omitempty" xml:"IpSegments,omitempty" require:"true"`
	Code            *string                                    `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	IpSegmentList   []*DescribeCustomLineResponseIpSegmentList `json:"IpSegmentList,omitempty" xml:"IpSegmentList,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeCustomLineResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomLineResponse) GoString() string {
	return s.String()
}

func (s *DescribeCustomLineResponse) SetRequestId(v string) *DescribeCustomLineResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeCustomLineResponse) SetId(v int64) *DescribeCustomLineResponse {
	s.Id = &v
	return s
}

func (s *DescribeCustomLineResponse) SetName(v string) *DescribeCustomLineResponse {
	s.Name = &v
	return s
}

func (s *DescribeCustomLineResponse) SetDomainName(v string) *DescribeCustomLineResponse {
	s.DomainName = &v
	return s
}

func (s *DescribeCustomLineResponse) SetCreateTime(v string) *DescribeCustomLineResponse {
	s.CreateTime = &v
	return s
}

func (s *DescribeCustomLineResponse) SetCreateTimestamp(v int64) *DescribeCustomLineResponse {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeCustomLineResponse) SetIpSegments(v string) *DescribeCustomLineResponse {
	s.IpSegments = &v
	return s
}

func (s *DescribeCustomLineResponse) SetCode(v string) *DescribeCustomLineResponse {
	s.Code = &v
	return s
}

func (s *DescribeCustomLineResponse) SetIpSegmentList(v []*DescribeCustomLineResponseIpSegmentList) *DescribeCustomLineResponse {
	s.IpSegmentList = v
	return s
}

type DescribeCustomLineResponseIpSegmentList struct {
	Name    *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	StartIp *string `json:"StartIp,omitempty" xml:"StartIp,omitempty" require:"true"`
	EndIp   *string `json:"EndIp,omitempty" xml:"EndIp,omitempty" require:"true"`
}

func (s DescribeCustomLineResponseIpSegmentList) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomLineResponseIpSegmentList) GoString() string {
	return s.String()
}

func (s *DescribeCustomLineResponseIpSegmentList) SetName(v string) *DescribeCustomLineResponseIpSegmentList {
	s.Name = &v
	return s
}

func (s *DescribeCustomLineResponseIpSegmentList) SetStartIp(v string) *DescribeCustomLineResponseIpSegmentList {
	s.StartIp = &v
	return s
}

func (s *DescribeCustomLineResponseIpSegmentList) SetEndIp(v string) *DescribeCustomLineResponseIpSegmentList {
	s.EndIp = &v
	return s
}

type DescribeCustomLinesRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	PageNumber *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DescribeCustomLinesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomLinesRequest) GoString() string {
	return s.String()
}

func (s *DescribeCustomLinesRequest) SetLang(v string) *DescribeCustomLinesRequest {
	s.Lang = &v
	return s
}

func (s *DescribeCustomLinesRequest) SetPageNumber(v int64) *DescribeCustomLinesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeCustomLinesRequest) SetPageSize(v int64) *DescribeCustomLinesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeCustomLinesRequest) SetDomainName(v string) *DescribeCustomLinesRequest {
	s.DomainName = &v
	return s
}

type DescribeCustomLinesResponse struct {
	RequestId   *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems  *int                                      `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	PageNumber  *int                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize    *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalPages  *int                                      `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	CustomLines []*DescribeCustomLinesResponseCustomLines `json:"CustomLines,omitempty" xml:"CustomLines,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeCustomLinesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomLinesResponse) GoString() string {
	return s.String()
}

func (s *DescribeCustomLinesResponse) SetRequestId(v string) *DescribeCustomLinesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeCustomLinesResponse) SetTotalItems(v int) *DescribeCustomLinesResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeCustomLinesResponse) SetPageNumber(v int) *DescribeCustomLinesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeCustomLinesResponse) SetPageSize(v int) *DescribeCustomLinesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeCustomLinesResponse) SetTotalPages(v int) *DescribeCustomLinesResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeCustomLinesResponse) SetCustomLines(v []*DescribeCustomLinesResponseCustomLines) *DescribeCustomLinesResponse {
	s.CustomLines = v
	return s
}

type DescribeCustomLinesResponseCustomLines struct {
	Id              *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	CreateTime      *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp *int64  `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	IpSegments      *string `json:"IpSegments,omitempty" xml:"IpSegments,omitempty" require:"true"`
	Code            *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
}

func (s DescribeCustomLinesResponseCustomLines) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomLinesResponseCustomLines) GoString() string {
	return s.String()
}

func (s *DescribeCustomLinesResponseCustomLines) SetId(v int64) *DescribeCustomLinesResponseCustomLines {
	s.Id = &v
	return s
}

func (s *DescribeCustomLinesResponseCustomLines) SetName(v string) *DescribeCustomLinesResponseCustomLines {
	s.Name = &v
	return s
}

func (s *DescribeCustomLinesResponseCustomLines) SetCreateTime(v string) *DescribeCustomLinesResponseCustomLines {
	s.CreateTime = &v
	return s
}

func (s *DescribeCustomLinesResponseCustomLines) SetCreateTimestamp(v int64) *DescribeCustomLinesResponseCustomLines {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeCustomLinesResponseCustomLines) SetIpSegments(v string) *DescribeCustomLinesResponseCustomLines {
	s.IpSegments = &v
	return s
}

func (s *DescribeCustomLinesResponseCustomLines) SetCode(v string) *DescribeCustomLinesResponseCustomLines {
	s.Code = &v
	return s
}

type DescribeDomainStatisticsSummaryRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	PageNumber *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	StartDate  *string `json:"StartDate,omitempty" xml:"StartDate,omitempty" require:"true"`
	EndDate    *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
	SearchMode *string `json:"SearchMode,omitempty" xml:"SearchMode,omitempty"`
	Keyword    *string `json:"Keyword,omitempty" xml:"Keyword,omitempty"`
	Threshold  *int64  `json:"Threshold,omitempty" xml:"Threshold,omitempty"`
}

func (s DescribeDomainStatisticsSummaryRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainStatisticsSummaryRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainStatisticsSummaryRequest) SetLang(v string) *DescribeDomainStatisticsSummaryRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryRequest) SetPageNumber(v int64) *DescribeDomainStatisticsSummaryRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryRequest) SetPageSize(v int64) *DescribeDomainStatisticsSummaryRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryRequest) SetStartDate(v string) *DescribeDomainStatisticsSummaryRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryRequest) SetEndDate(v string) *DescribeDomainStatisticsSummaryRequest {
	s.EndDate = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryRequest) SetSearchMode(v string) *DescribeDomainStatisticsSummaryRequest {
	s.SearchMode = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryRequest) SetKeyword(v string) *DescribeDomainStatisticsSummaryRequest {
	s.Keyword = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryRequest) SetThreshold(v int64) *DescribeDomainStatisticsSummaryRequest {
	s.Threshold = &v
	return s
}

type DescribeDomainStatisticsSummaryResponse struct {
	RequestId  *string                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems *int                                               `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	TotalPages *int                                               `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	PageSize   *int                                               `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                               `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Statistics *DescribeDomainStatisticsSummaryResponseStatistics `json:"Statistics,omitempty" xml:"Statistics,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainStatisticsSummaryResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainStatisticsSummaryResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainStatisticsSummaryResponse) SetRequestId(v string) *DescribeDomainStatisticsSummaryResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryResponse) SetTotalItems(v int) *DescribeDomainStatisticsSummaryResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryResponse) SetTotalPages(v int) *DescribeDomainStatisticsSummaryResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryResponse) SetPageSize(v int) *DescribeDomainStatisticsSummaryResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryResponse) SetPageNumber(v int) *DescribeDomainStatisticsSummaryResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryResponse) SetStatistics(v *DescribeDomainStatisticsSummaryResponseStatistics) *DescribeDomainStatisticsSummaryResponse {
	s.Statistics = v
	return s
}

type DescribeDomainStatisticsSummaryResponseStatistics struct {
	Statistic []*DescribeDomainStatisticsSummaryResponseStatisticsStatistic `json:"Statistic,omitempty" xml:"Statistic,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainStatisticsSummaryResponseStatistics) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainStatisticsSummaryResponseStatistics) GoString() string {
	return s.String()
}

func (s *DescribeDomainStatisticsSummaryResponseStatistics) SetStatistic(v []*DescribeDomainStatisticsSummaryResponseStatisticsStatistic) *DescribeDomainStatisticsSummaryResponseStatistics {
	s.Statistic = v
	return s
}

type DescribeDomainStatisticsSummaryResponseStatisticsStatistic struct {
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	Count      *int64  `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
}

func (s DescribeDomainStatisticsSummaryResponseStatisticsStatistic) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainStatisticsSummaryResponseStatisticsStatistic) GoString() string {
	return s.String()
}

func (s *DescribeDomainStatisticsSummaryResponseStatisticsStatistic) SetDomainName(v string) *DescribeDomainStatisticsSummaryResponseStatisticsStatistic {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainStatisticsSummaryResponseStatisticsStatistic) SetCount(v int64) *DescribeDomainStatisticsSummaryResponseStatisticsStatistic {
	s.Count = &v
	return s
}

type DescribeRecordStatisticsSummaryRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	PageNumber *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	StartDate  *string `json:"StartDate,omitempty" xml:"StartDate,omitempty" require:"true"`
	EndDate    *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	SearchMode *string `json:"SearchMode,omitempty" xml:"SearchMode,omitempty"`
	Keyword    *string `json:"Keyword,omitempty" xml:"Keyword,omitempty"`
	Threshold  *int64  `json:"Threshold,omitempty" xml:"Threshold,omitempty"`
}

func (s DescribeRecordStatisticsSummaryRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordStatisticsSummaryRequest) GoString() string {
	return s.String()
}

func (s *DescribeRecordStatisticsSummaryRequest) SetLang(v string) *DescribeRecordStatisticsSummaryRequest {
	s.Lang = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryRequest) SetPageNumber(v int64) *DescribeRecordStatisticsSummaryRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryRequest) SetPageSize(v int64) *DescribeRecordStatisticsSummaryRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryRequest) SetStartDate(v string) *DescribeRecordStatisticsSummaryRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryRequest) SetEndDate(v string) *DescribeRecordStatisticsSummaryRequest {
	s.EndDate = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryRequest) SetDomainName(v string) *DescribeRecordStatisticsSummaryRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryRequest) SetSearchMode(v string) *DescribeRecordStatisticsSummaryRequest {
	s.SearchMode = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryRequest) SetKeyword(v string) *DescribeRecordStatisticsSummaryRequest {
	s.Keyword = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryRequest) SetThreshold(v int64) *DescribeRecordStatisticsSummaryRequest {
	s.Threshold = &v
	return s
}

type DescribeRecordStatisticsSummaryResponse struct {
	RequestId  *string                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems *int                                               `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	TotalPages *int                                               `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	PageSize   *int                                               `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                               `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Statistics *DescribeRecordStatisticsSummaryResponseStatistics `json:"Statistics,omitempty" xml:"Statistics,omitempty" require:"true" type:"Struct"`
}

func (s DescribeRecordStatisticsSummaryResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordStatisticsSummaryResponse) GoString() string {
	return s.String()
}

func (s *DescribeRecordStatisticsSummaryResponse) SetRequestId(v string) *DescribeRecordStatisticsSummaryResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryResponse) SetTotalItems(v int) *DescribeRecordStatisticsSummaryResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryResponse) SetTotalPages(v int) *DescribeRecordStatisticsSummaryResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryResponse) SetPageSize(v int) *DescribeRecordStatisticsSummaryResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryResponse) SetPageNumber(v int) *DescribeRecordStatisticsSummaryResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryResponse) SetStatistics(v *DescribeRecordStatisticsSummaryResponseStatistics) *DescribeRecordStatisticsSummaryResponse {
	s.Statistics = v
	return s
}

type DescribeRecordStatisticsSummaryResponseStatistics struct {
	Statistic []*DescribeRecordStatisticsSummaryResponseStatisticsStatistic `json:"Statistic,omitempty" xml:"Statistic,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeRecordStatisticsSummaryResponseStatistics) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordStatisticsSummaryResponseStatistics) GoString() string {
	return s.String()
}

func (s *DescribeRecordStatisticsSummaryResponseStatistics) SetStatistic(v []*DescribeRecordStatisticsSummaryResponseStatisticsStatistic) *DescribeRecordStatisticsSummaryResponseStatistics {
	s.Statistic = v
	return s
}

type DescribeRecordStatisticsSummaryResponseStatisticsStatistic struct {
	SubDomain *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	Count     *int64  `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
}

func (s DescribeRecordStatisticsSummaryResponseStatisticsStatistic) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordStatisticsSummaryResponseStatisticsStatistic) GoString() string {
	return s.String()
}

func (s *DescribeRecordStatisticsSummaryResponseStatisticsStatistic) SetSubDomain(v string) *DescribeRecordStatisticsSummaryResponseStatisticsStatistic {
	s.SubDomain = &v
	return s
}

func (s *DescribeRecordStatisticsSummaryResponseStatisticsStatistic) SetCount(v int64) *DescribeRecordStatisticsSummaryResponseStatisticsStatistic {
	s.Count = &v
	return s
}

type OperateBatchDomainRequest struct {
	Lang             *string                                      `json:"Lang,omitempty" xml:"Lang,omitempty"`
	Type             *string                                      `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	DomainRecordInfo []*OperateBatchDomainRequestDomainRecordInfo `json:"DomainRecordInfo,omitempty" xml:"DomainRecordInfo,omitempty" require:"true" type:"Repeated"`
}

func (s OperateBatchDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s OperateBatchDomainRequest) GoString() string {
	return s.String()
}

func (s *OperateBatchDomainRequest) SetLang(v string) *OperateBatchDomainRequest {
	s.Lang = &v
	return s
}

func (s *OperateBatchDomainRequest) SetType(v string) *OperateBatchDomainRequest {
	s.Type = &v
	return s
}

func (s *OperateBatchDomainRequest) SetDomainRecordInfo(v []*OperateBatchDomainRequestDomainRecordInfo) *OperateBatchDomainRequest {
	s.DomainRecordInfo = v
	return s
}

type OperateBatchDomainRequestDomainRecordInfo struct {
	Domain   *string `json:"Domain,omitempty" xml:"Domain,omitempty" require:"true"`
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty"`
	Rr       *string `json:"Rr,omitempty" xml:"Rr,omitempty"`
	Value    *string `json:"Value,omitempty" xml:"Value,omitempty"`
	Ttl      *int    `json:"Ttl,omitempty" xml:"Ttl,omitempty"`
	Priority *int    `json:"Priority,omitempty" xml:"Priority,omitempty"`
	Line     *string `json:"Line,omitempty" xml:"Line,omitempty"`
	NewRr    *string `json:"NewRr,omitempty" xml:"NewRr,omitempty"`
	NewType  *string `json:"NewType,omitempty" xml:"NewType,omitempty"`
	NewValue *string `json:"NewValue,omitempty" xml:"NewValue,omitempty"`
}

func (s OperateBatchDomainRequestDomainRecordInfo) String() string {
	return tea.Prettify(s)
}

func (s OperateBatchDomainRequestDomainRecordInfo) GoString() string {
	return s.String()
}

func (s *OperateBatchDomainRequestDomainRecordInfo) SetDomain(v string) *OperateBatchDomainRequestDomainRecordInfo {
	s.Domain = &v
	return s
}

func (s *OperateBatchDomainRequestDomainRecordInfo) SetType(v string) *OperateBatchDomainRequestDomainRecordInfo {
	s.Type = &v
	return s
}

func (s *OperateBatchDomainRequestDomainRecordInfo) SetRr(v string) *OperateBatchDomainRequestDomainRecordInfo {
	s.Rr = &v
	return s
}

func (s *OperateBatchDomainRequestDomainRecordInfo) SetValue(v string) *OperateBatchDomainRequestDomainRecordInfo {
	s.Value = &v
	return s
}

func (s *OperateBatchDomainRequestDomainRecordInfo) SetTtl(v int) *OperateBatchDomainRequestDomainRecordInfo {
	s.Ttl = &v
	return s
}

func (s *OperateBatchDomainRequestDomainRecordInfo) SetPriority(v int) *OperateBatchDomainRequestDomainRecordInfo {
	s.Priority = &v
	return s
}

func (s *OperateBatchDomainRequestDomainRecordInfo) SetLine(v string) *OperateBatchDomainRequestDomainRecordInfo {
	s.Line = &v
	return s
}

func (s *OperateBatchDomainRequestDomainRecordInfo) SetNewRr(v string) *OperateBatchDomainRequestDomainRecordInfo {
	s.NewRr = &v
	return s
}

func (s *OperateBatchDomainRequestDomainRecordInfo) SetNewType(v string) *OperateBatchDomainRequestDomainRecordInfo {
	s.NewType = &v
	return s
}

func (s *OperateBatchDomainRequestDomainRecordInfo) SetNewValue(v string) *OperateBatchDomainRequestDomainRecordInfo {
	s.NewValue = &v
	return s
}

type OperateBatchDomainResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TaskId    *int64  `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
}

func (s OperateBatchDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s OperateBatchDomainResponse) GoString() string {
	return s.String()
}

func (s *OperateBatchDomainResponse) SetRequestId(v string) *OperateBatchDomainResponse {
	s.RequestId = &v
	return s
}

func (s *OperateBatchDomainResponse) SetTaskId(v int64) *OperateBatchDomainResponse {
	s.TaskId = &v
	return s
}

type DescribeBatchResultDetailRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	TaskId     *int64  `json:"TaskId,omitempty" xml:"TaskId,omitempty"`
	BatchType  *string `json:"BatchType,omitempty" xml:"BatchType,omitempty"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty"`
}

func (s DescribeBatchResultDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeBatchResultDetailRequest) GoString() string {
	return s.String()
}

func (s *DescribeBatchResultDetailRequest) SetLang(v string) *DescribeBatchResultDetailRequest {
	s.Lang = &v
	return s
}

func (s *DescribeBatchResultDetailRequest) SetPageNumber(v int) *DescribeBatchResultDetailRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeBatchResultDetailRequest) SetPageSize(v int) *DescribeBatchResultDetailRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeBatchResultDetailRequest) SetTaskId(v int64) *DescribeBatchResultDetailRequest {
	s.TaskId = &v
	return s
}

func (s *DescribeBatchResultDetailRequest) SetBatchType(v string) *DescribeBatchResultDetailRequest {
	s.BatchType = &v
	return s
}

func (s *DescribeBatchResultDetailRequest) SetStatus(v string) *DescribeBatchResultDetailRequest {
	s.Status = &v
	return s
}

type DescribeBatchResultDetailResponse struct {
	RequestId          *string                                              `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount         *int64                                               `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber         *int64                                               `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize           *int64                                               `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	BatchResultDetails *DescribeBatchResultDetailResponseBatchResultDetails `json:"BatchResultDetails,omitempty" xml:"BatchResultDetails,omitempty" require:"true" type:"Struct"`
}

func (s DescribeBatchResultDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeBatchResultDetailResponse) GoString() string {
	return s.String()
}

func (s *DescribeBatchResultDetailResponse) SetRequestId(v string) *DescribeBatchResultDetailResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeBatchResultDetailResponse) SetTotalCount(v int64) *DescribeBatchResultDetailResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeBatchResultDetailResponse) SetPageNumber(v int64) *DescribeBatchResultDetailResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeBatchResultDetailResponse) SetPageSize(v int64) *DescribeBatchResultDetailResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeBatchResultDetailResponse) SetBatchResultDetails(v *DescribeBatchResultDetailResponseBatchResultDetails) *DescribeBatchResultDetailResponse {
	s.BatchResultDetails = v
	return s
}

type DescribeBatchResultDetailResponseBatchResultDetails struct {
	BatchResultDetail []*DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail `json:"BatchResultDetail,omitempty" xml:"BatchResultDetail,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeBatchResultDetailResponseBatchResultDetails) String() string {
	return tea.Prettify(s)
}

func (s DescribeBatchResultDetailResponseBatchResultDetails) GoString() string {
	return s.String()
}

func (s *DescribeBatchResultDetailResponseBatchResultDetails) SetBatchResultDetail(v []*DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) *DescribeBatchResultDetailResponseBatchResultDetails {
	s.BatchResultDetail = v
	return s
}

type DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail struct {
	Domain         *string `json:"Domain,omitempty" xml:"Domain,omitempty" require:"true"`
	Type           *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Rr             *string `json:"Rr,omitempty" xml:"Rr,omitempty" require:"true"`
	Value          *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	Status         *bool   `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Reason         *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
	NewRr          *string `json:"NewRr,omitempty" xml:"NewRr,omitempty" require:"true"`
	NewValue       *string `json:"NewValue,omitempty" xml:"NewValue,omitempty" require:"true"`
	BatchType      *string `json:"BatchType,omitempty" xml:"BatchType,omitempty" require:"true"`
	OperateDateStr *string `json:"OperateDateStr,omitempty" xml:"OperateDateStr,omitempty" require:"true"`
	Line           *string `json:"Line,omitempty" xml:"Line,omitempty" require:"true"`
	Priority       *string `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	Ttl            *string `json:"Ttl,omitempty" xml:"Ttl,omitempty" require:"true"`
	RecordId       *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
	Remark         *string `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
	RrStatus       *string `json:"RrStatus,omitempty" xml:"RrStatus,omitempty" require:"true"`
}

func (s DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) String() string {
	return tea.Prettify(s)
}

func (s DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) GoString() string {
	return s.String()
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetDomain(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.Domain = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetType(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.Type = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetRr(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.Rr = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetValue(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.Value = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetStatus(v bool) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.Status = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetReason(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.Reason = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetNewRr(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.NewRr = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetNewValue(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.NewValue = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetBatchType(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.BatchType = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetOperateDateStr(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.OperateDateStr = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetLine(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.Line = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetPriority(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.Priority = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetTtl(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.Ttl = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetRecordId(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.RecordId = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetRemark(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.Remark = &v
	return s
}

func (s *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail) SetRrStatus(v string) *DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail {
	s.RrStatus = &v
	return s
}

type DescribeBatchResultCountRequest struct {
	Lang      *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	TaskId    *int64  `json:"TaskId,omitempty" xml:"TaskId,omitempty"`
	BatchType *string `json:"BatchType,omitempty" xml:"BatchType,omitempty"`
}

func (s DescribeBatchResultCountRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeBatchResultCountRequest) GoString() string {
	return s.String()
}

func (s *DescribeBatchResultCountRequest) SetLang(v string) *DescribeBatchResultCountRequest {
	s.Lang = &v
	return s
}

func (s *DescribeBatchResultCountRequest) SetTaskId(v int64) *DescribeBatchResultCountRequest {
	s.TaskId = &v
	return s
}

func (s *DescribeBatchResultCountRequest) SetBatchType(v string) *DescribeBatchResultCountRequest {
	s.BatchType = &v
	return s
}

type DescribeBatchResultCountResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Status       *int    `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	TotalCount   *int    `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	SuccessCount *int    `json:"SuccessCount,omitempty" xml:"SuccessCount,omitempty" require:"true"`
	FailedCount  *int    `json:"FailedCount,omitempty" xml:"FailedCount,omitempty" require:"true"`
	Reason       *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
	BatchType    *string `json:"BatchType,omitempty" xml:"BatchType,omitempty" require:"true"`
	TaskId       *int64  `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
}

func (s DescribeBatchResultCountResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeBatchResultCountResponse) GoString() string {
	return s.String()
}

func (s *DescribeBatchResultCountResponse) SetRequestId(v string) *DescribeBatchResultCountResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeBatchResultCountResponse) SetStatus(v int) *DescribeBatchResultCountResponse {
	s.Status = &v
	return s
}

func (s *DescribeBatchResultCountResponse) SetTotalCount(v int) *DescribeBatchResultCountResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeBatchResultCountResponse) SetSuccessCount(v int) *DescribeBatchResultCountResponse {
	s.SuccessCount = &v
	return s
}

func (s *DescribeBatchResultCountResponse) SetFailedCount(v int) *DescribeBatchResultCountResponse {
	s.FailedCount = &v
	return s
}

func (s *DescribeBatchResultCountResponse) SetReason(v string) *DescribeBatchResultCountResponse {
	s.Reason = &v
	return s
}

func (s *DescribeBatchResultCountResponse) SetBatchType(v string) *DescribeBatchResultCountResponse {
	s.BatchType = &v
	return s
}

func (s *DescribeBatchResultCountResponse) SetTaskId(v int64) *DescribeBatchResultCountResponse {
	s.TaskId = &v
	return s
}

type SetGtmAccessModeRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	StrategyId *string `json:"StrategyId,omitempty" xml:"StrategyId,omitempty" require:"true"`
	AccessMode *string `json:"AccessMode,omitempty" xml:"AccessMode,omitempty" require:"true"`
}

func (s SetGtmAccessModeRequest) String() string {
	return tea.Prettify(s)
}

func (s SetGtmAccessModeRequest) GoString() string {
	return s.String()
}

func (s *SetGtmAccessModeRequest) SetLang(v string) *SetGtmAccessModeRequest {
	s.Lang = &v
	return s
}

func (s *SetGtmAccessModeRequest) SetStrategyId(v string) *SetGtmAccessModeRequest {
	s.StrategyId = &v
	return s
}

func (s *SetGtmAccessModeRequest) SetAccessMode(v string) *SetGtmAccessModeRequest {
	s.AccessMode = &v
	return s
}

type SetGtmAccessModeResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetGtmAccessModeResponse) String() string {
	return tea.Prettify(s)
}

func (s SetGtmAccessModeResponse) GoString() string {
	return s.String()
}

func (s *SetGtmAccessModeResponse) SetRequestId(v string) *SetGtmAccessModeResponse {
	s.RequestId = &v
	return s
}

type SetGtmMonitorStatusRequest struct {
	Lang            *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	MonitorConfigId *string `json:"MonitorConfigId,omitempty" xml:"MonitorConfigId,omitempty" require:"true"`
	Status          *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s SetGtmMonitorStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s SetGtmMonitorStatusRequest) GoString() string {
	return s.String()
}

func (s *SetGtmMonitorStatusRequest) SetLang(v string) *SetGtmMonitorStatusRequest {
	s.Lang = &v
	return s
}

func (s *SetGtmMonitorStatusRequest) SetMonitorConfigId(v string) *SetGtmMonitorStatusRequest {
	s.MonitorConfigId = &v
	return s
}

func (s *SetGtmMonitorStatusRequest) SetStatus(v string) *SetGtmMonitorStatusRequest {
	s.Status = &v
	return s
}

type SetGtmMonitorStatusResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetGtmMonitorStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s SetGtmMonitorStatusResponse) GoString() string {
	return s.String()
}

func (s *SetGtmMonitorStatusResponse) SetRequestId(v string) *SetGtmMonitorStatusResponse {
	s.RequestId = &v
	return s
}

type UpdateGtmInstanceGlobalConfigRequest struct {
	Lang                  *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId            *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	InstanceName          *string `json:"InstanceName,omitempty" xml:"InstanceName,omitempty"`
	Ttl                   *int    `json:"Ttl,omitempty" xml:"Ttl,omitempty"`
	UserDomainName        *string `json:"UserDomainName,omitempty" xml:"UserDomainName,omitempty"`
	LbaStrategy           *string `json:"LbaStrategy,omitempty" xml:"LbaStrategy,omitempty"`
	AlertGroup            *string `json:"AlertGroup,omitempty" xml:"AlertGroup,omitempty"`
	CnameMode             *string `json:"CnameMode,omitempty" xml:"CnameMode,omitempty"`
	CnameCustomDomainName *string `json:"CnameCustomDomainName,omitempty" xml:"CnameCustomDomainName,omitempty"`
}

func (s UpdateGtmInstanceGlobalConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmInstanceGlobalConfigRequest) GoString() string {
	return s.String()
}

func (s *UpdateGtmInstanceGlobalConfigRequest) SetLang(v string) *UpdateGtmInstanceGlobalConfigRequest {
	s.Lang = &v
	return s
}

func (s *UpdateGtmInstanceGlobalConfigRequest) SetInstanceId(v string) *UpdateGtmInstanceGlobalConfigRequest {
	s.InstanceId = &v
	return s
}

func (s *UpdateGtmInstanceGlobalConfigRequest) SetInstanceName(v string) *UpdateGtmInstanceGlobalConfigRequest {
	s.InstanceName = &v
	return s
}

func (s *UpdateGtmInstanceGlobalConfigRequest) SetTtl(v int) *UpdateGtmInstanceGlobalConfigRequest {
	s.Ttl = &v
	return s
}

func (s *UpdateGtmInstanceGlobalConfigRequest) SetUserDomainName(v string) *UpdateGtmInstanceGlobalConfigRequest {
	s.UserDomainName = &v
	return s
}

func (s *UpdateGtmInstanceGlobalConfigRequest) SetLbaStrategy(v string) *UpdateGtmInstanceGlobalConfigRequest {
	s.LbaStrategy = &v
	return s
}

func (s *UpdateGtmInstanceGlobalConfigRequest) SetAlertGroup(v string) *UpdateGtmInstanceGlobalConfigRequest {
	s.AlertGroup = &v
	return s
}

func (s *UpdateGtmInstanceGlobalConfigRequest) SetCnameMode(v string) *UpdateGtmInstanceGlobalConfigRequest {
	s.CnameMode = &v
	return s
}

func (s *UpdateGtmInstanceGlobalConfigRequest) SetCnameCustomDomainName(v string) *UpdateGtmInstanceGlobalConfigRequest {
	s.CnameCustomDomainName = &v
	return s
}

type UpdateGtmInstanceGlobalConfigResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateGtmInstanceGlobalConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmInstanceGlobalConfigResponse) GoString() string {
	return s.String()
}

func (s *UpdateGtmInstanceGlobalConfigResponse) SetRequestId(v string) *UpdateGtmInstanceGlobalConfigResponse {
	s.RequestId = &v
	return s
}

type DescribeGtmLogsRequest struct {
	Lang           *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId     *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
	Keyword        *string `json:"Keyword,omitempty" xml:"Keyword,omitempty"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	StartTimestamp *int64  `json:"StartTimestamp,omitempty" xml:"StartTimestamp,omitempty"`
	EndTimestamp   *int64  `json:"EndTimestamp,omitempty" xml:"EndTimestamp,omitempty"`
}

func (s DescribeGtmLogsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmLogsRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmLogsRequest) SetLang(v string) *DescribeGtmLogsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmLogsRequest) SetInstanceId(v string) *DescribeGtmLogsRequest {
	s.InstanceId = &v
	return s
}

func (s *DescribeGtmLogsRequest) SetKeyword(v string) *DescribeGtmLogsRequest {
	s.Keyword = &v
	return s
}

func (s *DescribeGtmLogsRequest) SetPageNumber(v int) *DescribeGtmLogsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeGtmLogsRequest) SetPageSize(v int) *DescribeGtmLogsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeGtmLogsRequest) SetStartTimestamp(v int64) *DescribeGtmLogsRequest {
	s.StartTimestamp = &v
	return s
}

func (s *DescribeGtmLogsRequest) SetEndTimestamp(v int64) *DescribeGtmLogsRequest {
	s.EndTimestamp = &v
	return s
}

type DescribeGtmLogsResponse struct {
	RequestId  *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems *int                         `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	TotalPages *int                         `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	PageSize   *int                         `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                         `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Logs       *DescribeGtmLogsResponseLogs `json:"Logs,omitempty" xml:"Logs,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmLogsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmLogsResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmLogsResponse) SetRequestId(v string) *DescribeGtmLogsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmLogsResponse) SetTotalItems(v int) *DescribeGtmLogsResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeGtmLogsResponse) SetTotalPages(v int) *DescribeGtmLogsResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeGtmLogsResponse) SetPageSize(v int) *DescribeGtmLogsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeGtmLogsResponse) SetPageNumber(v int) *DescribeGtmLogsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeGtmLogsResponse) SetLogs(v *DescribeGtmLogsResponseLogs) *DescribeGtmLogsResponse {
	s.Logs = v
	return s
}

type DescribeGtmLogsResponseLogs struct {
	Log []*DescribeGtmLogsResponseLogsLog `json:"Log,omitempty" xml:"Log,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmLogsResponseLogs) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmLogsResponseLogs) GoString() string {
	return s.String()
}

func (s *DescribeGtmLogsResponseLogs) SetLog(v []*DescribeGtmLogsResponseLogsLog) *DescribeGtmLogsResponseLogs {
	s.Log = v
	return s
}

type DescribeGtmLogsResponseLogsLog struct {
	OperTime      *string `json:"OperTime,omitempty" xml:"OperTime,omitempty" require:"true"`
	OperAction    *string `json:"OperAction,omitempty" xml:"OperAction,omitempty" require:"true"`
	EntityType    *string `json:"EntityType,omitempty" xml:"EntityType,omitempty" require:"true"`
	EntityId      *string `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	EntityName    *string `json:"EntityName,omitempty" xml:"EntityName,omitempty" require:"true"`
	OperIp        *string `json:"OperIp,omitempty" xml:"OperIp,omitempty" require:"true"`
	OperTimestamp *int64  `json:"OperTimestamp,omitempty" xml:"OperTimestamp,omitempty" require:"true"`
	Id            *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Content       *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
}

func (s DescribeGtmLogsResponseLogsLog) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmLogsResponseLogsLog) GoString() string {
	return s.String()
}

func (s *DescribeGtmLogsResponseLogsLog) SetOperTime(v string) *DescribeGtmLogsResponseLogsLog {
	s.OperTime = &v
	return s
}

func (s *DescribeGtmLogsResponseLogsLog) SetOperAction(v string) *DescribeGtmLogsResponseLogsLog {
	s.OperAction = &v
	return s
}

func (s *DescribeGtmLogsResponseLogsLog) SetEntityType(v string) *DescribeGtmLogsResponseLogsLog {
	s.EntityType = &v
	return s
}

func (s *DescribeGtmLogsResponseLogsLog) SetEntityId(v string) *DescribeGtmLogsResponseLogsLog {
	s.EntityId = &v
	return s
}

func (s *DescribeGtmLogsResponseLogsLog) SetEntityName(v string) *DescribeGtmLogsResponseLogsLog {
	s.EntityName = &v
	return s
}

func (s *DescribeGtmLogsResponseLogsLog) SetOperIp(v string) *DescribeGtmLogsResponseLogsLog {
	s.OperIp = &v
	return s
}

func (s *DescribeGtmLogsResponseLogsLog) SetOperTimestamp(v int64) *DescribeGtmLogsResponseLogsLog {
	s.OperTimestamp = &v
	return s
}

func (s *DescribeGtmLogsResponseLogsLog) SetId(v int64) *DescribeGtmLogsResponseLogsLog {
	s.Id = &v
	return s
}

func (s *DescribeGtmLogsResponseLogsLog) SetContent(v string) *DescribeGtmLogsResponseLogsLog {
	s.Content = &v
	return s
}

type DeleteGtmAccessStrategyRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	StrategyId *string `json:"StrategyId,omitempty" xml:"StrategyId,omitempty"`
}

func (s DeleteGtmAccessStrategyRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteGtmAccessStrategyRequest) GoString() string {
	return s.String()
}

func (s *DeleteGtmAccessStrategyRequest) SetLang(v string) *DeleteGtmAccessStrategyRequest {
	s.Lang = &v
	return s
}

func (s *DeleteGtmAccessStrategyRequest) SetStrategyId(v string) *DeleteGtmAccessStrategyRequest {
	s.StrategyId = &v
	return s
}

type DeleteGtmAccessStrategyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteGtmAccessStrategyResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteGtmAccessStrategyResponse) GoString() string {
	return s.String()
}

func (s *DeleteGtmAccessStrategyResponse) SetRequestId(v string) *DeleteGtmAccessStrategyResponse {
	s.RequestId = &v
	return s
}

type AddGtmMonitorRequest struct {
	Lang              *string                            `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AddrPoolId        *string                            `json:"AddrPoolId,omitempty" xml:"AddrPoolId,omitempty" require:"true"`
	ProtocolType      *string                            `json:"ProtocolType,omitempty" xml:"ProtocolType,omitempty" require:"true"`
	Interval          *int                               `json:"Interval,omitempty" xml:"Interval,omitempty" require:"true"`
	EvaluationCount   *int                               `json:"EvaluationCount,omitempty" xml:"EvaluationCount,omitempty" require:"true"`
	Timeout           *int                               `json:"Timeout,omitempty" xml:"Timeout,omitempty" require:"true"`
	MonitorExtendInfo *string                            `json:"MonitorExtendInfo,omitempty" xml:"MonitorExtendInfo,omitempty" require:"true"`
	IspCityNode       []*AddGtmMonitorRequestIspCityNode `json:"IspCityNode,omitempty" xml:"IspCityNode,omitempty" require:"true" type:"Repeated"`
}

func (s AddGtmMonitorRequest) String() string {
	return tea.Prettify(s)
}

func (s AddGtmMonitorRequest) GoString() string {
	return s.String()
}

func (s *AddGtmMonitorRequest) SetLang(v string) *AddGtmMonitorRequest {
	s.Lang = &v
	return s
}

func (s *AddGtmMonitorRequest) SetAddrPoolId(v string) *AddGtmMonitorRequest {
	s.AddrPoolId = &v
	return s
}

func (s *AddGtmMonitorRequest) SetProtocolType(v string) *AddGtmMonitorRequest {
	s.ProtocolType = &v
	return s
}

func (s *AddGtmMonitorRequest) SetInterval(v int) *AddGtmMonitorRequest {
	s.Interval = &v
	return s
}

func (s *AddGtmMonitorRequest) SetEvaluationCount(v int) *AddGtmMonitorRequest {
	s.EvaluationCount = &v
	return s
}

func (s *AddGtmMonitorRequest) SetTimeout(v int) *AddGtmMonitorRequest {
	s.Timeout = &v
	return s
}

func (s *AddGtmMonitorRequest) SetMonitorExtendInfo(v string) *AddGtmMonitorRequest {
	s.MonitorExtendInfo = &v
	return s
}

func (s *AddGtmMonitorRequest) SetIspCityNode(v []*AddGtmMonitorRequestIspCityNode) *AddGtmMonitorRequest {
	s.IspCityNode = v
	return s
}

type AddGtmMonitorRequestIspCityNode struct {
	CityCode *string `json:"CityCode,omitempty" xml:"CityCode,omitempty" require:"true"`
	IspCode  *string `json:"IspCode,omitempty" xml:"IspCode,omitempty" require:"true"`
}

func (s AddGtmMonitorRequestIspCityNode) String() string {
	return tea.Prettify(s)
}

func (s AddGtmMonitorRequestIspCityNode) GoString() string {
	return s.String()
}

func (s *AddGtmMonitorRequestIspCityNode) SetCityCode(v string) *AddGtmMonitorRequestIspCityNode {
	s.CityCode = &v
	return s
}

func (s *AddGtmMonitorRequestIspCityNode) SetIspCode(v string) *AddGtmMonitorRequestIspCityNode {
	s.IspCode = &v
	return s
}

type AddGtmMonitorResponse struct {
	RequestId       *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MonitorConfigId *string `json:"MonitorConfigId,omitempty" xml:"MonitorConfigId,omitempty" require:"true"`
}

func (s AddGtmMonitorResponse) String() string {
	return tea.Prettify(s)
}

func (s AddGtmMonitorResponse) GoString() string {
	return s.String()
}

func (s *AddGtmMonitorResponse) SetRequestId(v string) *AddGtmMonitorResponse {
	s.RequestId = &v
	return s
}

func (s *AddGtmMonitorResponse) SetMonitorConfigId(v string) *AddGtmMonitorResponse {
	s.MonitorConfigId = &v
	return s
}

type AddGtmAddressPoolRequest struct {
	Lang                *string                                `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId          *string                                `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Name                *string                                `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Type                *string                                `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	MinAvailableAddrNum *int                                   `json:"MinAvailableAddrNum,omitempty" xml:"MinAvailableAddrNum,omitempty" require:"true"`
	Addr                []*AddGtmAddressPoolRequestAddr        `json:"Addr,omitempty" xml:"Addr,omitempty" require:"true" type:"Repeated"`
	MonitorStatus       *string                                `json:"MonitorStatus,omitempty" xml:"MonitorStatus,omitempty"`
	ProtocolType        *string                                `json:"ProtocolType,omitempty" xml:"ProtocolType,omitempty"`
	Interval            *int                                   `json:"Interval,omitempty" xml:"Interval,omitempty"`
	EvaluationCount     *int                                   `json:"EvaluationCount,omitempty" xml:"EvaluationCount,omitempty"`
	Timeout             *int                                   `json:"Timeout,omitempty" xml:"Timeout,omitempty"`
	MonitorExtendInfo   *string                                `json:"MonitorExtendInfo,omitempty" xml:"MonitorExtendInfo,omitempty"`
	IspCityNode         []*AddGtmAddressPoolRequestIspCityNode `json:"IspCityNode,omitempty" xml:"IspCityNode,omitempty" type:"Repeated"`
}

func (s AddGtmAddressPoolRequest) String() string {
	return tea.Prettify(s)
}

func (s AddGtmAddressPoolRequest) GoString() string {
	return s.String()
}

func (s *AddGtmAddressPoolRequest) SetLang(v string) *AddGtmAddressPoolRequest {
	s.Lang = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetInstanceId(v string) *AddGtmAddressPoolRequest {
	s.InstanceId = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetName(v string) *AddGtmAddressPoolRequest {
	s.Name = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetType(v string) *AddGtmAddressPoolRequest {
	s.Type = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetMinAvailableAddrNum(v int) *AddGtmAddressPoolRequest {
	s.MinAvailableAddrNum = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetAddr(v []*AddGtmAddressPoolRequestAddr) *AddGtmAddressPoolRequest {
	s.Addr = v
	return s
}

func (s *AddGtmAddressPoolRequest) SetMonitorStatus(v string) *AddGtmAddressPoolRequest {
	s.MonitorStatus = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetProtocolType(v string) *AddGtmAddressPoolRequest {
	s.ProtocolType = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetInterval(v int) *AddGtmAddressPoolRequest {
	s.Interval = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetEvaluationCount(v int) *AddGtmAddressPoolRequest {
	s.EvaluationCount = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetTimeout(v int) *AddGtmAddressPoolRequest {
	s.Timeout = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetMonitorExtendInfo(v string) *AddGtmAddressPoolRequest {
	s.MonitorExtendInfo = &v
	return s
}

func (s *AddGtmAddressPoolRequest) SetIspCityNode(v []*AddGtmAddressPoolRequestIspCityNode) *AddGtmAddressPoolRequest {
	s.IspCityNode = v
	return s
}

type AddGtmAddressPoolRequestAddr struct {
	Value     *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	LbaWeight *int    `json:"LbaWeight,omitempty" xml:"LbaWeight,omitempty" require:"true"`
	Mode      *string `json:"Mode,omitempty" xml:"Mode,omitempty" require:"true"`
}

func (s AddGtmAddressPoolRequestAddr) String() string {
	return tea.Prettify(s)
}

func (s AddGtmAddressPoolRequestAddr) GoString() string {
	return s.String()
}

func (s *AddGtmAddressPoolRequestAddr) SetValue(v string) *AddGtmAddressPoolRequestAddr {
	s.Value = &v
	return s
}

func (s *AddGtmAddressPoolRequestAddr) SetLbaWeight(v int) *AddGtmAddressPoolRequestAddr {
	s.LbaWeight = &v
	return s
}

func (s *AddGtmAddressPoolRequestAddr) SetMode(v string) *AddGtmAddressPoolRequestAddr {
	s.Mode = &v
	return s
}

type AddGtmAddressPoolRequestIspCityNode struct {
	CityCode *string `json:"CityCode,omitempty" xml:"CityCode,omitempty"`
	IspCode  *string `json:"IspCode,omitempty" xml:"IspCode,omitempty"`
}

func (s AddGtmAddressPoolRequestIspCityNode) String() string {
	return tea.Prettify(s)
}

func (s AddGtmAddressPoolRequestIspCityNode) GoString() string {
	return s.String()
}

func (s *AddGtmAddressPoolRequestIspCityNode) SetCityCode(v string) *AddGtmAddressPoolRequestIspCityNode {
	s.CityCode = &v
	return s
}

func (s *AddGtmAddressPoolRequestIspCityNode) SetIspCode(v string) *AddGtmAddressPoolRequestIspCityNode {
	s.IspCode = &v
	return s
}

type AddGtmAddressPoolResponse struct {
	RequestId       *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AddrPoolId      *string `json:"AddrPoolId,omitempty" xml:"AddrPoolId,omitempty" require:"true"`
	MonitorConfigId *string `json:"MonitorConfigId,omitempty" xml:"MonitorConfigId,omitempty" require:"true"`
}

func (s AddGtmAddressPoolResponse) String() string {
	return tea.Prettify(s)
}

func (s AddGtmAddressPoolResponse) GoString() string {
	return s.String()
}

func (s *AddGtmAddressPoolResponse) SetRequestId(v string) *AddGtmAddressPoolResponse {
	s.RequestId = &v
	return s
}

func (s *AddGtmAddressPoolResponse) SetAddrPoolId(v string) *AddGtmAddressPoolResponse {
	s.AddrPoolId = &v
	return s
}

func (s *AddGtmAddressPoolResponse) SetMonitorConfigId(v string) *AddGtmAddressPoolResponse {
	s.MonitorConfigId = &v
	return s
}

type AddGtmAccessStrategyRequest struct {
	Lang               *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId         *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	StrategyName       *string `json:"StrategyName,omitempty" xml:"StrategyName,omitempty" require:"true"`
	DefaultAddrPoolId  *string `json:"DefaultAddrPoolId,omitempty" xml:"DefaultAddrPoolId,omitempty" require:"true"`
	FailoverAddrPoolId *string `json:"FailoverAddrPoolId,omitempty" xml:"FailoverAddrPoolId,omitempty" require:"true"`
	AccessLines        *string `json:"AccessLines,omitempty" xml:"AccessLines,omitempty" require:"true"`
}

func (s AddGtmAccessStrategyRequest) String() string {
	return tea.Prettify(s)
}

func (s AddGtmAccessStrategyRequest) GoString() string {
	return s.String()
}

func (s *AddGtmAccessStrategyRequest) SetLang(v string) *AddGtmAccessStrategyRequest {
	s.Lang = &v
	return s
}

func (s *AddGtmAccessStrategyRequest) SetInstanceId(v string) *AddGtmAccessStrategyRequest {
	s.InstanceId = &v
	return s
}

func (s *AddGtmAccessStrategyRequest) SetStrategyName(v string) *AddGtmAccessStrategyRequest {
	s.StrategyName = &v
	return s
}

func (s *AddGtmAccessStrategyRequest) SetDefaultAddrPoolId(v string) *AddGtmAccessStrategyRequest {
	s.DefaultAddrPoolId = &v
	return s
}

func (s *AddGtmAccessStrategyRequest) SetFailoverAddrPoolId(v string) *AddGtmAccessStrategyRequest {
	s.FailoverAddrPoolId = &v
	return s
}

func (s *AddGtmAccessStrategyRequest) SetAccessLines(v string) *AddGtmAccessStrategyRequest {
	s.AccessLines = &v
	return s
}

type AddGtmAccessStrategyResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StrategyId *string `json:"StrategyId,omitempty" xml:"StrategyId,omitempty" require:"true"`
}

func (s AddGtmAccessStrategyResponse) String() string {
	return tea.Prettify(s)
}

func (s AddGtmAccessStrategyResponse) GoString() string {
	return s.String()
}

func (s *AddGtmAccessStrategyResponse) SetRequestId(v string) *AddGtmAccessStrategyResponse {
	s.RequestId = &v
	return s
}

func (s *AddGtmAccessStrategyResponse) SetStrategyId(v string) *AddGtmAccessStrategyResponse {
	s.StrategyId = &v
	return s
}

type DescribeGtmInstancesRequest struct {
	Lang                 *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	PageNumber           *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize             *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	Keyword              *string `json:"Keyword,omitempty" xml:"Keyword,omitempty"`
	ResourceGroupId      *string `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty"`
	NeedDetailAttributes *bool   `json:"NeedDetailAttributes,omitempty" xml:"NeedDetailAttributes,omitempty"`
}

func (s DescribeGtmInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstancesRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstancesRequest) SetLang(v string) *DescribeGtmInstancesRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmInstancesRequest) SetPageNumber(v int) *DescribeGtmInstancesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeGtmInstancesRequest) SetPageSize(v int) *DescribeGtmInstancesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeGtmInstancesRequest) SetKeyword(v string) *DescribeGtmInstancesRequest {
	s.Keyword = &v
	return s
}

func (s *DescribeGtmInstancesRequest) SetResourceGroupId(v string) *DescribeGtmInstancesRequest {
	s.ResourceGroupId = &v
	return s
}

func (s *DescribeGtmInstancesRequest) SetNeedDetailAttributes(v bool) *DescribeGtmInstancesRequest {
	s.NeedDetailAttributes = &v
	return s
}

type DescribeGtmInstancesResponse struct {
	RequestId    *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageNumber   *int                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize     *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalItems   *int                                      `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	TotalPages   *int                                      `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	GtmInstances *DescribeGtmInstancesResponseGtmInstances `json:"GtmInstances,omitempty" xml:"GtmInstances,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstancesResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstancesResponse) SetRequestId(v string) *DescribeGtmInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmInstancesResponse) SetPageNumber(v int) *DescribeGtmInstancesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeGtmInstancesResponse) SetPageSize(v int) *DescribeGtmInstancesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeGtmInstancesResponse) SetTotalItems(v int) *DescribeGtmInstancesResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeGtmInstancesResponse) SetTotalPages(v int) *DescribeGtmInstancesResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeGtmInstancesResponse) SetGtmInstances(v *DescribeGtmInstancesResponseGtmInstances) *DescribeGtmInstancesResponse {
	s.GtmInstances = v
	return s
}

type DescribeGtmInstancesResponseGtmInstances struct {
	GtmInstance []*DescribeGtmInstancesResponseGtmInstancesGtmInstance `json:"GtmInstance,omitempty" xml:"GtmInstance,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmInstancesResponseGtmInstances) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstancesResponseGtmInstances) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstancesResponseGtmInstances) SetGtmInstance(v []*DescribeGtmInstancesResponseGtmInstancesGtmInstance) *DescribeGtmInstancesResponseGtmInstances {
	s.GtmInstance = v
	return s
}

type DescribeGtmInstancesResponseGtmInstancesGtmInstance struct {
	InstanceId        *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	InstanceName      *string `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
	Cname             *string `json:"Cname,omitempty" xml:"Cname,omitempty" require:"true"`
	UserDomainName    *string `json:"UserDomainName,omitempty" xml:"UserDomainName,omitempty" require:"true"`
	VersionCode       *string `json:"VersionCode,omitempty" xml:"VersionCode,omitempty" require:"true"`
	Ttl               *int    `json:"Ttl,omitempty" xml:"Ttl,omitempty" require:"true"`
	LbaStrategy       *string `json:"LbaStrategy,omitempty" xml:"LbaStrategy,omitempty" require:"true"`
	CreateTime        *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp   *int64  `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	ExpireTime        *string `json:"ExpireTime,omitempty" xml:"ExpireTime,omitempty" require:"true"`
	ExpireTimestamp   *int64  `json:"ExpireTimestamp,omitempty" xml:"ExpireTimestamp,omitempty" require:"true"`
	AlertGroup        *string `json:"AlertGroup,omitempty" xml:"AlertGroup,omitempty" require:"true"`
	CnameMode         *string `json:"CnameMode,omitempty" xml:"CnameMode,omitempty" require:"true"`
	AccessStrategyNum *int    `json:"AccessStrategyNum,omitempty" xml:"AccessStrategyNum,omitempty" require:"true"`
	AddressPoolNum    *int    `json:"AddressPoolNum,omitempty" xml:"AddressPoolNum,omitempty" require:"true"`
}

func (s DescribeGtmInstancesResponseGtmInstancesGtmInstance) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstancesResponseGtmInstancesGtmInstance) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetInstanceId(v string) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.InstanceId = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetInstanceName(v string) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.InstanceName = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetCname(v string) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.Cname = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetUserDomainName(v string) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.UserDomainName = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetVersionCode(v string) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.VersionCode = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetTtl(v int) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.Ttl = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetLbaStrategy(v string) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.LbaStrategy = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetCreateTime(v string) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.CreateTime = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetCreateTimestamp(v int64) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetExpireTime(v string) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.ExpireTime = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetExpireTimestamp(v int64) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.ExpireTimestamp = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetAlertGroup(v string) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.AlertGroup = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetCnameMode(v string) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.CnameMode = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetAccessStrategyNum(v int) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.AccessStrategyNum = &v
	return s
}

func (s *DescribeGtmInstancesResponseGtmInstancesGtmInstance) SetAddressPoolNum(v int) *DescribeGtmInstancesResponseGtmInstancesGtmInstance {
	s.AddressPoolNum = &v
	return s
}

type DeleteGtmAddressPoolRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AddrPoolId *string `json:"AddrPoolId,omitempty" xml:"AddrPoolId,omitempty" require:"true"`
}

func (s DeleteGtmAddressPoolRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteGtmAddressPoolRequest) GoString() string {
	return s.String()
}

func (s *DeleteGtmAddressPoolRequest) SetLang(v string) *DeleteGtmAddressPoolRequest {
	s.Lang = &v
	return s
}

func (s *DeleteGtmAddressPoolRequest) SetAddrPoolId(v string) *DeleteGtmAddressPoolRequest {
	s.AddrPoolId = &v
	return s
}

type DeleteGtmAddressPoolResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteGtmAddressPoolResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteGtmAddressPoolResponse) GoString() string {
	return s.String()
}

func (s *DeleteGtmAddressPoolResponse) SetRequestId(v string) *DeleteGtmAddressPoolResponse {
	s.RequestId = &v
	return s
}

type DescribeGtmAccessStrategiesRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeGtmAccessStrategiesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategiesRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategiesRequest) SetLang(v string) *DescribeGtmAccessStrategiesRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmAccessStrategiesRequest) SetInstanceId(v string) *DescribeGtmAccessStrategiesRequest {
	s.InstanceId = &v
	return s
}

func (s *DescribeGtmAccessStrategiesRequest) SetPageNumber(v int) *DescribeGtmAccessStrategiesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeGtmAccessStrategiesRequest) SetPageSize(v int) *DescribeGtmAccessStrategiesRequest {
	s.PageSize = &v
	return s
}

type DescribeGtmAccessStrategiesResponse struct {
	RequestId  *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems *int                                           `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	TotalPages *int                                           `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	PageNumber *int                                           `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                           `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Strategies *DescribeGtmAccessStrategiesResponseStrategies `json:"Strategies,omitempty" xml:"Strategies,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmAccessStrategiesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategiesResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategiesResponse) SetRequestId(v string) *DescribeGtmAccessStrategiesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponse) SetTotalItems(v int) *DescribeGtmAccessStrategiesResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponse) SetTotalPages(v int) *DescribeGtmAccessStrategiesResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponse) SetPageNumber(v int) *DescribeGtmAccessStrategiesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponse) SetPageSize(v int) *DescribeGtmAccessStrategiesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponse) SetStrategies(v *DescribeGtmAccessStrategiesResponseStrategies) *DescribeGtmAccessStrategiesResponse {
	s.Strategies = v
	return s
}

type DescribeGtmAccessStrategiesResponseStrategies struct {
	Strategy []*DescribeGtmAccessStrategiesResponseStrategiesStrategy `json:"Strategy,omitempty" xml:"Strategy,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmAccessStrategiesResponseStrategies) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategiesResponseStrategies) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategiesResponseStrategies) SetStrategy(v []*DescribeGtmAccessStrategiesResponseStrategiesStrategy) *DescribeGtmAccessStrategiesResponseStrategies {
	s.Strategy = v
	return s
}

type DescribeGtmAccessStrategiesResponseStrategiesStrategy struct {
	StrategyId                    *string                                                     `json:"StrategyId,omitempty" xml:"StrategyId,omitempty" require:"true"`
	StrategyName                  *string                                                     `json:"StrategyName,omitempty" xml:"StrategyName,omitempty" require:"true"`
	CreateTime                    *string                                                     `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp               *int64                                                      `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	DefaultAddrPoolId             *string                                                     `json:"DefaultAddrPoolId,omitempty" xml:"DefaultAddrPoolId,omitempty" require:"true"`
	DefaultAddrPoolName           *string                                                     `json:"DefaultAddrPoolName,omitempty" xml:"DefaultAddrPoolName,omitempty" require:"true"`
	FailoverAddrPoolId            *string                                                     `json:"FailoverAddrPoolId,omitempty" xml:"FailoverAddrPoolId,omitempty" require:"true"`
	FailoverAddrPoolName          *string                                                     `json:"FailoverAddrPoolName,omitempty" xml:"FailoverAddrPoolName,omitempty" require:"true"`
	AccessMode                    *string                                                     `json:"AccessMode,omitempty" xml:"AccessMode,omitempty" require:"true"`
	AccessStatus                  *string                                                     `json:"AccessStatus,omitempty" xml:"AccessStatus,omitempty" require:"true"`
	StrategyMode                  *string                                                     `json:"StrategyMode,omitempty" xml:"StrategyMode,omitempty" require:"true"`
	InstanceId                    *string                                                     `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	DefaultAddrPoolStatus         *string                                                     `json:"DefaultAddrPoolStatus,omitempty" xml:"DefaultAddrPoolStatus,omitempty" require:"true"`
	FailoverAddrPoolStatus        *string                                                     `json:"FailoverAddrPoolStatus,omitempty" xml:"FailoverAddrPoolStatus,omitempty" require:"true"`
	DefaultAddrPoolMonitorStatus  *string                                                     `json:"DefaultAddrPoolMonitorStatus,omitempty" xml:"DefaultAddrPoolMonitorStatus,omitempty" require:"true"`
	FailoverAddrPoolMonitorStatus *string                                                     `json:"FailoverAddrPoolMonitorStatus,omitempty" xml:"FailoverAddrPoolMonitorStatus,omitempty" require:"true"`
	Lines                         *DescribeGtmAccessStrategiesResponseStrategiesStrategyLines `json:"Lines,omitempty" xml:"Lines,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmAccessStrategiesResponseStrategiesStrategy) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategiesResponseStrategiesStrategy) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetStrategyId(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.StrategyId = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetStrategyName(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.StrategyName = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetCreateTime(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.CreateTime = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetCreateTimestamp(v int64) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetDefaultAddrPoolId(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.DefaultAddrPoolId = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetDefaultAddrPoolName(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.DefaultAddrPoolName = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetFailoverAddrPoolId(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.FailoverAddrPoolId = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetFailoverAddrPoolName(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.FailoverAddrPoolName = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetAccessMode(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.AccessMode = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetAccessStatus(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.AccessStatus = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetStrategyMode(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.StrategyMode = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetInstanceId(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.InstanceId = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetDefaultAddrPoolStatus(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.DefaultAddrPoolStatus = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetFailoverAddrPoolStatus(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.FailoverAddrPoolStatus = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetDefaultAddrPoolMonitorStatus(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.DefaultAddrPoolMonitorStatus = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetFailoverAddrPoolMonitorStatus(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.FailoverAddrPoolMonitorStatus = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategy) SetLines(v *DescribeGtmAccessStrategiesResponseStrategiesStrategyLines) *DescribeGtmAccessStrategiesResponseStrategiesStrategy {
	s.Lines = v
	return s
}

type DescribeGtmAccessStrategiesResponseStrategiesStrategyLines struct {
	Line []*DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine `json:"Line,omitempty" xml:"Line,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmAccessStrategiesResponseStrategiesStrategyLines) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategiesResponseStrategiesStrategyLines) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategyLines) SetLine(v []*DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine) *DescribeGtmAccessStrategiesResponseStrategiesStrategyLines {
	s.Line = v
	return s
}

type DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine struct {
	LineCode  *string `json:"LineCode,omitempty" xml:"LineCode,omitempty" require:"true"`
	LineName  *string `json:"LineName,omitempty" xml:"LineName,omitempty" require:"true"`
	GroupCode *string `json:"GroupCode,omitempty" xml:"GroupCode,omitempty" require:"true"`
	GroupName *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
}

func (s DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine) SetLineCode(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine {
	s.LineCode = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine) SetLineName(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine {
	s.LineName = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine) SetGroupCode(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine {
	s.GroupCode = &v
	return s
}

func (s *DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine) SetGroupName(v string) *DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine {
	s.GroupName = &v
	return s
}

type DescribeGtmAccessStrategyRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	StrategyId *string `json:"StrategyId,omitempty" xml:"StrategyId,omitempty" require:"true"`
}

func (s DescribeGtmAccessStrategyRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategyRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategyRequest) SetLang(v string) *DescribeGtmAccessStrategyRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmAccessStrategyRequest) SetStrategyId(v string) *DescribeGtmAccessStrategyRequest {
	s.StrategyId = &v
	return s
}

type DescribeGtmAccessStrategyResponse struct {
	RequestId                     *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StrategyId                    *string                                 `json:"StrategyId,omitempty" xml:"StrategyId,omitempty" require:"true"`
	StrategyName                  *string                                 `json:"StrategyName,omitempty" xml:"StrategyName,omitempty" require:"true"`
	DefultAddrPoolId              *string                                 `json:"DefultAddrPoolId,omitempty" xml:"DefultAddrPoolId,omitempty" require:"true"`
	DefaultAddrPoolName           *string                                 `json:"DefaultAddrPoolName,omitempty" xml:"DefaultAddrPoolName,omitempty" require:"true"`
	FailoverAddrPoolId            *string                                 `json:"FailoverAddrPoolId,omitempty" xml:"FailoverAddrPoolId,omitempty" require:"true"`
	FailoverAddrPoolName          *string                                 `json:"FailoverAddrPoolName,omitempty" xml:"FailoverAddrPoolName,omitempty" require:"true"`
	StrategyMode                  *string                                 `json:"StrategyMode,omitempty" xml:"StrategyMode,omitempty" require:"true"`
	AccessMode                    *string                                 `json:"AccessMode,omitempty" xml:"AccessMode,omitempty" require:"true"`
	AccessStatus                  *string                                 `json:"AccessStatus,omitempty" xml:"AccessStatus,omitempty" require:"true"`
	InstanceId                    *string                                 `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	DefaultAddrPoolStatus         *string                                 `json:"DefaultAddrPoolStatus,omitempty" xml:"DefaultAddrPoolStatus,omitempty" require:"true"`
	FailoverAddrPoolStatus        *string                                 `json:"FailoverAddrPoolStatus,omitempty" xml:"FailoverAddrPoolStatus,omitempty" require:"true"`
	DefaultAddrPoolMonitorStatus  *string                                 `json:"DefaultAddrPoolMonitorStatus,omitempty" xml:"DefaultAddrPoolMonitorStatus,omitempty" require:"true"`
	FailoverAddrPoolMonitorStatus *string                                 `json:"FailoverAddrPoolMonitorStatus,omitempty" xml:"FailoverAddrPoolMonitorStatus,omitempty" require:"true"`
	Lines                         *DescribeGtmAccessStrategyResponseLines `json:"Lines,omitempty" xml:"Lines,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmAccessStrategyResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategyResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategyResponse) SetRequestId(v string) *DescribeGtmAccessStrategyResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetStrategyId(v string) *DescribeGtmAccessStrategyResponse {
	s.StrategyId = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetStrategyName(v string) *DescribeGtmAccessStrategyResponse {
	s.StrategyName = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetDefultAddrPoolId(v string) *DescribeGtmAccessStrategyResponse {
	s.DefultAddrPoolId = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetDefaultAddrPoolName(v string) *DescribeGtmAccessStrategyResponse {
	s.DefaultAddrPoolName = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetFailoverAddrPoolId(v string) *DescribeGtmAccessStrategyResponse {
	s.FailoverAddrPoolId = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetFailoverAddrPoolName(v string) *DescribeGtmAccessStrategyResponse {
	s.FailoverAddrPoolName = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetStrategyMode(v string) *DescribeGtmAccessStrategyResponse {
	s.StrategyMode = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetAccessMode(v string) *DescribeGtmAccessStrategyResponse {
	s.AccessMode = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetAccessStatus(v string) *DescribeGtmAccessStrategyResponse {
	s.AccessStatus = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetInstanceId(v string) *DescribeGtmAccessStrategyResponse {
	s.InstanceId = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetDefaultAddrPoolStatus(v string) *DescribeGtmAccessStrategyResponse {
	s.DefaultAddrPoolStatus = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetFailoverAddrPoolStatus(v string) *DescribeGtmAccessStrategyResponse {
	s.FailoverAddrPoolStatus = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetDefaultAddrPoolMonitorStatus(v string) *DescribeGtmAccessStrategyResponse {
	s.DefaultAddrPoolMonitorStatus = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetFailoverAddrPoolMonitorStatus(v string) *DescribeGtmAccessStrategyResponse {
	s.FailoverAddrPoolMonitorStatus = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponse) SetLines(v *DescribeGtmAccessStrategyResponseLines) *DescribeGtmAccessStrategyResponse {
	s.Lines = v
	return s
}

type DescribeGtmAccessStrategyResponseLines struct {
	Line []*DescribeGtmAccessStrategyResponseLinesLine `json:"Line,omitempty" xml:"Line,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmAccessStrategyResponseLines) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategyResponseLines) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategyResponseLines) SetLine(v []*DescribeGtmAccessStrategyResponseLinesLine) *DescribeGtmAccessStrategyResponseLines {
	s.Line = v
	return s
}

type DescribeGtmAccessStrategyResponseLinesLine struct {
	LineCode  *string `json:"LineCode,omitempty" xml:"LineCode,omitempty" require:"true"`
	LineName  *string `json:"LineName,omitempty" xml:"LineName,omitempty" require:"true"`
	GroupCode *string `json:"GroupCode,omitempty" xml:"GroupCode,omitempty" require:"true"`
	GroupName *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
}

func (s DescribeGtmAccessStrategyResponseLinesLine) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategyResponseLinesLine) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategyResponseLinesLine) SetLineCode(v string) *DescribeGtmAccessStrategyResponseLinesLine {
	s.LineCode = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponseLinesLine) SetLineName(v string) *DescribeGtmAccessStrategyResponseLinesLine {
	s.LineName = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponseLinesLine) SetGroupCode(v string) *DescribeGtmAccessStrategyResponseLinesLine {
	s.GroupCode = &v
	return s
}

func (s *DescribeGtmAccessStrategyResponseLinesLine) SetGroupName(v string) *DescribeGtmAccessStrategyResponseLinesLine {
	s.GroupName = &v
	return s
}

type DescribeGtmAccessStrategyAvailableConfigRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s DescribeGtmAccessStrategyAvailableConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategyAvailableConfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategyAvailableConfigRequest) SetLang(v string) *DescribeGtmAccessStrategyAvailableConfigRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmAccessStrategyAvailableConfigRequest) SetInstanceId(v string) *DescribeGtmAccessStrategyAvailableConfigRequest {
	s.InstanceId = &v
	return s
}

type DescribeGtmAccessStrategyAvailableConfigResponse struct {
	RequestId *string                                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AddrPools *DescribeGtmAccessStrategyAvailableConfigResponseAddrPools `json:"AddrPools,omitempty" xml:"AddrPools,omitempty" require:"true" type:"Struct"`
	Lines     *DescribeGtmAccessStrategyAvailableConfigResponseLines     `json:"Lines,omitempty" xml:"Lines,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmAccessStrategyAvailableConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategyAvailableConfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponse) SetRequestId(v string) *DescribeGtmAccessStrategyAvailableConfigResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponse) SetAddrPools(v *DescribeGtmAccessStrategyAvailableConfigResponseAddrPools) *DescribeGtmAccessStrategyAvailableConfigResponse {
	s.AddrPools = v
	return s
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponse) SetLines(v *DescribeGtmAccessStrategyAvailableConfigResponseLines) *DescribeGtmAccessStrategyAvailableConfigResponse {
	s.Lines = v
	return s
}

type DescribeGtmAccessStrategyAvailableConfigResponseAddrPools struct {
	AddrPool []*DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool `json:"AddrPool,omitempty" xml:"AddrPool,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmAccessStrategyAvailableConfigResponseAddrPools) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategyAvailableConfigResponseAddrPools) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponseAddrPools) SetAddrPool(v []*DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool) *DescribeGtmAccessStrategyAvailableConfigResponseAddrPools {
	s.AddrPool = v
	return s
}

type DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool struct {
	AddrPoolId   *string `json:"AddrPoolId,omitempty" xml:"AddrPoolId,omitempty" require:"true"`
	AddrPoolName *string `json:"AddrPoolName,omitempty" xml:"AddrPoolName,omitempty" require:"true"`
}

func (s DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool) SetAddrPoolId(v string) *DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool {
	s.AddrPoolId = &v
	return s
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool) SetAddrPoolName(v string) *DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool {
	s.AddrPoolName = &v
	return s
}

type DescribeGtmAccessStrategyAvailableConfigResponseLines struct {
	Line []*DescribeGtmAccessStrategyAvailableConfigResponseLinesLine `json:"Line,omitempty" xml:"Line,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmAccessStrategyAvailableConfigResponseLines) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategyAvailableConfigResponseLines) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponseLines) SetLine(v []*DescribeGtmAccessStrategyAvailableConfigResponseLinesLine) *DescribeGtmAccessStrategyAvailableConfigResponseLines {
	s.Line = v
	return s
}

type DescribeGtmAccessStrategyAvailableConfigResponseLinesLine struct {
	LineCode   *string `json:"LineCode,omitempty" xml:"LineCode,omitempty" require:"true"`
	LineName   *string `json:"LineName,omitempty" xml:"LineName,omitempty" require:"true"`
	GroupCode  *string `json:"GroupCode,omitempty" xml:"GroupCode,omitempty" require:"true"`
	GroupName  *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	FatherCode *string `json:"FatherCode,omitempty" xml:"FatherCode,omitempty" require:"true"`
}

func (s DescribeGtmAccessStrategyAvailableConfigResponseLinesLine) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAccessStrategyAvailableConfigResponseLinesLine) GoString() string {
	return s.String()
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine) SetLineCode(v string) *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine {
	s.LineCode = &v
	return s
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine) SetLineName(v string) *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine {
	s.LineName = &v
	return s
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine) SetGroupCode(v string) *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine {
	s.GroupCode = &v
	return s
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine) SetGroupName(v string) *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine {
	s.GroupName = &v
	return s
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine) SetStatus(v string) *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine {
	s.Status = &v
	return s
}

func (s *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine) SetFatherCode(v string) *DescribeGtmAccessStrategyAvailableConfigResponseLinesLine {
	s.FatherCode = &v
	return s
}

type DescribeGtmAvailableAlertGroupRequest struct {
	Lang *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
}

func (s DescribeGtmAvailableAlertGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAvailableAlertGroupRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmAvailableAlertGroupRequest) SetLang(v string) *DescribeGtmAvailableAlertGroupRequest {
	s.Lang = &v
	return s
}

type DescribeGtmAvailableAlertGroupResponse struct {
	RequestId           *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AvailableAlertGroup *string `json:"AvailableAlertGroup,omitempty" xml:"AvailableAlertGroup,omitempty" require:"true"`
}

func (s DescribeGtmAvailableAlertGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmAvailableAlertGroupResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmAvailableAlertGroupResponse) SetRequestId(v string) *DescribeGtmAvailableAlertGroupResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmAvailableAlertGroupResponse) SetAvailableAlertGroup(v string) *DescribeGtmAvailableAlertGroupResponse {
	s.AvailableAlertGroup = &v
	return s
}

type DescribeGtmInstanceRequest struct {
	Lang                 *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId           *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	NeedDetailAttributes *bool   `json:"NeedDetailAttributes,omitempty" xml:"NeedDetailAttributes,omitempty"`
}

func (s DescribeGtmInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceRequest) SetLang(v string) *DescribeGtmInstanceRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmInstanceRequest) SetInstanceId(v string) *DescribeGtmInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *DescribeGtmInstanceRequest) SetNeedDetailAttributes(v bool) *DescribeGtmInstanceRequest {
	s.NeedDetailAttributes = &v
	return s
}

type DescribeGtmInstanceResponse struct {
	RequestId         *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	InstanceId        *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	InstanceName      *string `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
	VersionCode       *string `json:"VersionCode,omitempty" xml:"VersionCode,omitempty" require:"true"`
	ExpireTime        *string `json:"ExpireTime,omitempty" xml:"ExpireTime,omitempty" require:"true"`
	ExpireTimestamp   *int64  `json:"ExpireTimestamp,omitempty" xml:"ExpireTimestamp,omitempty" require:"true"`
	Cname             *string `json:"Cname,omitempty" xml:"Cname,omitempty" require:"true"`
	UserDomainName    *string `json:"UserDomainName,omitempty" xml:"UserDomainName,omitempty" require:"true"`
	Ttl               *int    `json:"Ttl,omitempty" xml:"Ttl,omitempty" require:"true"`
	LbaStrategy       *string `json:"LbaStrategy,omitempty" xml:"LbaStrategy,omitempty" require:"true"`
	CreateTime        *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp   *int64  `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	AlertGroup        *string `json:"AlertGroup,omitempty" xml:"AlertGroup,omitempty" require:"true"`
	CnameMode         *string `json:"CnameMode,omitempty" xml:"CnameMode,omitempty" require:"true"`
	AccessStrategyNum *int    `json:"AccessStrategyNum,omitempty" xml:"AccessStrategyNum,omitempty" require:"true"`
	AddressPoolNum    *int    `json:"AddressPoolNum,omitempty" xml:"AddressPoolNum,omitempty" require:"true"`
}

func (s DescribeGtmInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceResponse) SetRequestId(v string) *DescribeGtmInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetInstanceId(v string) *DescribeGtmInstanceResponse {
	s.InstanceId = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetInstanceName(v string) *DescribeGtmInstanceResponse {
	s.InstanceName = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetVersionCode(v string) *DescribeGtmInstanceResponse {
	s.VersionCode = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetExpireTime(v string) *DescribeGtmInstanceResponse {
	s.ExpireTime = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetExpireTimestamp(v int64) *DescribeGtmInstanceResponse {
	s.ExpireTimestamp = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetCname(v string) *DescribeGtmInstanceResponse {
	s.Cname = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetUserDomainName(v string) *DescribeGtmInstanceResponse {
	s.UserDomainName = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetTtl(v int) *DescribeGtmInstanceResponse {
	s.Ttl = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetLbaStrategy(v string) *DescribeGtmInstanceResponse {
	s.LbaStrategy = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetCreateTime(v string) *DescribeGtmInstanceResponse {
	s.CreateTime = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetCreateTimestamp(v int64) *DescribeGtmInstanceResponse {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetAlertGroup(v string) *DescribeGtmInstanceResponse {
	s.AlertGroup = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetCnameMode(v string) *DescribeGtmInstanceResponse {
	s.CnameMode = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetAccessStrategyNum(v int) *DescribeGtmInstanceResponse {
	s.AccessStrategyNum = &v
	return s
}

func (s *DescribeGtmInstanceResponse) SetAddressPoolNum(v int) *DescribeGtmInstanceResponse {
	s.AddressPoolNum = &v
	return s
}

type DescribeGtmInstanceAddressPoolRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AddrPoolId *string `json:"AddrPoolId,omitempty" xml:"AddrPoolId,omitempty" require:"true"`
}

func (s DescribeGtmInstanceAddressPoolRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceAddressPoolRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceAddressPoolRequest) SetLang(v string) *DescribeGtmInstanceAddressPoolRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolRequest) SetAddrPoolId(v string) *DescribeGtmInstanceAddressPoolRequest {
	s.AddrPoolId = &v
	return s
}

type DescribeGtmInstanceAddressPoolResponse struct {
	RequestId           *string                                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AddrPoolId          *string                                      `json:"AddrPoolId,omitempty" xml:"AddrPoolId,omitempty" require:"true"`
	CreateTime          *string                                      `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp     *int64                                       `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	UpdateTime          *string                                      `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	UpdateTimestamp     *int64                                       `json:"UpdateTimestamp,omitempty" xml:"UpdateTimestamp,omitempty" require:"true"`
	AddrCount           *int                                         `json:"AddrCount,omitempty" xml:"AddrCount,omitempty" require:"true"`
	MinAvailableAddrNum *int                                         `json:"MinAvailableAddrNum,omitempty" xml:"MinAvailableAddrNum,omitempty" require:"true"`
	MonitorConfigId     *string                                      `json:"MonitorConfigId,omitempty" xml:"MonitorConfigId,omitempty" require:"true"`
	MonitorStatus       *string                                      `json:"MonitorStatus,omitempty" xml:"MonitorStatus,omitempty" require:"true"`
	Name                *string                                      `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Status              *string                                      `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Type                *string                                      `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Addrs               *DescribeGtmInstanceAddressPoolResponseAddrs `json:"Addrs,omitempty" xml:"Addrs,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmInstanceAddressPoolResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceAddressPoolResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetRequestId(v string) *DescribeGtmInstanceAddressPoolResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetAddrPoolId(v string) *DescribeGtmInstanceAddressPoolResponse {
	s.AddrPoolId = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetCreateTime(v string) *DescribeGtmInstanceAddressPoolResponse {
	s.CreateTime = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetCreateTimestamp(v int64) *DescribeGtmInstanceAddressPoolResponse {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetUpdateTime(v string) *DescribeGtmInstanceAddressPoolResponse {
	s.UpdateTime = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetUpdateTimestamp(v int64) *DescribeGtmInstanceAddressPoolResponse {
	s.UpdateTimestamp = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetAddrCount(v int) *DescribeGtmInstanceAddressPoolResponse {
	s.AddrCount = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetMinAvailableAddrNum(v int) *DescribeGtmInstanceAddressPoolResponse {
	s.MinAvailableAddrNum = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetMonitorConfigId(v string) *DescribeGtmInstanceAddressPoolResponse {
	s.MonitorConfigId = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetMonitorStatus(v string) *DescribeGtmInstanceAddressPoolResponse {
	s.MonitorStatus = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetName(v string) *DescribeGtmInstanceAddressPoolResponse {
	s.Name = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetStatus(v string) *DescribeGtmInstanceAddressPoolResponse {
	s.Status = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetType(v string) *DescribeGtmInstanceAddressPoolResponse {
	s.Type = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponse) SetAddrs(v *DescribeGtmInstanceAddressPoolResponseAddrs) *DescribeGtmInstanceAddressPoolResponse {
	s.Addrs = v
	return s
}

type DescribeGtmInstanceAddressPoolResponseAddrs struct {
	Addr []*DescribeGtmInstanceAddressPoolResponseAddrsAddr `json:"Addr,omitempty" xml:"Addr,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmInstanceAddressPoolResponseAddrs) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceAddressPoolResponseAddrs) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceAddressPoolResponseAddrs) SetAddr(v []*DescribeGtmInstanceAddressPoolResponseAddrsAddr) *DescribeGtmInstanceAddressPoolResponseAddrs {
	s.Addr = v
	return s
}

type DescribeGtmInstanceAddressPoolResponseAddrsAddr struct {
	AddrId          *int64  `json:"AddrId,omitempty" xml:"AddrId,omitempty" require:"true"`
	CreateTime      *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp *int64  `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	UpdateTime      *string `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	UpdateTimestamp *int64  `json:"UpdateTimestamp,omitempty" xml:"UpdateTimestamp,omitempty" require:"true"`
	Value           *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	LbaWeight       *int    `json:"LbaWeight,omitempty" xml:"LbaWeight,omitempty" require:"true"`
	Mode            *string `json:"Mode,omitempty" xml:"Mode,omitempty" require:"true"`
	AlertStatus     *string `json:"AlertStatus,omitempty" xml:"AlertStatus,omitempty" require:"true"`
}

func (s DescribeGtmInstanceAddressPoolResponseAddrsAddr) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceAddressPoolResponseAddrsAddr) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceAddressPoolResponseAddrsAddr) SetAddrId(v int64) *DescribeGtmInstanceAddressPoolResponseAddrsAddr {
	s.AddrId = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponseAddrsAddr) SetCreateTime(v string) *DescribeGtmInstanceAddressPoolResponseAddrsAddr {
	s.CreateTime = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponseAddrsAddr) SetCreateTimestamp(v int64) *DescribeGtmInstanceAddressPoolResponseAddrsAddr {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponseAddrsAddr) SetUpdateTime(v string) *DescribeGtmInstanceAddressPoolResponseAddrsAddr {
	s.UpdateTime = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponseAddrsAddr) SetUpdateTimestamp(v int64) *DescribeGtmInstanceAddressPoolResponseAddrsAddr {
	s.UpdateTimestamp = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponseAddrsAddr) SetValue(v string) *DescribeGtmInstanceAddressPoolResponseAddrsAddr {
	s.Value = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponseAddrsAddr) SetLbaWeight(v int) *DescribeGtmInstanceAddressPoolResponseAddrsAddr {
	s.LbaWeight = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponseAddrsAddr) SetMode(v string) *DescribeGtmInstanceAddressPoolResponseAddrsAddr {
	s.Mode = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolResponseAddrsAddr) SetAlertStatus(v string) *DescribeGtmInstanceAddressPoolResponseAddrsAddr {
	s.AlertStatus = &v
	return s
}

type DescribeGtmInstanceAddressPoolsRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeGtmInstanceAddressPoolsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceAddressPoolsRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceAddressPoolsRequest) SetLang(v string) *DescribeGtmInstanceAddressPoolsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsRequest) SetInstanceId(v string) *DescribeGtmInstanceAddressPoolsRequest {
	s.InstanceId = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsRequest) SetPageNumber(v int) *DescribeGtmInstanceAddressPoolsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsRequest) SetPageSize(v int) *DescribeGtmInstanceAddressPoolsRequest {
	s.PageSize = &v
	return s
}

type DescribeGtmInstanceAddressPoolsResponse struct {
	RequestId  *string                                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalItems *int                                              `json:"TotalItems,omitempty" xml:"TotalItems,omitempty" require:"true"`
	TotalPages *int                                              `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	PageNumber *int                                              `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	AddrPools  *DescribeGtmInstanceAddressPoolsResponseAddrPools `json:"AddrPools,omitempty" xml:"AddrPools,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmInstanceAddressPoolsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceAddressPoolsResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceAddressPoolsResponse) SetRequestId(v string) *DescribeGtmInstanceAddressPoolsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponse) SetTotalItems(v int) *DescribeGtmInstanceAddressPoolsResponse {
	s.TotalItems = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponse) SetTotalPages(v int) *DescribeGtmInstanceAddressPoolsResponse {
	s.TotalPages = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponse) SetPageNumber(v int) *DescribeGtmInstanceAddressPoolsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponse) SetPageSize(v int) *DescribeGtmInstanceAddressPoolsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponse) SetAddrPools(v *DescribeGtmInstanceAddressPoolsResponseAddrPools) *DescribeGtmInstanceAddressPoolsResponse {
	s.AddrPools = v
	return s
}

type DescribeGtmInstanceAddressPoolsResponseAddrPools struct {
	AddrPool []*DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool `json:"AddrPool,omitempty" xml:"AddrPool,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmInstanceAddressPoolsResponseAddrPools) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceAddressPoolsResponseAddrPools) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPools) SetAddrPool(v []*DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) *DescribeGtmInstanceAddressPoolsResponseAddrPools {
	s.AddrPool = v
	return s
}

type DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool struct {
	AddrPoolId          *string `json:"AddrPoolId,omitempty" xml:"AddrPoolId,omitempty" require:"true"`
	CreateTime          *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp     *int64  `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	UpdateTime          *string `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	UpdateTimestamp     *int64  `json:"UpdateTimestamp,omitempty" xml:"UpdateTimestamp,omitempty" require:"true"`
	AddrCount           *int    `json:"AddrCount,omitempty" xml:"AddrCount,omitempty" require:"true"`
	MinAvailableAddrNum *int    `json:"MinAvailableAddrNum,omitempty" xml:"MinAvailableAddrNum,omitempty" require:"true"`
	MonitorConfigId     *string `json:"MonitorConfigId,omitempty" xml:"MonitorConfigId,omitempty" require:"true"`
	MonitorStatus       *string `json:"MonitorStatus,omitempty" xml:"MonitorStatus,omitempty" require:"true"`
	Name                *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Status              *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Type                *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetAddrPoolId(v string) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.AddrPoolId = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetCreateTime(v string) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.CreateTime = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetCreateTimestamp(v int64) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetUpdateTime(v string) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.UpdateTime = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetUpdateTimestamp(v int64) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.UpdateTimestamp = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetAddrCount(v int) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.AddrCount = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetMinAvailableAddrNum(v int) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.MinAvailableAddrNum = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetMonitorConfigId(v string) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.MonitorConfigId = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetMonitorStatus(v string) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.MonitorStatus = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetName(v string) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.Name = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetStatus(v string) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.Status = &v
	return s
}

func (s *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool) SetType(v string) *DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool {
	s.Type = &v
	return s
}

type DescribeGtmInstanceStatusRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s DescribeGtmInstanceStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceStatusRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceStatusRequest) SetLang(v string) *DescribeGtmInstanceStatusRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmInstanceStatusRequest) SetInstanceId(v string) *DescribeGtmInstanceStatusRequest {
	s.InstanceId = &v
	return s
}

type DescribeGtmInstanceStatusResponse struct {
	RequestId                   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AddrNotAvailableNum         *int    `json:"AddrNotAvailableNum,omitempty" xml:"AddrNotAvailableNum,omitempty" require:"true"`
	AddrPoolNotAvailableNum     *int    `json:"AddrPoolNotAvailableNum,omitempty" xml:"AddrPoolNotAvailableNum,omitempty" require:"true"`
	SwitchToFailoverStrategyNum *int    `json:"SwitchToFailoverStrategyNum,omitempty" xml:"SwitchToFailoverStrategyNum,omitempty" require:"true"`
	StrategyNotAvailableNum     *int    `json:"StrategyNotAvailableNum,omitempty" xml:"StrategyNotAvailableNum,omitempty" require:"true"`
	Status                      *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	StatusReason                *string `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
}

func (s DescribeGtmInstanceStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmInstanceStatusResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmInstanceStatusResponse) SetRequestId(v string) *DescribeGtmInstanceStatusResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmInstanceStatusResponse) SetAddrNotAvailableNum(v int) *DescribeGtmInstanceStatusResponse {
	s.AddrNotAvailableNum = &v
	return s
}

func (s *DescribeGtmInstanceStatusResponse) SetAddrPoolNotAvailableNum(v int) *DescribeGtmInstanceStatusResponse {
	s.AddrPoolNotAvailableNum = &v
	return s
}

func (s *DescribeGtmInstanceStatusResponse) SetSwitchToFailoverStrategyNum(v int) *DescribeGtmInstanceStatusResponse {
	s.SwitchToFailoverStrategyNum = &v
	return s
}

func (s *DescribeGtmInstanceStatusResponse) SetStrategyNotAvailableNum(v int) *DescribeGtmInstanceStatusResponse {
	s.StrategyNotAvailableNum = &v
	return s
}

func (s *DescribeGtmInstanceStatusResponse) SetStatus(v string) *DescribeGtmInstanceStatusResponse {
	s.Status = &v
	return s
}

func (s *DescribeGtmInstanceStatusResponse) SetStatusReason(v string) *DescribeGtmInstanceStatusResponse {
	s.StatusReason = &v
	return s
}

type DescribeGtmMonitorAvailableConfigRequest struct {
	Lang *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
}

func (s DescribeGtmMonitorAvailableConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmMonitorAvailableConfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmMonitorAvailableConfigRequest) SetLang(v string) *DescribeGtmMonitorAvailableConfigRequest {
	s.Lang = &v
	return s
}

type DescribeGtmMonitorAvailableConfigResponse struct {
	RequestId    *string                                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IspCityNodes *DescribeGtmMonitorAvailableConfigResponseIspCityNodes `json:"IspCityNodes,omitempty" xml:"IspCityNodes,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmMonitorAvailableConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmMonitorAvailableConfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmMonitorAvailableConfigResponse) SetRequestId(v string) *DescribeGtmMonitorAvailableConfigResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmMonitorAvailableConfigResponse) SetIspCityNodes(v *DescribeGtmMonitorAvailableConfigResponseIspCityNodes) *DescribeGtmMonitorAvailableConfigResponse {
	s.IspCityNodes = v
	return s
}

type DescribeGtmMonitorAvailableConfigResponseIspCityNodes struct {
	IspCityNode []*DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode `json:"IspCityNode,omitempty" xml:"IspCityNode,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmMonitorAvailableConfigResponseIspCityNodes) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmMonitorAvailableConfigResponseIspCityNodes) GoString() string {
	return s.String()
}

func (s *DescribeGtmMonitorAvailableConfigResponseIspCityNodes) SetIspCityNode(v []*DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) *DescribeGtmMonitorAvailableConfigResponseIspCityNodes {
	s.IspCityNode = v
	return s
}

type DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode struct {
	IspName         *string `json:"IspName,omitempty" xml:"IspName,omitempty" require:"true"`
	IspCode         *string `json:"IspCode,omitempty" xml:"IspCode,omitempty" require:"true"`
	CityName        *string `json:"CityName,omitempty" xml:"CityName,omitempty" require:"true"`
	CityCode        *string `json:"CityCode,omitempty" xml:"CityCode,omitempty" require:"true"`
	DefaultSelected *bool   `json:"DefaultSelected,omitempty" xml:"DefaultSelected,omitempty" require:"true"`
	Mainland        *bool   `json:"Mainland,omitempty" xml:"Mainland,omitempty" require:"true"`
	GroupType       *string `json:"GroupType,omitempty" xml:"GroupType,omitempty" require:"true"`
	GroupName       *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
}

func (s DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) GoString() string {
	return s.String()
}

func (s *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) SetIspName(v string) *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode {
	s.IspName = &v
	return s
}

func (s *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) SetIspCode(v string) *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode {
	s.IspCode = &v
	return s
}

func (s *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) SetCityName(v string) *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode {
	s.CityName = &v
	return s
}

func (s *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) SetCityCode(v string) *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode {
	s.CityCode = &v
	return s
}

func (s *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) SetDefaultSelected(v bool) *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode {
	s.DefaultSelected = &v
	return s
}

func (s *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) SetMainland(v bool) *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode {
	s.Mainland = &v
	return s
}

func (s *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) SetGroupType(v string) *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode {
	s.GroupType = &v
	return s
}

func (s *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode) SetGroupName(v string) *DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode {
	s.GroupName = &v
	return s
}

type DescribeGtmMonitorConfigRequest struct {
	Lang            *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	MonitorConfigId *string `json:"MonitorConfigId,omitempty" xml:"MonitorConfigId,omitempty" require:"true"`
}

func (s DescribeGtmMonitorConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmMonitorConfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeGtmMonitorConfigRequest) SetLang(v string) *DescribeGtmMonitorConfigRequest {
	s.Lang = &v
	return s
}

func (s *DescribeGtmMonitorConfigRequest) SetMonitorConfigId(v string) *DescribeGtmMonitorConfigRequest {
	s.MonitorConfigId = &v
	return s
}

type DescribeGtmMonitorConfigResponse struct {
	RequestId         *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MonitorConfigId   *string                                       `json:"MonitorConfigId,omitempty" xml:"MonitorConfigId,omitempty" require:"true"`
	CreateTime        *string                                       `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp   *int64                                        `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	UpdateTime        *string                                       `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	UpdateTimestamp   *int64                                        `json:"UpdateTimestamp,omitempty" xml:"UpdateTimestamp,omitempty" require:"true"`
	ProtocolType      *string                                       `json:"ProtocolType,omitempty" xml:"ProtocolType,omitempty" require:"true"`
	Interval          *int                                          `json:"Interval,omitempty" xml:"Interval,omitempty" require:"true"`
	EvaluationCount   *int                                          `json:"EvaluationCount,omitempty" xml:"EvaluationCount,omitempty" require:"true"`
	Timeout           *int                                          `json:"Timeout,omitempty" xml:"Timeout,omitempty" require:"true"`
	MonitorExtendInfo *string                                       `json:"MonitorExtendInfo,omitempty" xml:"MonitorExtendInfo,omitempty" require:"true"`
	IspCityNodes      *DescribeGtmMonitorConfigResponseIspCityNodes `json:"IspCityNodes,omitempty" xml:"IspCityNodes,omitempty" require:"true" type:"Struct"`
}

func (s DescribeGtmMonitorConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmMonitorConfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeGtmMonitorConfigResponse) SetRequestId(v string) *DescribeGtmMonitorConfigResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetMonitorConfigId(v string) *DescribeGtmMonitorConfigResponse {
	s.MonitorConfigId = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetCreateTime(v string) *DescribeGtmMonitorConfigResponse {
	s.CreateTime = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetCreateTimestamp(v int64) *DescribeGtmMonitorConfigResponse {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetUpdateTime(v string) *DescribeGtmMonitorConfigResponse {
	s.UpdateTime = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetUpdateTimestamp(v int64) *DescribeGtmMonitorConfigResponse {
	s.UpdateTimestamp = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetProtocolType(v string) *DescribeGtmMonitorConfigResponse {
	s.ProtocolType = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetInterval(v int) *DescribeGtmMonitorConfigResponse {
	s.Interval = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetEvaluationCount(v int) *DescribeGtmMonitorConfigResponse {
	s.EvaluationCount = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetTimeout(v int) *DescribeGtmMonitorConfigResponse {
	s.Timeout = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetMonitorExtendInfo(v string) *DescribeGtmMonitorConfigResponse {
	s.MonitorExtendInfo = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponse) SetIspCityNodes(v *DescribeGtmMonitorConfigResponseIspCityNodes) *DescribeGtmMonitorConfigResponse {
	s.IspCityNodes = v
	return s
}

type DescribeGtmMonitorConfigResponseIspCityNodes struct {
	IspCityNode []*DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode `json:"IspCityNode,omitempty" xml:"IspCityNode,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeGtmMonitorConfigResponseIspCityNodes) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmMonitorConfigResponseIspCityNodes) GoString() string {
	return s.String()
}

func (s *DescribeGtmMonitorConfigResponseIspCityNodes) SetIspCityNode(v []*DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode) *DescribeGtmMonitorConfigResponseIspCityNodes {
	s.IspCityNode = v
	return s
}

type DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode struct {
	CountryName *string `json:"CountryName,omitempty" xml:"CountryName,omitempty" require:"true"`
	CountryCode *string `json:"CountryCode,omitempty" xml:"CountryCode,omitempty" require:"true"`
	CityName    *string `json:"CityName,omitempty" xml:"CityName,omitempty" require:"true"`
	CityCode    *string `json:"CityCode,omitempty" xml:"CityCode,omitempty" require:"true"`
	IspCode     *string `json:"IspCode,omitempty" xml:"IspCode,omitempty" require:"true"`
	IspName     *string `json:"IspName,omitempty" xml:"IspName,omitempty" require:"true"`
}

func (s DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode) String() string {
	return tea.Prettify(s)
}

func (s DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode) GoString() string {
	return s.String()
}

func (s *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode) SetCountryName(v string) *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode {
	s.CountryName = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode) SetCountryCode(v string) *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode {
	s.CountryCode = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode) SetCityName(v string) *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode {
	s.CityName = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode) SetCityCode(v string) *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode {
	s.CityCode = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode) SetIspCode(v string) *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode {
	s.IspCode = &v
	return s
}

func (s *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode) SetIspName(v string) *DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode {
	s.IspName = &v
	return s
}

type UpdateGtmAccessStrategyRequest struct {
	Lang               *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	StrategyId         *string `json:"StrategyId,omitempty" xml:"StrategyId,omitempty" require:"true"`
	StrategyName       *string `json:"StrategyName,omitempty" xml:"StrategyName,omitempty"`
	DefaultAddrPoolId  *string `json:"DefaultAddrPoolId,omitempty" xml:"DefaultAddrPoolId,omitempty"`
	FailoverAddrPoolId *string `json:"FailoverAddrPoolId,omitempty" xml:"FailoverAddrPoolId,omitempty"`
	AccessLines        *string `json:"AccessLines,omitempty" xml:"AccessLines,omitempty"`
}

func (s UpdateGtmAccessStrategyRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmAccessStrategyRequest) GoString() string {
	return s.String()
}

func (s *UpdateGtmAccessStrategyRequest) SetLang(v string) *UpdateGtmAccessStrategyRequest {
	s.Lang = &v
	return s
}

func (s *UpdateGtmAccessStrategyRequest) SetStrategyId(v string) *UpdateGtmAccessStrategyRequest {
	s.StrategyId = &v
	return s
}

func (s *UpdateGtmAccessStrategyRequest) SetStrategyName(v string) *UpdateGtmAccessStrategyRequest {
	s.StrategyName = &v
	return s
}

func (s *UpdateGtmAccessStrategyRequest) SetDefaultAddrPoolId(v string) *UpdateGtmAccessStrategyRequest {
	s.DefaultAddrPoolId = &v
	return s
}

func (s *UpdateGtmAccessStrategyRequest) SetFailoverAddrPoolId(v string) *UpdateGtmAccessStrategyRequest {
	s.FailoverAddrPoolId = &v
	return s
}

func (s *UpdateGtmAccessStrategyRequest) SetAccessLines(v string) *UpdateGtmAccessStrategyRequest {
	s.AccessLines = &v
	return s
}

type UpdateGtmAccessStrategyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateGtmAccessStrategyResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmAccessStrategyResponse) GoString() string {
	return s.String()
}

func (s *UpdateGtmAccessStrategyResponse) SetRequestId(v string) *UpdateGtmAccessStrategyResponse {
	s.RequestId = &v
	return s
}

type UpdateGtmAddressPoolRequest struct {
	Lang                *string                            `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AddrPoolId          *string                            `json:"AddrPoolId,omitempty" xml:"AddrPoolId,omitempty" require:"true"`
	Name                *string                            `json:"Name,omitempty" xml:"Name,omitempty"`
	Type                *string                            `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	MinAvailableAddrNum *int                               `json:"MinAvailableAddrNum,omitempty" xml:"MinAvailableAddrNum,omitempty"`
	Addr                []*UpdateGtmAddressPoolRequestAddr `json:"Addr,omitempty" xml:"Addr,omitempty" require:"true" type:"Repeated"`
}

func (s UpdateGtmAddressPoolRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmAddressPoolRequest) GoString() string {
	return s.String()
}

func (s *UpdateGtmAddressPoolRequest) SetLang(v string) *UpdateGtmAddressPoolRequest {
	s.Lang = &v
	return s
}

func (s *UpdateGtmAddressPoolRequest) SetAddrPoolId(v string) *UpdateGtmAddressPoolRequest {
	s.AddrPoolId = &v
	return s
}

func (s *UpdateGtmAddressPoolRequest) SetName(v string) *UpdateGtmAddressPoolRequest {
	s.Name = &v
	return s
}

func (s *UpdateGtmAddressPoolRequest) SetType(v string) *UpdateGtmAddressPoolRequest {
	s.Type = &v
	return s
}

func (s *UpdateGtmAddressPoolRequest) SetMinAvailableAddrNum(v int) *UpdateGtmAddressPoolRequest {
	s.MinAvailableAddrNum = &v
	return s
}

func (s *UpdateGtmAddressPoolRequest) SetAddr(v []*UpdateGtmAddressPoolRequestAddr) *UpdateGtmAddressPoolRequest {
	s.Addr = v
	return s
}

type UpdateGtmAddressPoolRequestAddr struct {
	Value     *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	LbaWeight *int    `json:"LbaWeight,omitempty" xml:"LbaWeight,omitempty" require:"true"`
	Mode      *string `json:"Mode,omitempty" xml:"Mode,omitempty" require:"true"`
}

func (s UpdateGtmAddressPoolRequestAddr) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmAddressPoolRequestAddr) GoString() string {
	return s.String()
}

func (s *UpdateGtmAddressPoolRequestAddr) SetValue(v string) *UpdateGtmAddressPoolRequestAddr {
	s.Value = &v
	return s
}

func (s *UpdateGtmAddressPoolRequestAddr) SetLbaWeight(v int) *UpdateGtmAddressPoolRequestAddr {
	s.LbaWeight = &v
	return s
}

func (s *UpdateGtmAddressPoolRequestAddr) SetMode(v string) *UpdateGtmAddressPoolRequestAddr {
	s.Mode = &v
	return s
}

type UpdateGtmAddressPoolResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateGtmAddressPoolResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmAddressPoolResponse) GoString() string {
	return s.String()
}

func (s *UpdateGtmAddressPoolResponse) SetRequestId(v string) *UpdateGtmAddressPoolResponse {
	s.RequestId = &v
	return s
}

type UpdateGtmMonitorRequest struct {
	Lang              *string                               `json:"Lang,omitempty" xml:"Lang,omitempty"`
	MonitorConfigId   *string                               `json:"MonitorConfigId,omitempty" xml:"MonitorConfigId,omitempty" require:"true"`
	ProtocolType      *string                               `json:"ProtocolType,omitempty" xml:"ProtocolType,omitempty" require:"true"`
	Interval          *int                                  `json:"Interval,omitempty" xml:"Interval,omitempty"`
	EvaluationCount   *int                                  `json:"EvaluationCount,omitempty" xml:"EvaluationCount,omitempty"`
	Timeout           *int                                  `json:"Timeout,omitempty" xml:"Timeout,omitempty"`
	MonitorExtendInfo *string                               `json:"MonitorExtendInfo,omitempty" xml:"MonitorExtendInfo,omitempty" require:"true"`
	IspCityNode       []*UpdateGtmMonitorRequestIspCityNode `json:"IspCityNode,omitempty" xml:"IspCityNode,omitempty" require:"true" type:"Repeated"`
}

func (s UpdateGtmMonitorRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmMonitorRequest) GoString() string {
	return s.String()
}

func (s *UpdateGtmMonitorRequest) SetLang(v string) *UpdateGtmMonitorRequest {
	s.Lang = &v
	return s
}

func (s *UpdateGtmMonitorRequest) SetMonitorConfigId(v string) *UpdateGtmMonitorRequest {
	s.MonitorConfigId = &v
	return s
}

func (s *UpdateGtmMonitorRequest) SetProtocolType(v string) *UpdateGtmMonitorRequest {
	s.ProtocolType = &v
	return s
}

func (s *UpdateGtmMonitorRequest) SetInterval(v int) *UpdateGtmMonitorRequest {
	s.Interval = &v
	return s
}

func (s *UpdateGtmMonitorRequest) SetEvaluationCount(v int) *UpdateGtmMonitorRequest {
	s.EvaluationCount = &v
	return s
}

func (s *UpdateGtmMonitorRequest) SetTimeout(v int) *UpdateGtmMonitorRequest {
	s.Timeout = &v
	return s
}

func (s *UpdateGtmMonitorRequest) SetMonitorExtendInfo(v string) *UpdateGtmMonitorRequest {
	s.MonitorExtendInfo = &v
	return s
}

func (s *UpdateGtmMonitorRequest) SetIspCityNode(v []*UpdateGtmMonitorRequestIspCityNode) *UpdateGtmMonitorRequest {
	s.IspCityNode = v
	return s
}

type UpdateGtmMonitorRequestIspCityNode struct {
	CityCode *string `json:"CityCode,omitempty" xml:"CityCode,omitempty" require:"true"`
	IspCode  *string `json:"IspCode,omitempty" xml:"IspCode,omitempty" require:"true"`
}

func (s UpdateGtmMonitorRequestIspCityNode) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmMonitorRequestIspCityNode) GoString() string {
	return s.String()
}

func (s *UpdateGtmMonitorRequestIspCityNode) SetCityCode(v string) *UpdateGtmMonitorRequestIspCityNode {
	s.CityCode = &v
	return s
}

func (s *UpdateGtmMonitorRequestIspCityNode) SetIspCode(v string) *UpdateGtmMonitorRequestIspCityNode {
	s.IspCode = &v
	return s
}

type UpdateGtmMonitorResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateGtmMonitorResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateGtmMonitorResponse) GoString() string {
	return s.String()
}

func (s *UpdateGtmMonitorResponse) SetRequestId(v string) *UpdateGtmMonitorResponse {
	s.RequestId = &v
	return s
}

type UpdateDomainRemarkRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	Remark     *string `json:"Remark,omitempty" xml:"Remark,omitempty"`
}

func (s UpdateDomainRemarkRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateDomainRemarkRequest) GoString() string {
	return s.String()
}

func (s *UpdateDomainRemarkRequest) SetLang(v string) *UpdateDomainRemarkRequest {
	s.Lang = &v
	return s
}

func (s *UpdateDomainRemarkRequest) SetDomainName(v string) *UpdateDomainRemarkRequest {
	s.DomainName = &v
	return s
}

func (s *UpdateDomainRemarkRequest) SetRemark(v string) *UpdateDomainRemarkRequest {
	s.Remark = &v
	return s
}

type UpdateDomainRemarkResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateDomainRemarkResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateDomainRemarkResponse) GoString() string {
	return s.String()
}

func (s *UpdateDomainRemarkResponse) SetRequestId(v string) *UpdateDomainRemarkResponse {
	s.RequestId = &v
	return s
}

type UpdateDomainRecordRemarkRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	RecordId     *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
	Remark       *string `json:"Remark,omitempty" xml:"Remark,omitempty"`
}

func (s UpdateDomainRecordRemarkRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateDomainRecordRemarkRequest) GoString() string {
	return s.String()
}

func (s *UpdateDomainRecordRemarkRequest) SetLang(v string) *UpdateDomainRecordRemarkRequest {
	s.Lang = &v
	return s
}

func (s *UpdateDomainRecordRemarkRequest) SetUserClientIp(v string) *UpdateDomainRecordRemarkRequest {
	s.UserClientIp = &v
	return s
}

func (s *UpdateDomainRecordRemarkRequest) SetRecordId(v string) *UpdateDomainRecordRemarkRequest {
	s.RecordId = &v
	return s
}

func (s *UpdateDomainRecordRemarkRequest) SetRemark(v string) *UpdateDomainRecordRemarkRequest {
	s.Remark = &v
	return s
}

type UpdateDomainRecordRemarkResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateDomainRecordRemarkResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateDomainRecordRemarkResponse) GoString() string {
	return s.String()
}

func (s *UpdateDomainRecordRemarkResponse) SetRequestId(v string) *UpdateDomainRecordRemarkResponse {
	s.RequestId = &v
	return s
}

type DescribeSupportLinesRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
}

func (s DescribeSupportLinesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSupportLinesRequest) GoString() string {
	return s.String()
}

func (s *DescribeSupportLinesRequest) SetLang(v string) *DescribeSupportLinesRequest {
	s.Lang = &v
	return s
}

func (s *DescribeSupportLinesRequest) SetUserClientIp(v string) *DescribeSupportLinesRequest {
	s.UserClientIp = &v
	return s
}

func (s *DescribeSupportLinesRequest) SetDomainName(v string) *DescribeSupportLinesRequest {
	s.DomainName = &v
	return s
}

type DescribeSupportLinesResponse struct {
	RequestId   *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RecordLines *DescribeSupportLinesResponseRecordLines `json:"RecordLines,omitempty" xml:"RecordLines,omitempty" require:"true" type:"Struct"`
}

func (s DescribeSupportLinesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSupportLinesResponse) GoString() string {
	return s.String()
}

func (s *DescribeSupportLinesResponse) SetRequestId(v string) *DescribeSupportLinesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSupportLinesResponse) SetRecordLines(v *DescribeSupportLinesResponseRecordLines) *DescribeSupportLinesResponse {
	s.RecordLines = v
	return s
}

type DescribeSupportLinesResponseRecordLines struct {
	RecordLine []*DescribeSupportLinesResponseRecordLinesRecordLine `json:"RecordLine,omitempty" xml:"RecordLine,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeSupportLinesResponseRecordLines) String() string {
	return tea.Prettify(s)
}

func (s DescribeSupportLinesResponseRecordLines) GoString() string {
	return s.String()
}

func (s *DescribeSupportLinesResponseRecordLines) SetRecordLine(v []*DescribeSupportLinesResponseRecordLinesRecordLine) *DescribeSupportLinesResponseRecordLines {
	s.RecordLine = v
	return s
}

type DescribeSupportLinesResponseRecordLinesRecordLine struct {
	LineCode        *string `json:"LineCode,omitempty" xml:"LineCode,omitempty" require:"true"`
	FatherCode      *string `json:"FatherCode,omitempty" xml:"FatherCode,omitempty" require:"true"`
	LineName        *string `json:"LineName,omitempty" xml:"LineName,omitempty" require:"true"`
	LineDisplayName *string `json:"LineDisplayName,omitempty" xml:"LineDisplayName,omitempty" require:"true"`
}

func (s DescribeSupportLinesResponseRecordLinesRecordLine) String() string {
	return tea.Prettify(s)
}

func (s DescribeSupportLinesResponseRecordLinesRecordLine) GoString() string {
	return s.String()
}

func (s *DescribeSupportLinesResponseRecordLinesRecordLine) SetLineCode(v string) *DescribeSupportLinesResponseRecordLinesRecordLine {
	s.LineCode = &v
	return s
}

func (s *DescribeSupportLinesResponseRecordLinesRecordLine) SetFatherCode(v string) *DescribeSupportLinesResponseRecordLinesRecordLine {
	s.FatherCode = &v
	return s
}

func (s *DescribeSupportLinesResponseRecordLinesRecordLine) SetLineName(v string) *DescribeSupportLinesResponseRecordLinesRecordLine {
	s.LineName = &v
	return s
}

func (s *DescribeSupportLinesResponseRecordLinesRecordLine) SetLineDisplayName(v string) *DescribeSupportLinesResponseRecordLinesRecordLine {
	s.LineDisplayName = &v
	return s
}

type DescribeDomainNsRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DescribeDomainNsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainNsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainNsRequest) SetLang(v string) *DescribeDomainNsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainNsRequest) SetDomainName(v string) *DescribeDomainNsRequest {
	s.DomainName = &v
	return s
}

type DescribeDomainNsResponse struct {
	RequestId        *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AllAliDns        *bool                                     `json:"AllAliDns,omitempty" xml:"AllAliDns,omitempty" require:"true"`
	IncludeAliDns    *bool                                     `json:"IncludeAliDns,omitempty" xml:"IncludeAliDns,omitempty" require:"true"`
	DnsServers       *DescribeDomainNsResponseDnsServers       `json:"DnsServers,omitempty" xml:"DnsServers,omitempty" require:"true" type:"Struct"`
	ExpectDnsServers *DescribeDomainNsResponseExpectDnsServers `json:"ExpectDnsServers,omitempty" xml:"ExpectDnsServers,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainNsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainNsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainNsResponse) SetRequestId(v string) *DescribeDomainNsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainNsResponse) SetAllAliDns(v bool) *DescribeDomainNsResponse {
	s.AllAliDns = &v
	return s
}

func (s *DescribeDomainNsResponse) SetIncludeAliDns(v bool) *DescribeDomainNsResponse {
	s.IncludeAliDns = &v
	return s
}

func (s *DescribeDomainNsResponse) SetDnsServers(v *DescribeDomainNsResponseDnsServers) *DescribeDomainNsResponse {
	s.DnsServers = v
	return s
}

func (s *DescribeDomainNsResponse) SetExpectDnsServers(v *DescribeDomainNsResponseExpectDnsServers) *DescribeDomainNsResponse {
	s.ExpectDnsServers = v
	return s
}

type DescribeDomainNsResponseDnsServers struct {
	DnsServer []*string `json:"DnsServer,omitempty" xml:"DnsServer,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainNsResponseDnsServers) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainNsResponseDnsServers) GoString() string {
	return s.String()
}

func (s *DescribeDomainNsResponseDnsServers) SetDnsServer(v []*string) *DescribeDomainNsResponseDnsServers {
	s.DnsServer = v
	return s
}

type DescribeDomainNsResponseExpectDnsServers struct {
	ExpectDnsServer []*string `json:"ExpectDnsServer,omitempty" xml:"ExpectDnsServer,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainNsResponseExpectDnsServers) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainNsResponseExpectDnsServers) GoString() string {
	return s.String()
}

func (s *DescribeDomainNsResponseExpectDnsServers) SetExpectDnsServer(v []*string) *DescribeDomainNsResponseExpectDnsServers {
	s.ExpectDnsServer = v
	return s
}

type DescribeDnsProductInstanceRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	InstanceId   *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s DescribeDnsProductInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDnsProductInstanceRequest) GoString() string {
	return s.String()
}

func (s *DescribeDnsProductInstanceRequest) SetLang(v string) *DescribeDnsProductInstanceRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDnsProductInstanceRequest) SetUserClientIp(v string) *DescribeDnsProductInstanceRequest {
	s.UserClientIp = &v
	return s
}

func (s *DescribeDnsProductInstanceRequest) SetInstanceId(v string) *DescribeDnsProductInstanceRequest {
	s.InstanceId = &v
	return s
}

type DescribeDnsProductInstanceResponse struct {
	RequestId             *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	InstanceId            *string                                       `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	VersionCode           *string                                       `json:"VersionCode,omitempty" xml:"VersionCode,omitempty" require:"true"`
	VersionName           *string                                       `json:"VersionName,omitempty" xml:"VersionName,omitempty" require:"true"`
	StartTime             *string                                       `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	StartTimestamp        *int64                                        `json:"StartTimestamp,omitempty" xml:"StartTimestamp,omitempty" require:"true"`
	EndTime               *string                                       `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	EndTimestamp          *int64                                        `json:"EndTimestamp,omitempty" xml:"EndTimestamp,omitempty" require:"true"`
	Domain                *string                                       `json:"Domain,omitempty" xml:"Domain,omitempty" require:"true"`
	BindCount             *int64                                        `json:"BindCount,omitempty" xml:"BindCount,omitempty" require:"true"`
	BindUsedCount         *int64                                        `json:"BindUsedCount,omitempty" xml:"BindUsedCount,omitempty" require:"true"`
	TTLMinValue           *int64                                        `json:"TTLMinValue,omitempty" xml:"TTLMinValue,omitempty" require:"true"`
	SubDomainLevel        *int64                                        `json:"SubDomainLevel,omitempty" xml:"SubDomainLevel,omitempty" require:"true"`
	DnsSLBCount           *int64                                        `json:"DnsSLBCount,omitempty" xml:"DnsSLBCount,omitempty" require:"true"`
	URLForwardCount       *int64                                        `json:"URLForwardCount,omitempty" xml:"URLForwardCount,omitempty" require:"true"`
	DDosDefendFlow        *int64                                        `json:"DDosDefendFlow,omitempty" xml:"DDosDefendFlow,omitempty" require:"true"`
	DDosDefendQuery       *int64                                        `json:"DDosDefendQuery,omitempty" xml:"DDosDefendQuery,omitempty" require:"true"`
	OverseaDDosDefendFlow *int64                                        `json:"OverseaDDosDefendFlow,omitempty" xml:"OverseaDDosDefendFlow,omitempty" require:"true"`
	SearchEngineLines     *string                                       `json:"SearchEngineLines,omitempty" xml:"SearchEngineLines,omitempty" require:"true"`
	ISPLines              *string                                       `json:"ISPLines,omitempty" xml:"ISPLines,omitempty" require:"true"`
	ISPRegionLines        *string                                       `json:"ISPRegionLines,omitempty" xml:"ISPRegionLines,omitempty" require:"true"`
	OverseaLine           *string                                       `json:"OverseaLine,omitempty" xml:"OverseaLine,omitempty" require:"true"`
	MonitorNodeCount      *int64                                        `json:"MonitorNodeCount,omitempty" xml:"MonitorNodeCount,omitempty" require:"true"`
	MonitorFrequency      *int64                                        `json:"MonitorFrequency,omitempty" xml:"MonitorFrequency,omitempty" require:"true"`
	MonitorTaskCount      *int64                                        `json:"MonitorTaskCount,omitempty" xml:"MonitorTaskCount,omitempty" require:"true"`
	RegionLines           *bool                                         `json:"RegionLines,omitempty" xml:"RegionLines,omitempty" require:"true"`
	Gslb                  *bool                                         `json:"Gslb,omitempty" xml:"Gslb,omitempty" require:"true"`
	InClean               *bool                                         `json:"InClean,omitempty" xml:"InClean,omitempty" require:"true"`
	InBlackHole           *bool                                         `json:"InBlackHole,omitempty" xml:"InBlackHole,omitempty" require:"true"`
	BindDomainCount       *int64                                        `json:"BindDomainCount,omitempty" xml:"BindDomainCount,omitempty" require:"true"`
	BindDomainUsedCount   *int64                                        `json:"BindDomainUsedCount,omitempty" xml:"BindDomainUsedCount,omitempty" require:"true"`
	DnsSecurity           *string                                       `json:"DnsSecurity,omitempty" xml:"DnsSecurity,omitempty" require:"true"`
	DnsServers            *DescribeDnsProductInstanceResponseDnsServers `json:"DnsServers,omitempty" xml:"DnsServers,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDnsProductInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDnsProductInstanceResponse) GoString() string {
	return s.String()
}

func (s *DescribeDnsProductInstanceResponse) SetRequestId(v string) *DescribeDnsProductInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetInstanceId(v string) *DescribeDnsProductInstanceResponse {
	s.InstanceId = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetVersionCode(v string) *DescribeDnsProductInstanceResponse {
	s.VersionCode = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetVersionName(v string) *DescribeDnsProductInstanceResponse {
	s.VersionName = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetStartTime(v string) *DescribeDnsProductInstanceResponse {
	s.StartTime = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetStartTimestamp(v int64) *DescribeDnsProductInstanceResponse {
	s.StartTimestamp = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetEndTime(v string) *DescribeDnsProductInstanceResponse {
	s.EndTime = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetEndTimestamp(v int64) *DescribeDnsProductInstanceResponse {
	s.EndTimestamp = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetDomain(v string) *DescribeDnsProductInstanceResponse {
	s.Domain = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetBindCount(v int64) *DescribeDnsProductInstanceResponse {
	s.BindCount = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetBindUsedCount(v int64) *DescribeDnsProductInstanceResponse {
	s.BindUsedCount = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetTTLMinValue(v int64) *DescribeDnsProductInstanceResponse {
	s.TTLMinValue = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetSubDomainLevel(v int64) *DescribeDnsProductInstanceResponse {
	s.SubDomainLevel = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetDnsSLBCount(v int64) *DescribeDnsProductInstanceResponse {
	s.DnsSLBCount = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetURLForwardCount(v int64) *DescribeDnsProductInstanceResponse {
	s.URLForwardCount = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetDDosDefendFlow(v int64) *DescribeDnsProductInstanceResponse {
	s.DDosDefendFlow = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetDDosDefendQuery(v int64) *DescribeDnsProductInstanceResponse {
	s.DDosDefendQuery = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetOverseaDDosDefendFlow(v int64) *DescribeDnsProductInstanceResponse {
	s.OverseaDDosDefendFlow = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetSearchEngineLines(v string) *DescribeDnsProductInstanceResponse {
	s.SearchEngineLines = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetISPLines(v string) *DescribeDnsProductInstanceResponse {
	s.ISPLines = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetISPRegionLines(v string) *DescribeDnsProductInstanceResponse {
	s.ISPRegionLines = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetOverseaLine(v string) *DescribeDnsProductInstanceResponse {
	s.OverseaLine = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetMonitorNodeCount(v int64) *DescribeDnsProductInstanceResponse {
	s.MonitorNodeCount = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetMonitorFrequency(v int64) *DescribeDnsProductInstanceResponse {
	s.MonitorFrequency = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetMonitorTaskCount(v int64) *DescribeDnsProductInstanceResponse {
	s.MonitorTaskCount = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetRegionLines(v bool) *DescribeDnsProductInstanceResponse {
	s.RegionLines = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetGslb(v bool) *DescribeDnsProductInstanceResponse {
	s.Gslb = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetInClean(v bool) *DescribeDnsProductInstanceResponse {
	s.InClean = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetInBlackHole(v bool) *DescribeDnsProductInstanceResponse {
	s.InBlackHole = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetBindDomainCount(v int64) *DescribeDnsProductInstanceResponse {
	s.BindDomainCount = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetBindDomainUsedCount(v int64) *DescribeDnsProductInstanceResponse {
	s.BindDomainUsedCount = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetDnsSecurity(v string) *DescribeDnsProductInstanceResponse {
	s.DnsSecurity = &v
	return s
}

func (s *DescribeDnsProductInstanceResponse) SetDnsServers(v *DescribeDnsProductInstanceResponseDnsServers) *DescribeDnsProductInstanceResponse {
	s.DnsServers = v
	return s
}

type DescribeDnsProductInstanceResponseDnsServers struct {
	DnsServer []*string `json:"DnsServer,omitempty" xml:"DnsServer,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDnsProductInstanceResponseDnsServers) String() string {
	return tea.Prettify(s)
}

func (s DescribeDnsProductInstanceResponseDnsServers) GoString() string {
	return s.String()
}

func (s *DescribeDnsProductInstanceResponseDnsServers) SetDnsServer(v []*string) *DescribeDnsProductInstanceResponseDnsServers {
	s.DnsServer = v
	return s
}

type UpdateDomainRecordRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	RecordId     *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
	RR           *string `json:"RR,omitempty" xml:"RR,omitempty" require:"true"`
	Type         *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Value        *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	TTL          *int64  `json:"TTL,omitempty" xml:"TTL,omitempty"`
	Priority     *int64  `json:"Priority,omitempty" xml:"Priority,omitempty"`
	Line         *string `json:"Line,omitempty" xml:"Line,omitempty"`
}

func (s UpdateDomainRecordRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateDomainRecordRequest) GoString() string {
	return s.String()
}

func (s *UpdateDomainRecordRequest) SetLang(v string) *UpdateDomainRecordRequest {
	s.Lang = &v
	return s
}

func (s *UpdateDomainRecordRequest) SetUserClientIp(v string) *UpdateDomainRecordRequest {
	s.UserClientIp = &v
	return s
}

func (s *UpdateDomainRecordRequest) SetRecordId(v string) *UpdateDomainRecordRequest {
	s.RecordId = &v
	return s
}

func (s *UpdateDomainRecordRequest) SetRR(v string) *UpdateDomainRecordRequest {
	s.RR = &v
	return s
}

func (s *UpdateDomainRecordRequest) SetType(v string) *UpdateDomainRecordRequest {
	s.Type = &v
	return s
}

func (s *UpdateDomainRecordRequest) SetValue(v string) *UpdateDomainRecordRequest {
	s.Value = &v
	return s
}

func (s *UpdateDomainRecordRequest) SetTTL(v int64) *UpdateDomainRecordRequest {
	s.TTL = &v
	return s
}

func (s *UpdateDomainRecordRequest) SetPriority(v int64) *UpdateDomainRecordRequest {
	s.Priority = &v
	return s
}

func (s *UpdateDomainRecordRequest) SetLine(v string) *UpdateDomainRecordRequest {
	s.Line = &v
	return s
}

type UpdateDomainRecordResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RecordId  *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
}

func (s UpdateDomainRecordResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateDomainRecordResponse) GoString() string {
	return s.String()
}

func (s *UpdateDomainRecordResponse) SetRequestId(v string) *UpdateDomainRecordResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateDomainRecordResponse) SetRecordId(v string) *UpdateDomainRecordResponse {
	s.RecordId = &v
	return s
}

type UpdateDomainGroupRequest struct {
	Lang      *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	GroupId   *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
}

func (s UpdateDomainGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateDomainGroupRequest) GoString() string {
	return s.String()
}

func (s *UpdateDomainGroupRequest) SetLang(v string) *UpdateDomainGroupRequest {
	s.Lang = &v
	return s
}

func (s *UpdateDomainGroupRequest) SetGroupId(v string) *UpdateDomainGroupRequest {
	s.GroupId = &v
	return s
}

func (s *UpdateDomainGroupRequest) SetGroupName(v string) *UpdateDomainGroupRequest {
	s.GroupName = &v
	return s
}

type UpdateDomainGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId   *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
}

func (s UpdateDomainGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateDomainGroupResponse) GoString() string {
	return s.String()
}

func (s *UpdateDomainGroupResponse) SetRequestId(v string) *UpdateDomainGroupResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateDomainGroupResponse) SetGroupId(v string) *UpdateDomainGroupResponse {
	s.GroupId = &v
	return s
}

func (s *UpdateDomainGroupResponse) SetGroupName(v string) *UpdateDomainGroupResponse {
	s.GroupName = &v
	return s
}

type UpdateDNSSLBWeightRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	RecordId     *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
	Weight       *int    `json:"Weight,omitempty" xml:"Weight,omitempty" require:"true"`
}

func (s UpdateDNSSLBWeightRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateDNSSLBWeightRequest) GoString() string {
	return s.String()
}

func (s *UpdateDNSSLBWeightRequest) SetLang(v string) *UpdateDNSSLBWeightRequest {
	s.Lang = &v
	return s
}

func (s *UpdateDNSSLBWeightRequest) SetUserClientIp(v string) *UpdateDNSSLBWeightRequest {
	s.UserClientIp = &v
	return s
}

func (s *UpdateDNSSLBWeightRequest) SetRecordId(v string) *UpdateDNSSLBWeightRequest {
	s.RecordId = &v
	return s
}

func (s *UpdateDNSSLBWeightRequest) SetWeight(v int) *UpdateDNSSLBWeightRequest {
	s.Weight = &v
	return s
}

type UpdateDNSSLBWeightResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RecordId  *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
	Weight    *int    `json:"Weight,omitempty" xml:"Weight,omitempty" require:"true"`
}

func (s UpdateDNSSLBWeightResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateDNSSLBWeightResponse) GoString() string {
	return s.String()
}

func (s *UpdateDNSSLBWeightResponse) SetRequestId(v string) *UpdateDNSSLBWeightResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateDNSSLBWeightResponse) SetRecordId(v string) *UpdateDNSSLBWeightResponse {
	s.RecordId = &v
	return s
}

func (s *UpdateDNSSLBWeightResponse) SetWeight(v int) *UpdateDNSSLBWeightResponse {
	s.Weight = &v
	return s
}

type SetDomainRecordStatusRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	RecordId     *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s SetDomainRecordStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDomainRecordStatusRequest) GoString() string {
	return s.String()
}

func (s *SetDomainRecordStatusRequest) SetLang(v string) *SetDomainRecordStatusRequest {
	s.Lang = &v
	return s
}

func (s *SetDomainRecordStatusRequest) SetUserClientIp(v string) *SetDomainRecordStatusRequest {
	s.UserClientIp = &v
	return s
}

func (s *SetDomainRecordStatusRequest) SetRecordId(v string) *SetDomainRecordStatusRequest {
	s.RecordId = &v
	return s
}

func (s *SetDomainRecordStatusRequest) SetStatus(v string) *SetDomainRecordStatusRequest {
	s.Status = &v
	return s
}

type SetDomainRecordStatusResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RecordId  *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
	Status    *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s SetDomainRecordStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDomainRecordStatusResponse) GoString() string {
	return s.String()
}

func (s *SetDomainRecordStatusResponse) SetRequestId(v string) *SetDomainRecordStatusResponse {
	s.RequestId = &v
	return s
}

func (s *SetDomainRecordStatusResponse) SetRecordId(v string) *SetDomainRecordStatusResponse {
	s.RecordId = &v
	return s
}

func (s *SetDomainRecordStatusResponse) SetStatus(v string) *SetDomainRecordStatusResponse {
	s.Status = &v
	return s
}

type SetDNSSLBStatusRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	SubDomain    *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	Open         *bool   `json:"Open,omitempty" xml:"Open,omitempty"`
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
	Type         *string `json:"Type,omitempty" xml:"Type,omitempty"`
}

func (s SetDNSSLBStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDNSSLBStatusRequest) GoString() string {
	return s.String()
}

func (s *SetDNSSLBStatusRequest) SetLang(v string) *SetDNSSLBStatusRequest {
	s.Lang = &v
	return s
}

func (s *SetDNSSLBStatusRequest) SetUserClientIp(v string) *SetDNSSLBStatusRequest {
	s.UserClientIp = &v
	return s
}

func (s *SetDNSSLBStatusRequest) SetSubDomain(v string) *SetDNSSLBStatusRequest {
	s.SubDomain = &v
	return s
}

func (s *SetDNSSLBStatusRequest) SetOpen(v bool) *SetDNSSLBStatusRequest {
	s.Open = &v
	return s
}

func (s *SetDNSSLBStatusRequest) SetDomainName(v string) *SetDNSSLBStatusRequest {
	s.DomainName = &v
	return s
}

func (s *SetDNSSLBStatusRequest) SetType(v string) *SetDNSSLBStatusRequest {
	s.Type = &v
	return s
}

type SetDNSSLBStatusResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RecordCount *int64  `json:"RecordCount,omitempty" xml:"RecordCount,omitempty" require:"true"`
	Open        *bool   `json:"Open,omitempty" xml:"Open,omitempty" require:"true"`
}

func (s SetDNSSLBStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDNSSLBStatusResponse) GoString() string {
	return s.String()
}

func (s *SetDNSSLBStatusResponse) SetRequestId(v string) *SetDNSSLBStatusResponse {
	s.RequestId = &v
	return s
}

func (s *SetDNSSLBStatusResponse) SetRecordCount(v int64) *SetDNSSLBStatusResponse {
	s.RecordCount = &v
	return s
}

func (s *SetDNSSLBStatusResponse) SetOpen(v bool) *SetDNSSLBStatusResponse {
	s.Open = &v
	return s
}

type ModifyHichinaDomainDNSRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s ModifyHichinaDomainDNSRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyHichinaDomainDNSRequest) GoString() string {
	return s.String()
}

func (s *ModifyHichinaDomainDNSRequest) SetLang(v string) *ModifyHichinaDomainDNSRequest {
	s.Lang = &v
	return s
}

func (s *ModifyHichinaDomainDNSRequest) SetUserClientIp(v string) *ModifyHichinaDomainDNSRequest {
	s.UserClientIp = &v
	return s
}

func (s *ModifyHichinaDomainDNSRequest) SetDomainName(v string) *ModifyHichinaDomainDNSRequest {
	s.DomainName = &v
	return s
}

type ModifyHichinaDomainDNSResponse struct {
	RequestId          *string                                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OriginalDnsServers *ModifyHichinaDomainDNSResponseOriginalDnsServers `json:"OriginalDnsServers,omitempty" xml:"OriginalDnsServers,omitempty" require:"true" type:"Struct"`
	NewDnsServers      *ModifyHichinaDomainDNSResponseNewDnsServers      `json:"NewDnsServers,omitempty" xml:"NewDnsServers,omitempty" require:"true" type:"Struct"`
}

func (s ModifyHichinaDomainDNSResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyHichinaDomainDNSResponse) GoString() string {
	return s.String()
}

func (s *ModifyHichinaDomainDNSResponse) SetRequestId(v string) *ModifyHichinaDomainDNSResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyHichinaDomainDNSResponse) SetOriginalDnsServers(v *ModifyHichinaDomainDNSResponseOriginalDnsServers) *ModifyHichinaDomainDNSResponse {
	s.OriginalDnsServers = v
	return s
}

func (s *ModifyHichinaDomainDNSResponse) SetNewDnsServers(v *ModifyHichinaDomainDNSResponseNewDnsServers) *ModifyHichinaDomainDNSResponse {
	s.NewDnsServers = v
	return s
}

type ModifyHichinaDomainDNSResponseOriginalDnsServers struct {
	DnsServer []*string `json:"DnsServer,omitempty" xml:"DnsServer,omitempty" require:"true" type:"Repeated"`
}

func (s ModifyHichinaDomainDNSResponseOriginalDnsServers) String() string {
	return tea.Prettify(s)
}

func (s ModifyHichinaDomainDNSResponseOriginalDnsServers) GoString() string {
	return s.String()
}

func (s *ModifyHichinaDomainDNSResponseOriginalDnsServers) SetDnsServer(v []*string) *ModifyHichinaDomainDNSResponseOriginalDnsServers {
	s.DnsServer = v
	return s
}

type ModifyHichinaDomainDNSResponseNewDnsServers struct {
	DnsServer []*string `json:"DnsServer,omitempty" xml:"DnsServer,omitempty" require:"true" type:"Repeated"`
}

func (s ModifyHichinaDomainDNSResponseNewDnsServers) String() string {
	return tea.Prettify(s)
}

func (s ModifyHichinaDomainDNSResponseNewDnsServers) GoString() string {
	return s.String()
}

func (s *ModifyHichinaDomainDNSResponseNewDnsServers) SetDnsServer(v []*string) *ModifyHichinaDomainDNSResponseNewDnsServers {
	s.DnsServer = v
	return s
}

type GetMainDomainNameRequest struct {
	Lang        *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InputString *string `json:"InputString,omitempty" xml:"InputString,omitempty" require:"true"`
}

func (s GetMainDomainNameRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMainDomainNameRequest) GoString() string {
	return s.String()
}

func (s *GetMainDomainNameRequest) SetLang(v string) *GetMainDomainNameRequest {
	s.Lang = &v
	return s
}

func (s *GetMainDomainNameRequest) SetInputString(v string) *GetMainDomainNameRequest {
	s.InputString = &v
	return s
}

type GetMainDomainNameResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainName  *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	RR          *string `json:"RR,omitempty" xml:"RR,omitempty" require:"true"`
	DomainLevel *int64  `json:"DomainLevel,omitempty" xml:"DomainLevel,omitempty" require:"true"`
}

func (s GetMainDomainNameResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMainDomainNameResponse) GoString() string {
	return s.String()
}

func (s *GetMainDomainNameResponse) SetRequestId(v string) *GetMainDomainNameResponse {
	s.RequestId = &v
	return s
}

func (s *GetMainDomainNameResponse) SetDomainName(v string) *GetMainDomainNameResponse {
	s.DomainName = &v
	return s
}

func (s *GetMainDomainNameResponse) SetRR(v string) *GetMainDomainNameResponse {
	s.RR = &v
	return s
}

func (s *GetMainDomainNameResponse) SetDomainLevel(v int64) *GetMainDomainNameResponse {
	s.DomainLevel = &v
	return s
}

type DescribeSubDomainRecordsRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	SubDomain    *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	PageNumber   *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize     *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	Type         *string `json:"Type,omitempty" xml:"Type,omitempty"`
	Line         *string `json:"Line,omitempty" xml:"Line,omitempty"`
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
}

func (s DescribeSubDomainRecordsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSubDomainRecordsRequest) GoString() string {
	return s.String()
}

func (s *DescribeSubDomainRecordsRequest) SetLang(v string) *DescribeSubDomainRecordsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeSubDomainRecordsRequest) SetUserClientIp(v string) *DescribeSubDomainRecordsRequest {
	s.UserClientIp = &v
	return s
}

func (s *DescribeSubDomainRecordsRequest) SetSubDomain(v string) *DescribeSubDomainRecordsRequest {
	s.SubDomain = &v
	return s
}

func (s *DescribeSubDomainRecordsRequest) SetPageNumber(v int64) *DescribeSubDomainRecordsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeSubDomainRecordsRequest) SetPageSize(v int64) *DescribeSubDomainRecordsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeSubDomainRecordsRequest) SetType(v string) *DescribeSubDomainRecordsRequest {
	s.Type = &v
	return s
}

func (s *DescribeSubDomainRecordsRequest) SetLine(v string) *DescribeSubDomainRecordsRequest {
	s.Line = &v
	return s
}

func (s *DescribeSubDomainRecordsRequest) SetDomainName(v string) *DescribeSubDomainRecordsRequest {
	s.DomainName = &v
	return s
}

type DescribeSubDomainRecordsResponse struct {
	RequestId     *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount    *int64                                         `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber    *int64                                         `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *int64                                         `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	DomainRecords *DescribeSubDomainRecordsResponseDomainRecords `json:"DomainRecords,omitempty" xml:"DomainRecords,omitempty" require:"true" type:"Struct"`
}

func (s DescribeSubDomainRecordsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSubDomainRecordsResponse) GoString() string {
	return s.String()
}

func (s *DescribeSubDomainRecordsResponse) SetRequestId(v string) *DescribeSubDomainRecordsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSubDomainRecordsResponse) SetTotalCount(v int64) *DescribeSubDomainRecordsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeSubDomainRecordsResponse) SetPageNumber(v int64) *DescribeSubDomainRecordsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeSubDomainRecordsResponse) SetPageSize(v int64) *DescribeSubDomainRecordsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeSubDomainRecordsResponse) SetDomainRecords(v *DescribeSubDomainRecordsResponseDomainRecords) *DescribeSubDomainRecordsResponse {
	s.DomainRecords = v
	return s
}

type DescribeSubDomainRecordsResponseDomainRecords struct {
	Record []*DescribeSubDomainRecordsResponseDomainRecordsRecord `json:"Record,omitempty" xml:"Record,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeSubDomainRecordsResponseDomainRecords) String() string {
	return tea.Prettify(s)
}

func (s DescribeSubDomainRecordsResponseDomainRecords) GoString() string {
	return s.String()
}

func (s *DescribeSubDomainRecordsResponseDomainRecords) SetRecord(v []*DescribeSubDomainRecordsResponseDomainRecordsRecord) *DescribeSubDomainRecordsResponseDomainRecords {
	s.Record = v
	return s
}

type DescribeSubDomainRecordsResponseDomainRecordsRecord struct {
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	RecordId   *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
	RR         *string `json:"RR,omitempty" xml:"RR,omitempty" require:"true"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Value      *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	TTL        *int64  `json:"TTL,omitempty" xml:"TTL,omitempty" require:"true"`
	Priority   *int64  `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	Line       *string `json:"Line,omitempty" xml:"Line,omitempty" require:"true"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Locked     *bool   `json:"Locked,omitempty" xml:"Locked,omitempty" require:"true"`
	Weight     *int    `json:"Weight,omitempty" xml:"Weight,omitempty" require:"true"`
}

func (s DescribeSubDomainRecordsResponseDomainRecordsRecord) String() string {
	return tea.Prettify(s)
}

func (s DescribeSubDomainRecordsResponseDomainRecordsRecord) GoString() string {
	return s.String()
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetDomainName(v string) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.DomainName = &v
	return s
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetRecordId(v string) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.RecordId = &v
	return s
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetRR(v string) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.RR = &v
	return s
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetType(v string) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.Type = &v
	return s
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetValue(v string) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.Value = &v
	return s
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetTTL(v int64) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.TTL = &v
	return s
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetPriority(v int64) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.Priority = &v
	return s
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetLine(v string) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.Line = &v
	return s
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetStatus(v string) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.Status = &v
	return s
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetLocked(v bool) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.Locked = &v
	return s
}

func (s *DescribeSubDomainRecordsResponseDomainRecordsRecord) SetWeight(v int) *DescribeSubDomainRecordsResponseDomainRecordsRecord {
	s.Weight = &v
	return s
}

type DescribeRecordLogsRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	PageNumber   *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize     *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	KeyWord      *string `json:"KeyWord,omitempty" xml:"KeyWord,omitempty"`
	StartDate    *string `json:"StartDate,omitempty" xml:"StartDate,omitempty"`
	EndDate      *string `json:"endDate,omitempty" xml:"endDate,omitempty"`
}

func (s DescribeRecordLogsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordLogsRequest) GoString() string {
	return s.String()
}

func (s *DescribeRecordLogsRequest) SetLang(v string) *DescribeRecordLogsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeRecordLogsRequest) SetUserClientIp(v string) *DescribeRecordLogsRequest {
	s.UserClientIp = &v
	return s
}

func (s *DescribeRecordLogsRequest) SetDomainName(v string) *DescribeRecordLogsRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeRecordLogsRequest) SetPageNumber(v int64) *DescribeRecordLogsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeRecordLogsRequest) SetPageSize(v int64) *DescribeRecordLogsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeRecordLogsRequest) SetKeyWord(v string) *DescribeRecordLogsRequest {
	s.KeyWord = &v
	return s
}

func (s *DescribeRecordLogsRequest) SetStartDate(v string) *DescribeRecordLogsRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeRecordLogsRequest) SetEndDate(v string) *DescribeRecordLogsRequest {
	s.EndDate = &v
	return s
}

type DescribeRecordLogsResponse struct {
	RequestId  *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int64                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber *int64                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int64                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	RecordLogs *DescribeRecordLogsResponseRecordLogs `json:"RecordLogs,omitempty" xml:"RecordLogs,omitempty" require:"true" type:"Struct"`
}

func (s DescribeRecordLogsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordLogsResponse) GoString() string {
	return s.String()
}

func (s *DescribeRecordLogsResponse) SetRequestId(v string) *DescribeRecordLogsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeRecordLogsResponse) SetTotalCount(v int64) *DescribeRecordLogsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeRecordLogsResponse) SetPageNumber(v int64) *DescribeRecordLogsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeRecordLogsResponse) SetPageSize(v int64) *DescribeRecordLogsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeRecordLogsResponse) SetRecordLogs(v *DescribeRecordLogsResponseRecordLogs) *DescribeRecordLogsResponse {
	s.RecordLogs = v
	return s
}

type DescribeRecordLogsResponseRecordLogs struct {
	RecordLog []*DescribeRecordLogsResponseRecordLogsRecordLog `json:"RecordLog,omitempty" xml:"RecordLog,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeRecordLogsResponseRecordLogs) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordLogsResponseRecordLogs) GoString() string {
	return s.String()
}

func (s *DescribeRecordLogsResponseRecordLogs) SetRecordLog(v []*DescribeRecordLogsResponseRecordLogsRecordLog) *DescribeRecordLogsResponseRecordLogs {
	s.RecordLog = v
	return s
}

type DescribeRecordLogsResponseRecordLogsRecordLog struct {
	ActionTime      *string `json:"ActionTime,omitempty" xml:"ActionTime,omitempty" require:"true"`
	ActionTimestamp *int64  `json:"ActionTimestamp,omitempty" xml:"ActionTimestamp,omitempty" require:"true"`
	Action          *string `json:"Action,omitempty" xml:"Action,omitempty" require:"true"`
	Message         *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	ClientIp        *string `json:"ClientIp,omitempty" xml:"ClientIp,omitempty" require:"true"`
}

func (s DescribeRecordLogsResponseRecordLogsRecordLog) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordLogsResponseRecordLogsRecordLog) GoString() string {
	return s.String()
}

func (s *DescribeRecordLogsResponseRecordLogsRecordLog) SetActionTime(v string) *DescribeRecordLogsResponseRecordLogsRecordLog {
	s.ActionTime = &v
	return s
}

func (s *DescribeRecordLogsResponseRecordLogsRecordLog) SetActionTimestamp(v int64) *DescribeRecordLogsResponseRecordLogsRecordLog {
	s.ActionTimestamp = &v
	return s
}

func (s *DescribeRecordLogsResponseRecordLogsRecordLog) SetAction(v string) *DescribeRecordLogsResponseRecordLogsRecordLog {
	s.Action = &v
	return s
}

func (s *DescribeRecordLogsResponseRecordLogsRecordLog) SetMessage(v string) *DescribeRecordLogsResponseRecordLogsRecordLog {
	s.Message = &v
	return s
}

func (s *DescribeRecordLogsResponseRecordLogsRecordLog) SetClientIp(v string) *DescribeRecordLogsResponseRecordLogsRecordLog {
	s.ClientIp = &v
	return s
}

type DescribeDomainsRequest struct {
	Lang            *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	KeyWord         *string `json:"KeyWord,omitempty" xml:"KeyWord,omitempty"`
	GroupId         *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	PageNumber      *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize        *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	SearchMode      *string `json:"SearchMode,omitempty" xml:"SearchMode,omitempty"`
	ResourceGroupId *string `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty"`
	Starmark        *bool   `json:"Starmark,omitempty" xml:"Starmark,omitempty"`
}

func (s DescribeDomainsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainsRequest) SetLang(v string) *DescribeDomainsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainsRequest) SetKeyWord(v string) *DescribeDomainsRequest {
	s.KeyWord = &v
	return s
}

func (s *DescribeDomainsRequest) SetGroupId(v string) *DescribeDomainsRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainsRequest) SetPageNumber(v int64) *DescribeDomainsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDomainsRequest) SetPageSize(v int64) *DescribeDomainsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDomainsRequest) SetSearchMode(v string) *DescribeDomainsRequest {
	s.SearchMode = &v
	return s
}

func (s *DescribeDomainsRequest) SetResourceGroupId(v string) *DescribeDomainsRequest {
	s.ResourceGroupId = &v
	return s
}

func (s *DescribeDomainsRequest) SetStarmark(v bool) *DescribeDomainsRequest {
	s.Starmark = &v
	return s
}

type DescribeDomainsResponse struct {
	RequestId  *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int64                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber *int64                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int64                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Domains    *DescribeDomainsResponseDomains `json:"Domains,omitempty" xml:"Domains,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainsResponse) SetRequestId(v string) *DescribeDomainsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainsResponse) SetTotalCount(v int64) *DescribeDomainsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeDomainsResponse) SetPageNumber(v int64) *DescribeDomainsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDomainsResponse) SetPageSize(v int64) *DescribeDomainsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDomainsResponse) SetDomains(v *DescribeDomainsResponseDomains) *DescribeDomainsResponse {
	s.Domains = v
	return s
}

type DescribeDomainsResponseDomains struct {
	Domain []*DescribeDomainsResponseDomainsDomain `json:"Domain,omitempty" xml:"Domain,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainsResponseDomains) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsResponseDomains) GoString() string {
	return s.String()
}

func (s *DescribeDomainsResponseDomains) SetDomain(v []*DescribeDomainsResponseDomainsDomain) *DescribeDomainsResponseDomains {
	s.Domain = v
	return s
}

type DescribeDomainsResponseDomainsDomain struct {
	DomainId        *string                                         `json:"DomainId,omitempty" xml:"DomainId,omitempty" require:"true"`
	DomainName      *string                                         `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	PunyCode        *string                                         `json:"PunyCode,omitempty" xml:"PunyCode,omitempty" require:"true"`
	AliDomain       *bool                                           `json:"AliDomain,omitempty" xml:"AliDomain,omitempty" require:"true"`
	RecordCount     *int64                                          `json:"RecordCount,omitempty" xml:"RecordCount,omitempty" require:"true"`
	RegistrantEmail *string                                         `json:"RegistrantEmail,omitempty" xml:"RegistrantEmail,omitempty" require:"true"`
	Remark          *string                                         `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
	GroupId         *string                                         `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName       *string                                         `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	InstanceId      *string                                         `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	VersionCode     *string                                         `json:"VersionCode,omitempty" xml:"VersionCode,omitempty" require:"true"`
	VersionName     *string                                         `json:"VersionName,omitempty" xml:"VersionName,omitempty" require:"true"`
	InstanceEndTime *string                                         `json:"InstanceEndTime,omitempty" xml:"InstanceEndTime,omitempty" require:"true"`
	InstanceExpired *bool                                           `json:"InstanceExpired,omitempty" xml:"InstanceExpired,omitempty" require:"true"`
	Starmark        *bool                                           `json:"Starmark,omitempty" xml:"Starmark,omitempty" require:"true"`
	CreateTime      *string                                         `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateTimestamp *int64                                          `json:"CreateTimestamp,omitempty" xml:"CreateTimestamp,omitempty" require:"true"`
	ResourceGroupId *string                                         `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty" require:"true"`
	Tags            *DescribeDomainsResponseDomainsDomainTags       `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Struct"`
	DnsServers      *DescribeDomainsResponseDomainsDomainDnsServers `json:"DnsServers,omitempty" xml:"DnsServers,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainsResponseDomainsDomain) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsResponseDomainsDomain) GoString() string {
	return s.String()
}

func (s *DescribeDomainsResponseDomainsDomain) SetDomainId(v string) *DescribeDomainsResponseDomainsDomain {
	s.DomainId = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetDomainName(v string) *DescribeDomainsResponseDomainsDomain {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetPunyCode(v string) *DescribeDomainsResponseDomainsDomain {
	s.PunyCode = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetAliDomain(v bool) *DescribeDomainsResponseDomainsDomain {
	s.AliDomain = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetRecordCount(v int64) *DescribeDomainsResponseDomainsDomain {
	s.RecordCount = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetRegistrantEmail(v string) *DescribeDomainsResponseDomainsDomain {
	s.RegistrantEmail = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetRemark(v string) *DescribeDomainsResponseDomainsDomain {
	s.Remark = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetGroupId(v string) *DescribeDomainsResponseDomainsDomain {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetGroupName(v string) *DescribeDomainsResponseDomainsDomain {
	s.GroupName = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetInstanceId(v string) *DescribeDomainsResponseDomainsDomain {
	s.InstanceId = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetVersionCode(v string) *DescribeDomainsResponseDomainsDomain {
	s.VersionCode = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetVersionName(v string) *DescribeDomainsResponseDomainsDomain {
	s.VersionName = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetInstanceEndTime(v string) *DescribeDomainsResponseDomainsDomain {
	s.InstanceEndTime = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetInstanceExpired(v bool) *DescribeDomainsResponseDomainsDomain {
	s.InstanceExpired = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetStarmark(v bool) *DescribeDomainsResponseDomainsDomain {
	s.Starmark = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetCreateTime(v string) *DescribeDomainsResponseDomainsDomain {
	s.CreateTime = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetCreateTimestamp(v int64) *DescribeDomainsResponseDomainsDomain {
	s.CreateTimestamp = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetResourceGroupId(v string) *DescribeDomainsResponseDomainsDomain {
	s.ResourceGroupId = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetTags(v *DescribeDomainsResponseDomainsDomainTags) *DescribeDomainsResponseDomainsDomain {
	s.Tags = v
	return s
}

func (s *DescribeDomainsResponseDomainsDomain) SetDnsServers(v *DescribeDomainsResponseDomainsDomainDnsServers) *DescribeDomainsResponseDomainsDomain {
	s.DnsServers = v
	return s
}

type DescribeDomainsResponseDomainsDomainTags struct {
	Tag []*DescribeDomainsResponseDomainsDomainTagsTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainsResponseDomainsDomainTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsResponseDomainsDomainTags) GoString() string {
	return s.String()
}

func (s *DescribeDomainsResponseDomainsDomainTags) SetTag(v []*DescribeDomainsResponseDomainsDomainTagsTag) *DescribeDomainsResponseDomainsDomainTags {
	s.Tag = v
	return s
}

type DescribeDomainsResponseDomainsDomainTagsTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeDomainsResponseDomainsDomainTagsTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsResponseDomainsDomainTagsTag) GoString() string {
	return s.String()
}

func (s *DescribeDomainsResponseDomainsDomainTagsTag) SetKey(v string) *DescribeDomainsResponseDomainsDomainTagsTag {
	s.Key = &v
	return s
}

func (s *DescribeDomainsResponseDomainsDomainTagsTag) SetValue(v string) *DescribeDomainsResponseDomainsDomainTagsTag {
	s.Value = &v
	return s
}

type DescribeDomainsResponseDomainsDomainDnsServers struct {
	DnsServer []*string `json:"DnsServer,omitempty" xml:"DnsServer,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainsResponseDomainsDomainDnsServers) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsResponseDomainsDomainDnsServers) GoString() string {
	return s.String()
}

func (s *DescribeDomainsResponseDomainsDomainDnsServers) SetDnsServer(v []*string) *DescribeDomainsResponseDomainsDomainDnsServers {
	s.DnsServer = v
	return s
}

type DescribeDomainRecordsRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	PageNumber   *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize     *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	KeyWord      *string `json:"KeyWord,omitempty" xml:"KeyWord,omitempty"`
	RRKeyWord    *string `json:"RRKeyWord,omitempty" xml:"RRKeyWord,omitempty"`
	TypeKeyWord  *string `json:"TypeKeyWord,omitempty" xml:"TypeKeyWord,omitempty"`
	ValueKeyWord *string `json:"ValueKeyWord,omitempty" xml:"ValueKeyWord,omitempty"`
	OrderBy      *string `json:"OrderBy,omitempty" xml:"OrderBy,omitempty"`
	Direction    *string `json:"Direction,omitempty" xml:"Direction,omitempty"`
	SearchMode   *string `json:"SearchMode,omitempty" xml:"SearchMode,omitempty"`
	GroupId      *int64  `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	Type         *string `json:"Type,omitempty" xml:"Type,omitempty"`
	Line         *string `json:"Line,omitempty" xml:"Line,omitempty"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty"`
}

func (s DescribeDomainRecordsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainRecordsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainRecordsRequest) SetLang(v string) *DescribeDomainRecordsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetDomainName(v string) *DescribeDomainRecordsRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetPageNumber(v int64) *DescribeDomainRecordsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetPageSize(v int64) *DescribeDomainRecordsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetKeyWord(v string) *DescribeDomainRecordsRequest {
	s.KeyWord = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetRRKeyWord(v string) *DescribeDomainRecordsRequest {
	s.RRKeyWord = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetTypeKeyWord(v string) *DescribeDomainRecordsRequest {
	s.TypeKeyWord = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetValueKeyWord(v string) *DescribeDomainRecordsRequest {
	s.ValueKeyWord = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetOrderBy(v string) *DescribeDomainRecordsRequest {
	s.OrderBy = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetDirection(v string) *DescribeDomainRecordsRequest {
	s.Direction = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetSearchMode(v string) *DescribeDomainRecordsRequest {
	s.SearchMode = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetGroupId(v int64) *DescribeDomainRecordsRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetType(v string) *DescribeDomainRecordsRequest {
	s.Type = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetLine(v string) *DescribeDomainRecordsRequest {
	s.Line = &v
	return s
}

func (s *DescribeDomainRecordsRequest) SetStatus(v string) *DescribeDomainRecordsRequest {
	s.Status = &v
	return s
}

type DescribeDomainRecordsResponse struct {
	RequestId     *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount    *int64                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber    *int64                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *int64                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	DomainRecords *DescribeDomainRecordsResponseDomainRecords `json:"DomainRecords,omitempty" xml:"DomainRecords,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainRecordsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainRecordsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainRecordsResponse) SetRequestId(v string) *DescribeDomainRecordsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainRecordsResponse) SetTotalCount(v int64) *DescribeDomainRecordsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeDomainRecordsResponse) SetPageNumber(v int64) *DescribeDomainRecordsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDomainRecordsResponse) SetPageSize(v int64) *DescribeDomainRecordsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDomainRecordsResponse) SetDomainRecords(v *DescribeDomainRecordsResponseDomainRecords) *DescribeDomainRecordsResponse {
	s.DomainRecords = v
	return s
}

type DescribeDomainRecordsResponseDomainRecords struct {
	Record []*DescribeDomainRecordsResponseDomainRecordsRecord `json:"Record,omitempty" xml:"Record,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainRecordsResponseDomainRecords) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainRecordsResponseDomainRecords) GoString() string {
	return s.String()
}

func (s *DescribeDomainRecordsResponseDomainRecords) SetRecord(v []*DescribeDomainRecordsResponseDomainRecordsRecord) *DescribeDomainRecordsResponseDomainRecords {
	s.Record = v
	return s
}

type DescribeDomainRecordsResponseDomainRecordsRecord struct {
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	RecordId   *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
	RR         *string `json:"RR,omitempty" xml:"RR,omitempty" require:"true"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Value      *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	TTL        *int64  `json:"TTL,omitempty" xml:"TTL,omitempty" require:"true"`
	Priority   *int64  `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	Line       *string `json:"Line,omitempty" xml:"Line,omitempty" require:"true"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Locked     *bool   `json:"Locked,omitempty" xml:"Locked,omitempty" require:"true"`
	Weight     *int    `json:"Weight,omitempty" xml:"Weight,omitempty" require:"true"`
	Remark     *string `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
}

func (s DescribeDomainRecordsResponseDomainRecordsRecord) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainRecordsResponseDomainRecordsRecord) GoString() string {
	return s.String()
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetDomainName(v string) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetRecordId(v string) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.RecordId = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetRR(v string) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.RR = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetType(v string) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.Type = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetValue(v string) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.Value = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetTTL(v int64) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.TTL = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetPriority(v int64) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.Priority = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetLine(v string) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.Line = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetStatus(v string) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.Status = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetLocked(v bool) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.Locked = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetWeight(v int) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.Weight = &v
	return s
}

func (s *DescribeDomainRecordsResponseDomainRecordsRecord) SetRemark(v string) *DescribeDomainRecordsResponseDomainRecordsRecord {
	s.Remark = &v
	return s
}

type DescribeDomainRecordInfoRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	RecordId     *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
}

func (s DescribeDomainRecordInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainRecordInfoRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainRecordInfoRequest) SetLang(v string) *DescribeDomainRecordInfoRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainRecordInfoRequest) SetUserClientIp(v string) *DescribeDomainRecordInfoRequest {
	s.UserClientIp = &v
	return s
}

func (s *DescribeDomainRecordInfoRequest) SetRecordId(v string) *DescribeDomainRecordInfoRequest {
	s.RecordId = &v
	return s
}

type DescribeDomainRecordInfoResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainId   *string `json:"DomainId,omitempty" xml:"DomainId,omitempty" require:"true"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	PunyCode   *string `json:"PunyCode,omitempty" xml:"PunyCode,omitempty" require:"true"`
	GroupId    *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName  *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	RecordId   *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
	RR         *string `json:"RR,omitempty" xml:"RR,omitempty" require:"true"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Value      *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	TTL        *int64  `json:"TTL,omitempty" xml:"TTL,omitempty" require:"true"`
	Priority   *int64  `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	Line       *string `json:"Line,omitempty" xml:"Line,omitempty" require:"true"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Locked     *bool   `json:"Locked,omitempty" xml:"Locked,omitempty" require:"true"`
}

func (s DescribeDomainRecordInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainRecordInfoResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainRecordInfoResponse) SetRequestId(v string) *DescribeDomainRecordInfoResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetDomainId(v string) *DescribeDomainRecordInfoResponse {
	s.DomainId = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetDomainName(v string) *DescribeDomainRecordInfoResponse {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetPunyCode(v string) *DescribeDomainRecordInfoResponse {
	s.PunyCode = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetGroupId(v string) *DescribeDomainRecordInfoResponse {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetGroupName(v string) *DescribeDomainRecordInfoResponse {
	s.GroupName = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetRecordId(v string) *DescribeDomainRecordInfoResponse {
	s.RecordId = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetRR(v string) *DescribeDomainRecordInfoResponse {
	s.RR = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetType(v string) *DescribeDomainRecordInfoResponse {
	s.Type = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetValue(v string) *DescribeDomainRecordInfoResponse {
	s.Value = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetTTL(v int64) *DescribeDomainRecordInfoResponse {
	s.TTL = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetPriority(v int64) *DescribeDomainRecordInfoResponse {
	s.Priority = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetLine(v string) *DescribeDomainRecordInfoResponse {
	s.Line = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetStatus(v string) *DescribeDomainRecordInfoResponse {
	s.Status = &v
	return s
}

func (s *DescribeDomainRecordInfoResponse) SetLocked(v bool) *DescribeDomainRecordInfoResponse {
	s.Locked = &v
	return s
}

type DescribeDomainLogsRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	KeyWord    *string `json:"KeyWord,omitempty" xml:"KeyWord,omitempty"`
	GroupId    *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	PageNumber *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	StartDate  *string `json:"StartDate,omitempty" xml:"StartDate,omitempty"`
	EndDate    *string `json:"endDate,omitempty" xml:"endDate,omitempty"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty"`
}

func (s DescribeDomainLogsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainLogsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainLogsRequest) SetLang(v string) *DescribeDomainLogsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainLogsRequest) SetKeyWord(v string) *DescribeDomainLogsRequest {
	s.KeyWord = &v
	return s
}

func (s *DescribeDomainLogsRequest) SetGroupId(v string) *DescribeDomainLogsRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainLogsRequest) SetPageNumber(v int64) *DescribeDomainLogsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDomainLogsRequest) SetPageSize(v int64) *DescribeDomainLogsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDomainLogsRequest) SetStartDate(v string) *DescribeDomainLogsRequest {
	s.StartDate = &v
	return s
}

func (s *DescribeDomainLogsRequest) SetEndDate(v string) *DescribeDomainLogsRequest {
	s.EndDate = &v
	return s
}

func (s *DescribeDomainLogsRequest) SetType(v string) *DescribeDomainLogsRequest {
	s.Type = &v
	return s
}

type DescribeDomainLogsResponse struct {
	RequestId  *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int64                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber *int64                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int64                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	DomainLogs *DescribeDomainLogsResponseDomainLogs `json:"DomainLogs,omitempty" xml:"DomainLogs,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainLogsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainLogsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainLogsResponse) SetRequestId(v string) *DescribeDomainLogsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainLogsResponse) SetTotalCount(v int64) *DescribeDomainLogsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeDomainLogsResponse) SetPageNumber(v int64) *DescribeDomainLogsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDomainLogsResponse) SetPageSize(v int64) *DescribeDomainLogsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDomainLogsResponse) SetDomainLogs(v *DescribeDomainLogsResponseDomainLogs) *DescribeDomainLogsResponse {
	s.DomainLogs = v
	return s
}

type DescribeDomainLogsResponseDomainLogs struct {
	DomainLog []*DescribeDomainLogsResponseDomainLogsDomainLog `json:"DomainLog,omitempty" xml:"DomainLog,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainLogsResponseDomainLogs) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainLogsResponseDomainLogs) GoString() string {
	return s.String()
}

func (s *DescribeDomainLogsResponseDomainLogs) SetDomainLog(v []*DescribeDomainLogsResponseDomainLogsDomainLog) *DescribeDomainLogsResponseDomainLogs {
	s.DomainLog = v
	return s
}

type DescribeDomainLogsResponseDomainLogsDomainLog struct {
	ActionTime      *string `json:"ActionTime,omitempty" xml:"ActionTime,omitempty" require:"true"`
	ActionTimestamp *int64  `json:"ActionTimestamp,omitempty" xml:"ActionTimestamp,omitempty" require:"true"`
	DomainName      *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	Action          *string `json:"Action,omitempty" xml:"Action,omitempty" require:"true"`
	Message         *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	ClientIp        *string `json:"ClientIp,omitempty" xml:"ClientIp,omitempty" require:"true"`
	ZoneId          *string `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
}

func (s DescribeDomainLogsResponseDomainLogsDomainLog) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainLogsResponseDomainLogsDomainLog) GoString() string {
	return s.String()
}

func (s *DescribeDomainLogsResponseDomainLogsDomainLog) SetActionTime(v string) *DescribeDomainLogsResponseDomainLogsDomainLog {
	s.ActionTime = &v
	return s
}

func (s *DescribeDomainLogsResponseDomainLogsDomainLog) SetActionTimestamp(v int64) *DescribeDomainLogsResponseDomainLogsDomainLog {
	s.ActionTimestamp = &v
	return s
}

func (s *DescribeDomainLogsResponseDomainLogsDomainLog) SetDomainName(v string) *DescribeDomainLogsResponseDomainLogsDomainLog {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainLogsResponseDomainLogsDomainLog) SetAction(v string) *DescribeDomainLogsResponseDomainLogsDomainLog {
	s.Action = &v
	return s
}

func (s *DescribeDomainLogsResponseDomainLogsDomainLog) SetMessage(v string) *DescribeDomainLogsResponseDomainLogsDomainLog {
	s.Message = &v
	return s
}

func (s *DescribeDomainLogsResponseDomainLogsDomainLog) SetClientIp(v string) *DescribeDomainLogsResponseDomainLogsDomainLog {
	s.ClientIp = &v
	return s
}

func (s *DescribeDomainLogsResponseDomainLogsDomainLog) SetZoneId(v string) *DescribeDomainLogsResponseDomainLogsDomainLog {
	s.ZoneId = &v
	return s
}

type DescribeDomainInfoRequest struct {
	Lang                 *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName           *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	NeedDetailAttributes *bool   `json:"NeedDetailAttributes,omitempty" xml:"NeedDetailAttributes,omitempty"`
}

func (s DescribeDomainInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainInfoRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainInfoRequest) SetLang(v string) *DescribeDomainInfoRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainInfoRequest) SetDomainName(v string) *DescribeDomainInfoRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainInfoRequest) SetNeedDetailAttributes(v bool) *DescribeDomainInfoRequest {
	s.NeedDetailAttributes = &v
	return s
}

type DescribeDomainInfoResponse struct {
	RequestId          *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainId           *string                                  `json:"DomainId,omitempty" xml:"DomainId,omitempty" require:"true"`
	DomainName         *string                                  `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	PunyCode           *string                                  `json:"PunyCode,omitempty" xml:"PunyCode,omitempty" require:"true"`
	AliDomain          *bool                                    `json:"AliDomain,omitempty" xml:"AliDomain,omitempty" require:"true"`
	Remark             *string                                  `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
	GroupId            *string                                  `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName          *string                                  `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	InstanceId         *string                                  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	VersionCode        *string                                  `json:"VersionCode,omitempty" xml:"VersionCode,omitempty" require:"true"`
	VersionName        *string                                  `json:"VersionName,omitempty" xml:"VersionName,omitempty" require:"true"`
	MinTtl             *int64                                   `json:"MinTtl,omitempty" xml:"MinTtl,omitempty" require:"true"`
	RecordLineTreeJson *string                                  `json:"RecordLineTreeJson,omitempty" xml:"RecordLineTreeJson,omitempty" require:"true"`
	LineType           *string                                  `json:"LineType,omitempty" xml:"LineType,omitempty" require:"true"`
	RegionLines        *bool                                    `json:"RegionLines,omitempty" xml:"RegionLines,omitempty" require:"true"`
	InBlackHole        *bool                                    `json:"InBlackHole,omitempty" xml:"InBlackHole,omitempty" require:"true"`
	InClean            *bool                                    `json:"InClean,omitempty" xml:"InClean,omitempty" require:"true"`
	SlaveDns           *bool                                    `json:"SlaveDns,omitempty" xml:"SlaveDns,omitempty" require:"true"`
	ResourceGroupId    *string                                  `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty" require:"true"`
	RecordLines        *DescribeDomainInfoResponseRecordLines   `json:"RecordLines,omitempty" xml:"RecordLines,omitempty" require:"true" type:"Struct"`
	DnsServers         *DescribeDomainInfoResponseDnsServers    `json:"DnsServers,omitempty" xml:"DnsServers,omitempty" require:"true" type:"Struct"`
	AvailableTtls      *DescribeDomainInfoResponseAvailableTtls `json:"AvailableTtls,omitempty" xml:"AvailableTtls,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainInfoResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainInfoResponse) SetRequestId(v string) *DescribeDomainInfoResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetDomainId(v string) *DescribeDomainInfoResponse {
	s.DomainId = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetDomainName(v string) *DescribeDomainInfoResponse {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetPunyCode(v string) *DescribeDomainInfoResponse {
	s.PunyCode = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetAliDomain(v bool) *DescribeDomainInfoResponse {
	s.AliDomain = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetRemark(v string) *DescribeDomainInfoResponse {
	s.Remark = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetGroupId(v string) *DescribeDomainInfoResponse {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetGroupName(v string) *DescribeDomainInfoResponse {
	s.GroupName = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetInstanceId(v string) *DescribeDomainInfoResponse {
	s.InstanceId = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetVersionCode(v string) *DescribeDomainInfoResponse {
	s.VersionCode = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetVersionName(v string) *DescribeDomainInfoResponse {
	s.VersionName = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetMinTtl(v int64) *DescribeDomainInfoResponse {
	s.MinTtl = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetRecordLineTreeJson(v string) *DescribeDomainInfoResponse {
	s.RecordLineTreeJson = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetLineType(v string) *DescribeDomainInfoResponse {
	s.LineType = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetRegionLines(v bool) *DescribeDomainInfoResponse {
	s.RegionLines = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetInBlackHole(v bool) *DescribeDomainInfoResponse {
	s.InBlackHole = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetInClean(v bool) *DescribeDomainInfoResponse {
	s.InClean = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetSlaveDns(v bool) *DescribeDomainInfoResponse {
	s.SlaveDns = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetResourceGroupId(v string) *DescribeDomainInfoResponse {
	s.ResourceGroupId = &v
	return s
}

func (s *DescribeDomainInfoResponse) SetRecordLines(v *DescribeDomainInfoResponseRecordLines) *DescribeDomainInfoResponse {
	s.RecordLines = v
	return s
}

func (s *DescribeDomainInfoResponse) SetDnsServers(v *DescribeDomainInfoResponseDnsServers) *DescribeDomainInfoResponse {
	s.DnsServers = v
	return s
}

func (s *DescribeDomainInfoResponse) SetAvailableTtls(v *DescribeDomainInfoResponseAvailableTtls) *DescribeDomainInfoResponse {
	s.AvailableTtls = v
	return s
}

type DescribeDomainInfoResponseRecordLines struct {
	RecordLine []*DescribeDomainInfoResponseRecordLinesRecordLine `json:"RecordLine,omitempty" xml:"RecordLine,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainInfoResponseRecordLines) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainInfoResponseRecordLines) GoString() string {
	return s.String()
}

func (s *DescribeDomainInfoResponseRecordLines) SetRecordLine(v []*DescribeDomainInfoResponseRecordLinesRecordLine) *DescribeDomainInfoResponseRecordLines {
	s.RecordLine = v
	return s
}

type DescribeDomainInfoResponseRecordLinesRecordLine struct {
	LineCode        *string `json:"LineCode,omitempty" xml:"LineCode,omitempty" require:"true"`
	FatherCode      *string `json:"FatherCode,omitempty" xml:"FatherCode,omitempty" require:"true"`
	LineName        *string `json:"LineName,omitempty" xml:"LineName,omitempty" require:"true"`
	LineDisplayName *string `json:"LineDisplayName,omitempty" xml:"LineDisplayName,omitempty" require:"true"`
}

func (s DescribeDomainInfoResponseRecordLinesRecordLine) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainInfoResponseRecordLinesRecordLine) GoString() string {
	return s.String()
}

func (s *DescribeDomainInfoResponseRecordLinesRecordLine) SetLineCode(v string) *DescribeDomainInfoResponseRecordLinesRecordLine {
	s.LineCode = &v
	return s
}

func (s *DescribeDomainInfoResponseRecordLinesRecordLine) SetFatherCode(v string) *DescribeDomainInfoResponseRecordLinesRecordLine {
	s.FatherCode = &v
	return s
}

func (s *DescribeDomainInfoResponseRecordLinesRecordLine) SetLineName(v string) *DescribeDomainInfoResponseRecordLinesRecordLine {
	s.LineName = &v
	return s
}

func (s *DescribeDomainInfoResponseRecordLinesRecordLine) SetLineDisplayName(v string) *DescribeDomainInfoResponseRecordLinesRecordLine {
	s.LineDisplayName = &v
	return s
}

type DescribeDomainInfoResponseDnsServers struct {
	DnsServer []*string `json:"DnsServer,omitempty" xml:"DnsServer,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainInfoResponseDnsServers) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainInfoResponseDnsServers) GoString() string {
	return s.String()
}

func (s *DescribeDomainInfoResponseDnsServers) SetDnsServer(v []*string) *DescribeDomainInfoResponseDnsServers {
	s.DnsServer = v
	return s
}

type DescribeDomainInfoResponseAvailableTtls struct {
	AvailableTtl []*string `json:"AvailableTtl,omitempty" xml:"AvailableTtl,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainInfoResponseAvailableTtls) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainInfoResponseAvailableTtls) GoString() string {
	return s.String()
}

func (s *DescribeDomainInfoResponseAvailableTtls) SetAvailableTtl(v []*string) *DescribeDomainInfoResponseAvailableTtls {
	s.AvailableTtl = v
	return s
}

type DescribeDomainGroupsRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	KeyWord    *string `json:"KeyWord,omitempty" xml:"KeyWord,omitempty"`
	PageNumber *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeDomainGroupsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainGroupsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainGroupsRequest) SetLang(v string) *DescribeDomainGroupsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainGroupsRequest) SetKeyWord(v string) *DescribeDomainGroupsRequest {
	s.KeyWord = &v
	return s
}

func (s *DescribeDomainGroupsRequest) SetPageNumber(v int64) *DescribeDomainGroupsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDomainGroupsRequest) SetPageSize(v int64) *DescribeDomainGroupsRequest {
	s.PageSize = &v
	return s
}

type DescribeDomainGroupsResponse struct {
	RequestId    *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount   *int64                                    `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber   *int64                                    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize     *int64                                    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	DomainGroups *DescribeDomainGroupsResponseDomainGroups `json:"DomainGroups,omitempty" xml:"DomainGroups,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainGroupsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainGroupsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainGroupsResponse) SetRequestId(v string) *DescribeDomainGroupsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainGroupsResponse) SetTotalCount(v int64) *DescribeDomainGroupsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeDomainGroupsResponse) SetPageNumber(v int64) *DescribeDomainGroupsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDomainGroupsResponse) SetPageSize(v int64) *DescribeDomainGroupsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDomainGroupsResponse) SetDomainGroups(v *DescribeDomainGroupsResponseDomainGroups) *DescribeDomainGroupsResponse {
	s.DomainGroups = v
	return s
}

type DescribeDomainGroupsResponseDomainGroups struct {
	DomainGroup []*DescribeDomainGroupsResponseDomainGroupsDomainGroup `json:"DomainGroup,omitempty" xml:"DomainGroup,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainGroupsResponseDomainGroups) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainGroupsResponseDomainGroups) GoString() string {
	return s.String()
}

func (s *DescribeDomainGroupsResponseDomainGroups) SetDomainGroup(v []*DescribeDomainGroupsResponseDomainGroupsDomainGroup) *DescribeDomainGroupsResponseDomainGroups {
	s.DomainGroup = v
	return s
}

type DescribeDomainGroupsResponseDomainGroupsDomainGroup struct {
	GroupId     *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName   *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	DomainCount *int64  `json:"DomainCount,omitempty" xml:"DomainCount,omitempty" require:"true"`
}

func (s DescribeDomainGroupsResponseDomainGroupsDomainGroup) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainGroupsResponseDomainGroupsDomainGroup) GoString() string {
	return s.String()
}

func (s *DescribeDomainGroupsResponseDomainGroupsDomainGroup) SetGroupId(v string) *DescribeDomainGroupsResponseDomainGroupsDomainGroup {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainGroupsResponseDomainGroupsDomainGroup) SetGroupName(v string) *DescribeDomainGroupsResponseDomainGroupsDomainGroup {
	s.GroupName = &v
	return s
}

func (s *DescribeDomainGroupsResponseDomainGroupsDomainGroup) SetDomainCount(v int64) *DescribeDomainGroupsResponseDomainGroupsDomainGroup {
	s.DomainCount = &v
	return s
}

type DescribeDNSSLBSubDomainsRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	PageNumber   *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize     *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeDNSSLBSubDomainsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDNSSLBSubDomainsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDNSSLBSubDomainsRequest) SetLang(v string) *DescribeDNSSLBSubDomainsRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsRequest) SetUserClientIp(v string) *DescribeDNSSLBSubDomainsRequest {
	s.UserClientIp = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsRequest) SetDomainName(v string) *DescribeDNSSLBSubDomainsRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsRequest) SetPageNumber(v int64) *DescribeDNSSLBSubDomainsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsRequest) SetPageSize(v int64) *DescribeDNSSLBSubDomainsRequest {
	s.PageSize = &v
	return s
}

type DescribeDNSSLBSubDomainsResponse struct {
	RequestId     *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount    *int64                                         `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber    *int64                                         `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *int64                                         `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	SlbSubDomains *DescribeDNSSLBSubDomainsResponseSlbSubDomains `json:"SlbSubDomains,omitempty" xml:"SlbSubDomains,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDNSSLBSubDomainsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDNSSLBSubDomainsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDNSSLBSubDomainsResponse) SetRequestId(v string) *DescribeDNSSLBSubDomainsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsResponse) SetTotalCount(v int64) *DescribeDNSSLBSubDomainsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsResponse) SetPageNumber(v int64) *DescribeDNSSLBSubDomainsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsResponse) SetPageSize(v int64) *DescribeDNSSLBSubDomainsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsResponse) SetSlbSubDomains(v *DescribeDNSSLBSubDomainsResponseSlbSubDomains) *DescribeDNSSLBSubDomainsResponse {
	s.SlbSubDomains = v
	return s
}

type DescribeDNSSLBSubDomainsResponseSlbSubDomains struct {
	SlbSubDomain []*DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain `json:"SlbSubDomain,omitempty" xml:"SlbSubDomain,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDNSSLBSubDomainsResponseSlbSubDomains) String() string {
	return tea.Prettify(s)
}

func (s DescribeDNSSLBSubDomainsResponseSlbSubDomains) GoString() string {
	return s.String()
}

func (s *DescribeDNSSLBSubDomainsResponseSlbSubDomains) SetSlbSubDomain(v []*DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain) *DescribeDNSSLBSubDomainsResponseSlbSubDomains {
	s.SlbSubDomain = v
	return s
}

type DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain struct {
	SubDomain   *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	RecordCount *int64  `json:"RecordCount,omitempty" xml:"RecordCount,omitempty" require:"true"`
	Open        *bool   `json:"Open,omitempty" xml:"Open,omitempty" require:"true"`
	Type        *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain) String() string {
	return tea.Prettify(s)
}

func (s DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain) GoString() string {
	return s.String()
}

func (s *DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain) SetSubDomain(v string) *DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain {
	s.SubDomain = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain) SetRecordCount(v int64) *DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain {
	s.RecordCount = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain) SetOpen(v bool) *DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain {
	s.Open = &v
	return s
}

func (s *DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain) SetType(v string) *DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain {
	s.Type = &v
	return s
}

type DescribeDnsProductInstancesRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	PageNumber   *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize     *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	VersionCode  *string `json:"VersionCode,omitempty" xml:"VersionCode,omitempty"`
}

func (s DescribeDnsProductInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDnsProductInstancesRequest) GoString() string {
	return s.String()
}

func (s *DescribeDnsProductInstancesRequest) SetLang(v string) *DescribeDnsProductInstancesRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDnsProductInstancesRequest) SetUserClientIp(v string) *DescribeDnsProductInstancesRequest {
	s.UserClientIp = &v
	return s
}

func (s *DescribeDnsProductInstancesRequest) SetPageNumber(v int64) *DescribeDnsProductInstancesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDnsProductInstancesRequest) SetPageSize(v int64) *DescribeDnsProductInstancesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDnsProductInstancesRequest) SetVersionCode(v string) *DescribeDnsProductInstancesRequest {
	s.VersionCode = &v
	return s
}

type DescribeDnsProductInstancesResponse struct {
	RequestId   *string                                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount  *int64                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber  *int64                                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize    *int64                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	DnsProducts *DescribeDnsProductInstancesResponseDnsProducts `json:"DnsProducts,omitempty" xml:"DnsProducts,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDnsProductInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDnsProductInstancesResponse) GoString() string {
	return s.String()
}

func (s *DescribeDnsProductInstancesResponse) SetRequestId(v string) *DescribeDnsProductInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDnsProductInstancesResponse) SetTotalCount(v int64) *DescribeDnsProductInstancesResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeDnsProductInstancesResponse) SetPageNumber(v int64) *DescribeDnsProductInstancesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDnsProductInstancesResponse) SetPageSize(v int64) *DescribeDnsProductInstancesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDnsProductInstancesResponse) SetDnsProducts(v *DescribeDnsProductInstancesResponseDnsProducts) *DescribeDnsProductInstancesResponse {
	s.DnsProducts = v
	return s
}

type DescribeDnsProductInstancesResponseDnsProducts struct {
	DnsProduct []*DescribeDnsProductInstancesResponseDnsProductsDnsProduct `json:"DnsProduct,omitempty" xml:"DnsProduct,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDnsProductInstancesResponseDnsProducts) String() string {
	return tea.Prettify(s)
}

func (s DescribeDnsProductInstancesResponseDnsProducts) GoString() string {
	return s.String()
}

func (s *DescribeDnsProductInstancesResponseDnsProducts) SetDnsProduct(v []*DescribeDnsProductInstancesResponseDnsProductsDnsProduct) *DescribeDnsProductInstancesResponseDnsProducts {
	s.DnsProduct = v
	return s
}

type DescribeDnsProductInstancesResponseDnsProductsDnsProduct struct {
	InstanceId            *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	VersionCode           *string `json:"VersionCode,omitempty" xml:"VersionCode,omitempty" require:"true"`
	VersionName           *string `json:"VersionName,omitempty" xml:"VersionName,omitempty" require:"true"`
	StartTime             *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime               *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	StartTimestamp        *int64  `json:"StartTimestamp,omitempty" xml:"StartTimestamp,omitempty" require:"true"`
	EndTimestamp          *int64  `json:"EndTimestamp,omitempty" xml:"EndTimestamp,omitempty" require:"true"`
	Domain                *string `json:"Domain,omitempty" xml:"Domain,omitempty" require:"true"`
	BindCount             *int64  `json:"BindCount,omitempty" xml:"BindCount,omitempty" require:"true"`
	BindUsedCount         *int64  `json:"BindUsedCount,omitempty" xml:"BindUsedCount,omitempty" require:"true"`
	TTLMinValue           *int64  `json:"TTLMinValue,omitempty" xml:"TTLMinValue,omitempty" require:"true"`
	SubDomainLevel        *int64  `json:"SubDomainLevel,omitempty" xml:"SubDomainLevel,omitempty" require:"true"`
	DnsSLBCount           *int64  `json:"DnsSLBCount,omitempty" xml:"DnsSLBCount,omitempty" require:"true"`
	URLForwardCount       *int64  `json:"URLForwardCount,omitempty" xml:"URLForwardCount,omitempty" require:"true"`
	DDosDefendFlow        *int64  `json:"DDosDefendFlow,omitempty" xml:"DDosDefendFlow,omitempty" require:"true"`
	DDosDefendQuery       *int64  `json:"DDosDefendQuery,omitempty" xml:"DDosDefendQuery,omitempty" require:"true"`
	OverseaDDosDefendFlow *int64  `json:"OverseaDDosDefendFlow,omitempty" xml:"OverseaDDosDefendFlow,omitempty" require:"true"`
	SearchEngineLines     *string `json:"SearchEngineLines,omitempty" xml:"SearchEngineLines,omitempty" require:"true"`
	ISPLines              *string `json:"ISPLines,omitempty" xml:"ISPLines,omitempty" require:"true"`
	ISPRegionLines        *string `json:"ISPRegionLines,omitempty" xml:"ISPRegionLines,omitempty" require:"true"`
	OverseaLine           *string `json:"OverseaLine,omitempty" xml:"OverseaLine,omitempty" require:"true"`
	MonitorNodeCount      *int64  `json:"MonitorNodeCount,omitempty" xml:"MonitorNodeCount,omitempty" require:"true"`
	MonitorFrequency      *int64  `json:"MonitorFrequency,omitempty" xml:"MonitorFrequency,omitempty" require:"true"`
	MonitorTaskCount      *int64  `json:"MonitorTaskCount,omitempty" xml:"MonitorTaskCount,omitempty" require:"true"`
	RegionLines           *bool   `json:"RegionLines,omitempty" xml:"RegionLines,omitempty" require:"true"`
	Gslb                  *bool   `json:"Gslb,omitempty" xml:"Gslb,omitempty" require:"true"`
	InClean               *bool   `json:"InClean,omitempty" xml:"InClean,omitempty" require:"true"`
	InBlackHole           *bool   `json:"InBlackHole,omitempty" xml:"InBlackHole,omitempty" require:"true"`
	BindDomainCount       *int64  `json:"BindDomainCount,omitempty" xml:"BindDomainCount,omitempty" require:"true"`
	BindDomainUsedCount   *int64  `json:"BindDomainUsedCount,omitempty" xml:"BindDomainUsedCount,omitempty" require:"true"`
	DnsSecurity           *string `json:"DnsSecurity,omitempty" xml:"DnsSecurity,omitempty" require:"true"`
}

func (s DescribeDnsProductInstancesResponseDnsProductsDnsProduct) String() string {
	return tea.Prettify(s)
}

func (s DescribeDnsProductInstancesResponseDnsProductsDnsProduct) GoString() string {
	return s.String()
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetInstanceId(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.InstanceId = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetVersionCode(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.VersionCode = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetVersionName(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.VersionName = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetStartTime(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.StartTime = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetEndTime(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.EndTime = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetStartTimestamp(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.StartTimestamp = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetEndTimestamp(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.EndTimestamp = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetDomain(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.Domain = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetBindCount(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.BindCount = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetBindUsedCount(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.BindUsedCount = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetTTLMinValue(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.TTLMinValue = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetSubDomainLevel(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.SubDomainLevel = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetDnsSLBCount(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.DnsSLBCount = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetURLForwardCount(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.URLForwardCount = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetDDosDefendFlow(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.DDosDefendFlow = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetDDosDefendQuery(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.DDosDefendQuery = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetOverseaDDosDefendFlow(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.OverseaDDosDefendFlow = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetSearchEngineLines(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.SearchEngineLines = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetISPLines(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.ISPLines = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetISPRegionLines(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.ISPRegionLines = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetOverseaLine(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.OverseaLine = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetMonitorNodeCount(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.MonitorNodeCount = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetMonitorFrequency(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.MonitorFrequency = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetMonitorTaskCount(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.MonitorTaskCount = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetRegionLines(v bool) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.RegionLines = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetGslb(v bool) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.Gslb = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetInClean(v bool) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.InClean = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetInBlackHole(v bool) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.InBlackHole = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetBindDomainCount(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.BindDomainCount = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetBindDomainUsedCount(v int64) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.BindDomainUsedCount = &v
	return s
}

func (s *DescribeDnsProductInstancesResponseDnsProductsDnsProduct) SetDnsSecurity(v string) *DescribeDnsProductInstancesResponseDnsProductsDnsProduct {
	s.DnsSecurity = &v
	return s
}

type DeleteSubDomainRecordsRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	RR           *string `json:"RR,omitempty" xml:"RR,omitempty" require:"true"`
	Type         *string `json:"Type,omitempty" xml:"Type,omitempty"`
}

func (s DeleteSubDomainRecordsRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteSubDomainRecordsRequest) GoString() string {
	return s.String()
}

func (s *DeleteSubDomainRecordsRequest) SetLang(v string) *DeleteSubDomainRecordsRequest {
	s.Lang = &v
	return s
}

func (s *DeleteSubDomainRecordsRequest) SetUserClientIp(v string) *DeleteSubDomainRecordsRequest {
	s.UserClientIp = &v
	return s
}

func (s *DeleteSubDomainRecordsRequest) SetDomainName(v string) *DeleteSubDomainRecordsRequest {
	s.DomainName = &v
	return s
}

func (s *DeleteSubDomainRecordsRequest) SetRR(v string) *DeleteSubDomainRecordsRequest {
	s.RR = &v
	return s
}

func (s *DeleteSubDomainRecordsRequest) SetType(v string) *DeleteSubDomainRecordsRequest {
	s.Type = &v
	return s
}

type DeleteSubDomainRecordsResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RR         *string `json:"RR,omitempty" xml:"RR,omitempty" require:"true"`
	TotalCount *string `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
}

func (s DeleteSubDomainRecordsResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteSubDomainRecordsResponse) GoString() string {
	return s.String()
}

func (s *DeleteSubDomainRecordsResponse) SetRequestId(v string) *DeleteSubDomainRecordsResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteSubDomainRecordsResponse) SetRR(v string) *DeleteSubDomainRecordsResponse {
	s.RR = &v
	return s
}

func (s *DeleteSubDomainRecordsResponse) SetTotalCount(v string) *DeleteSubDomainRecordsResponse {
	s.TotalCount = &v
	return s
}

type DeleteDomainRecordRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	RecordId     *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
}

func (s DeleteDomainRecordRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDomainRecordRequest) GoString() string {
	return s.String()
}

func (s *DeleteDomainRecordRequest) SetLang(v string) *DeleteDomainRecordRequest {
	s.Lang = &v
	return s
}

func (s *DeleteDomainRecordRequest) SetUserClientIp(v string) *DeleteDomainRecordRequest {
	s.UserClientIp = &v
	return s
}

func (s *DeleteDomainRecordRequest) SetRecordId(v string) *DeleteDomainRecordRequest {
	s.RecordId = &v
	return s
}

type DeleteDomainRecordResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RecordId  *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
}

func (s DeleteDomainRecordResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDomainRecordResponse) GoString() string {
	return s.String()
}

func (s *DeleteDomainRecordResponse) SetRequestId(v string) *DeleteDomainRecordResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteDomainRecordResponse) SetRecordId(v string) *DeleteDomainRecordResponse {
	s.RecordId = &v
	return s
}

type DeleteDomainGroupRequest struct {
	Lang    *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	GroupId *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
}

func (s DeleteDomainGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDomainGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteDomainGroupRequest) SetLang(v string) *DeleteDomainGroupRequest {
	s.Lang = &v
	return s
}

func (s *DeleteDomainGroupRequest) SetGroupId(v string) *DeleteDomainGroupRequest {
	s.GroupId = &v
	return s
}

type DeleteDomainGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupName *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
}

func (s DeleteDomainGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDomainGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteDomainGroupResponse) SetRequestId(v string) *DeleteDomainGroupResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteDomainGroupResponse) SetGroupName(v string) *DeleteDomainGroupResponse {
	s.GroupName = &v
	return s
}

type DeleteDomainRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DeleteDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDomainRequest) GoString() string {
	return s.String()
}

func (s *DeleteDomainRequest) SetLang(v string) *DeleteDomainRequest {
	s.Lang = &v
	return s
}

func (s *DeleteDomainRequest) SetDomainName(v string) *DeleteDomainRequest {
	s.DomainName = &v
	return s
}

type DeleteDomainResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DeleteDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDomainResponse) GoString() string {
	return s.String()
}

func (s *DeleteDomainResponse) SetRequestId(v string) *DeleteDomainResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteDomainResponse) SetDomainName(v string) *DeleteDomainResponse {
	s.DomainName = &v
	return s
}

type ChangeDomainOfDnsProductRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	InstanceId   *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	NewDomain    *string `json:"NewDomain,omitempty" xml:"NewDomain,omitempty"`
	Force        *bool   `json:"Force,omitempty" xml:"Force,omitempty"`
}

func (s ChangeDomainOfDnsProductRequest) String() string {
	return tea.Prettify(s)
}

func (s ChangeDomainOfDnsProductRequest) GoString() string {
	return s.String()
}

func (s *ChangeDomainOfDnsProductRequest) SetLang(v string) *ChangeDomainOfDnsProductRequest {
	s.Lang = &v
	return s
}

func (s *ChangeDomainOfDnsProductRequest) SetUserClientIp(v string) *ChangeDomainOfDnsProductRequest {
	s.UserClientIp = &v
	return s
}

func (s *ChangeDomainOfDnsProductRequest) SetInstanceId(v string) *ChangeDomainOfDnsProductRequest {
	s.InstanceId = &v
	return s
}

func (s *ChangeDomainOfDnsProductRequest) SetNewDomain(v string) *ChangeDomainOfDnsProductRequest {
	s.NewDomain = &v
	return s
}

func (s *ChangeDomainOfDnsProductRequest) SetForce(v bool) *ChangeDomainOfDnsProductRequest {
	s.Force = &v
	return s
}

type ChangeDomainOfDnsProductResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OriginalDomain *string `json:"OriginalDomain,omitempty" xml:"OriginalDomain,omitempty" require:"true"`
}

func (s ChangeDomainOfDnsProductResponse) String() string {
	return tea.Prettify(s)
}

func (s ChangeDomainOfDnsProductResponse) GoString() string {
	return s.String()
}

func (s *ChangeDomainOfDnsProductResponse) SetRequestId(v string) *ChangeDomainOfDnsProductResponse {
	s.RequestId = &v
	return s
}

func (s *ChangeDomainOfDnsProductResponse) SetOriginalDomain(v string) *ChangeDomainOfDnsProductResponse {
	s.OriginalDomain = &v
	return s
}

type ChangeDomainGroupRequest struct {
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	GroupId    *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
}

func (s ChangeDomainGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s ChangeDomainGroupRequest) GoString() string {
	return s.String()
}

func (s *ChangeDomainGroupRequest) SetLang(v string) *ChangeDomainGroupRequest {
	s.Lang = &v
	return s
}

func (s *ChangeDomainGroupRequest) SetDomainName(v string) *ChangeDomainGroupRequest {
	s.DomainName = &v
	return s
}

func (s *ChangeDomainGroupRequest) SetGroupId(v string) *ChangeDomainGroupRequest {
	s.GroupId = &v
	return s
}

type ChangeDomainGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId   *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
}

func (s ChangeDomainGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s ChangeDomainGroupResponse) GoString() string {
	return s.String()
}

func (s *ChangeDomainGroupResponse) SetRequestId(v string) *ChangeDomainGroupResponse {
	s.RequestId = &v
	return s
}

func (s *ChangeDomainGroupResponse) SetGroupId(v string) *ChangeDomainGroupResponse {
	s.GroupId = &v
	return s
}

func (s *ChangeDomainGroupResponse) SetGroupName(v string) *ChangeDomainGroupResponse {
	s.GroupName = &v
	return s
}

type AddDomainRecordRequest struct {
	Lang         *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	UserClientIp *string `json:"UserClientIp,omitempty" xml:"UserClientIp,omitempty"`
	DomainName   *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	RR           *string `json:"RR,omitempty" xml:"RR,omitempty" require:"true"`
	Type         *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Value        *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	TTL          *int64  `json:"TTL,omitempty" xml:"TTL,omitempty"`
	Priority     *int64  `json:"Priority,omitempty" xml:"Priority,omitempty"`
	Line         *string `json:"Line,omitempty" xml:"Line,omitempty"`
}

func (s AddDomainRecordRequest) String() string {
	return tea.Prettify(s)
}

func (s AddDomainRecordRequest) GoString() string {
	return s.String()
}

func (s *AddDomainRecordRequest) SetLang(v string) *AddDomainRecordRequest {
	s.Lang = &v
	return s
}

func (s *AddDomainRecordRequest) SetUserClientIp(v string) *AddDomainRecordRequest {
	s.UserClientIp = &v
	return s
}

func (s *AddDomainRecordRequest) SetDomainName(v string) *AddDomainRecordRequest {
	s.DomainName = &v
	return s
}

func (s *AddDomainRecordRequest) SetRR(v string) *AddDomainRecordRequest {
	s.RR = &v
	return s
}

func (s *AddDomainRecordRequest) SetType(v string) *AddDomainRecordRequest {
	s.Type = &v
	return s
}

func (s *AddDomainRecordRequest) SetValue(v string) *AddDomainRecordRequest {
	s.Value = &v
	return s
}

func (s *AddDomainRecordRequest) SetTTL(v int64) *AddDomainRecordRequest {
	s.TTL = &v
	return s
}

func (s *AddDomainRecordRequest) SetPriority(v int64) *AddDomainRecordRequest {
	s.Priority = &v
	return s
}

func (s *AddDomainRecordRequest) SetLine(v string) *AddDomainRecordRequest {
	s.Line = &v
	return s
}

type AddDomainRecordResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RecordId  *string `json:"RecordId,omitempty" xml:"RecordId,omitempty" require:"true"`
}

func (s AddDomainRecordResponse) String() string {
	return tea.Prettify(s)
}

func (s AddDomainRecordResponse) GoString() string {
	return s.String()
}

func (s *AddDomainRecordResponse) SetRequestId(v string) *AddDomainRecordResponse {
	s.RequestId = &v
	return s
}

func (s *AddDomainRecordResponse) SetRecordId(v string) *AddDomainRecordResponse {
	s.RecordId = &v
	return s
}

type AddDomainGroupRequest struct {
	Lang      *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	GroupName *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
}

func (s AddDomainGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s AddDomainGroupRequest) GoString() string {
	return s.String()
}

func (s *AddDomainGroupRequest) SetLang(v string) *AddDomainGroupRequest {
	s.Lang = &v
	return s
}

func (s *AddDomainGroupRequest) SetGroupName(v string) *AddDomainGroupRequest {
	s.GroupName = &v
	return s
}

type AddDomainGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId   *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
}

func (s AddDomainGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s AddDomainGroupResponse) GoString() string {
	return s.String()
}

func (s *AddDomainGroupResponse) SetRequestId(v string) *AddDomainGroupResponse {
	s.RequestId = &v
	return s
}

func (s *AddDomainGroupResponse) SetGroupId(v string) *AddDomainGroupResponse {
	s.GroupId = &v
	return s
}

func (s *AddDomainGroupResponse) SetGroupName(v string) *AddDomainGroupResponse {
	s.GroupName = &v
	return s
}

type AddDomainRequest struct {
	Lang            *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	DomainName      *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	GroupId         *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ResourceGroupId *string `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty"`
}

func (s AddDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s AddDomainRequest) GoString() string {
	return s.String()
}

func (s *AddDomainRequest) SetLang(v string) *AddDomainRequest {
	s.Lang = &v
	return s
}

func (s *AddDomainRequest) SetDomainName(v string) *AddDomainRequest {
	s.DomainName = &v
	return s
}

func (s *AddDomainRequest) SetGroupId(v string) *AddDomainRequest {
	s.GroupId = &v
	return s
}

func (s *AddDomainRequest) SetResourceGroupId(v string) *AddDomainRequest {
	s.ResourceGroupId = &v
	return s
}

type AddDomainResponse struct {
	RequestId  *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainId   *string                      `json:"DomainId,omitempty" xml:"DomainId,omitempty" require:"true"`
	DomainName *string                      `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	PunyCode   *string                      `json:"PunyCode,omitempty" xml:"PunyCode,omitempty" require:"true"`
	GroupId    *string                      `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName  *string                      `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	DnsServers *AddDomainResponseDnsServers `json:"DnsServers,omitempty" xml:"DnsServers,omitempty" require:"true" type:"Struct"`
}

func (s AddDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s AddDomainResponse) GoString() string {
	return s.String()
}

func (s *AddDomainResponse) SetRequestId(v string) *AddDomainResponse {
	s.RequestId = &v
	return s
}

func (s *AddDomainResponse) SetDomainId(v string) *AddDomainResponse {
	s.DomainId = &v
	return s
}

func (s *AddDomainResponse) SetDomainName(v string) *AddDomainResponse {
	s.DomainName = &v
	return s
}

func (s *AddDomainResponse) SetPunyCode(v string) *AddDomainResponse {
	s.PunyCode = &v
	return s
}

func (s *AddDomainResponse) SetGroupId(v string) *AddDomainResponse {
	s.GroupId = &v
	return s
}

func (s *AddDomainResponse) SetGroupName(v string) *AddDomainResponse {
	s.GroupName = &v
	return s
}

func (s *AddDomainResponse) SetDnsServers(v *AddDomainResponseDnsServers) *AddDomainResponse {
	s.DnsServers = v
	return s
}

type AddDomainResponseDnsServers struct {
	DnsServer []*string `json:"DnsServer,omitempty" xml:"DnsServer,omitempty" require:"true" type:"Repeated"`
}

func (s AddDomainResponseDnsServers) String() string {
	return tea.Prettify(s)
}

func (s AddDomainResponseDnsServers) GoString() string {
	return s.String()
}

func (s *AddDomainResponseDnsServers) SetDnsServer(v []*string) *AddDomainResponseDnsServers {
	s.DnsServer = v
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
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("alidns"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) DescribeDohDomainStatisticsSummaryWithOptions(request *DescribeDohDomainStatisticsSummaryRequest, runtime *util.RuntimeOptions) (_result *DescribeDohDomainStatisticsSummaryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDohDomainStatisticsSummaryResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDohDomainStatisticsSummary"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDohDomainStatisticsSummary(request *DescribeDohDomainStatisticsSummaryRequest) (_result *DescribeDohDomainStatisticsSummaryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDohDomainStatisticsSummaryResponse{}
	_body, _err := client.DescribeDohDomainStatisticsSummaryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDohAccountStatisticsWithOptions(request *DescribeDohAccountStatisticsRequest, runtime *util.RuntimeOptions) (_result *DescribeDohAccountStatisticsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDohAccountStatisticsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDohAccountStatistics"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDohAccountStatistics(request *DescribeDohAccountStatisticsRequest) (_result *DescribeDohAccountStatisticsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDohAccountStatisticsResponse{}
	_body, _err := client.DescribeDohAccountStatisticsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDohSubDomainStatisticsWithOptions(request *DescribeDohSubDomainStatisticsRequest, runtime *util.RuntimeOptions) (_result *DescribeDohSubDomainStatisticsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDohSubDomainStatisticsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDohSubDomainStatistics"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDohSubDomainStatistics(request *DescribeDohSubDomainStatisticsRequest) (_result *DescribeDohSubDomainStatisticsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDohSubDomainStatisticsResponse{}
	_body, _err := client.DescribeDohSubDomainStatisticsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDohSubDomainStatisticsSummaryWithOptions(request *DescribeDohSubDomainStatisticsSummaryRequest, runtime *util.RuntimeOptions) (_result *DescribeDohSubDomainStatisticsSummaryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDohSubDomainStatisticsSummaryResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDohSubDomainStatisticsSummary"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDohSubDomainStatisticsSummary(request *DescribeDohSubDomainStatisticsSummaryRequest) (_result *DescribeDohSubDomainStatisticsSummaryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDohSubDomainStatisticsSummaryResponse{}
	_body, _err := client.DescribeDohSubDomainStatisticsSummaryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDohDomainStatisticsWithOptions(request *DescribeDohDomainStatisticsRequest, runtime *util.RuntimeOptions) (_result *DescribeDohDomainStatisticsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDohDomainStatisticsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDohDomainStatistics"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDohDomainStatistics(request *DescribeDohDomainStatisticsRequest) (_result *DescribeDohDomainStatisticsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDohDomainStatisticsResponse{}
	_body, _err := client.DescribeDohDomainStatisticsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDohUserInfoWithOptions(request *DescribeDohUserInfoRequest, runtime *util.RuntimeOptions) (_result *DescribeDohUserInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDohUserInfoResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDohUserInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDohUserInfo(request *DescribeDohUserInfoRequest) (_result *DescribeDohUserInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDohUserInfoResponse{}
	_body, _err := client.DescribeDohUserInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListTagResourcesWithOptions(request *ListTagResourcesRequest, runtime *util.RuntimeOptions) (_result *ListTagResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTagResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("ListTagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListTagResources(request *ListTagResourcesRequest) (_result *ListTagResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListTagResourcesResponse{}
	_body, _err := client.ListTagResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) TagResourcesWithOptions(request *TagResourcesRequest, runtime *util.RuntimeOptions) (_result *TagResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &TagResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("TagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TagResources(request *TagResourcesRequest) (_result *TagResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &TagResourcesResponse{}
	_body, _err := client.TagResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UntagResourcesWithOptions(request *UntagResourcesRequest, runtime *util.RuntimeOptions) (_result *UntagResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UntagResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("UntagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UntagResources(request *UntagResourcesRequest) (_result *UntagResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UntagResourcesResponse{}
	_body, _err := client.UntagResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTagsWithOptions(request *DescribeTagsRequest, runtime *util.RuntimeOptions) (_result *DescribeTagsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTagsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeTags"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTags(request *DescribeTagsRequest) (_result *DescribeTagsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTagsResponse{}
	_body, _err := client.DescribeTagsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CopyGtmConfigWithOptions(request *CopyGtmConfigRequest, runtime *util.RuntimeOptions) (_result *CopyGtmConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CopyGtmConfigResponse{}
	_body, _err := client.DoRequest(tea.String("CopyGtmConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CopyGtmConfig(request *CopyGtmConfigRequest) (_result *CopyGtmConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CopyGtmConfigResponse{}
	_body, _err := client.CopyGtmConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainDnssecInfoWithOptions(request *DescribeDomainDnssecInfoRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainDnssecInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainDnssecInfoResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainDnssecInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainDnssecInfo(request *DescribeDomainDnssecInfoRequest) (_result *DescribeDomainDnssecInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainDnssecInfoResponse{}
	_body, _err := client.DescribeDomainDnssecInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDomainDnssecStatusWithOptions(request *SetDomainDnssecStatusRequest, runtime *util.RuntimeOptions) (_result *SetDomainDnssecStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDomainDnssecStatusResponse{}
	_body, _err := client.DoRequest(tea.String("SetDomainDnssecStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDomainDnssecStatus(request *SetDomainDnssecStatusRequest) (_result *SetDomainDnssecStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDomainDnssecStatusResponse{}
	_body, _err := client.SetDomainDnssecStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) TransferDomainWithOptions(request *TransferDomainRequest, runtime *util.RuntimeOptions) (_result *TransferDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &TransferDomainResponse{}
	_body, _err := client.DoRequest(tea.String("TransferDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TransferDomain(request *TransferDomainRequest) (_result *TransferDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &TransferDomainResponse{}
	_body, _err := client.TransferDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTransferDomainsWithOptions(request *DescribeTransferDomainsRequest, runtime *util.RuntimeOptions) (_result *DescribeTransferDomainsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTransferDomainsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeTransferDomains"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTransferDomains(request *DescribeTransferDomainsRequest) (_result *DescribeTransferDomainsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTransferDomainsResponse{}
	_body, _err := client.DescribeTransferDomainsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddDomainBackupWithOptions(request *AddDomainBackupRequest, runtime *util.RuntimeOptions) (_result *AddDomainBackupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddDomainBackupResponse{}
	_body, _err := client.DoRequest(tea.String("AddDomainBackup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddDomainBackup(request *AddDomainBackupRequest) (_result *AddDomainBackupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddDomainBackupResponse{}
	_body, _err := client.AddDomainBackupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RetrieveDomainWithOptions(request *RetrieveDomainRequest, runtime *util.RuntimeOptions) (_result *RetrieveDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RetrieveDomainResponse{}
	_body, _err := client.DoRequest(tea.String("RetrieveDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RetrieveDomain(request *RetrieveDomainRequest) (_result *RetrieveDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RetrieveDomainResponse{}
	_body, _err := client.RetrieveDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmRecoveryPlanWithOptions(request *DescribeGtmRecoveryPlanRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmRecoveryPlanResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmRecoveryPlanResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmRecoveryPlan"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmRecoveryPlan(request *DescribeGtmRecoveryPlanRequest) (_result *DescribeGtmRecoveryPlanResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmRecoveryPlanResponse{}
	_body, _err := client.DescribeGtmRecoveryPlanWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddGtmRecoveryPlanWithOptions(request *AddGtmRecoveryPlanRequest, runtime *util.RuntimeOptions) (_result *AddGtmRecoveryPlanResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddGtmRecoveryPlanResponse{}
	_body, _err := client.DoRequest(tea.String("AddGtmRecoveryPlan"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddGtmRecoveryPlan(request *AddGtmRecoveryPlanRequest) (_result *AddGtmRecoveryPlanResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddGtmRecoveryPlanResponse{}
	_body, _err := client.AddGtmRecoveryPlanWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateGtmRecoveryPlanWithOptions(request *UpdateGtmRecoveryPlanRequest, runtime *util.RuntimeOptions) (_result *UpdateGtmRecoveryPlanResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateGtmRecoveryPlanResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateGtmRecoveryPlan"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateGtmRecoveryPlan(request *UpdateGtmRecoveryPlanRequest) (_result *UpdateGtmRecoveryPlanResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateGtmRecoveryPlanResponse{}
	_body, _err := client.UpdateGtmRecoveryPlanWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteGtmRecoveryPlanWithOptions(request *DeleteGtmRecoveryPlanRequest, runtime *util.RuntimeOptions) (_result *DeleteGtmRecoveryPlanResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteGtmRecoveryPlanResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteGtmRecoveryPlan"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteGtmRecoveryPlan(request *DeleteGtmRecoveryPlanRequest) (_result *DeleteGtmRecoveryPlanResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteGtmRecoveryPlanResponse{}
	_body, _err := client.DeleteGtmRecoveryPlanWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmRecoveryPlansWithOptions(request *DescribeGtmRecoveryPlansRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmRecoveryPlansResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmRecoveryPlansResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmRecoveryPlans"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmRecoveryPlans(request *DescribeGtmRecoveryPlansRequest) (_result *DescribeGtmRecoveryPlansResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmRecoveryPlansResponse{}
	_body, _err := client.DescribeGtmRecoveryPlansWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmRecoveryPlanAvailableConfigWithOptions(request *DescribeGtmRecoveryPlanAvailableConfigRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmRecoveryPlanAvailableConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmRecoveryPlanAvailableConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmRecoveryPlanAvailableConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmRecoveryPlanAvailableConfig(request *DescribeGtmRecoveryPlanAvailableConfigRequest) (_result *DescribeGtmRecoveryPlanAvailableConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmRecoveryPlanAvailableConfigResponse{}
	_body, _err := client.DescribeGtmRecoveryPlanAvailableConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ExecuteGtmRecoveryPlanWithOptions(request *ExecuteGtmRecoveryPlanRequest, runtime *util.RuntimeOptions) (_result *ExecuteGtmRecoveryPlanResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ExecuteGtmRecoveryPlanResponse{}
	_body, _err := client.DoRequest(tea.String("ExecuteGtmRecoveryPlan"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ExecuteGtmRecoveryPlan(request *ExecuteGtmRecoveryPlanRequest) (_result *ExecuteGtmRecoveryPlanResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ExecuteGtmRecoveryPlanResponse{}
	_body, _err := client.ExecuteGtmRecoveryPlanWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RollbackGtmRecoveryPlanWithOptions(request *RollbackGtmRecoveryPlanRequest, runtime *util.RuntimeOptions) (_result *RollbackGtmRecoveryPlanResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RollbackGtmRecoveryPlanResponse{}
	_body, _err := client.DoRequest(tea.String("RollbackGtmRecoveryPlan"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RollbackGtmRecoveryPlan(request *RollbackGtmRecoveryPlanRequest) (_result *RollbackGtmRecoveryPlanResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RollbackGtmRecoveryPlanResponse{}
	_body, _err := client.RollbackGtmRecoveryPlanWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PreviewGtmRecoveryPlanWithOptions(request *PreviewGtmRecoveryPlanRequest, runtime *util.RuntimeOptions) (_result *PreviewGtmRecoveryPlanResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PreviewGtmRecoveryPlanResponse{}
	_body, _err := client.DoRequest(tea.String("PreviewGtmRecoveryPlan"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PreviewGtmRecoveryPlan(request *PreviewGtmRecoveryPlanRequest) (_result *PreviewGtmRecoveryPlanResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PreviewGtmRecoveryPlanResponse{}
	_body, _err := client.PreviewGtmRecoveryPlanWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTxtRecordForVerifyWithOptions(request *GetTxtRecordForVerifyRequest, runtime *util.RuntimeOptions) (_result *GetTxtRecordForVerifyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTxtRecordForVerifyResponse{}
	_body, _err := client.DoRequest(tea.String("GetTxtRecordForVerify"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK,BearerToken"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTxtRecordForVerify(request *GetTxtRecordForVerifyRequest) (_result *GetTxtRecordForVerifyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTxtRecordForVerifyResponse{}
	_body, _err := client.GetTxtRecordForVerifyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainStatisticsWithOptions(request *DescribeDomainStatisticsRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainStatisticsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainStatisticsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainStatistics"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainStatistics(request *DescribeDomainStatisticsRequest) (_result *DescribeDomainStatisticsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainStatisticsResponse{}
	_body, _err := client.DescribeDomainStatisticsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeRecordStatisticsWithOptions(request *DescribeRecordStatisticsRequest, runtime *util.RuntimeOptions) (_result *DescribeRecordStatisticsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeRecordStatisticsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeRecordStatistics"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeRecordStatistics(request *DescribeRecordStatisticsRequest) (_result *DescribeRecordStatisticsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeRecordStatisticsResponse{}
	_body, _err := client.DescribeRecordStatisticsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmInstanceSystemCnameWithOptions(request *DescribeGtmInstanceSystemCnameRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmInstanceSystemCnameResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmInstanceSystemCnameResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmInstanceSystemCname"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmInstanceSystemCname(request *DescribeGtmInstanceSystemCnameRequest) (_result *DescribeGtmInstanceSystemCnameResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmInstanceSystemCnameResponse{}
	_body, _err := client.DescribeGtmInstanceSystemCnameWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeInstanceDomainsWithOptions(request *DescribeInstanceDomainsRequest, runtime *util.RuntimeOptions) (_result *DescribeInstanceDomainsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeInstanceDomainsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeInstanceDomains"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeInstanceDomains(request *DescribeInstanceDomainsRequest) (_result *DescribeInstanceDomainsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeInstanceDomainsResponse{}
	_body, _err := client.DescribeInstanceDomainsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) BindInstanceDomainsWithOptions(request *BindInstanceDomainsRequest, runtime *util.RuntimeOptions) (_result *BindInstanceDomainsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &BindInstanceDomainsResponse{}
	_body, _err := client.DoRequest(tea.String("BindInstanceDomains"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BindInstanceDomains(request *BindInstanceDomainsRequest) (_result *BindInstanceDomainsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &BindInstanceDomainsResponse{}
	_body, _err := client.BindInstanceDomainsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UnbindInstanceDomainsWithOptions(request *UnbindInstanceDomainsRequest, runtime *util.RuntimeOptions) (_result *UnbindInstanceDomainsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UnbindInstanceDomainsResponse{}
	_body, _err := client.DoRequest(tea.String("UnbindInstanceDomains"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UnbindInstanceDomains(request *UnbindInstanceDomainsRequest) (_result *UnbindInstanceDomainsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UnbindInstanceDomainsResponse{}
	_body, _err := client.UnbindInstanceDomainsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateCustomLineWithOptions(request *UpdateCustomLineRequest, runtime *util.RuntimeOptions) (_result *UpdateCustomLineResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateCustomLineResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateCustomLine"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateCustomLine(request *UpdateCustomLineRequest) (_result *UpdateCustomLineResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateCustomLineResponse{}
	_body, _err := client.UpdateCustomLineWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddCustomLineWithOptions(request *AddCustomLineRequest, runtime *util.RuntimeOptions) (_result *AddCustomLineResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddCustomLineResponse{}
	_body, _err := client.DoRequest(tea.String("AddCustomLine"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddCustomLine(request *AddCustomLineRequest) (_result *AddCustomLineResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddCustomLineResponse{}
	_body, _err := client.AddCustomLineWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteCustomLinesWithOptions(request *DeleteCustomLinesRequest, runtime *util.RuntimeOptions) (_result *DeleteCustomLinesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteCustomLinesResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteCustomLines"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteCustomLines(request *DeleteCustomLinesRequest) (_result *DeleteCustomLinesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteCustomLinesResponse{}
	_body, _err := client.DeleteCustomLinesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeCustomLineWithOptions(request *DescribeCustomLineRequest, runtime *util.RuntimeOptions) (_result *DescribeCustomLineResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeCustomLineResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeCustomLine"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeCustomLine(request *DescribeCustomLineRequest) (_result *DescribeCustomLineResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeCustomLineResponse{}
	_body, _err := client.DescribeCustomLineWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeCustomLinesWithOptions(request *DescribeCustomLinesRequest, runtime *util.RuntimeOptions) (_result *DescribeCustomLinesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeCustomLinesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeCustomLines"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeCustomLines(request *DescribeCustomLinesRequest) (_result *DescribeCustomLinesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeCustomLinesResponse{}
	_body, _err := client.DescribeCustomLinesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainStatisticsSummaryWithOptions(request *DescribeDomainStatisticsSummaryRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainStatisticsSummaryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainStatisticsSummaryResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainStatisticsSummary"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainStatisticsSummary(request *DescribeDomainStatisticsSummaryRequest) (_result *DescribeDomainStatisticsSummaryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainStatisticsSummaryResponse{}
	_body, _err := client.DescribeDomainStatisticsSummaryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeRecordStatisticsSummaryWithOptions(request *DescribeRecordStatisticsSummaryRequest, runtime *util.RuntimeOptions) (_result *DescribeRecordStatisticsSummaryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeRecordStatisticsSummaryResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeRecordStatisticsSummary"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeRecordStatisticsSummary(request *DescribeRecordStatisticsSummaryRequest) (_result *DescribeRecordStatisticsSummaryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeRecordStatisticsSummaryResponse{}
	_body, _err := client.DescribeRecordStatisticsSummaryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) OperateBatchDomainWithOptions(request *OperateBatchDomainRequest, runtime *util.RuntimeOptions) (_result *OperateBatchDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &OperateBatchDomainResponse{}
	_body, _err := client.DoRequest(tea.String("OperateBatchDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) OperateBatchDomain(request *OperateBatchDomainRequest) (_result *OperateBatchDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &OperateBatchDomainResponse{}
	_body, _err := client.OperateBatchDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeBatchResultDetailWithOptions(request *DescribeBatchResultDetailRequest, runtime *util.RuntimeOptions) (_result *DescribeBatchResultDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeBatchResultDetailResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeBatchResultDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeBatchResultDetail(request *DescribeBatchResultDetailRequest) (_result *DescribeBatchResultDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeBatchResultDetailResponse{}
	_body, _err := client.DescribeBatchResultDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeBatchResultCountWithOptions(request *DescribeBatchResultCountRequest, runtime *util.RuntimeOptions) (_result *DescribeBatchResultCountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeBatchResultCountResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeBatchResultCount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeBatchResultCount(request *DescribeBatchResultCountRequest) (_result *DescribeBatchResultCountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeBatchResultCountResponse{}
	_body, _err := client.DescribeBatchResultCountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetGtmAccessModeWithOptions(request *SetGtmAccessModeRequest, runtime *util.RuntimeOptions) (_result *SetGtmAccessModeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetGtmAccessModeResponse{}
	_body, _err := client.DoRequest(tea.String("SetGtmAccessMode"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetGtmAccessMode(request *SetGtmAccessModeRequest) (_result *SetGtmAccessModeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetGtmAccessModeResponse{}
	_body, _err := client.SetGtmAccessModeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetGtmMonitorStatusWithOptions(request *SetGtmMonitorStatusRequest, runtime *util.RuntimeOptions) (_result *SetGtmMonitorStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetGtmMonitorStatusResponse{}
	_body, _err := client.DoRequest(tea.String("SetGtmMonitorStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetGtmMonitorStatus(request *SetGtmMonitorStatusRequest) (_result *SetGtmMonitorStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetGtmMonitorStatusResponse{}
	_body, _err := client.SetGtmMonitorStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateGtmInstanceGlobalConfigWithOptions(request *UpdateGtmInstanceGlobalConfigRequest, runtime *util.RuntimeOptions) (_result *UpdateGtmInstanceGlobalConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateGtmInstanceGlobalConfigResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateGtmInstanceGlobalConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateGtmInstanceGlobalConfig(request *UpdateGtmInstanceGlobalConfigRequest) (_result *UpdateGtmInstanceGlobalConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateGtmInstanceGlobalConfigResponse{}
	_body, _err := client.UpdateGtmInstanceGlobalConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmLogsWithOptions(request *DescribeGtmLogsRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmLogsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmLogsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmLogs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmLogs(request *DescribeGtmLogsRequest) (_result *DescribeGtmLogsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmLogsResponse{}
	_body, _err := client.DescribeGtmLogsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteGtmAccessStrategyWithOptions(request *DeleteGtmAccessStrategyRequest, runtime *util.RuntimeOptions) (_result *DeleteGtmAccessStrategyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteGtmAccessStrategyResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteGtmAccessStrategy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteGtmAccessStrategy(request *DeleteGtmAccessStrategyRequest) (_result *DeleteGtmAccessStrategyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteGtmAccessStrategyResponse{}
	_body, _err := client.DeleteGtmAccessStrategyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddGtmMonitorWithOptions(request *AddGtmMonitorRequest, runtime *util.RuntimeOptions) (_result *AddGtmMonitorResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddGtmMonitorResponse{}
	_body, _err := client.DoRequest(tea.String("AddGtmMonitor"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddGtmMonitor(request *AddGtmMonitorRequest) (_result *AddGtmMonitorResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddGtmMonitorResponse{}
	_body, _err := client.AddGtmMonitorWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddGtmAddressPoolWithOptions(request *AddGtmAddressPoolRequest, runtime *util.RuntimeOptions) (_result *AddGtmAddressPoolResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddGtmAddressPoolResponse{}
	_body, _err := client.DoRequest(tea.String("AddGtmAddressPool"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddGtmAddressPool(request *AddGtmAddressPoolRequest) (_result *AddGtmAddressPoolResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddGtmAddressPoolResponse{}
	_body, _err := client.AddGtmAddressPoolWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddGtmAccessStrategyWithOptions(request *AddGtmAccessStrategyRequest, runtime *util.RuntimeOptions) (_result *AddGtmAccessStrategyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddGtmAccessStrategyResponse{}
	_body, _err := client.DoRequest(tea.String("AddGtmAccessStrategy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddGtmAccessStrategy(request *AddGtmAccessStrategyRequest) (_result *AddGtmAccessStrategyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddGtmAccessStrategyResponse{}
	_body, _err := client.AddGtmAccessStrategyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmInstancesWithOptions(request *DescribeGtmInstancesRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmInstances(request *DescribeGtmInstancesRequest) (_result *DescribeGtmInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmInstancesResponse{}
	_body, _err := client.DescribeGtmInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteGtmAddressPoolWithOptions(request *DeleteGtmAddressPoolRequest, runtime *util.RuntimeOptions) (_result *DeleteGtmAddressPoolResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteGtmAddressPoolResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteGtmAddressPool"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteGtmAddressPool(request *DeleteGtmAddressPoolRequest) (_result *DeleteGtmAddressPoolResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteGtmAddressPoolResponse{}
	_body, _err := client.DeleteGtmAddressPoolWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmAccessStrategiesWithOptions(request *DescribeGtmAccessStrategiesRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmAccessStrategiesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmAccessStrategiesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmAccessStrategies"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmAccessStrategies(request *DescribeGtmAccessStrategiesRequest) (_result *DescribeGtmAccessStrategiesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmAccessStrategiesResponse{}
	_body, _err := client.DescribeGtmAccessStrategiesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmAccessStrategyWithOptions(request *DescribeGtmAccessStrategyRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmAccessStrategyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmAccessStrategyResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmAccessStrategy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmAccessStrategy(request *DescribeGtmAccessStrategyRequest) (_result *DescribeGtmAccessStrategyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmAccessStrategyResponse{}
	_body, _err := client.DescribeGtmAccessStrategyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmAccessStrategyAvailableConfigWithOptions(request *DescribeGtmAccessStrategyAvailableConfigRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmAccessStrategyAvailableConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmAccessStrategyAvailableConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmAccessStrategyAvailableConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmAccessStrategyAvailableConfig(request *DescribeGtmAccessStrategyAvailableConfigRequest) (_result *DescribeGtmAccessStrategyAvailableConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmAccessStrategyAvailableConfigResponse{}
	_body, _err := client.DescribeGtmAccessStrategyAvailableConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmAvailableAlertGroupWithOptions(request *DescribeGtmAvailableAlertGroupRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmAvailableAlertGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmAvailableAlertGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmAvailableAlertGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmAvailableAlertGroup(request *DescribeGtmAvailableAlertGroupRequest) (_result *DescribeGtmAvailableAlertGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmAvailableAlertGroupResponse{}
	_body, _err := client.DescribeGtmAvailableAlertGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmInstanceWithOptions(request *DescribeGtmInstanceRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmInstance(request *DescribeGtmInstanceRequest) (_result *DescribeGtmInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmInstanceResponse{}
	_body, _err := client.DescribeGtmInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmInstanceAddressPoolWithOptions(request *DescribeGtmInstanceAddressPoolRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmInstanceAddressPoolResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmInstanceAddressPoolResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmInstanceAddressPool"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmInstanceAddressPool(request *DescribeGtmInstanceAddressPoolRequest) (_result *DescribeGtmInstanceAddressPoolResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmInstanceAddressPoolResponse{}
	_body, _err := client.DescribeGtmInstanceAddressPoolWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmInstanceAddressPoolsWithOptions(request *DescribeGtmInstanceAddressPoolsRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmInstanceAddressPoolsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmInstanceAddressPoolsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmInstanceAddressPools"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmInstanceAddressPools(request *DescribeGtmInstanceAddressPoolsRequest) (_result *DescribeGtmInstanceAddressPoolsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmInstanceAddressPoolsResponse{}
	_body, _err := client.DescribeGtmInstanceAddressPoolsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmInstanceStatusWithOptions(request *DescribeGtmInstanceStatusRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmInstanceStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmInstanceStatusResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmInstanceStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmInstanceStatus(request *DescribeGtmInstanceStatusRequest) (_result *DescribeGtmInstanceStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmInstanceStatusResponse{}
	_body, _err := client.DescribeGtmInstanceStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmMonitorAvailableConfigWithOptions(request *DescribeGtmMonitorAvailableConfigRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmMonitorAvailableConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmMonitorAvailableConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmMonitorAvailableConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmMonitorAvailableConfig(request *DescribeGtmMonitorAvailableConfigRequest) (_result *DescribeGtmMonitorAvailableConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmMonitorAvailableConfigResponse{}
	_body, _err := client.DescribeGtmMonitorAvailableConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGtmMonitorConfigWithOptions(request *DescribeGtmMonitorConfigRequest, runtime *util.RuntimeOptions) (_result *DescribeGtmMonitorConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGtmMonitorConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGtmMonitorConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGtmMonitorConfig(request *DescribeGtmMonitorConfigRequest) (_result *DescribeGtmMonitorConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGtmMonitorConfigResponse{}
	_body, _err := client.DescribeGtmMonitorConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateGtmAccessStrategyWithOptions(request *UpdateGtmAccessStrategyRequest, runtime *util.RuntimeOptions) (_result *UpdateGtmAccessStrategyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateGtmAccessStrategyResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateGtmAccessStrategy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateGtmAccessStrategy(request *UpdateGtmAccessStrategyRequest) (_result *UpdateGtmAccessStrategyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateGtmAccessStrategyResponse{}
	_body, _err := client.UpdateGtmAccessStrategyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateGtmAddressPoolWithOptions(request *UpdateGtmAddressPoolRequest, runtime *util.RuntimeOptions) (_result *UpdateGtmAddressPoolResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateGtmAddressPoolResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateGtmAddressPool"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateGtmAddressPool(request *UpdateGtmAddressPoolRequest) (_result *UpdateGtmAddressPoolResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateGtmAddressPoolResponse{}
	_body, _err := client.UpdateGtmAddressPoolWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateGtmMonitorWithOptions(request *UpdateGtmMonitorRequest, runtime *util.RuntimeOptions) (_result *UpdateGtmMonitorResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateGtmMonitorResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateGtmMonitor"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateGtmMonitor(request *UpdateGtmMonitorRequest) (_result *UpdateGtmMonitorResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateGtmMonitorResponse{}
	_body, _err := client.UpdateGtmMonitorWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateDomainRemarkWithOptions(request *UpdateDomainRemarkRequest, runtime *util.RuntimeOptions) (_result *UpdateDomainRemarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateDomainRemarkResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateDomainRemark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateDomainRemark(request *UpdateDomainRemarkRequest) (_result *UpdateDomainRemarkResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateDomainRemarkResponse{}
	_body, _err := client.UpdateDomainRemarkWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateDomainRecordRemarkWithOptions(request *UpdateDomainRecordRemarkRequest, runtime *util.RuntimeOptions) (_result *UpdateDomainRecordRemarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateDomainRecordRemarkResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateDomainRecordRemark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateDomainRecordRemark(request *UpdateDomainRecordRemarkRequest) (_result *UpdateDomainRecordRemarkResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateDomainRecordRemarkResponse{}
	_body, _err := client.UpdateDomainRecordRemarkWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSupportLinesWithOptions(request *DescribeSupportLinesRequest, runtime *util.RuntimeOptions) (_result *DescribeSupportLinesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSupportLinesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSupportLines"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSupportLines(request *DescribeSupportLinesRequest) (_result *DescribeSupportLinesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSupportLinesResponse{}
	_body, _err := client.DescribeSupportLinesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainNsWithOptions(request *DescribeDomainNsRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainNsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainNsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainNs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainNs(request *DescribeDomainNsRequest) (_result *DescribeDomainNsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainNsResponse{}
	_body, _err := client.DescribeDomainNsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDnsProductInstanceWithOptions(request *DescribeDnsProductInstanceRequest, runtime *util.RuntimeOptions) (_result *DescribeDnsProductInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDnsProductInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDnsProductInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDnsProductInstance(request *DescribeDnsProductInstanceRequest) (_result *DescribeDnsProductInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDnsProductInstanceResponse{}
	_body, _err := client.DescribeDnsProductInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateDomainRecordWithOptions(request *UpdateDomainRecordRequest, runtime *util.RuntimeOptions) (_result *UpdateDomainRecordResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateDomainRecordResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateDomainRecord"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK,BearerToken"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateDomainRecord(request *UpdateDomainRecordRequest) (_result *UpdateDomainRecordResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateDomainRecordResponse{}
	_body, _err := client.UpdateDomainRecordWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateDomainGroupWithOptions(request *UpdateDomainGroupRequest, runtime *util.RuntimeOptions) (_result *UpdateDomainGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateDomainGroupResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateDomainGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateDomainGroup(request *UpdateDomainGroupRequest) (_result *UpdateDomainGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateDomainGroupResponse{}
	_body, _err := client.UpdateDomainGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateDNSSLBWeightWithOptions(request *UpdateDNSSLBWeightRequest, runtime *util.RuntimeOptions) (_result *UpdateDNSSLBWeightResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateDNSSLBWeightResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateDNSSLBWeight"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateDNSSLBWeight(request *UpdateDNSSLBWeightRequest) (_result *UpdateDNSSLBWeightResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateDNSSLBWeightResponse{}
	_body, _err := client.UpdateDNSSLBWeightWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDomainRecordStatusWithOptions(request *SetDomainRecordStatusRequest, runtime *util.RuntimeOptions) (_result *SetDomainRecordStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDomainRecordStatusResponse{}
	_body, _err := client.DoRequest(tea.String("SetDomainRecordStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDomainRecordStatus(request *SetDomainRecordStatusRequest) (_result *SetDomainRecordStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDomainRecordStatusResponse{}
	_body, _err := client.SetDomainRecordStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDNSSLBStatusWithOptions(request *SetDNSSLBStatusRequest, runtime *util.RuntimeOptions) (_result *SetDNSSLBStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDNSSLBStatusResponse{}
	_body, _err := client.DoRequest(tea.String("SetDNSSLBStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDNSSLBStatus(request *SetDNSSLBStatusRequest) (_result *SetDNSSLBStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDNSSLBStatusResponse{}
	_body, _err := client.SetDNSSLBStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyHichinaDomainDNSWithOptions(request *ModifyHichinaDomainDNSRequest, runtime *util.RuntimeOptions) (_result *ModifyHichinaDomainDNSResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyHichinaDomainDNSResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyHichinaDomainDNS"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyHichinaDomainDNS(request *ModifyHichinaDomainDNSRequest) (_result *ModifyHichinaDomainDNSResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyHichinaDomainDNSResponse{}
	_body, _err := client.ModifyHichinaDomainDNSWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMainDomainNameWithOptions(request *GetMainDomainNameRequest, runtime *util.RuntimeOptions) (_result *GetMainDomainNameResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMainDomainNameResponse{}
	_body, _err := client.DoRequest(tea.String("GetMainDomainName"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMainDomainName(request *GetMainDomainNameRequest) (_result *GetMainDomainNameResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMainDomainNameResponse{}
	_body, _err := client.GetMainDomainNameWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSubDomainRecordsWithOptions(request *DescribeSubDomainRecordsRequest, runtime *util.RuntimeOptions) (_result *DescribeSubDomainRecordsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSubDomainRecordsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSubDomainRecords"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSubDomainRecords(request *DescribeSubDomainRecordsRequest) (_result *DescribeSubDomainRecordsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSubDomainRecordsResponse{}
	_body, _err := client.DescribeSubDomainRecordsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeRecordLogsWithOptions(request *DescribeRecordLogsRequest, runtime *util.RuntimeOptions) (_result *DescribeRecordLogsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeRecordLogsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeRecordLogs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeRecordLogs(request *DescribeRecordLogsRequest) (_result *DescribeRecordLogsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeRecordLogsResponse{}
	_body, _err := client.DescribeRecordLogsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainsWithOptions(request *DescribeDomainsRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomains"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK,BearerToken"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomains(request *DescribeDomainsRequest) (_result *DescribeDomainsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainsResponse{}
	_body, _err := client.DescribeDomainsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainRecordsWithOptions(request *DescribeDomainRecordsRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainRecordsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainRecordsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainRecords"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK,BearerToken"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainRecords(request *DescribeDomainRecordsRequest) (_result *DescribeDomainRecordsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainRecordsResponse{}
	_body, _err := client.DescribeDomainRecordsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainRecordInfoWithOptions(request *DescribeDomainRecordInfoRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainRecordInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainRecordInfoResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainRecordInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK,BearerToken"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainRecordInfo(request *DescribeDomainRecordInfoRequest) (_result *DescribeDomainRecordInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainRecordInfoResponse{}
	_body, _err := client.DescribeDomainRecordInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainLogsWithOptions(request *DescribeDomainLogsRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainLogsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainLogsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainLogs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainLogs(request *DescribeDomainLogsRequest) (_result *DescribeDomainLogsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainLogsResponse{}
	_body, _err := client.DescribeDomainLogsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainInfoWithOptions(request *DescribeDomainInfoRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainInfoResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainInfo(request *DescribeDomainInfoRequest) (_result *DescribeDomainInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainInfoResponse{}
	_body, _err := client.DescribeDomainInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainGroupsWithOptions(request *DescribeDomainGroupsRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainGroupsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainGroupsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainGroups"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainGroups(request *DescribeDomainGroupsRequest) (_result *DescribeDomainGroupsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainGroupsResponse{}
	_body, _err := client.DescribeDomainGroupsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDNSSLBSubDomainsWithOptions(request *DescribeDNSSLBSubDomainsRequest, runtime *util.RuntimeOptions) (_result *DescribeDNSSLBSubDomainsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDNSSLBSubDomainsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDNSSLBSubDomains"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDNSSLBSubDomains(request *DescribeDNSSLBSubDomainsRequest) (_result *DescribeDNSSLBSubDomainsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDNSSLBSubDomainsResponse{}
	_body, _err := client.DescribeDNSSLBSubDomainsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDnsProductInstancesWithOptions(request *DescribeDnsProductInstancesRequest, runtime *util.RuntimeOptions) (_result *DescribeDnsProductInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDnsProductInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDnsProductInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDnsProductInstances(request *DescribeDnsProductInstancesRequest) (_result *DescribeDnsProductInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDnsProductInstancesResponse{}
	_body, _err := client.DescribeDnsProductInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteSubDomainRecordsWithOptions(request *DeleteSubDomainRecordsRequest, runtime *util.RuntimeOptions) (_result *DeleteSubDomainRecordsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteSubDomainRecordsResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteSubDomainRecords"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteSubDomainRecords(request *DeleteSubDomainRecordsRequest) (_result *DeleteSubDomainRecordsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteSubDomainRecordsResponse{}
	_body, _err := client.DeleteSubDomainRecordsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDomainRecordWithOptions(request *DeleteDomainRecordRequest, runtime *util.RuntimeOptions) (_result *DeleteDomainRecordResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDomainRecordResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDomainRecord"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK,BearerToken"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDomainRecord(request *DeleteDomainRecordRequest) (_result *DeleteDomainRecordResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDomainRecordResponse{}
	_body, _err := client.DeleteDomainRecordWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDomainGroupWithOptions(request *DeleteDomainGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteDomainGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDomainGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDomainGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDomainGroup(request *DeleteDomainGroupRequest) (_result *DeleteDomainGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDomainGroupResponse{}
	_body, _err := client.DeleteDomainGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDomainWithOptions(request *DeleteDomainRequest, runtime *util.RuntimeOptions) (_result *DeleteDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDomainResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK,BearerToken"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDomain(request *DeleteDomainRequest) (_result *DeleteDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDomainResponse{}
	_body, _err := client.DeleteDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ChangeDomainOfDnsProductWithOptions(request *ChangeDomainOfDnsProductRequest, runtime *util.RuntimeOptions) (_result *ChangeDomainOfDnsProductResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ChangeDomainOfDnsProductResponse{}
	_body, _err := client.DoRequest(tea.String("ChangeDomainOfDnsProduct"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ChangeDomainOfDnsProduct(request *ChangeDomainOfDnsProductRequest) (_result *ChangeDomainOfDnsProductResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ChangeDomainOfDnsProductResponse{}
	_body, _err := client.ChangeDomainOfDnsProductWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ChangeDomainGroupWithOptions(request *ChangeDomainGroupRequest, runtime *util.RuntimeOptions) (_result *ChangeDomainGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ChangeDomainGroupResponse{}
	_body, _err := client.DoRequest(tea.String("ChangeDomainGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ChangeDomainGroup(request *ChangeDomainGroupRequest) (_result *ChangeDomainGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ChangeDomainGroupResponse{}
	_body, _err := client.ChangeDomainGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddDomainRecordWithOptions(request *AddDomainRecordRequest, runtime *util.RuntimeOptions) (_result *AddDomainRecordResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddDomainRecordResponse{}
	_body, _err := client.DoRequest(tea.String("AddDomainRecord"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK,BearerToken"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddDomainRecord(request *AddDomainRecordRequest) (_result *AddDomainRecordResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddDomainRecordResponse{}
	_body, _err := client.AddDomainRecordWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddDomainGroupWithOptions(request *AddDomainGroupRequest, runtime *util.RuntimeOptions) (_result *AddDomainGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddDomainGroupResponse{}
	_body, _err := client.DoRequest(tea.String("AddDomainGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddDomainGroup(request *AddDomainGroupRequest) (_result *AddDomainGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddDomainGroupResponse{}
	_body, _err := client.AddDomainGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddDomainWithOptions(request *AddDomainRequest, runtime *util.RuntimeOptions) (_result *AddDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddDomainResponse{}
	_body, _err := client.DoRequest(tea.String("AddDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-01-09"), tea.String("AK,BearerToken"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddDomain(request *AddDomainRequest) (_result *AddDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddDomainResponse{}
	_body, _err := client.AddDomainWithOptions(request, runtime)
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
