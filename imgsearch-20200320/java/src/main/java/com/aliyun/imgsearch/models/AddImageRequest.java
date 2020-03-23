// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imgsearch.models;

import com.aliyun.tea.*;

public class AddImageRequest extends TeaModel {
    @NameInMap("DbName")
    @Validation(required = true)
    public String dbName;

    @NameInMap("DataId")
    @Validation(required = true)
    public String dataId;

    @NameInMap("ImageUrl")
    @Validation(required = true)
    public String imageUrl;

    @NameInMap("ExtraData")
    public String extraData;

    @NameInMap("EntityId")
    @Validation(required = true)
    public String entityId;

    public static AddImageRequest build(java.util.Map<String, ?> map) throws Exception {
        AddImageRequest self = new AddImageRequest();
        return TeaModel.build(map, self);
    }

}
