// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodDomainBpsDataResponse : TeaModel {
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

        [NameInMap("LocationNameEn")]
        [Validation(Required=true)]
        public string LocationNameEn { get; set; }

        [NameInMap("IspNameEn")]
        [Validation(Required=true)]
        public string IspNameEn { get; set; }

        [NameInMap("DataInterval")]
        [Validation(Required=true)]
        public string DataInterval { get; set; }

        [NameInMap("BpsDataPerInterval")]
        [Validation(Required=true)]
        public DescribeVodDomainBpsDataResponseBpsDataPerInterval BpsDataPerInterval { get; set; }
        public class DescribeVodDomainBpsDataResponseBpsDataPerInterval : TeaModel {
            [NameInMap("DataModule")]
            [Validation(Required=true)]
            public List<DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule> DataModule { get; set; }
            public class DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule : TeaModel {
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
