// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeSystemEventMetaListResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public int? Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DescribeSystemEventMetaListResponseData Data { get; set; }
        public class DescribeSystemEventMetaListResponseData : TeaModel {
            [NameInMap("Resource")]
            [Validation(Required=true)]
            public List<DescribeSystemEventMetaListResponseDataResource> Resource { get; set; }
            public class DescribeSystemEventMetaListResponseDataResource : TeaModel {
                    public string Product { get; set; }
                    public string Name { get; set; }
                    public string NameDesc { get; set; }
                    public string Level { get; set; }
                    public string Status { get; set; }
                    public string StatusDesc { get; set; }
                    public string EventType { get; set; }
            }
        };

    }

}
