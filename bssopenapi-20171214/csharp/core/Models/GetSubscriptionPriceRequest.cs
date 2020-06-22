// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class GetSubscriptionPriceRequest : TeaModel {
        [NameInMap("ServicePeriodUnit")]
        [Validation(Required=false)]
        public string ServicePeriodUnit { get; set; }

        [NameInMap("SubscriptionType")]
        [Validation(Required=true)]
        public string SubscriptionType { get; set; }

        [NameInMap("ProductCode")]
        [Validation(Required=true)]
        public string ProductCode { get; set; }

        [NameInMap("OrderType")]
        [Validation(Required=true)]
        public string OrderType { get; set; }

        [NameInMap("ServicePeriodQuantity")]
        [Validation(Required=false)]
        public int? ServicePeriodQuantity { get; set; }

        [NameInMap("ProductType")]
        [Validation(Required=false)]
        public string ProductType { get; set; }

        [NameInMap("Region")]
        [Validation(Required=false)]
        public string Region { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=false)]
        public string InstanceId { get; set; }

        [NameInMap("ModuleList")]
        [Validation(Required=true)]
        public List<GetSubscriptionPriceRequestModuleList> ModuleList { get; set; }
        public class GetSubscriptionPriceRequestModuleList : TeaModel {
            [NameInMap("ModuleCode")]
            [Validation(Required=true)]
            public string ModuleCode { get; set; }

            [NameInMap("Config")]
            [Validation(Required=true)]
            public string Config { get; set; }

            [NameInMap("ModuleStatus")]
            [Validation(Required=false)]
            public int? ModuleStatus { get; set; }

            [NameInMap("Tag")]
            [Validation(Required=false)]
            public string Tag { get; set; }

        }

        [NameInMap("Quantity")]
        [Validation(Required=false)]
        public int? Quantity { get; set; }

    }

}
