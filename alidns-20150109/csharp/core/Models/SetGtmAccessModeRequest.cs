// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class SetGtmAccessModeRequest : TeaModel {
        [NameInMap("Lang")]
        [Validation(Required=false)]
        public string Lang { get; set; }

        [NameInMap("StrategyId")]
        [Validation(Required=true)]
        public string StrategyId { get; set; }

        [NameInMap("AccessMode")]
        [Validation(Required=true)]
        public string AccessMode { get; set; }

    }

}
