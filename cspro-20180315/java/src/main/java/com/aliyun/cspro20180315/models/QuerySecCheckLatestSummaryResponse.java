// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySecCheckLatestSummaryResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Success")
    @Validation(required = true)
    public Boolean success;

    @NameInMap("Code")
    @Validation(required = true)
    public String code;

    @NameInMap("Message")
    @Validation(required = true)
    public String message;

    @NameInMap("Data")
    @Validation(required = true)
    public QuerySecCheckLatestSummaryResponseData data;

    public static QuerySecCheckLatestSummaryResponse build(java.util.Map<String, ?> map) throws Exception {
        QuerySecCheckLatestSummaryResponse self = new QuerySecCheckLatestSummaryResponse();
        return TeaModel.build(map, self);
    }

    public QuerySecCheckLatestSummaryResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public QuerySecCheckLatestSummaryResponse setSuccess(Boolean success) {
        this.success = success;
        return this;
    }
    public Boolean getSuccess() {
        return this.success;
    }

    public QuerySecCheckLatestSummaryResponse setCode(String code) {
        this.code = code;
        return this;
    }
    public String getCode() {
        return this.code;
    }

    public QuerySecCheckLatestSummaryResponse setMessage(String message) {
        this.message = message;
        return this;
    }
    public String getMessage() {
        return this.message;
    }

    public QuerySecCheckLatestSummaryResponse setData(QuerySecCheckLatestSummaryResponseData data) {
        this.data = data;
        return this;
    }
    public QuerySecCheckLatestSummaryResponseData getData() {
        return this.data;
    }

    public static class QuerySecCheckLatestSummaryResponseDataList extends TeaModel {
        @NameInMap("Id")
        @Validation(required = true)
        public Long id;

        @NameInMap("ConfType")
        @Validation(required = true)
        public String confType;

        @NameInMap("CheckType")
        @Validation(required = true)
        public String checkType;

        @NameInMap("CheckTarget")
        @Validation(required = true)
        public String checkTarget;

        @NameInMap("UrlCnt")
        @Validation(required = true)
        public Long urlCnt;

        @NameInMap("RiskCnt")
        @Validation(required = true)
        public Long riskCnt;

        @NameInMap("CheckTime")
        @Validation(required = true)
        public String checkTime;

        @NameInMap("GmtCheckStart")
        @Validation(required = true)
        public Long gmtCheckStart;

        @NameInMap("GmtCheckEnd")
        @Validation(required = true)
        public Long gmtCheckEnd;

        public static QuerySecCheckLatestSummaryResponseDataList build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckLatestSummaryResponseDataList self = new QuerySecCheckLatestSummaryResponseDataList();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckLatestSummaryResponseDataList setId(Long id) {
            this.id = id;
            return this;
        }
        public Long getId() {
            return this.id;
        }

        public QuerySecCheckLatestSummaryResponseDataList setConfType(String confType) {
            this.confType = confType;
            return this;
        }
        public String getConfType() {
            return this.confType;
        }

        public QuerySecCheckLatestSummaryResponseDataList setCheckType(String checkType) {
            this.checkType = checkType;
            return this;
        }
        public String getCheckType() {
            return this.checkType;
        }

        public QuerySecCheckLatestSummaryResponseDataList setCheckTarget(String checkTarget) {
            this.checkTarget = checkTarget;
            return this;
        }
        public String getCheckTarget() {
            return this.checkTarget;
        }

        public QuerySecCheckLatestSummaryResponseDataList setUrlCnt(Long urlCnt) {
            this.urlCnt = urlCnt;
            return this;
        }
        public Long getUrlCnt() {
            return this.urlCnt;
        }

        public QuerySecCheckLatestSummaryResponseDataList setRiskCnt(Long riskCnt) {
            this.riskCnt = riskCnt;
            return this;
        }
        public Long getRiskCnt() {
            return this.riskCnt;
        }

        public QuerySecCheckLatestSummaryResponseDataList setCheckTime(String checkTime) {
            this.checkTime = checkTime;
            return this;
        }
        public String getCheckTime() {
            return this.checkTime;
        }

        public QuerySecCheckLatestSummaryResponseDataList setGmtCheckStart(Long gmtCheckStart) {
            this.gmtCheckStart = gmtCheckStart;
            return this;
        }
        public Long getGmtCheckStart() {
            return this.gmtCheckStart;
        }

        public QuerySecCheckLatestSummaryResponseDataList setGmtCheckEnd(Long gmtCheckEnd) {
            this.gmtCheckEnd = gmtCheckEnd;
            return this;
        }
        public Long getGmtCheckEnd() {
            return this.gmtCheckEnd;
        }

    }

    public static class QuerySecCheckLatestSummaryResponseDataPageInfo extends TeaModel {
        @NameInMap("CurrentPage")
        @Validation(required = true)
        public Integer currentPage;

        @NameInMap("PageSize")
        @Validation(required = true)
        public Integer pageSize;

        @NameInMap("Total")
        @Validation(required = true)
        public Integer total;

        public static QuerySecCheckLatestSummaryResponseDataPageInfo build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckLatestSummaryResponseDataPageInfo self = new QuerySecCheckLatestSummaryResponseDataPageInfo();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckLatestSummaryResponseDataPageInfo setCurrentPage(Integer currentPage) {
            this.currentPage = currentPage;
            return this;
        }
        public Integer getCurrentPage() {
            return this.currentPage;
        }

        public QuerySecCheckLatestSummaryResponseDataPageInfo setPageSize(Integer pageSize) {
            this.pageSize = pageSize;
            return this;
        }
        public Integer getPageSize() {
            return this.pageSize;
        }

        public QuerySecCheckLatestSummaryResponseDataPageInfo setTotal(Integer total) {
            this.total = total;
            return this;
        }
        public Integer getTotal() {
            return this.total;
        }

    }

    public static class QuerySecCheckLatestSummaryResponseData extends TeaModel {
        @NameInMap("List")
        @Validation(required = true)
        public java.util.List<QuerySecCheckLatestSummaryResponseDataList> list;

        @NameInMap("PageInfo")
        @Validation(required = true)
        public QuerySecCheckLatestSummaryResponseDataPageInfo pageInfo;

        public static QuerySecCheckLatestSummaryResponseData build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckLatestSummaryResponseData self = new QuerySecCheckLatestSummaryResponseData();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckLatestSummaryResponseData setList(java.util.List<QuerySecCheckLatestSummaryResponseDataList> list) {
            this.list = list;
            return this;
        }
        public java.util.List<QuerySecCheckLatestSummaryResponseDataList> getList() {
            return this.list;
        }

        public QuerySecCheckLatestSummaryResponseData setPageInfo(QuerySecCheckLatestSummaryResponseDataPageInfo pageInfo) {
            this.pageInfo = pageInfo;
            return this;
        }
        public QuerySecCheckLatestSummaryResponseDataPageInfo getPageInfo() {
            return this.pageInfo;
        }

    }

}
