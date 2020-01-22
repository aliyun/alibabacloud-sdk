// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeBankCardAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("ImageType")
    public Integer imageType;

    public static RecognizeBankCardAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeBankCardAdvanceRequest self = new RecognizeBankCardAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
