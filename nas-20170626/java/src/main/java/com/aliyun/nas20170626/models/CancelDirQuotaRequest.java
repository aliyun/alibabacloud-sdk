// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class CancelDirQuotaRequest extends TeaModel {
    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("Path")
    @Validation(required = true)
    public String path;

    @NameInMap("UserType")
    @Validation(required = true)
    public String userType;

    @NameInMap("UserId")
    public String userId;

    public static CancelDirQuotaRequest build(java.util.Map<String, ?> map) throws Exception {
        CancelDirQuotaRequest self = new CancelDirQuotaRequest();
        return TeaModel.build(map, self);
    }

}
