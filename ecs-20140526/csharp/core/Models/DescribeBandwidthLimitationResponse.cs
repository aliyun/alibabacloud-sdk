// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeBandwidthLimitationResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Bandwidths")]
        [Validation(Required=true)]
        public DescribeBandwidthLimitationResponseBandwidths Bandwidths { get; set; }
        public class DescribeBandwidthLimitationResponseBandwidths : TeaModel {
            [NameInMap("Bandwidth")]
            [Validation(Required=true)]
            public List<DescribeBandwidthLimitationResponseBandwidthsBandwidth> Bandwidth { get; set; }
            public class DescribeBandwidthLimitationResponseBandwidthsBandwidth : TeaModel {
                    public string InternetChargeType { get; set; }
                    public int? Min { get; set; }
                    public int? Max { get; set; }
                    public string Unit { get; set; }
            }
        };

    }

}
