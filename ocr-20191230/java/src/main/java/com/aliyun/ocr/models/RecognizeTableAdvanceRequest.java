// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeTableAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("OutputFormat")
    @Validation(required = true)
    public String outputFormat;

    @NameInMap("UseFinanceModel")
    @Validation(required = true)
    public boolean useFinanceModel;

    @NameInMap("AssureDirection")
    @Validation(required = true)
    public boolean assureDirection;

    @NameInMap("HasLine")
    @Validation(required = true)
    public boolean hasLine;

    @NameInMap("SkipDetection")
    @Validation(required = true)
    public boolean skipDetection;

    public static RecognizeTableAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeTableAdvanceRequest self = new RecognizeTableAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
