// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.emas_devops20191204.models;

import com.aliyun.tea.*;

public class CancelBuildTaskRequest extends TeaModel {
    @NameInMap("AppKey")
    @Validation(required = true)
    public String appKey;

    @NameInMap("Bid")
    @Validation(required = true)
    public String bid;

    public static CancelBuildTaskRequest build(java.util.Map<String, ?> map) throws Exception {
        CancelBuildTaskRequest self = new CancelBuildTaskRequest();
        return TeaModel.build(map, self);
    }

    public CancelBuildTaskRequest setAppKey(String appKey) {
        this.appKey = appKey;
        return this;
    }
    public String getAppKey() {
        return this.appKey;
    }

    public CancelBuildTaskRequest setBid(String bid) {
        this.bid = bid;
        return this;
    }
    public String getBid() {
        return this.bid;
    }

}
