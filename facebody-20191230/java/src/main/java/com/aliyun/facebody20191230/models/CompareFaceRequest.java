// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class CompareFaceRequest extends TeaModel {
    @NameInMap("ImageURLA")
    @Validation(required = true)
    public String imageURLA;

    @NameInMap("ImageURLB")
    @Validation(required = true)
    public String imageURLB;

    public static CompareFaceRequest build(java.util.Map<String, ?> map) throws Exception {
        CompareFaceRequest self = new CompareFaceRequest();
        return TeaModel.build(map, self);
    }

}
