// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.emas_devops20191204.models;

import com.aliyun.tea.*;

public class CreateBuildTaskResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("BuildTaskBid")
    @Validation(required = true)
    public String buildTaskBid;

    public static CreateBuildTaskResponse build(java.util.Map<String, ?> map) throws Exception {
        CreateBuildTaskResponse self = new CreateBuildTaskResponse();
        return TeaModel.build(map, self);
    }

    public CreateBuildTaskResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public CreateBuildTaskResponse setBuildTaskBid(String buildTaskBid) {
        this.buildTaskBid = buildTaskBid;
        return this;
    }
    public String getBuildTaskBid() {
        return this.buildTaskBid;
    }

}
