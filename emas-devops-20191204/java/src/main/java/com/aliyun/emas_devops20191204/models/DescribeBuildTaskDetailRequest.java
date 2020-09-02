// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.emas_devops20191204.models;

import com.aliyun.tea.*;

public class DescribeBuildTaskDetailRequest extends TeaModel {
    @NameInMap("AppKey")
    public String appKey;

    @NameInMap("Bid")
    public String bid;

    public static DescribeBuildTaskDetailRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeBuildTaskDetailRequest self = new DescribeBuildTaskDetailRequest();
        return TeaModel.build(map, self);
    }

    public DescribeBuildTaskDetailRequest setAppKey(String appKey) {
        this.appKey = appKey;
        return this;
    }
    public String getAppKey() {
        return this.appKey;
    }

    public DescribeBuildTaskDetailRequest setBid(String bid) {
        this.bid = bid;
        return this;
    }
    public String getBid() {
        return this.bid;
    }

}
