// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class UploadOwnedDomainsRequest extends TeaModel {
    @NameInMap("IsOverWrite")
    public Boolean isOverWrite;

    @NameInMap("DomainList")
    public java.util.Map<String, ?> domainList;

    public static UploadOwnedDomainsRequest build(java.util.Map<String, ?> map) throws Exception {
        UploadOwnedDomainsRequest self = new UploadOwnedDomainsRequest();
        return TeaModel.build(map, self);
    }

    public UploadOwnedDomainsRequest setIsOverWrite(Boolean isOverWrite) {
        this.isOverWrite = isOverWrite;
        return this;
    }
    public Boolean getIsOverWrite() {
        return this.isOverWrite;
    }

    public UploadOwnedDomainsRequest setDomainList(java.util.Map<String, ?> domainList) {
        this.domainList = domainList;
        return this;
    }
    public java.util.Map<String, ?> getDomainList() {
        return this.domainList;
    }

}
