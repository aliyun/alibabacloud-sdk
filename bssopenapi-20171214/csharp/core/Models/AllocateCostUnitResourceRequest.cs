// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class AllocateCostUnitResourceRequest : TeaModel {
        [NameInMap("FromUnitUserId")]
        [Validation(Required=true)]
        public long FromUnitUserId { get; set; }

        [NameInMap("FromUnitId")]
        [Validation(Required=true)]
        public long FromUnitId { get; set; }

        [NameInMap("ResourceInstanceList")]
        [Validation(Required=true)]
        public List<AllocateCostUnitResourceRequestResourceInstanceList> ResourceInstanceList { get; set; }
        public class AllocateCostUnitResourceRequestResourceInstanceList : TeaModel {
            [NameInMap("ResourceUserId")]
            [Validation(Required=true)]
            public long ResourceUserId { get; set; }

            [NameInMap("ResourceId")]
            [Validation(Required=true)]
            public string ResourceId { get; set; }

            [NameInMap("CommodityCode")]
            [Validation(Required=true)]
            public string CommodityCode { get; set; }

            [NameInMap("ApportionCode")]
            [Validation(Required=false)]
            public string ApportionCode { get; set; }

        }

        [NameInMap("ToUnitUserId")]
        [Validation(Required=true)]
        public long ToUnitUserId { get; set; }

        [NameInMap("ToUnitId")]
        [Validation(Required=true)]
        public long ToUnitId { get; set; }

    }

}
