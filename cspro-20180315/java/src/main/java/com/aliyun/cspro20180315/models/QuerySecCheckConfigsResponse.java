// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySecCheckConfigsResponse extends TeaModel {
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
    public QuerySecCheckConfigsResponseData data;

    public static QuerySecCheckConfigsResponse build(java.util.Map<String, ?> map) throws Exception {
        QuerySecCheckConfigsResponse self = new QuerySecCheckConfigsResponse();
        return TeaModel.build(map, self);
    }

    public QuerySecCheckConfigsResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public QuerySecCheckConfigsResponse setSuccess(Boolean success) {
        this.success = success;
        return this;
    }
    public Boolean getSuccess() {
        return this.success;
    }

    public QuerySecCheckConfigsResponse setCode(String code) {
        this.code = code;
        return this;
    }
    public String getCode() {
        return this.code;
    }

    public QuerySecCheckConfigsResponse setMessage(String message) {
        this.message = message;
        return this;
    }
    public String getMessage() {
        return this.message;
    }

    public QuerySecCheckConfigsResponse setData(QuerySecCheckConfigsResponseData data) {
        this.data = data;
        return this;
    }
    public QuerySecCheckConfigsResponseData getData() {
        return this.data;
    }

    public static class QuerySecCheckConfigsResponseDataListCheckDetailDTOList extends TeaModel {
        @NameInMap("CheckType")
        @Validation(required = true)
        public String checkType;

        @NameInMap("CheckIntervalUnit")
        @Validation(required = true)
        public String checkIntervalUnit;

        @NameInMap("CheckIntervalVal")
        @Validation(required = true)
        public String checkIntervalVal;

        @NameInMap("CheckExtras")
        @Validation(required = true)
        public String checkExtras;

        public static QuerySecCheckConfigsResponseDataListCheckDetailDTOList build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckConfigsResponseDataListCheckDetailDTOList self = new QuerySecCheckConfigsResponseDataListCheckDetailDTOList();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckConfigsResponseDataListCheckDetailDTOList setCheckType(String checkType) {
            this.checkType = checkType;
            return this;
        }
        public String getCheckType() {
            return this.checkType;
        }

        public QuerySecCheckConfigsResponseDataListCheckDetailDTOList setCheckIntervalUnit(String checkIntervalUnit) {
            this.checkIntervalUnit = checkIntervalUnit;
            return this;
        }
        public String getCheckIntervalUnit() {
            return this.checkIntervalUnit;
        }

        public QuerySecCheckConfigsResponseDataListCheckDetailDTOList setCheckIntervalVal(String checkIntervalVal) {
            this.checkIntervalVal = checkIntervalVal;
            return this;
        }
        public String getCheckIntervalVal() {
            return this.checkIntervalVal;
        }

        public QuerySecCheckConfigsResponseDataListCheckDetailDTOList setCheckExtras(String checkExtras) {
            this.checkExtras = checkExtras;
            return this;
        }
        public String getCheckExtras() {
            return this.checkExtras;
        }

    }

    public static class QuerySecCheckConfigsResponseDataList extends TeaModel {
        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("ConfType")
        @Validation(required = true)
        public String confType;

        @NameInMap("CheckTarget")
        @Validation(required = true)
        public String checkTarget;

        @NameInMap("Extras")
        @Validation(required = true)
        public String extras;

        @NameInMap("Valid")
        @Validation(required = true)
        public Boolean valid;

        @NameInMap("Accessible")
        @Validation(required = true)
        public Boolean accessible;

        @NameInMap("Id")
        @Validation(required = true)
        public Long id;

        @NameInMap("Spec")
        @Validation(required = true)
        public String spec;

        @NameInMap("CheckDetailDTOList")
        @Validation(required = true)
        public java.util.List<QuerySecCheckConfigsResponseDataListCheckDetailDTOList> checkDetailDTOList;

        public static QuerySecCheckConfigsResponseDataList build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckConfigsResponseDataList self = new QuerySecCheckConfigsResponseDataList();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckConfigsResponseDataList setName(String name) {
            this.name = name;
            return this;
        }
        public String getName() {
            return this.name;
        }

        public QuerySecCheckConfigsResponseDataList setConfType(String confType) {
            this.confType = confType;
            return this;
        }
        public String getConfType() {
            return this.confType;
        }

        public QuerySecCheckConfigsResponseDataList setCheckTarget(String checkTarget) {
            this.checkTarget = checkTarget;
            return this;
        }
        public String getCheckTarget() {
            return this.checkTarget;
        }

        public QuerySecCheckConfigsResponseDataList setExtras(String extras) {
            this.extras = extras;
            return this;
        }
        public String getExtras() {
            return this.extras;
        }

        public QuerySecCheckConfigsResponseDataList setValid(Boolean valid) {
            this.valid = valid;
            return this;
        }
        public Boolean getValid() {
            return this.valid;
        }

        public QuerySecCheckConfigsResponseDataList setAccessible(Boolean accessible) {
            this.accessible = accessible;
            return this;
        }
        public Boolean getAccessible() {
            return this.accessible;
        }

        public QuerySecCheckConfigsResponseDataList setId(Long id) {
            this.id = id;
            return this;
        }
        public Long getId() {
            return this.id;
        }

        public QuerySecCheckConfigsResponseDataList setSpec(String spec) {
            this.spec = spec;
            return this;
        }
        public String getSpec() {
            return this.spec;
        }

        public QuerySecCheckConfigsResponseDataList setCheckDetailDTOList(java.util.List<QuerySecCheckConfigsResponseDataListCheckDetailDTOList> checkDetailDTOList) {
            this.checkDetailDTOList = checkDetailDTOList;
            return this;
        }
        public java.util.List<QuerySecCheckConfigsResponseDataListCheckDetailDTOList> getCheckDetailDTOList() {
            return this.checkDetailDTOList;
        }

    }

    public static class QuerySecCheckConfigsResponseDataPageInfo extends TeaModel {
        @NameInMap("CurrentPage")
        @Validation(required = true)
        public Integer currentPage;

        @NameInMap("PageSize")
        @Validation(required = true)
        public Integer pageSize;

        @NameInMap("Total")
        @Validation(required = true)
        public Integer total;

        public static QuerySecCheckConfigsResponseDataPageInfo build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckConfigsResponseDataPageInfo self = new QuerySecCheckConfigsResponseDataPageInfo();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckConfigsResponseDataPageInfo setCurrentPage(Integer currentPage) {
            this.currentPage = currentPage;
            return this;
        }
        public Integer getCurrentPage() {
            return this.currentPage;
        }

        public QuerySecCheckConfigsResponseDataPageInfo setPageSize(Integer pageSize) {
            this.pageSize = pageSize;
            return this;
        }
        public Integer getPageSize() {
            return this.pageSize;
        }

        public QuerySecCheckConfigsResponseDataPageInfo setTotal(Integer total) {
            this.total = total;
            return this;
        }
        public Integer getTotal() {
            return this.total;
        }

    }

    public static class QuerySecCheckConfigsResponseData extends TeaModel {
        @NameInMap("List")
        @Validation(required = true)
        public java.util.List<QuerySecCheckConfigsResponseDataList> list;

        @NameInMap("PageInfo")
        @Validation(required = true)
        public QuerySecCheckConfigsResponseDataPageInfo pageInfo;

        public static QuerySecCheckConfigsResponseData build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckConfigsResponseData self = new QuerySecCheckConfigsResponseData();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckConfigsResponseData setList(java.util.List<QuerySecCheckConfigsResponseDataList> list) {
            this.list = list;
            return this;
        }
        public java.util.List<QuerySecCheckConfigsResponseDataList> getList() {
            return this.list;
        }

        public QuerySecCheckConfigsResponseData setPageInfo(QuerySecCheckConfigsResponseDataPageInfo pageInfo) {
            this.pageInfo = pageInfo;
            return this;
        }
        public QuerySecCheckConfigsResponseDataPageInfo getPageInfo() {
            return this.pageInfo;
        }

    }

}
