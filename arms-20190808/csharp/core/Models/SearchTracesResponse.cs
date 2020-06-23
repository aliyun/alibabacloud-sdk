// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchTracesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TraceInfos")]
        [Validation(Required=true)]
        public List<SearchTracesResponseTraceInfos> TraceInfos { get; set; }
        public class SearchTracesResponseTraceInfos : TeaModel {
            [NameInMap("TraceID")]
            [Validation(Required=true)]
            public string TraceID { get; set; }

            [NameInMap("OperationName")]
            [Validation(Required=true)]
            public string OperationName { get; set; }

            [NameInMap("ServiceName")]
            [Validation(Required=true)]
            public string ServiceName { get; set; }

            [NameInMap("ServiceIp")]
            [Validation(Required=true)]
            public string ServiceIp { get; set; }

            [NameInMap("Duration")]
            [Validation(Required=true)]
            public long Duration { get; set; }

            [NameInMap("Timestamp")]
            [Validation(Required=true)]
            public long Timestamp { get; set; }

        }

    }

}
