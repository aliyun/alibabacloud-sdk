// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ModifyCommonBandwidthPackagePayTypeRequest : TeaModel {
        [NameInMap("BandwidthPackageId")]
        [Validation(Required=true)]
        public string BandwidthPackageId { get; set; }

        [NameInMap("PayType")]
        [Validation(Required=false)]
        public string PayType { get; set; }

        [NameInMap("PricingCycle")]
        [Validation(Required=false)]
        public string PricingCycle { get; set; }

        [NameInMap("Duration")]
        [Validation(Required=false)]
        public int? Duration { get; set; }

        [NameInMap("AutoPay")]
        [Validation(Required=false)]
        public bool? AutoPay { get; set; }

        [NameInMap("Bandwidth")]
        [Validation(Required=false)]
        public string Bandwidth { get; set; }

        [NameInMap("KbpsBandwidth")]
        [Validation(Required=false)]
        public string KbpsBandwidth { get; set; }

        [NameInMap("ResourceBid")]
        [Validation(Required=false)]
        public string ResourceBid { get; set; }

        [NameInMap("ResourceUid")]
        [Validation(Required=false)]
        public long ResourceUid { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

    }

}
