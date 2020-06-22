// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class UnsubscribeBillToOSSRequest : TeaModel {
        [NameInMap("SubscribeType")]
        [Validation(Required=true)]
        public string SubscribeType { get; set; }

        [NameInMap("MultAccountRelSubscribe")]
        [Validation(Required=false)]
        public string MultAccountRelSubscribe { get; set; }

    }

}
