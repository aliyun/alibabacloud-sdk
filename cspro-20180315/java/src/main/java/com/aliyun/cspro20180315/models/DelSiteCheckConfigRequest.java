// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class DelSiteCheckConfigRequest extends TeaModel {
    @NameInMap("Id")
    @Validation(required = true)
    public Long id;

    public static DelSiteCheckConfigRequest build(java.util.Map<String, ?> map) throws Exception {
        DelSiteCheckConfigRequest self = new DelSiteCheckConfigRequest();
        return TeaModel.build(map, self);
    }

    public DelSiteCheckConfigRequest setId(Long id) {
        this.id = id;
        return this;
    }
    public Long getId() {
        return this.id;
    }

}
