// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class SearchFaceAdvanceRequest extends TeaModel {
    @NameInMap("ImageUrlObject")
    @Validation(required = true)
    public java.io.InputStream imageUrlObject;

    @NameInMap("DbName")
    @Validation(required = true)
    public String dbName;

    @NameInMap("Limit")
    @Validation(required = true)
    public Integer limit;

    public static SearchFaceAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        SearchFaceAdvanceRequest self = new SearchFaceAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
