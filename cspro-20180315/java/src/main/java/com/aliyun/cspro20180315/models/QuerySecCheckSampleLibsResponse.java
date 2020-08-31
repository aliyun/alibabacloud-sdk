// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySecCheckSampleLibsResponse extends TeaModel {
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
    public QuerySecCheckSampleLibsResponseData data;

    public static QuerySecCheckSampleLibsResponse build(java.util.Map<String, ?> map) throws Exception {
        QuerySecCheckSampleLibsResponse self = new QuerySecCheckSampleLibsResponse();
        return TeaModel.build(map, self);
    }

    public QuerySecCheckSampleLibsResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public QuerySecCheckSampleLibsResponse setSuccess(Boolean success) {
        this.success = success;
        return this;
    }
    public Boolean getSuccess() {
        return this.success;
    }

    public QuerySecCheckSampleLibsResponse setCode(String code) {
        this.code = code;
        return this;
    }
    public String getCode() {
        return this.code;
    }

    public QuerySecCheckSampleLibsResponse setMessage(String message) {
        this.message = message;
        return this;
    }
    public String getMessage() {
        return this.message;
    }

    public QuerySecCheckSampleLibsResponse setData(QuerySecCheckSampleLibsResponseData data) {
        this.data = data;
        return this;
    }
    public QuerySecCheckSampleLibsResponseData getData() {
        return this.data;
    }

    public static class QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO extends TeaModel {
        @NameInMap("Id")
        @Validation(required = true)
        public Long id;

        @NameInMap("Type")
        @Validation(required = true)
        public String type;

        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Extras")
        @Validation(required = true)
        public String extras;

        public static QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO self = new QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO setId(Long id) {
            this.id = id;
            return this;
        }
        public Long getId() {
            return this.id;
        }

        public QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO setType(String type) {
            this.type = type;
            return this;
        }
        public String getType() {
            return this.type;
        }

        public QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO setName(String name) {
            this.name = name;
            return this;
        }
        public String getName() {
            return this.name;
        }

        public QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO setExtras(String extras) {
            this.extras = extras;
            return this;
        }
        public String getExtras() {
            return this.extras;
        }

    }

    public static class QuerySecCheckSampleLibsResponseDataList extends TeaModel {
        @NameInMap("OmniSecCheckSampleLibDTO")
        @Validation(required = true)
        public java.util.List<QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO> omniSecCheckSampleLibDTO;

        public static QuerySecCheckSampleLibsResponseDataList build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckSampleLibsResponseDataList self = new QuerySecCheckSampleLibsResponseDataList();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckSampleLibsResponseDataList setOmniSecCheckSampleLibDTO(java.util.List<QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO> omniSecCheckSampleLibDTO) {
            this.omniSecCheckSampleLibDTO = omniSecCheckSampleLibDTO;
            return this;
        }
        public java.util.List<QuerySecCheckSampleLibsResponseDataListOmniSecCheckSampleLibDTO> getOmniSecCheckSampleLibDTO() {
            return this.omniSecCheckSampleLibDTO;
        }

    }

    public static class QuerySecCheckSampleLibsResponseDataPageInfo extends TeaModel {
        @NameInMap("CurrentPage")
        @Validation(required = true)
        public Integer currentPage;

        @NameInMap("PageSize")
        @Validation(required = true)
        public Integer pageSize;

        @NameInMap("Total")
        @Validation(required = true)
        public Integer total;

        public static QuerySecCheckSampleLibsResponseDataPageInfo build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckSampleLibsResponseDataPageInfo self = new QuerySecCheckSampleLibsResponseDataPageInfo();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckSampleLibsResponseDataPageInfo setCurrentPage(Integer currentPage) {
            this.currentPage = currentPage;
            return this;
        }
        public Integer getCurrentPage() {
            return this.currentPage;
        }

        public QuerySecCheckSampleLibsResponseDataPageInfo setPageSize(Integer pageSize) {
            this.pageSize = pageSize;
            return this;
        }
        public Integer getPageSize() {
            return this.pageSize;
        }

        public QuerySecCheckSampleLibsResponseDataPageInfo setTotal(Integer total) {
            this.total = total;
            return this;
        }
        public Integer getTotal() {
            return this.total;
        }

    }

    public static class QuerySecCheckSampleLibsResponseData extends TeaModel {
        @NameInMap("List")
        @Validation(required = true)
        public QuerySecCheckSampleLibsResponseDataList list;

        @NameInMap("PageInfo")
        @Validation(required = true)
        public QuerySecCheckSampleLibsResponseDataPageInfo pageInfo;

        public static QuerySecCheckSampleLibsResponseData build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckSampleLibsResponseData self = new QuerySecCheckSampleLibsResponseData();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckSampleLibsResponseData setList(QuerySecCheckSampleLibsResponseDataList list) {
            this.list = list;
            return this;
        }
        public QuerySecCheckSampleLibsResponseDataList getList() {
            return this.list;
        }

        public QuerySecCheckSampleLibsResponseData setPageInfo(QuerySecCheckSampleLibsResponseDataPageInfo pageInfo) {
            this.pageInfo = pageInfo;
            return this;
        }
        public QuerySecCheckSampleLibsResponseDataPageInfo getPageInfo() {
            return this.pageInfo;
        }

    }

}
