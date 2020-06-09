// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class RemoveClientFromBlackListRequest extends TeaModel {
    @NameInMap("RegionId")
    @Validation(required = true)
    public String regionId;

    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("ClientIP")
    @Validation(required = true)
    public String clientIP;

    @NameInMap("ClientToken")
    @Validation(required = true)
    public String clientToken;

    public static RemoveClientFromBlackListRequest build(java.util.Map<String, ?> map) throws Exception {
        RemoveClientFromBlackListRequest self = new RemoveClientFromBlackListRequest();
        return TeaModel.build(map, self);
    }

}
