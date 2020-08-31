// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySecCheckSampleLibsRequest extends TeaModel {
    @NameInMap("Type")
    public String type;

    @NameInMap("LibId")
    public Long libId;

    @NameInMap("CurrentPage")
    @Validation(required = true)
    public Integer currentPage;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    public static QuerySecCheckSampleLibsRequest build(java.util.Map<String, ?> map) throws Exception {
        QuerySecCheckSampleLibsRequest self = new QuerySecCheckSampleLibsRequest();
        return TeaModel.build(map, self);
    }

    public QuerySecCheckSampleLibsRequest setType(String type) {
        this.type = type;
        return this;
    }
    public String getType() {
        return this.type;
    }

    public QuerySecCheckSampleLibsRequest setLibId(Long libId) {
        this.libId = libId;
        return this;
    }
    public Long getLibId() {
        return this.libId;
    }

    public QuerySecCheckSampleLibsRequest setCurrentPage(Integer currentPage) {
        this.currentPage = currentPage;
        return this;
    }
    public Integer getCurrentPage() {
        return this.currentPage;
    }

    public QuerySecCheckSampleLibsRequest setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

}
