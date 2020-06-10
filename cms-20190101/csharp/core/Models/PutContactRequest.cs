// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutContactRequest : TeaModel {
        [NameInMap("ContactName")]
        [Validation(Required=true)]
        public string ContactName { get; set; }

        [NameInMap("Describe")]
        [Validation(Required=true)]
        public string Describe { get; set; }

        [NameInMap("Channels")]
        [Validation(Required=true)]
        public PutContactRequestChannels Channels { get; set; }
        public class PutContactRequestChannels : TeaModel {
            [NameInMap("SMS")]
            [Validation(Required=false)]
            public string SMS { get; set; }
            [NameInMap("Mail")]
            [Validation(Required=false)]
            public string Mail { get; set; }
            [NameInMap("AliIM")]
            [Validation(Required=false)]
            public string AliIM { get; set; }
            [NameInMap("DingWebHook")]
            [Validation(Required=false)]
            public string DingWebHook { get; set; }
        };

    }

}
