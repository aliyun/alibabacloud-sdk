// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class RenewResourcePackageRequest : TeaModel {
        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("EffectiveDate")]
        [Validation(Required=false)]
        public string EffectiveDate { get; set; }

        [NameInMap("Duration")]
        [Validation(Required=true)]
        public int? Duration { get; set; }

        [NameInMap("PricingCycle")]
        [Validation(Required=true)]
        public string PricingCycle { get; set; }

    }

}
