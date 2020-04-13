// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ocr20191230.Models
{
    public class RecognizeVerificationcodeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeVerificationcodeResponseData Data { get; set; }
        public class RecognizeVerificationcodeResponseData : TeaModel {
            [NameInMap("Content")]
            [Validation(Required=true)]
            public string Content { get; set; }
        };

    }

}
