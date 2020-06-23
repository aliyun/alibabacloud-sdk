// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchTraceAppByPageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageBean")]
        [Validation(Required=true)]
        public SearchTraceAppByPageResponsePageBean PageBean { get; set; }
        public class SearchTraceAppByPageResponsePageBean : TeaModel {
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TraceApps")]
            [Validation(Required=true)]
            public List<SearchTraceAppByPageResponsePageBeanTraceApps> TraceApps { get; set; }
            public class SearchTraceAppByPageResponsePageBeanTraceApps : TeaModel {
                    public long AppId { get; set; }
                    public string Pid { get; set; }
                    public string AppName { get; set; }
                    public string Type { get; set; }
                    public string UserId { get; set; }
                    public string RegionId { get; set; }
                    public long CreateTime { get; set; }
                    public long UpdateTime { get; set; }
            }
        };

    }

}
