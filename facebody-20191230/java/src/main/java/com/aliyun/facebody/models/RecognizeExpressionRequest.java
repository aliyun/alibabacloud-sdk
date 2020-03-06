// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class RecognizeExpressionRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static RecognizeExpressionRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeExpressionRequest self = new RecognizeExpressionRequest();
        return TeaModel.build(map, self);
    }

}
