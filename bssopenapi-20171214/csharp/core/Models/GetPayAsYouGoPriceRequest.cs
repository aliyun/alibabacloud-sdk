// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class GetPayAsYouGoPriceRequest : TeaModel {
        [NameInMap("ProductCode")]
        [Validation(Required=true)]
        public string ProductCode { get; set; }

        [NameInMap("ProductType")]
        [Validation(Required=false)]
        public string ProductType { get; set; }

        [NameInMap("SubscriptionType")]
        [Validation(Required=true)]
        public string SubscriptionType { get; set; }

        [NameInMap("Region")]
        [Validation(Required=false)]
        public string Region { get; set; }

        [NameInMap("ModuleList")]
        [Validation(Required=true)]
        public List<GetPayAsYouGoPriceRequestModuleList> ModuleList { get; set; }
        public class GetPayAsYouGoPriceRequestModuleList : TeaModel {
            [NameInMap("ModuleCode")]
            [Validation(Required=true)]
            public string ModuleCode { get; set; }

            [NameInMap("Config")]
            [Validation(Required=true)]
            public string Config { get; set; }

            [NameInMap("PriceType")]
            [Validation(Required=true)]
            public string PriceType { get; set; }

        }

    }

}
