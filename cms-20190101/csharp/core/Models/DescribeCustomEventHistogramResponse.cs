// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeCustomEventHistogramResponse : TeaModel {
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
        public string Success { get; set; }

        [NameInMap("EventHistograms")]
        [Validation(Required=true)]
        public DescribeCustomEventHistogramResponseEventHistograms EventHistograms { get; set; }
        public class DescribeCustomEventHistogramResponseEventHistograms : TeaModel {
            [NameInMap("EventHistogram")]
            [Validation(Required=true)]
            public List<DescribeCustomEventHistogramResponseEventHistogramsEventHistogram> EventHistogram { get; set; }
            public class DescribeCustomEventHistogramResponseEventHistogramsEventHistogram : TeaModel {
                    public long Count { get; set; }
                    public long StartTime { get; set; }
                    public long EndTime { get; set; }
            }
        };

    }

}
