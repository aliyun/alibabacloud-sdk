// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySiteCheckProgressRequest extends TeaModel {
    @NameInMap("CheckId")
    @Validation(required = true)
    public Long checkId;

    @NameInMap("Type")
    @Validation(required = true)
    public String type;

    @NameInMap("Page")
    public Integer page;

    @NameInMap("PageSize")
    public Integer pageSize;

    public static QuerySiteCheckProgressRequest build(java.util.Map<String, ?> map) throws Exception {
        QuerySiteCheckProgressRequest self = new QuerySiteCheckProgressRequest();
        return TeaModel.build(map, self);
    }

    public QuerySiteCheckProgressRequest setCheckId(Long checkId) {
        this.checkId = checkId;
        return this;
    }
    public Long getCheckId() {
        return this.checkId;
    }

    public QuerySiteCheckProgressRequest setType(String type) {
        this.type = type;
        return this;
    }
    public String getType() {
        return this.type;
    }

    public QuerySiteCheckProgressRequest setPage(Integer page) {
        this.page = page;
        return this;
    }
    public Integer getPage() {
        return this.page;
    }

    public QuerySiteCheckProgressRequest setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

}
