// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmInstanceStatusResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AddrNotAvailableNum")]
        [Validation(Required=true)]
        public int? AddrNotAvailableNum { get; set; }

        [NameInMap("AddrPoolNotAvailableNum")]
        [Validation(Required=true)]
        public int? AddrPoolNotAvailableNum { get; set; }

        [NameInMap("SwitchToFailoverStrategyNum")]
        [Validation(Required=true)]
        public int? SwitchToFailoverStrategyNum { get; set; }

        [NameInMap("StrategyNotAvailableNum")]
        [Validation(Required=true)]
        public int? StrategyNotAvailableNum { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("StatusReason")]
        [Validation(Required=true)]
        public string StatusReason { get; set; }

    }

}
