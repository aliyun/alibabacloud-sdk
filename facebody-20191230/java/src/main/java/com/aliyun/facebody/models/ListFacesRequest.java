// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class ListFacesRequest extends TeaModel {
    @NameInMap("DbName")
    @Validation(required = true)
    public String dbName;

    @NameInMap("FromScrollId")
    public String fromScrollId;

    public static ListFacesRequest build(java.util.Map<String, ?> map) throws Exception {
        ListFacesRequest self = new ListFacesRequest();
        return TeaModel.build(map, self);
    }

}
