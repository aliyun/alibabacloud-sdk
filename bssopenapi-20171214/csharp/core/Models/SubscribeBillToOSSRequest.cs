// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class SubscribeBillToOSSRequest : TeaModel {
        [NameInMap("SubscribeBucket")]
        [Validation(Required=true)]
        public string SubscribeBucket { get; set; }

        [NameInMap("SubscribeType")]
        [Validation(Required=false)]
        public string SubscribeType { get; set; }

        [NameInMap("MultAccountRelSubscribe")]
        [Validation(Required=false)]
        public string MultAccountRelSubscribe { get; set; }

        [NameInMap("BucketOwnerId")]
        [Validation(Required=false)]
        public long BucketOwnerId { get; set; }

    }

}
