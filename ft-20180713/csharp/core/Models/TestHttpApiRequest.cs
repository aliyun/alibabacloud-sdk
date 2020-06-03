// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ft20180713.Models
{
    public class TestHttpApiRequest : TeaModel {
        [NameInMap("StringValue")]
        [Validation(Required=false)]
        public Dictionary<string, string> StringValue { get; set; }

        [NameInMap("DefaultValue")]
        [Validation(Required=false)]
        public Dictionary<string, string> DefaultValue { get; set; }

        [NameInMap("OtherParam")]
        [Validation(Required=false)]
        public Dictionary<string, string> OtherParam { get; set; }

        [NameInMap("BooleanParam")]
        [Validation(Required=false)]
        public bool? BooleanParam { get; set; }

    }

}
