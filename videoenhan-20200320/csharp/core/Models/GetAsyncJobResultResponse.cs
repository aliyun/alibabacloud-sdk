// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Videoenhan.Models
{
    public class GetAsyncJobResultResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetAsyncJobResultResponseData Data { get; set; }
        public class GetAsyncJobResultResponseData : TeaModel {
            [NameInMap("JobId")]
            [Validation(Required=true)]
            public string JobId { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("Result")]
            [Validation(Required=true)]
            public string Result { get; set; }
            [NameInMap("ErrorCode")]
            [Validation(Required=true)]
            public string ErrorCode { get; set; }
            [NameInMap("ErrorMessage")]
            [Validation(Required=true)]
            public string ErrorMessage { get; set; }
        };

    }

}
