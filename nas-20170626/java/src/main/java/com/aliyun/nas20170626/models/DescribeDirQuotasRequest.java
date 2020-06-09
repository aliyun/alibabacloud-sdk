// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeDirQuotasRequest extends TeaModel {
    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("Path")
    public String path;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    public static DescribeDirQuotasRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeDirQuotasRequest self = new DescribeDirQuotasRequest();
        return TeaModel.build(map, self);
    }

}
