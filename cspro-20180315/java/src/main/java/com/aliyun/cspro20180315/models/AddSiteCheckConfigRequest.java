// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class AddSiteCheckConfigRequest extends TeaModel {
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

    public static AddSiteCheckConfigRequest build(java.util.Map<String, ?> map) throws Exception {
        AddSiteCheckConfigRequest self = new AddSiteCheckConfigRequest();
        return TeaModel.build(map, self);
    }

    public AddSiteCheckConfigRequest setSiteProtocol(String siteProtocol) {
        this.siteProtocol = siteProtocol;
        return this;
    }
    public String getSiteProtocol() {
        return this.siteProtocol;
    }

    public AddSiteCheckConfigRequest setSiteDomain(String siteDomain) {
        this.siteDomain = siteDomain;
        return this;
    }
    public String getSiteDomain() {
        return this.siteDomain;
    }

    public AddSiteCheckConfigRequest setIndexUrl(String indexUrl) {
        this.indexUrl = indexUrl;
        return this;
    }
    public String getIndexUrl() {
        return this.indexUrl;
    }

    public AddSiteCheckConfigRequest setIndexCheckFrequency(Integer indexCheckFrequency) {
        this.indexCheckFrequency = indexCheckFrequency;
        return this;
    }
    public Integer getIndexCheckFrequency() {
        return this.indexCheckFrequency;
    }

    public AddSiteCheckConfigRequest setSiteCheckFrequency(Integer siteCheckFrequency) {
        this.siteCheckFrequency = siteCheckFrequency;
        return this;
    }
    public Integer getSiteCheckFrequency() {
        return this.siteCheckFrequency;
    }

    public AddSiteCheckConfigRequest setSetBaseLine(Boolean setBaseLine) {
        this.setBaseLine = setBaseLine;
        return this;
    }
    public Boolean getSetBaseLine() {
        return this.setBaseLine;
    }

}
