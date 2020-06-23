// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchTraceAppByNameResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TraceApps")]
        [Validation(Required=true)]
        public List<SearchTraceAppByNameResponseTraceApps> TraceApps { get; set; }
        public class SearchTraceAppByNameResponseTraceApps : TeaModel {
            [NameInMap("AppId")]
            [Validation(Required=true)]
            public long AppId { get; set; }

            [NameInMap("Pid")]
            [Validation(Required=true)]
            public string Pid { get; set; }

            [NameInMap("AppName")]
            [Validation(Required=true)]
            public string AppName { get; set; }

            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }

            [NameInMap("UserId")]
            [Validation(Required=true)]
            public string UserId { get; set; }

            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public long CreateTime { get; set; }

            [NameInMap("UpdateTime")]
            [Validation(Required=true)]
            public long UpdateTime { get; set; }

        }

    }

}
