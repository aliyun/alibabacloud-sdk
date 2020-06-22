// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class DescribePricingModuleRequest : TeaModel {
        [NameInMap("ProductCode")]
        [Validation(Required=true)]
        public string ProductCode { get; set; }

        [NameInMap("ProductType")]
        [Validation(Required=false)]
        public string ProductType { get; set; }

        [NameInMap("SubscriptionType")]
        [Validation(Required=true)]
        public string SubscriptionType { get; set; }

    }

}
