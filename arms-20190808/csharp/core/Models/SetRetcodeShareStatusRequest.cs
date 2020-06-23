// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SetRetcodeShareStatusRequest : TeaModel {
        [NameInMap("Pid")]
        [Validation(Required=true)]
        public string Pid { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public bool? Status { get; set; }

    }

}
