// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodDomainTrafficDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DomainName")]
        [Validation(Required=true)]
        public string DomainName { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("DataInterval")]
        [Validation(Required=true)]
        public string DataInterval { get; set; }

        [NameInMap("TrafficDataPerInterval")]
        [Validation(Required=true)]
        public DescribeVodDomainTrafficDataResponseTrafficDataPerInterval TrafficDataPerInterval { get; set; }
        public class DescribeVodDomainTrafficDataResponseTrafficDataPerInterval : TeaModel {
            [NameInMap("DataModule")]
            [Validation(Required=true)]
            public List<DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule> DataModule { get; set; }
            public class DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule : TeaModel {
                    public string TimeStamp { get; set; }
                    public string Value { get; set; }
                    public string DomesticValue { get; set; }
                    public string OverseasValue { get; set; }
                    public string HttpsValue { get; set; }
                    public string HttpsDomesticValue { get; set; }
                    public string HttpsOverseasValue { get; set; }
            }
        };

    }

}
