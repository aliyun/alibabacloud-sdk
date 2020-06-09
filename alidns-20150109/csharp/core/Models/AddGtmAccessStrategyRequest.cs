// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class AddGtmAccessStrategyRequest : TeaModel {
        [NameInMap("Lang")]
        [Validation(Required=false)]
        public string Lang { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("StrategyName")]
        [Validation(Required=true)]
        public string StrategyName { get; set; }

        [NameInMap("DefaultAddrPoolId")]
        [Validation(Required=true)]
        public string DefaultAddrPoolId { get; set; }

        [NameInMap("FailoverAddrPoolId")]
        [Validation(Required=true)]
        public string FailoverAddrPoolId { get; set; }

        [NameInMap("AccessLines")]
        [Validation(Required=true)]
        public string AccessLines { get; set; }

    }

}
