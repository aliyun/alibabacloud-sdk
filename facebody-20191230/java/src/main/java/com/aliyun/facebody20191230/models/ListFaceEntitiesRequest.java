// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class ListFaceEntitiesRequest extends TeaModel {
    @NameInMap("DbName")
    @Validation(required = true)
    public String dbName;

    @NameInMap("Offset")
    public Integer offset;

    @NameInMap("Limit")
    public Integer limit;

    @NameInMap("Token")
    public String token;

    @NameInMap("Labels")
    public String labels;

    @NameInMap("EntityIdPrefix")
    public String entityIdPrefix;

    @NameInMap("Order")
    public String order;

    public static ListFaceEntitiesRequest build(java.util.Map<String, ?> map) throws Exception {
        ListFaceEntitiesRequest self = new ListFaceEntitiesRequest();
        return TeaModel.build(map, self);
    }

}
