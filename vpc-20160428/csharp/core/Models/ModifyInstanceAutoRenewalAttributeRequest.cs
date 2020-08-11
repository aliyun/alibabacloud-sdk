// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ModifyInstanceAutoRenewalAttributeRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("PricingCycle")]
        [Validation(Required=true)]
        public string PricingCycle { get; set; }

        [NameInMap("Duration")]
        [Validation(Required=true)]
        public int? Duration { get; set; }

        [NameInMap("InstanceType")]
        [Validation(Required=true)]
        public string InstanceType { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("RenewalStatus")]
        [Validation(Required=false)]
        public string RenewalStatus { get; set; }

    }

}
