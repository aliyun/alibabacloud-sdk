// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class ModifyAccountPasswordRequest : TeaModel {
        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("AccountName")]
        [Validation(Required=true)]
        public string AccountName { get; set; }

        [NameInMap("NewAccountPassword")]
        [Validation(Required=true)]
        public string NewAccountPassword { get; set; }

    }

}
