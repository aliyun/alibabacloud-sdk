// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySiteCheckConfigsRequest extends TeaModel {
    @NameInMap("SiteDomain")
    public String siteDomain;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("Page")
    public Integer page;

    @NameInMap("CheckId")
    public Long checkId;

    public static QuerySiteCheckConfigsRequest build(java.util.Map<String, ?> map) throws Exception {
        QuerySiteCheckConfigsRequest self = new QuerySiteCheckConfigsRequest();
        return TeaModel.build(map, self);
    }

    public QuerySiteCheckConfigsRequest setSiteDomain(String siteDomain) {
        this.siteDomain = siteDomain;
        return this;
    }
    public String getSiteDomain() {
        return this.siteDomain;
    }

    public QuerySiteCheckConfigsRequest setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

    public QuerySiteCheckConfigsRequest setPage(Integer page) {
        this.page = page;
        return this;
    }
    public Integer getPage() {
        return this.page;
    }

    public QuerySiteCheckConfigsRequest setCheckId(Long checkId) {
        this.checkId = checkId;
        return this;
    }
    public Long getCheckId() {
        return this.checkId;
    }

}
