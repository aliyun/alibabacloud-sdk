// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class SetDirQuotaRequest extends TeaModel {
    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("Path")
    @Validation(required = true)
    public String path;

    @NameInMap("QuotaType")
    @Validation(required = true)
    public String quotaType;

    @NameInMap("UserType")
    @Validation(required = true)
    public String userType;

    @NameInMap("UserId")
    public String userId;

    @NameInMap("SizeLimit")
    public Long sizeLimit;

    @NameInMap("FileCountLimit")
    public Long fileCountLimit;

    public static SetDirQuotaRequest build(java.util.Map<String, ?> map) throws Exception {
        SetDirQuotaRequest self = new SetDirQuotaRequest();
        return TeaModel.build(map, self);
    }

}
