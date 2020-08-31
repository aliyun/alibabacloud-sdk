// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySecCheckSamplesRequest extends TeaModel {
    @NameInMap("LibId")
    @Validation(required = true)
    public Long libId;

    @NameInMap("Type")
    @Validation(required = true)
    public String type;

    @NameInMap("CurrentPage")
    @Validation(required = true)
    public Integer currentPage;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    public static QuerySecCheckSamplesRequest build(java.util.Map<String, ?> map) throws Exception {
        QuerySecCheckSamplesRequest self = new QuerySecCheckSamplesRequest();
        return TeaModel.build(map, self);
    }

    public QuerySecCheckSamplesRequest setLibId(Long libId) {
        this.libId = libId;
        return this;
    }
    public Long getLibId() {
        return this.libId;
    }

    public QuerySecCheckSamplesRequest setType(String type) {
        this.type = type;
        return this;
    }
    public String getType() {
        return this.type;
    }

    public QuerySecCheckSamplesRequest setCurrentPage(Integer currentPage) {
        this.currentPage = currentPage;
        return this;
    }
    public Integer getCurrentPage() {
        return this.currentPage;
    }

    public QuerySecCheckSamplesRequest setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

}
