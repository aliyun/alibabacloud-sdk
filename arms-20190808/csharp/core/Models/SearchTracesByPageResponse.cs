// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchTracesByPageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageBean")]
        [Validation(Required=true)]
        public SearchTracesByPageResponsePageBean PageBean { get; set; }
        public class SearchTracesByPageResponsePageBean : TeaModel {
            [NameInMap("Total")]
            [Validation(Required=true)]
            public int? Total { get; set; }
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TraceInfos")]
            [Validation(Required=true)]
            public List<SearchTracesByPageResponsePageBeanTraceInfos> TraceInfos { get; set; }
            public class SearchTracesByPageResponsePageBeanTraceInfos : TeaModel {
                    public string TraceID { get; set; }
                    public string OperationName { get; set; }
                    public string ServiceName { get; set; }
                    public string ServiceIp { get; set; }
                    public long Duration { get; set; }
                    public long Timestamp { get; set; }
            }
        };

    }

}
