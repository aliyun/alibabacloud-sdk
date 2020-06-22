// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class SetRenewalRequest : TeaModel {
        [NameInMap("RenewalPeriod")]
        [Validation(Required=false)]
        public int? RenewalPeriod { get; set; }

        [NameInMap("InstanceIDs")]
        [Validation(Required=true)]
        public string InstanceIDs { get; set; }

        [NameInMap("ProductCode")]
        [Validation(Required=false)]
        public string ProductCode { get; set; }

        [NameInMap("ProductType")]
        [Validation(Required=false)]
        public string ProductType { get; set; }

        [NameInMap("SubscriptionType")]
        [Validation(Required=false)]
        public string SubscriptionType { get; set; }

        [NameInMap("RenewalPeriodUnit")]
        [Validation(Required=false)]
        public string RenewalPeriodUnit { get; set; }

        [NameInMap("RenewalStatus")]
        [Validation(Required=true)]
        public string RenewalStatus { get; set; }

    }

}
