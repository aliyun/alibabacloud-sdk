// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetSnapshotInfoRequest extends TeaModel {
    @NameInMap("SnapshotKey")
    @Validation(required = true)
    public String snapshotKey;

    public static GetSnapshotInfoRequest build(java.util.Map<String, ?> map) throws Exception {
        GetSnapshotInfoRequest self = new GetSnapshotInfoRequest();
        return TeaModel.build(map, self);
    }

    public GetSnapshotInfoRequest setSnapshotKey(String snapshotKey) {
        this.snapshotKey = snapshotKey;
        return this;
    }
    public String getSnapshotKey() {
        return this.snapshotKey;
    }

}
