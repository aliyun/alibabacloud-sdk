// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imgsearch.models;

import com.aliyun.tea.*;

public class ListImagesRequest extends TeaModel {
    @NameInMap("DbName")
    @Validation(required = true)
    public String dbName;

    @NameInMap("FromScrollId")
    public String fromScrollId;

    public static ListImagesRequest build(java.util.Map<String, ?> map) throws Exception {
        ListImagesRequest self = new ListImagesRequest();
        return TeaModel.build(map, self);
    }

}
