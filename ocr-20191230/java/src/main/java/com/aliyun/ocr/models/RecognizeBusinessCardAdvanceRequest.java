// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeBusinessCardAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    public static RecognizeBusinessCardAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeBusinessCardAdvanceRequest self = new RecognizeBusinessCardAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
