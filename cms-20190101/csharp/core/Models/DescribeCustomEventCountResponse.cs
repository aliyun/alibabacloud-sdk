// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeCustomEventCountResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("CustomEventCounts")]
        [Validation(Required=true)]
        public DescribeCustomEventCountResponseCustomEventCounts CustomEventCounts { get; set; }
        public class DescribeCustomEventCountResponseCustomEventCounts : TeaModel {
            [NameInMap("CustomEventCount")]
            [Validation(Required=true)]
            public List<DescribeCustomEventCountResponseCustomEventCountsCustomEventCount> CustomEventCount { get; set; }
            public class DescribeCustomEventCountResponseCustomEventCountsCustomEventCount : TeaModel {
                    public string Name { get; set; }
                    public int? Num { get; set; }
                    public long Time { get; set; }
            }
        };

    }

}
