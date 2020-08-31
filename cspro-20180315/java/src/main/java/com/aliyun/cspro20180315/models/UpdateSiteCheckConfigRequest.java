// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class UpdateSiteCheckConfigRequest extends TeaModel {
    @NameInMap("Id")
    @Validation(required = true)
    public Long id;

    @NameInMap("SiteProtocol")
    @Validation(required = true)
    public String siteProtocol;

    @NameInMap("SiteDomain")
    @Validation(required = true)
    public String siteDomain;

    @NameInMap("IndexUrl")
    @Validation(required = true)
    public String indexUrl;

    @NameInMap("IndexCheckFrequency")
    @Validation(required = true)
    public Integer indexCheckFrequency;

    @NameInMap("SiteCheckFrequency")
    @Validation(required = true)
    public Integer siteCheckFrequency;

    @NameInMap("SetBaseLine")
    @Validation(required = true)
    public Boolean setBaseLine;

    public static UpdateSiteCheckConfigRequest build(java.util.Map<String, ?> map) throws Exception {
        UpdateSiteCheckConfigRequest self = new UpdateSiteCheckConfigRequest();
        return TeaModel.build(map, self);
    }

    public UpdateSiteCheckConfigRequest setId(Long id) {
        this.id = id;
        return this;
    }
    public Long getId() {
        return this.id;
    }

    public UpdateSiteCheckConfigRequest setSiteProtocol(String siteProtocol) {
        this.siteProtocol = siteProtocol;
        return this;
    }
    public String getSiteProtocol() {
        return this.siteProtocol;
    }

    public UpdateSiteCheckConfigRequest setSiteDomain(String siteDomain) {
        this.siteDomain = siteDomain;
        return this;
    }
    public String getSiteDomain() {
        return this.siteDomain;
    }

    public UpdateSiteCheckConfigRequest setIndexUrl(String indexUrl) {
        this.indexUrl = indexUrl;
        return this;
    }
    public String getIndexUrl() {
        return this.indexUrl;
    }

    public UpdateSiteCheckConfigRequest setIndexCheckFrequency(Integer indexCheckFrequency) {
        this.indexCheckFrequency = indexCheckFrequency;
        return this;
    }
    public Integer getIndexCheckFrequency() {
        return this.indexCheckFrequency;
    }

    public UpdateSiteCheckConfigRequest setSiteCheckFrequency(Integer siteCheckFrequency) {
        this.siteCheckFrequency = siteCheckFrequency;
        return this;
    }
    public Integer getSiteCheckFrequency() {
        return this.siteCheckFrequency;
    }

    public UpdateSiteCheckConfigRequest setSetBaseLine(Boolean setBaseLine) {
        this.setBaseLine = setBaseLine;
        return this;
    }
    public Boolean getSetBaseLine() {
        return this.setBaseLine;
    }

}
